@extends('layouts.frontLayout.design')
@section('content')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-about.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-res-about.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-checkout.css') }}">
@endsection('style')
<main>
	<div class="banner">
		<div class="container">
			<figure id="banner-about"><a href="#"><img src="{{ asset('images/frontend_images/checkoutbanner.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
            <div class="title-banner">
                <h1>Checkout</h1>
                <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i>Checkout</p>
            </div>
		</div>
		
	</div>
<div class="container container-ver2 space-padding-tb-30">
                    <div class="row head-cart">
                        <div class="col-md-4 space-30">
                            <div class="item active center">
                                <p class="icon">01</p>
                                <h3>Shopping cart</h3>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                        <div class="col-md-4 space-30">
                            <div class="item active center">
                                <p class="icon">02</p>
                                <h3>Check out</h3>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                        <div class="col-md-4 space-30">
                            <div class="item center">
                                <p class="icon">03</p>
                                <h3>Order completed</h3>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                    </div>
                </div>
                <!-- End container -->
            <div class="cart-box-container check-out">
                <div class="container container-ver2">
                <form method="post" action="{{ url('/checkout') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="title-brand">BILLING ADDRESS</h3>
                            <form class="form-horizontal">
                                <div class="form-group col-md-6">
                                    <label for="inputfname" class=" control-label">Full Name <span class="color">*</span></label>                            
                                    <input type="text" placeholder="Enter your first name..." id="inputfname" name="name" class="form-control" value="{{Auth::user()->name}}">  
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label for="inputlname" class=" control-label">Last Name <span class="color">*</span></label>                            
                                    <input type="text" placeholder="Enter your last name..." id="inputlname" class="form-control">  
                                </div> -->
                                <!-- <div class="form-group col-md-12">
                                    <label for="inputcompany" class=" control-label">Company Name<span class="color">*</span></label>                            
                                    <input type="text" placeholder="Enter your company name..." id="inputcompany" class="form-control">  
                                </div> -->
                                <div>
                                    <div class="form-group col-md-6">
                                        <label for="inputemail" class=" control-label">Email<span class="color">*</span></label>                            
                                        <input type="text" placeholder="Enter your email..." id="inputemail" name="email" class="form-control" value="{{Auth::user()->email}}">  
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputphone" class=" control-label">Phone<span class="color">*</span></label>                            
                                        <input type="text" placeholder="Enter your phone..." id="inputphone" name="phone" class="form-control">  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputcountry1" class="control-label">COUNTRY<span class="color">*</span></label>
                                    <select  class="select2 form-control border-form-control" name="country" required>
                                        <option value="">-- Select option from below --</option>
                                        @foreach($countries as $country)
                                        <option value="{{ $country->id }}"> {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div> 
                                <div class="form-group">
                                    <label for="inputstreet" class=" control-label">Adress<span class="color">*</span></label>                            
                                    <input type="text" placeholder="Enter your address..." id="inputstreet" name="address" class="form-control space-20">  
                                    <!-- <input type="text" placeholder="Enter the apartment, floor, suite, etc..." id="inputapartment" class="form-control">  -->
                                </div>                        
                                <div class="form-group col-md-6">
                                    <label for="inputcountry" class=" control-label">Town/City<span class="color">*</span></label>                            
                                    <input type="text" placeholder="Enter your Town..." id="inputcountry" name="city" class="form-control space-20">
                                </div>
                                <div>
                                    <!-- <div class="form-group col-md-6">
                                        <label for="inputfState" class=" control-label">COUNTY <span class="color">*</span></label>                            
                                        <input type="text" placeholder="Select your county..." id="inputfState" class="form-control">  
                                    </div> -->
                                    <div class="form-group col-md-6">
                                        <label for="inputpostcode" class=" control-label">POSTCODE <span class="color">*</span></label>                            
                                        <input type="text" placeholder="Enter your postcode..." name="pincode" id="inputpostcode" class="form-control" value="{{ $cart->pincode }}" readonly>  
                                    </div>    
                                </div> 
                                <!-- <label for="check-1" class="form-check space-50"><input type="checkbox" name="check1" id="check-1"><span class="checkmark"></span> Create an account?</label>
                                <label for="check-2" class="form-check space-20"><input type="checkbox" name="check2" id="check-2"><span class="checkmark"></span> Ship to a different address?</label> -->
                            </form>
                            
                            
                        </div>
                        <!-- End col-md-8 -->
                        <div class="col-md-6 space-30">
                            <div class="box">
                                <h3 class="title-brand">YOUR ORDER</h3>
                                <div class="info-order">
                                    <div class="product-name">
                                        <ul>
                                            <li class="head">
                                                <span class="name">PRODUCTS NAME</span>
                                                <span class="qty"><b>QTY</b></span>
                                                <span class="total"><b>SUB TOTAL</b></span>
                                            </li>
                                            <?php $total_amount=0; $sub_total_price=0; ?>
                                            @foreach($usercart as $cart)
                                                <li>
                                                    <span class="name">{{ $cart->product_name }}</span>
                                                    <span class="qty">{{ $cart->quantity }}</span>
                                                    <span class="total"> {{ $cart->quantity* $cart->price }} </span>
                                                </li>
                                                <?php $maincart = DB::table('maincart')->where(['cart_id'=>$cart->id])->get();?>
                                                @if(count($maincart)>0)
                                                @foreach($maincart as $mcart)
                                                <?php $subproduct = App\Models\Subproduct::where(['id'=>$mcart->subproduct_id])->first();?>
                                                    <li>
                                                        <span class="name">{{ $subproduct->product_name }}</span>
                                                        <span class="qty"> 1 </span>
                                                        <span class="total"> {{ $subproduct->price }} </span>
                                                    </li>
                                                    <?php $sub_total_price = $sub_total_price + $subproduct->price;
                                                    
                                                    ?>
                                                @endforeach
                                                @endif
                                                @if(count($maincart)>0)
                                                    <?php $total_amount = $total_amount + ($cart->price*$cart->quantity) + $sub_total_price; ?>
                                                @else
                                                    <?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
                                                @endif
                                                <?php $slot = DB::table('shipping_methods')->where('id',$cart->slot_id)->first(); ?>
                                            @endforeach
                                            <!-- <li>
                                                <span class="name">Toldbod Lamp</span>
                                                <span class="qty">02</span>
                                                <span class="total">$190.00</span>
                                            </li>
                                            <li>
                                                <span class="name">Getama Sofa</span>
                                                <span class="qty">03</span>
                                                <span class="total">$270.00</span>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <!-- End product-name -->
                                    <ul class="product-order">
                                        <li>
                                            <span class="left">CART SUBTOTAL</span>
                                            <span class="right">₹ {{ $total_amount }}</span>
                                        </li>
                                        <li>
                                            <span class="left">SHIPPING & HANDLING</span>
                                            <span class="right">₹ {{$slot->price}}</span>
                                        </li>
                                        <li>
                                            <span class="left">ORDER TOTAL</span>
                                            <span class="right brand">₹ {{ ($slot->price) + $total_amount}}</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End info-order -->
                                <div class="payment-order box float-left">
                                <h3 class="title-brand">PAYMENT MENTHOD</h3>
                                <ul class="tabs">
                                    <li>
                                        <i class="icon"></i>
                                        <h4>Direct Bank Transfer</h4>
                                        <p>Make your payment directly info our bank account. Please use your order ID as the
                                        payment reference. You product won't be shipped untill payment confiimation. </p>
                                    </li>
                                    <li>
                                        <i class="icon"></i>
                                        <h4>Cheque Payment</h4>
                                        
                                    </li>
                                    <li>
                                        <i class="icon"></i>
                                        <h4>PayPal</h4>
                                    </li>
                                    <li>
                                        <i class="icon"></i>
                                        <h4>I've raed and accept the </h4><a href="#" title="Temr & conditions">Temr & conditions</a>
                                    </li>
                                </ul>
                                </div>
                                <a class="link-v1 box lh-50 rt full" href="#" title="PLACE ORDER">PLACE ORDER</a>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- End row -->
                </div>
                <!-- End container -->
            </div>
            <!-- End cat-box-container -->
@section('script')
    
@endsection('script')
@endsection