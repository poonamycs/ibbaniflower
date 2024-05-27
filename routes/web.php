<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\TestimonialsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return "Cache is cleared"; //Return anything
});

Route::get('home/', 'IndexController@index');

Route::get('admin/charts', function () { return view('admin.charts');  });

Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');

Route::get('404/', 'IndexController@notFound');
Route::get('products/', 'IndexController@products');
Route::get('seasonal-products/', 'IndexController@featuredProducts');
//contact page form
Route::match(['get','post'],'/contact','IndexController@contact');

// gallery page
Route::match(['get','post'],'/gallery','GalleryController@galleryImages');

// product categorywise products
Route::get('/products/{url}','ProductsController@products');

//product detail page
Route::get('/product/{id}','ProductsController@product');



//Admin forgot password
Route::match(['get','post'],'admin/forgot-password/','AdminController@forgotPassword');

// Delete Cart Product
Route::get('/cart/delete-product/{id}','ProductsController@deleteCartProduct');

// Update Cart quantity of Product
Route::get('/cart/update-quantity/{id}/{quantity}/','ProductsController@updateCartQuantity');

//products filter page
Route::match(['get','post'],'/products-filter','ProductsController@filter');


 
// All Routes after login
Route::group(['middleware'=>['frontlogin']],function(){
	//users Account page
	Route::match(['get','post'],'account','UsersController@account');
	// user billing and shipping address
	Route::match(['get','post'],'password-setting/','UsersController@passwordSetting');
	//check user current pwd
	Route::post('/check-user-pwd','UsersController@chkUserPassword');
	//update user pwd
	Route::post('/update-user-pwd','UsersController@updatePassword');
	//update user pwd
	Route::match(['get','post'],'/checkout','ProductsController@checkout');
	// Order review page
	Route::match(['get','post'],'/order-review','ProductsController@orderReview');
	// Place Order
	Route::match(['get','post'],'/place-order','ProductsController@placeOrder');

	// cod thanks page
	Route::match(['get','post'],'/thanks','ProductsController@thanks');
	// razorpay payment page
	Route::match(['get','post'],'/razorpay','ProductsController@razorpay');
	// razorpay thanks page
	Route::match(['get','post'],'/razorpay/thanks','ProductsController@thanksRazorpay');

	// paypal page
	Route::match(['get','post'],'/paypal','ProductsController@paypal');
	// Users order page
	Route::match(['get','post'],'/orders','ProductsController@userOrders');

	// Users ordered Product page
	Route::get('/orders/{id}','ProductsController@userOrderDetails');

	// cancel order
	Route::match(['get','post'],'orders/cancel-order/{id}','ProductsController@orderCancelStatus');

	Route::match(['get','post'],'/razorpay/cancel','ProductsController@cancelRazorpay');
	// show paymemt details page
	Route::match(['get','post'],'/payment-info','ProductsController@paymentInfo');

	// wishlist page
	Route::match(['get','post'],'/my-wishlist/','ProductsController@wishList');
	// delete wishlist product
	Route::get('/wishlist/delete-product/{id}','ProductsController@deleteWishlistProduct');
	
});

//vendor register page
Route::get('vendor-register/','IndexController@vendorRegister');

//vendor register form
Route::post('vendor-register-form/','AdminController@vendorRegisterForm');

//user login-register
Route::get('/login-register/','UsersController@userLoginRegister');

//user login-register
Route::match(['get','post'],'/forgot-password/','UsersController@forgotPassword');

//users register form submit
Route::post('/user-register','UsersController@register');

//user account activation vie email
Route::get('confirm/{code}','UsersController@confirmAccount');

//user account activation vie email
Route::get('confirm-vendor-email/{code}','AdminController@confirmVendorAccount');

//users login form submit
// Route::match(['get','post'],'user-login/','UsersController@login');

//users logout
Route::get('/user-logout','UsersController@logout');

//Search products
Route::post('/search-products','ProductsController@searchProducts');

// check if user already exists
Route::match(['get','post'],'/check-email/','UsersController@checkEmail');

// CMS Pages
Route::match(['get','post'],'/page/{url}','CmsController@cmsPage');



// used

