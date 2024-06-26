<?php
    use App\Models\User;
    use App\Models\Product;
    use App\Models\Subproduct;
    use App\Models\Order;
    use App\Models\Brand;
    use App\Models\Banner;
    use App\Models\OfferBanner;
    use App\Models\Category;
    use App\Models\Contact;
    use App\Models\CmsPage;
    use App\Models\Admin;

    use App\Models\StockCategory;
    use App\Models\StockItem;
    use App\Models\Blog;
    $email = session('adminSession');
    $auth = Admin::where('email',$email)->first();

    $users = User::count();
    $products = Product::count();
    $subproducts = Subproduct::count();
    $blog = Blog::count();

    $items = StockItem::count();
    $vendor_products = Product::where('email',$email)->count();
    $all_orders = Order::count();
    $pending_orders = Order::where('order_status',"Pending")->count();
    $paid_orders = Order::where('order_status',"Paid")->count();
    $cancelled_orders = Order::where('order_status',"Cancelled")->count();
    $delivered_orders = Order::where('order_status',"Delivered")->count();
    $new_orders = Order::where('order_status',"New")->count();
    $shipped_orders = Order::where('order_status',"Shipped")->count();
    $vendor_orders = Order::where('vpincode',$auth->vpincode)->count();
    $banners = Banner::count();
    $offerBanners = OfferBanner::count();
    $categories = Category::count();
    $brands = Brand::count();
    $contacts = Contact::count();
    $cmspages = CmsPage::count();
    $vendors = Admin::where('vname','<>','Superadmin')->count();
    $approve_products = Product::where('admin_approved',"0")->count();
    $stockCat = StockCategory::where('parent_id',0)->get();
    $stockCatCount = StockCategory::count();

    $sale = Order::where(['order_status'=>"Paid"])->sum('grand_total');
?>
<?php $url = url()->current(); ?>

