<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-homev3.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-res-v3.css') }}">

@extends('layouts.frontLayout.design')
@section('content')
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
		<div class="category">
<!-- Modal quick view -->
							<div id="myModal" class="modal fade" role="dialog">
							  <div class="modal-dialog">
							
							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        
							      </div>
							      <div class="modal-body">
							       <div class="tab-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div id="img-pill-1" class="tab-pane fade in active">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 title-quick">
						<figure class="fi-quick"><h1>QUICK VIEW</h1></figure>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<img src="img/340x420.png" class="img-responsive" alt="holiwood">
					</div>
				</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
							<h1>Queen Rose - Pink</h1>
						<p class="p1">It is a long established fact that a reader will be distracted  by the readable content of a page when looking at its layout.</p>
						<div class="star">
							<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
							<span>10 Rating(s) | Add Your Rating</span>
						</div>
						<div class="prince"><span>$250.9</span><s class="strike">$300.02</s></div>
						<figure class="fi-option"><p class="option">Option</p></figure>
						<div class="size">
							<span class="lb-size">Size <span class="sta-red">*</span></span><span class="lb-color">Color <span class="sta-red">*</span></span>
						</div>
						<div class="select-custom">
							<select>
								<option>S</option>
								<option>M</option>
								<option>L</option>
								<option>XL</option>
							</select>
							<a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a> <a href="#"><span class="color-4"></span></a> 
							<p class="require">Required Fields <span>*</span></p>
							<div class="Quality">
								
								<div class="input-group input-number-group">
									<span class="text-qua">Quanty:</span>
									  <div class="input-group-button">
									    <span class="input-number-decrement">-</span>
									  </div>
									  <input class="input-number" type="number" min="0" max="1000" value="01" >
									  <div class="input-group-button">
									    <span class="input-number-increment">+</span>
									  </div>
									  <span class="dola">$ </span><span class="total">250.9</span>
								</div>
								
							</div>
							<div class="add-cart">
								<a href="#" class="btn-add-cart">Add to cart</a>
								<a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
								<a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
							</div>
						</div>
						</div>
			</div>
			<div id="img-pill-2" class="tab-pane fade">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 title-quick">
						<figure class="fi-quick"><h1>QUICK VIEW</h1></figure>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<img src="img/340x420.png" class="img-responsive" alt="holiwood">
					</div>
				</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
							<h1>Queen Rose</h1>
						<p class="p1">It is a long established fact that a reader will be distracted  by the readable content of a page when looking at its layout.</p>
						<div class="star">
							<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
							<span>10 Rating(s) | Add Your Rating</span>
						</div>
						<div class="prince"><span>$300.02</span><s class="strike">$250.9</s></div>
						<figure class="fi-option"><p class="option">Option</p></figure>
						<div class="size">
							<span class="lb-size">Size <span class="sta-red">*</span></span><span class="lb-color">Color <span class="sta-red">*</span></span>
						</div>
						<div class="select-custom">
							<select>
								<option>S</option>
								<option>M</option>
								<option>L</option>
								<option>XL</option>
							</select>
							<a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a> <a href="#"><span class="color-4"></span></a> 
							<p class="require">Required Fields <span>*</span></p>
							<div class="Quality">
								
								<div class="input-group input-number-group">
									<span class="text-qua">Quanty:</span>
									  <div class="input-group-button">
									    <span class="input-number-decrement">-</span>
									  </div>
									  <input class="input-number" type="number" min="0" max="1000" value="01" >
									  <div class="input-group-button">
									    <span class="input-number-increment">+</span>
									  </div>
									  <span class="dola">$ </span><span class="total">250.9</span>
								</div>
								
							</div>
							<div class="add-cart">
								<a href="#" class="btn-add-cart">Add to cart</a>
								<a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
								<a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
							</div>
						</div>
						</div>	
			</div>
			<div id="img-pill-3" class="tab-pane fade">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 title-quick">
						<figure class="fi-quick"><h1>QUICK VIEW</h1></figure>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<img src="img/340x420.png" class="img-responsive" alt="holiwood">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
							<h1>Lavender</h1>
						<p class="p1">It is a long established fact that a reader will be distracted  by the readable content of a page when looking at its layout.</p>
						<div class="star">
							<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
							<span>10 Rating(s) | Add Your Rating</span>
						</div>
						<div class="prince"><span>$300.02</span><s class="strike">$250.9</s></div>
						<figure class="fi-option"><p class="option">Option</p></figure>
						<div class="size">
							<span class="lb-size">Size <span class="sta-red">*</span></span><span class="lb-color">Color <span class="sta-red">*</span></span>
						</div>
						<div class="select-custom">
							<select>
								<option>S</option>
								<option>M</option>
								<option>L</option>
								<option>XL</option>
							</select>
							<a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a> <a href="#"><span class="color-4"></span></a> 
							<p class="require">Required Fields <span>*</span></p>
							<div class="Quality">
								
								<div class="input-group input-number-group">
									<span class="text-qua">Quanty:</span>
									  <div class="input-group-button">
									    <span class="input-number-decrement">-</span>
									  </div>
									  <input class="input-number" type="number" min="0" max="1000" value="01" >
									  <div class="input-group-button">
									    <span class="input-number-increment">+</span>
									  </div>
									  <span class="dola">$ </span><span class="total">250.9</span>
								</div>
								
							</div>
							<div class="add-cart">
								<a href="#" class="btn-add-cart">Add to cart</a>
								<a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
								<a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
							</div>
						</div>
						</div>
						
			</div>
			<div id="img-pill-4" class="tab-pane fade">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 title-quick">
						<figure class="fi-quick"><h1>QUICK VIEW</h1></figure>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<img src="img/340x420.png" class="img-responsive" alt="holiwood">
					</div>
				</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
							<h1>Queen Rose - Yellow</h1>
						<p class="p1">It is a long established fact that a reader will be distracted  by the readable content of a page when looking at its layout.</p>
						<div class="star">
							<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
							<span>10 Rating(s) | Add Your Rating</span>
						</div>
						<div class="prince"><span>$300.02</span><s class="strike">$250.9</s></div>
						<figure class="fi-option"><p class="option">Option</p></figure>
						<div class="size">
							<span class="lb-size">Size <span class="sta-red">*</span></span><span class="lb-color">Color <span class="sta-red">*</span></span>
						</div>
						<div class="select-custom">
							<select>
								<option>S</option>
								<option>M</option>
								<option>L</option>
								<option>XL</option>
							</select>
							<a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a> <a href="#"><span class="color-4"></span></a> 
							<p class="require">Required Fields <span>*</span></p>
							<div class="Quality">
								
								<div class="input-group input-number-group">
									<span class="text-qua">Quanty:</span>
									  <div class="input-group-button">
									    <span class="input-number-decrement">-</span>
									  </div>
									  <input class="input-number" type="number" min="0" max="1000" value="01" >
									  <div class="input-group-button">
									    <span class="input-number-increment">+</span>
									  </div>
									  <span class="dola">$ </span><span class="total">250.9</span>
								</div>
								
							</div>
							<div class="add-cart">
								<a href="#" class="btn-add-cart">Add to cart</a>
								<a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
								<a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
							</div>
						</div>
						</div>	
			</div>
			</div>
			<ul class="nav nav-pills col-lg-6 col-md-6 col-sm-6 col-xs-12 img-pill">
			  <li class="active col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="pill" href="#img-pill-1"><img src="img/340x420.png" class="img-responsive" alt="holiwood"></a></li>
			  <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="pill" href="#img-pill-2"><img src="img/340x420.png" class="img-responsive" alt="holiwood"></a></li>
			  <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="pill" href="#img-pill-3"><img src="img/340x420.png" class="img-responsive" alt="holiwood"></a></li>
			  <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="pill" href="#img-pill-4"><img src="img/340x420.png" class="img-responsive" alt="holiwood"></a></li>
			</ul>
							      </div>
							      
							    </div>
							
							  </div>
							</div>
