@php 
	$categories = App\Models\Category::where(['parent_id'=>0])->where('status',1)->get();
@endphp
<style>
	@media (min-width: 1400px) {
    .container {
        width: 1400px;
    }
}
.carousel-inner .item img {
    width: unset;
}
.container{
	margin-top: -30px;
}
header .menu-main {
    padding-top: 0px;
	li{
	padding-right: 0px;
	}
}
.navbar-right {
	padding-top:65px
}
</style>
<header class="container" id="header-v3">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 logo"><a href="{{ url('/') }}"><img src="{{ asset('images/frontend_images/logo.png') }}" alt="img-holiwood" style="width: 100px;"></a></div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 menu-mobile">
				<div class=" collapse navbar-collapse" id="myNavbar">
					
				<form class="hidden-lg hidden-md form-group form-search-mobile">
					<input type="text" name="search" placeholder="Search here..." class="form-control">
					<button type="submit"><img src="{{ asset('images/frontend_images/Search.png') }}" alt="search" class="img-responsive"></button>
				</form>
				<ul class="nav navbar-nav menu-main">
					
					<li class="li-home">
						<a href="{{ url('/') }}">Home</a><figure id="home-1"></figure>
					</li>
					<li class="li-home">
						<a href="{{ url('/trending') }}">Trending</a><figure id="home-1"></figure>
					</li>
					<li class="shop-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Flowers</a><figure id="shop-1" class=" hidden-sm hidden-md hidden-xs"></figure>
						<div class="dropdown-menu">
					<div class="container container-menu">
						<ul class="row">
					<li class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<ul>
							@foreach($categories as $category)
							<?php $subcategories = App\Models\Category::where('status',1)->where('parent_id',$category->id)->get();?>
								<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
									<ul>
										<li><a href="{{ url('/category/'.base64_encode($category->id) ) }}">{{ $category->name }}</a> </li>
										@if($subcategories)
										@foreach($subcategories as $subcategory)
											<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/category/'.base64_encode($subcategory->id)) }}" style="color: black;">{{ $subcategory->name }}</a></li>
										@endforeach
										@endif
									</ul>
								</li>
							@endforeach
							
						</ul>
					</li>
					<li class="col-lg-4 col-md-4 hidden-sm hidden-xs li-banner">
						<a href="#"><img src="{{ asset('images/frontend_images/shopbanner.png') }}" alt="img-holiwood"></a>
					</li>
					
						</ul>
					</div>
				</div>
					</li>
					<li class="blog-menu dropdown">
						<a href="{{ url('/corporate/decoration') }}" class="dropdown-toggle" data-toggle="dropdown">Corporate</a><figure id="blog-1" class=" hidden-sm hidden-md hidden-xs"></figure>
						<ul class="menu-home-lv2 dropdown-menu">
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/corporate/decoration') }}" style="color: black;">Occaions Details</a></li>
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="{{ url('/corporate/decoration') }}" style="color: black;">Decoration</a></li>
						</ul>
					</li>
					<li class="wedding-menu menu-item"><a href="{{ url('/gallery') }}" id="about-menu" style="font-weight:normal">Bloom Studio</a><figure id="contact-1" class=" hidden-sm hidden-md hidden-xs"></figure></li>
					<li class="wedding-menu menu-item"><a href="{{ url('/contact') }}" id="about-menu" style="font-weight:normal">Contact</a><figure id="contact-1" class=" hidden-sm hidden-md hidden-xs"></figure></li>
					<li class="hidden-lg hidden-md"><a href="{{ url('user-login') }}"><i class="far fa-user"></i> My Account</a></li>
					<li><figure id="btn-close-menu" class="hidden-lg hidden-md"><i class="far fa-times-circle"></i></figure></li>
				</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-10 col-xs-9 icon-nav">
				<ul class="nav navbar-nav navbar-right">
					
					<li id="input-search" class="hidden-sm hidden-xs">
						<a href="#"><img id="search-img" src="{{ asset('/images/frontend_images/Search.png') }}" alt="img-holiwood"></a>
				
					</li>
					@if(empty(Auth::check()))
						<li class="icon-user hidden-sm hidden-xs"><a href="#"><img src="{{ asset('/images/frontend_images/user.png') }}" alt="img-holiwood" style="width: 25px;"/></a></li>
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
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('/images/frontend_images/cart.png') }}" id="img-cart" alt="img-holiwood"></a>
				<div class="dropdown-menu">
					<div class="cart-1">
						<div class="img-cart"><img src="{{ asset('/images/frontend_images/Search.png') }}" class="img-responsive" alt="img-holiwood"></div>
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
			<li class="icon-user hidden-sm hidden-xs"><a href="#"><img src="{{ asset('/images/frontend_images/wishlist.png') }}" alt="img-holiwood" style="width: 25px;"></a></li>
				</ul>
			</div>
			<div class="navbar-header mobile-menu">
    					<button type="button" class="navbar-toggle btn-menu-mobile" data-toggle="collapse" data-target="#myNavbar">
    					    <i class="fas fa-bars"></i>                 
   					   	</button>
   		</div>
		</div>
		
</header>