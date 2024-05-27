@include('layouts.frontLayout.front_header')
<style>
	*, ::after, ::before {
    box-sizing: border-box;
	}
	.sections-shpping01 {
    padding: 50px 0;
    position: relative;

    & .inside-flowers{
        background: #FFF;
        box-shadow: 0px 4px 20px 0px rgba(113, 113, 113, 0.26);
        padding: 32px 47px;
        border-radius: 150px;
    }
    & .comon-sert{
        &::after{
            position: absolute;
            right: 0;
            top: 0;
            content: "";
            width: 1px;
            height: 52px;
            background: #efefef;
            display: inline-block;
            
        }
        & .c-icon{
            width: 55px;
            display: inline-block;
        }
        & .cd-text-div{
            padding-left: 20px;
            & h5{
                font-weight: 700;
                font-size: 18px;
                font-family: 'Inter', sans-serif;
            }
            & p{
                font-size: 14px;
                font-family: 'Inter', sans-serif;
            }
        }
    }
}
.justify-content-lg-center {
    justify-content: center !important;
	/* .container{
		max-width: 1320px;
	} */
}

.position-relative {
    position: relative !important;
}
.d-grid {
    display: grid !important;
}
.row-cols-md-3>* {
    flex: 0 0 auto;
    width: 33.3333333333%;
}
.w-100 {
    width: 100% !important;
}
.d-inline-block {
    display: inline-block !important;
}
.g-lg-5, .gy-lg-5 {
    --bs-gutter-y: 3rem;
}
.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y)* -1);
    margin-right: calc(var(--bs-gutter-x)* -.5);
    margin-left: calc(var(--bs-gutter-x)* -.5);
}
.align-items-center {
    align-items: center !important;
}
.cd-text-div h5 {
    font-weight: 700;
    font-size: 18px;
    font-family: "Inter", sans-serif;
}
.d-flex {
    display: flex !important;
}
	/* .sections-shpping01 .inside-flowers {
		background: #fff;
		box-shadow: 0px 4px 20px 0px rgba(113,113,113,.26);
		padding: 32px 47px;
		border-radius: 150px
	} */
	.leftd-div {
		position: relative;
		z-index: 2;
		margin-left: auto;
		display: table;
		top: -20px;
	}
	.rosetd-div {
		position: absolute;
		left: -40px;
		bottom: -30px;
		width: 320px;
	}
	.img1 {
		vertical-align: top;
		max-width: 60px;
		border: none;
	}
	.carousel-indicators li
	{
		border: 2px solid #7bb8e5;
	}
@media (max-width: 625px) {
	.mobile-screen {
    flex-direction: column;
    align-items: center;
}
.rosetd-div {
	display: none;
	/* bottom: 0px; */
	/* top: 0px !important; */
	/* margin-top: 12px; */
	bottom: unset;
        /* top: 35px; */
        margin-top: 16px;
        margin-left: 90px;
}
.leftd-div {
	display: none;
	
}
.who .h2 {
        top: 100px;
    }
.who p {
top: 155px;
}
.brand_container{
    display:none;
}
.count{
    display:none;
}
}
</style>
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
</ol>

<div class="carousel-inner">
@foreach($banners as $key => $banner)
<div class="item {{$key == 0 ? 'active' : '' }} slide-1">
	<img src="{{ asset('/images/frontend_images/banners/'.$banner->image) }}" alt="img-holiwood">
	<div class="carousel-caption">
      <h3>EXPLORE THE</h3>
      <h1>New Arrivals</h1>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p><br/>
      <a href="#" class="a-mannul">Shop now</a>
    </div>
</div>

@endforeach
<!-- 
<div class="item slide-2">
	<img src="{{ asset('/images/frontend_images/crausol_banner2.png') }}" alt="img-holiwood">
	<div class="carousel-caption">
      <h3>A Ferfect</h3>
      <h1>Bouquet</h1>
      <div class="line"></div>
      <p>It is a long established fact that a reader will be distracted by the redable content of a page when looking at its latout</p>
      <a href="#">Shop now</a>
    </div>
  
