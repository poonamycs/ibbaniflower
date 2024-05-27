<!DOCTYPE html>
<html>
<head>
	<title>Product Detail</title>
	<meta charset="utf-8">
	<!-- bootstrap vs fontawesome-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="icon" href="img/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-product-detail.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-res-product-detail.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-fix-nav.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-form-search-mobile.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}">

	<!-- modal -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-homev1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-res-v1.css') }}">

	<!-- GG FONT -->
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<style>
	.select{
		width:215px;
	}
	.selectedSlot,.selectedTime,.selectedDate{
		width:200px;
		height:36px;
	}
	.popup {
            display: none; /* Hide the popup by default */
            position: fixed; /* Position the popup */
            left: 50%; /* Center the popup horizontally */
            top: 50%; /* Center the popup vertically */
            transform: translate(-50%, -50%); /* Center the popup */
            background-color: #ffffff; /* Background color */
            border: 1px solid #000000; /* Border */
            padding: 20px; /* Padding */
            z-index: 1000; /* Ensure the popup is on top */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow */
            max-width: 400px; /* Maximum width of the popup */
            width: 80%; /* Set the width */
        }

        /* Close button style */
        .close {
            position: absolute; /* Position the close button */
            top: 10px; /* Position the close button 10px from the top */
            right: 10px; /* Position the close button 10px from the right */
            cursor: pointer; /* Set cursor to pointer */
        }
		.slider-nav{
			height:max-content;
		}
		/* .modal-content .detail .add-cart .btn-add-cart {
			display:block;
			background:none;
			color:none;
		} */
		div#timeslot {
			display: flex;
			align-items: center;
			flex-direction: column;
		}
		.size {
			margin-left:20px
		}
