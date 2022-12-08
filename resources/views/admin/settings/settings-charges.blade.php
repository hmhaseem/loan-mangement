@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Settings Chargers
        </div>
        <div class="container">
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
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.settings.charges.store') }}">
                @method('PUT')
                @csrf
                <div class="col-sm-6">
                    <label class="required form-label" for="insurance_charge">Insurance Charge</label>
                    <input type="text" name="insurance_charge" placeholder="Insurance Charge" class="form-control "
                        value="{{ $settings->insurance_charge }}" />
                    @if ($errors->has('payment_amount'))
                        <div class="invalid-feedback">
                            {{ $errors->first('insurance_charge') }}
                        </div>
                    @endif

                </div>

                <div class="col-sm-6">
                    <label class="required form-label" for="document_charge">Document Charge</label>
                    <input type="text" name="document_charge" placeholder="Document Charge" class="form-control "
                        value="{{ $settings->document_charge }}" />
                    @if ($errors->has('document_charge'))
                        <div class="invalid-feedback">
                            {{ $errors->first('document_charge') }}
                        </div>
                    @endif

                </div>

                <button type="submit" class="btn btn-info mt-10">Submit </button>




            </form>
        </div>
    </div>
@endsection
