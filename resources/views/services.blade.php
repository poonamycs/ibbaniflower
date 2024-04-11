@extends('layouts/frontLayout/front_design')
@section('content')

<!-- page header section ending here -->
<section class="page-header padding-tb page-header-bg-1">
    <div class="container">
        <div class="page-header-item d-flex align-items-center justify-content-center">
            <div class="post-content">
                <h3>Services</h3>
                <div class="breadcamp">
                    <ul class="d-flex flex-wrap justify-content-center align-items-center">
                        <li><a href="{{ url('/') }}">Home</a> </li>
                        <li><a class="active">Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page header section ending here -->

<!-- service single section start here -->
<section class="service-single padding-tb">
    <div class="container">
        <div class="service-post row">
            <div class="col-lg-6">
                <div class="post-thumb">
                    <img src="../images/frontend_images/service/01.jpg" alt="service">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="post-content">
                    <h3>Selecting The Best Cows</h3>
                    <p>Continually productize compelling quality for Productize with Quality for packed with 
                    all Elated Them Setting up to website productize compelling quality for packed 
                    with all them imperdiet molestie est volutpat at, sed viverra cursus.</p>
                    <p>Nullam elementum tincidunt massa pulvinar leo ultricies the mp imperdiet molestie 
                    est volutpat at, sed viverra cursus us et iusto odio dignissimos Setting up to 
                    website productize compelling quality for packed.</p>
                    <ul>
                        <li><i class="far fa-check-square"></i>We are providing different services</li>
                        <li><i class="far fa-check-square"></i>We are one of leading company</li>
                        <li><i class="far fa-check-square"></i>Profitability is the primary goal of all business</li>
                        <li><i class="far fa-check-square"></i>Learn how to grow your Business</li>
                        <li><i class="far fa-check-square"></i>Professional solutions for your business</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="service-post video-service row">
            <div class="col-lg-6">
                <div class="post-thumb">
                    <img src="../images/frontend_images/service/02.jpg" alt="service">
                    <a href="https://www.youtube.com/embed/cZh0nsrkHh8" class="video-icon" data-rel="lightcase">
						<i class="fab fa-youtube"></i>
					</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="post-content">
                    <h3><span>Developing The Most</span>Efficient Breeding Processes</h3>
                    <p>Continually productize compelling quality for Productize with Quality for packed with 
                    all Elated Them Setting up to website productize compelling quality for packed 
                    with all them imperdiet molestie est volutpat at, sed viverra cursus.</p>
                    <p>Nullam elementum tincidunt massa pulvinar leo ultricies the mp imperdiet molestie 
                    est volutpat at, sed viverra cursus us et iusto odio dignissimos Setting up to 
                    website productize compelling quality for packed.</p>
                    <p>Continually productize compelling quality for Productize with Quality for packed with 
                    all Elated Them Setting up to website productize compelling quality for packed 
                    with all them imperdiet molestie est volutpat at, sed viverra cursus.</p>
                    <p>Nullam elementum tincidunt massa pulvinar leo ultricies the mp imperdiet molestie 
                    est volutpat at, sed viverra cursus us et iusto odio dignissimos Setting up to 
                    website productize compelling quality for packed.</p>
                </div>
            </div>
        </div>
        <div class="service-post row">
            <div class="col-lg-6">
                <div class="post-thumb">
                    <img src="../images/frontend_images/service/03.jpg" alt="service">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="post-content">
                    <h3><span>Individual Medicine and</span>Herd Health</h3>
                    <p>Continually productize compelling quality for Productize with Quality for packed with 
                    all Elated Them Setting up to website productize compelling quality for packed 
                    with all them imperdiet molestie est volutpat at, sed viverra cursus.</p>
                    <p>Nullam elementum tincidunt massa pulvinar leo ultricies the mp imperdiet molestie 
                    est volutpat at, sed viverra cursus us et iusto odio dignissimos Setting up to 
                    website productize compelling quality for packed.</p>
                    <ul>
                        <li><i class="far fa-check-square"></i>We are providing different services</li>
                        <li><i class="far fa-check-square"></i>We are one of leading company</li>
                        <li><i class="far fa-check-square"></i>Profitability is the primary goal of all business</li>
                        <li><i class="far fa-check-square"></i>Learn how to grow your Business</li>
                        <li><i class="far fa-check-square"></i>Professional solutions for your business</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service single section start here -->

@endsection