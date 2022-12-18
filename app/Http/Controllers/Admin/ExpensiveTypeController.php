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
use App\ExpensiveType;

class ExpensiveTypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('expensive_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $expensiveType = ExpensiveType::all();
        return view('admin.expensive-type.index', compact('expensiveType'));
    }

    public function create()
    {
        abort_if(Gate::denies('expensive_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.expensive-type.create');
    }


    public function store(Request $request)
    {

        $requestData = $request->all();
        ExpensiveType::create($requestData);
        return redirect()->route('admin.expensive-type.index');
    }

    public function edit(ExpensiveType $expensiveType)
    {
        abort_if(
            Gate::denies('loan_application_edit'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden'
        );



        return view('admin.expensive-type.edit', compact('expensiveType'));
    }

    public function update(Request $request, ExpensiveType $expensiveType)
    {
        $expensiveType->update($request->all());

        return redirect()->route('admin.expensive-type.index');
    }

    public function show(ExpensiveType $expensiveType)
    {
        abort_if(Gate::denies('expensive_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //  $logs          = AuditLogService::generateLogs($customerApplication);

        return view('admin.expensive-type.show', compact('expensiveType'));
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
