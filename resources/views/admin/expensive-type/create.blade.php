@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Create Expensive Type
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.expensive-type.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required form-label" for="title">Expensive Type </label>
                    <input class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type"
                        id="type" value="{{ old('type', '') }}" required>
                    @if ($errors->has('type'))
                        <div class="invalid-feedback">
                            {{ $errors->first('type') }}
                        </div>
                    @endif
                     
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
