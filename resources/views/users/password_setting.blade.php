@extends('layouts/frontLayout/front_design')
@section('content')

<section class="account-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-12 mx-auto">
				@if(Session::has('flash_message_error'))			
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>{!! session('flash_message_error') !!}</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
				@endif  			
				@if(Session::has('flash_message_success'))			
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>{!! session('flash_message_success') !!}</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
				@endif
				<div class="row no-gutters">
					<div class="col-md-4">
						@include('layouts/frontLayout/user_settings_sidebar')
					</div>
					<div class="col-md-8">
						<div class="card card-body account-right">
							<div class="widget">
								<div class="section-header">
									<h5 class="heading-design-h5">Change Password</h5>
								</div><hr>
								<form id="passwordForm" name="passwordForm" action="{{ url('/update-user-pwd') }}" method="POST">
									{{ @csrf_field() }}
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">Old Password <span class="required">*</span>
												</label>
												<input class="form-control border-form-control" type="password" name="current_pwd" id="current_pwd" required>
												<span id="chkPwd"></span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">New Password <span class="required">*</span>
												</label>
												<input class="form-control border-form-control" type="password" id="new_pwd" name="new_pwd" required>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Confirm New Password <span class="required">*</span>
												</label>
												<input class="form-control border-form-control" type="password" name="confirm_pwd" id="confirm_pwd" required>
											</div>
										</div>
										<span id='message'></span>
									</div>
									<div class="row d-flex justify-content-center">
										<div class="col-sm-12 col-md-8 text-right">
											<!-- <button type="button" class="btn btn-danger btn-lg">Cencel</button> -->
											<button type="submit" class="btn btn-success btn-lg d-block"><b>Update Password</b></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
    $('#new_pwd, #confirm_pwd').on('keyup', function () {
	  if($('#new_pwd').val() == $('#confirm_pwd').val()) {
	    $('#message').html('<h6 style="font-size: 13px !important;">Password Match.</h6>').css('color', 'green');
	  } else {
	    $('#message').html('<h6 style="font-size: 13px !important;">Please enter confirm password same as new password.</h6>').css('color', 'red');
		}
	});
</script>

@endsection