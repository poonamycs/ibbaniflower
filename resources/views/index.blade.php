@extends('layouts/frontLayout/front_design')
@section('content')
<?php 
    use App\Product;
    use App\Category;
    use Illuminate\Support\Str; 
?>

<style>
    @media only screen and (max-width: 667px){
        .wishlistcounter{
            top: 8px !important;
        }
    }
    @media only screen and (min-width: 667px){
        .wishlistcounter{
            top: 8px !important;
        }
    }
</style>

<div class="modal fade login-modal-main" id="offerModal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="login-modal">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-lg-12 col-sm-12 pad-left-0">
                        <button type="button" id="btnClose" class="close close-top-right pop-close-btn btn-focus pr-4 mt-1" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div><a href="{{ url('products/') }}"><img class="rounded mx-auto d-block" src="{{ asset('images/frontend_images/popup1.jpg') }}"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- banner slider section -->
<section class="carousel-slider-main text-center border-top border-bottom bg-white">
     <div class="owl-carousel owl-carousel-slider">
        @foreach($banners as $banner)
        <div class="item">
           <a href="{{ $banner->link }}">
            <img class="img-fluid" src="{{ asset('images/frontend_images/banners/'.$banner->image) }}"></a>
        </div>
        @endforeach
     </div>
</section>

<!-- categories slider section -->
<!-- <section class="top-category section-padding">
    <div class="container">
        <div class="owl-carousel owl-carousel-category">
            @foreach($categories as $cat)
            <?php $productCount = App\Models\Product::where('id',$cat->id)->count(); ?>
            <div class="item">
                <div class="category-item">
                    <a href="{{ url('products/'.$cat->url) }}">
                        <img class="img-fluid" src="{{ asset('images/frontend_images/category/'.$cat->image) }}" alt="">
                        <h6 class="text-capitalize">{{ $cat->name }}</h6>
                        <p>{{ $productCount }} Items</p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> -->

<!-- seasonal/offer products slider section -->
<section class="product-items-slider section-padding">
    <div class="container">
        <div class="section-header">
           <h5 class="heading-design-h5 text-center">Seasonal Fruits & Vegetables
              <a class="float-right text-secondary heading-design-h6" href="{{ url('seasonal-products/') }}">View All <i class="fa fa-angle-right"></i></a>
              <p>Arrives Naturally</p>
           </h5>
        </div>
        <div class="owl-carousel owl-carousel-featured">
            @foreach($featuredAll as $product)
            <div class="item">
                <div class="product">
                    <a href="{{ url('product/'.$product->id) }}">
                        <div class="product-header">
                           <!-- <span class="badge badge-success">50% OFF</span> -->
                           @if(!empty($product->image))
                           <img class="img-fluid" src="{{ asset('images/backend_images/products/small/'.$product->image) }}" alt="">
                           @else
                           <img class="img-fluid" src="{{ asset('images/frontend_images/na.png') }}" alt="">
                           @endif
                           <!-- <span class="veg text-success mdi mdi-circle"></span> -->
                        </div>
                        <div class="product-body">
                           <h5 class="text-capitalize">{{ Str::limit($product->product_name, 22) }}</h5>
                           <!-- <h6><strong><span class="mdi mdi-approval"></span> {{ $product->product_brand }}</strong></h6> -->
                           <h6></h6>
                        </div>
                        <div class="product-footer">
                            <form action="{{ url('add-cart') }}" method="post">@csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="product_name" value="{{ $product->product_name }}">
                                <input type="hidden" name="product_code" value="{{ $product->product_code }}">
                                <input type="hidden" name="product_brand" value="{{ $product->product_brand }}">
                                <!-- <input type="hidden" name="price" id="price" value="{{ $product->price }}"> -->
                                <input type="hidden" name="quantity" id="quantity" value="1">
                                <input type="hidden" name="email" id="email" value="{{ $product->email }}">
                                <input type="hidden" name="image" value="{{ $product->image }}">
                                @if(count($product->attributes)>0)
                                    @foreach($product->attributes as $sizes)
                                        @if($loop->first)
                                            <input type="hidden" name="size" id="size" value="{{ $product->id }}-{{ $sizes->size }}">
                                            <input type="hidden" name="price" value="{{ $sizes->price }}">
                                            <?php $stock = ''; $availability = 'Add to Cart'; $icon = 'shopping-cart'; ?>
                                        @endif
                                    @endforeach
                                @else
                                    <?php $stock = 'disabled'; $availability = 'Out of Stock'; $icon = 'ban'; ?>
                                @endif

                                <button type="submit" <?php echo $stock; ?> class="btn btn-secondary btn-sm float-right"><i class="fa fa-<?php echo $icon; ?>"></i> <?php echo $availability; ?></button>
                            </form>
                           <p class="offer-price mb-0">₹ {{ $product->price }}@if(!empty($product->unit))/{{ $product->unit }}@endif <i class="mdi mdi-tag-outline"></i><br> @if(!empty($product->discount))<br><i class="mdi mdi-tag-outline"></i><span class="regular-price">₹ {{ $product->discount }}</span>@endif</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
     </div>
