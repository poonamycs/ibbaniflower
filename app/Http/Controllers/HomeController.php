<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $meta_title = 'Index | Ibbani flower';
    	return view('front/index')->with(compact('meta_title'));
    }
    public function about(){
        $meta_title = 'About Us | Ibbani flower';
    	return view('front/about')->with(compact('meta_title'));
    }
    public function notFound(){
        $meta_title = "OOP's Page Not Found";
        return view('404')->with(compact('meta_title'));
    }
    public function singel_detail(){
        return view('/front/singel-detail');
    }
    public function shopping_cart(){
        return view('/front/shopping-cart');
    }
    public function pagenotfound(){
        return view('/front/page404');
    }
    public function checkout(){
        return view('/front/checkout');
    }
    public function contact(){
        return view('/front/contact1');
    }
    public function faq(){
        return view('/front/faq');
    }
    public function blog(){
        return view('/front/blog');
    }
    public function order(){
        return view('/front/order');
    }
    public function home1(){
        return view('/front/homev1');
    }
}
