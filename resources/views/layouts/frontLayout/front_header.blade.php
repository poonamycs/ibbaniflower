<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta charset="utf-8">
<!-- bootstrap vs fontawesome-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="icon" href="{{ asset('images/frontend_images/favicon.png') }}" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-homev1.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-res-v1.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-fix-nav.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-form-search-mobile.css') }}">
<!-- scroll -->


<!-- GG FONT -->
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<style>
	@media (min-width: 1200px)
	{
		.col-lg-4:nth-child(3n+1){
			clear:none;
		}
	}
	.menu-main li.shop-menu .dropdown-menu .li-banner {
		padding:0px 0px 0px 0px;
	}
	.col-lg-4{
		 padding-right: 15px;
	}
</style>
</head>
<body>
<header class="navbar-fixed-top pos-header" id="header-v1">
<nav class="hidden-xs">
	<div class="container">
		<ul class="nav navbar-nav nav-help">
			<li>800 123 654 78</li>
			<li>ibbaniflowers@gmail.com</li>
		</ul>
		<ul class="nav navbar-nav navbar-right language">
			<li class="dropdown eng-language"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Eng</a><figure id="language-figure"></figure>
					<ul class="dropdown-menu">
						<li><a href="#">Eng</a></li>
						<li><a href="#">France</a></li>
					</ul>
			</li>
		</ul>
	</div>
