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
                    <th>Deposit Amount</th>
                    <th>Remarks</th>
                    <th>Auth name</th>
                    <th>Date</th>

                </thead>
                <tbody>
                    @foreach ($accounts as $item)
                        <tr>
                            <td>{{ $item->id }}
                            <td>{{ $item->payment_amount }}</td>
                            <td>{{ $item->remarks }}</td>
                            <td>{{ $item->created_by['name'] }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="mt-10">
                Total Deposit Amount : {{ $total }}
            </div>
           
        </div>


    </div>
@endsection
