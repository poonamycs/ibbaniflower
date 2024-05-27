<!DOCTYPE html>
<html>
<head>
<title>Ibbani Flowers</title>
<meta charset="utf-8">
<!-- bootstrap vs fontawesome-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="icon" href="{{ asset('images/frontend_images/logo.png') }}" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-homev1.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-res-v1.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-fix-nav.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-form-search-mobile.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/custom.css') }}">
<!-- scroll -->


<!-- GG FONT -->
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<style>
	.menu-main li.shop-menu .dropdown-menu .li-banner {
		padding:0px 0px 0px 0px;
	}
	.menu-main{
	    padding-top:50px;
	}
	.mobile-header{	
			padding-left: 60px;
		}
	@media (min-width: 800px) and (max-width:1400px) 
	{
		.mobile-header{
			height:125px;
			/* padding-left: 30px; */
			justify-content: center;
		}
	}
	@media (min-width: 1200px) and (max-width:1400px) 
	{
	}
	/* @media (min-width: 400px) and (max-width:768px) 
	{
	} */
</style>
</head>
<body>
<header class="navbar-fixed-top pos-header" id="header-v1">
<nav class="hidden-xs">
	<div class="container">
		<ul class="nav navbar-nav nav-help">
			<li>+91 9980567415</li>
			<li>ibbaniflowers@gmail.com</li>
		</ul>
		<ul class="nav navbar-nav navbar-right col-lg-3 col-md-3 icon-nav col-sm-5 col-xs-5">
	@if(empty(Auth::check()))
		<li class="icon-user hidden-sm hidden-xs"><a href="{{ url('user-login') }}"><img src="{{ asset('images/frontend_images/user.png') }}" alt="img-holiwood" style="width: 25px;"></a></li>
	@else
	<li class="icon-user hidden-sm hidden-xs">
		<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="far fa-user"></i>
			
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
		
		<li class="icon-user hidden-sm hidden-xs"><a href="#"><img src="{{ asset('/images/frontend_images/wishlist.png') }}" alt="img-holiwood" style="width: 25px;"></a></li>
		<li id="input-search" class="hidden-sm hidden-xs">
			<a href="#"><img src="{{ asset('/images/frontend_images/Search.png') }}" alt="img-holiwood"></a>
		</li>
	</ul>
		

	</div>
