@extends('layouts.frontLayout.front_design')
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
									<h5 class="heading-design-h5">My Profile</h5>
								</div><hr>
								<form id="accountForm" name="accountForm" action="{{ url('/account') }}" method="post"> {{ csrf_field() }}
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">First Name <span class="required">*</span>
												</label>
												<input type="text" class="form-control border-form-control" name="name" value="{{ $userDetails->name }}">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Phone <span class="required">*</span>
												</label>
												<input type="number" class="form-control border-form-control" name="mobile" value="{{ $userDetails->mobile }}">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Email Address <span class="required">*</span>
												</label>
												<input type="email" class="form-control border-form-control" name="email" value="{{ $userDetails->email }}" disabled="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">City <span class="required">*</span>
												</label>
												<input type="text" class="form-control border-form-control" name="city" value="{{ $userDetails->city }}">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">State <span class="required">*</span>
												</label>
												<select class="select2 form-control border-form-control" name="state">
													<option value="{{ $userDetails->state }}" selected>{{ $userDetails->state }}</option>
													<option value="Maharashtra">Maharashtra</option>
													<option value="Goa">Goa</option>
													<option value="Karnatak">Karnatak</option>
													<option value="Gujrat">Gujrat</option>
													<option value="Rajsthan">Rajsthan</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Country <span class="required">*</span>
												</label>
												<select class="select2 form-control border-form-control" name="country">
													<option value="">Select Country</option>
											        @foreach($countries as $country)
											        <option value="{{ $country->country_name }}" @if($country->country_name == $userDetails->country) selected @endif>{{ $country->country_name }}</option>
											        @endforeach
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Zip Code <span class="required">*</span>
												</label>
												<input type="number" class="form-control border-form-control" name="pincode" value="{{ $userDetails->pincode }}">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-md-12">
											<div class="form-group">
												<label class="control-label">Address <span class="required">*</span>
												</label>
												<textarea class="form-control border-form-control" name="address">{{ $userDetails->address }}</textarea>
											</div>
										</div>
									</div>
									<div class="row d-flex justify-content-center">
										<div class="col-sm-12 col-md-8 text-right">
											<button type="submit" class="btn btn-success btn-lg d-block"><b>Save Changes</b></button>
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

@endsection