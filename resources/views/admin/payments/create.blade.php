@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Add the payment to loan
        </div>






        <div class="col-12 mb-4">



            <div class="container">

                <!-- Account Details -->
                <div id="account-details-vertical" class="content">

                    <div class="row g-3 mb-10">
                        <div class="col-sm-4">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search by nic..." id="nic"
                                    aria-label="Search..." aria-describedby="basic-addon-search31">

                            </div>

                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" onclick="getCustomerDetails()">
                                <span class="spinner-border" role="status" aria-hidden="true"></span>
                                <i class="bx bx-search search-icon"></i>

                            </button>
                        </div>

                    </div>
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @elseif(Session::has('warning'))
                        <div class="alert alert-warning" role="alert">
                            {{ Session::get('warning') }}... !
                        </div>
                        <!-- here to 'withWarning()' -->
                    @endif
                    <div class="no-result">No data found</div>
                    <div class="row g-3" id="paymentDetails">
                        <table class="table table-bordered table-striped">
                            <tbody>

                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <td>
                                        <span id="nicNumber" class="value-field"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        Payment List
                                    </th>
                                    <td>
                                        <span id="paymentList" class="paymentList value-field"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Total Payment Made
                                    </th>
                                    <td>

                                        <span id="totalPaymentMade" class="value-field"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Balance Payment
                                    </th>
                                    <td>
                                        <span id="balance" class="value-field"></span>

                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Term Type
                                    </th>
                                    <td>
                                        <span id="term_type" class="value-field"></span>

                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Loan Term
                                    </th>
                                    <td>
                                        <span id="loan_term" class="value-field"></span>

                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        Intrest
                                    </th>
                                    <td>
                                        <span id="intrest" class="value-field"></span>

                                    </td>
                                </tr>


                                <tr>
                                    <th>
                                        Total Amount with Intrest
                                    </th>
                                    <td>
                                        <span id="total_amount_with_intrest" class="value-field"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        Weekly Pay
                                    </th>
                                    <td>
                                        <span id="weekly_pay" class="value-field"></span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>





                    </div>

                </div>
                <hr class="hr-tag" />
                <!-- Social Links -->
                <div id="paymentsSubmitDetails" class="content">
                    <form method="POST" action="{{ route('admin.payments.store') }}">

                        @csrf
                        <div class="row g-3">


                            <div class="col-sm-6">
                                <label class="required form-label" for="payment_amount">Payment Amount</label>
                                <input class="form-control {{ $errors->has('payment_amount') ? 'is-invalid' : '' }}"
                                    type="number" name="payment_amount" id="payment_amount"
                                    value="{{ old('payment_amount', '') }}" step="0.01" required maxlength="20">
                                @if ($errors->has('payment_amount'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('payment_amount') }}
                                    </div>
                                @endif


                                <input type="hidden" value="" name="loan_id" id="loan_id">
                            </div>

                            <div class="col-sm-6">
                                <label class="required form-label" for="remarks">Remarks</label>
                                <input class="form-control {{ $errors->has('remarks') ? 'is-invalid' : '' }}" type="text"
                                    name="remarks" id="remarks" value="{{ old('remarks', '') }}" maxlength="100">
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



    </div>
@endsection
@section('scripts')
    <script>
        $("#paymentDetails").hide();
        $(".spinner-border").hide();

        $("#paymentsSubmitDetails").hide();
        $(".no-result").hide();

        $(document).ready(function() {







        })
    </script>

    <script>
        function getCustomerDetails() {
            $(".spinner-border").show();
            $(".search-icon").hide();


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let nic = $("#nic").val();
            var base_path = '{{ url('/admin/paymentsfind') }}';
             
            $.ajax({
                url: base_path,
                type: "POST",
                data: {
                    nic: nic
                },
                //cache: true,
                encode: true,
                dataType: 'json',
                success: function(dataResult) {

                    $(".spinner-border").hide();
                    $(".search-icon").show();
                    console.log(dataResult);
                    if (dataResult.status === 'true') {
                        $("#paymentsSubmitDetails").fadeIn();
                        $("#paymentDetails").fadeIn();
                        $(".no-result").hide();
                        let resultData = dataResult.data;
                        $("#name").text(resultData.name);
                        $("#gender").text(resultData.gender);
                        $("#email").text(resultData.email);
                        $("#phoneNo").text(resultData.phone);
                        $("#nicNumber").text(resultData.nic);
                        $("#address").text(resultData.address);
                        $("#address2").text(resultData.address2);
                        $("#married_status").text(resultData.married_status);
                        $("#nic_photo").attr('src', "{{ asset('uploads') }}" + '/' + resultData.nic_photo);
                        $("#nic_back").attr('src', "{{ asset('uploads') }}" + '/' + resultData.nic_back);
                        $("#bank_name").text(resultData.bank_name);
                        $("#branch").text(resultData.branch);
                        $("#account").text(resultData.bank_account_no);
                        $("#remarks").text(resultData.remarks);
                        $("#income_type").text(resultData.income_type);
                        $("#income").text(resultData.income_amount);
                        $("#expenses").text(resultData.expenses);
                        $("#loan_id").val(resultData.loan_id);
                        $("#loan_amount").text(resultData.loan_amount);
                        $("#loan_term").text(resultData.loan_term);
                        $("#intrest").text(resultData.interest);
                        $("#total_amount_with_intrest").text(resultData.total_amount);
                        $("#weekly_pay").text(resultData.weekly_pay);
                        let sum = 0;
                        const payment = resultData.paymentList.split(",");
                        payment.forEach(myFunction);


                        function myFunction(item) {
                            $(".paymentList").append(`<p>${item}</p>`);
                            sum += +item;
                        }

                        let balance = resultData.total_amount - sum;
                        $("#balance").text(balance.toFixed(2));
                        $("#totalPaymentMade").text(sum.toFixed(2));


                    } else {
                        $(".no-result").show();
                        $("#paymentDetails").fadeOut();
                    }
                }
            });
        }
    </script>
@endsection
