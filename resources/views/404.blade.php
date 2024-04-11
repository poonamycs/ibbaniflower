@extends('layouts/frontLayout/front_design')
@section('content')
<style>
	.img-fluid{
		max-width: 50%;
	}
</style>
<section class="not-found-page section-padding">
<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto text-center">
			<h1><img class="img-fluid" src="{{ asset('images/frontend_images/404.png') }}" alt="404"></h1>
			<h1>Sorry! Page not found.</h1>
			<p class="land">Unfortunately the page you are looking for has been moved or deleted.</p>
			<div class="mt-5">
				<a href="#" onclick="window.history.go(-1); return true;" class="btn btn-success btn-lg"><i class="mdi mdi-arrow-left"></i> GO BACK</a>
			</div>
		</div>
	</div>
</div>
</section>

@endsection