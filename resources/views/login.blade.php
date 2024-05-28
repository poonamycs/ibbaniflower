@extends('layouts.frontLayout.design')
@section('content')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-faq.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-login.css') }}">

	<div class="banner">
		<div class="container">
			<figure id="banner-about"><a href="#"><img src="{{ asset('images/frontend_images/loginbanner.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
		<div class="title-banner">
			<h1>Login/Register</h1>
			<p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i>Login/Register</p>
		</div>
		
		</div>
		
	</div>
<div class="container container-ver2">
            <div class="page-login box space-50">
                <div class="row">
                    <div class="col-md-6 sign-in space-30">
                        <!-- <h3>sign in</h3>
                        <p>Hello, welcome to your account.</p>
                        <div class="social space-30 box">
                            <a class="float-left" href="#" title="facebook">
                                <i class="fab fa-facebook-f"></i>
                                SIGN IN WITH FACEBOOK
                            </a>
                            <a class="float-right" href="#" title="TWITTER">
                                <i class="fab fa-twitter"></i>
                                SIGN IN WITH TWITTER
                            </a>
                        </div>
                        
                        <form class="form-horizontal" method="POST">
                            <div class="group box space-20">
                                <label class="control-label" for="inputemail">EMAIL ADDRESS *</label>
                                <input class="form-control" type="text" placeholder="Your email" id="inputemail">
                            </div>
                            <div class="group box">
                                <label class="control-label" for="inputemail">PASSWORD *</label>
                                <input class="form-control" type="text" placeholder="Password" id="inputpass"> 
                            </div>
                            <div class="remember">
                                <input id="remeber" type="checkbox" name="check" value="remeber">
                                <label for="remeber" class="label-check">remember me!</label>
                                <a class="help" href="#" title="help ?">Fogot your password?</a>   
                            </div>           
                            <button type="submit" class="link-v1 rt">LOGIN NOW</button>
                        </form> -->
                        <!-- End form -->
                    </div>
                    <!-- End col-md-6 -->
                    <div class="col-md-6">
                        <div class="register box space-50">
                            <h3>Sign In</h3>
                            <form action="{{ url('/user-login') }}" class="form-horizontal" method="POST" id="loginform">
                                @csrf
                            <div class="group box space-20">
                                <label class="control-label" for="inputemail">EMAIL ADDRESS *</label>
                                <input class="form-control" type="text" name="email" placeholder="Your email" id="inputemail">
                            </div>
                            <div class="group box">
                                <label class="control-label" for="inputemail">PASSWORD *</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" id="inputpass"> 
                            </div>
                            <div class="remember">
                                <input id="remeber" type="checkbox" name="check" value="remeber">
                                <label for="remeber" class="label-check">remember me!</label>
                                <a class="help" href="#" title="help ?">Fogot your password?</a>   
                            </div>           
                            <button type="submit" class="link-v1 rt">LOGIN NOW</button>
                        </form><br/>
                            <a href="{{ url('/user-register') }}"><button class="link-v1 rt" style="">Create an Account</button></a>
                        </div>
                        <!-- End register -->
                        <!-- <div class="sigg-to-day box">
                            <h3>SIGN UP TODAY</h3>
                            <form class="form-horizontal" method="POST">
                                <div class="checkbox">
                                    <input id="check1" type="checkbox" name="check" value="check1">
                                    <label class="label-check" for="check1">Speed your way through the checkout.</label>
                                    <input id="check2" type="checkbox" name="check" value="check2">
                                    <label class="label-check" for="check2">Track your orders easily.</label>
                                    <input id="check3" type="checkbox" name="check" value="check3">
                                    <label class="label-check" for="check3">Keep a record of all purchases.</label>
                                </div>
                            </form>
                        </div> -->
                    </div>
                    <!-- End col-md-6 -->
                </div>
            </div>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
        <script>
        var form = $("#loginform");
        
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                email: {
                    required: true,   
                },
                password: {
                    required: true,   
                },   
            },
            messages: {
                
                email: {
                    required: "This field is required *",   
                },
                password: {
                    required: "This field is required *",   
                },

            }
        });
        
    </script>   
		@endsection