<div id="sidebar"><a href="{{url('/admin/dashboard')}}" class="visible-phone"><i class="icon icon-home"></i> <b>Dashboard <i class="fa fa-angle-down"></i></b> </a>
    <ul>
        <li <?php if(preg_match("/dashboard/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i> <span><b>Dashboard</b> </span></a> </li>
        
        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-picture-o"></i> <span>Banners</span> <span class="label label-important"> <?php echo $banners + $offerBanners ?> </span> </a>
            <ul <?php if(preg_match("/banner/i", $url)){ ?> style="display: block;" <?php } ?>>
                <!-- <li <?php if(preg_match("/add-banner/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/add-banner')}}"><i class="fa fa-arrow-right"></i> Add Banner</a></li> -->
                <li <?php if(preg_match("/view-banners/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-banners')}}"><i class="fa fa-arrow-right"></i> View Banners <span class="count label label-important"> {{ $banners }} </span></a> </li>
                <!-- <li <?php if(preg_match("/add-offer-banner/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/add-offer-banner')}}"><i class="fa fa-arrow-right"></i> Add Offer Banner</a></li> -->
                <!-- <li <?php if(preg_match("/view-offer-banners/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-offer-banners')}}"><i class="fa fa-arrow-right"></i> Weekly Basket Banners <span class="count label label-important"> {{ $offerBanners }} </span></a></li> -->
                <!-- <li <?php if(preg_match("/offer-popup-banner/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/offer-popup-banner')}}"><i class="fa fa-arrow-right"></i> Offer popup Banner</a></li> -->
            </ul>
        </li>
        @endif
        @if($auth->vname == 'Superadmin')
        <li <?php if(preg_match("/menu/i", $url)){ ?> class="active" <?php } ?>> <a href="{{ url('admin/menu/') }}"><i class="fa fa-address-card"></i> <span>Menu</span> </a></li>
        @endif
        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-filter"></i> <span>Categories</span> <span class="label label-important"> {{ $categories }} </span></a>
            <ul <?php if(preg_match("/category/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/add-category/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/add-category')}}"><i class="fa fa-arrow-right"></i> Add Category</a></li>
                <li <?php if(preg_match("/view-categories/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-categories')}}"><i class="fa fa-arrow-right"></i> View Categories</a></li>
            </ul>
        </li>
        @endif

        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-list-alt"></i> <span>Products</span> <span class="label label-important"> {{ $products }} </span></a>
            <ul <?php if(preg_match("/product/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/add-product/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/add-product')}}"><i class="fa fa-arrow-right"></i> Add Product</a></li>
                <!-- <li <?php if(preg_match("/product-not-approved/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('admin/product-not-approved/')}}"><i class="fa fa-arrow-right"></i> Products to be approved <span class="label label-important"><?php echo $approve_products ?></span></a></li> -->
                <!-- <li <?php if(preg_match("/view-products/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-products')}}" title="All products added by superadmin"><i class="fa fa-arrow-right"></i> Products of Superadmin <span class="label label-important"><?php echo $vendor_products ?></span></a> </li>  -->
                <li <?php if(preg_match("/view-all-products/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-all-products')}}"><i class="fa fa-arrow-right"></i> View All Products</a></li>
            </ul>
        </li>
        @endif
        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-list-alt"></i> <span>Sub Products</span> <span class="label label-important"> {{ $subproducts }} </span></a>
            <ul <?php if(preg_match("/subproduct/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/add-sub-product/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/add-sub-product')}}"><i class="fa fa-arrow-right"></i> Add Sub Product</a></li>
               <li <?php if(preg_match("/view-all-sub-products/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-all-sub-products')}}"><i class="fa fa-arrow-right"></i> View All Products</a></li>
            </ul>
        </li>
        @endif
        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-list-alt"></i> <span>Trending</span></a>
            <ul <?php if(preg_match("/trending/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/add-trending-product/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/add-trending-product')}}"><i class="fa fa-arrow-right"></i> Add Trending Product</a></li>
                <!-- <li <?php if(preg_match("/view-trending-products/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-trending-products')}}"><i class="fa fa-arrow-right"></i> View Trending Products</a></li> -->
            </ul>
        </li>
        @endif
        @if($auth->vname == 'Superadmin')
        <li class="submenu"><a href="#"><i class="fa fa-bell"></i> <span>Orders</span><span class="label label-important"> <?php echo $all_orders ?> </span> </a>
            <ul <?php if(preg_match("/orders/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/view-all-orders/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-all-orders')}}"><i class="fa fa-arrow-right"></i> View Orders</a></li>
            </ul>
        </li>
        @endif

        @if($auth->vname != 'Superadmin')
        <li class="submenu"><a href="#"><i class="fa fa-bell"></i> <span>Orders</span><span class="label label-important"> {{ $vendor_orders }} </span> </a>
            <ul <?php if(preg_match("/orders/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/view-vendor-orders/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-vendor-orders')}}"><i class="fa fa-arrow-right"></i> View Orders</a></li>
            </ul>
        </li>

        <li class="submenu"><a href="#"><i class="fa fa-list"></i> <span> Stock</span> </a>
            <ul <?php if(preg_match("/orders/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/view-single-vendor-stock/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('admin/view-single-vendor-stock/')}}"><i class="fa fa-arrow-right"></i> View Stock</a></li>
            </ul>
        </li>
        @endif

        <!-- stock mgt -->
        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-users"></i> <span>Customers</span> <span class="label label-important"> <?php echo $users ?> </span> </a>
            <ul <?php if(preg_match("/user/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/view-users/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-users')}}"><i class="fa fa-arrow-right"></i> View Customers</a></li>
            </ul>
        </li>
        @endif
        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-filter"></i> <span>Gallery</span></a>
            <ul <?php if(preg_match("/gallery/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/album-type/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/album-type')}}"><i class="fa fa-arrow-right"></i> View Albums Type</a></li>
                <li <?php if(preg_match("/add-gallery-images/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/add-gallery-images')}}"><i class="fa fa-arrow-right"></i> View Albums</a></li>
            </ul>
        </li>
        @endif
        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-filter"></i> <span>Corporate</span></a>
            <ul <?php if(preg_match("/corporate/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/corporate-category/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/corporate-category')}}"><i class="fa fa-arrow-right"></i> View Corporate Category</a></li>
                <li <?php if(preg_match("/add-corporate-images/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/add-corporate-images')}}"><i class="fa fa-arrow-right"></i> View Corporate Gallery</a></li>
            </ul>
        </li>
        @endif
        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-filter"></i> <span>Brands</span> <span class="label label-important"> {{ $brands }} </span></a>
            <ul <?php if(preg_match("/brand/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/add-brand/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/add-brand')}}"><i class="fa fa-arrow-right"></i> Add Brand</a></li>
                <li <?php if(preg_match("/view-brands/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-brands')}}"><i class="fa fa-arrow-right"></i> View Brands</a></li>
            </ul>
        </li>
        @endif
        <!-- vendor -->

        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-history"></i> <span>User Search History</span>  </a>
        <ul <?php if(preg_match("/history/i", $url)){ ?> style="display: block;" <?php } ?>>
            <li <?php if(preg_match("/view-search-history/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-search-history')}}"><i class="fa fa-arrow-right"></i> View Search History</a></li>
        </ul>
        </li>
        @endif

        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-money"></i> <span>Shipping Charges/pincode</span>  </a>
            <ul <?php if(preg_match("/shipping/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/view-shipping/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-shipping')}}"><i class="fa fa-arrow-right"></i> Shipping Charges/pincode</a></li>
            </ul>
        </li>
        @endif

        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-question-circle"></i> <span>Enquiries/Feedback</span> <span class="label label-important"> <?php echo $contacts ?> </span> </a>
            <ul <?php if(preg_match("/enquiries/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/view-enquiries/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-enquiries')}}"><i class="fa fa-arrow-right"></i> View Enquiries</a></li>
            </ul>
        </li>
        @endif

        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-list-alt"></i> <span>Blog</span> <span class="label label-important"> {{ $blog }} </span></a>
            <ul <?php if(preg_match("/blog/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/view-all-blogs/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-all-blog')}}"><i class="fa fa-arrow-right"></i> View All Blogs</a></li>
            </ul>
        </li>
        @endif

        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-newspaper-o"></i> <span>CMS Pages</span> <span class="label label-important"> <?php echo $cmspages ?> </span> </a>
            <ul <?php if(preg_match("/cms-page/i", $url)){ ?> style="display: block;" <?php } ?>>
                <!-- <li <?php if(preg_match("/add-cms-page/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/add-cms-page')}}"><i class="fa fa-arrow-right"></i> Add CMS Page</a></li> -->
                <li <?php if(preg_match("/view-cms-pages/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-cms-pages')}}"><i class="fa fa-arrow-right"></i> View CMS Pages</a></li>
            </ul>
        </li>
        @endif

        @if($auth->vname == 'Superadmin')
        <li class="submenu"> <a href="#"><i class="fa fa-comment"></i> <span>Testimonials</span>  </a>
            <ul <?php if(preg_match("/testimonial/i", $url)){ ?> style="display: block;" <?php } ?>>
                <li <?php if(preg_match("/add-testimonial/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/add-testimonial')}}"><i class="fa fa-arrow-right"></i> Add Testimonial</a></li>
                <li <?php if(preg_match("/view-testimonials/i", $url)){ ?> class="active" <?php } ?>><a href="{{url('/admin/view-testimonials')}}"><i class="fa fa-arrow-right"></i> View Testimonials</a></li>
            </ul>
        </li>
        @endif

        @if($auth->vname == 'Superadmin')
        <li <?php if(preg_match("/contact-details/i", $url)){ ?> class="active" <?php } ?>> <a href="{{ url('admin/contact-details/') }}"><i class="fa fa-address-card"></i> <span>Contact Details</span> </a></li>
        @endif
  </ul>
</div>
<!-- sidebar-menu -->