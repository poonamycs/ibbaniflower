@extends('layouts/frontLayout/front_design')
@section('content')

<style>
    .select2-container{
        width: 100% !important;
    }
    .cart-sidebar-body{
        overflow-y: scroll;
    }
</style>

<section class="account-page section-padding">
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
            <div class="col-lg-11 col-md-11 col-sm-12 mx-auto">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        @include('layouts/frontLayout/user_settings_sidebar')
                    </div>
                    <div class="col-md-8">
                        <div class="card card-body account-right">
                            <div class="widget">
                                <div class="section-header float-left">
                                    <h5 class="heading-design-h5">Order ID #{{ $orderDetails->id }}</h5>
                                </div>
                                <div class="section-header float-right">
                                    <!-- <button class="btn btn-warning font-weight-bold" data-toggle="modal" data-target="#myModalReturn">Return Order</button> -->
                                    <button class="btn btn-danger font-weight-bold" data-toggle="modal" data-target="#myModalCancel" @if($orderDetails->order_status=="Cancelled") disabled @endif>@if($orderDetails->order_status=="Cancelled") Order Cancelled @else Cancel Order @endif</button>
                                </div>
                                <br>
                                <hr>
                                <div class="cart-sidebar-body">
                                    @foreach($orderDetails->orders as $pro)
                                        <div class="cart-list-product">
                                           <h5><a href="{{ url('product/'.$pro->product_id) }}">{{ $pro->product_name }}</a></h5>
                                           <h6>Product Code : <strong>{{ $pro->product_code }}</strong></h6>
                                           <h6><strong><span class="mdi mdi-approval"></span> {{ $pro->product_brand }}</strong> - {{ $pro->product_size }}</h6>
                                           <p class="offer-price mb-0">₹ {{ $pro->product_price }} <i class="mdi mdi-tag-outline"></i></p>
                                           Quantity : <span class="badge badge-success">x {{ $pro->product_qty }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- cancel order pop-up form -->
<div class="modal fade" id="myModalCancel" role="dialog">
    <div class="modal-dialog">    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align: center;">Order ID #{{ $orderDetails->id }}</h4>
            </div>

            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <form class="col-lg-12 col-md-12" name="sentMessage" id="contactForm" novalidate action="{{ url('orders/cancel-order/'.$orderDetails->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="order_status" value="Cancelled">
                            <div class="control-group form-group" style="width: 100%">
                                <div class="controls">
                                    <label>Reason to cancel order <span class="text-danger"><b>*</b></span></label>
                                    <select class="select2 form-control border-form-control" name="reason" required>
                                        <option value="">Select cancellation Reason</option>
                                        <option value="Order created by mistake">Order created by mistake</option>
                                        <option value="Delivery cost too high">Delivery cost too high</option>
                                        <option value="Item price too high">Item price too high</option>
                                        <option value="Did not want the product(s) any longer">Did not want the product(s) any longer</option>
                                        <option value="Found a better product">Found a better product</option>
                                        <option value="Found better pricing of the same product">Found better pricing of the same product</option>
                                        <option value="I did not authorize this purchase">I did not authorize this purchase</option>
                                        <option value="I want to change my shipping address">I want to change my shipping address</option>
                                        <option value="I want to change my billing address">I want to change my billing address</option>
                                        <option value="I want to change my payment method">I want to change my payment method</option>
                                        <option value="Did not like returns policy">Did not like returns policy </option>
                                        <option value="Other">Other </option>
                                    </select>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-danger float-right"><b>Confirm Cancellation</b></button>
                            <button type="button" class="btn btn-dark" data-dismiss="modal"><b>Close</b></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</div>


<!-- return order form -->
<div class="modal fade" id="myModalReturn" role="dialog">
    <div class="modal-dialog">    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align: center;">Order ID #{{ $orderDetails->id }}</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <form class="col-lg-12 col-md-12" name="sentMessage" id="contactForm" novalidate action="{{ url('') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="order_status" value="Cancelled">
                            <div class="control-group form-group" style="width: 100%">
                                <div class="controls">
                                    <label>Reason to return order <span class="text-danger"><b>*</b></span></label>
                                    <select class="select2 form-control border-form-control" name="state" required>
                                        <option value="">Select cancellation Reason</option>
                                        <option value="Order created by mistake">Order created by mistake</option>
                                        <option value="Delivery cost too high">Delivery cost too high</option>
                                        <option value="Item price too high">Item price too high</option>
                                        <option value="Did not want the product(s) any longer">Did not want the product(s) any longer</option>
                                        <option value="Found a better product">Found a better product</option>
                                        <option value="Found better pricing of the same product">Found better pricing of the same product</option>
                                        <option value="I did not authorize this purchase">I did not authorize this purchase</option>
                                        <option value="I want to change my shipping address">I want to change my shipping address</option>
                                        <option value="I want to change my billing address">I want to change my billing address</option>
                                        <option value="I want to change my payment method">I want to change my payment method</option>
                                        <option value="Did not like returns policy">Did not like returns policy </option>
                                        <option value="Other">Other </option>
                                    </select>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-warning float-right"><b>Confirm Request to Return</b></button>
                            <button type="button" class="btn btn-dark" data-dismiss="modal"><b>Close</b></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</div>

{{-- drawer --}}
<!-- <div class="cart-sidebar">
     <div class="cart-sidebar-header">
        <h5>
           My Cart <span class="text-success">(5 item)</span> <a data-toggle="offcanvas" class="float-right" href="#"><i class="mdi mdi-close"></i>
           </a>
        </h5>
     </div>
     <div class="cart-sidebar-body">
        <div class="cart-list-product">
           <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
           <img class="img-fluid" src="img/item/11.jpg" alt="">
           <span class="badge badge-success">50% OFF</span>
           <h5><a href="#">Product Title Here</a></h5>
           <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
           <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p>
        </div>
     </div>
     <div class="cart-sidebar-footer">
        <div class="cart-store-details">
           <p>Sub Total <strong class="float-right">$900.69</strong></p>
           <p>Delivery Charges <strong class="float-right text-danger">+ $29.69</strong></p>
           <h6>Your total savings <strong class="float-right text-danger">$55 (42.31%)</strong></h6>
        </div>
        <a href="checkout.html"><button class="btn btn-secondary btn-lg btn-block text-left" type="button"><span class="float-left"><i class="mdi mdi-cart-outline"></i> Proceed to Checkout </span><span class="float-right"><strong>$1200.69</strong> <span class="mdi mdi-chevron-right"></span></span></button></a>
     </div>
</div> -->

@endsection