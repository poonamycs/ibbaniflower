<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<!-- bootstrap vs fontawesome-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="icon" href="img/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-contact.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-res-contact.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-fix-nav.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-form-search-mobile.css') }}">
		<!-- slick -->
	
	<!-- GG FONT -->
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<style>
	.error{
		color:red;
	}
</style>
<body>
<header class="container" id="header-v3">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 logo"><a href="{{ url('/') }}"><img src="{{ asset('images/frontend_images/logo.png') }}" alt="img-holiwood" style="height: 121px;width: 140px;"></a></div>
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
					<li class="shop-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Flowers</a><figure id="shop-1" class=" hidden-sm hidden-md hidden-xs"></figure>
						<div class="dropdown-menu">
					<div class="container container-menu">
						<ul class="row">
					<li class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<ul>
							<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
								<ul>
									<li><a href="#">By Occaions</a> </li>
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Birthday</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Anniversary</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Wedding</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Love n Romance</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Congratulations</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Sympathy n Funeral</a></li>
									
								</ul>
							</li>
							<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
								<ul>
									<li><a href="#">By type</a></li> 
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Roses</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Carnations</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Orchids</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Gerberas</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Lilies</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Mixed Flowers</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Exotic Flowers</a></li>
								</ul>
							</li>
							<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
								<ul>
									<li><a href="#">By collection</a></li>
									<li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Flower Subscription</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Flower Boquets</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Flower Arrangment</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Tracking</a></li>
									<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Flagship Collection</a></li>
								</ul>
							</li>
							
						</ul>
					</li>
					<li class="col-lg-4 col-md-4 hidden-sm hidden-xs li-banner">
						<a href="#"><img src="{{ asset('images/frontend_images/shop_banner.png') }}" alt="img-holiwood"></a>
					</li>
					
						</ul>
					</div>
				</div>
					</li>
					<li class="wedding-menu"><a href="#">About Us</a><figure id="wedding-1" class=" hidden-sm hidden-md hidden-xs"></figure></li>
					<li class="blog-menu dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Corporate</a><figure id="blog-1" class=" hidden-sm hidden-md hidden-xs"></figure>
						<ul class="menu-home-lv2 dropdown-menu">
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Occaions Details</a></li>
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Decoration</a></li>
						</ul>
					</li>
					<li class="blog-menu dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Media</a><figure id="blog-1" class=" hidden-sm hidden-md hidden-xs"></figure>
						<ul class="menu-home-lv2 dropdown-menu">
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Gallery</a></li>
							<li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="#" style="color: black;">Blog</a></li>
						</ul>
					</li>
					<li class="wedding-menu menu-item"><a href="{{ url('/contact') }}" id="about-menu" style="font-weight:normal">Contact</a><figure id="contact-1" class=" hidden-sm hidden-md hidden-xs"></figure></li>
					<li class="hidden-lg hidden-md"><a href="#"><i class="far fa-user"></i> My Account</a></li>
					<li><figure id="btn-close-menu" class="hidden-lg hidden-md"><i class="far fa-times-circle"></i></figure></li>
				</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-10 col-xs-9">
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
								<li class="li-home"><a href="#">My Orders</a></li>
								<li class="li-home"><a href="#">My Wishlist</a></li>
								<li class="li-home"><a href="#">My Account</a></li>
								<li class="li-home"><a href="#">Change Password</a></li>
								<li class="li-home"><a href="{{ url('user-logout/') }}">Logout</a></li>
							</ul>

						</li>
					@endif
					<li class="dropdown cart-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('/images/frontend_images/cart.png') }}" id="img-cart" alt="img-holiwood"></a>
				<!-- <div class="dropdown-menu">
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
				</div> -->
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
			<figure id="banner-about"><a href="#"><img src="{{ asset('/images/frontend_images/contactus_page_banner.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
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
					<img src="{{ asset('/images/frontend_images/Our-Address.png') }}" class="img-responsive" alt="img-holiwood">
					</div>
				<h1>Our Address</h1>
				<h2>Ecospace Service Road, Outer Ring Road, Bellandur, Bengaluru Karnataka 560103</h2>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="img-color-2">
					<div class="img-content">
					<img src="{{ asset('/images/frontend_images/Phone-Number.png') }}" class="img-responsive" alt="img-holiwood">
				</div>
				<h1>Phone Number</h1>
				<h2>+91 9380918884 / <br/>9980567415</h2>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="img-color-3">
					<div class="img-content">
					<img src="{{ asset('/images/frontend_images/Email-Address.png') }}" class="img-responsive" alt="img-holiwood">
				</div>
				<h1>Email Address</h1>
				<h2>Ibbaniflowers@gmail.com</h2></br/>
				</div>
				
			</div>

		</div>
	</div>
