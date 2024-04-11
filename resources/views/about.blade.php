@extends('layouts/frontLayout/front_design')
@section('content')

<!-- Inner Header -->
<section class="section-padding bg-dark inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mt-0 mb-3 text-white">About Us</h1>
                <div class="breadcrumbs">
                    <p class="mb-0 text-white"><a class="text-white" href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>  /  <span class="text-success">About Us</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Inner Header -->

<!-- About -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="d-flex justify-content-center row">
            <div class="pl-4 col-lg-5 col-md-5 pr-4 mt-2">
                <img class="rounded img-fluid mt-5" src="{{ asset('images/frontend_images/logo.png') }}" alt="Card image cap">
            </div>
            <div class="col-lg-6 col-md-6 pl-5 pr-5">
                <h2 class="mt-5 mb-5 text-secondary">For most natural and fresh products, Remember us!</h2>
                <h5 class="mt-2">Our Vision</h5>
                <p>VeggieMart believes in healthy diet, we believe eating healthy can help you avoid and cure more diseases than any other medicine! Our goal is to continue serving the most fresh, potent and natural products throughout the country!</p>
                <h5 class="mt-4">Our Goal</h5>
                <p>Providing chemical-free and fresh products to our healthy customers without any hinderence is out mission. Our products are most natural you would get, and they <b style="color: #51aa1b">ARRIVE NATURALLY!</b></p>
            </div>
        </div>
    </div>
</section>
<!-- End About -->
@endsection