</section>

<!-- weekly basket offer banners -->
<section class="section-padding">
    <div class="container">
        <div class="section-header">
           <h4 class="heading-design-h5 text-center"><i class="fa fa-shopping-basket"></i> Weekly Basket</h4>
           <p class="text-center mb-4">Arrives Naturally</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <a href="{{ $banner1->link }}">
                    <img class="rounded img-fluid basket hvr-bob" src="{{ asset('images/frontend_images/banners/'.$banner1->image) }}">
                    <div class="down heading-design-h5 weekly-basket-text">{{ $banner1->title }}</div>
                </a>
            </div>
            <div class="pl-4 col-lg-6 col-md-6 pr-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mt-2">
                        <a href="{{ $banner2->link }}">
                            <img class="rounded img-fluid basket hvr-bob" src="{{ asset('images/frontend_images/banners/'.$banner2->image) }}">
                            <div class="down heading-design-h5 weekly-basket-text">{{ $banner2->title }}</div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 mt-5">
                        <a href="{{ $banner3->link }}">
                            <img class="rounded img-fluid basket hvr-bob" src="{{ asset('images/frontend_images/banners/'.$banner3->image) }}">
                            <div class="down heading-design-h5 weekly-basket-text">{{ $banner3->title }}</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- fruits section -->
<section class="product-items-slider section-padding">
    <div class="container">
        <div class="section-header">
           <h5 class="heading-design-h5 text-center"> Fruits
              <a class="float-right text-secondary heading-design-h6" href="{{ url('products/fruits/') }}">View All <i class="fa fa-angle-right"></i></a>
              <p>Arrives Naturally</p>
           </h5>
        </div>
        <div class="owl-carousel owl-carousel-featured">
            @foreach($fruits as $product)
            <div class="item">
                <div class="product">
                    <a href="{{ url('product/'.$product->id) }}">
                        <div class="product-header">
                           <!-- <span class="badge badge-success">50% OFF</span> -->
                           @if(!empty($product->image))
                           <img class="img-fluid" src="{{ asset('images/backend_images/products/small/'.$product->image) }}" alt="">
                           @else
                           <img class="img-fluid" src="{{ asset('images/frontend_images/na.png') }}" alt="">
                           @endif
                           <!-- <span class="veg text-success mdi mdi-circle"></span> -->
                        </div>
                        <div class="product-body">
                           <h5 class="text-capitalize">{{ Str::limit($product->product_name, 22) }}</h5>
                           <h6><strong><span class="mdi mdi-approval"></span> {{ $product->product_brand }}</strong></h6>
                        </div>
                        <div class="product-footer">
                            <form action="{{ url('add-cart') }}" method="post">@csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="product_name" value="{{ $product->product_name }}">
                                <input type="hidden" name="product_code" value="{{ $product->product_code }}">
                                <input type="hidden" name="product_brand" value="{{ $product->product_brand }}">
                                <!-- <input type="hidden" name="price" id="price" value="{{ $product->price }}"> -->
                                <input type="hidden" name="quantity" id="quantity" value="1">
                                <input type="hidden" name="email" id="email" value="{{ $product->email }}">
                                <input type="hidden" name="image" value="{{ $product->image }}">
                                @if(count($product->attributes)>0)
                                    @foreach($product->attributes as $sizes)
                                        @if($loop->first)
                                            <input type="hidden" name="size" id="size" value="{{ $product->id }}-{{ $sizes->size }}">
                                            <input type="hidden" name="price" value="{{ $sizes->price }}">
                                            <?php $stock = ''; $availability = 'Add to Cart'; $icon = 'shopping-cart'; ?>
                                        @endif
                                    @endforeach
                                @else
                                    <?php $stock = 'disabled'; $availability = 'Out of Stock'; $icon = 'ban'; ?>
                                @endif

                                <button type="submit" <?php echo $stock; ?> class="btn btn-secondary btn-sm float-right"><i class="fa fa-<?php echo $icon; ?>"></i> <?php echo $availability; ?></button>
                            </form>
                            <p class="offer-price mb-0">₹ {{ $product->price }}@if(!empty($product->unit))/{{ $product->unit }}@endif @if(!empty($product->discount))<i class="mdi mdi-tag-outline"></i><br><span class="regular-price">₹ {{ $product->discount }}</span>@endif</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
     </div>
</section>

<!-- offfer banner section -->
<section class="offer-product">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6">
                <a href="{{ url('products/') }}"><img class="img-fluid" src="{{ asset('images/frontend_images/ad/1.jpg') }}" alt=""></a>
                <div class="centered h2 text-capitalize" style="color: #1C2224; font-size: 26px;">Having the best quality products</div>
            </div>
            <div class="col-md-6">
                <a href="{{ url('products/') }}"><img class="img-fluid" src="{{ asset('images/frontend_images/ad/2.jpg') }}" alt=""></a>
            </div>
        </div>
    </div>
</section>

