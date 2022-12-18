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
                    <th>Status </th>
                    <th>Date</th>

                </thead>
                <tbody>
                    @foreach ($accounts as $item)
                        <tr>
                            <td>{{ $item->id }}
                            <td>{{ $item->payment_amount }}</td>
                            <td>{{ $item->remarks }}</td>
                            <td>{{ $item->created_by['name'] }}</td>
                            <td>
                                <span
                                    class="badge
                                    
                                      @if ($item->statusBy['name'] == 'Deposited') bg-label-primary @endif 
                                      @if ($item->statusBy['name'] == 'Income from loan') bg-label-success @endif 
                                      @if ($item->statusBy['name'] == 'Expensive from loan') bg-label-danger @endif 
                                      @if ($item->statusBy['name'] == 'Other Expensive') bg-label-warning @endif 
                                    ">{{ $item->statusBy['name'] }}</span>


                            </td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="mt-10">
                <strong>Total Deposit Amount :</strong> {{ number_format($total, 2) }}
            </div>

        </div>


    </div>
@endsection
