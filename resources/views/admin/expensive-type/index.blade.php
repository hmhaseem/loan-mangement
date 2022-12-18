@extends('layouts.admin')
@section('content')
    @can('permission_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.expensive-type.create') }}">
                    {{ trans('global.add') }} Expensive type
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            Expensive Type List
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Permission">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                Id
                            </th>
                            <th>
                                Expensive Type
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expensiveType as $key => $type)
                            <tr data-entry-id="{{ $type->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $type->id ?? '' }}
                                </td>
                                <td>
                                    {{ $type->type ?? '' }}
                                </td>
                                <td>
                                    @can('permission_show')
                                        <a class="btn btn-xs btn-primary"
                                            href="{{ route('admin.expensive-type.show', $type->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('permission_edit')
                                        <a class="btn btn-xs btn-info"
                                            href="{{ route('admin.expensive-type.edit', $type->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('permission_delete')
                                        <form action="{{ route('admin.expensive-type.destroy', $type->id) }}" method="POST"
                                            onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger"
                                                value="{{ trans('global.delete') }}">
                                        </form>
                                    @endcan

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
