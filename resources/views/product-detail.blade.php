@extends('layouts.frontLayout.design')
@section('content')
@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-product-detail.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-res-product-detail.css') }}">
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.11/flatpickr.min.css" rel="stylesheet" />
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
		.alert {
    		margin-bottom: 45px !important;
		}
		.subprice {
			display:flex;
		}
</style>
@endsection('style')

<meta name="csrf-token" content="{{ csrf_token() }}" />                        
	<div class="container">
		<div class="menu-breadcrumb">
				<ul class="breadcrumb">
  					<li><a href="{{ url('/') }}">Home</a></li>
  					<li><a href="{{ url('/product-list') }}l">FLOWER</a></li>
  					<li><a href="#">{{$product->product_name}}</a></li>
				</ul>
		</div>
	</div>
	@if(Session::has('flash_message_error'))	
			
		<div class="alert alert-danger" role="alert">
		  <strong style="padding-left:105px">{!! session('flash_message_error') !!}</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
		@endif  			
		@if(Session::has('flash_message_success'))			
		<div class="alert alert-success" role="alert">
		  <strong style="padding-left:105px">{!! session('flash_message_success') !!}</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
		@endif
<div class="product-detail">
	

	<div class="container">
		
			<div class="row">
				<div class="slider-for">
					<div class="product-content">
						<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 img-content">
      							<img src="{{ url('/images/backend_images/products/medium/'.$product->image) }}" class="img-responsive dta" alt="img-holiwood">
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
								
								<div class="prince">&#8377;&nbsp;<span class="getPrice">{{$product->price}}</span><s class="strike">&#8377;{{$product->discount}}</s></div>
								
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
									<div class="row">
										<div class="size col-lg-8 col-md-6 col-sm-6 col-xs-12">
											<div class="d-flex  align-items-center">
											<span class="lb-size">Size:
												<!-- <span class="sta-red">* </span> -->
											</span>

											<div class="select-custom rose">
												<select class="selSize" name="size">
													<option value="0">-- Select option --</option>
													@foreach($product->attributes as $sizes)
													<option value="{{ $product->id }}-{{ $sizes->size }}">
														{{ $sizes->size }}
													</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
									<div class="size col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<h6><i class="fa fa-shopping-bag"></i> Check product availability in your area</h6>
										<div class="form-inline pincode-search" style="display:flex">
											<input type="number" name="pincode"  class="form-control pincode chkPincode{{$product->id}}" name="product" placeholder="Enter your pincode">
											<button type="button" data-id="{{$product->id}}" class="pl-2 pr-2 btn btn-secondary btn-lg checkpin" style="padding: 7px; margin: 15px 5px;margin-top: -2px;"><i class="fa fa-search"></i>
											</button>
											<div class="form-inline" id="datePopup{{$product->id}}" style="display:none">
												<input type="date" data-id="{{$product->id}}" class="selectedDate">
											</div>
											</div>
										</div>	
									</div>
										<span class="pincodeResponse"></span>
										<div class="brd"></div>
										<span class="confirmslottext"></span>
										<input type="hidden" class="confirmslot" readonly>
							
										<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
									<div class="add-cart">
									<button type="button" class="btn-add-cart" id="cartBtn" name="cartButton" value="Shopping Cart" title="Add this Product to cart"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
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
								<div class="prince">&#8377;&nbsp;<span class="getPrice">{{ $product->price }}</span><s class="strike">&#8377;{{$product->discount}}</s></div>
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
										<div class="form-inline pincode-search" style="display:flex">
											<input type="number" name="pincode"  class="form-control chkPincode{{$product->id}}" name="product" placeholder="Enter your pincode">
											<button type="button" data-id="{{$product->id}}" class="pl-2 pr-2 btn btn-secondary btn-lg checkpin" style="padding: 7px; margin: 15px 5px;margin-top: -2px;"><i class="fa fa-search"></i>
											</button>
													<div class="form-inline" id="datePopup{{$product->id}}" style="display:none">
														<input type="date" data-id="{{$product->id}}" class="selectedDate">
													</div>
											</div>
										</div>	
									</div>
										<span class="pincodeResponse"></span>
										
	
									<div class="add-cart">
									@if($total_stock>0)
										<button type="submit" class="btn-add-cart" id="cartButton" name="cartButton" value="Shopping Cart" title="Add this Product to cart"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
									@else
										<button type="submit" class="btn-add-cart" id="cartButton"  title="Add this Product to cart"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
									@endif
									</div>
      						</div>
						</form>
					</div>
					@endforeach
					<!-- ------ end content 2----- -->
				</div>
				@if(count($product_imgs) > 1)
				<div class="slider-nav col-lg-5 col-md-6 col-sm-12 col-xs-12">
					<div><img src="{{ url('/images/backend_images/products/medium/'.$product->image) }}" class="img-responsive" alt="img-holiwood"></div>
					@foreach($product_imgs as $product_img)
						<div><img src="{{ url('/images/backend_images/products/medium/'.$product_img->image) }}" class="img-responsive" alt="img-holiwood"></div>
					@endforeach
				</div>
  				@endif
			</div>
	</div>
	<input type="hidden" id="confirm_date" value="">
	<input type="hidden" id="confirm_slot" value="">
	<input type="hidden" id="confirm_price" value="">
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
	<div class="modal-dialog mdw">

	<!-- Modal content-->
	<div class="modal-content mcd">
		<div class="modal-header">
			<div class="d-flex align-items-center justify-content-space-around">
				<span><i class="fas fa-long-arrow-alt-left fa-2x"></i></span>
				<span>
				<h1 class="fa-2x shipping">Select Shipping Method</h1>
				</span>
				<span>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</span>
			</div>
                <hr />
		</div>
		<div class="modal-body">
		<div class="tab-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div id="img-pill-1" class="tab-pane fade in active">
			
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 detail">
					
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
<div id="calendarModal" class="modal" role="dialog">
<div class="modal-dialog"  style="width:360px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" style="height:370px;left:24px">
        <label id="flatpickr_time" style="width:200px;padding-left:65px;">Select Delivery Date</label>
      </div>
    </div>
  </div>
