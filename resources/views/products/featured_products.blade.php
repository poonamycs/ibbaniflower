@extends('layouts/frontLayout/front_design')
@section('content')
<?php use Illuminate\Support\Str; ?>

<!-- breadcrimbs start -->
<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12"> <a href="{{ url('/') }}"><strong><span class="mdi mdi-home"></span> Home</strong></a>  <span class="mdi mdi-chevron-right"></span> Seasonal Products
			</div>
		</div>
	</div>
</section>
<!-- breadcrumbs end -->

<section class="shop-list section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12">
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
					@foreach($productsAll as $pro)
					<div class="col-md-3 col-sm-6">
						<div class="product">
							<a href="{{ url('product/'.$pro->id) }}">
								<div class="product-header"> 
									<span class="badge badge-success">Seasonal</span>
									<img class="img-fluid" src="{{ asset('images/backend_images/products/small/'.$pro->image) }}" alt=""> 
									<!-- <span class="veg text-success mdi mdi-circle"></span> -->
								</div>
								<div class="product-body">
									<h5>{{ Str::limit($pro->product_name, 28) }}</h5>
									{{-- <h6><span class="mdi mdi-approval"></span> {{ $pro->product_brand }}</h6> --}}
									<h6></h6>
								</div>
								<div class="product-footer">
									<form action="{{ url('add-cart') }}" method="post">@csrf
											<input type="hidden" name="product_id" value="{{ $pro->id }}">
											<input type="hidden" name="product_name" value="{{ $pro->product_name }}">
											<input type="hidden" name="product_code" value="{{ $pro->product_code }}">
											<input type="hidden" name="product_brand" value="{{ $pro->product_brand }}">
											<!-- <input type="hidden" name="price" id="price" value="{{ $pro->price }}"> -->
											<input type="hidden" name="quantity" id="quantity" value="1">
											<input type="hidden" name="email" id="email" value="{{ $pro->email }}">
											<input type="hidden" name="image" value="{{ $pro->image }}">
											@if(count($pro->attributes)>0)
												@foreach($pro->attributes as $sizes)
													@if($loop->first)
												        <input type="hidden" name="size" id="size" value="{{ $pro->id }}-{{ $sizes->size }}">
												        <input type="hidden" name="price" value="{{ $sizes->price }}">
												        <?php $stock = ''; $availability = 'Add to Cart'; $icon = 'shopping-cart'; ?>
												    @endif
												@endforeach
											@else
												<?php $stock = 'disabled'; $availability = 'Out of Stock'; $icon = 'ban'; ?>
											@endif
											<button type="submit" <?php echo $stock; ?> class="btn btn-secondary btn-sm float-right"><i class="fa fa-<?php echo $icon; ?>"></i> <?php echo $availability; ?></button>
										</form>
									<p class="offer-price mb-0 d-flex" id="getPrice">₹ {{ $pro->price }}@if(!empty($pro->unit))/{{ $pro->unit }}@endif @if(!empty($pro->discount))<br><i class="mdi mdi-tag-outline"></i><span class="regular-price">₹ {{ $pro->discount }}</span>@endif</p>
								</div>
							</a>
						</div>
					</div>
					@endforeach
				</div>
				
				<nav>
					<ul class="pagination justify-content-center mt-4">
						{{ $productsAll->links() }}
					</ul>
				</nav>
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