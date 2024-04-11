@extends('front.layouts.design')
@section('content')

<div class="container">
            <div class="page-404">
                <!-- End images -->
                <div class="text center">
                    <div class="icon-box box">
                        <img src="{{ asset('front/img/icon-page404.png') }}" alt="icon">
                    </div>
                    <h3>THIS IS NOT THE WEB PAGE YOU ARE LOOKING FOR</h3>
                    <p>Please try one of the following pages <a href="#" title="link">home page <i class="fa fa-angle-double-right"></i></a></p>
                    <form action="#" method="get" accept-charset="utf-8">
                        <input type="text" onblur="if (this.value == '') {this.value = 'Search here...';}" onfocus="if(this.value != '') {this.value = '';}" value="Search here..." class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter" name="email"> 
                        <button class="button" title="Search" type="submit">Search</button>
                    </form>
                </div>
                <!-- End text -->
            </div>
            <!-- End page404 -->
        </div>
        <!-- End container -->

@endsection