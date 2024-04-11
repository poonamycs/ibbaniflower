@extends('layouts/frontLayout/front_design')
@section('content')

<div class="login-modal">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7 pad-left-0">

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
            <div class="text-center login-footer-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#login-form" role="tab"><i class="mdi mdi-lock"></i> LOGIN</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#register-form" role="tab"><i class="mdi mdi-pencil"></i> REGISTER</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
                <div class="login-modal-right">
                    <!-- Tab panes -->
                    <div class="tab-content">    
	                    <div class="tab-pane active" id="login-form" role="tabpanel">                	
            				<form action="{{ url('/user-login/') }}" method="post" id="loginForm" name="loginForm">
            					{{ csrf_field() }}
	                            <h5 class="heading-design-h5">Login to your account</h5>
	                            <fieldset class="form-group">
	                                <label> Email :</label>
	                                <input type="email" class="form-control" name="email" placeholder="Enter valid email address" autofocus="true" required="true">
	                            </fieldset>
	                            <fieldset class="form-group">
	                                <label> Password :</label>
	                                <input type="password" class="form-control" name="password" placeholder="Enter valid password here" required="true">
	                            </fieldset>
	                            <span class="pb-1 text-right"><a href="{{ url('forgot-password/') }}"><u><strong>Forgot Password?</strong></u></a></span>
	                            <fieldset class="form-group">
	                                <button type="submit" class="btn btn-lg btn-secondary btn-block"><b> Login <i class="fa fa-sign-in"></i></b></button>
	                            </fieldset>
	                    	</form>
	                    </div>
                        
	                    <div class="tab-pane" id="register-form" role="tabpanel">
	                    	<form action="{{ url('/user-register/') }}" method="post" id="registerForm" name="registerForm">
                            	{{ csrf_field() }}
	                            <h5 class="heading-design-h5">Register Now!</h5>
	                            <div class="row">
	                            	<div class="control-group col-md-6">
			                            <fieldset class="form-group">
			                                <label>Name</label>
			                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" autofocus="true" required>
			                            </fieldset>
			                        </div>
			                        <div class="control-group col-md-6">
			                            <fieldset class="form-group">
			                                <label>Email</label>
			                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
			                            </fieldset>
			                        </div>
			                    </div>
	                            <div class="row">
	                            	<div class="control-group col-md-6">
			                            <fieldset class="form-group">
			                                <label>Mobile</label>
			                                <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number" required>
			                            </fieldset>
		                        	</div>
		                            <div class="control-group col-md-6">
			                            <fieldset class="form-group">
			                                <label>Pincode/Postal Code</label>
			                                <input type="number" class="form-control" id="pincode" name="pincode" placeholder="Enter pincode" required>
			                            </fieldset>
			                        </div>
			                    </div>
	                            <div class="row">
                                    <div class="control-group col-md-6">
                                        <fieldset class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" id="myPassword" placeholder="Enter password" required>
                                        </fieldset>
                                    </div>
                                    <div class="control-group col-md-6">
                                        <fieldset class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter confirm password" required>
                                        </fieldset>
                                    </div>
                                </div>
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
                        {{-- <div class="login-with-sites text-center">
                            <p>or Login with your google account</p>
                            <a href="{{ url('/redirect') }}"><button class="btn-google login-icons btn-lg btn-block"><i class="mdi mdi-google"></i> Google</button></a>
                        </div> --}}
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('js/backend_js/jquery.validate.js') }}"></script>
<script src="{{ asset('js/backend_js/matrix.form_validation.js') }}"></script>
@endsection