</style>
</head>
<body>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@include('layouts.frontLayout.header')
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
  					<li><a href="{{ url('/') }}">Home</a></li>
  					<li><a href="{{ url('/product-list') }}l">FLOWER</a></li>
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
						  <form name="addtocartForm" id="addtocartForm" action="{{ url('add-cart') }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="product_id" value="{{$product->id}}">
							<input type="hidden" name="product_name" value="{{ $product->product_name }}">
							<input type="hidden" name="price" class="price" value="{{ $product->price }}">
							<input type="hidden" name="email" value="{{ $product->email }}">
							<input type="hidden" name="image" value="{{ $product->image }}">
      						<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
      							<h1>{{$product->product_name}}</h1>
								<!-- <p class="p1">{{ Str::limit(strip_tags($product->description), 50) }}</p> -->
								<!-- <div class="star">
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<span>10 Rating(s) | Add Your Rating</span>
								</div> -->
								<div class="prince"><span class="getPrice">&#8377;&nbsp;{{$product->price}}</span><s class="strike">&#8377;{{$product->discount}}</s></div>
								<!-- <figure class="fi-option"><p class="option">Option</p></figure> -->
								<!-- <div class="size col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<span class="lb-size">Size <span class="sta-red">*</span></span>
								<div class="select-custom">
									<select>
										<option>S</option>
										<option>M</option>
										<option>L</option>
										<option>XL</option>
									</select>
								</div>
								</div> -->
								<!-- <div class="color col-lg-8 col-md-6 col-sm-6 col-xs-12">
									<div class="div-color"><span class="lb-color">Color <span class="sta-red">*</span></span></div>
									<a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a>
									 <a href="#"><span class="color-4"></span></a> <a href="#"><span class="color-5"></span></a>
								</div>
									
									<p class="require">Required Fields <span>*</span></p> -->
									<div class="Quality">
										
										<div class="input-group input-number-group">
											<span class="text-qua">Quantity:</span>
											  <div class="input-group-button">
											    <span class="input-number-decrement">-</span>
											  </div>
											  <input type="hidden" class="productprice" value="{{ $product->price }}">
											  <input class="input-number" type="number"  name="quantity" min="0" max="1000" value="01" readonly>
											  <div class="input-group-button">
											    <span class="input-number-increment">+</span>
											  </div>
											  <span class="dola">&#8377; </span><span class="total-prince getPrice">{{ $product->price }}</span>
										</div>
										
									</div>
									<br>
									<!-- <figure class="fi-option"><p class="option">Option</p></figure> -->
									<div class="row">
										<div class="size col-lg-4 col-md-6 col-sm-6 col-xs-12">
											<span class="lb-size">Size <span class="sta-red">*</span></span>
												<div class="select-custom">
													<select class="selSize" name="size"  required>
														<option value="">-- Select option below --</option>
														@foreach($product->attributes as $sizes)
														<option value="{{ $product->id }}-{{ $sizes->size }}"> {{ $sizes->size }}</option>
														@endforeach
													</select>
												</div>
										</div>
									<br/>
									<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
									<div class="size col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<h6><i class="fa fa-shopping-bag"></i> Check product availability in your area</h6>
										<div class="form-inline pincode-search">
											<input type="number" name="pincode"  class="form-control chkPincode{{$product->id}}" name="product" placeholder="Enter your pincode">
											<button type="button" data-id="{{$product->id}}" class="pl-2 pr-2 btn btn-secondary btn-lg checkpin" style="padding: 7px; margin: 15px 5px"><i class="fa fa-search"></i>
											</button>
													<div class="form-inline" id="datePopup{{$product->id}}" style="display:none">
														<input type="date" data-id="{{$product->id}}" class="selectedDate">
													</div>
											</div>
										</div>	
									</div>
										<span class="pincodeResponse"></span>
										
										<hr>
										<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
									<div class="add-cart">
									<button type="submit" class="btn-add-cart" id="cartButton" name="cartButton" value="Shopping Cart" title="Add this Product to cart"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
										<!-- <a href="#" class="btn-add-cart" id="cartButton" name="cartButton">Add to cart</a> -->
										<!-- <a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
										<a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a> -->
									</div>
								
      						</div>
							  </form>
					</div>
					<!-- ------ end content 1----- -->
					@foreach($product_imgs as $product_img)
					<div class="product-content">
					<form name="addtocartForm" id="addtocartForm" action="{{ url('add-cart') }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="product_id" value="{{$product->id}}">
							<input type="hidden" name="product_name" value="{{ $product->product_name }}">
							<input type="hidden" name="price" class="price" value="{{ $product->price }}">
							<input type="hidden" name="email" value="{{ $product->email }}">
							<input type="hidden" name="image" value="{{ $product->image }}">
						<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 img-content">
      							<img src="{{ url('/images/backend_images/products/medium/'.$product_img->image) }}" class="img-responsive" alt="img-holiwood">
      						</div>
      						<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
      							<h1>{{ $product->product_name }}</h1>
								<div class="prince"><span class="getPrice">&#8377;&nbsp;{{ $product->price }}</span><s class="strike">&#8377;{{$product->discount}}</s></div>
									<div class="Quality">
										
										<div class="input-group input-number-group">
											<span class="text-qua">Quantity:</span>
											  <div class="input-group-button">
											    <span class="input-number-decrement">-</span>
											  </div>
											  <input class="input-number" type="number"  name="quantity" min="0" max="1000" value="01" >
											  <div class="input-group-button">
											    <span class="input-number-increment">+</span>
											  </div>
											<span class="dola">&#8377; </span><span class="total-prince getPrice">{{ $product->price }}</span>
										</div>
										
									</div>
									<div class="row">
										<div class="size col-lg-4 col-md-6 col-sm-6 col-xs-12">
											<span class="lb-size">Size <span class="sta-red">*</span></span>
												<div class="select-custom">
													<select class="selSize" name="size"  required>
														<option value="">-- Select option below --</option>
														@foreach($product->attributes as $sizes)
														<option value="{{ $product->id }}-{{ $sizes->size }}"> {{ $sizes->size }}</option>
														@endforeach
													</select>
												</div>
										</div>
									<br/>
									<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
									<div class="size col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<h6><i class="fa fa-shopping-bag"></i> Check product availability in your area</h6>
										<div class="form-inline pincode-search">
											<input type="number" name="pincode"  class="form-control chkPincode{{$product->id}}" name="product" placeholder="Enter your pincode">
											<button type="button" data-id="{{$product->id}}" class="pl-2 pr-2 btn btn-secondary btn-lg checkpin" style="padding: 7px; margin: 15px 5px"><i class="fa fa-search"></i>
											</button>
													<div class="form-inline" id="datePopup{{$product->id}}" style="display:none">
														<input type="date" data-id="{{$product->id}}" class="selectedDate">
													</div>
											</div>
										</div>	
									</div>
										<span class="pincodeResponse"></span>
										
										<hr>
									<div class="add-cart">
									@if($total_stock>0)
										<button type="submit" class="btn-add-cart" id="cartButton" name="cartButton" value="Shopping Cart" title="Add this Product to cart"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
									@else
										<button type="submit" class="btn-add-cart" id="cartButton"  title="Add this Product to cart"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
									@endif
										<!-- <a href="#" class="btn-add-cart" id="cartButton" name="cartButton">Add to cart</a> -->
									</div>
      						</div>
						</form>
					</div>
					@endforeach
					<!-- ------ end content 2----- -->
				</div>
				<div class="slider-nav col-lg-5 col-md-6 col-sm-12 col-xs-12">
					<div><img src="{{ url('/images/backend_images/products/medium/'.$product->image) }}" class="img-responsive" alt="img-holiwood"></div>
					@foreach($product_imgs as $product_img)
						<div><img src="{{ url('/images/backend_images/products/medium/'.$product_img->image) }}" class="img-responsive" alt="img-holiwood"></div>
					@endforeach
					<!-- <div><img src="img/340x420.png" class="img-responsive" alt="img-holiwood"></div>
					<div><img src="img/340x420.png" class="img-responsive" alt="img-holiwood"></div> -->
				</div>
  				
				<div class="col-lg-7 connect-us col-md-6 col-sm-12 col-xs-12">
					<!-- <a href="#" id="like-fb"></a> -->
					<!-- <a href="#" id="like-tw"></a> -->
					<!-- <a href="#" id="like-gg"></a> -->
					<!-- <a href="#" id="like-share"></a> -->
				</div>
			
				
			</div>
		
	</div>
	<input type="hidden" id="confirm_date" value="">
	<input type="hidden" id="confirm_slot" value="">
	<input type="hidden" id="confirm_time" value="">
	<div class="product-text">
		<div class="container">
			<ul class="nav nav-tabs menu-tab">
  				<li class="active"><a data-toggle="tab" href="#decription">Decription</a><figure id="fi-decription"></figure></li>
  				<!-- <li><a data-toggle="tab" href="#product-tag">Product Tags</a><figure id="fi-product-tag"></figure></li> -->
  				<!-- <li><a data-toggle="tab" href="#write">Write Your Own Review</a><figure id="fi-write"></figure></li> -->
  				<li><a data-toggle="tab" href="#addtional">Additional Information</a><figure id="fi-addtional"></figure></li>
			</ul>

			<div class="tab-content">
			  <div id="decription" class="tab-pane fade in active">
			    	{{ strip_tags($product->description) }}
				</div>
			  <!-- <div id="product-tag" class="tab-pane fade">
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
			 </div> -->
			 <div id="addtional" class="tab-pane fade">
			   <p>{{ strip_tags($product->care) }}</p>
			</div>
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
			</div>
		</div>
	</div>
