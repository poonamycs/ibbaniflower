@extends('layouts/frontLayout/front_design')
@section('content')

<!-- page header section ending here -->
<section class="page-header padding-tb page-header-bg-1">
    <div class="container">
        <div class="page-header-item d-flex align-items-center justify-content-center">
            <div class="post-content">
                <h3>Gallery</h3>
                <div class="breadcamp">
                    <ul class="d-flex flex-wrap justify-content-center align-items-center">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a class="active">Gallery</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page header section ending here -->

<!-- portfolio section start here -->
<div class="portfolio style-3 padding-tb">
    <div class="section-wrapper">
        <div class="portfolio-wrapper">

        	@foreach($AllImages as $gallery)
            <div class="post-thumb wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
				<div class="post-thumb-inner">
					<a class="gallery-icon" href="{{ asset('images/backend_images/gallery/'.$gallery->image) }}" data-rel="lightcase">
						<i class="fas fa-search"></i>
					</a>
					<img src="{{ asset('images/backend_images/gallery/'.$gallery->image) }}" alt="" style="object-fit: cover; height: 250px;">
				</div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- portfolio section ending here -->

@endsection
