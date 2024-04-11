@extends('front.layouts.design')
@section('content')

<main>
	<div class="content-search">

                            <div class="container container-100">
                            	<i class="far fa-times-circle" id="close-search"></i>
                                <h3 class="text-center">what are your looking for ?</h3>
                                <form method="get" action="/search" role="search" style="position: relative;">
                                  <input type="text" class="form-control control-search" value="" autocomplete="off" placeholder="Enter Search ..." aria-label="SEARCH" name="q">

                                  <button class="button_search" type="submit">search</button>
                                </form>
                            </div>
                            
</div>
	<div class="container banner">
		<figure id="banner-figure"><a href="#"><img src="{{ asset('/front/img/blog-banner.jpg') }}" class="img-responsive" alt="img-holiwood"></a></figure>
		<div class="text-banner">
			<h1>Tulips<br>Collection</h1>
			<p>SALE UP TO 20% OFF</p>
			<a href="#">Shop now</a>
		</div>
	</div>
	<div class="container content">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<form class="form-group">
					<input type="text" name="input-find" placeholder="Enter your search" class="input-lg">
					<button type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 menu-breadcrumb">
				<ul class="breadcrumb">
  					<li><a href="homev3.html">Home</a></li>
  					<li><a href="#">Blogs</a></li>
				</ul>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 content-blog">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 product-blog">
					<a href="blog-post.html"><img src="{{ asset('/front/img/blog-1.jpg') }}" class="img-responsive" alt="img-holiwood"></a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 title-blog">
					<h2><a href="blog-post.html">Choose for yourself the Flobal chiffon dress</a></h2>
				<div class="time-blog">
					<span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2018</span></span>
					<span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
				</div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
				<a href="#">Read more</a>
				</div>
				<!--  -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 product-blog">
					<a href="#"><img src="{{ asset('/front/img/blog-2.jpg') }}" class="img-responsive" alt="img-holiwood"></a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 title-blog">
					<h2><a href="#">Choose for yourself the Flobal chiffon dress</a></h2>
				<div class="time-blog">
					<span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2018</span></span>
					<span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
				</div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
				<a href="#">Read more</a>
				</div>
				<!--  -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 product-blog">
					<a href="#"><img src="{{ asset('/front/img/blog-3.jpg') }}" class="img-responsive" alt="img-holiwood"></a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 title-blog">
					<h2><a href="#">Choose for yourself the Flobal chiffon dress</a></h2>
				<div class="time-blog">
					<span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2018</span></span>
					<span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
				</div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
				<a href="#">Read more</a>
				</div>
				<!--  -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 product-blog">
					<a href="#"><img src="{{ asset('front/img/blog-4.jpg') }}" class="img-responsive" alt="img-holiwood"></a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 title-blog">
					<h2><a href="#">Choose for yourself the Flobal chiffon dress</a></h2>
				<div class="time-blog">
					<span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2018</span></span>
					<span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
				</div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
				<a href="#">Read more</a>
				</div>
				<!--  -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pagi">
					<ul class="pagination">
						<li><a href="#">01</a></li>
						<li><a href="#">02</a></li>
						<li><a href="#">03</a></li>
						<li><a href="#">04</a></li>
						<li><a href="#"><img src="{{ asset('front/img/Next.png') }}" class="img-responsive" alt="img-holiwood"></a></li>
					</ul>
				</div>
			</div>
<!-- sidebar -->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar">
				<div class="collapse navbar-collapse" id="mysidebar">
				<ul class="list-group list-1">
					<li class="list-group-item">CATEGORIES</li>
  					<li class="list-group-item">
  						<a href="#">NEW NOW</a><button class="accordion"></button>
  						<ul class="panel">
  							<li><a href="#">Tuylip</a></li>
  							<li><a href="#">lavender</a></li>
  							<li><a href="#">Rose</a></li>
  						</ul>
  					</li>
  					<li class="list-group-item">
  						<a href="flower.html">FLOWER</a><button class="accordion"></button>
  						<ul class="panel">
  							<li><a href="product-detail.html">Rose</a></li>
  							<li><a href="#">Tulips</a></li>
  							<li><a href="#">Daisy</a></li>
  							<li><a href="#">Carnation</a></li>
  							<li><a href="#">Gerbera</a></li>
  							<li><a href="#">Other</a></li>
  						</ul>
  					</li>
  					<li class="list-group-item">
  						<a href="#">PLANT</a><button class="accordion"></button>
  						<ul class="panel">
  							<li><a href="#">Tuylip</a></li>
  							<li><a href="#">lavender</a></li>
  							<li><a href="#">Rose</a></li>
  						</ul>
  					</li>
  					<li class="list-group-item">
  						<a href="#">RING OF PROFESSION</a><button class="accordion"></button>
  						<ul class="panel">
  							<li><a href="#">Tuylip</a></li>
  							<li><a href="#">lavender</a></li>
  							<li><a href="#">Rose</a></li>
  						</ul>
  					</li>
				</ul>
				<!--  -->
				<ul class="list-group list-2">
					<li class="list-group-item">RECENT POSTS</li>
  					<li class="list-group-item list-item-2">
  						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
  							<a href="#"><img src="{{ asset('front/img/blog-1.jpg') }}" class="img-responsive" alt="img-holiwood"></a>
  						</div>
  						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 title-post">
  							<a href="#"><h1>Choose for yourself the most style</h1></a>
  							<p>April, 30 2018</p>
  						</div>
  					</li>
  					<li class="list-group-item list-item-2">
  						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
  							<a href="#"><img src="{{ asset('front/img/blog-2.jpg') }}" class="img-responsive" alt="img-holiwood"></a>
  						</div>
  						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 title-post">
  							<a href="#"><h1>Choose for yourself the most style</h1></a>
  							<p>April, 30 2018</p>
  						</div>
  					</li>
  					<li class="list-group-item list-item-2">
  						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
  							<a href="#"><img src="{{ asset('front/img/blog-3.jpg') }}" class="img-responsive" alt="img-holiwood"></a>
  						</div>
  						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 title-post">
  							<a href="#"><h1>Choose for yourself the most style</h1></a>
  							<p>April, 30 2018</p>
  						</div>
  					</li>
  					<li class="list-group-item list-item-2">
  						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
  							<a href="#"><img src="{{ asset('front/img/blog-4.jpg') }}" class="img-responsive" alt="img-holiwood"></a>
  						</div>
  						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 title-post">
  							<a href="#"><h1>Choose for yourself the most style</h1></a>
  							<p>April, 30 2018</p>
  						</div>
  					</li>
				</ul>
				<!--  -->
				<div class="panel-default">
					<div class="panel-header">
						ARCHIVE
					</div>
					<div class="panel-body">
						<p>April, 30 2018</p>
						<p>Februaly, 30 2018</p>
					</div>
				</div>
				<div class="blog-tag">
					<h1>BLOG TAGS</h1>
					<a href="#">Rose</a> <a href="#">Tulips</a> <a href="#" class="active-tags">Carnation</a> <a href="#">Daisy</a>
					<a href="#">Gerbera</a>
				</div>
			</div>
			</div>
			<div class="navbar-header mobile-sidebar">
    					<button type="button" class="navbar-toggle btn-mobile-sidebar" data-toggle="collapse" data-target="#mysidebar">
    					    <i class="fas fa-angle-left" id="icon-sidebar"></i>  
   					   	</button>
   			</div>
		</div>
	</div>

	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-shop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style-res-shop.css') }}">
	
@endsection