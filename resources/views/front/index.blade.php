@include('front.layouts.front_header')

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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">

<div class="item active slide-1">
	<img src="{{ asset('front/img/crousel_banner1.png') }}" alt="img-holiwood">
	<div class="carousel-caption">
      <h3>EXPLORE THE</h3>
      <h1>New Arrivals</h1>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
      <!-- <img src="{{ asset('front/img/crousel_banner1.png') }}" alt="img-holiwood"><br> -->
      <a href="#">Shop now</a>
    </div>
  	
</div>

<div class="item slide-2">
	<img src="{{ asset('front/img/crousel_banner1.png') }}" alt="img-holiwood">
	<div class="carousel-caption">
      <h3>A Ferfect</h3>
      <h1>Bouquet</h1>
      <div class="line"></div>
      <p>It is a long established fact that a reader will be distracted by the redable content of a page when looking at its latout</p>
      <a href="#">Shop now</a>
    </div>
  
</div>

<div class="item slide-1">
	<img src="{{ asset('front/img/crousel_banner1.png') }}" alt="img-holiwood">
	<div class="carousel-caption">
      <h3>EXPLORE THE</h3>
      <h1>New Arrivals</h1>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
      <!-- <img src="{{ asset('front/img/crousel_banner1.png') }}" alt="img-holiwood"><br> -->
      <a href="#">Shop now</a>
    </div>
  	
</div>

<div class="item slide-2">
	<img src="{{ asset('front/img/crousel_banner1.png') }}" alt="img-holiwood">
	<div class="carousel-caption">
      <h3>A Ferfect</h3>
      <h1>Bouquet</h1>
      <div class="line"></div>
      <p>It is a long established fact that a reader will be distracted by the redable content of a page when looking at its latout</p>
      <a href="#">Shop now</a>
    </div>
  
</div>

</div>
</div>

<div class="who" id="showcase">
<div class="gallery clearfix">
	<figure>
<img src="{{ asset('front/img/second_banner.png') }}" alt="img-holiwood">
<h1>who we are ?</h1>
<h1 class="h2">who we are ?</h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has<br class="hidden-md hidden-sm hidden-xs">
been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type<br class="hidden-md hidden-sm hidden-xs"> and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into<br class="hidden-md hidden-sm hidden-xs"> electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of <br class="hidden-md hidden-sm hidden-xs">
Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <br class="hidden-md hidden-sm hidden-xs">
software like Aldus PageMaker including versions of Lorem Ipsum
</p>
</figure>
</div>
</div>




<div class="container collection" id="showcase-2">
<h1>Shop by collection</h1>
<h2>- All Category of Jenstore -</h2>
<div class="gallery clearfix">
<figure>
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 banner-collec">

		<img src="{{ asset('front/img/third_banner.png') }}" class="img-responsive" alt="img-holiwood">
		<h3>HELLO SUMMER</h3>
		<h1>Sale 10%</h1>
		<a href="#">Shop now</a>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-collection">
			<div class="product-image-collec">
				<figure class="hot"><a href="#"><img src="{{ asset('front/img/product4.webp') }}" class="img-responsive" alt="img-holiwood"></a></figure>
				<div class="product-icon-collec">
					<a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
			</div>
			<div class="product-title-collec">
				<h5><a href="#"> Pink roses</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
				<div class="prince">$207.2</div>
			</div>
			
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-collection">
			<div class="product-image-collec">
				<a href="#"><img src="{{ asset('front/img/product2.webp') }}" class="img-responsive" alt="img-holiwood"></a>
				<div class="product-icon-collec">
					<a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
			</div>
			<div class="product-title-collec">
				<h5><a href="#"> Eleganr by BloomNation</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
				<div class="prince">$115.4</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-collection">
			<div class="product-image-collec">
				<a href="#"><img src="{{ asset('front/img/product3.webp') }}" class="img-responsive" alt="img-holiwood"></a>
				<div class="product-icon-collec">
					<a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
			</div>
			<div class="product-title-collec">
				<h5><a href="#">Queen Rose - Yellow</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
				<div class="prince">$250.6</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-collection">
			<div class="product-image-collec">
				<figure class="sale"><a href="#"><img src="{{ asset('front/img/product4.webp') }}" class="img-responsive" alt="img-holiwood"></a></figure>
				<div class="product-icon-collec">
					<a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
			</div>
			<div class="product-title-collec">
				<h5><a href="#">Cottage Rose Bouquet</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
				<div class="prince">$100.9<s class="strike">$150.9</s></div>
			</div>
		</div>
	</div>
</div>
</figure>
</div>
</div>
<div class=" wedding" id="showcase-3">



