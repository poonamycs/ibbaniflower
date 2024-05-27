

@extends('layouts.frontLayout.design')
@section('content')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-homev2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style-fix-nav.css') }}">
<style>
main .carousel .cr-inner {
    text-align: left;
}
.cr-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}

@media (max-width: 1600px) {
    main .carousel .cr-inner .item1 {
        padding: 150px 90px 100px 100px;
		height: 100%;
    }
	@media (transform-3d), (-webkit-transform-3d) {
		.cr-inner>.cr-item.active, .cr-inner>.cr-item.next.left, .cr-inner>.cr-item.prev.right {
			left: 0;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
		}
	}
	.cr-inner>.active, .cr-inner>.next, .cr-inner>.prev {
		display: block;
	}
	@media (transform-3d), (-webkit-transform-3d) {
    .cr-inner>.cr-item {
        -webkit-transition: -webkit-transform .6s ease-in-out;
        -o-transition: -o-transform .6s ease-in-out;
        transition: transform .6s ease-in-out;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        perspective: 1000px;
    }
}
.slideee {
    background-image: url(img/BG-slide1-v2.png);
    background-position: -300px -90px;
    height: auto;
    background-repeat: no-repeat;
}
}
main .carousel .cr-inner .cr-item h3.Image-text {
    color: #fff;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-image: url(https://landing.engotheme.com/html/jenstore/demo/img/img-slide-h22.jpg);
    background-position: -160px -170px;
}
@media (max-width: 1600px) {
    main .carousel .cr-inner .cr-item h3 {
        font-size: 80px;
        padding: 0;
    }
}
main .carousel .cr-inner .cr-item h3 {
    font-family: Abril Fatface;
    font-weight: 400;
    font-size: 120px;
    color: black;
    text-align: left;
    padding: 100px 0 0 30px;
}
@media (max-width: 1600px) {
    main .carousel .cr-inner .cr-item p {
        font-size: 18px;
        padding-left: 0;
    }
}
main .carousel .cr-inner .cr-item p {
    font-family: Poppins;
    font-weight: 400;
    font-size: 18px;
    color: black;
    color: #888888;
    padding-left: 30px;
}
main .carousel .cr-inner .cr-item a:hover {
    background-position: 100%;
    background-color: #fff;
    color: black;
    text-decoration: none;
}
@media (max-width: 1600px) {
    main .carousel .cr-inner .cr-item a {
        margin: 30px 0 0 0;
        padding: 10px 30px;
        font-size: 14px;
    }
}
main .carousel .cr-inner .cr-item a {
    font-family: Abril Fatface;
    font-weight: 400;
    color: white;
    background-color: black;
    border: 1px solid black;
    background-image: linear-gradient(90deg, black 50%, transparent 50%);
    background-size: 600px;
    background-repeat: no-repeat;
    background-position: 0%;
    transition: background .3s ease-in-out;
    display: inline-block;
}
a{
    text-decoration: none;
}
main .carousel {
    height: 625px;
}
@media (max-width: 1600px) {
    main .carousel .carousel-control.right1 {
        left: 960px;
    }
    main .carousel .carousel-control.left1 {
        left: 900px;
    }
}
footer{
    margin-top:50px;
}
</style>
@endsection
<main>

<?php $chunks = $categories->chunk(2);?>
<?php $products = App\Models\Corporateproduct::where('category',$chunks[0][0]->id)->get();?>
<div class="row">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    
        <div class="cr-inner">
            <div class="cr-item active slideee">
                <div class="item slide-1">
                <div class="title-slide1 col-lg-12 col-md-12 col-sm-6 col-xs-6">
                    <h3 class="Image-text">New<br> Collection.</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing<br class="hidden-xs hidden-sm"> and typesetting industry</p>
                    <a href="#">Enquiry Now</a>
                </div></div>
            </div>
        </div>

        <div class="carousel-inner">
            @foreach($products as $product)
            
                <div class="item <?php if($products[0]->id == $product->id){ ?> active <?php } ?>slide-{{$product->id}}">
                    <img src="{{ asset('images/backend_images/gallery/large/'.$product->image) }}" class="img-responsive" alt="img-holiwood">
                </div>
            @endforeach
            <!-- <div class="item slide-5">
                <img src="https://landing.engotheme.com/html/jenstore/demo/img/img-slide-h22.jpg" class="img-responsive" alt="img-holiwood">
            </div>
            <div class="item slide-6">
                <img src="https://landing.engotheme.com/html/jenstore/demo/img/img-slide-h23.jpg" class="img-responsive" alt="img-holiwood">
            </div> -->
        </div>
        <a class="left carousel-control left1" href="#myCarousel" data-slide="prev">
            <img src="{{ asset('images/frontend_images/Next.png') }}" alt="img-holiwood">
        </a>
        <a class="right carousel-control right1" href="#myCarousel" data-slide="next">
            <img src="{{ asset('images/frontend_images/Next.png') }}" alt="img-holiwood">
        </a>
    </div>
</div>
<?php $products = App\Models\Corporateproduct::where('category',$chunks[0][1]->id)->get();?>
<div class="row">
<div id="myCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        @foreach($products as $product)
            <div class="item <?php if($products[0]->id == $product->id){ ?> active <?php } ?> slide-{{ $product->id }}">
                <img src="{{ asset('images/backend_images/gallery/large/'.$product->image) }}" class="img-responsive" alt="img-holiwood">
            </div>
        @endforeach
            <!-- <div class="item slide-5">
                <img src="https://landing.engotheme.com/html/jenstore/demo/img/img-slide-h22.jpg" class="img-responsive" alt="img-holiwood">
            </div>
            <div class="item slide-6">
                <img src="https://landing.engotheme.com/html/jenstore/demo/img/img-slide-h23.jpg" class="img-responsive" alt="img-holiwood">
            </div> -->
        </div>
        <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
            <img src="{{ asset('images/frontend_images/Next.png') }}" alt="img-holiwood">
        </a>
        <a class="right carousel-control" href="#myCarousel1" data-slide="next">
            <img src="{{ asset('images/frontend_images/Next.png') }}" alt="img-holiwood">
        </a>
        <div class="cr-inner">
            <div class="cr-item active slideee">
                <div class="item slide-1">
                <div class="title-slide1 col-lg-12 col-md-12 col-sm-6 col-xs-6">
                    <h3 class="Image-text">New<br> Collection.</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing<br class="hidden-xs hidden-sm"> and typesetting industry</p>
                    <a href="#">Enquiry Now</a>
                </div></div>
            </div>
        </div>

    </div>
</div>

</main>

<script src="{{ asset('js/frontend_js/function-homev2.js') }}"></script>
<script src="{{ asset('js/frontend_js/function-menu-v2.js') }}"></script>
<script src="{{ asset('js/frontend_js/function-search-v2.js') }}"></script>
@endsection