</div>
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content" style="width:700px">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		
		</div>
		<div class="modal-body">
		<div class="tab-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div id="img-pill-1" class="tab-pane fade in active">
			
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 detail">
					<h1>Select Shipping Method</h1><hr/>
					
					<div id="shippingslot"></div>
							
				</div>
			</div>


		</div>
		
	</div>
	</div>
	</div>
</div>

<div id="myModal1" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content" style="width:700px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body" style="width:100%">
				<div class="tab-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="img-pill-1" class="tab-pane fade in active">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 detail" id="timeslot"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('layouts.frontLayout.footer')
	<!-- boostrap & jquery -->
	<script src="{{ asset('js/frontend_js/jquery.min_af.js') }}"></script>
	<script src="{{ asset('js/frontend_js/bootstrap.min_0028.js') }}"></script>
	<script src="{{ asset('slick/slick.js') }}"></script>
	<!-- js file -->
	<script src="{{ asset('js/frontend_js/function-slick.js') }}"></script>
	<script src="{{ asset('js/frontend_js/function-flower.js') }}"></script>
	<script src="{{ asset('js/frontend_js/function-input-number.js') }}"></script>
	<!-- <script src="{{ asset('js/frontend_js/function-select-custom.js') }}"></script> -->
	<script src="{{ asset('js/frontend_js/function-back-top.js') }}"></script>
	<script src="{{ asset('js/frontend_js/function-sidebar.js') }}"></script>
	<script src="{{ asset('js/frontend_js/funtion-header-v3.js') }}"></script>
	<script src="{{ asset('js/frontend_js/function-search-v2.js') }}"></script>
	<!-- <script src="{{ asset('js/frontend_js/main.js') }}"></script> -->

	<!-- modal -->
	<!-- <script src="{{ asset('js/frontend_js/function-homev1.js') }}"></script> -->
	<script type="text/javascript" src="{{ asset('scrolling/TweenMax.min.js') }}"></script>
	<script src="{{ asset('scrolling/jquery.superscrollorama.js') }}"></script>
	<script src="{{ asset('js/frontend_js/function-scroll.js') }}"></script>

<!-- 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> -->

