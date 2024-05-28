<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Trending;
use App\Models\ProductsAttribute;
use App\Models\Category;
use App\Models\Gallerycategory;
use App\Models\Corporatecategory;
use App\Models\Galleryproduct;
use App\Models\Contact;
use App\Models\ProductsImage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $meta_title = 'Index | Ibbani flower';
        $banners = Banner::where('status',1)->get();
        $products = Product::where('status',1)->orderBy('id','Desc')->take(4)->get();
        $categories = Category::where('status',1)->where('parent_id',0)->take(4)->get();
    	return view('index')->with(compact('meta_title','banners','products','categories'));
    }
    public function corporate(){
        return view('corporate');
    }
    public function about(){
        $brands = Brand::all();
        $meta_title = 'About Us | Ibbani flower';
    	return view('about')->with(compact('meta_title','brands'));
    }
    public function notFound(){
        $meta_title = "OOP's Page Not Found";
        return view('404')->with(compact('meta_title'));
    }
    public function singel_detail($id,$slug = null){
        // $id = base64_decode($id);
        // // $product = Product::where('id',$id)->first();
        // // $product_imgs = ProductsImage::where('product_id',$product->id)->get(); 
        // // $products = Product::where('status',1)->orderBy('id','Desc')->take(6)->get();
        // // return view('product-detail')->with(compact('product','product_imgs','products'));

        // $productsCount = Product::where(['id'=>$id, 'status'=>1])->count();
        // if($productsCount == 0){
        //    return view('404'); 
        // }
        // $product = Product::with('attributes')->where('id',$id)->first();
        // $product = json_decode(json_encode($product));
        // $products = Product::where('id','!=',$id)->where(['category_id'=>$product->category_id])->get();
       
        // $categories = Category::with('categories')->where(['parent_id'=>0])->get();

        // $categoryDetails = Category::where('id', $product->category_id)->first();
        // if($categoryDetails->parent_id==0){            
        //     $breadcrumb = "<a href='/'><span class='mdi mdi-home'></span> <strong>Home</strong></a> <span class='mdi mdi-chevron-right'></span> <a class='text-capitalize' href='".$categoryDetails->url."'>".$categoryDetails->name."</a><span class='mdi mdi-chevron-right'></span> ".$product->product_name;
        // }else{
        //     $mainCategory = Category::where('id',$categoryDetails->parent_id)->first();
        //     $breadcrumb = "<a href='/'><span class='mdi mdi-home'></span> <strong>Home</strong></a> <span class='mdi mdi-chevron-right'></span> <a class='text-capitalize' href='/products/".$mainCategory->url."'>".$mainCategory->name."</a> <span class='mdi mdi-chevron-right'></span> <a class='text-capitalize' href='/products/".$categoryDetails->url."'>".$categoryDetails->name."</a> <span class='mdi mdi-chevron-right'></span> ".$product->product_name;
        // }
        
        // if(!empty($mainCategory)){
        //     $mainCategory = $mainCategory;
        // }

        // //Get Product Alternate images
        // $product_imgs = ProductsImage::where('product_id',$id)->get();
        // $total_stock = ProductsAttribute::where('product_id',$id)->sum('stock');

        // $meta_title = $product->product_name.' | Ibbani Flower';
        // $meta_description = $product->product_name.' | Ibbani Flower';
        // $meta_keywords = $product->product_name.' | Ibbani Flower';
        // return view('product-detail')->with(compact('product','categories','product_imgs','total_stock','products','meta_title','meta_description','meta_keywords','breadcrumb'));
   

    }
    public function shopping_cart(){
        return view('shopping-cart');
    }
    public function pagenotfound(){
        return view('page404');
    }
    // public function checkout(){
    //     return view('checkout');
    // }
    public function contact(){
        return view('contact');
    }
    public function contact_form(Request $request){   
        if($request->isMethod('post')){
            $data = $request->all();
            $enquiry = new Contact;
            $enquiry->name = $data['name'];
            $enquiry->email = $data['email'];
            $enquiry->comment = $data['comment'];
            $enquiry->save();
        }
        /* Code for contact Email Start */
        $email = "poonamver2209@gmail.com";
        $messageData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'comment' => $data['comment']
        ];
        Mail::send('emails.enquiry',$messageData,function($message) use($email){
            $message->to($email)->subject('Enquiry - Ibbani Flower');    
        });
        return redirect()->back();
    }
    public function faq(){
        return view('faq');
    }
    public function blog(){
        return view('blog');
    }
    public function products($id){
        $id = base64_decode($id);
        $categories = Category::where('parent_id',0)->get();
        $category = Category::where('id',$id)->first();
        $products = Product::where('category_id',$category->id)->where('status',1)->get();
        return view('listing')->with(compact('products','category','categories'));
    }
    public function order(){
        return view('order');
    }
    public function home1(){
        return view('homev1');
    }
    public function gallery(){
        $categories = Gallerycategory::all();
        
        return view('gallery')->with(compact('categories'));
    }
    public function corporate_decoration(){
        $categories = Corporatecategory::all();
        return view('corporate')->with(compact('categories'));
    }
    public function trending()
    {
        $trendingproduct = Trending::where('status',1)->get();
        return view('trending')->with(compact('trendingproduct'));
    }
}
