@extends('layouts.admin')
@section('content')
    <div class="card mb-10">
        <div class="card-header">
            Customer Details
        </div>
        <div class="container ptb-10">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Name</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->name }}</td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Gender</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->gender }}</td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Nic</strong></td>
                        <td class="px-0 py-1">
                            {{-- <div class="badge bg-label-warning">25PEROFF</div> --}}
                            {{ $customerDetails->nic }}
                        </td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Email</strong></td>
                        <td class="px-0 py-1"> {{ $customerDetails->email }}</td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Address</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->address }}</td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Address 2</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->address2 }}</td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>City</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->city }}</td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Phone</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->phone }}</td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Married Status</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->married_status }}</td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Nic Image (Front)</strong></td>
                        <td class="px-0 py-1"><img src="{{ URL::asset('public/uploads') }}/{{$customerDetails->nic_photo}}" alt="logo" width="100"></td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Nic Image (Back)</strong></td>
                        <td class="px-0 py-1">  <img src="{{ URL::asset('public/uploads') }}/{{$customerDetails->nic_back}}" alt="logo" width="100"></td>
                    </tr>
                   
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Bank Name</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->bank_name }}</td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Account No</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->bank_account_no }}</td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Branch</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->branch }}</td>
                    </tr>
                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Loan Amount</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->loan_amount }}</td>
                    </tr>

                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Expenses</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->expenses }}</td>
                    </tr>

                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Loan Purpose</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->loan_purpose }}</td>
                    </tr>

                    <tr>
                        <td class="ps-0 align-top text-nowrap py-1"><strong>Weekly Pay</strong></td>
                        <td class="px-0 py-1">{{ $customerDetails->weekly_pay }}</td>
                    </tr>
                    

                </tbody>
            </table>
        </div>
    </div>
    <div class="card ">
        <div class="card-header">
            Oprational Manager
        </div>


        <div class="card-body">
            <form method="POST" action="{{ route('admin.loan-applications.analyze', $loanApplication) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="description">{{ trans('cruds.comment.title_singular') }}</label>
                    <textarea class="form-control {{ $errors->has('comment_text') ? 'is-invalid' : '' }}" name="comment_text"
                        id="comment_text">{{ old('comment_text') }}</textarea>
                    @if ($errors->has('comment_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('comment_text') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mt-10">
                    <button class="btn btn-success" name="approve" type="submit">
                        Approve
                    </button>
                    <button class="btn btn-danger" name="reject" type="submit">
                        Reject
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
