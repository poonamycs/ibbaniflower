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
			<figure id="banner-about"><a href="#"><img src="{{ asset('images/frontend_images/1350x500.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
		<div class="title-banner">
			<h1>About Us</h1>
			<p>It is a long established fact that a reader will<br>be distracted by the readable content of a page when looking at its layout</p>
		</div>
		</div>
		
	</div>
<div class="wellcome">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-well">
				<div class="media">
					<div class="media-left"><a href="#"><img src="{{ asset('images/frontend_images/115x115.png') }}" alt="img-holiwood"></a></div>
					<div class="media-body">
						<h1>WELLCOME</h1>
						<h2>Hello! I am Laura Ellie <br>Founder of Jenstore</h2>
					</div>
					
					
				</div>
				<p>Floristry can involve the cultivation of flowers as well as their arrange-ment, and to the business of selling them. Much of the raw material supplied for the floristry trade comes from the cut flowers industry<br><br>
					Florist shops are the main flower-only outlets, but supermarkets, garden supply stores also sell flowers</p>
					<div class="social-well">
						<span>SOCIAL:</span>
						<a href="#" id="link-insta2"></a>
						<a href="#" id="link-fb2"></a>
						<a href="#" id="link-tw2"></a>
						<a href="#" id="link-sky2"></a>
					</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 img-well">
				<figure id="img-about"><a href="#"><img src="{{ asset('images/frontend_images/660x360.png') }}" alt="img-holiwood"></a></figure>
			</div>
		</div>
	</div>
</div>
<div class="team">

	<div class="container">
		<h1>Meet our team</h1>
		<h3>Profestional and  Outstanding Ideas of our passlonate team makes us unique in every sense</h3>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 team-account">
				<a href="#"><img src="{{ asset('images/frontend_images/315x400.png') }}" class="img-responsive" alt="img-holiwood"></a>
				<div class="title-acc">
					<h2>LILA SIMPSON</h2>
					<p>Stylist</p>
					<div class="social-acc">
						<a href="#" class="link-gmail-acc"></a>
						<a href="#" class="link-fb-acc"></a>
						<a href="#" class="link-in-acc"></a>
						<a href="#" class="link-insta-acc"></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 team-account">
				<a href="#"><img src="{{ asset('images/frontend_images/315x400.png') }}" class="img-responsive" alt="img-holiwood"></a>
				<div class="title-acc">
					<h2>JOHNSON SMITH</h2>
					<p>Fashion Designer</p>
					<div class="social-acc">
						<a href="#" class="link-gmail-acc"></a>
						<a href="#" class="link-fb-acc"></a>
						<a href="#" class="link-in-acc"></a>
						<a href="#" class="link-insta-acc"></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 team-account">
				<a href="#"><img src="{{ asset('images/frontend_images/315x400.png') }}" class="img-responsive" alt="img-holiwood"></a>
				<div class="title-acc">
					<h2>BARNEY MOLLY</h2>
					<p>Stylist</p>
					<div class="social-acc">
						<a href="#" class="link-gmail-acc"></a>
						<a href="#" class="link-fb-acc"></a>
						<a href="#" class="link-in-acc"></a>
						<a href="#" class="link-insta-acc"></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 team-account">
				<a href="#"><img src="{{ asset('images/frontend_images/315x400.png') }}" class="img-responsive" alt="img-holiwood"></a>
				<div class="title-acc">
					<h2>JUDY WINTER</h2>
					<p>Model</p>
					<div class="social-acc">
						<a href="#" class="link-gmail-acc"></a>
						<a href="#" class="link-fb-acc"></a>
						<a href="#" class="link-in-acc"></a>
						<a href="#" class="link-insta-acc"></a>
					</div>
				</div>
			</div>

		</div><!-- end row -->
		
	</div>
</div>
<!-- ------------------------- -->


<div class="feedback">
	<div class="container">
		<h1>Customers say</h1>
		<h2>,,</h2>
		<div id="myCarousel1" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel1" data-slide-to="1"></li>
    <li data-target="#myCarousel1" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br class="hidden-sm hidden-xs"> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap<br class="hidden-sm hidden-xs"> into electronic typesetting, remaining essentially unchanged</p>
		<div class="img-customer">
			<img src="{{ asset('images/frontend_images/115x115.png') }}" alt="img-holiwood">
			<h1>JUDY BEAUTY - <span>Customers</span></h1>
		</div>
    </div>

    <div class="item">
      
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br class="hidden-sm hidden-xs"> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap<br class="hidden-sm hidden-xs"> into electronic typesetting, remaining essentially unchanged</p>
		<div class="img-customer">
			<img src="{{ asset('images/frontend_images/115x115.png') }}" alt="img-holiwood">
			<h1>JUDY BEAUTY - <span>Customers</span></h1>
		</div>
    </div>

    <div class="item">
      
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br class="hidden-sm hidden-xs"> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap<br class="hidden-sm hidden-xs"> into electronic typesetting, remaining essentially unchanged</p>
		<div class="img-customer">
			<img src="{{ asset('images/frontend_images/115x115.png') }}" alt="img-holiwood">
			<h1>JUDY BEAUTY - <span>Customers</span></h1>
		</div>
    </div>
  </div>

</div>
		
	</div>
</div>
<div class="img-link">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="img-color-1">
					<div class="img-content">
					<img src="{{ asset('images/frontend_images/70x71.png') }}" class="img-responsive" alt="img-holiwood">
					</div>
				<h1>100%</h1>
				<h2>Product quality protection</h2>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="img-color-2">
					<div class="img-content">
					<img src="{{ asset('images/frontend_images/82x62.png') }}" class="img-responsive" alt="img-holiwood">
				</div>
				<h1>100%</h1>
				<h2>Payment protection</h2>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="img-color-3">
					<div class="img-content">
					<img src="{{ asset('images/frontend_images/62x62.png') }}" class="img-responsive" alt="img-holiwood">
				</div>
				<h1>100%</h1>
				<h2>On-time shipment protection</h2>
				</div>
				
			</div>

		</div>
	</div>
</div>
</main>
@endsection