</div> -->
<!-- 
<div class="item slide-1">
	<img src="{{ asset('/images/frontend_images/crausol_banner3.png') }}" alt="img-holiwood">
	<div class="carousel-caption">
      <h3>EXPLORE THE</h3>
      <h1>New Arrivals</h1>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
      <a href="#">Shop now</a>
    </div>
  	
</div> -->



</div>
</div>

	<!-- <section class="sections-shpping01 d-inline-block w-100 hidden-sm hidden-xs"> -->
	<section class="sections-shpping01 w-100 d-inline-block hidden-sm hidden-xs">
       <div class="container position-relative">
          <!-- <div class="inside-flowers d-inline-block w-100"> -->
          <div class="inside-flowers d-inline-block w-100">
              <div class="row row-cols-1 row-cols-md-3 gy-5 g-lg-5 mobile-screen">
                <div class="col position-relative d-grid justify-content-lg-center">
                    <div class="comon-sert d-flex align-items-center w-100">
                        <div class="c-icon">
                           <img class="img1" alt="ser" src="{{ asset('/images/frontend_images/shipping.png') }}">
                        </div>
                        <div class="cd-text-div">
                           <h5> Free shipping </h5>
                           <p> There are many variations &#8377;30</p>
                        </div>
                    </div>
                </div>
                <div class="col position-relative d-grid justify-content-lg-center">
                  <div class="comon-sert d-flex align-items-center w-100">
                      <div class="c-icon">
                         <img class="img1" alt="ser" src="{{ asset('/images/frontend_images/ecofriendly.png') }}">
                      </div>
                      <div class="cd-text-div">
                         <h5> Secure checkout </h5>
                         <p> There are many </p>
                      </div>
                  </div>
                </div>
                <div class="col position-relative d-grid justify-content-lg-center">
                  <div class="comon-sert d-flex align-items-center w-100 afte">
                      <div class="c-icon">
                         <img class="img1" alt="ser" src="{{ asset('/images/frontend_images/1585176.png') }}">
                      </div>
                      <div class="cd-text-div">
                         <h5> Offer &amp; gift here</h5>
                         <p> Contrary to popular belief </p>
                      </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="leftd-div">
             <img alt="sy" src="{{ asset('/images/frontend_images/bg-left.png') }}">
          </div>
          <div class="rosetd-div">
            <img alt="sy" style="width:350px" src="{{ asset('/images/frontend_images/rosert.png') }}">
         </div>
       </div>
    </section>


<div class="who" id="showcase">
<div class="gallery clearfix">
	<figure>
<img src="{{ asset('/images/frontend_images/second_banner.png') }}" alt="img-holiwood">
<h1>Who we are ?</h1>
<h1 class="h2">Who we are ?</h1>
  

<p>IBBANI FLOWERS, located in the bustling neighborhood of Bellandur, Bangalore, stands as a beacon of sustainability in floral retail.<br class="hidden-md hidden-sm hidden-xs">
This eco-conscious shop specializes in locally-sourced, organic blooms, ensuring a reduced carbon footprint and support for community growers.<br class="hidden-md hidden-sm hidden-xs">Their innovative practices, such as biodegradable packaging and a waste-minimization policy, set them apart in the green initiative. <br class="hidden-md hidden-sm hidden-xs"> Customers at IBBANI FLOWERS not only indulge in the aesthetic beauty of fresh flowers but also contribute to a healthier planet. <br class="hidden-md hidden-sm hidden-xs">
The shop is committed to educating patrons on the importance of sustainable choices,  <br class="hidden-md hidden-sm hidden-xs">
making it a cornerstone for environmental stewardship in the region.</p>
</figure>
</div>
</div>




