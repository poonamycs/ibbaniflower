@extends('layouts/frontLayout/front_design')
@section('content')
	
<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> <a href="{{ url('/') }}"><strong><span class="mdi mdi-home"></span> Home</strong></a>  <span class="mdi mdi-chevron-right"></span>  Order Complete
            </div>
        </div>
    </div>
</section>

<section class="checkout-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="checkout-step">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button">
                                    <span class="number">4</span> Order Complete
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse d-block">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="success-checkmark">
                                            <div class="check-icon">
                                                <span class="icon-line line-tip"></span>
                                                <span class="icon-line line-long"></span>
                                                <div class="icon-circle"></div>
                                                <div class="icon-fix"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mx-auto order-done"> 
                                            <!-- <i class="mdi mdi-check-circle-outline text-secondary"></i> -->
                                            <h4 class="text-success">Congrats! Your Order has been received successfully.</h4>
                                            <p>Your order ID is <strong>{{ Session::get('order_id') }}</strong> and total payable amount is <strong>₹ {{ Session::get('grand_total') }}</strong></p>
                                            <div class="text-center">
                                                <?php
                                                    if($_POST){
                                                        $razorpay_payment_id = $_POST['razorpay_payment_id'];
                                                        echo "Razorpay Trannsaction ID: ". "<i><b>$razorpay_payment_id</b></i>";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="text-center">
                                                    <a href="{{ url('orders/') }}">
                                                        <button type="button" class="btn btn-secondary mb-2 btn-lg d-block"><b>View Order</b> <span class="float-right"> <i class="fa fa-angle-right"></i></span></button>
                                                    </a>
                                                    <a href="{{ url('products/') }}">
                                                        <button type="button" class="btn btn-outline-success border mb-2 btn-lg d-block"><b>Return to store</b> <span class="float-right"> <i class="fa fa-angle-right"></i></span></button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<script>
    window.setTimeout(function(){
        window.location.href = "../orders/";
    }, 4000);
</script>
<?php 
    Session::forget('grand_total');
    Session::forget('order_id');
?>