@extends('layouts.frontLayout.design')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<style>
.product-content .img-content img{
  width:65%;
}
fieldset {
	border: 0;
}
label {
	/* display: block; */
	margin: 30px 0 0 0;
}
.overflow {
	height: 200px;
}

.ui-controlgroup-vertical {
      width: 150px;
    }
    .ui-controlgroup.ui-controlgroup-vertical > button.ui-button,
    .ui-controlgroup.ui-controlgroup-vertical > .ui-controlgroup-label {
      text-align: center;
    }
    #car-type-button {
      width: 120px;
    }
    .ui-controlgroup-horizontal .ui-spinner-input {
      width: 20px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".controlgroup" ).controlgroup();
    $( ".controlgroup1" ).controlgroup();
    $( ".controlgroup2" ).controlgroup();
   
  } );
  </script>
<?php 
	$date = date("Y-m-d");
	$datetime = new DateTime($date);
	$datetime->modify('+1 day');
	$datetime->format('d M');

	$datetime1 = new DateTime($date);
	$datetime1->modify('+2 day');
	$datetime1->format('d M');
?>
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
	<div class="container">
		<div class="menu-breadcrumb">
				<ul class="breadcrumb">
  					<li><a href="homev3.html">Home</a></li>
  					<li><a href="flower.html">FLOWER</a></li>
  					<li><a href="#">{{$product->product_name}}</a></li>
				</ul>
		</div>
	</div>
