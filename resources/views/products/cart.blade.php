@extends('layouts/frontLayout/front_design')
@section('content')

<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ url('/') }}"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span class="mdi mdi-chevron-right"></span> Cart
			</div>
		</div>
	</div>
</section>

<section class="cart-page section-padding">
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
		   	<div class="col-md-12">
		   		@if(count($userCart)>0)
		      	<div class="card card-body cart-table">
		         	<div class="table-responsive">
		            	<table class="table cart_summary">
			               	<thead>
			                  	<tr>
			                     	<th class="cart_product">Image</th>
			                     	<th>Product</th>
			                     	<th>Spec.</th>
			                     	<th>Unit price</th>
			                     	<th style="text-align: center;">Qty</th>
			                     	<th>Total</th>
			                     	<th class="action"> Remove</th>
			                  	</tr>
			               	</thead>
		               		<tbody>
		               			<?php $total_amount=0; ?>
		               			@if(count($userCart)>0)
		               			@foreach($userCart as $cart)
			                  	<tr>
			                     	<td class="cart_product"><a href="{{ url('product/'.$cart->product_id) }}"><img class="img-fluid" src="{{ asset('images/backend_images/products/small/'.$cart->image) }}" title="{{ $cart->product_name }}"></a></td>
			                     	<td class="cart_description">
			                        	<h5 class="product-name"><a href="{{ url('product/'.$cart->product_id) }}">{{ $cart->product_name }} </a></h5>
									</td>
			                     	<td class="availability in-stock">{{ $cart->size }}</td>
			                     	<td class="price"><span>₹ {{ $cart->price }}</span></td>
			                     	<td class="qty">
			                     		<center>
				                        <div class="input-group">
				                           <span class="input-group-btn">
				                           	@if($cart->quantity>1)
				                           		<a href="{{ url('/cart/update-quantity/'.$cart->id.'/-1') }}"><button class="btn btn-theme-round btn-number" type="button">-</button></a>
				                           	@else
				                           		<button class="btn btn-theme-round btn-number" type="button" disabled>-</button>
				                           	@endif
				                           </span>
				                           	<input type="text" max="10" min="1" value="{{ $cart->quantity }}" class="form-control border-form-control form-control-sm input-number" readonly>
				                           <span class="input-group-btn"> 
				                           		<a href="{{ url('/cart/update-quantity/'.$cart->id.'/1') }}"><button class="btn btn-theme-round btn-number" type="button">+</button></a>
				                           	</span>
				                        </div></center>
			                     	</td>
			                     	<td class="price"><span>₹ {{ $cart->price*$cart->quantity }}</span></td>
			                     	<td class="action">
			                        	<a class="btn btn-sm btn-danger" data-original-title="Remove" href="{{ url('/cart/delete-product/'.$cart->id) }}" title="" data-placement="top" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
			                     	</td>
			                  	</tr>
			                  	<?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
			                  	@endforeach
								@endif			                  	
			               	</tbody>
			               	<tfoot>
			                  	<!-- <tr>
			                    	<td colspan="1"></td>
			                     	<td colspan="4">
				                        <form class="form-inline float-right">
				                           <div class="form-group">
				                              <input type="text" placeholder="Enter discount code" class="form-control border-form-control form-control-sm">
				                           </div>
				                           &nbsp;
				                           <button class="btn btn-success float-left btn-sm" type="submit">Apply</button>
				                        </form>
			                     	</td>
			                     	<td colspan="2">Discount : $237.88 </td>
			                  	</tr> -->
			                  	<!-- <tr>
			                     	<td colspan="2"></td>
			                     	<td class="text-right" colspan="3">Total products (tax incl.)</td>
			                     	<td colspan="2">$437.88 </td>
			                  	</tr> -->
			                  	<tr>
			                     	<td class="text-right" colspan="6"><strong>Total &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></strong></td>
			                     	<td class="text-danger" colspan="2"><strong>₹ <?php echo $total_amount ?> </strong></td>
			                  	</tr>
			               	</tfoot>
		            	</table>
		         	</div>
		         	
		         	{{-- <button class="btn btn-success btn-lg btn-block text-left" type="button" onclick="javascript:window.history.back();"><span class="float-left"><i class="fa fa-angle-left"></i> CONTINUE SHOPPING</span><span class="float-right"></span></button> --}}
		         	
		         	<a onclick="javascript:window.history.back();">
		         		<button class="btn btn-outline-success text-capitalize text-left float-right mt-1 d-sm-block" type="button" @if(count($userCart)>0) @else disabled="true" @endif><span class="float-left"><i class="fa fa-angle-left"></i><span class="invisible">Proceed to Checkout a</span> <b>Continue Shopping</b> </span> </button>
		         	</a>
		         	<a href="{{ url('checkout/') }}">
		         		<button class="btn btn-secondary text-capitalize text-left float-right mt-1 d-sm-block" type="button" @if(count($userCart)>0) @else disabled="true" @endif><span class="float-left"><i class="mdi mdi-cart-outline"></i> Proceed to Checkout &nbsp;&nbsp;</span> <span class="float-right"><strong>₹ <?php echo $total_amount ?></strong> <span class="mdi mdi-chevron-right"></span></span></button>
		         	</a>
		      	@else
		      	<div class="container">
					<center><img src="{{ asset('images/frontend_images/shopping-cart.png') }}" style="height: 170px;"></center>
					<p class="saved-message mb-2 text-center"><b>Your cart is empty!</b></p>
					<center><a href="{{ url('products/') }}" class="btn btn-success btn-lg"> Continue Shopping <i class="fa fa-angle-right"></i></a></center>
				</div>
				@endif
		   </div>
		</div>
	</div>
</section>

<style>
	@media screen and (min-width: 767px){
		.input-group {
			width: 100%;
		}
	}
</style>

@endsection