@extends('front.layouts.design')
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
			<figure id="banner-about"><a href="#"><img src="{{ asset('front/img/1350x500.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
		<div class="title-banner">
			<h1>Order Completed</h1>
			<p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i>Order Completed</p>
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
                        <div class="item center active">
                            <p class="icon">03</p>
                            <h3>Order completed</h3>
                        </div>
                    </div>
                    <!-- End col-md-4 -->
                </div>
            </div>
            <!-- End container -->
            <div class="container container-ver2">
                <div class="box float-left order-complete center space-50">
                    <div class="icon space-20">
                        <img src="{{ asset('front/img/icon-order-complete.png') }}" alt="icon">
                    </div>
                    <p class="box center space-50">Thank you for shopping with us, your order is complete!</p>
                    <div class="box">
                        <a class="link-v1 lh-50 margin-right-20 space-20 color-brand" href="#" title="HOME PAGE">HOME PAGE</a>
                        <a class="link-v1 lh-50 rt space-20" href="#" title="CONTINUS SHOPPING">CONTINUS SHOPPING</a>
                    </div>
                </div>
            </div>
            <!-- End container -->
            <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-order.css') }}">

@endsection