<!-- vegetables section -->
<section class="product-items-slider section-padding">
    <div class="container">
        <div class="section-header">
           <h5 class="heading-design-h5 text-center"> Fresh Vegetables
                <a class="float-right text-secondary heading-design-h6" href="{{ url('products/vegetables/') }}">View All <i class="fa fa-angle-right"></i></a>
                <p>Directly fresh from the farm</p>
           </h5>
        </div>
        <div class="owl-carousel owl-carousel-featured">
            @foreach($veg as $product)
            <div class="item">
                <div class="product">
                    <a href="{{ url('product/'.$product->id) }}">
                        <div class="product-header">
                           <!-- <span class="badge badge-success">50% OFF</span> -->
                           @if(!empty($product->image))
                           <img class="img-fluid" src="{{ asset('images/backend_images/products/small/'.$product->image) }}" alt="">
                           @else
                           <img class="img-fluid" src="{{ asset('images/frontend_images/na.png') }}" alt="">
                           @endif
                           <!-- <span class="veg text-success mdi mdi-circle"></span> -->
                        </div>
                        <div class="product-body">
                           <h5 class="text-capitalize">{{ Str::limit($product->product_name, 22) }}</h5>
                           <h6><strong><span class="mdi mdi-approval"></span> {{ $product->product_brand }}</strong></h6>
                        </div>
                        <div class="product-footer">
                            <form action="{{ url('add-cart') }}" method="post">@csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="product_name" value="{{ $product->product_name }}">
                                <input type="hidden" name="product_code" value="{{ $product->product_code }}">
                                <input type="hidden" name="product_brand" value="{{ $product->product_brand }}">
                                <!-- <input type="hidden" name="price" id="price" value="{{ $product->price }}"> -->
                                <input type="hidden" name="quantity" id="quantity" value="1">
                                <input type="hidden" name="email" id="email" value="{{ $product->email }}">
                                <input type="hidden" name="image" value="{{ $product->image }}">
                                @if(count($product->attributes)>0)
                                    @foreach($product->attributes as $sizes)
                                        @if($loop->first)
                                            <input type="hidden" name="size" id="size" value="{{ $product->id }}-{{ $sizes->size }}">
                                            <input type="hidden" name="price" value="{{ $sizes->price }}">
                                            <?php $stock = ''; $availability = 'Add to Cart'; $icon = 'shopping-cart'; ?>
                                        @endif
                                    @endforeach
                                @else
                                    <?php $stock = 'disabled'; $availability = 'Out of Stock'; $icon = 'ban'; ?>
                                @endif

                                <button type="submit" <?php echo $stock; ?> class="btn btn-secondary btn-sm float-right"><i class="fa fa-<?php echo $icon; ?>"></i> <?php echo $availability; ?></button>
                            </form>
                            <p class="offer-price mb-0">₹ {{ $product->price }}@if(!empty($product->unit))/{{ $product->unit }}@endif @if(!empty($product->discount))<i class="mdi mdi-tag-outline"></i><br><span class="regular-price">₹ {{ $product->discount }}</span>@endif</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
     </div>
</section>

<!-- all products section -->
<!-- <section class="product-items-slider section-padding">
    <div class="container">
        <div class="section-header">
           <h5 class="heading-design-h5">Our Products <span class="badge badge-info">20% OFF</span>
              <a class="float-right text-secondary" href="{{ url('products/') }}">View All <i class="fa fa-angle-right"></i></a>
           </h5>
        </div>
        <div class="owl-carousel owl-carousel-featured">
            @foreach($productsAll as $pro)
            <div class="item">
                <div class="product">
                    <a href="{{ url('product/'.$pro->id) }}">
                        <div class="product-header">
                           <img class="img-fluid" src="{{ asset('images/backend_images/products/small/'.$pro->image) }}" alt="">
                        </div>
                        <div class="product-body">
                           <h5>{{ Str::limit($pro->product_name, 22) }}</h5>
                           <h6><strong><span class="mdi mdi-approval"></span> {{ $pro->product_brand }}</strong></h6>
                        </div>
                        <div class="product-footer">
                           <button type="button" class="btn btn-secondary btn-sm float-right"><i class="mdi mdi-eye"></i> View</button>
                           <p class="offer-price mb-0">₹ {{ $pro->price }} <i class="mdi mdi-tag-outline"></i><br><span class="regular-price">₹ {{ $pro->price+($pro->price*0.2) }}</span></p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
     </div>
< class="text-capitalize"/section> -->

<section class="section-padding bg-white border-top">
     <div class="container">
        <div class="row">
           <div class="col-lg-4 col-sm-6">
              <div class="feature-box">
                 <i class="mdi mdi-truck-fast"></i>
                 <h6>Next Day Delivery</h6>
              </div>
           </div>
           <div class="col-lg-4 col-sm-6">
              <div class="feature-box">
                 <i class="mdi mdi-basket"></i>
                 <h6>100% Satisfaction Guarantee</h6>
              </div>
           </div>
           <div class="col-lg-4 col-sm-6">
              <div class="feature-box">
                 <i class="mdi mdi-tag-heart"></i>
                 <h6>Great Daily Deals Discount</h6>
              </div>
           </div>
        </div>
     </div>
</section>

@endsection