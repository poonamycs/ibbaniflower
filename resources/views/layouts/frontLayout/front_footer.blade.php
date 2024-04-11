<?php 
    use App\Http\Controllers\Controller; 
    use App\Models\Product; 
    use App\Models\ContactDetail; 
    $cartCount=Product::cartCount();
    $contactDetails = ContactDetail::first();
    $mainCategories=Controller::mainCategories();

    if(Auth::check()){
        $user_email = Auth::User()->email;
        $userCart = DB::table('cart')->where(['user_email' => $user_email])->get();     
    }else{
        $session_id = Session::get('session_id');
        $userCart = DB::table('cart')->where(['session_id' => $session_id])->get();    
    }

    foreach($userCart as $key => $product){
        $productDetails = Product::where('id',$product->product_id)->first();
        $userCart[$key]->image = $productDetails->image;
    }
?>
<!-- Footer -->
<section class="section-padding footer bg-white border-top footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 width-50">
                {{-- <h4 class="mb-5 mt-0"><a class="logo" href="{{ url('/') }}l"><img src="{{ asset('images/frontend_images/logo.png') }}" alt=""></a></h4> --}}
                <h6 class="mb-4">Contact Info </h6>
                <span class="mb-0"><a class="text-dark"><i class="fa fa-map-marker"></i> {{ $contactDetails->address }}</span></p>
                <p class="mb-0"><a class="text-dark" href="tel:{{ $contactDetails->phone }}"><i class="fa fa-phone"></i> {{ $contactDetails->phone }}</a></p>
                <p class="mb-0"><a class="text-dark" href="mailto:{{ $contactDetails->email }}"><i class="fa fa-envelope"></i> {{ $contactDetails->email }}</a></p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 width-50">
                <h6 class="mb-4">Quick Links </h6>
                <ul>
                    <li><a href="{{ url('about/') }}">About Us</a></li>
                    <li><a href="{{ url('contact/') }}">Contact Us</a></li>
                    {{-- <li><a href="{{ url('faq/') }}">FAQ's</a></li> --}}
                <ul>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 width-50">
                <h6 class="mb-4">Categories</h6>
                <ul>
                    <li><a href="{{ url('products/vegetables/') }}">Vegetables</a></li>
                    <li><a href="{{ url('products/fruits/') }}">Fruits</a></li>
                <ul>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 width-50">
                <h6 class="mb-4">About Us</h6>
                <ul>
                    <li><a href="{{ url('page/privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('page/refund-policy') }}">Refund Policy</a></li>
                    <li><a href="{{ url('page/terms-conditions') }}">Terms & Conditions</a></li>
                <ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 width-50">
                <div class="app">
                    <ul>
                        <li><a href="{{ url('admin/') }}"><b>Vendor login</b></a></li>
                    </ul>
                </div>
                <h6 class="mb-3 mt-4">GET IN TOUCH</h6>
                <div class="footer-social"> <a class="btn-facebook" href="#"><i class="mdi mdi-facebook text-primary"></i></a>
                    <a class="btn-instagram" href="#"><i class="mdi mdi-instagram text-danger"></i></a>
                    <a class="btn-whatsapp" href="#"><i class="mdi mdi-whatsapp text-success"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer -->

<!-- Copyright -->
<section class="pt-2 pb-2 footer-bottom">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-7 col-sm-12 width-50 m-auto">
                <p class="mt-1 mb-0">&copy; <?php echo date('Y') ?> All Rights Reserved | Designed & Developed By <strong class="text-dark"><a href="https://www.ycstech.in" target="_blank">YCS TechSoft Pvt. Ltd.</a></strong>
                    <!--<br> <small class="mt-0 mb-0">Made with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-primary"></a>-->
              </small>
                </p>
            </div>
            <div class="col-lg-5 col-sm-12 width-50 text-right">
                <img src="{{ asset('images/frontend_images/payment_methods.png') }}">
            </div>
        </div>
    </div>
</section>
<!-- End Copyright -->

<div class="footer-fix-nav shadow">
    <div class="row mx-0">
        <div class="col">
            <a href="{{ url('/') }}"><i class="mdi mdi-home"></i></a>
        </div>
        <div class="col active">
            <a class="toggle" href="#"><i class="mdi mdi-menu"></i></a>
        </div>
        @if(empty(Auth::check()))
        <div class="col">
            <a href="{{ url('account/') }}"><i class="mdi mdi-lock"></i></a>
        </div>
        @else
        <div class="col">
            <a href="{{ url('login-register/') }}"><i class="mdi mdi-account-circle"></i></a>
        </div>
        @endif
    </div>
</div>

<nav id="main-nav">
    <ul class="first-nav">
        <li class="search" data-nav-custom-content>
            <div class="form-container">
                <form class="search-form" action="{{ url('/search-products') }}" method="post">@csrf
                    <input type="text" name="product" placeholder="Search products in store" autocomplete="on" id="productSearch">
                </form>
            </div>
        </li>
        <li> <a href="{{ url('products/fruits/') }}"> Fruits <i class="fa fa-angle-right float-right"></i></a></li>
        <li> <a href="{{ url('products/vegetables/') }}"> Vegetables <i class="fa fa-angle-right float-right"></i></a></li>
    </ul>
    <ul class="bottom-nav">
        <li class="github">
            <a href="mailto:info@veggimart.in?subject=Enquiry/Suggetion&amp;body=Enter%20your%20message%20here." target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    <path d="M0 0h24v24H0z" fill="none" />
                </svg>
            </a>
        </li>
        <li class="email">
            <a href="#" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>
        </li>
        <li class="ko-fi">
            <a href="https://api.whatsapp.com/send?phone=+91%209503835353" target="_blank">
                <i class="fa fa-whatsapp font-weight-bold"></i>
            </a>
        </li>
    </ul>
</nav>


<!-- cart drawer -->
<div class="cart-sidebar">
     <div class="cart-sidebar-header">
        <h5>
           My Cart <span class="text-success">({{ $cartCount }} item/s)</span> <a data-toggle="offcanvas" class="float-right" href="#"><i class="mdi mdi-close"></i>
           </a>
        </h5>
     </div>

     <div class="cart-sidebar-body">
        <?php $total_amount=0; ?>
        @if(count($userCart)>0)
        @foreach($userCart as $cart)
        <div class="cart-list-product">
           <a class="float-right remove-cart" href="{{ url('/cart/delete-product/'.$cart->id) }}"><i class="mdi mdi-close"></i></a>
           <img class="img-fluid" src="{{ asset('images/backend_images/products/small/'.$cart->image) }}" alt="">
           {{-- <span class="badge badge-success">50% OFF</span> --}}
           <h5><a href="#">{{ $cart->product_name }}</a></h5>
           <h6><strong><span class="badge badge-success border">x {{ $cart->quantity }}</span></strong> - {{ $cart->size }}</h6>
           <p class="offer-price mb-0">₹ {{ $cart->price }} <i class="mdi mdi-tag-outline"></i></p>
        </div>
        <?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
        @endforeach
        @else
        <div class="container mt-3">
            <div class="alert alert-warning" role="alert">
              <a href="{{ url('products/') }}" class="alert-link">You cart is empty! Keep shopping</a>
            </div>
        </div>
        @endif
     </div>
     <div class="cart-sidebar-footer">
        <div class="cart-store-details">
           <!-- <p>Delivery Charges <strong class="float-right text-danger">+ $29.69</strong></p> -->
        </div>
        <a href="{{ url('cart/') }}"><button class="btn btn-outline-secondary border btn-lg btn-block text-left" type="button"><span class="float-left"><i class="mdi mdi-cart-outline"></i> <b>View Shopping Cart</b> </span> <span class="mdi mdi-chevron-right"></span></span></button></a>
        
        @if(count($userCart)>0)
        <a href="{{ url('checkout/') }}"><button class="btn btn-secondary btn-lg btn-block text-left mt-1"><span class="float-left"><i class="mdi mdi-cart-outline"></i> <b>Proceed to Checkout</b> </span><span class="float-right"><strong>₹ <?php echo $total_amount ?></strong> <span class="mdi mdi-chevron-right"></span></span></button></a>
        @else
        <button class="btn btn-secondary btn-lg btn-block text-left mt-1" disabled="true"><span class="float-left"><i class="mdi mdi-cart-outline"></i> <b>Proceed to Checkout</b> </span><span class="float-right"><strong>₹ <?php echo $total_amount ?></strong> <span class="mdi mdi-chevron-right"></span></span></button></a>
        @endif
     </div>
</div>

