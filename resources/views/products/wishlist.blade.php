@extends('layouts/frontLayout/front_design')
@section('content')

<section class="account-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 mx-auto">
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
				<div class="row no-gutters">
					<div class="col-md-4">
						@include('layouts/frontLayout/user_settings_sidebar')
					</div>
					<div class="col-md-8">
						<div class="card card-body account-right">
							<div class="widget">
								<div class="section-header">
									<h5 class="heading-design-h5">My Wishlist</h5>
								</div>

		               			@if(count($userWishList)>0)
								<div class="row no-gutters">
									@foreach($userWishList as $wishlist)
									<div class="col-md-4">
										<div class="product">
											<a href="{{ url('product/'.$wishlist->product_id) }}">
												<div class="product-header"> 
													<!-- <span class="badge badge-success">50% OFF</span> -->
													<img alt="" src="{{ asset('images/backend_images/products/small/'.$wishlist->image) }}" class="img-fluid"> 
													<!-- <span class="veg text-success mdi mdi-circle"></span> -->
												</div>
												<div class="product-body">
													<h5>{{ $wishlist->product_name }}</h5>
													<h6><strong><span class="mdi mdi-approval"></span> {{ $wishlist->product_brand }}</strong> - {{ $wishlist->size }}</h6>
												</div>

												<form name="addtocartForm" id="addtocartForm" action="{{ url('add-cart') }}" method="post">
													{{ csrf_field() }}
													<input type="hidden" name="product_id" value="{{ $wishlist->product_id }}">
													<input type="hidden" name="product_name" value="{{ $wishlist->product_name }}">
													<input type="hidden" name="product_code" value="{{ $wishlist->product_code }}">
													<input type="hidden" name="product_brand" value="{{ $wishlist->product_brand }}">
													<input type="hidden" name="quantity" value="{{ $wishlist->quantity }}">
													<input type="hidden" name="size" value="{{ $wishlist->id }}-{{ $wishlist->size }}">
													<input type="hidden" name="price" id="price" value="{{ $wishlist->price }}">
													<input type="hidden" name="email" id="email" value="{{ $wishlist->email }}">

													<div class="product-footer">
														<a href="{{ url('/wishlist/delete-product/'.$wishlist->id) }}"><button class="btn btn-secondary btn-sm float-right" type="button" title="Delete"><i class="fa fa-trash"></i></button></a>

														<button type="submit" class="btn btn-secondary btn-sm float-right mr-1" name="cartButton" value="Add to Cart"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
														<p class="offer-price mb-0">₹ {{ $wishlist->price }} <br>
															<span class="badge badge-success">x {{ $wishlist->quantity }}</span>
														</p>
													</div>
												</form>
											</a>
										</div>
									</div>
									@endforeach
								</div>
								<nav>
									<ul class="pagination justify-content-center mt-4">
										{{ $userWishList->links() }}
									</ul>
								</nav>
								@else
								<p class="saved-message mb-2 text-center"><b>No item added in wishlist!</b></p>
								@endif

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

<style>
	.badge{
		background: #f2fef2 none repeat scroll 0 0;
	    border: 1px solid #51aa1b;
	    border-radius: 2px;
	    color: #51aa1b;
	    font-size: 11px;
	    font-weight: 500;
	    padding: 3px 6px;
	}
</style>

@endsection