<div class="container collection" id="showcase-2">
<h1>Explore a world of blooms</h1>
<h2>- All Category of IBBANI FLOWERS -</h2>
<div class="gallery clearfix">
<figure>
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 banner-collec">

		<img src="{{ asset('/images/frontend_images/third_banner.png') }}" class="img-responsive" alt="img-holiwood">
		<h3>Hello Summer</h3>
		<h1>Sale 10%</h1>
		<a href="#" class="a-mannul" style="background-color: transparent;">Shop now</a>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		@foreach($categories as $category)
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-collection">
			<div class="product-image-collec">
				<figure class="hot"><a href="#"><img src="{{ asset('/images/frontend_images/category/'.$category->image) }}" class="img-responsive" alt="img-holiwood"></a></figure>
				<div class="product-icon-collec">
					<a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
			</div>
			<div class="product-title-collec">
				<h5><a href="#"> {{ $category->name }}</a></h5>
				<!-- <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div> -->
				<!-- <div class="prince">Rs{{ $category->price }}</div> -->
			</div>
		</div>
		@endforeach
		<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-collection">
			<div class="product-image-collec">
				<a href="#"><img src="{{ asset('/images/frontend_images/category2.png') }}" class="img-responsive" alt="img-holiwood"></a>
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
				<a href="#"><img src="{{ asset('/images/frontend_images/category3.png') }}" class="img-responsive" alt="img-holiwood"></a>
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
		</div> -->
		<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-collection">
			<div class="product-image-collec">
				<figure class="sale"><a href="#"><img src="{{ asset('/images/frontend_images/category4.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
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
		</div> -->
	</div>
</div>
</figure>
</div>
</div>
<div class=" wedding" id="showcase-3">



<h1>Elegance</h1>
<h2> -Experience the timeless <span class="hidden-xs">allure of elegance through </span> the beauty of flowers -</h2>
<div class="gallery clearfix">
<figure>
	<div class="img-wedding"><img src="{{ asset('/images/frontend_images/fourth_banner.png') }}" alt="img-holiwood"></div>
	<div class="container wedding-content">
		<div class="row">
			@foreach($products as $product)
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 product-wedding">
					<div class="product-image-wedding">
						<!-- <figure class="sale"> -->
							<a href="#"><img src="{{ url('/images/backend_images/products/medium/'.$product->image) }}" class="img-responsive" alt="img-holiwood"></a>
						<!-- </figure> -->
							<div class="product-icon-wedding">
								<a href="#"><i class="far fa-eye"></i></a>
								<a href="#"><i class="fas fa-shopping-basket"></i></a>
								<a href="#"><i class="far fa-heart"></i></a>
							</div>
					</div>
					<div class="product-title-wedding">
							<h5><a href="#">{{$product->product_name}}</a></h5>
							<!-- <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div> -->
							<div class="prince">&#8377;&nbsp;{{$product->price}}<s class="strike">&#8377;{{$product->discount}}</s></div>
					</div>
				</div>
			@endforeach
	<!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 product-wedding">
		<div class="product-image-wedding">
				<a href="#"><img src="{{ asset('/images/frontend_images/product6.webp') }}" class="img-responsive" alt="img-holiwood"></a>
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
			<figure class="hot"><a href="#"><img src="{{ asset('/images/frontend_images/product1.webp') }}" class="img-responsive" alt="img-holiwood"></a></figure>
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
				<a href="#"><img src="{{ asset('/images/frontend_images/product6.webp') }}" class="img-responsive" alt="img-holiwood"></a>
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
	</div> -->
</div>
	</div>
	
</figure>
</div>

