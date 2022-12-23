@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.loanApplication.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">

            <table class="table table-bordered table-striped mt-10 ">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.loanApplication.fields.id') }}
                        </th>
                        <td>
                            {{ $loanApplication->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>

                            {{ $loanApplication->customer->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Address
                        </th>
                        <td>
                            {{ $loanApplication->customer->address }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.loanApplication.fields.loan_amount') }}
                        </th>
                        <td>
                            {{ $loanApplication->loan_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Intrest
                        </th>
                        <td>
                            {{ $loanApplication->interest }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Loan Amount With Intrest
                        </th>
                        <td>
                            {{ $loanApplication->total_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.loanApplication.fields.description') }}
                        </th>
                        <td>
                            {{ $loanApplication->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.loanApplication.fields.status') }}
                        </th>
                        <td>
                            {{ $user->is_user && $loanApplication->status_id ? $defaultStatus->name : $loanApplication->status->name }}

                        </td>
                    </tr>
                    @if($user->is_admin)
                    <tr>
                        <th>
                            {{ trans('cruds.loanApplication.fields.analyst') }}
                        </th>
                        <td>
                            {{ $loanApplication->analyst->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.loanApplication.fields.cfo') }}
                        </th>
                        <td>
                            {{ $loanApplication->cfo->name ?? '' }}
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>

         

            <div class="form-group mt-10">
                @if($user->is_admin && in_array($loanApplication->status_id, [1, 3, 4]))
                <a class="btn btn-success" href="{{ route('admin.loan-applications.showSend', $loanApplication->id) }}">
                    Send to manager

                </a>
                @elseif(($user->is_analyst && $loanApplication->status_id == 2) || ($user->is_cfo &&
                $loanApplication->status_id ==
                5))
                <a class="btn btn-success"
                    href="{{ route('admin.loan-applications.showAnalyze', $loanApplication->id) }}">
                    Submit manager
                </a>
                @endif

                @if(Gate::allows('loan_application_edit') && in_array($loanApplication->status_id, [6,7]))
                <a class="btn btn-info" href="{{ route('admin.loan-applications.edit', $loanApplication->id) }}">
                    {{ trans('global.edit') }}
                </a>
                @endif

                @can('loan_application_delete')
                <form action="{{ route('admin.loan-applications.destroy', $loanApplication->id) }}" method="POST"
                    onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-danger" value="{{ trans('global.delete') }}">
                </form>
                @endcan
            </div>

        </div>
    </div>
</div>



@endsection