</div>

<div id="subproductModal" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content modal-footer">
 
    <button type="button" class="close" data-dismiss="modal">&times;</button>
   
	<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 detail"> -->
			<h1 style="text-align:center">Add on somthing to make it extra special!</h1><hr/>
		<!-- </div> -->
		<div>
		<form id="subproductform" action="{{ url('add-subproduct-cart') }}" method="post">
			<input type="hidden" value="" name="cart_id">
			<div class="row container-fluid">
				@foreach($subproduct as $product)
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 product-category">
						<div class="product-image-category">
								<img src="{{ asset('/images/backend_images/subproducts/large/'.$product->image) }}" class="img-responsive" alt="img-holiwood">
						</div>
						<div class="product-title-category">
							<h5><a href="#">{{ $product->name }}</a></h5>
							<div class="prince text-center">₹ {{ $product->price }}
								<input class="subproduct" type="checkbox" data-attr-price = "{{$product->price}}" name="subproduct[]" value="{{$product->id}}">
							</div>
						</div>
					</div>
				@endforeach
			</div><hr/>
			
			{{ csrf_field() }}
			
			<div class="row">
				<div class="col-lg-2 col-md-2">
					Price Details
				</div>
				<div class="col-lg-2 col-md-2 subprice">
					<p>Base item</p>
					&#8377;<p id="mainprs">1000</p>
					<p style="padding-left:20px">+</p>
				</div>
				
				<div class="col-lg-2 col-md-2 subprice">
					<p>Add-ons</p>
					&#8377;<p id="subprs">500</p>
					<p style="padding-left:20px">+</p>
				</div>
				
				<div class="col-lg-2 col-md-2 subprice">
					<p>Shipping</p>
					&#8377;<p id="shippingrs">19</p>
					<p style="padding-left:20px">=</p>
				</div>
				
				<div class="col-lg-2 col-md-2 subprice">
					<p>Total</p>
					<p id="totalrs">&#8377;1318</p>
				</div>
				<div class="col-lg-2 col-md-2">
					<button type="submit" id="continue_btn">Continue without ads</button>
				</div>
			</div>
			</form>	
		</div>
