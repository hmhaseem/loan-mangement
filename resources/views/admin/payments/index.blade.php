@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.payments.create') }}">
                Add the payment
            </a>
        </div>
    </div>
    <div class="card">

        <div class="card-header">
            Current Approved Loan List
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-LoanApplication">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.loanApplication.fields.id') }}
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Nic
                            </th>
                            <th>
                                {{ trans('cruds.loanApplication.fields.loan_amount') }}
                            </th>

                            <th>
                                {{ trans('cruds.loanApplication.fields.status') }}
                            </th>
                            @if ($user->is_admin)
                                <th>
                                    Operation Manager
                                </th>
                            @endif
                            <th>
                                Loan type / Loan Term
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($loanApplications as $key => $loanApplication)
                            <tr data-entry-id="{{ $loanApplication->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $loanApplication->id ?? '' }}
                                </td>
                                <td>
                                    {{ $loanApplication->customer->name ?? '' }}
                                </td>
                                <td>
                                    {{ $loanApplication->customer->nic ?? '' }}
                                </td>

                                <td>
                                    {{ $loanApplication->loan_amount ?? '' }}
                                </td>

                                <td>
                                    {{ $user->is_user && $loanApplication->status_id < 8 ? $defaultStatus->name : $loanApplication->status->name }}
                                </td>

                                @if ($user->is_admin)
                                    <td>
                                        {{ $loanApplication->analyst->name ?? '' }}
                                    </td>
                                @endif
                                <td>
                                    {{ $loanApplication->term_type }} / {{ $loanApplication->loan_term }}
                                </td>
                                <td>


                                    @can('loan_application_show')
                                        <a class="btn btn-xs btn-primary"
                                            href="{{ route('admin.payments.show', $loanApplication->id) }}">
                                            Pay
                                        </a>
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
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    @parent

    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('loan_application_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.loan-applications.massDestroy') }}",
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
            let table = $('.datatable-LoanApplication:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })
    </script>
@endsection
