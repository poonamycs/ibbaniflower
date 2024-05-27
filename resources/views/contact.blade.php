@extends('layouts.frontLayout.design')
@section('content')
@section('style')
<style>
		@media (max-width: 625px) {
    	    .web_view{
    	        display:none;
    	    }
    	    }
    	    .mobile_view{
    	        display:none;
    	    }
			.banner {
				padding-bottom: 60px;
			}
			.img-link {
				padding-bottom: 50px;
			}
    	    .mapouter{position:relative;
				padding-top:10px;
				padding-left:50px;
				text-align:right;width:1380px;height:410px;}.gmap_canvas {overflow:hidden;background:none!important;width:1380px;height:410px;}.gmap_iframe {width:1380px!important;height:410px!important;}
    	
</style>
@endsection('style')
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
			<h1 style="padding-left: 90px;">Contact Us</h1>
			<!-- <p>How about "Reach out and let your floral dreams bloom with us"?</p> -->
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
				<h2>+91 9980567415 <br/><br/></h2>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="img-color-3">
					<div class="img-content">
					<img src="{{ asset('/images/frontend_images/Email-Address.png') }}" class="img-responsive" alt="img-holiwood">
				</div>
				<h1>Email Address</h1>
				<h2>Ibbaniflowers@gmail.com</h2><br/>
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
				<form class="form-group" action="{{url('/contact-form')}}" method="post" id="contcatForm">
					@csrf
					<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="name-ip">Name<span>*</span></label><br>
						<input type="text" name="name" id="name-ip" class="input-lg form-control" placeholder="Enter Name">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="mail-ip">Email<span>*</span></label><br>
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
<div class="web_view">
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1380&amp;height=510&amp;hl=en&amp;q=Ecospace Service Road, Outer Ring Road, Bellandur, Bengaluru Karnataka 560103&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        <a href="https://embed-googlemap.com">embed-googlemap.com</a>
    </div>
   </div>
</div>
	</div>

@endsection