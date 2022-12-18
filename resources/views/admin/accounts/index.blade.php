@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Account Managment
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @elseif(Session::has('warning'))
            <div class="alert alert-warning" role="alert">
                {{ Session::get('warning') }}
            </div>
            <!-- here to 'withWarning()' -->
        @endif
        <div class="card-body">
            <table class="table table-border">
                <thead>
                    <th>Id</th>
                    <th>Amount</th>
                    <th>Remarks</th>
                    <th>Auth name</th>

                    <th>Date</th>
                    <th>Action</th>

                </thead>
                <tbody>
                    @foreach ($accounts as $item)
                        <tr>
                            <td>{{ $item->id }}
                            <td>{{ $item->payment_amount }}</td>
                            <td>{{ $item->remarks }}</td>
                            <td>{{ $item->created_by['name'] }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                @can('accounts_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.accounts.show', $item->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('accounts_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.accounts.edit', $item->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('accounts_delete')
                                    <form action="{{ route('admin.accounts.destroy', $item->id) }}" method="POST"
                                        onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger"
                                            value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>


    </div>
@endsection