<h1>Wedding</h1>
<h2>- Lorem Ipsum is<span class="hidden-xs"> simply dummy</span> text of the printing -</h2>
<div class="gallery clearfix">
<figure>
	<div class="img-wedding"><img src="{{ asset('front/img/fourth_banner.png') }}" alt="img-holiwood"></div>
	<div class="container wedding-content">
		<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 product-wedding">
		<div class="product-image-wedding">
			<figure class="sale"><a href="#"><img src="{{ asset('front/img/product1.webp') }}" class="img-responsive" alt="img-holiwood"></a></figure>
				<div class="product-icon-wedding">
					<a href="#"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
		</div>
		<div class="product-title-wedding">
				<h5><a href="#">Queen Rose - Pink</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
				<div class="prince">$300.2<s class="strike">$250.9</s></div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 product-wedding">
		<div class="product-image-wedding">
				<a href="#"><img src="{{ asset('front/img/product6.webp') }}" class="img-responsive" alt="img-holiwood"></a>
				<div class="product-icon-wedding">
					<a href="#"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
		</div>
		<div class="product-title-wedding">
				<h5><a href="#">Bouquet Lavender</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
				<div class="prince">$160.8</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 product-wedding">
		<div class="product-image-wedding">
			<figure class="hot"><a href="#"><img src="{{ asset('front/img/product1.webp') }}" class="img-responsive" alt="img-holiwood"></a></figure>
				<div class="product-icon-wedding">
					<a href="#"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
		</div>
		<div class="product-title-wedding">
				<h5><a href="#">Tulipa Floriade - Yellow</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
				<div class="prince">$200.7</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 product-wedding">
		<div class="product-image-wedding">
				<a href="#"><img src="{{ asset('front/img/product6.webp') }}" class="img-responsive" alt="img-holiwood"></a>
				<div class="product-icon-wedding">
					<a href="#"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
		</div>
		<div class="product-title-wedding">
				<h5><a href="#">Bouquet Rose</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
				<div class="prince">$350.4</div>
		</div>
	</div>
</div>
	</div>
	
</figure>
</div>

</div>
<div class="holiday" id="showcase-4">
<div class="container">
	<h1>Holiday</h1>
	<h2>- Lorem Ipsum is<span class="hidden-xs"> simply dummy</span> text of the printing -</h2>
	<div class="gallery clearfix">
	<figure>
	<div class="row">
		
	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-holiday">
			<div class="product-image-holiday">
				<figure class="hot"><a href="#"><img src="{{ asset('front/img/flower1.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
				<div class="product-icon-holiday">
					<a href="#"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
		</div>
		<div class="product-title-holiday">
				<h5><a href="#">Fun & Flirty By BloomNation</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
				<div class="prince">$200.2</div>
		</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-holiday">
			<div class="product-image-holiday">
				<a href="#"><img src="{{ asset('front/img/flower2.png') }}" class="img-responsive" alt="img-holiwood"></a>
				<div class="product-icon-holiday">
					<a href="#"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
		</div>
		<div class="product-title-holiday">
				<h5><a href="#">Winter White Bouquet</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
				<div class="prince">$240.2</div>
		</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-holiday">
			<div class="product-image-holiday">
				<a href="#"><img src="{{ asset('front/img/flower1.png') }}" class="img-responsive" alt="img-holiwood"></a>
				<div class="product-icon-holiday">
					<a href="#"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
		</div>
		<div class="product-title-holiday">
				<h5><a href="#">Tulipa Floriade - Red</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
				<div class="prince">$105.7</div>
		</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-holiday">
			<div class="product-image-holiday">
				<figure class="sale"><a href="#"><img src="{{ asset('front/img/flower2.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
				<div class="product-icon-holiday">
					<a href="#"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
		</div>
		<div class="product-title-holiday">
				<h5><a href="#">West Palm Beach Florist</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
				<div class="prince">$209.2<s class="strike">$180.9</s></div>
		</div>
		</div>
	</div>
	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 banner-holiday">
		<div class="img-banner-holiday">
			<img src="{{ asset('/front/img/holiday.png') }}" class="img-responsive" alt="img-holiwood">
		</div>
		<div class="title-holiday">
			<h1>HAPPY MOTHER'S DAY</h1>
			<p>Lorem ipsum is simply dummy text of the printing and typesetting</p>
			<span id="sale30">-30</span><span id="pt">%</span><br><span id="off">OFF</span>
		</div>
		
	</div>
	</div>
	</figure>
	</div>

</div>
</div>
<div class="count">
<div class="img-count">
	<img src="{{ asset('/front/img/counter.png') }}" alt="img-holiwood">
</div>
<div class="title-count">
	<h1>Sale up to 40%</h1>
<p>It is a long established facr that a reader will be distracted by the<br> readable content of a page when looking at its layout</p>
<div id="countdown">
<div id='tiles'></div>
	<ul class="labels">
		<li>Days</li>
		<li>Hours</li>
		<li>Mins</li>
		<li>Secs</li>
	 </ul>
</div>
<a href="#">Shop now</a>
</div>


</div>
<div class="brand container">
<div class="row">
	<div class="brand-1 col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
	<div class="brand-2 col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
	<div class="brand-3 col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
	<div class="brand-4 col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
	<div class="brand-5 col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
	<div class="brand-6 col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
</div>

</div>
<div class="container blog">
<h1>Latest Blogs</h1>
<p>- Lorem Ipsum is<span class="hidden-xs"> simply dummy</span> text of the printing -</p>
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 product-blog">
		<a href="#"><img src="{{ asset('/front/img/blog-1.jpg') }}" class="img-responsive" title="img-blog" alt="img-holiwood"></a>
		<div class="time-blog">
			<span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2018</span></span>
			<span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
		</div>
		<h2><a href="#">Choose for yourself the Flobal chiffon dress</a></h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 product-blog">
		<a href="#"><img src="{{ asset('/front/img/blog-2.jpg') }}" class="img-responsive" title="img-blog" alt="img-holiwood"></a>
		<div class="time-blog">
			<span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2018</span></span>
			<span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
		</div>
		<h2><a href="#">Choose for yourself the Flobal chiffon dress</a></h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 product-blog">
		<a href="#"><img src="{{ asset('/front/img/blog-3.jpg') }}" class="img-responsive" title="img-blog" alt="img-holiwood"></a>
		<div class="time-blog">
			<span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2018</span></span>
			<span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
		</div>
		<h2><a href="#">Choose for yourself the Flobal chiffon dress</a></h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

	</div>
</div>
</div>
</main>
@include('front.layouts.front_footer')