<!-- --------------------------- -->
<div class="container">
<!-- <h1>Category of Jenstore</h1> -->
	<ul class="nav nav-tabs menu-category">
		@foreach($categories as $category)
			<li class="new-menu"><a data-toggle="tab" href="#{{$category->category}}" id="new-menu">{{ $category->category }}</a><figure id="new-2" class="hidden-xs"></figure></li>
		@endforeach
		<!-- <li class="shop-menu"><a data-toggle="tab" href="#menu-tab-shop">Congratulations</a><figure id="shop-2" class="hidden-xs"></figure></li>
		<li class="wedding-menu"><a data-toggle="tab" href="#menu-tab-wedding">Wedding</a><figure id="wedding-2" class="hidden-xs"></figure></li>
		<li class="holiday-menu"><a data-toggle="tab" href="#menu-tab-holiday">Flower</a><figure id="holiday-2" class="hidden-xs"></figure></li> -->
	</ul>
<div class="row">
	<div class="tab-content">
		
	<!-- ------tab new---------------- -->
@foreach($categories as $category)
  <?php $products = App\Models\Galleryproduct::where('category',$category->id)->get(); ?>
	<div id="{{$category->category}}" class="tab-pane fade @if($category->id == 1) in active @endif">
		@if(count($products) > 0)
			@foreach($products as $product)
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
					<div class="product-image-category">
						<a href="#">
							<img src="{{ asset('images/backend_images/gallery/large/'.$product->image) }}" class="img-responsive" alt="holiwood">
						</a>
							<!-- <div class="product-icon-category">
								<a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
									
								<a href="#"><i class="fas fa-shopping-basket"></i></a>
								<a href="#"><i class="far fa-heart"></i></a>
							</div> -->
					</div>
				</div>
			@endforeach
		@endif
	</div>
@endforeach
</div>
	</div>
</div>
</main>
<script src = "{{ asset('js/frontend_js/jquery-1.10.2.710.js') }}"></script>
	<script src = "{{ asset('js/frontend_js/jquery-ui_c2.js') }}"></script>
@endsection