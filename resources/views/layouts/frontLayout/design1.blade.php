<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<meta charset="utf-8">
	<!-- bootstrap vs fontawesome-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" /> -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="icon" href="{{ asset('front/img/favicon.png') }}" type="image/x-icon"/>
	<!-- contact -->
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-contact.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-res-contact.css') }}"> -->

	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-about.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-res-about.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-fix-nav.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-form-search-mobile.css') }}">

		<!-- home -->
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-homev1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-res-v1.css') }}">

	<!-- single detail -->
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-product-detail.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-res-product-detail.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/slick/slick.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ asset('front/slick/slick-theme.css') }}"> -->

	<!-- cart -->
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-faq.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-shopping.css') }}"> -->

	<!-- checkout -->
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-checkout.css') }}"> -->

	<!-- blog -->
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-shop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-res-shop.css') }}"> -->
	
	<!-- order -->
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-order.css') }}"> -->

	<!-- GG FONT -->
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>

	@include('front.layouts.header')
	
	@yield('content')

	<!-- main-container-part -->
	
	@include('front.layouts.front_footer')
	
	<!-- boostrap & jquery -->

<script src="{{ asset('front/js/jquery.min_af.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min_0028.js') }}"></script>
<!-- js file -->
<script src="{{ asset('front/js/function-homev1.js') }}"></script>
<script src="{{ asset('front/js/function-sidebar.js') }}"></script>
<script src="{{ asset('front/js/function-back-top.js') }}"></script>
<script src="{{ asset('front/js/function-select-custom.js') }}"></script>
<script src="{{ asset('front/js/function-search-v2.js') }}"></script>
<!-- scroll js -->
<script type="text/javascript" src="{{ asset('front/scrolling/TweenMax.min.js') }}"></script>
<script src="{{ asset('front/scrolling/jquery.superscrollorama.js') }}"></script>
<script src="{{ asset('front/js/function-scroll.js') }}"></script>
<script src="{{ asset('front/js/funtion-header-v3.js') }}"></script>
	
	<!-- singel detail -->
	<script src="{{ asset('front/slick/slick.js') }}"></script>
	<script src="{{ asset('front/js/function-slick.js') }}"></script>
	<script src="{{ asset('front/js/function-flower.js') }}"></script>
	<script src="{{ asset('front/js/function-input-number.js') }}"></script>

	<!-- cart -->
	<script src="{{ asset('front/js/function-shopping-cart.js') }}"></script>

	<!-- checkout -->
	<script src="{{ asset('front/js/function-store.js') }}"></script>

	<!-- Contact -->
	<script src="{{ asset('front/js/function-map.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnMr64OtHBrpxBLLbYX2K2Waf4enq8sp0&callback"></script>

	<!-- blog -->
	<script src="{{ asset('front/js/function-shop.js') }}"></script>

</body>
</html>
