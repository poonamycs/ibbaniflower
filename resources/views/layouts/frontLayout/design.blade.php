<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<!-- bootstrap vs fontawesome-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="icon" href="img/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-contact.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-res-contact.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-fix-nav.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-form-search-mobile.css') }}">
		<!-- slick -->
	
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
	<script src="{{ asset('js/frontend_js/jquery.min_af.js') }}"></script>
	<script src="{{ asset('js/frontend_js/bootstrap.min_0028.js') }}"></script>
	
	<!-- js file -->
	<script src="{{ asset('js/frontend_js/function-map.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnMr64OtHBrpxBLLbYX2K2Waf4enq8sp0&callback"></script>
	<script src="{{ asset('js/frontend_js/function-back-top.js') }}"></script>
	<script src="{{ asset('js/frontend_js/function-sidebar.js') }}"></script>
	<script src="{{ asset('js/frontend_js/funtion-header-v3.js') }}"></script>
	<script src="{{ asset('js/frontend_js/function-search-v2.js') }}"></script>
</body>
</html>