</div>
<div class="holiday" id="showcase-4">
<div class="container">
	<h1>Occasional Splendors</h1>
	<h2>- Transforming words into experiences -</h2>
	<div class="gallery clearfix">
	<figure>
	<div class="row">
		
	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		@foreach($products as $product)
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-holiday">
				<div class="product-image-holiday">
					<figure class="hot"><a href="#"><img src="{{ asset('/images/backend_images/products/medium/'.$product->image) }}" class="img-responsive" alt="img-holiwood"></a></figure>
					<div class="product-icon-holiday">
						<a href="#"><i class="far fa-eye"></i></a>
						<a href="#"><i class="fas fa-shopping-basket"></i></a>
						<a href="#"><i class="far fa-heart"></i></a>
					</div>
				</div>
				<div class="product-title-holiday">
						<h5><a href="#">{{ $product->product_name }}</a></h5>
						<!-- <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div> -->
						<div class="prince">&#8377;&nbsp;{{$product->price}}</div>
				</div>
			</div>
		@endforeach
		<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-holiday">
			<div class="product-image-holiday">
				<a href="#"><img src="{{ asset('/images/frontend_images/flower2.png') }}" class="img-responsive" alt="img-holiwood"></a>
				<div class="product-icon-holiday">
					<a href="#"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
		</div>
		<div class="product-title-holiday">
				<h5><a href="#">Winter White Bouquet</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
				<div class="prince">&#8377;&nbsp;240.2</div>
		</div>
		</div> -->
		<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-holiday">
			<div class="product-image-holiday">
				<a href="#"><img src="{{ asset('/images/frontend_images/flower4.png') }}" class="img-responsive" alt="img-holiwood"></a>
				<div class="product-icon-holiday">
					<a href="#"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
		</div>
		<div class="product-title-holiday">
				<h5><a href="#">Tulipa Floriade - Red</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
				<div class="prince">&#8377;&nbsp;105.7</div>
		</div>
		</div> -->
		<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 product-holiday">
			<div class="product-image-holiday">
				<figure class="sale"><a href="#"><img src="{{ asset('/images/frontend_images/flower3.png') }}" class="img-responsive" alt="img-holiwood"></a></figure>
				<div class="product-icon-holiday">
					<a href="#"><i class="far fa-eye"></i></a>
					<a href="#"><i class="fas fa-shopping-basket"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
				</div>
		</div>
		<div class="product-title-holiday">
				<h5><a href="#">West Palm Beach Florist</a></h5>
				<div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
				<div class="prince">&#8377;&nbsp;209.2<s class="strike">&#8377;180.9</s></div>
		</div>
		</div> -->
	</div>
	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 banner-holiday">
		<div class="img-banner-holiday">
			<img src="{{ asset('/images/frontend_images/holiday.png') }}" class="img-responsive" alt="img-holiwood">
		</div>
		<div class="title-holiday">
			<h1>Nature's Essence</h1>
			<p>Indulge in a floral delight that whispers elegance and captures nature's beauty in every petal.</p>
			<!-- <span id="sale30">-30</span><span id="pt">%</span><br><span id="off">OFF</span> -->
		</div>
		
	</div>
	</div>
	</figure>
	</div>

</div>
</div>
<!-- <div class="count">
<div class="img-count">
	<img src="{{ asset('/images/frontend_images/counter.png') }}" alt="img-holiwood">
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


</div> -->
<!-- <div class="brand container brand_container">
<div class="row">
	<div class="brand-1 col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
	<div class="brand-2 col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
	<div class="brand-3 col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
	<div class="brand-4 col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
	<div class="brand-5 col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
	<div class="brand-6 col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
</div>

</div> -->
<div class="container blog">
<h1>Latest Blogs</h1>
<p>- Discovere the wide range of topics<span class="hidden-xs"> and blogs</span> here -</p>
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 product-blog">
		<a href="#"><img src="{{ asset('/images/frontend_images/blog-1.png') }}" class="img-responsive" title="img-blog" alt="img-holiwood"></a>
		<div class="time-blog">
			<span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2023</span></span>
			<span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
		</div>
		<h2><a href="#">The Secret Language of Flowers: Unveiling Their Hidden Meanings</a></h2>
		<p> Flowers carry a rich history of symbolism, forming a silent language all their own.</p>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 product-blog">
		<a href="#"><img src="{{ asset('/images/frontend_images/blog-2.png') }}" class="img-responsive" title="img-blog" alt="img-holiwood"></a>
		<div class="time-blog">
			<span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2023</span></span>
			<span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
		</div>
		<h2><a href="#">From Seed to Stunning: The Enchanting Journey of Your Flowers</a></h2>
		<p>Here at IBBANI FLOWERS, we're passionate about sharing the magic behind every flower.</p>

	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 product-blog">
		<a href="#"><img src="{{ asset('/images/frontend_images/blog-3.png') }}" class="img-responsive" title="img-blog" alt="img-holiwood"></a>
		<div class="time-blog">
			<span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2023</span></span>
			<span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
		</div>
		<h2><a href="#">Beyond the Bouquet: Creative Ways to Use Flowers in Your Home</a></h2>
		<p>Flowers aren't just for special occasions! They have the power to instantly transform the ambiance of your home, adding a touch of elegance, cheer, or tranquility.</p>

	</div>
</div>
</div>
</main>
@include('layouts.frontLayout.front_footer')