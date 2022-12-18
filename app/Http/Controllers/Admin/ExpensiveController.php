<?php

namespace App\Http\Controllers\Admin;

use App\Bank;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLoanApplicationRequest;
use App\Http\Requests\StoreLoanApplicationRequest;
use App\Http\Requests\UpdateLoanApplicationRequest;
use App\CustomerApplication;
use App\Http\Requests\StoreCustomerApplicationRequest;
use App\Role;
use App\Services\AuditLogService;
use App\Status;
use App\Accounts;
use Bugsnag\DateTime\Date;
use Gate;
use App\IncomeType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\ExpensiveType;

class ExpensiveController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('expensive_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $expensive = Accounts::where('status', '=', '14')->get();

        return view('admin.expensive.index', compact('expensive'));
    }

    public function create()
    {
        abort_if(Gate::denies('expensive_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $expensiveType =  ExpensiveType::get();
        return view('admin.expensive.create', compact('expensiveType'));
    }


    public function store(StoreCustomerApplicationRequest $request)
    {

        $requestData = $request->all();
        $requestData['status'] = 14;
        Accounts::create($requestData);
        return redirect()->route('admin.expensive.index');
    }

    public function edit($id)
    {
        abort_if(
            Gate::denies('expensive_edit'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden'
        );
 
         


        $expensiveType = ExpensiveType::get();
        $accounts =  Accounts::where('id', '=', $id)->first();



        return view('admin.expensive.edit', compact('accounts', 'expensiveType'));
    }

    public function update(Request $request, $id)
    {
        $accounts =  Accounts::where('id', '=', $id)->first();
        $accounts->update($request->all());

        return redirect()->route('admin.expensive.index');
    }

    public function show(CustomerApplication $customerApplication)
    {
        abort_if(Gate::denies('loan_application_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerApplication->load('status', 'analyst', 'cfo', 'created_by', 'logs.user', 'comments');
        $defaultStatus = Status::find(1);
        $user          = auth()->user();
        //  $logs          = AuditLogService::generateLogs($customerApplication);

        return view('admin.expensive.show', compact('loanApplication', 'defaultStatus', 'user', 'logs'));
    }

    public function destroy(CustomerApplication $loanApplication)
    {
        abort_if(Gate::denies('loan_application_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loanApplication->delete();

        return back();
    }

    public function massDestroy(MassDestroyLoanApplicationRequest $request)
    {
        CustomerApplication::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
