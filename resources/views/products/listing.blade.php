@extends('layouts/frontLayout/front_design')
@section('content')

<!-- breadcrimbs start -->
<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@if(!empty($breadcrumb))
					{!! $breadcrumb !!}
				@else
					@if(!empty($search_product))
					all product related to "{{ $search_product }}"
					@else
					{{ $categoryDetails->name }}"
					@endif
				@endif
			</div>
		</div>
	</div>
</section>
<!-- breadcrumbs end -->

<section class="shop-list section-padding">
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
			<div class="col-md-3">
				@include('layouts.frontLayout.front_sidebar')
			</div>
			<div class="col-md-9">
				<img class="img-fluid mb-3" src="{{ asset('images/frontend_images/shop2.jpg')}}" alt="">
				<div class="shop-head"> 
					<h6 class="mb-3">You searched for @if(!empty($search_product))
						"{{ $search_product }}"
						@else
						"{{ $categoryDetails->name }}"
						@endif
					</h6>
				</div>
				<div class="row no-gutters">
					@if(count($productsAll)>0)
						@foreach($productsAll as $pro)
						<div class="col-md-4 width-50">
							<div class="product">
								<a href="{{ url('product/'.$pro->id) }}" title="{{ $pro->product_name }}">
									<div class="product-header"> 
										<!-- <span class="badge badge-success">50% OFF</span> -->
										<img class="img-fluid" src="{{ asset('images/backend_images/products/small/'.$pro->image) }}">
										<!-- <span class="veg text-success mdi mdi-circle"></span> -->
									</div>
									<div class="product-body">
										<h5 class="text-capitalize">{{ Str::limit($pro->product_name, 28) }}</h5>
										<!-- <h6><span class="mdi mdi-approval"></span> {{ $pro->product_brand }}</h6> -->
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
					@else
						<div class="container">
							<div class="alert alert-warning" role="alert">
							  	<a href="javascript:void(0)" class="alert-link">Product Not Found!</a>. Please try something else.
							</div>
						</div>
					@endif
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

@endsection