<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $meta_title = 'Index | Ibbani flower';
    	return view('index')->with(compact('meta_title'));
    }
    public function about(){
        $meta_title = 'About Us | Ibbani flower';
    	return view('about')->with(compact('meta_title'));
    }
    public function notFound(){
        $meta_title = "OOP's Page Not Found";
        return view('404')->with(compact('meta_title'));
    }
    public function singel_detail(){
        return view('singel-detail');
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
    public function order(){
        return view('order');
    }
    public function home1(){
        return view('homev1');
    }
}
