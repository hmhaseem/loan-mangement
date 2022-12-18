@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Expensive
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.expensive.update', [$accounts->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label" for="title">Payment Amount</label>
                            <input class="form-control {{ $errors->has('payment_amount') ? 'is-invalid' : '' }}"
                                type="text" name="payment_amount" id="payment_amount"
                                value="{{ old('payment_amount', $accounts->payment_amount) }}" required>
                            @if ($errors->has('payment_amount'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('payment_amount') }}
                                </div>
                            @endif

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label class="required form-label" for="expensive_type">Expensive Type</label>
                        <select name="expensive_type" class="form-control select2">
                            <option value=""> Select </option>
                            @foreach ($expensiveType as $type)
                                <option value="{{ $type->id }}" @if ($accounts->expensive_type === $type->id) selected @endif>
                                    {{ $type->type }}
                                </option>
                            @endforeach

                        </select>
                        @if ($errors->has('expensive_type'))
                            <div class="invalid-feedback">
                                {{ $errors->first('expensive_type') }}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label" for="title">Remarks</label>
                            <input class="form-control {{ $errors->has('remarks') ? 'is-invalid' : '' }}" type="text"
                                name="remarks" id="remarks" value="{{ old('remarks', $accounts->remarks) }}" required>
                            @if ($errors->has('remarks'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('remarks') }}
                                </div>
                            @endif

                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <button class="btn btn-danger mt-10" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
