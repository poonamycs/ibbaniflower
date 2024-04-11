@extends('layouts/frontLayout/front_design')
@section('content')
<?php use App\Order; ?>
<section class="page-header padding-tb page-header-bg-1">
    <div class="container">
        <div class="page-header-item d-flex align-items-center justify-content-center">
            <div class="post-content">
                <h3>Make Payment</h3>
                <div class="breadcamp">
                    <ul class="d-flex flex-wrap justify-content-center align-items-center">
						<li><a href="{{ url('/') }}">Home</a></li>
                        <li><a class="active"> Pay via Paypal</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="do_action">
	<div class="container mt-5">
		<div class="heading" align="center">
			<img src="{{ asset('images/frontend_images/tick.png') }}" style="height: 80px">
			<h3>Your order has been placed successfully.</h3>
			<p>Your order no. is #{{ Session::get('order_id') }} and total payable amount is ₹ {{ Session::get('grand_total') }}</p>
			<p>Please make payment by clicking on below payment button</p>

			<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
			  <input type="hidden" name="cmd" value="_s-xclick">
			  <input type="hidden" name="business" value="omkar@ycstech.in">
			  <input type="hidden" name="item_name" value="{{ Session::get('order_id') }}">
			  <input type="hidden" name="currency_code" value="INR">
			  <input type="hidden" name="amount" value="{{ Session::get('grand_total') }}">
			  <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_paynow_107x26.png" alt="Buy Now">
			  <img alt="" src="https://paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
	</div>
</section>

@endsection

<?php 
	Session::forget('grand_total');
	Session::forget('order_id');
?>