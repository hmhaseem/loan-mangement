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
use App\InterestType;
use Bugsnag\DateTime\Date;
use Gate;
use App\IncomeType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccountsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('customer_application_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerApplications = CustomerApplication::with('status', 'analyst', 'cfo')->get();
        $defaultStatus    = Status::find(1);
        $user             = auth()->user();

        return view('admin.customerApplications.index', compact('customerApplications', 'defaultStatus', 'user'));
    }

    public function create()
    {
        abort_if(Gate::denies('customer_application_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $loanTypes = InterestType::all();
        $incomeTypes = IncomeType::all();
        $loarnTerms = [];
        for ($i = 1; $i <= 48; $i++) {
            $loarnTerms[$i] = $i;
        }

        return view('admin.customerApplications.create', compact('loarnTerms', 'loanTypes', 'incomeTypes'));
    }

    public function store(StoreCustomerApplicationRequest $request)
    {

        $requestData = $request->all();
        $loanApplication = CustomerApplication::create($requestData);

        return redirect()->route('admin.customer-applications.index');
    }

    public function edit(CustomerApplication $customerApplication)
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

        $customerApplication->load('status', 'bank');

        return view('admin.customerApplications.edit', compact('statuses', 'customerApplication', 'loanTypes', 'incomeTypes', 'loarnTerms'));
    }

    public function update(StoreCustomerApplicationRequest $request, CustomerApplication $customerApplication)
    {
        $customerApplication->update($request->all());

        return redirect()->route('admin.customer-applications.index');
    }

    public function show(CustomerApplication $customerApplication)
    {
        abort_if(Gate::denies('loan_application_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerApplication->load('status', 'analyst', 'cfo', 'created_by', 'logs.user', 'comments');
        $defaultStatus = Status::find(1);
        $user          = auth()->user();
        //  $logs          = AuditLogService::generateLogs($customerApplication);

        return view('admin.loanApplications.show', compact('loanApplication', 'defaultStatus', 'user', 'logs'));
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