</nav>

	<div class="container">
		<div class="d-flex row mobile-header justify-content-lg-center">
			<div class="navbar-header mobile-menu">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<i class="fas fa-bars"></i>                 
				</button>
			</div>
			<!-- <div class="col-lg-1 col-md-1"></div> -->
			<div class="collapse navbar-collapse col-auto" id="myNavbar">
				<!-- <form class="hidden-lg hidden-md form-group form-search-mobile">
					<input type="text" name="search" placeholder="Search here..." class="form-control">
					<button type="submit"><img src="{{ asset('/images/frontend_images/Search.png') }}" alt="search" class="img-responsive"></button>
				</form> -->

				<ul class="nav navbar-nav menu-main">
					<li><figure id="btn-close-menu" class="hidden-lg hidden-md"><i class="far fa-times-circle"></i></figure></li>
					
					@if(empty(Auth::check()))
		            <li class="icon-user hidden-lg hidden-md" style="background-color:skyblue"><a href="{{ url('user-login') }}"><img src="{{ asset('images/frontend_images/user.png') }}" alt="img-holiwood" style="width: 25px;"></a></li>
	                @else
	                <li class="icon-user hidden-lg hidden-md" style="background-color:skyblue">
		                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <i class="far fa-user"></i>
			                 <span style="color:white">Hi Guest</span>
		                </a>
                    </li>
					@endif
            
					<hr class="hidden-lg hidden-md"/>
					<li class="li-home">
						<a href="{{ url('/') }}">Home</a>
					</li>
						
					<li class="contact-menu"><a href="{{ url('/trending') }}">Trending</a><figure id="contact-1" class="hidden-sm hidden-xs"></figure></li>
					<hr class="hidden-lg hidden-md"/>
					<li class="contact-menu hidden-lg hidden-md"><a>Flower</a></li>
					<hr class="hidden-lg hidden-md"/>
					<li class="shop-menu dropdown hidden-lg hidden-md"><a href="#" class="dropdown-toggle" data-toggle="dropdown">By Occasions <span style="">+</span></a>
						<div class="dropdown-menu">
							<div class="container container-menu">
								<ul class="row">
									<li class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<ul>
											<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
												<ul>
													
													<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Birthday</a></li>
													<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Anniversary</a></li>
													<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Wedding</a></li>
													<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Love n ROmance</a></li>
													<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Congratulations</a></li>
													<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Sympathy n Funeral</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</li>

					<li class="shop-menu dropdown hidden-lg hidden-md"><a href="#" class="dropdown-toggle" data-toggle="dropdown">By Type<span style="">+</span></a>
						<div class="dropdown-menu">
							<div class="container container-menu">
								<ul class="row">
									<li class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<ul>
											
											<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
												<ul>
													
														<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Roses</a></li>
														<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Carnations</a></li>
														<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Orchids</a></li>
														<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Gerberas</a></li>
														<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Lilies</a></li>
														<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Mixed Flowers</a></li>
														<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Exotic Flowers</a></li>
												</ul>
											</li>
											
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="shop-menu dropdown hidden-lg hidden-md"><a href="#" class="dropdown-toggle" data-toggle="dropdown">By Collection<span style="">+</span></a>
						<div class="dropdown-menu">
							<div class="container container-menu">
								<ul class="row">
									<li class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<ul>
											<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
												<ul>
													
													<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Flower Subscription</a></li>
													<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Flower Boquets</a></li>
													<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Flower Arrangments</a></li>
													<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/product-list') }}">Flagship Collection</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</li>
                    <hr class="hidden-lg hidden-md"/>
					<li class="shop-menu dropdown hidden-sm hidden-xs"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Flowers</a><figure id="shop-1" class="hidden-sm hidden-xs"></figure>
						<div class="dropdown-menu">
							<div class="container container-menu">
								<ul class="row">
									<li class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<ul>
											@foreach($categories as $category)
											<?php $subcategories = App\Models\Category::where('status',1)->where('parent_id',$category->id)->get();?>
											<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
												<ul>
													<li><a href="{{ url('/category/'.base64_encode($category->id) ) }}">{{ $category->name }}</a> </li>
													@if($subcategories)
														@foreach($subcategories as $subcategory)
														<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/category/'.base64_encode($category->id)) }}" style="color: black;">{{ $subcategory->name }}</a></li>
														@endforeach
													@endif
												</ul>
											</li>
											@endforeach
											<!-- <li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
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
											</li> -->
							
										</ul>
									</li>
											<li class="col-lg-4 col-md-4 hidden-sm hidden-xs li-banner">
												<a href="#"><img src="{{ asset('images/frontend_images/shopbanner.png') }}" alt="img-holiwood"></a>
											</li>
					
								</ul>
							</div>
						</div>
					</li>
					
					<li class="contact-menu hidden-lg hidden-md"><a href="{{ url('/gallery') }}">Bloom Studio</a><figure id="contact-1" class="hidden-sm hidden-xs"></figure></li>
					<li class="contact-menu hidden-lg hidden-md"><a href="{{ url('/contact') }}">Contact</a><figure id="contact-1" class="hidden-sm hidden-xs"></figure></li>									
					<hr class="hidden-lg hidden-md"/>
					<li class="hidden-lg hidden-md"><a href="#"><i class="far fa-user"></i> My Account</a></li>
					<li class="hidden-lg hidden-md hidden-sm phone-mobile">+91 9380918884</li>
					<li class="hidden-lg hidden-md hidden-sm phone-mobile">ibbaniflowers@gmail.com</li>
				</ul>
			</div>
				<ul class="logo col-auto mobile-logo">
					<li><a href="{{ url('/') }}"><img src="{{ asset('images/frontend_images/logo.png') }}" class="img-responsive img-logo" alt="img-holiwood"></a></li>
				</ul>
				<div class="col-auto hidden-sm hidden-xs">
					<ul class="nav navbar-nav menu-main second-menu">
					<li class="shop-menu dropdown"><a href="{{ url('/corporate/decoration') }}" class="dropdown-toggle" data-toggle="dropdown">Corporate</a><figure id="shop-1" class=" hidden-sm hidden-md hidden-xs"></figure>
						<div class="dropdown-menu">
							<div class="container1 container-menu1">
								<ul class="row">
									<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<ul>
											<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu-home-lv2">
												<ul>
													<li><a href="#">SHOP PAGE</a> </li>
													<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-right-sidebar.html">Occaions Details</a></li>
													<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/corporate/decoration') }}">Decoration</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</li>
						<li class="contact-menu"><a href="{{ url('/gallery') }}">Bloom Studio</a><figure id="contact-1" class="hidden-sm hidden-xs"></figure></li>
						<li class="contact-menu"><a href="{{ url('/contact') }}">Contact</a><figure id="contact-1" class="hidden-sm hidden-xs"></figure></li>									
					</ul>	
				</div>
				
		</div>
	</div>
</header>