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
use App\Payments;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('payments_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        $loanApplications = LoanApplication::with('status', 'analyst', 'cfo', 'customer')
            ->get();
        $defaultStatus    = Status::find(1);
        $user             = auth()->user();

        return view('admin.payments.index', compact('loanApplications', 'defaultStatus', 'user'));
    }

    public function create()
    {
        abort_if(Gate::denies('payments_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $loanTypes = InterestType::all();
        $incomeTypes = IncomeType::all();
        $loarnTerms = [];
        for ($i = 1; $i <= 48; $i++) {
            $loarnTerms[$i] = $i;
        }

        return view('admin.payments.create', compact('loarnTerms', 'loanTypes', 'incomeTypes'));
    }

    public function store(StoreLoanApplicationRequest $request)
    {
        $date = Carbon::now();
        $requestData = $request->all();
        $loanApplication = $request['loan_id'];

        $loan =   LoanApplication::whereId($loanApplication)->with('payments')->first();
        $total = 0;
        foreach ($loan->payments as $payment) {
            $total += $payment->payment_amount;
        }
        $balance = $loan->loan_amount - $total;
        if ($balance == 0 && $balance) {
            $loan->update([
                'status_id' => 10
            ]);
        }
        if ($balance) {

            $payments = Payments::create($requestData);

            return redirect()->back()->with('success', 'Payment Added !');
        } else {
            $payments = Payments::create($requestData);

            return redirect()->back()->with('warning', 'All the payment completd / no balance !');
        }
    }

    public function edit(LoanApplication $loanApplication)
    {
        abort_if(
            Gate::denies('payments_edit'),
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

        return view('admin.payments.edit', compact('statuses', 'loanApplication', 'loanTypes', 'incomeTypes', 'loarnTerms'));
    }

    public function update(UpdateLoanApplicationRequest $request, LoanApplication $loanApplication)
    {
        $loanApplication->update($request->all());

        return redirect()->route('admin.payments.index');
    }

    public function show($loanApplication)
    {
        abort_if(Gate::denies('payments_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $loan =   LoanApplication::whereId($loanApplication)->with('payments')->first();
        return view('admin.payments.show', compact('loanApplication', 'defaultStatus', 'user', 'logs', 'loan'));
    }

    public function destroy(LoanApplication $loanApplication)
    {
        abort_if(Gate::denies('payments_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loanApplication->delete();

        return back();
    }

    public function massDestroy(MassDestroyLoanApplicationRequest $request)
    {
        LoanApplication::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
