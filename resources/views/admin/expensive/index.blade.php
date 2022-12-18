@extends('layouts.admin')
@section('content')
    @can('permission_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.expensive.create') }}">
                    Add Expensive
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            Expensive List
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Permission">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>Id</th>
                            <th>Amount</th>
                            <th>Remarks</th>
                            <th>Type</th>
                            <th>Auth name</th>
                            <th>Action </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expensive as $key => $item)
                            <tr data-entry-id="{{ $item->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $item->id ?? '' }}
                                </td>
                                <td>{{ $item->payment_amount }}</td>
                                <td>{{ $item->remarks }}</td>
                                <td>{{ $item->type['type'] }}</td>
                                <td>{{ $item->created_by['name'] }}</td>
                                <td>
                                    @can('expensive_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.expensive.show', $item->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('expensive_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.expensive.edit', $item->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('expensive_delete')
                                        <form action="{{ route('admin.expensive.destroy', $item->id) }}" method="POST"
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
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('permission_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.permissions.massDestroy') }}",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).nodes(), function(entry) {
                            return $(entry).data('entry-id')
                        });

                        if (ids.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}')

                            return
                        }

                        if (confirm('{{ trans('global.areYouSure') }}')) {
                            $.ajax({
                                    headers: {
                                        'x-csrf-token': _token
                                    },
                                    method: 'POST',
                                    url: config.url,
                                    data: {
                                        ids: ids,
                                        _method: 'DELETE'
                                    }
                                })
                                .done(function() {
                                    location.reload()
                                })
                        }
                    }
                }
                dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            let table = $('.datatable-Permission:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })
    </script>
@endsection
