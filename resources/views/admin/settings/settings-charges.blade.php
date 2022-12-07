@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Settings
        </div>

        <div class="card-body">
            <form name="add_name" id="add_name">


                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>


                <div class="alert alert-success print-success-msg" style="display:none">
                    <ul></ul>
                </div>


                <div class="table-responsive">
                    <button type="button" name="add" id="add" class="btn btn-success mb-10">Add More</button>
                    <table class="table table-bordered" id="dynamic_field">

                        <tr>
                            <td><input type="text" name="insurance_charge" placeholder="Product Name"
                                    class="form-control " value="{{ $settings->insurance_charge }}" /></td>
                            <td><input type="number" name="document_charge" placeholder="Intrest rate"
                                    class="form-control " value="{{ $settings->interest_rate }}" /></td>

                        </tr>

                    </table>
                    <input type="button" name="submit" id="submit" class="btn btn-info mt-10" value="Submit" />
                </div>


            </form>
        </div>
    </div>
@endsection
