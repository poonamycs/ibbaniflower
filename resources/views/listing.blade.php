@extends('layouts.frontLayout.design')
@section('content')
@section('style')
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-flower.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-res-flower.css') }}">
@endsection('style')
<main>
	<div class="content-search">

                            <div class="container container-100">
                            	<i class="far fa-times-circle" id="close-search"></i>	
                                <h3 class="text-center">what are your looking for ?</h3>
                                <form method="get" action="/search" role="search" style="position: relative;">
                                  <input type="text" class="form-control control-search" value="" autocomplete="off" placeholder="Enter Search ..." aria-label="SEARCH" name="q">

                                  <button class="button_search" type="submit">search</button>
                                </form>
                            </div>
                            
</div>
	<div class="container banner">
		<figure id="banner-figure"><a href="#"><img src="{{ asset('/images/frontend_images/aboutus_page_banner.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
		<div class="text-banner">
			<!-- <h1>Tulips<br>Collection</h1>
			<p>SALE UP TO 20% OFF</p> -->
			<!-- <a href="#">Shop now</a> -->
		</div>
	</div>
	<div class="container content">
		<div class="row">
			<!-- sidebar -->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar" style="clear: left;">
				@include('layouts.frontLayout.front_sidebar')
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 content-flower">
				@foreach($products as $product)
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 product-flower">
						<div class="product-image-flower">
						<a href="{{ url('/product/'.base64_encode($product->id).'/'.($product->slug)) }}"><img src="{{ url('/images/backend_images/products/medium/'.$product->image) }}" class="img-responsive" alt="img-holiwood"></a>
						<div class="product-icon-flower">
							<a href="#"><i class="far fa-eye"></i></a>
							<a href="#"><i class="fas fa-shopping-basket"></i></a>
							<a href="#"><i class="far fa-heart"></i></a>
						</div>
						</div>
						<div class="product-title-flower">
						<h5><a href="{{ url('/product/'.base64_encode($product->id).'/'.($product->slug)) }}">{{$product->product_name}}</a></h5>
						
						<div class="prince">&#8377;&nbsp;{{$product->price}}<s class="strike">&#8377;{{$product->discount}}</s></div>
						<div class="add-cart">
							<a href="#" class="btn-add-cart">Add to cart</a>
							<a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
							<a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
						</div>
						</div>
					</div>
				@endforeach
			</div>	
		</div>
	</div>
</main>
@section('script')
	<script src = "{{ asset('js/frontend_js/jquery-1.10.2.710.js') }}"></script>
	<script src = "{{ asset('js/frontend_js/jquery-ui_c2.js') }}"></script>
@endsection('script')
@endsection