Route::get('/cart', [ProductsController::class, 'cart']);
// Route::get('/corporate', [HomeController::class, 'corporate']);
Route::get('/page404', [HomeController::class, 'pagenotfound']);
Route::get('/checkout', [HomeController::class, 'checkout']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/order', [HomeController::class, 'order']);
Route::get('/home1', [HomeController::class, 'home1']);

Route::get('/about', [HomeController::class, 'about']);
Route::get('/trending', [HomeController::class, 'trending']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/contact-form',[HomeController::class, 'contact_form']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/corporate/decoration', [HomeController::class, 'corporate_decoration']);
Route::get('/category/{slug?}', [HomeController::class, 'products']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/product/{id?}/{slug?}', [ProductsController::class, 'product']);
Route::match(['get','post'],'user-login/',[UsersController::class, 'login']);
Route::match(['get','post'],'user-register/',[UsersController::class, 'register']);
//Admin login
Route::match(['get','post'],'/admin',[AdminController::class, 'login']);

//Add to cart
Route::match(['get','post'],'/add-cart/',[ProductsController::class, 'addtocart']);
Route::match(['get','post'],'/add-subproduct-cart/',[ProductsController::class, 'addsubproductcart']);

// Check Pincode
Route::post('/check-pincode/',[ProductsController::class, 'checkPincode']);
Route::post('/check-time-slot/',[ProductsController::class, 'checkTimeslot']);
Route::post('/check-shipping-method/',[ProductsController::class, 'checkShippingmethod']);

//get product attribute price
Route::get('/get-product-price',[ProductsController::class, 'getProductPrice']);


// Auth::routes(['verify'=>true]);
Auth::routes();

Route::group(['middleware' => ['adminlogin']],function(){
	Route::get('/admin/dashboard',[AdminController::class, 'dashboard']);
	Route::get('/admin/settings',[AdminController::class, 'settings']);
	Route::get('/admin/check-pwd',[AdminController::class, 'chkPassword']);
	Route::match(['get','post'],'/admin/update-pwd',[AdminController::class, 'updatePassword']);

	// Products Routes (Admin)
	Route::match(['get','post'],'/admin/add-blog',[BlogsController::class, 'addBlog']);
	Route::get('/admin/view-all-blog',[BlogsController::class, 'viewAdminBlogs']);
	Route::match(['get','post'],'admin/blog-approved/{id}',[BlogsController::class, 'blogApproved']);
	Route::match(['get','post'],'/admin/edit-blog/{pid}',[BlogsController::class, 'editBlog']);
	Route::get('/admin/delete-blog/{pid}',[BlogsController::class, 'deleteBlog']);
	Route::match(['get','post'],'/admin/delete-blog-image/{id}',[BlogsController::class, 'deleteBlogImage']);

	//Categories Routes (Admin)
	Route::match(['get','post'],'/admin/add-category',[CategoryController::class, 'addCategory']);
	Route::match(['get','post'],'/admin/edit-category/{id}',[CategoryController::class, 'editCategory']);
	Route::match(['get','post'],'/admin/delete-category/{id}',[CategoryController::class, 'deleteCategory']);
	Route::get('/admin/view-categories',[CategoryController::class, 'viewCategories']);

	//gallery
	Route::match(['get','post'],'/admin/album-type',[GalleryController::class, 'editAlbumtype']);
	Route::match(['get','post'], '/admin/add-gallery-images',[GalleryController::class, 'addImages']);
	Route::match(['get','post'],'/admin/delete-gallery-image/{id}',[GalleryController::class, 'deleteAltImage']);

	//corporate
	Route::match(['get','post'],'/admin/corporate-category',[GalleryController::class, 'editcorporatecategory']);
	Route::match(['get','post'], '/admin/add-corporate-images',[GalleryController::class, 'addcorporateimage']);
	Route::match(['get','post'],'/admin/delete-corporate-image/{id}',[GalleryController::class, 'deletecorporateimage']);

	// brand
	Route::match(['get','post'],'/admin/add-brand',[BrandController::class, 'addBrand']);
	Route::match(['get','post'],'/admin/edit-brand/{id}',[BrandController::class, 'editBrand']);
	Route::match(['get','post'],'/admin/delete-brand/{id}',[BrandController::class, 'deleteBrand']);
	Route::get('/admin/view-brands',[BrandController::class, 'viewBrands']);
	
	// Products Routes (Admin)
	Route::match(['get','post'],'/admin/add-product',[ProductsController::class, 'addProduct']);
	Route::match(['get','post'],'/admin/delete-product-image/{id}',[ProductsController::class, 'deleteProductImage']);
	Route::match(['get','post'],'/admin/edit-product/{pid}',[ProductsController::class, 'editProduct']);
	Route::get('/admin/delete-product/{pid}',[ProductsController::class, 'deleteProduct']);
	Route::get('/admin/view-products',[ProductsController::class, 'viewProducts']);
	Route::get('/admin/view-all-products',[ProductsController::class, 'viewAdminProducts']);

	Route::match(['get','post'],'admin/product-approved/{id}',[ProductsController::class, 'productApproved']);
	Route::match(['get','post'],'admin/product-not-approved/',[ProductsController::class, 'productsNotApproved']);
	// export products
	Route::get('/admin/export-products/','ProductsController@exportProducts');

	//subproduct
	Route::match(['get','post'],'/admin/add-sub-product',[ProductsController::class, 'addsubProduct']);
	Route::get('/admin/view-all-sub-products',[ProductsController::class, 'viewSubProducts']);
	Route::match(['get','post'],'admin/subproduct-approved/{id}',[ProductsController::class, 'subproductApproved']);
	Route::get('/admin/delete-subproduct/{pid}',[ProductsController::class, 'deletesubproduct']);

	// trending
	// Route::match(['get','post'],'/admin/add-trending-product',[ProductsController::class, 'addtrendingProduct']);
	// Route::get('/admin/view-trending-products',[ProductsController::class, 'viewtrendingProducts']);
	Route::match(['get','post'], '/admin/add-trending-product',[ProductsController::class, 'addtrendingImages']);
	// Route::match(['get','post'],'/admin/delete-trending-product',[ProductsController::class, 'deletetrendingImage']);
	Route::match(['get','post'],'admin/trending-product-approved/{id}',[ProductsController::class, 'trendingproductApproved']);
	Route::match(['get','post'],'/admin/delete-trending-image/{id}',[ProductsController::class, 'deletetrendingImage']);
	

	// Products Attributes and images (Admin)
	Route::match(['get','post'],'admin/add-attributes/{pid}',[ProductsController::class, 'addAttributes']);
	Route::match(['get','post'],'admin/edit-attributes/{pid}',[ProductsController::class, 'editAttributes']);
	Route::match(['get','post'], '/admin/add-images/{pid}',[ProductsController::class, 'addImages']);
	Route::match(['get','post'],'/admin/delete-alt-image/{id}',[ProductsController::class, 'deleteAltImage']);
	Route::match(['get','post'],'/admin/delete-attributes/{id}',[ProductsController::class, 'deleteAttribute']);

	// Banner Routes(Admin)
	Route::match(['get','post'],'/admin/add-banner/',[BannersController::class, 'addBanner']);
	Route::match(['get','post'],'/admin/edit-banner/{eid}',[BannersController::class,'editBanner']);
	Route::match(['get','post'],'/admin/delete-banner/{eid}',[BannersController::class,'deleteBanner']);
	Route::match(['get','post'],'/admin/view-banners/',[BannersController::class,'viewBanners']);

	// offer Banner Routes(Admin)
	Route::match(['get','post'],'/admin/add-offer-banner/','BannersController@addOfferBanner');
	Route::match(['get','post'],'/admin/edit-offer-banner/{eid}','BannersController@editOfferBanner');
	Route::match(['get','post'],'/admin/delete-offer-banner/{eid}','BannersController@deleteOfferBanner');
	Route::match(['get','post'],'/admin/view-offer-banners/','BannersController@viewOfferBanners');

	// Admin Orders Routes
	Route::match(['get','post'],'/admin/view-all-orders/',[ProductsController::class, 'viewOrders']);
	Route::match(['get','post'],'/admin/view-vendor-orders/','ProductsController@viewVendorOrders');
	Route::get('/admin/view-orders-charts/','ProductsController@viewOrdersCharts');
	Route::match(['get','post'],'/admin/view-order/{id}','ProductsController@viewOrderDetails');
	Route::match(['get','post'],'/admin/update-order-status/','ProductsController@updateOrderStatus');
	// allocate order to vendor
	Route::match(['get','post'],'admin/allocate-order/{id}','ProductsController@allocateOrder');
	// Order Invoice
	Route::match(['get','post'],'/admin/view-order-invoice/{id}','ProductsController@viewOrderInvoice');
	// Order PDF Invoice
	Route::match(['get','post'],'/admin/view-pdf-invoice/{id}','ProductsController@viewPDFInvoice');
	// Export orders
	Route::get('/admin/export-orders/','ProductsController@exportOrders');
	// view delivered & paid orders
	Route::match(['get','post'],'/admin/view-delivered-orders/','ProductsController@viewDeliveredOrders');
	Route::match(['get','post'],'/admin/view-cancel-orders/','ProductsController@viewCancelOrders');
	Route::match(['get','post'],'/admin/view-new-orders/','ProductsController@viewNewOrders');
	Route::match(['get','post'],'/admin/view-pending-orders/','ProductsController@viewPendingOrders');
	Route::match(['get','post'],'/admin/view-shipped-orders/','ProductsController@viewShippedOrders');

	// view registered users
	Route::match(['get','post'],'/admin/view-users/',[UsersController::class, 'viewUsers']);
	Route::match(['get','post'],'/admin/view-users-charts/',[UsersController::class, 'viewUserscharts']);

	//view vendors
	Route::match(['get','post'],'admin/view-vendors/','AdminController@viewVendors');

	// Export users
	Route::get('/admin/export-users/','UsersController@exportUsers');

	// add cms page route
	Route::match(['get','post'],'/admin/add-cms-page',[CmsController::class, 'addCmsPage']);
	Route::match(['get','post'],'/admin/view-cms-pages',[CmsController::class, 'viewCmsPages']);
	Route::match(['get','post'],'/admin/edit-cms-page/{id}',[CmsController::class, 'editCmsPage']);
	Route::match(['get','post'],'/admin/delete-cms-page/{id}',[CmsController::class, 'deleteCmsPage']);

	// admin testimonial section
	Route::match(['get','post'],'/admin/add-testimonial',[TestimonialsController::class, 'addTestimonial']);
	Route::match(['get','post'],'/admin/view-testimonials',[TestimonialsController::class, 'viewTestimonials']);
	Route::match(['get','post'],'/admin/edit-testimonial/{id}',[TestimonialsController::class, 'editTestimonial']);
	Route::match(['get','post'],'/admin/delete-testimonial/{id}',[TestimonialsController::class, 'deleteTestimonial']);

	// gallery admin section
	Route::match(['get','post'],'/admin/add-gallery','GalleryController@addImages');
	Route::match(['get','post'],'/admin/view-gallery','GalleryController@viewImages');
	Route::match(['get','post'],'/admin/edit-gallery/{id}','GalleryController@editImage');
	Route::match(['get','post'],'/admin/delete-gallery/{id}','GalleryController@deleteImage');

	// view enquiries/feedback
	Route::match(['get','post'],'/admin/view-enquiries/',[UsersController::class, 'viewEnquiries']);
	Route::match(['get','post'],'/admin/delete-enquiry/{id}',[UsersController::class, 'deleteEnquiry']);

	// view customer order history
	Route::match(['get','post'],'/admin/view-user-orders/{email}','UsersController@viewUserOrders');
	// change customer order status
	Route::match(['get','post'],'admin/update-status/{id}','AdminController@updateStatus');

	//view shipping charges
	Route::match(['get','post'],'admin/add-pincode/',[ShippingController::class, 'addPincode']);
	Route::get('admin/view-shipping/',[ShippingController::class, 'viewShipping']);
	Route::match(['get','post'],'admin/edit-shipping/{id}',[ShippingController::class, 'editShipping']);
	Route::match(['get','post'],'admin/delete-shipping/{id}',[ShippingController::class, 'deleteShipping']);

	Route::get('admin/view-search-history',[AdminController::class, 'viewSearchHistory']);

	Route::match(['get','post'], 'admin/add-vendor/','AdminController@addVendor');
	Route::match(['get','post'], 'admin/view-vendor-stocks/{id}','StockController@viewVendorStocks');

	// stock management
	Route::match(['get','post'], 'admin/stock-category/', 'StockController@stockCategory');
	Route::match(['get','post'], 'admin/delete-stock-category/{id}', 'StockController@deleteCategory');
	Route::match(['get','post'], 'admin/edit-stock-category/{id}', 'StockController@editCategory');

	Route::match(['get','post'], 'admin/add-stock-item', 'StockController@addItem');
	Route::match(['get','post'], 'admin/view-stock-items', 'StockController@viewStockItems');
	Route::match(['get','post'],'admin/delete-item/{id}','StockController@deleteItem');
	Route::match(['get','post'],'admin/edit-stock-item/{id}','StockController@editItem');
	Route::match(['get','post'],'admin/add-vendor-items/{id}','StockController@addVendorItems');
	Route::match(['get','post'],'admin/stock-distribution/','StockController@vendorDistribution');
	Route::get('/admin/export-stock-items/','StockController@exportStockItems');
	Route::get('/get-item-quantity',[StockController::class, 'getItemQuantity']);
	Route::match(['get','post'],'admin/stock-distribution/{id}','StockController@editVendorStockItem');
	Route::match(['get','post'],'admin/delete-vendor-stock-item/{id}','StockController@deleteVendorStockItem');
	Route::match(['get','post'],'admin/view-single-vendor-stock','StockController@viewSingleVendorStock');

	Route::match(['get','post'],'admin/chart','ProductsController@charts');
	Route::match(['get','post'],'admin/contact-details/',[CmsController::class, 'contactDetails']);
	Route::match(['get','post'],'admin/edit-contact-details/{id}',[CmsController::class, 'editcontactDetails']);

	// menu
	Route::match(['get','post'],'admin/menu/',[CmsController::class, 'menu']);
	Route::match(['get','post'],'admin/edit-menu/{id}',[CmsController::class, 'editmenu']);
});

Route::get('/logout','AdminController@logout');
