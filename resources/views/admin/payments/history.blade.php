@extends('layouts.admin')
@section('content')
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
    <div class="card">
        <div class="card-header">
            Payment History
        </div>

        <div class="card-body">
            <div class="form-group">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <td>
                                Amount
                            </td>
                            <td>
                                Remarks
                            </td>
                            <td>
                                Date and Time
                            </td>
                            <td>
                                Field Officer
                            </td>
                        </tr>
                        <thead>

                        <tbody>
                            @foreach ($loan as $item)
                                @foreach ($item->payments as $payment)
                                    <tr>
                                        <td>
                                            {{ $payment->id }}
                                        </td>
                                        <td>
                                            {{ $payment->payment_amount }}
                                        </td>
                                        <td>


                                            {{ $payment->remarks }}


                                        </td>

                                        <td>
                                            {{ $payment->created_at }}
                                        </td>
                                        <td>
                                            {{ $payment->created_by['name'] }}
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- {{ $item->customer->created_by->name }}  --}}
                            @endforeach

                        </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection
