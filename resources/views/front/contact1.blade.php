<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<!-- bootstrap vs fontawesome-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="icon" href="img/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-contact.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-res-contact.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-fix-nav.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-form-search-mobile.css') }}">
		<!-- slick -->
	
	<!-- GG FONT -->
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<header class="container" id="header-v3">
	
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 logo"><a href="#"><img src="img/logo.png" alt="img-holiwood"></a></div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 menu-mobile">
				<div class=" collapse navbar-collapse" id="myNavbar">
					
				<form class="hidden-lg hidden-md form-group form-search-mobile">
					<input type="text" name="search" placeholder="Search here..." class="form-control">
					<button type="submit"><img src="img/Search.png" alt="search" class="img-responsive"></button>
				</form>
				<ul class="nav navbar-nav menu-main">
					
					<li class="dropdown menu-home">
						<a href="#" id="home-menu" class="dropdown-toggle" data-toggle="dropdown">Home</a><figure id="home-1"></figure>
						<ul class="menu-home-lv2 dropdown-menu">
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="homev1.html">Home 1</a></li>
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="homev2.html">Home 2</a></li>
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="homev3.html">Home 3</a></li>
							
						</ul>
					</li>
					<li class="shop-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop +</a><figure id="shop-1" class=" hidden-sm hidden-md hidden-xs"></figure>
						<div class="dropdown-menu">
					<div class="container container-menu">
						<ul class="row">
					<li class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<ul>
							<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
								<ul>
									<li><a href="#">SHOP PAGE</a> </li>
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-right-sidebar.html">Right sidebar</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-left-sidebar.html">Left sidebar</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-full-screen.html">Full screen</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-full-width.html">Full width</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-detail.html">Singel detail</a></li>
									
								</ul>
							</li>
							<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
								<ul>
									<li><a href="#">CHECKING PAGE</a></li> 
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shopping-cart.html">Shopping Cart</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="checkout.html">Checkout</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="order.html">Order</a></li>
								</ul>
							</li>
							<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
								<ul>
									<li><a href="#">OTHER PAGE</a></li>
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="FAQ.html">FAQ</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="login_register.html">Login/Register</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="page404.html">Page404</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="tracking.html">Tracking</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="wishlist.html">Wishlist</a></li>
								</ul>
							</li>
							
						</ul>
					</li>
					<li class="col-lg-4 col-md-4 hidden-sm hidden-xs li-banner">
						<a href="#"><img src="img/340x240.png" alt="img-holiwood"></a>
					</li>
					
						</ul>
					</div>
				</div>
					</li>
					<li class="wedding-menu"><a href="about.html">About Us</a><figure id="wedding-1" class=" hidden-sm hidden-md hidden-xs"></figure></li>
					<li class="blog-menu dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a><figure id="blog-1" class=" hidden-sm hidden-md hidden-xs"></figure>
						<ul class="menu-home-lv2 dropdown-menu">
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="blog.html">Blog right sidebar</a></li>
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="blog-no-sidebar.html">Blog no sidebar</a></li>
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-post-left-sidebar.html">Singel post left sidebar</a></li>
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-post-right-sidebar.html">Singel post right sidebar</a></li>
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-post-no-sidebar.html">Singel post no sidebar</a></li>
						</ul>
					</li>
					<li class="contact-menu"><a href="contact.html" id="contact-menu">Contact</a><figure id="contact-1" class=" hidden-sm hidden-md hidden-xs"></figure></li>
					<li class="hidden-lg hidden-md"><a href="#"><i class="far fa-user"></i> My Account</a></li>
					<li><figure id="btn-close-menu" class="hidden-lg hidden-md"><i class="far fa-times-circle"></i></figure></li>
				</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-10 col-xs-9">
				<ul class="nav navbar-nav navbar-right icon-menu">
					
					
					<li id="input-search" class="hidden-sm hidden-xs">
				<a href="#"><img id="search-img" src="img/Search.png" alt="img-holiwood"></a>
				
					</li>
					<li class="icon-user hidden-sm hidden-xs"><a href="#"><i class="far fa-user"></i></a></li>
					<li class="dropdown cart-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/cart.png" id="img-cart" alt="img-holiwood"></a>
				<div class="dropdown-menu">
					<div class="cart-1">
						<div class="img-cart"><img src="img/340x420.png" class="img-responsive" alt="img-holiwood"></div>
						<div class="info-cart">
							<h1>Pink roses</h1>
							<span class="number">x1</span>
							<span class="prince-cart">$207.2</span>
						</div>
					</div>
					<div class="cart-1">
						<div class="img-cart"><img src="img/340x420.png" class="img-responsive" alt="img-holiwood"></div>
						<div class="info-cart">
							<h1>Eleganr by BloomNation</h1>
							<span class="number">x1</span>
							<span class="prince-cart">$207.2</span>
						</div>
					</div>
					<div class="cart-1">
						<div class="img-cart"><img src="img/340x420.png" class="img-responsive" alt="img-holiwood"></div>
						<div class="info-cart">
							<h1>Queen Rose - Yellow</h1>
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
				</ul>
			</div>
			<div class="navbar-header mobile-menu">
    					<button type="button" class="navbar-toggle btn-menu-mobile" data-toggle="collapse" data-target="#myNavbar">
    					    <i class="fas fa-bars"></i>                 
   					   	</button>
   		</div>
		</div>
		
