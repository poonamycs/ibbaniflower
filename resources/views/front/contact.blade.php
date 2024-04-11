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
			<figure id="banner-about"><a href="#"><img src="{{ asset('/front/img/contact-banner.jpg') }}" class="img-responsive" alt="img-holiwood"></a></figure>
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
					<img src="{{ asset('front/img/50x70.png') }}" class="img-responsive" alt="img-holiwood">
					</div>
				<h1>Our Address</h1>
				<h2>123 canberra Street, NewYork, USA.</h2>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="img-color-2">
					<div class="img-content">
					<img src="{{ asset('front/img/62x61.png') }}" class="img-responsive" alt="img-holiwood">
				</div>
				<h1>Phone Number</h1>
				<h2>Office: (800) 123 456 789</h2>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="img-color-3">
					<div class="img-content">
					<img src="{{ asset('front/img/77x60.png') }}" class="img-responsive" alt="img-holiwood">
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
				<figure id="img-contact"><a href="#"><img src="{{ asset('front/img/img-contact.jpg') }}" class="img-responsive" alt="img-holiwood"></a></figure>
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

@endsection