@extends('layouts.frontLayout.front_design')
@section('content')

<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> <a href="{{ url('/') }}"><strong><span class="mdi mdi-home"></span> Home</strong></a>  <span class="mdi mdi-chevron-right"></span> Razorpay
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
                             <button class="btn btn-link collapsed" type="button" aria-expanded="false" aria-controls="collapsefour">
                             <span class="number"><i fa class="mdi mdi-close"></i></span> payment Failed
                             </button>
                          </h5>
                            </div>
                            <div id="collapsefour" class="collapse d-block" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="col-lg-12 col-md-12 col-sm-12 mx-auto order-done"> <i class="mdi mdi-close-circle-outline text-secondary"></i>
                                            <h4 class="text-success">Payment through razorpay has been failed.</h4>
                                            <p>Please contact us if there is any issue occurs.</p>
                                        </div>
                                        <div class="text-center">
                                            <a href="{{ url('/') }}">
                                                <button type="button" class="btn btn-secondary mb-2 btn-lg">Contact Us</button>
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
</section>

@endsection
<?php 
	Session::forget('grand_total');
	Session::forget('order_id');
?>