<div class="product-detail">
	

	<div class="container">
		
			<div class="row">
				<div class="slider-for">
				
					<div class="product-content">
						<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 img-content">
      							<img src="{{ url('/images/backend_images/products/medium/'.$product->image) }}" class="img-responsive" alt="img-holiwood">
      					</div>
						  <form name="addtocartForm" id="addtocartForm" action="#" method="post">
							{{ csrf_field() }}
      						<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
      							<h1>{{$product->product_name}}</h1>
								<p class="p1">{{ Str::limit(strip_tags($product->description), 50) }}</p>
								<div class="star">
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<span>10 Rating(s) | Add Your Rating</span>
								</div>
								<div class="prince"><span>&#8377;&nbsp;{{$product->price}}</span><s class="strike">&#8377;{{$product->discount}}</s></div>
								
									<div class="Quality">
										
										<div class="input-group input-number-group">
											<span class="text-qua">Quanty:</span>
											  <div class="input-group-button">
											    <span class="input-number-decrement">-</span>
											  </div>
											  <input type="hidden" class="productprice" value="{{ $product->price }}">
											  <input class="input-number" type="number" min="0" max="1000" value="01" >
											  <div class="input-group-button">
											    <span class="input-number-increment">+</span>
											  </div>
											  <span class="dola">&#8377; </span><span class="total-prince">{{$product->price}}</span>
										</div>
										
									</div>
									<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
									<h6><i class="fa fa-shopping-bag"></i> Check product availability in your area</h6>
										<div class="form-inline pincode-search">
											<input type="number" name="pincode" id="chkPincode" class="form-control" name="product" placeholder="Enter your pincode">
											<button type="button" onclick="return checkPincode();" class="pl-2 pr-2 btn btn-secondary btn-lg" style="padding: 7px; margin: 15px 5px"><i class="fa fa-search"></i>
											</button>
											
											<input class="form-control datepicker" id="datepicker" data-date-format="mm/dd/yyyy" placeholder="Enter your date">
										</div>
										<span id="pincodeResponse"></span>

										<div id="dialog" title="Select Shipping Method">
											<p>
											<!-- <fieldset>
												<div class="controlgroup">
												<label for="transmission-standard">
													<label>Express Delivery</label>
													<label>Choose from any 5-hour slot during the day</label>
												</label>
												
												<input type="radio" name="transmission" id="Express Delivery">
												</div>
												
												<div class="controlgroup1">
												<label for="Morning Delivery">
													<label>Morning Delivery</label>
													<label>Your gift is delivered between 07:00 - 09:00 AM</label>
												</label>
												
												<input type="radio" name="transmission" id="Fixed Time Delivery">
												</div>
												<div class="controlgroup2">
												<label for="transmission-standard">
													<label>Fixed Time Delivery</label>
													<label>Choose from any 1-hour slot</label>
												</label>
												
												<input type="radio" name="transmission" id="Fixed Time Delivery">
												</div>
											</fieldset> -->

												
											</p>
										</div>

										<fieldset class="delivery_type">
											<select name="delivery_type" id="delivery_type">
											<option value="0">Select Delivery Type   </option>
											<option value="1">Express Delivery (Rs.19)</option>
											<option value="2">Morning Delivery (Rs.200)</option>
											<option value="3">Fixed Time Delivery (Rs.99)</option>
											<option value="4">Pre Midnight Delivery (Rs.249)</option>
											</select>
										</fieldset>
										<fieldset class="time_slot1">
											<select name="time_slot1" id="time_slot1">
											<option value="0">Select Time Slot   </option>
											<option value="1">09:00 - 14:oo hrs</option>
											<option value="2">12:00 - 17:00 hrs</option>
											<option value="3">16:00 - 21:00 hrs</option>
											<option value="4">17:00 - 23:00 hrs</option>
											</select>
										</fieldset>
										<fieldset class="time_slot2">
											<select name="time_slot2" id="time_slot2">
											<option value="0">Select Time Slot   </option>
											<option value="1">07:00 - 09:00 hrs</option>
											</select>
										</fieldset>
										<fieldset class="time_slot3">
											<select name="time_slot3" id="time_slot3">
											<option value="0">Select Time Slot   </option>
											<option value="1">10:00 - 11:00 hrs</option>
											<option value="2">11:00 - 12:00 hrs</option>
											<option value="3">12:00 - 13:00 hrs</option>
											<option value="4">13:00 - 14:00 hrs</option>
											</select>
										</fieldset>
										<fieldset class="time_slot4">
											<select name="time_slot4" id="time_slot4">
											<option value="0">Select Time Slot   </option>
											<option value="1">23:00 - 23:59 hrs</option>
											</select>
										</fieldset>
										<hr>
									<!-- <h6><i class="mdi mdi-truck-fast"></i> Order will be delivered between <b><?php echo $datetime->format('d M').' to '.$datetime1->format('d M') ?></b></h6> -->
									<div class="add-cart">
										<a href="#" class="btn-add-cart">Add to cart</a>
										<a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
										<a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
									</div>
      						</div>
						</form>
					</div>
				
					<!-- ------ end content 1----- -->
					@foreach($product_imgs as $product_img)
						<div class="product-content">
							<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 img-content">
									<img src="{{ url('/images/backend_images/products/medium/'.$product_img->image) }}" class="img-responsive" alt="img-holiwood">
								</div>
								<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
									<h1>{{ $product->product_name }}</h1>
									<p class="p1">{{ Str::limit($product->description, 50) }}</p>
									<div class="star">
										<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
										<span>10 Rating(s) | Add Your Rating</span>
									</div>
									<div class="prince"><span>&#8377;&nbsp;{{ $product->price }}</span><s class="strike">&#8377;{{$product->discount}}</s></div>
									<!-- <figure class="fi-option"><p class="option">Option</p></figure>
									<div class="size col-lg-4 col-md-6 col-sm-12 col-xs-12">
										<span class="lb-size">Size <span class="sta-red">*</span></span>
									<div class="select-custom">
										<select>
											<option>S</option>
											<option>M</option>
											<option>L</option>
											<option>XL</option>
										</select>
									</div>
									</div>
									<div class="color col-lg-8 col-md-6 col-sm-12 col-xs-12">
										<div class="div-color"><span class="lb-color">Color <span class="sta-red">*</span></span></div>
										<a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a>
										<a href="#"><span class="color-4"></span></a> <a href="#"><span class="color-5"></span></a>
									</div>
										<p class="require">Required Fields <span>*</span></p> -->
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
												<span class="dola">&#8377; </span><span class="total-prince">{{ $product->price }}</span>
											</div>
											
										</div>
										<div class="add-cart">
											<a href="#" class="btn-add-cart">Add to cart</a>
											<a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
											<a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
										</div>
									
								</div>
						</div>
					@endforeach
					<!-- ------ end content 2----- -->
					<!-- <div class="product-content">
						<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 img-content">
      							<img src="{{ asset('images/frontend_images/340x420.png') }}" class="img-responsive" alt="img-holiwood">
      						</div>
      						<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
      							<h1>Queen Rose - Pink</h1>
								<p class="p1">It is a long established fact that a reader will be distracted  by the readable<br class="hidden-md hidden-sm hidden-xs"> content of a page when looking at its layout.</p>
								<div class="star">
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<span>10 Rating(s) | Add Your Rating</span>
								</div>
								<div class="prince"><span>$250.9</span><s class="strike">$300.02</s></div>
								<figure class="fi-option"><p class="option">Option</p></figure>
								<div class="size col-lg-4 col-md-6 col-sm-12 col-xs-12">
									<span class="lb-size">Size <span class="sta-red">*</span></span>
								<div class="select-custom">
									<select>
										<option>S</option>
										<option>M</option>
										<option>L</option>
										<option>XL</option>
									</select>
								</div>
								</div>
								<div class="color col-lg-8 col-md-6 col-sm-12 col-xs-12">
									<div class="div-color"><span class="lb-color">Color <span class="sta-red">*</span></span></div>
									<a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a>
									 <a href="#"><span class="color-4"></span></a> <a href="#"><span class="color-5"></span></a>
								</div>
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
											  <span class="dola">$ </span><span class="total-prince">250.9</span>
										</div>
										
									</div>
									<div class="add-cart">
										<a href="#" class="btn-add-cart">Add to cart</a>
										<a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
										<a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
									</div>
								
      						</div>
					</div> -->
					<!-- ------ end content 3----- -->
					<!-- <div class="product-content">
						<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 img-content">
      							<img src="{{ asset('images/frontend_images/340x420.png') }}" class="img-responsive" alt="img-holiwood">
      						</div>
      						<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
      							<h1>Queen Rose - Pink</h1>
								<p class="p1">It is a long established fact that a reader will be distracted  by the readable<br class="hidden-md hidden-sm hidden-xs"> content of a page when looking at its layout.</p>
								<div class="star">
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<span>10 Rating(s) | Add Your Rating</span>
								</div>
								<div class="prince"><span>$250.9</span><s class="strike">$300.02</s></div>
								<figure class="fi-option"><p class="option">Option</p></figure>
								<div class="size col-lg-4 col-md-6 col-sm-12 col-xs-12">
									<span class="lb-size">Size <span class="sta-red">*</span></span>
								<div class="select-custom">
									<select>
										<option>S</option>
										<option>M</option>
										<option>L</option>
										<option>XL</option>
									</select>
								</div>
								</div>
								<div class="color col-lg-8 col-md-6 col-sm-12 col-xs-12">
									<div class="div-color"><span class="lb-color">Color <span class="sta-red">*</span></span></div>
									<a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a>
									 <a href="#"><span class="color-4"></span></a> <a href="#"><span class="color-5"></span></a>
								</div>
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
											  <span class="dola">$ </span><span class="total-prince">250.9</span>
										</div>
										
									</div>
									<div class="add-cart">
										<a href="#" class="btn-add-cart">Add to cart</a>
										<a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
										<a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
									</div>
								
      						</div>
					</div> -->
					<!-- ------ end content 4----- -->
				</div>
				<div class="slider-nav col-lg-5 col-md-6 col-sm-12 col-xs-12">
					<div><img src="{{ url('/images/backend_images/products/medium/'.$product->image) }}" class="img-responsive" alt="img-holiwood"></div>
					@foreach($product_imgs as $product_img)
						<div><img src="{{ url('/images/backend_images/products/medium/'.$product_img->image) }}" class="img-responsive" alt="img-holiwood"></div>
					@endforeach
				</div>
  				
				<div class="col-lg-7 connect-us col-md-6 col-sm-12 col-xs-12">
					<a href="#" id="like-fb"></a>
					<a href="#" id="like-tw"></a>
					<a href="#" id="like-gg"></a>
					<a href="#" id="like-share"></a>
				</div>
			
				
			</div>
		
	</div>
	<div class="product-text">
		<div class="container">
			<ul class="nav nav-tabs menu-tab">
  				<li class="active"><a data-toggle="tab" href="#decription">Decription</a><figure id="fi-decription"></figure></li>
  				<li><a data-toggle="tab" href="#product-tag">Product Tags</a><figure id="fi-product-tag"></figure></li>
  				<li><a data-toggle="tab" href="#write">Write Your Own Review</a><figure id="fi-write"></figure></li>
  				<li><a data-toggle="tab" href="#addtional">Additional Information</a><figure id="fi-addtional"></figure></li>
			</ul>

			<div class="tab-content">
			  <div id="decription" class="tab-pane fade in active">
			    <p>Indulge in the timeless elegance of our exquisite Rose Bouquet. Handcrafted with care, each bouquet features lush, fragrant roses in a stunning array of colors.
			    	<br>
					Whether for a special occasion or to brighten someone's day, our roses are sure to convey your heartfelt sentiments with beauty and grace.</p>
			  </div>
			  <div id="product-tag" class="tab-pane fade">
			    <p><ul><li>Roses</li>
					<li>Flower Bouquet</li>
					<li>Romantic Gift</li>
					<li>Floral Arrangement</li>
					<li>Gift for Her/Him</li>
					<li>Anniversary Flowers</li>
					<li>Valentine's Day Gift</li>
					<li>Birthday Surprise</li></ul></p>
					</div>
			  <div id="write" class="tab-pane fade">
			   <p>Absolutely stunning roses! The bouquet arrived fresh and beautifully arranged. My partner was thrilled with this gift. Highly recommend!</p>
			  </div>
			  <div id="addtional" class="tab-pane fade">
			   <p>Varieties available: Red roses, pink roses, white roses, yellow roses, and mixed colors.
