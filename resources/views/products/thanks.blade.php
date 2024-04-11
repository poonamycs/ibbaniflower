@extends('layouts/FrontLayout/front_design')
@section('content')
	
<section class="page-header padding-tb page-header-bg-1">
    <div class="container">
        <div class="page-header-item d-flex align-items-center justify-content-center">
            <div class="post-content">
                <h3>Thank you</h3>
                <div class="breadcamp">
                    <ul class="d-flex flex-wrap justify-content-center align-items-center">
						<li><a href="{{ url('/') }}">Home</a></li>
                        <li><a class="active">Thank you</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

	<section id="do_action">
		<div class="container">
			<div class="heading" align="center">
				<img src="{{ asset('images/frontend_images/tick.png') }}" height="120">
				<h3>Your COD order has been placed successfully.</h3>
				<p>Your order no. is {{ Session::get('order_id') }} and total payable amount is ₹ {{ Session::get('grand_total') }}</p>
			</div>
		</div>
	</section>

@endsection

<?php 
Session::forget('grand_total');
Session::forget('order_id');
 ?>