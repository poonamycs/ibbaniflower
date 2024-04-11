<?php
    $url = url()->current(); 

    use App\Http\Controllers\Controller;
    use App\Models\Product;
    use App\Models\Category;
    $cartCount = Product::cartCount();    
    $wishlistCount = Product::wishlistCount();
    $mainCategories = Controller::mainCategories();
    $categories = Category::with('categories')->where(['parent_id'=>0])->get();
?>

<div class="modal fade login-modal-main" id="bd-example-modal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="login-modal">
                    <div class="row d-flex justify-content-center">
                        {{-- <div class="col-lg-6 pad-right-0">
                            <div class="login-modal-left"></div>
                        </div> --}}
                        <div class="col-lg-11 col-lg-11 col-sm-12 pad-left-0">
                            <button type="button" class="close close-top-right" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                                <span class="sr-only">Close</span>
                            </button>
                            
                            <div class="login-modal-right">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="login" role="tabpanel">
                                        <form action="{{ url('user-login/') }}" method="post"  id="loginForm" name="loginForm">
                                            {{ csrf_field() }}
                                            <h5 class="heading-design-h5">Login to your account </h5>
                                            <fieldset class="form-group">
                                                <label>Enter Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="johhdoe@gmail.com">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label>Enter Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="********">
                                            </fieldset>
                                            <span class="pb-1"><a href="{{ url('forgot-password/') }}"><u><strong>Forgot Password?</strong></u></a></span>
                                            <fieldset class="form-group">
                                                <button type="submit" class="btn btn-lg btn-secondary btn-block"><b>Login <i class="fa fa-sign-in"></i></b></button>
                                            </fieldset>
                                            {{-- <div class="login-with-sites text-center">
                                                <p>or Login with your google account</p>
                                                <button class="btn-facebook login-icons btn-lg"><i class="mdi mdi-facebook"></i> Facebook</button>
                                                <a href="{{ url('/redirect') }}"><button type="button" class="btn-google login-icons btn-lg btn-block"><i class="mdi mdi-google"></i> Google</button></a>
                                                <button class="btn-twitter login-icons btn-lg"><i class="mdi mdi-twitter"></i> Twitter</button>
                                            </div> --}}
                                            {{-- <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            </div> --}}
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="register" role="tabpanel">
                                        <form id="registerForm" name="registerForm" action="{{ url('/user-register') }}" method="post">
                                            {{ csrf_field() }}
                                            <h5 class="heading-design-h5">Register Now!</h5>
                                            <div class="row">
                                                <div class="control-group col-md-6">
                                                    <fieldset class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" autofocus="true" required>
                                                    </fieldset>
                                                </div>
                                                <div class="control-group col-md-6">
                                                    <fieldset class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="control-group col-md-6">
                                                    <fieldset class="form-group">
                                                        <label>Mobile</label>
                                                        <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number" required>
                                                    </fieldset>
                                                </div>
                                                <div class="control-group col-md-6">
                                                    <fieldset class="form-group">
                                                        <label>Pincode/Postal Code</label>
                                                        <input type="number" class="form-control" id="pincode" name="pincode" placeholder="Enter pincode" required>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="control-group col-md-6">
                                                    <fieldset class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" name="password" id="myPassword" placeholder="Enter password" required>
                                                    </fieldset>
                                                </div>
                                                <div class="control-group col-md-6">
                                                    <fieldset class="form-group">
                                                        <label>Confirm Password</label>
                                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter confirm password" required>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <fieldset class="form-group">
                                                <button type="submit" class="btn btn-lg btn-secondary btn-block"><b>Register <i class="fa fa-pencil"></i></b></button>
                                            </fieldset>
                                            <!-- <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">I Agree with <a href="#">Term and Conditions</a>
                                                </label>
                                            </div> -->
                                        </form>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="text-center login-footer-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#login" role="tab"><i class="mdi mdi-lock"></i> LOGIN</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#register" role="tab"><i class="mdi mdi-pencil"></i> REGISTER</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-top bg-success pt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center"> 
                <div class="float-left float-sm-none">
                    <a href="mailto:info@veggimart.in?subject=Enquiry/Suggetion&body=Enter%20your%20message%20here." class="mb-0 text-white"> 
                        <span class="fa fa-envelope"> <b><span class="text-light" style="font-family: 'Maven Pro', sans-serif;"> info@veggimart.in | </span></b></span> 
                    </a>
                    <a href="tel:7273837273" class="mb-0 text-white">
                        <span class="mdi mdi-phone"> Mob: <strong><span class="text-light">(+91) 72738 37273 </span></strong></span>   
                    </a>
                </div>
                <div class="float-right d-sm-none">
                    <div class="footer-social ml-3"> 
                        <a class="btn-facebook" href="#"><i class="mdi mdi-facebook text-info"></i></a>
                        <a class="btn-instagram" href="#"><i class="mdi mdi-instagram text-danger"></i></a>
                        <a class="btn-whatsapp" href="https://api.whatsapp.com/send?phone=+91%209503835353" target="_blank"><i class="mdi mdi-whatsapp text-success"></i></a>
                    </div>
                </div>
                <div class="float-right border-right border-left">
                    <a class="location-top mr-3 ml-2" href="#"><i class="mdi mdi-map-marker-circle" aria-hidden="true"></i> Pune</a>
                </div>

                <div class="float-right d-flex d-sm-none">
                    <input type="number" name="pincode" id="checkPincode" class="form-control-sm mb-1 h-pincode" name="product" placeholder="Enter your pincode to check items availability" title="Enter your pincode to check items availability" required="true" style="font-size: 12px">
                    <button type="button" onclick="return checkPincodeHeader();" class="pl-2 pr-2 btn btn-secondary btn-lg mr-2" style="padding: 0px; height: calc(1.27em + .6rem + 2px);"><i class="fa fa-search"></i>
                    </button>
                    <span id="pincodeResponseHeader" style="color: #fff"></span>
                </div>
                {{-- @if(empty(Auth::check()))
                <a href="{{ url('login-register/') }}" class="mb-0 mt-2 text-white desktop-hidden">
                    <button class="btn btn-primary">Login / Sign Up</button>
                </a>
                @endif --}}
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-light navbar-expand-lg bg-dark bg-faded osahan-menu">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="logo" src="{{ asset('images/frontend_images/veggimart.png') }}" title="Veggimart">
        </a> 

        <button class="navbar-toggler navbar-toggler-white" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse" id="navbarNavDropdown">
            <div class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto top-categories-search-main">
                <div class="top-categories-search">
                    <form action="{{ url('/search-products') }}" name="searchbar" method="post">{{ csrf_field() }}
                        <div class="input-group mt-md-3"> 
                            <span class="input-group-btn categories-dropdown">
                                <select class="form-control-select" onchange="location = this.value;">
                                    <option selected="selected">Categories</option>
                                    @foreach($categories as $cat)
                                    <option value="{{ asset('products/'.$cat->url) }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </span>
                            <input class="form-control" placeholder="Search products in store" aria-label="Search products in store" type="text" name="product" id="productSearch"> 
                            <span class="input-group-btn"><button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Search</button></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="my-2 my-lg-0">
                <ul class="list-inline main-nav-right">
                    @if(empty(Auth::check()))
                    <li class="list-inline-item"> 
                        <a href="{{ url('login-register/') }}" data-target="#bd-example-modal" data-toggle="modal" class="btn btn-link"><i class="fa fa-user-circle"></i> Login/Sign Up</a>
                    </li>
                    @else
                    <li class="list-inline-item dropdown osahan-top-dropdown">
                        <a class="btn btn-theme-round dropdown-toggle dropdown-toggle-top-user" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img alt="logo" src="{{ asset('images/frontend_images/user/1.jpg')}}"><strong>Hi </strong> <span class="case">
                            <?php $auth = Auth::User()->name;
                            $first = explode(" ", $auth);
                            echo $first[0]; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-list-design">
                           <a href="{{ url('orders/') }}" class="dropdown-item"><i aria-hidden="true" class="mdi mdi-format-list-bulleted"></i>  My Orders</a>
                           <a href="{{ url('my-wishlist') }}" class="dropdown-item"><i aria-hidden="true" class="mdi mdi-heart"></i> My Wishlist </a>
                           <a href="{{ url('account/') }}" class="dropdown-item desktop-hidden"><i aria-hidden="true" class="mdi mdi-account"></i>  Hi <?php echo $first[0]; ?></a>
                           <a href="{{ url('account/') }}" class="dropdown-item"><i aria-hidden="true" class="mdi mdi-account"></i>  My Account</a>
                           <a href="{{ url('password-setting/') }}" class="dropdown-item"><i aria-hidden="true" class="mdi mdi-key"></i> Change Password </a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="{{ url('user-logout/') }}"><i class="fa fa-power-off"></i> Logout</a>    
                        </div>
                     </li>
                     @endif
                    <li class="list-inline-item cart-btn">
                        <a href="javascript:" data-toggle="offcanvas" class="btn btn-link border-none" title="Cart"><i class="mdi mdi-cart"></i> Cart <small class="cart-value">{{ $cartCount }}</small></a>
                        <a href="{{ url('my-wishlist/') }}" class="btn btn-link border-none" title="Wishlist"><i class="mdi mdi-heart"></i> <small class="cart-value wishlistcounter">{{ $wishlistCount }}</small></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light osahan-menu-2 pad-none-mobile">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto">
                <li class="nav-item"> <a class="nav-link shop" href="{{ url('/') }}"><span class="gradient"><span class="mdi mdi-store"></span>Welcome to Veggi Mart</span></a></li>
                <!-- <li class="nav-item"> <a class="nav-link <?php if(preg_match("/products/i", $url)){ ?> active <?php } ?>" href="{{ url('products/') }}">All Products</a></li> -->

                <!-- <li class="nav-item dropdown has-megamenu">
                    <a class="nav-link dropdown-toggle  <?php if(preg_match("/products/i", $url)){ ?> active <?php } ?>" href="#" data-toggle="dropdown"> All Products </a>
                    <div class="dropdown-menu megamenu mega-bg" role="menu">
                        <div class="row d-flex justify-content-center">
                            @foreach($categories as $cat)
                            <div class="col-md-2 col-sm-6 text-left mb-3">
                                <div class="col-megamenu">
                                    <h6 class="title text-capitalize" style="color: #000">{{ $cat->name }}</h6>
                                    <ul class="list-unstyled">
                                        @foreach($cat->categories as $subcat)
                                            @if($subcat->status==1)
                                                <li class="text-capitalize"><a href="{{ asset('products/'.$subcat->url) }}">{{ $subcat->name }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </li> -->

                <li class="nav-item"> <a class="nav-link <?php if(preg_match("/products/i", $url)){ ?> active <?php } ?>" href="{{ url('/products/') }}">All Products </a></li>
                <li class="nav-item"> <a class="nav-link <?php if(preg_match("/fruits/i", $url)){ ?> active <?php } ?>" href="{{ url('/products/fruits/') }}">Fruits </a></li>
                <li class="nav-item"> <a class="nav-link <?php if(preg_match("/vegetables/i", $url)){ ?> active <?php } ?>" href="{{ url('/products/vegetables/') }}">Vegetables</a></li>
                <li class="nav-item"> <a class="nav-link <?php if(preg_match("/about/i", $url)){ ?> active <?php } ?>" href="{{ url('/about/') }}">About Us</a></li>
                <!-- <li class="nav-item"> <a class="nav-link <?php if(preg_match("/faq/i", $url)){ ?> active <?php } ?>" href="{{ url('/faq/') }}">FAQs</a></li> -->
                <li class="nav-item"> <a class="nav-link <?php if(preg_match("/contact/i", $url)){ ?> active <?php } ?>" href="{{ url('/contact/') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>