</header>
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
			<figure id="banner-about"><a href="#"><img src="img/1350x500.png" class="img-responsive" alt="img-holiwood"></a></figure>
		<div class="title-banner">
			<h1>Contact Us</h1>
			<p>It is a long established fact that a reader will<br>be distracted by the readable content of a page when looking at its layout</p>
		</div>
		</div>
		
	</div>
<div class="img-link">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="img-color-1">
					<div class="img-content">
					<img src="img/50x70.png" class="img-responsive" alt="img-holiwood">
					</div>
				<h1>Our Address</h1>
				<h2>123 canberra Street, NewYork, USA.</h2>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="img-color-2">
					<div class="img-content">
					<img src="img/62x61.png" class="img-responsive" alt="img-holiwood">
				</div>
				<h1>Phone Number</h1>
				<h2>Office: (800) 123 456 789</h2>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="img-color-3">
					<div class="img-content">
					<img src="img/77x60.png" class="img-responsive" alt="img-holiwood">
				</div>
				<h1>Email Address</h1>
				<h2>Contact@Jenstore.org</h2>
				</div>
				
			</div>

		</div>
	</div>
</div>
<div class="message">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<figure id="img-contact"><a href="#"><img src="img/550x450.png" class="img-responsive" alt="img-holiwood"></a></figure>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 message-contact">
				<h1>Send us a message</h1>
				<form class="form-group" action="form" method="post">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="name-ip">Name<span>*</span></label><br>
						<input type="text" name="input-name" id="name-ip" class="input-lg form-control" placeholder="Mark Stevens">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="mail-ip">Mail<span>*</span></label><br>
						<input type="text" name="input-mail" id="mail-ip" class="input-lg form-control" placeholder="Mark Stevens">
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<label>What's on your mind?<span>*</span></label>
						<textarea placeholder="Write your message here..." class="form-control"></textarea>
					</div>
					<button type="submit">Send message</button>
				</form>
				
				
			</div>
		</div>
	</div>
</div>
<div id="map">
	
</div>
<div class="info-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<h3>About</h3>
					<ul>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">News & Stories</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">History</a> </li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Our Studio</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Shop</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Stockists</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<h3>Customer sevices</h3>
					<ul>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Contact Us</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Trade Services</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Login/Register</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Delivery & Returns</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">FAQs</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<h3>Store</h3>
					<ul>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Shop</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Wedding</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Birthday</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Women's day</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<h3>Shop collection</h3>
					<ul>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">New Arrivals</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Hot</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Sale</a></li>
						<li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Deal of the day</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 social">
				<p>CONNECT WITH US:</p>
				<a href="#" id="link-insta"></a>
				<a href="#" id="link-fb"></a>
				<a href="#" id="link-tw"></a>
				<a href="#" id="link-sky"></a>
				<h1>Newsletter</h1>
				<h2>Sign up for our mailing list to get latest updates and offers</h2>
				<form class="form-group" action="mail" method="post">
					<input type="text" name="input-mail" placeholder="Your mail here" class="input-lg">
					<button type="submit"><img src="img/Send.png" alt="img-holiwood"></button>
				</form>
			</div>
		</div>
	</div>
</div>
</main>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logo-footer">
				<a href="#" class="logo-bot"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 copy">
				<span>Copyright</span><i class="far fa-copyright"></i><span class="engo">2018 by EngoTheme</span>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gmail-footer">
				<span id="gmail-footer"><a href="#">E: Jenstore@gmail.com</a></span>
			</div>
		</div>
	</div>
	<div class="hidden-lg hidden-md back-to-top fade"><i class="fas fa-caret-up"></i></div>
	<div class="BG-menu"></div>
</footer>

<!-- boostrap & jquery -->
	<script src="{{ asset('front/js/jquery.min_af.js') }}"></script>
	<script src="{{ asset('front/js/bootstrap.min_0028.js') }}"></script>
	
	<!-- js file -->
	<script src="{{ asset('front/js/function-map.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnMr64OtHBrpxBLLbYX2K2Waf4enq8sp0&callback"></script>
	<script src="{{ asset('front/js/function-back-top.js') }}"></script>
	<script src="{{ asset('front/js/function-sidebar.js') }}"></script>
	<script src="{{ asset('front/js/funtion-header-v3.js') }}"></script>
	<script src="{{ asset('front/js/function-search-v2.js') }}"></script>
</body>
</html>