</div>

</div>
</div>

@section('script')

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> -->
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.11/flatpickr.min.js"></script>
<script>
var totalsub = 0;
$(document).ready(function(){
	const flatpickr_time = $('#flatpickr_time').flatpickr({
    //static: position the calendar inside the wrapper and next to the input element*.
    static: true,
	inline: true,
	minDate: "today"
  });

  $("#cartBtn").click(function(){
	alert("hello");
	var pincode = $(".pincode").val();
	alert(pincode);
	var confirmslot = $(".confirmslot").val();
	alert(confirmslot);
	if(pincode == '')
	{
		$(".pincodeResponse").html("<font color='red' style='font-size: 13px; font-weight: bold'><i class='fa fa-ban'></i> Please Check pincode first for delivery.</font>");
	}
	
	else{
		if(confirmslot == '')
		{
			$(".confirmslottext").html("<font color='red' style='font-size: 13px; font-weight: bold'><i class='fa fa-ban'></i> Please Select Slot First.</font>");

		}
		else{
			var form= $("#addtocartForm");
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				url: "{{url('/add-cart')}}",
				type: 'POST',
				data: form.serialize(),
				success: function (response) {
					console.log(response);
					console.log("hello");
					var mainprice = $(".getPrice").html();
					var shippingrs = $("#confirm_price").val();
					$("#mainprs").text(mainprice);
					$("#shippingrs").text(shippingrs);
					$("#subproductModal").modal('show');
					$("#mainproductprice").val(mainprice);
					$("#shippingprice").val(shippingrs);
				}
			});
		}
	}
  });
  $(".subproduct").click(function(){
	if(this.checked)
	{
		var price = $(this).attr("data-attr-price");
		// var sub_id = $(this).val();
		totalsub = parseInt(totalsub) + parseInt(price);
		const checkboxes = document.querySelectorAll('input[type="checkbox"]');
		const checkedOne = Array.from(checkboxes).some(x => x.checked);
		if(checkedOne == true)
		{
			$("#continue_btn").text("Continue With Add Ones");
		}
	}
	else{
		var price = $(this).val();
		totalsub = parseInt(totalsub) - parseInt(price);
		const checkboxes = document.querySelectorAll('input[type="checkbox"]');
		const checkedOne = Array.from(checkboxes).some(x => x.checked);
		if(checkedOne == false)
		{
			$("#continue_btn").text("Continue Without Add Ones");
		}
	}
	var mainprs = $("#mainprs").text();
	$("#subprs").text(totalsub);
	var subprs = totalsub;
	var shippingrs = $("#shippingrs").text();
	var total = parseInt(mainprs) + totalsub + parseInt(shippingrs);
	$("#totalrs").text(total);
	$("#subproductprice").val(totalsub);
	$("#totalprice").val(total);

  });
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
		var slotprice = $(this).attr("data-attr-price");
		$("#myModal").modal('hide');
		$("#confirm_slot").val(slottext);
		$("#confirm_price").val(slotprice);
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
			$(".confirmslot").val(confirm);
			$(".confirmslottext").text(confirm);
			$(".confirmslottext").show();
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
						// $("#calendarModal").modal('show');
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
					$(".confirmslottext").hide();
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
								shippingslot += '<div style="border: 1px solid black;height: 72px;width:600px"><input data-attr-price="'+resp[i]['price']+'" class="shipping_radio" type="radio" value="' + resp[i]['slot'] + '" name="shipping_method" style="margin-bottom: -78px;margin-left: 10px;"/><h4 style="margin-left:40px;display: inline-block;">' + resp[i]['slot'] + '</h4><h5 style="margin-left:40px;display: block;">Choose from any 5 hour slot during the day</h5><div class="add-cart" style="margin-top: -70px;margin-left: 420px;"><a href="#" class="btn-add-cart" style="background:#7d8035;width: 140px;">Rs.' + resp[i]['price'] + '</a></div></div><br/>	'
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
@endsection('script')

@endsection