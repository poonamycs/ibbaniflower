@extends('layouts.frontLayout.design')
<!-- cart -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-faq.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-shopping.css') }}">

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
	<div class="banner">
		<div class="container">
			<figure id="banner-about"><a href="#"><img src="{{ asset('/images/frontend_images/cartbanner.jpg') }}" class="img-responsive" alt="img-holiwood"></a></figure>
		<div class="title-banner">
			<h1>Shopping Cart</h1>
			<p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i>Shopping Cart</p>
		</div>
		
		</div>
		
	</div>
    <div class="cart-box-container">
        <div class="container container-ver2 space-padding-tb-30">
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
        <div class="row head-cart">
            <div class="col-md-4 space-30">
                <div class="item active center">
                    <p class="icon">01</p>
                    <h3>Shopping cart</h3>
                </div>
            </div>
            <!-- End col-md-4 -->
            <div class="col-md-4 space-30">
                <div class="item center">
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
    @if(count($userCart)>0)
    <div class="container container-ver2">
        <div class="box cart-container">
            <table class="table cart-table space-30">
                <thead>
                    <tr>
                        <th class="product-photo">List Products</th>
                        <th class="produc-name"></th>
                        <th class="produc-price">Price</th>
                        <th class="product-quantity">qty</th>
                        <th class="total-price">Total</th>
                        <th class="product-remove"></th>
                    </tr>
                </thead>
                <tbody>
                <?php $total_amount=0; $sub_total_price=0; ?>
                    @if(count($userCart)>0)
                    @foreach($userCart as $cart)
                        <tr class="item_cart">
                            <td class="product-photo"><img src="{{ asset('images/backend_images/products/small/'.$cart->image) }}" alt="{{ $cart->product_name }}"></td>
                            <td class="produc-name"><a href="{{ url('product/'.$cart->product_id) }}" title="">{{ $cart->product_name }}</a></td>
                            <td class="produc-price"><input value="{{ $cart->price }}" size="4" type="text"></td>
                            <td class="product-quantity">
                                <form enctype="multipart/form-data">
                                    <div class="product-signle-options product_15 clearfix">
                                        <div class="selector-wrapper size">
                                            <!-- <div class="quantity">
                                                <input data-step="1" value="1" title="Qty" class="qty" size="4" type="text">
                                            </div> -->
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
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="total-price">₹ {{ $cart->price * $cart->quantity }}</td>
                            <td class="product-remove"><a class="remove" href="{{ url('/cart/delete-product/'.$cart->id) }}" title="close"><img src="{{ asset('images/frontend_images/icon-delete-cart.png') }}" alt="close"></a></td>
                        </tr>
                    
                    <?php $maincart = DB::table('maincart')->where('cart_id',$cart->id)->get();?>
                    @if(count($maincart)>0)
                    @foreach($maincart as $mcart)
                    <?php $subproduct = App\Models\Subproduct::where('id',$mcart->subproduct_id)->first();?>

                        <tr class="item_cart">
                            <td class="product-photo"><img src="{{ asset('images/backend_images/subproducts/small/'.$subproduct->image) }}" alt="{{ $cart->product_name }}"></td>
                            <td class="produc-name"><a href="#" title="">{{ $subproduct->product_name }}</a></td>
                            <td class="produc-price"><input value="{{ $subproduct->price }}" size="4" type="text"></td>
                            <td class="product-quantity">
                                <form enctype="multipart/form-data">
                                    <div class="product-signle-options product_15 clearfix">
                                        <div class="selector-wrapper size">
                                            <!-- <div class="quantity">
                                                <input data-step="1" value="1" title="Qty" class="qty" size="4" type="text">
                                            </div> -->
                                            
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="total-price">₹ {{ $subproduct->price * 1 }}</td>
                            <td class="product-remove"><a class="remove" href="{{ url('/subcart/delete-product/'.$mcart->id) }}" title="close"><img src="{{ asset('images/frontend_images/icon-delete-cart.png') }}" alt="close"></a></td>
                        </tr>
                        <?php $sub_total_price = $sub_total_price + $subproduct->price;?>
                        @endforeach
                        @endif
                        @if(count($maincart)>0)
                            <?php $total_amount = $total_amount + ($cart->price*$cart->quantity) + $sub_total_price; ?>
                        @else
                            <?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
                        @endif
                        <?php $slot = DB::table('shipping_methods')->where('id',$cart->slot_id)->first(); ?>
                    @endforeach
                    @endif	
                    <!-- <tr class="item_cart">
                        <td class="product-photo"><img src="{{ asset('/images/frontend_images/340x420.png') }}" alt="Futurelife"></td>
                        <td class="produc-name"><a href="#" title="">Pink roses</a></td>
                        <td class="produc-price"><input value="$51.59" size="4" type="text"></td>
                        <td class="product-quantity">
                            <form enctype="multipart/form-data">
                                <div class="product-signle-options product_15 clearfix">
                                    <div class="selector-wrapper size">
                                        <div class="quantity">
                                            <input data-step="1" value="2" title="Qty" class="qty" size="4" type="text">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td class="total-price"></td>
                        <td class="product-remove"><a class="remove" href="#" title="close"><img src="{{ asset('/images/frontend_images/icon-delete-cart.png') }}" alt="close"></a></td>
                    </tr> -->
                    
                </tbody>
            </table>
            <div class="row-total">
                <div class="float-left">
                    <h3>Sub Total</h3>
                </div>
                <!--End align-left-->
                <div class="float-right">
                    <p>₹ {{ $total_amount }}</p>
                </div>
                <!--End align-right-->
            </div>
            <div class="box space-30">
                <!-- <div class="float-left">
                    <a class="link-v1 lh-50 margin-right-20 space-20" href="#" title="CLEAR SHOPPING CART">CLEAR SHOPPING CART</a>
                    <a class="link-v1 lh-50 space-20" href="#" title="UPDATE SHOPPING CART">UPDATE SHOPPING CART</a>
                </div> -->
                <!-- End float left -->
                <div class="float-left">
                    <a class="link-v1 lh-50 bg-brand" href="{{ url('/') }}" title="CONTINUS SHOPPING">CONTINUS SHOPPING</a>
                </div>
                <!-- End float-right -->
            </div>
            <!-- End box -->
            <div class="box cart-total space-30">
                <div class="row">
                    <!-- <div class="col-md-4 space-30">
                        <div class="item coupon-code">
                            <h3 class="title">COUPON CODE</h3>
                            <p>Enter your coupon code if you have one</p>
                            <form enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control space-20" id="coundpon">
                                </div>
                            </form>
                            <a class="link-v1 lh-50 rt" href="#" title="apply coupon">APPLY COUPON</a>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4 space-30"> -->
                        <!-- <div class="item">
                            <h3 class="title">ESTIMEDE SHIPPING AND TAX</h3>
                            <p>Enter your destinetion to get a shipping estimede </p>
                            <form enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class=" control-label" for="inputcountry">Country</label>
                                    <input type="text" class="form-control space-20" id="inputcountry">
                                </div>
                                <div class="form-group">
                                    <label class=" control-label" for="state">STATE/PROVINCE <span>*</span></label>
                                    <input type="text" class="form-control space-20" id="state">
                                </div>
                                <div class="form-group">
                                    <label class=" control-label" for="zip-code">ZIP/POSTAL CODE <span>*</span></label>
                                    <input type="text" class="form-control space-20" id="zip-code">
                                </div>
                            </form>
                            <a class="link-v1 lh-50 rt" href="#" title="ESTIMADE">ESTIMADE</a>
                        </div> -->
                    <!-- </div> -->
                    <!-- End col-md-4 -->
                    <div class="col-md-4 space-30 float-right">
                        <div class="item">
                            <h3 class="title">CART TOTAL</h3>
                            <p class="box"><span class="float-left">SHIPPING</span><span class="float-right">₹ {{$slot->price}}</span></p>
                            <p class="box space-30"><span class="float-left"><b>SUBTOTAL</b></span><span class="float-right"><b class="color-brand">₹ {{ ($slot->price) + $total_amount}}</b></span></p>
                            @auth
                                <a class="link-v1 lh-50 rt" href="{{ url('/checkout') }}" title="POCEEED TO CHECKOUT">POCEEED TO CHECKOUT</a>
                            @else
                                {{ session()->put('login','come_from_login')}}
                                <a class="link-v1 lh-50 rt" href="{{ url('/user-login') }}" title="POCEEED TO CHECKOUT">POCEEED TO CHECKOUT</a>
                            @endauth
                        </div>
                    </div>
                    <!-- End col-md-4 -->
                </div>
            </div>
            <!-- End box -->
    </div>
    <!-- End container -->
</div>
@endif
            <!-- End cat-box-container -->
        </div>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/frontend_css/style-faq.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/frontend_css/style-shopping.css') }}">
@endsection