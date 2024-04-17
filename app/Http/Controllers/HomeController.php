<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Product;
use App\Models\ProductsImage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $meta_title = 'Index | Ibbani flower';
        $banners = Banner::where('status',1)->get();
        $products = Product::where('status',1)->orderBy('id','Desc')->take(4)->get();
    	return view('index')->with(compact('meta_title','banners','products'));
    }
    public function about(){
        $meta_title = 'About Us | Ibbani flower';
    	return view('about')->with(compact('meta_title'));
    }
    public function notFound(){
        $meta_title = "OOP's Page Not Found";
        return view('404')->with(compact('meta_title'));
    }
    public function singel_detail($id){
        $id = decrypt($id);
        $product = Product::where('id',$id)->first();
        $product_imgs = ProductsImage::where('product_id',$product->id)->get(); 
        return view('singel-detail')->with(compact('product','product_imgs'));
    }
    public function shopping_cart(){
        return view('shopping-cart');
    }
    public function pagenotfound(){
        return view('page404');
    }
    public function checkout(){
        return view('checkout');
    }
    public function contact(){
        return view('contact');
    }
    public function faq(){
        return view('faq');
    }
    public function blog(){
        return view('blog');
    }
    public function product_list(){
        $products = Product::where('status',1)->get();
        return view('listing')->with(compact('products'));
    }
    public function order(){
        return view('order');
    }
    public function home1(){
        return view('homev1');
    }
}
