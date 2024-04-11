@extends('layouts/frontLayout/front_design')
@section('content')

<div class="login-modal">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 pad-left-0">

	        @if(Session::has('flash_message_error'))
			<div class="alert alert-danger alert-dismissible fade show respo" role="alert">
			  <strong>{!! session('flash_message_error') !!}</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			@endif
			@if(Session::has('flash_message_success'))			
			<div class="alert alert-success alert-dismissible fade show respo" role="alert">
			  <strong>{!! session('flash_message_success') !!}</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			@endif

            <div class="clearfix"></div>
            <div class="login-modal-right mt-3">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="register-form" role="tabpanel">
                    	<form style="margin-top: -30px;" id="vendorForm" name="vendorForm" action="{{ url('vendor-register-form/') }}" method="post">
                        	@csrf
                            <h5 class="heading-design-h5"><i class="fa fa-user-plus"></i> Vendor Registration!</h5>
                            <fieldset class="form-group">
                                <label>Enter Name <span class="required"></span></label>
                                <input type="text" class="form-control" name="vname" placeholder="Enter your full name" autofocus="true">
                            </fieldset>
                            <div class="row">
                            	<div class="col-md-6 col-sm-12">
		                            <fieldset class="form-group">
		                                <label>Enter Email <span class="required"></span></label>
		                                <input type="email" class="form-control" name="email" placeholder="Ex. johndoe@gmail.com">
		                            </fieldset>
		                        </div>
                            	<div class="col-md-6 col-sm-12">
		                            <fieldset class="form-group">
		                                <label>Enter Phone Number <span class="required"></span></label>
		                                <input type="text" class="form-control" name="vphone" placeholder="Ex. 9876543210">
		                            </fieldset>
		                        </div>
		                    </div>	
                            <div class="row">
                            	<div class="col-md-6 col-sm-12">
		                            <fieldset class="form-group">
		                                <label>Enter Pincode <span class="required"></span></label>
		                                <input type="text" class="form-control" name="vpincode" placeholder="Ex. 411068">
		                            </fieldset>
		                        </div>
                            	<div class="col-md-6 col-sm-12">
		                            <fieldset class="form-group">
		                                <label>Enter Password <span class="required"></span></label>
		                                <input type="password" class="form-control" name="password" id="myPassword" placeholder="******">
		                            </fieldset>
		                        </div>
		                    </div>	
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
									<fieldset class="form-group">
										<label class="control-label">Address <span class="required"></span></label>
										<textarea class="form-control border-form-control" name="vaddress"></textarea>
									</fieldset>
								</div>
                            </div>
                            <input type="hidden" name="status" value="0">
                            <input type="hidden" name="admin_approved" value="0">
                            <fieldset class="form-group">
                                <button type="submit" class="btn btn-lg btn-secondary btn-block"><b> Register <i class="fa fa-pencil"></i></b></button>
                            </fieldset>
                            <!-- <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">I Agree with <a href="#">Term and Conditions</a>
                                </label>
                            </div> -->
                    	</form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<script>
	$(document).ready(function(){
		$('#myPassword').passtrength({
	      minChars: 6,
	      passwordToggle: true,
	      tooltip: true,
	      eyeImg : "images/frontend_images/eye.svg"
	    });
	});
</script>

<style>
	.required:after {
	    content:" *";
	    color: red;
	    font-weight: 600
	}
</style>

@endsection