<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
<script>
$(document).ready(function(){

//change price and stock with size
$(".selSize").change(function(){
	// $(document).on('click',".selSize", function(){
	// alert("jb")
	var idSize = $(this).val();
	if(idSize==""){
		return false;
	}
	$.ajax({
		type:'get',
		url:'/get-product-price',
		data:{idSize:idSize},
		success:function(resp){
			// alert(resp);
			var arr = resp.split('#');
			$(".getPrice").html(arr[0]);
			$(".productprice").html(arr[0]);
			$(".productprice").val(arr[0]);
			$(".price").val(arr[0]);
			if(arr[1]==0){
				// $("#cartButton").hide();
				$("#cartButton").prop('disabled', true);
				$("#Availability").html("<span class='badge badge-danger'> Out of Stock</span>");
			}else{
				// $("#cartButton").show();
				$("#cartButton").prop('disabled', false);
				$("#Availability").html("<span class='badge badge-success'> In Stock</span>");
			}
		},error:function(){
			alert("Error");
		}
	});
});
});
	$(document).on('click',".shipping_radio", function(){
		// $('input[type=radio][name=shipping_method]').change(function() {
		var slottext = $('input[name="shipping_method"]:checked').val();
		$("#myModal").modal('hide');
		$("#confirm_slot").val(slottext);
		$.ajax({
				type:'post',
				data:{slottext:slottext},
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				url:'/check-time-slot',
				success:function(resp){	
					console.log(resp);
					var timeslot = '<h1>Select Time Slot</h1><hr/><h2>Express Delivery</h2>';
					for (i = 0; i < resp.length; ++i) {
						timeslot += '<div style="border: 1px solid black;height: 28px;width: 220px;"><input style="margin-left:45px" class="btn-add-time" type="radio" value="'+ resp[i]['time_slot'] +'" name="time_slot"> &nbsp;<span>'+ resp[i]['time_slot'] +'&nbsp;hrs</span></div><br/>'
							console.log(resp[i]['time_slot']);
						}
					$("#timeslot").html(timeslot);
					$("#myModal1").modal('show');
				},error:function(){
					alert("Error");
				}
			});
	});

	$(document).on('click',".btn-add-time", function(){
	var timetext = $('input[name="time_slot"]:checked').val();
		$("#myModal1").modal('hide');
		$("#confirm_time").val(timetext);
		
			var date = $("#confirm_date").val();
            var slot = $("#confirm_slot").val();
            var time = $("#confirm_time").val();
            var confirm = `Order will be delivered between - ${date}, Slot - ${slot}, Time - ${time}`;
           alert(confirm);
	});
		$(".checkpin").click(function() {
		var pincode = $(this).prev().val();
		var dataid = $(this).attr("data-id");
		if(pincode==""){
			alert("Please Enter Pincode"); return false;
		}
			$.ajax({
				type:'post',
				data:{pincode:pincode},
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				url:'/check-pincode',
				success:function(resp){		
					if(resp>0){
						$(".pincodeResponse").html("<font color='green' style='font-size: 13px; font-weight: bold'><i class='fa fa-check'></i> This pincode is available for delivery.</font>");
						$("#datePopup" + dataid).css({"display":"inline-block"});
					}else{
						$(".pincodeResponse").html("<font color='red' style='font-size: 13px; font-weight: bold'><i class='fa fa-ban'></i> This pincode is not available for delivery.</font>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});

				$(".selectedDate").change(function() {
					$(".pincodeResponse").hide();
					var shipping_date= $(this).val();
					var data_id = $(this).attr("data-id");
				if(shipping_date.length > 0)
				{
					$.ajax({
						type:'post',
						data:{shipping_date:shipping_date},
						headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
						url:'/check-shipping-method',
						success:function(resp){	
							console.log(resp);
							var shippingslot = '';
							for (i = 0; i < resp.length; ++i) {
								shippingslot += '<div style="border: 1px solid black;height: 72px;width:600px"><input class="shipping_radio" type="radio" value="' + resp[i]['slot'] + '" name="shipping_method" style="margin-bottom: -78px;margin-left: 10px;"/><h4 style="margin-left:40px;display: inline-block;">' + resp[i]['slot'] + '</h4><h5 style="margin-left:40px;display: block;">Choose from any 5 hour slot during the day</h5><div class="add-cart" style="margin-top: -70px;margin-left: 420px;"><a href="#" class="btn-add-cart" style="background:#7d8035;width: 140px;">Rs.' + resp[i]['price'] + '</a></div></div><br/>	'
									console.log(resp[i]['slot']);
								}
								$("#shippingslot").html(shippingslot);
								$("#confirm_date").val(shipping_date);
								$("#myModal").modal('show');
								
						}	
							
						});
					}
	});
        // function confirmSlot() {
        //     var date = $("#confirm_date").val();
        //     var slot = $("#confirm_slot").val();
        //     var time = $("#confirm_time").val();
		// 	alert(date);
		// 	alert(slot);
		// 	alert(time);
        //    document.getElementByClassName('confirmation').style.display = 'block';

        //     var slotdetails = document.getElementByClassName('slotdetails');
        //     // var slotdetails = $("#slotdetails");
		// 	alert(slotdetails);
        //     slotdetails.innerHTML = '';
        //     var button = document.createElement('label');
        //     button.innerText = `Order will be delivered between - ${date}, Slot - ${slot}, Time - ${time}`;
           
        //     slotdetails.appendChild(button);
        // }
		
</script>
</body>
</html>