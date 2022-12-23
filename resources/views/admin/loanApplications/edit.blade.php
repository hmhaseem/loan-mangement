@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.loanApplication.title_singular') }}
        </div>
        <div class="container">
            <div id="add-loan" class="content">
                <form method="POST" action="{{ route('admin.loan-applications.update', [$loanApplication->id]) }}">
                    @method('PUT')
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="required form-label"
                                for="loan_amount">{{ trans('cruds.loanApplication.fields.loan_amount') }}</label>
                            <input class="form-control {{ $errors->has('loan_amount') ? 'is-invalid' : '' }}" type="number"
                                name="loan_amount" id="loan_amount"
                                value="{{ old('loan_amount', $loanApplication->loan_amount) }}" step="0.01" required
                                maxlength="20">
                            @if ($errors->has('loan_amount'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('loan_amount') }}
                                </div>
                            @endif

                            <input type="hidden" value="{{$chargers->insurance_charge}}" name="insurance_charge" id="insurance_charge">
                                <input type="hidden" value="{{$chargers->document_charge}}" name="document_charge" id="document_charge">
                        </div>

                        <div class="col-sm-6">
                            <label class="required form-label" for="term_type">Term type</label>
                            <select name="term_type" class="form-control select2" id="term_type">
                                <option value="0">Select Type </option>
                                @foreach ($loanTypes as $loanTypes)
                                 <option value="{{ $loanTypes->product_name }}"
                                        data-interest="{{ $loanTypes->interest_rate }}"
                                        @if ($loanApplication->term_type == $loanTypes->product_name) selected @endif>
                                        {{ $loanTypes->product_name }} </option>
                                @endforeach
                            </select>
                            @if ($errors->has('term_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('term_type') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-6">
                            <label class="required form-label" for="loan_term">Loan Term </label>
                            <select name="loan_term" class="form-control select2" id="loan_term">
                                <option value="0">Select Term </option>
                                @foreach ($loarnTerms as $term)
                                    <option value="{{ $term }}" @if ($loanApplication->loan_term == $term) selected @endif>
                                        {{ $term }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('loan_term'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('loan_term') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-6">
                            <label class="required form-label" for="interest">Interest</label>
                            <input class="form-control {{ $errors->has('interest') ? 'is-invalid' : '' }}" readonly
                                type="number" name="interest" id="interest"
                                value="{{ old('interest', $loanApplication->interest) }}" step="0.01" required>
                            @if ($errors->has('interest'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('interest') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-6">
                            <label class="required form-label" for="total_amount">Total Amount With Intrest</label>
                            <input class="form-control {{ $errors->has('total_amount') ? 'is-invalid' : '' }}" readonly
                                type="number" name="total_amount" id="total_amount"
                                value="{{ old('total_amount', $loanApplication->total_amount) }}" step="0.01" required>
                            @if ($errors->has('total_amount'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('total_amount') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-6">
                            <label class="required form-label" for="weekly_pay">Weekly / Monthly Pay</label>
                            <input class="form-control {{ $errors->has('weekly_pay') ? 'is-invalid' : '' }}" readonly
                                type="number" name="weekly_pay" id="weekly_pay"
                                value="{{ old('weekly_pay', $loanApplication->weekly_pay) }}" step="0.01" required>
                            @if ($errors->has('weekly_pay'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('weekly_pay') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label class="required" for="branch">Loan purpose </label>
                            <input class="form-control {{ $errors->has('loan_purpose') ? 'is-invalid' : '' }}"
                                type="text" name="loan_purpose" id="loan_purpose"
                                value="{{ old('loan_purpose', $loanApplication->loan_purpose) }}" required maxlength="20">
                            @if ($errors->has('loan_purpose'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('loan_purpose') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-12 d-flex justify-content-between">
                            <button class="btn btn-success " type="submit">Update</button>

                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            let loanAmount = 0;
            let intrestRate = 0;
            let totalAmount = 0;
            let weeklyPay = 0;

            $("#loan_amount").keyup(function(event) {
                loanAmount = $('#loan_amount').val();
                getCalculate();
            });


            $('#term_type').on('change', function() {
                getCalculate();
            });

            $('#loan_term').on('change', function() {
                getCalculate();
            });

            function getCalculate() {
                let interest = $('#term_type').find('option').filter(':selected').data('interest');
                let term = $('#loan_term').find('option').filter(':selected').text();
                let insurance_charge = $('#insurance_charge').val();
                let document_charge = $('#document_charge').val();
                let intrestRate = loanAmount * (interest / 100) * term;
                let totalAmount = (+loanAmount + +intrestRate + +insurance_charge + +document_charge);
                let weeklyPay = totalAmount / term;
                $("#interest").val(intrestRate.toFixed(2));
                $('#total_amount').val(totalAmount.toFixed(2));
                $('#weekly_pay').val(weeklyPay.toFixed(2));

            }






        })
    </script>
@endsection