</nav>

	<div class="container">
		<div class="row">
			<div class="navbar-header mobile-menu">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<i class="fas fa-bars"></i>                 
				</button>
			</div>
		<div class="collapse navbar-collapse col-lg-6 col-md-6 col-sm-12 col-xs-12" id="myNavbar">
			<form class="hidden-lg hidden-md form-group form-search-mobile">
				<input type="text" name="search" placeholder="Search here..." class="form-control">
				<button type="submit"><img src="{{ asset('/images/frontend_images/Search.png') }}" alt="search" class="img-responsive"></button>
			</form>
			<ul class="nav navbar-nav menu-main">
				<li><figure id="btn-close-menu" class="hidden-lg hidden-md"><i class="far fa-times-circle"></i></figure></li>
				<li class="li-home">
					<a href="{{ url('/') }}">Home</a>
					
				</li>
				<li class="shop-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Flowers</a><figure id="shop-1" class="hidden-sm hidden-xs"></figure>
					<div class="dropdown-menu">
				<div class="container container-menu">
					<ul class="row">
				<li class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<ul>
						<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
							<ul>
									<li><a href="#">By Occaions </a> </li>
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Birthday</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Anniversary</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Wedding</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Love n ROmance</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Congratulations</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Sympathy n Funeral</a></li>
							</ul>
						</li>
						<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
							<ul>
								<li><a href="#">By type </a></li> 
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Roses</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Carnations</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Orchids</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Gerberas</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Lilies</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Mixed Flowers</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Exotic Flowers</a></li>
							</ul>
						</li>
						<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
							<ul>
									<li><a href="#">By collection </a></li>
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Flower Subscription</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Flower Boquets</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Flower Arrangments</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Flagship Collection</a></li>
							</ul>
						</li>
						
					</ul>
				</li>
				<li class="col-lg-4 col-md-4 hidden-sm hidden-xs li-banner">
					<a href="#"><img src="{{ asset('images/frontend_images/shopbanner.png') }}" alt="img-holiwood"></a>
				</li>
				
					</ul>
				</div>
			</div>
				</li>
			
			<li class="wedding-menu"><a href="{{ url('/about') }}">About us</a><figure id="wedding-1" class="hidden-sm hidden-xs"></figure></li>
			<!-- <li class="wedding-menu"><a href="about.html">Corporate</a><figure id="wedding-1" class="hidden-sm hidden-xs"></figure></li> -->
			<li class="shop-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Corporate</a><figure id="shop-1" class=" hidden-sm hidden-md hidden-xs"></figure>
					<div class="dropdown-menu">
				<div class="container1 container-menu1">
					<ul class="row">
				<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ul>
						<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu-home-lv2">
							<ul>
								<li><a href="#">SHOP PAGE</a> </li>
								<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-right-sidebar.html">Occaions Details</a></li>
								<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-left-sidebar.html">Decoration</a></li>
							</ul>
						</li>
					</ul>
				</li>
				</ul></div></div>
			</li>
			<!-- <li class="wedding-menu"><a href="about.html">Media</a><figure id="wedding-1" class="hidden-sm hidden-xs"></figure></li> -->
			<li class="shop-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Media</a><figure id="shop-1" class=" hidden-sm hidden-md hidden-xs"></figure>
					<div class="dropdown-menu">
				<div class="container1 container-menu1">
					<ul class="row">
				<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ul>
						<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu-home-lv2">
							<ul>
								<li><a href="#">SHOP PAGE</a> </li>
								<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-right-sidebar.html">Gallery</a></li>
								<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/blog') }}">Blog</a></li>
							</ul>
						</li>
					</ul>
				</li>
				</ul></div></div>
			</li>
			<!-- <li class="blog-menu dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a><figure id="blog-1" class=" hidden-sm hidden-md hidden-xs"></figure>
							<ul class="menu-home-lv2 dropdown-menu">
								<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="blog.html">Blog right sidebar</a></li>
								<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
								<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="blog-no-sidebar.html">Blog no sidebar</a></li>
								<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-post-left-sidebar.html">Singel post left sidebar</a></li>
								<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-post-right-sidebar.html">Singel post right sidebar</a></li>
								<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-post-no-sidebar.html">Singel post no sidebar</a></li>
							</ul>
						</li> -->
			<li class="contact-menu"><a href="{{ url('/contact') }}">Contact</a><figure id="contact-1" class="hidden-sm hidden-xs"></figure></li>
			<li class="hidden-lg hidden-md"><a href="#"><i class="far fa-user"></i> My Account</a></li>
			<li class="hidden-lg hidden-md hidden-sm phone-mobile">+91 9380918884</li>
			<li class="hidden-lg hidden-md hidden-sm phone-mobile">ibbaniflowers@gmail.com</li>
			</ul>
		</div>
	<ul class="logo col-lg-2 col-md-2 col-sm-7 col-xs-7">
		<li><a href="{{ url('/') }}"><img src="{{ asset('images/frontend_images/logo.png') }}" class="img-responsive" alt="img-holiwood" style="height:100px;width:100px"></a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right col-lg-4 col-md-4 col-sm-5 col-xs-5" style="padding-top:50px">
	@if(empty(Auth::check()))
		<li class="icon-user hidden-sm hidden-xs"><a href="{{ url('user-login') }}"><img src="{{ asset('images/frontend_images/user.png') }}" alt="img-holiwood" style="width: 25px;"></a></li>
	@else
	<li class="icon-user hidden-sm hidden-xs">
		<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="far fa-user"></i>
		<!-- <img alt="logo" src="{{ asset('images/frontend_images/user/1.jpg')}}"> <span class="case"> -->
			
		</a>
		<ul class="menu-home-lv2 dropdown-menu">
			<li class="li-home"><a href="{{ url('orders/') }}">My Orders</a></li>
			<li class="li-home"><a href="{{ url('my-wishlist') }}">My Wishlist</a></li>
			<li class="li-home"><a href="{{ url('account/') }}">My Account</a></li>
			<li class="li-home"><a href="{{ url('password-setting/') }}">Change Password</a></li>
			<li class="li-home"><a href="{{ url('user-logout/') }}">Logout</a></li>
		</ul>

	</li>
	@endif
		<li class="dropdown cart-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('/images/frontend_images/cart.png') }}" alt="img-holiwood"></a>
			<div class="dropdown-menu">
				<div class="cart-1">
					<div class="img-cart"><img src="{{ asset('/images/frontend_images/340x420.png') }}" class="img-responsive" alt="img-holiwood"></div>
					<div class="info-cart">
						<h1>Pink roses</h1>
						<span class="number">x1</span>
						<span class="prince-cart">$207.2</span>
					</div>
				</div>
				
				<div class="total">
					<span>Total:</span>
					<span>$621.6</span>
				</div>
				<div id="div-cart-menu">
					<a href="#">ADD TO CART</a>
					<a href="#" class="check">CHECK VIEW</a>
				</div>
			</div>
		</li>
		<!-- <li class="icon-user hidden-sm hidden-xs"><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
		<li class="icon-user hidden-sm hidden-xs"><a href="#"><img src="{{ asset('/images/frontend_images/wishlist.png') }}" alt="img-holiwood" style="width: 25px;"></a></li>
		<li id="input-search" class="hidden-sm hidden-xs">
			<a href="#"><img src="{{ asset('/images/frontend_images/Search.png') }}" alt="img-holiwood"></a>
		</li>
	</ul>
</div>
</div>
</header>