</div>
<div class="message">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<figure id="img-contact"><a href="#"><img src="{{ asset('/images/frontend_images/img-contact.jpg') }}" class="img-responsive" alt="img-holiwood"></a></figure>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 message-contact">
				<h1>Send us a message</h1>
				<!-- <form class="form-group" action="{{url('/contact-form')}}" method="POST" id="contcatForm">@csrf -->
				<form class="form-group" action="{{url('/contact-form')}}" method="post" id="contcatForm">
					@csrf
					<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="name-ip">Name<span>*</span></label><br>
						<input type="text" name="name" id="name-ip" class="input-lg form-control" placeholder="Enter Name">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="mail-ip">Mail<span>*</span></label><br>
						<input type="text" name="email" id="mail-ip" class="input-lg form-control" placeholder="Enter Mail">
					</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;">
						<label>What's on your mind?<span>*</span></label>
						<textarea placeholder="Write your message here..." class="form-control" name="comment"></textarea>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<button type="submit">Send message</button>
					</div>
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
			<a href="#"><img src="{{ asset('/images/frontend_images/logo.png') }}" style="height:100px;width:100px;padding-top:10px"/></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 copy">
				<span>Copyright</span><i class="far fa-copyright"></i><span class="engo">2018 by EngoTheme</span>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gmail-footer">
				<span id="gmail-footer"><a href="#">Ibbaniflowers@gmail.com</a></span>
			</div>
		</div>
	</div>
	<div class="hidden-lg hidden-md back-to-top fade"><i class="fas fa-caret-up"></i></div>
	<div class="BG-menu"></div>
</footer>

<!-- boostrap & jquery -->
<script src="{{ asset('js/frontend_js/jquery.min_af.js') }}"></script>
	<script src="{{ asset('js/frontend_js/bootstrap.min_0028.js') }}"></script>
	
	<!-- js file -->
	<script src="{{ asset('js/frontend_js/function-map.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnMr64OtHBrpxBLLbYX2K2Waf4enq8sp0&callback"></script>
	<script src="{{ asset('js/frontend_js/function-back-top.js') }}"></script>
	<script src="{{ asset('js/frontend_js/function-sidebar.js') }}"></script>
	<script src="{{ asset('js/frontend_js/funtion-header-v3.js') }}"></script>
	<script src="{{ asset('js/frontend_js/function-search-v2.js') }}"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
        
<script>

	$(document).ready(function () {
    
    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z ]+$/i.test(value);
    }, "Letters only please");
    
    jQuery.validator.addMethod("emailcheck", function(value, element) {
        return this.optional(element) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);
    }, "Please enter a valid email address.");

    $("#contcatForm").validate({
        rules:{
            email:{
                required:true,
                email: true,
            },
            
            name:{
                required:true,
				lettersonly:true,
            },
           
        },
        messages:{
            email:{ 
                email: "Please enter valid email",
                required: "Please enter your phone",
            },
           
            name:{ 
                required: "Please enter your name",
                lettersonly: "Please enter characters only",
            },     
        },
       highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
            // $(element).removeClass("error");
        },
        submitHandler: function(form) {
            // $("#contcatForm").attr("disabled", true);
            form.submit();
        }
    });
});
</script>
</body>
</html>