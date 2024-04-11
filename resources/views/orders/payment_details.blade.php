@extends('layouts/frontLayout/front_design')
@section('content')
<?php use App\Order; ?>
	
<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> <a href="{{ url('/') }}"><strong><span class="mdi mdi-home"></span> Home</strong></a>  <span class="mdi mdi-chevron-right"></span>  Pay Online
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
                                        <span class="number">4</span> Pay Online
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsefour" class="collapse d-block" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="col-lg-12 col-md-12 col-sm-12 mx-auto order-done">
                                            <h5 class="text-success">Your total payable amount is ₹ {{ Session::get('grand_total') }}</h5>
                                            <p>Please make payment by clicking on below payment button</p>
                                        </div>
                                        <div class="align-center container d-flex justify-content-center">
                                            <center><div class="alert alert-info" role="alert"><i class="fa fa-phone"></i> 9999 999 999</div></center>
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
    // Session::forget('grand_total');
    // Session::forget('order_id');
?>