@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Add Deposit
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

            <form action="{{ route('admin.accounts.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <label class="required form-label" for="payment_amount">Payment Amount</label>
                        <input class="form-control {{ $errors->has('payment_amount') ? 'is-invalid' : '' }}" type="number"
                            name="payment_amount" id="payment_amount" value="{{ old('payment_amount', '') }}" required
                            maxlength="20">
                        @if ($errors->has('payment_amount'))
                            <div class="invalid-feedback">
                                {{ $errors->first('payment_amount') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <label class="required form-label" for="remarks">Remarks</label>
                        <input class="form-control {{ $errors->has('remarks') ? 'is-invalid' : '' }}" type="text"
                            name="remarks" id="remarks" value="{{ old('remarks', '') }}" required maxlength="200">
                        @if ($errors->has('remarks'))
                            <div class="invalid-feedback">
                                {{ $errors->first('remarks') }}
                            </div>
                        @endif
                    </div>
                </div>

                <button class="btn btn-primary mt-10" type="submit"> Add the payment to account</button>
            </form>
        </div>


    </div>
@endsection
