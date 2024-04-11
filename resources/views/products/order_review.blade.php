@extends('layouts.frontLayout.front_design')
@section('content')
<?php 
    use App\Http\Controllers\Controller;
    use App\Product;
    $cartCount = Product::cartCount();
    $mainCategories = Controller::mainCategories();
 ?>
<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12"> <a href="{{ url('/') }}"><strong><span class="mdi mdi-home"></span> Home</strong></a>  <span class="mdi mdi-chevron-right"></span> Order Overview
			</div>
		</div>
	</div>
</section>
<section class="checkout-page section-padding">
	<div class="container">
		@if(Session::has('flash_message_error'))
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  	<strong>{!! session('flash_message_error') !!}</strong>
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		  	</button>
		</div>
		@endif
		@if(Session::has('flash_message_success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		  	<strong>{!! session('flash_message_success') !!}</strong>
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		  	</button>
		</div>
		@endif
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="card">
					<h5 class="card-header">Order Overview<span class="text-secondary float-right btn-sm"> <a href="{{ url('cart/') }}"><span class="btn-link btn-sm border-right">Edit Order</span></a> ({{ $cartCount }} item/s)</span></h5>
					<div class="card-body pt-0 pr-0 pl-0 pb-0">
						<?php $total_amount=0; ?>
						@foreach($userCart as $cart)
						<div class="cart-list-product">
							<img class="img-fluid" src="{{ asset('images/backend_images/products/small/'.$cart->image) }}" alt="">
							<h5><a href="#">{{ $cart->product_name }}</a></h5>
							<h6><strong><span class="badge badge-success border">x{{ $cart->quantity }}</span></strong> | {{ $cart->size }} </h6>
							<p class="offer-price mb-0">₹ {{ $cart->price }}<i class="mdi mdi-tag-outline"></i></p>
						</div>
						<?php $total_amount = $total_amount + ($cart->price*$cart->quantity) + $shippingCharges; ?>
						@endforeach
					</div>

                    <div class="cart-list-product">
                    	<div class="row">
                    		<div class="col-md-6 col-sm-12 width-50">
                    			<p class="offer-price mb-0">Total</p><hr>
                    			<p class="offer-price mb-0">Shipping Charges(+)</p><hr>
                    			<p class="offer-price mb-0 text-secondary">Grand Total</p><hr>
                    		</div>
                    		<div class="col-md-6 col-sm-12 width-50">
                    			<p class="offer-price mb-0">: ₹ {{ $total_amount-$shippingCharges }}</p><hr>
                    			<p class="offer-price mb-0">: ₹ {{ $shippingCharges }}</p><hr>
                    			<p class="offer-price mb-0 text-secondary">: ₹ {{ $grand_total =  $total_amount }}</p><hr>
                    		</div>
                    	</div>
                    </div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="checkout-step">
					<div class="accordion" id="accordionExample">						
						<div class="card checkout-step-two">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <span class="number">2</span> Delivery Address
                                 </button>
                              </h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									<div class="row">
			                    		<div class="col-md-3 col-sm-3">
			                    			<p class="offer-price mb-0">Billing Address</p>
			                    		</div>
			                    		<div class="col-md-9 col-sm-9">
			                    			<p class="offer-price mb-0">: {{ $userDetails->address }} <br>
			                    				&nbsp;&nbsp;{{ $userDetails->city }}, {{ $userDetails->state }}, {{ $userDetails->country }}<br>
			                    				&nbsp;&nbsp;<i class="fa fa-map-marker"></i> Pincode : {{ $userDetails->pincode }}<br>
			                    				&nbsp;&nbsp;<i class="fa fa-phone"></i> Mobile : {{ $userDetails->mobile }}<br>
			                    			</p>
			                    		</div>
			                    	</div><hr>
									<div class="row">
			                    		<div class="col-md-3 col-sm-3">
			                    			<p class="offer-price mb-0">Shipping Address</p>
			                    		</div>
			                    		<div class="col-md-9 col-sm-9">
			                    			<p class="offer-price mb-0">: {{ $shippingDetails->address }} <br>
			                    				&nbsp;&nbsp;{{ $shippingDetails->city }}, {{ $shippingDetails->state }}, {{ $shippingDetails->country }}<br>
			                    				&nbsp;&nbsp;<i class="fa fa-map-marker"></i> Pincode : {{ $shippingDetails->pincode }}<br>
			                    				&nbsp;&nbsp;<i class="fa fa-phone"></i> Mobile : {{ $shippingDetails->mobile }}<br>
			                    			</p>
			                    		</div>
			                    	</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 <span class="number">3</span> Select Payment Method
                                 </button>
                              </h5>
							</div>
							<div id="collapseThree" class="collapse d-block" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body mt-2">
									<form name="paymentForm" id="paymentForm" action="{{ url('/place-order') }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="grand_total" value="{{ $grand_total }}">
										<div class="col-lg-10 col-md-6 col-sm-10 mx-auto mt-4">
											<!-- <div class="custom-control custom-radio">
												<input type="radio" id="Razorpay" name="payment_method" value="Razorpay" class="custom-control-input">
												<label class="custom-control-label" for="Razorpay"><p class="offer-price mt-1">Pay Online</p></label>
											</div> -->
											<!-- <p>Pay via UPI, Debit Card, Credit Card, Internet Banking</p> -->
											<hr>
											<!-- <div class="custom-control custom-radio">
												<input type="radio" id="COD" name="payment_method" value="COD" class="custom-control-input">
												<label class="custom-control-label" for="COD"><p class="offer-price mt-1">COD</p></label>
											</div> -->
											<input type="hidden" id="COD" name="payment_method" value="COD" class="custom-control-input">
											<h6>COD</h6>
											<p>Pay via Cash on Delivery</p>
											<button type="submit" class="btn btn-secondary mb-2 btn-lg d-block"><b>Place Order</b><span class="float-right"> <i class="fa fa-angle-right"></i></span></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-padding bg-white border-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="feature-box"> <i class="mdi mdi-truck-fast"></i>
					<h6>Free & Next Day Delivery</h6>
					<p>Lorem ipsum dolor sit amet, cons...</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="feature-box"> <i class="mdi mdi-basket"></i>
					<h6>100% Satisfaction Guarantee</h6>
					<p>Rorem Ipsum Dolor sit amet, cons...</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="feature-box"> <i class="mdi mdi-tag-heart"></i>
					<h6>Great Daily Deals Discount</h6>
					<p>Sorem Ipsum Dolor sit amet, Cons...</p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection