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
                    <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.comment.fields.id') }}
                            </th>
                            <td>
                                {{ $loan->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Payment History
                            </th>
                            <td>
                                <?php $total = 0; ?>
                                @if ($loan->payments->count() > 0)
                                    @foreach ($loan->payments as $payment)
                                        <div> {{ $payment->payment_amount }}</div>
                                        <?php $total += $payment->payment_amount; ?>
                                    @endforeach
                                    <a href="{{ route('admin.payments.history', [$loan->id]) }}">More
                                        Details</button>
                                    @else
                                        <p class="no-records"> There is no payment ! </p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Total Payment Made
                            </th>
                            <td>
                                <?php echo number_format((float) $total, 2, '.', ''); ?>

                            </td>
                        </tr>
                        <tr>
                            <th>
                                Balance Payment
                            </th>
                            <td>
                                <?php
                                $finalTotal = $loan->total_amount + $charges->insurance_charge + $charges->document_charge;
                                $balance = $finalTotal - $total; ?>
                                <?php echo number_format((float) $balance, 2, '.', ''); ?>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-10">
                    <form method="POST" action="{{ route('admin.payments.store') }}">

                        @csrf
                        <div class="row g-3">


                            <div class="col-sm-6">
                                <label class="required form-label" for="payment_amount">Payment Amount</label>
                                <input class="form-control {{ $errors->has('payment_amount') ? 'is-invalid' : '' }}"
                                    type="number" name="payment_amount" id="payment_amount"
                                    value="{{ old('payment_amount', '') }}" step="0.01" required maxlength="20"
                                    max="{{ $balance }}">
                                @if ($errors->has('payment_amount'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('payment_amount') }}
                                    </div>
                                @endif


                                <input type="hidden" value="{{ $loan->id }}" name="loan_id" id="loan_id">
                            </div>

                            <div class="col-sm-6">
                                <label class="required form-label" for="remarks">Remarks</label>
                                <input class="form-control {{ $errors->has('remarks') ? 'is-invalid' : '' }}"
                                    type="text" name="remarks" id="remarks" value="{{ old('remarks', '') }}"
                                    maxlength="100">
                                @if ($errors->has('remarks'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('remarks') }}
                                    </div>
                                @endif
                            </div>



                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-success btn-submit" type="submit">Make the Payment</button>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