Care instructions: Trim stems, change water every two days, and keep in a cool place away from direct sunlight.
Add-ons: Personalized message card, vase, or chocolates for a complete gift package.</p>
</div>
			</div>
		</div>
	</div>
	<div class="related">
		<div class="container">
			<h1>Related Products</h1>
			<div class="row">
				@foreach($products as $product)
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
						<div class="product-image-category">
							<figure class="sale"><a href="#"><img src="{{ asset('/images/backend_images/products/medium/'.$product->image) }}" class="img-responsive" alt="img-holiwood"></a></figure>
								<div class="product-icon-category">
									<a href="#"><i class="far fa-eye"></i></a>
									<a href="#"><i class="fas fa-shopping-basket"></i></a>
									<a href="#"><i class="far fa-heart"></i></a>
								</div>
						</div>
						<div class="product-title-category">
								<h5><a href="#">{{$product->product_name}}</a></h5>
								<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
								<div class="prince">&#8377;&nbsp;{{$product->price}}<s class="strike">&#8377;&nbsp;{{$product->discount}}</s></div>
						</div>
					</div>
				@endforeach
				<!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
					<div class="product-image-category">
							<a href="#"><img src="{{ asset('images/frontend_images/340x420.png') }}" class="img-responsive" alt="img-holiwood"></a>
							<div class="product-icon-category">
								<a href="#"><i class="far fa-eye"></i></a>
								<a href="#"><i class="fas fa-shopping-basket"></i></a>
								<a href="#"><i class="far fa-heart"></i></a>
							</div>
					</div>
					<div class="product-title-category">
							<h5><a href="#">Bouquet Lavender</a></h5>
							<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
							<div class="prince">$160.8</div>
					</div>
				</div> -->
		<!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
			<div class="product-image-category">
				<figure class="hot"><a href="#"><img src="{{ asset('images/frontend_images/340x420.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
					<div class="product-icon-category">
						<a href="#"><i class="far fa-eye"></i></a>
						<a href="#"><i class="fas fa-shopping-basket"></i></a>
						<a href="#"><i class="far fa-heart"></i></a>
					</div>
			</div>
			<div class="product-title-category">
					<h5><a href="#">Fun & Flirty By BloomNation</a></h5>
					<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
					<div class="prince">$200.7</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
			<div class="product-image-category">
					<a href="#"><img src="{{ asset('images/frontend_images/340x420.png') }}" class="img-responsive" alt="img-holiwood"></a>
					<div class="product-icon-category">
						<a href="#"><i class="far fa-eye"></i></a>
						<a href="#"><i class="fas fa-shopping-basket"></i></a>
						<a href="#"><i class="far fa-heart"></i></a>
					</div>
			</div>
			<div class="product-title-category">
					<h5><a href="#">Bouquet Rose</a></h5>
					<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
					<div class="prince">$350.4</div>
			</div>
		</div> -->
