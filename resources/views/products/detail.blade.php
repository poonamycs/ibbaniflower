@extends('layouts/frontLayout/front_design')
@section('content')

<?php 
	$date = date("Y-m-d");
	$datetime = new DateTime($date);
	$datetime->modify('+1 day');
	$datetime->format('d M');

	$datetime1 = new DateTime($date);
	$datetime1->modify('+2 day');
	$datetime1->format('d M');
?>

<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12"> 
				{!! $breadcrumb !!}
			</div>
		</div>
	</div>
</section>
{{-- {{ $mainCategory->name }} --}}

{{-- product detail section --}}
<section class="shop-single section-padding pt-3">
	<div class="container">

		{{-- alert box --}}
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
			<div class="col-md-6">
				<div class="shop-detail-left">
					<div class="shop-detail-slider">
						<div class="favourite-icon"> 
							@if(!empty($productDetails->discount))<a class="fav-btn" title="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="₹ {{ $productDetails->discount }} OFF"><i class="mdi mdi-tag-outline"> </i></a>@endif
						</div>
						<div id="sync1" class="owl-carousel">
							<div class="item">
								<img alt="" src="{{ asset('images/backend_images/products/medium/'.$productDetails->image) }}" class="img-fluid img-center">
							</div>
							@foreach($productAltImages as $altimage)
							<div class="item">
								<img alt="" src="{{ asset('images/backend_images/products/medium/'.$altimage->image) }}" class="img-fluid img-center">
							</div>
							@endforeach
						</div>
						<!-- image thumbnails -->
						<div id="sync2" class="owl-carousel">
							<div class="item">
								<img alt="" src="{{ asset('images/backend_images/products/small/'.$productDetails->image) }}" class="img-fluid img-center">
							</div>
							@foreach($productAltImages as $altimage)
							<div class="item">
								<img alt="" src="{{ asset('images/backend_images/products/small/'.$altimage->image) }}" class="img-fluid img-center">
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="shop-detail-right">
					<form name="addtocartForm" id="addtocartForm" action="{{ url('add-cart') }}" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="product_id" value="{{ $productDetails->id }}">
					<input type="hidden" name="product_name" value="{{ $productDetails->product_name }}">
					<input type="hidden" name="product_code" value="{{ $productDetails->product_code }}">
					<input type="hidden" name="product_brand" value="{{ $productDetails->product_brand }}">
					<input type="hidden" name="price" id="price" value="{{ $productDetails->price }}">
					<input type="hidden" name="email" id="email" value="{{ $productDetails->email }}">
					<input type="hidden" name="image" value="{{ $productDetails->image }}">

					<!-- <span class="badge badge-success">50% OFF</span> -->
					<h2>{{ $productDetails->product_name }} </h2>
					<h6><span class="mdi mdi-approval"> {{ $productDetails->product_brand }} | {{ $productDetails->product_code }}</h6>
					@if(!empty($productDetails->discount))<p class="regular-price"><i class="mdi mdi-tag-outline"></i> MRP : ₹ {{ $productDetails->discount }}</p>@endif
					<p class="offer-price mb-0">Discounted price : <span class="text-success"><span id="getPrice">₹ {{ $productDetails->price }}</span></span>
					</p><br>
					<div class="row">
						<div class="col-sm-8 col-md-8">
	                       	<div class="form-group">
	                          	<select  class="select2 form-control border-form-control" id="selSize" name="size" required>
	                             	<option value="">-- Select option from below --</option>
	                             	@foreach($productDetails->attributes as $sizes)
									<option value="{{ $productDetails->id }}-{{ $sizes->size }}"> {{ $sizes->size }}</option>
									@endforeach
	                          	</select>
	                       </div>
	                    </div>
	                </div>

	                <div id="field1">
					    <button type="button" id="sub" class="sub" class="btn btn-secondary">-</button>
					    	<input type="number" id="1" value="1" min="1" name="quantity" readonly />
					    <button type="button" id="add" class="add" class="btn btn-secondary">+</button>
					</div>
					
					@if($total_stock>0)
					<button type="submit" class="btn btn-secondary btn-lg" id="cartButton" name="cartButton" value="Shopping Cart" title="Add this Product to cart"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
					@else
					<button type="submit" class="btn btn-secondary btn-lg" id="cartButton" disabled=""><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
					@endif

					<button @if($total_stock>0) type="submit" @else type="button" disabled @endif class="btn btn-secondary" id="wishListButton" name="wishListButton" value="Wish List" title="Add this Product to Wishlist"><i class="mdi mdi-heart"></i> Wishlist</button>

					</form>

					<h6><i class="fa fa-shopping-bag"></i> Check product availability in your area</h6>
					<div class="form-inline pincode-search">
						<input type="number" name="pincode" id="chkPincode" class="form-control" placeholder="Enter your pincode">
						<button type="button" onclick="return checkPincode();" class="pl-2 pr-2 btn btn-secondary btn-lg" style="padding: 7px; margin: 15px 5px"><i class="fa fa-search"></i>
						</button>
						<span id="pincodeResponse"></span>
					</div>
					<hr>
					<h6><i class="mdi mdi-truck-fast"></i> Order will be delivered between <b><?php echo $datetime->format('d M').' to '.$datetime1->format('d M') ?></b></h6>

					<div class="short-description">
						<h5>Quick Overview
							<p class="float-right">
								<span id="Availability">&nbsp; @if($total_stock>0) <span class="badge badge-success">In Stock</span>
								@else <span class="badge badge-danger">Out of Stock</span> @endif</span>
							</p>
                        </h5><hr>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
		                        <div class="card">
		                           <div class="accordion" id="accordionExample">
		                           		@if(!empty($productDetails->description))
		                              	<div class="card mb-0">
		                                 	<a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		                                 		<div class="card-header" id="headingOne">
				                                    <h6 class="mb-0">			                                       
				                                       <i class="icofont icofont-question-square"></i> Description <i class="fa fa-angle-down"></i>
				                                    </h6>
			                                 	</div>
			                                </a>
			                                {{-- add "show" class to active one accordion --}}
		                                 	<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
		                                    	<div class="card-body">
		                                       		{!! $productDetails->description !!}
		                                    	</div>
		                                 	</div>
		                              	</div>
		                              	@endif

		                              	@if(!empty($productDetails->care))
			                            <div class="card mb-2 mt-2">
			                                <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			                                	<div class="card-header" id="headingTwo">
				                                    <h6 class="mb-0">			                                       
				                                       <i class="icofont icofont-question-square"></i> Additional Information <i class="fa fa-angle-down"></i>
				                                    </h6>
				                                </div>
				                            </a>
			                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
			                                    <div class="card-body">
			                                       {!! $productDetails->care !!}
			                                    </div>
			                                </div>
			                            </div>
			                            @endif
			                            <!-- <div class="card mb-2 mt-2">
			                                <a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
			                                	<div class="card-header" id="headingTwo">
				                                    <h6 class="mb-0">			                                       
				                                       <i class="icofont icofont-question-square"></i> Product Reviews <i class="fa fa-angle-down"></i>
				                                    </h6>
				                                </div>
				                            </a>
			                                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
			                                    <div class="card-body">
			                                       {!! $productDetails->care !!}
			                                    </div>
			                                </div>
			                            </div> -->
		                           </div>
		                        </div>
		                    </div>
		                </div>
					</div>
					<span class="mt-4">Share On: </span>
					<div class="addthis_inline_share_toolbox mt-2"></div>

					<h6 class="mb-3 mt-4">Why shop from Ibbani flower?</h6>
					<div class="row">
						<div class="col-md-6">
							<div class="feature-box"> <i class="mdi mdi-truck-fast"></i>
								<h6 class="text-info">Free Delivery</h6>
							</div>
						</div>
						<div class="col-md-6">
							<div class="feature-box"> <i class="mdi mdi-basket"></i>
								<h6 class="text-info">100% Guarantee</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="product-items-slider section-padding bg-white border-top">
	<div class="container">
		<div class="section-header">
			<h5 class="heading-design-h5">Best Offers View <span class="badge badge-primary">20% OFF</span>
              <a class="float-right text-secondary" href="javascript:void">View All</a>
           </h5>
		</div>
		<div class="owl-carousel owl-carousel-featured">
			@foreach($relatedProducts as $product)
			<div class="item">
				<div class="product">
					<a href="javascript:void">
						<div class="product-header"> <span class="badge badge-success">50% OFF</span>
							<img class="img-fluid" src="{{ asset('images/frontend_images/item/7.jpg') }}" alt=""> <span class="veg text-success mdi mdi-circle"></span>
						</div>
						<div class="product-body">
							<h5>{{ $product->product_name }}</h5>
							<h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
						</div>
						<div class="product-footer">
							<button type="button" class="btn btn-secondary btn-sm float-right"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
							<p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i>
								<br><span class="regular-price">$800.99</span>
							</p>
						</div>
					</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section> -->

<section class="section-padding bg-white border-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="feature-box"> <i class="mdi mdi-truck-fast"></i>
					<h6>Next Day Delivery</h6>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="feature-box"> <i class="mdi mdi-basket"></i>
					<h6>100% Satisfaction Guarantee</h6>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="feature-box"> <i class="mdi mdi-tag-heart"></i>
					<h6>Great Daily Deals Discount</h6>
				</div>
			</div>
		</div>
	</div>
</section>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add').click(function () {
			if ($(this).prev().val() < 20) {
	    	$(this).prev().val(+$(this).prev().val() + 1);
			}
		});
		$('.sub').click(function () {
			if ($(this).next().val() > 1) {
	    	if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
			}
		});
	});
</script>
@endsection