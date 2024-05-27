<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-homev3.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-res-v3.css') }}">
@extends('layouts.frontLayout.design')
@section('content')
@section('style')

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
	<div class="slider-banner">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="item slide2">
				<img src="https://landing.engotheme.com/html/jenstore/demo/img/homev3-slider2.jpg" alt="holiwood">
				<div class="carousel-caption">  
					<h1>New<br>Collections</h1>
					<h2>A PERPECT BOUQUET</h2>
					<a href="#">Shop now</a>
				</div>
			</div>
		</div> 
	</div>
<!-- </div> -->
<div class="show-img">
	<div class="container">
		<div class="row">
			<div class="show-item">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-1">
				<figure id="figure-show-1"><a href="#"><img src="https://landing.engotheme.com/html/jenstore/demo/img/homev3-show-image1.jpg" class="img-responsive" alt="holiwood"></a></figure>
				<div class="show-title-1">
					<h1>Lavender<br>Collections</h1>
					<h2>SALE UP TO 20% OFF</h2>
					<a href="#">Read more</a>
				</div>
				
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-2">
				<figure id="figure-show-2"><a href="#"><img src="https://landing.engotheme.com/html/jenstore/demo/img/homev3-show-image2.jpg" class="img-responsive" alt="holiwood"></a></figure>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container content">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content-flower">
				@foreach($trendingproduct as $product)
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
						<div class="product-image-category">
							<a href="#"><img src="{{ asset('images/backend_images/trending/medium/'.$product->image) }}" class="img-responsive" alt="holiwood"></a>
								<!-- <div class="product-icon-category">
									<a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
										
									<a href="#"><i class="fas fa-shopping-basket"></i></a>
									<a href="#"><i class="far fa-heart"></i></a>
								</div> -->
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
<!-- <script src="{{ asset('js/frontend_js/function-time-counter.js') }}"></script> -->
@endsection('script')
@endsection