<!-- ------------------------------------------------ -->
		<!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
			<div class="product-image-category">
				<a href="#"><img src="{{ asset('images/frontend_images/340x420.png') }}" class="img-responsive" alt="img-holiwood"></a>
					<div class="product-icon-category">
						<a href="#"><i class="far fa-eye"></i></a>
						<a href="#"><i class="fas fa-shopping-basket"></i></a>
						<a href="#"><i class="far fa-heart"></i></a>
					</div>
			</div>
			<div class="product-title-category">
					<h5><a href="#">Elegant by BloomNation</a></h5>
					<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
					<div class="prince">$300.2<s class="strike">$250.9</s></div>
			</div>
		</div> -->
		<!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
			<div class="product-image-category">
					<figure class="hot"><a href="#"><img src="{{ asset('images/frontend_images/340x420.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
					<div class="product-icon-category">
						<a href="#"><i class="far fa-eye"></i></a>
						<a href="#"><i class="fas fa-shopping-basket"></i></a>
						<a href="#"><i class="far fa-heart"></i></a>
					</div>
			</div>
			<div class="product-title-category">
					<h5><a href="#">Tulipa Floriade - Red</a></h5>
					<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
					<div class="prince">$160.8</div>
			</div>
		</div> -->
		<!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
			<div class="product-image-category">
				<a href="#"><img src="{{ asset('images/frontend_images/340x420.png') }}" class="img-responsive" alt="img-holiwood"></a>
					<div class="product-icon-category">
						<a href="#"><i class="far fa-eye"></i></a>
						<a href="#"><i class="fas fa-shopping-basket"></i></a>
						<a href="#"><i class="far fa-heart"></i></a>
					</div>
			</div>
			<div class="product-title-category">
					<h5><a href="#">Winter White Bouquet</a></h5>
					<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
					<div class="prince">$200.7</div>
			</div>
		</div> -->
		<!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
			<div class="product-image-category">
					<figure class="hot"><a href="#"><img src="{{ asset('images/frontend_images/340x420.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
					<div class="product-icon-category">
						<a href="#"><i class="far fa-eye"></i></a>
						<a href="#"><i class="fas fa-shopping-basket"></i></a>
						<a href="#"><i class="far fa-heart"></i></a>
					</div>
			</div>
			<div class="product-title-category">
					<h5><a href="#">Rose - Red</a></h5>
					<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
					<div class="prince">$350.4</div>
			</div>
		</div> -->
		
			</div>
		</div>
		
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<!-- this is remove bcoz of dialog open -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
<script>
  $( function() {
    $( ".datepicker" ).datepicker();
	$("#dialog").dialog({
		autoOpen : false, modal : true, show : "blind", hide : "blind", position:['bottom',100]
	});
	$( ".controlgroup" ).controlgroup();
	$("#datepicker").on("change",function(){
        var selected = $(this).val();
		$("#dialog").dialog("open");
    });





	$( "#delivery_type" ).selectmenu();
	$( ".delivery_type" ).hide();
	$( ".time_slot1" ).hide();
	$( ".time_slot2" ).hide();
	$( ".time_slot3" ).hide();
	$( ".time_slot4" ).hide();
	$( "#time_slot1" ).selectmenu();
	$( "#time_slot2" ).selectmenu();
	$( "#time_slot3" ).selectmenu();
	$( "#time_slot4" ).selectmenu();
	
  } );
  </script>
@endsection