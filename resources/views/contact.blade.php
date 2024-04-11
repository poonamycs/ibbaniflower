@extends('layouts/frontLayout/front_design')
@section('content')

<!-- Inner Header -->
<section class="section-padding bg-dark inner-header">
 <div class="container">
    <div class="row">
       <div class="col-md-12 text-center">
          <h1 class="mt-0 mb-3 text-white">Contact Us</h1>
          <div class="breadcrumbs">
             <p class="mb-0 text-white"><a class="text-white" href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>  /  <span class="text-success">Contact Us</span></p>
          </div>
       </div>
    </div>
 </div>
</section>
<!-- End Inner Header -->

<section class="section-padding">
	<div class="container">@if(Session::has('flash_message_error'))
		<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>{!! session('flash_message_error') !!}</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
			</button>
		</div>@endif @if(Session::has('flash_message_success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>{!! session('flash_message_success') !!}</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
			</button>
		</div>@endif
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<h3 class="mt-1 mb-5">Get In Touch</h3>
				<h6 class="text-dark"><i class="fa fa-map-marker"></i> Address :</h6>
				<p>{{ $contactDetails->address }}</p>
				<h6 class="text-dark"><i class="fa fa-phone"></i> Phone :</h6>
				<p><a href="tel:">{{ $contactDetails->phone }}</a></p>
				<h6 class="text-dark"><i class="fa fa-envelope"></i> Email :</h6>
				<p>{{ $contactDetails->email }}</p>
				<div class="footer-social"><span>Follow : </span>
					<a href="#"><i class="mdi mdi-facebook text-info"></i></a>
					<a href="#"><i class="mdi mdi-instagram text-danger"></i></a>
					<a href="https://api.whatsapp.com/send?phone=+91%209503835353" target="_blank"><i class="mdi mdi-whatsapp text-success"></i></a>
				</div>
			</div>
			<div class="col-lg-8 col-md-8">
				<div class="card">
					<div class="card-body">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60484.44073638843!2d73.7836043250837!3d18.651537357096103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b872cd9a88d9%3A0x3ececbd42c9857f5!2sVishweshwar%20Chowk!5e0!3m2!1sen!2sin!4v1599230577227!5m2!1sen!2sin" height="370" width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Contact Me -->
<section class="section-padding bg-white">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-10 col-md-10 col-sm-12 section-title text-left mb-4">
		  		<h2>Contact Us</h2>
			</div>
			<form class="col-lg-10 col-md-10 col-sm-12" name="contactForm" id="contactForm" novalidate action="{{ url('/contact') }}" method="post">
			  	{{ csrf_field() }}
			  	<div class="control-group form-group">
			     	<div class="controls">
			       	 	{{-- <label>Name <span class="text-danger">*</span></label> --}}
			        	<input type="text" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name." name="name">
			        	<p class="help-block"></p>
			     	</div>
			  	</div>
				<div class="row">
				    <div class="control-group form-group col-md-6">
				        {{-- <label>Phone Number <span class="text-danger">*</span></label> --}}
				        <div class="controls">
				           <input type="tel" placeholder="Phone Number" class="form-control" id="mobile" required data-validation-required-message="Please enter your phone number." name="mobile">
				        </div>
				    </div>
				    <div class="control-group form-group col-md-6">
				        <div class="controls">
				           {{-- <label>Email Address <span class="text-danger">*</span></label> --}}
				           <input type="email" placeholder="Email Address"  class="form-control" id="email" required data-validation-required-message="Please enter your email address." name="email">
				        </div>
				    </div>
				</div>
				<div class="control-group form-group">
			     	<div class="controls">
			       	 	{{-- <label>Subject <span class="text-danger">*</span></label> --}}
			        	<input type="text" placeholder="Subject" class="form-control" id="subject" required data-validation-required-message="Please enter your name." name="subject">
			        	<p class="help-block"></p>
			     	</div>
			  	</div>
				<div class="control-group form-group">
					<div class="controls">
						{{-- <label>Message <span class="text-danger">*</span></label> --}}
						<textarea rows="4" cols="100" placeholder="Message"  class="form-control" id="comment" required data-validation-required-message="Please enter your message" maxlength="999" name="comment" style="resize:none"></textarea>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
				    <div class="control-group form-group col-md-6">
						<button type="submit" class="btn btn-success btn-block btn-lg"><i class="fa fa-check"></i> <b>Send Message</b></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- End Contact Me -->

@endsection