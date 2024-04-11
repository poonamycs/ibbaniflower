<?php $url = url()->current(); ?>

<div class="card account-left">
	<div class="user-profile-header">
		<img alt="logo" src="{{ asset('images/frontend_images/user.jpg') }}">
		<h5 class="mb-1 text-secondary"><strong>Hi </strong> <span class="case"><?php $auth = Auth::User()->name;
    $first = explode(" ", $auth);
    echo $first[0]; ?></span></h5>

	</div>
	<div class="list-group">
		<a href="{{ url('orders/') }}" class="list-group-item list-group-item-action <?php if(preg_match("/orders/i", $url)){ ?> active <?php } ?>">
			<b><i aria-hidden="true" class="mdi mdi-format-list-bulleted"></i> My Orders</b>
		</a>
		<a href="{{ url('my-wishlist') }}" class="list-group-item list-group-item-action <?php if(preg_match("/my-wishlist/i", $url)){ ?> active <?php } ?>">
			<b><i aria-hidden="true" class="mdi mdi-heart"></i> My Wishlist</b>
		</a> 
		<a href="{{ url('account/') }}" class="list-group-item list-group-item-action <?php if(preg_match("/account/i", $url)){ ?> active <?php } ?>">
			<b><i aria-hidden="true" class="mdi mdi-account"></i>  My Profile</b>
		</a>
		<a href="{{ url('password-setting') }}" class="list-group-item list-group-item-action <?php if(preg_match("/password-setting/i", $url)){ ?> active <?php } ?>">
			<b><i aria-hidden="true" class="mdi mdi-key"></i>  Change Password</b>
		</a>
		<a href="{{ url('user-logout/') }}" class="list-group-item list-group-item-action">
			<b><i aria-hidden="true" class="mdi mdi-lock"></i> Logout</b>
		</a> 
	</div>
</div>