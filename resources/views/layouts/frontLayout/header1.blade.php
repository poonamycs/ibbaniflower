<header class="container" id="header-v3">
	
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 logo"><a href="#"><img src="{{ asset('front/img/logo.png') }}" alt="img-holiwood" style="height: 121px;width: 140px;"></a></div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 menu-mobile">
				<div class=" collapse navbar-collapse" id="myNavbar">

				<form class="hidden-lg hidden-md form-group form-search-mobile">
					<input type="text" name="search" placeholder="Search here..." class="form-control">
					<button type="submit"><img src="{{ asset('front/img/Search.png') }}" alt="search" class="img-responsive"></button>
				</form>
				
				<ul class="nav navbar-nav menu-main">
					
					<li class="dropdown menu-home">
						<a href="{{ url('/') }}" id="home-menu" class="dropdown-toggle menu-item" data-toggle="dropdown">Home</a><figure id="home-1"></figure>
					</li>
					<li class="shop-menu dropdown"><a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown">Flowers</a><figure id="shop-1" class="hidden-sm hidden-xs"></figure>
					<div class="dropdown-menu">
				<div class="container container-menu">
					<ul class="row">
				<li class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<ul>
						<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
							<ul>
									<li><a href="#">By Occaions </a> </li>
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-right-sidebar.html">Birthday</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-left-sidebar.html">Anniversary</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-full-screen.html">Wedding</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-full-width.html">Love n ROmance</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-detail.html">Congratulations</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-detail.html">Sympathy n Funeral</a></li>
								
							</ul>
						</li>
						<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
							<ul>
								<li><a href="#">By type </a></li> 
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shopping-cart.html">Roses</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="checkout.html">Carnations</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="order.html">Orchids</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="order.html">Gerberas</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="order.html">Lilies</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="order.html">Mixed Flowers</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="order.html">Exotic Flowers</a></li>
							</ul>
						</li>
						<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
							<ul>
									<li><a href="#">By collection </a></li>
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="FAQ.html">Flower Subscription</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="login_register.html">Flower Boquets</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="page404.html">Flower Arrangments</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="tracking.html">Flagship Collection</a></li>
							</ul>
						</li>
						
					</ul>
				</li>
				<li class="col-lg-4 col-md-4 hidden-sm hidden-xs li-banner">
					<a href="#"><img src="{{ asset('front/img/flower1.png') }}" alt="img-holiwood"></a>
				</li>
				
					</ul>
				</div>
			</div>
				</li>
					<li class="wedding-menu"><a href="{{ url('/about') }}" id="about-menu"  style="font-weight:normal">About Us</a><figure id="wedding-1" class=" hidden-sm hidden-md hidden-xs"></figure></li>
					<!-- <li class="shop-menu menu-item"><a href="#" id="about-menu">Corporate</a><figure id="wedding-1" class=" hidden-sm hidden-md hidden-xs"></figure></li> -->
					<li class="shop-menu dropdown menu-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Corporate</a><figure id="shop-1" class=" hidden-sm hidden-md hidden-xs"></figure>
						<div class="dropdown-menu">
					<div class="container1 container-menu1">
						<ul class="row">
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<ul>
							<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu-home-lv2">
								<ul>
									<li><a href="#">SHOP PAGE</a> </li>
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-right-sidebar.html">Occaions Details</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/blog') }}">Decoration</a></li>
								</ul>
							</li>
						</ul>
					</li>
					</ul></div></div>
					</li>
					<li class="shop-menu dropdown menu-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Media</a><figure id="shop-1" class=" hidden-sm hidden-md hidden-xs"></figure>
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
					<!-- <li class="wedding-menu"><a href="#" id="about-menu">Media</a><figure id="wedding-1" class=" hidden-sm hidden-md hidden-xs"></figure></li> -->
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
					<li class="wedding-menu menu-item"><a href="{{ url('/contact') }}" id="about-menu" style="font-weight:normal">Contact</a><figure id="contact-1" class=" hidden-sm hidden-md hidden-xs"></figure></li>
					<li class="hidden-lg hidden-md"><a href="{{ url('user-login') }}"><i class="far fa-user"></i> My Account</a></li>
					<li><figure id="btn-close-menu" class="hidden-lg hidden-md"><i class="far fa-times-circle"></i></figure></li>
				</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-10 col-xs-9">
				<ul class="nav navbar-nav navbar-right" style="padding-top: 15px;">
					
					<li id="input-search" class="hidden-sm hidden-xs">
					<a href="#"><img id="search-img" src="{{ asset('front/img/Search.png') }}" alt="img-holiwood"></a>
					</li>
					@if(empty(Auth::check()))
						<li class="icon-user hidden-sm hidden-xs"><a href="{{ url('user-login') }}"><img src="{{ asset('front/img/user.png') }}" alt="img-holiwood" style="width: 25px;"></a></li>
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('front/img/cart.png') }}" id="img-cart" alt="img-holiwood"></a>
							<div class="dropdown-menu">
								<div class="cart-1">
									<div class="img-cart"><img src="{{ asset('front/img/340x420.png') }}" class="img-responsive" alt="img-holiwood"></div>
									<div class="info-cart">
										<h1>Pink roses</h1>
										<span class="number">x1</span>
										<span class="prince-cart">$207.2</span>
									</div>
								</div>
								<div class="cart-1">
									<div class="img-cart"><img src="{{ asset('front/img/340x420.png') }}" class="img-responsive" alt="img-holiwood"></div>
									<div class="info-cart">
										<h1>Eleganr by BloomNation</h1>
										<span class="number">x1</span>
										<span class="prince-cart">$207.2</span>
									</div>
								</div>
								<div class="cart-1">
									<div class="img-cart"><img src="{{ asset('front/img/340x420.png') }}" class="img-responsive" alt="img-holiwood"></div>
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
					<li class="icon-user hidden-sm hidden-xs"><a href="#"><img src="{{ asset('front/img/wishlist.png') }}" alt="img-holiwood" style="width: 25px;"></a></li>
		
				</ul>
			</div>
			<div class="navbar-header mobile-menu">
				<button type="button" class="navbar-toggle btn-menu-mobile" data-toggle="collapse" data-target="#myNavbar">
					<i class="fas fa-bars"></i>                 
				</button>
   			</div>
		</div>
</header>