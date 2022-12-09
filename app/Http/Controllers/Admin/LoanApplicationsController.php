<?php

namespace App\Http\Controllers\Admin;

use App\Bank;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLoanApplicationRequest;
use App\Http\Requests\StoreLoanApplicationRequest;
use App\Http\Requests\UpdateLoanApplicationRequest;
use App\LoanApplication;
use App\CustomerApplication;
use App\Role;
use App\Services\AuditLogService;
use App\Status;
use App\InterestType;
use Bugsnag\DateTime\Date;
use Gate;
use App\IncomeType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use DB;

class LoanApplicationsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('loan_application_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //  $loanApplications = LoanApplication::with('status', 'analyst', 'cfo')->get();
        $loanApplications = LoanApplication::with('status', 'analyst', 'cfo', 'customer')
            // ->rightJoin('customer_applications', 'customer_applications.id', '=', 'loan_applications.customer_id')
            // ->rightJoin('bank', 'bank.id', '=', 'customer_applications.bank_id')
            // ->select('customer_applications.*', 'loan_applications.*', 'bank.name as bank_name', 'bank.account_no as bank_account_no', 'bank.remarks as remarks', 'bank.branch as branch')
            ->get();


        $defaultStatus    = Status::find(1);
        $user             = auth()->user();

        return view('admin.loanApplications.index', compact('loanApplications', 'defaultStatus', 'user'));
    }

    public function create()
    {
        abort_if(Gate::denies('loan_application_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $loanTypes = InterestType::all();
        $incomeTypes = IncomeType::all();
        $loarnTerms = [];
        for ($i = 1; $i <= 48; $i++) {
            $loarnTerms[$i] = $i;
        }

        return view('admin.loanApplications.create', compact('loarnTerms', 'loanTypes', 'incomeTypes'));
    }

    public function store(StoreLoanApplicationRequest $request)
    {
        $date = Carbon::now();
        $requestData = $request->all();
        $data =   LoanApplication::where('loan_applications.customer_id', '=', $request->customer_id)
            ->rightJoin('customer_applications', 'customer_applications.id', '=', 'loan_applications.customer_id')
            ->rightJoin('bank', 'bank.id', '=', 'customer_applications.bank_id')
            ->rightJoin('statuses', 'statuses.id', '=', 'loan_applications.status_id')
            ->select('customer_applications.*', 'loan_applications.*', 'statuses.name as status*', 'bank.name as bank_name', 'bank.account_no as bank_account_no', 'bank.remarks as remarks', 'bank.branch as branch')
            ->first();


        if ($data['status'] == "Payment Completed" || $data['status'] == null) {
            $loanApplication = LoanApplication::create($requestData);

            return redirect()->route('admin.loan-applications.index')->withSuccess("Loan Created successfully");
        } else {
            return \Redirect::back()->withWarning('This id already have a loans');
            //  return redirect()->route('admin.loan-applications.index')->with("Already have a pending loan neet to settle the arreast");
        }
    }

    public function edit(LoanApplication $loanApplication)
    {
        abort_if(
            Gate::denies('loan_application_edit'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden'
        );

        $loanTypes = InterestType::all();
        $incomeTypes = IncomeType::all();
        $loarnTerms = [];
        for ($i = 1; $i <= 48; $i++) {
            $loarnTerms[$i] = $i;
        }
        $statuses = Status::whereIn('id', [1, 8, 9])->pluck('name', 'id');

        $loanApplication->load('status');

        return view('admin.loanApplications.edit', compact('statuses', 'loanApplication', 'loanTypes', 'incomeTypes', 'loarnTerms'));
    }

    public function update(UpdateLoanApplicationRequest $request, LoanApplication $loanApplication)
    {
        $loanApplication->update($request->all());
        return redirect()->route('admin.loan-applications.index');
    }

    public function show(LoanApplication $loanApplication)
    {
        abort_if(Gate::denies('loan_application_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loanApplication->load('status', 'analyst', 'cfo', 'created_by', 'logs.user', 'comments');
        $defaultStatus = Status::find(1);
        $user          = auth()->user();
        $logs          = AuditLogService::generateLogs($loanApplication);

        return view('admin.loanApplications.show', compact('loanApplication', 'defaultStatus', 'user', 'logs'));
    }

    public function destroy(LoanApplication $loanApplication)
    {
        abort_if(Gate::denies('loan_application_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loanApplication->delete();

        return back();
    }

    public function massDestroy(MassDestroyLoanApplicationRequest $request)
    {
        LoanApplication::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function showSend(LoanApplication $loanApplication)
    {

        //abort_if(!auth()->user()->is_admin, Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($loanApplication->status_id == 1 && !empty(Role::find(7)->users)) {
            $role = 'Operation Manager';
            $users = Role::find(7)->users->pluck('name', 'id');
        } else {
            abort(Response::HTTP_ACCEPTED, 'Operation Manager user not found');
        }

        return view('admin.loanApplications.send', compact('loanApplication', 'role', 'users'));
    }

    public function send(Request $request, LoanApplication $loanApplication)
    {

        //  abort_if(!auth()->user()->is_admin, Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($loanApplication->status_id == 1) {
            $column = 'analyst_id';
            $users  = Role::find(7)->users->pluck('id');
            $status = 2;
        } else {
            abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
        }

        $request->validate([
            'user_id' => 'required|in:' . $users->implode(',')
        ]);

        $loanApplication->update([
            $column => $request->user_id,
            'status_id' => $status
        ]);

        return redirect()->route('admin.loan-applications.index')->with('message', 'Loan application has been sent for Operation Manager');
    }

    public function showAnalyze(LoanApplication $loanApplication)
    {
        $user = auth()->user();

        abort_if(
            (!$user->is_analyst || $loanApplication->status_id != 2) && (!$user->is_cfo || $loanApplication->status_id != 5),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden'
        );

        $customerDetails = LoanApplication::where('loan_applications.id', '=', $loanApplication->id)
            ->rightJoin('customer_applications', 'customer_applications.id', '=', 'loan_applications.customer_id')
            ->rightJoin('bank', 'bank.id', '=', 'customer_applications.bank_id')
            ->select('customer_applications.*', 'loan_applications.*', 'bank.name as bank_name', 'bank.account_no as bank_account_no', 'bank.remarks as remarks', 'bank.branch as branch')
            ->first();


        return view('admin.loanApplications.analyze', compact('loanApplication', 'customerDetails'));
    }

    public function analyze(Request $request, LoanApplication $loanApplication)
    {
        $user = auth()->user();

        if ($user->is_analyst && $loanApplication->status_id == 2) {
            $status = $request->has('approve') ? 3 : 4;
        } else if ($user->is_cfo && $loanApplication->status_id == 5) {
            $status = $request->has('approve') ? 6 : 7;
        } else {
            abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
        }

        $request->validate([
            'comment_text' => 'required'
        ]);

        $loanApplication->comments()->create([
            'comment_text' => $request->comment_text,
            'user_id'      => $user->id
        ]);

        $loanApplication->update([
            'status_id' => $status
        ]);

        return redirect()->route('admin.loan-applications.index')->with('message', 'Analysis has been submitted');
    }

    public function retriveCustomerApplicationByNic(Request $request)
    {
        abort_if(
            Gate::denies('loan_application_access'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden'
        );

        $nic = $request['nic'];
        //   $customerDetails = CustomerApplication::where('nic', '=', $nic)->bank()->get();
        $customerDetails = CustomerApplication::where("customer_applications.nic", "=", $nic)
            ->rightJoin('bank', 'bank.id', '=', 'customer_applications.bank_id')
            ->select('customer_applications.*', 'bank.name as bank_name', 'bank.account_no as bank_account_no', 'bank.remarks as remarks', 'bank.branch as branch')
            ->first();

        if (!is_null($customerDetails['id'])) {
            return response()->json(array('data' => $customerDetails, 'message' => 'retrived list', 'status' => 'true'), 200);
        } else {
            return response()->json(array('data' => [], 'status' => 'false'), 200);
        }
    }
}
