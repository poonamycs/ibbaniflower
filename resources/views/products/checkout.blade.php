@extends('layouts/frontLayout/front_design') 
@section('content')

<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12"> <a href="{{ url('/') }}"><strong><span class="mdi mdi-home"></span> Home</strong></a>  <span class="mdi mdi-chevron-right"></span> Checkout</div>
		</div>
	</div>
</section>
<section class="checkout-page section-padding">
	<form method="post" action="{{ url('/checkout') }}">
	{{ csrf_field() }}
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 col-sm-12">
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
					<div class="checkout-step">
						<div class="accordion">
							<div class="card checkout-step-two">
								<div class="card-header" id="headingTwo">
									<h5 class="mb-0">
	                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	                                 <span class="number">1</span> Delivery Address
	                                 </button>
	                              </h5>
								</div>
								<div id="collapseTwo" class="collapse d-block" aria-labelledby="headingTwo" data-parent="#accordionExample">
									<div class="card-body">
										<form>
											<div class="heading-part">
												<h3 class="sub-heading">Billing Address</h3>
											</div>
											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label">Full Name <span class="required">*</span></label>
														<input class="form-control border-form-control" @if(!empty($userDetails->name)) value="{{ $userDetails->name }}" @endif placeholder="Billing full name" type="text" name="billing_name" id="billing_name">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label">Phone <span class="required">*</span>
														</label>
														<input class="form-control border-form-control" name="billing_mobile" @if(!empty($userDetails->mobile)) value="{{ $userDetails->mobile }}" @endif id="billing_mobile" placeholder="Billing Mobile Number" type="number">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label">Country <span class="required">*</span></label>
														<select name="billing_country" id="billing_country" class="select2 form-control border-form-control">
															<option value="{{ $userDetails->country }}">{{ $userDetails->country }}</option>
															@foreach($countries as $country)
															<option value="{{ $country->country_name }}" @if(!empty($userDetails->country) && $country->country_name == $userDetails->country) selected @endif>{{ $country->country_name }}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label">City<span class="required">*</span>
														</label>
														<input class="form-control border-form-control" name="billing_city" @if(!empty($userDetails->city)) value="{{ $userDetails->city }}" @endif id="billing_city" placeholder="Billing City" type="text">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label">PinCode <span class="required">*</span>
														</label>
														<input class="form-control border-form-control" name="billing_pincode" @if(!empty($userDetails->state)) value="{{ $userDetails->pincode }}" @endif id="billing_pincode" placeholder="Billing Pincode" type="number">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label">State <span class="required">*</span>
														</label>
														<input class="form-control border-form-control" name="billing_state" @if(!empty($userDetails->state)) value="{{ $userDetails->state }}" @endif id="billing_state" placeholder="Billing State" type="text">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="control-label">Billing Address <span class="required">*</span>
														</label>
														<textarea class="form-control border-form-control" name="billing_address" id="billing_address" placeholder="Enter Detail Billing Address">@if(!empty($userDetails->address)) {{ $userDetails->address }} @endif</textarea> 
														<small class="text-danger">Please provide the number and street.</small>
													</div>
												</div>
											</div>

											<div class="custom-control custom-checkbox mb-3">
												<input type="checkbox" class="custom-control-input" id="bill2ship">
												<label class="custom-control-label" for="bill2ship"><b>Use my billing address as my shipping address</b></label>
											</div>

											<div class="heading-part">
												<h3 class="sub-heading">Shipping Address</h3>
											</div>
											<hr>
											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label">Full Name <span class="required">*</span>
														</label>
														<input class="form-control border-form-control" name="shipping_name" id="shipping_name" @if(!empty($shippingDetails->name)) value="{{ $shippingDetails->name }}" @endif type="text" placeholder="Shipping Name">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label">Phone <span class="required">*</span>
														</label>
														<input class="form-control border-form-control" name="shipping_mobile" @if(!empty($userDetails->state)) value="{{ $userDetails->mobile }}" @endif id="shipping_mobile" placeholder="Shipping Mobile Number" type="number">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label">Country <span class="required">*</span></label>
														<select class="select2 form-control border-form-control" id="shipping_country" name="shipping_country">
															<option value="">Select Country</option>
															@foreach($countries as $country)
															<option value="{{ $country->country_name }}" @if(!empty($shippingDetails->country) && $country->country_name == $shippingDetails->country) selected @endif>{{ $country->country_name }}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label">City <span class="required">*</span>
														</label>
														<input class="form-control border-form-control" name="shipping_city" id="shipping_city" @if(!empty($shippingDetails->city)) value="{{ $shippingDetails->city }}" @endif type="text" placeholder="Shipping City">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label">Zip Code <span class="required">*</span>
														</label>
														<input class="form-control border-form-control" name="shipping_pincode" id="shipping_pincode" @if(!empty($shippingDetails->pincode)) value="{{ $shippingDetails->pincode }}" @endif type="number" placeholder="Shipping Pincode">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label">State <span class="required">*</span>
														</label>
														<input class="form-control border-form-control" name="shipping_state" id="shipping_state" @if(!empty($shippingDetails->state)) value="{{ $shippingDetails->state }}" @endif type="text" placeholder="Shipping State">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="control-label">Billing Landmark <span class="required">*</span>
														</label>
														<textarea class="form-control border-form-control" name="shipping_address" id="shipping_address" placeholder="Enter Detail Shipping Address">@if(!empty($shippingDetails->address)) {{ $shippingDetails->address }} @endif</textarea> 
														<small class="text-danger">
	                                             Please include landmark (e.g : Opposite Bank) as the carrier service may find it easier to locate your address.
	                                             </small>
													</div>
												</div>
											</div>
											<div class="row d-flex justify-content-center">
												<div class="col-sm-12 col-md-8">
													<button type="submit" class="btn btn-secondary mb-2 btn-lg d-block"><b>SAVE & NEXT</b> <span class="float-right"> <i class="fa fa-angle-right"></i></span></button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-md-4 col-sm-12">
					<div class="card">
						<h5 class="card-header">My Cart <span class="text-secondary float-right">(5 item)</span></h5>
						<div class="card-body pt-0 pr-0 pl-0 pb-0">
							<div class="cart-list-product"> <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
								<img class="img-fluid" src="{{ asset('images/frontend_images/item/11.jpg') }}" alt=""> <span class="badge badge-success">50% OFF</span>
								<h5><a href="#">Product Title Here</a></h5>
								<h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
								<p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i>  <span class="regular-price">$800.99</span>
								</p>
							</div>
							<div class="cart-list-product"> <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
								<img class="img-fluid" src="{{ asset('images/frontend_images/item/1.jpg') }}" alt=""> <span class="badge badge-success">50% OFF</span>
								<h5><a href="#">Product Title Here</a></h5>
								<h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
								<p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i>  <span class="regular-price">$800.99</span>
								</p>
							</div>
							<div class="cart-list-product"> <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
								<img class="img-fluid" src="{{ asset('images/frontend_images/item/2.jpg') }}" alt=""> <span class="badge badge-success">50% OFF</span>
								<h5><a href="#">Product Title Here</a></h5>
								<h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
								<p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i>  <span class="regular-price">$800.99</span>
								</p>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</form>
</section>
<section class="section-padding bg-white border-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-4">
				<div class="feature-box"> <i class="mdi mdi-truck-fast"></i>
					<h6>Free & Next Day Delivery</h6>
					<p>Lorem ipsum dolor sit amet, cons...</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4">
				<div class="feature-box"> <i class="mdi mdi-basket"></i>
					<h6>100% Satisfaction Guarantee</h6>
					<p>Rorem Ipsum Dolor sit amet, cons...</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4">
				<div class="feature-box"> <i class="mdi mdi-tag-heart"></i>
					<h6>Great Daily Deals Discount</h6>
					<p>Sorem Ipsum Dolor sit amet, Cons...</p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection