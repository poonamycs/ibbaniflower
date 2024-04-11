<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\OfferBanner;
use App\Models\ContactDetail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	// $productsAll = Product::orderBy('id','DESC')->get();
    	$featuredAll = Product::where(['status'=>1,'featured'=>1,'admin_approved'=>1])->take(8)->inRandomOrder()->get();
    	$productsAll = Product::inRandomOrder()->where(['status'=>1, 'admin_approved'=>1])->take(8)->inRandomOrder()->get();

        $fruitsCat = Category::where(['url' => 'fruits'])->first();
        $fruitSubcat = Category::where(['parent_id'=>$fruitsCat->id])->paginate(9);
        foreach($fruitSubcat as $subcat){
            $cat_ids[] = $subcat->id;
        }
        $fruits = Product::inRandomOrder()->whereIn('products.category_id', $cat_ids)->where(['products.status'=>1,'admin_approved'=>1])->orderBy('products.id','Desc')->get();

        $vegCat = Category::where(['url' => 'vegetables'])->first();
        $vegSubcat = Category::where(['parent_id'=>$vegCat->id])->paginate(9);
        foreach($vegSubcat as $subcat){
            $vegcat_ids[] = $subcat->id;
        }
        $veg = Product::inRandomOrder()->whereIn('products.category_id', $vegcat_ids)->where(['products.status'=>1,'admin_approved'=>1])->orderBy('products.id','Desc')->get();


    	$categories = Category::with('categories')->where(['parent_id'=>0])->get();
    	$categories = json_decode(json_encode($categories));
    	// echo "<pre>"; print_r($categories); die;


    	$testimonialAll = Testimonial::where('status',1)->get();
    	$banners = Banner::where('status',1)->get();
        $banner1 = OfferBanner::where(['status'=>1,'id'=>2])->first();
        $banner2 = OfferBanner::where(['status'=>1,'id'=>3])->first();
        $banner3 = OfferBanner::where(['status'=>1,'id'=>4])->first();

    	$meta_title = "Online Grocery Shop | Veggi Mart";
    	$meta_description = "Veggi Mart";
    	$meta_keywords = "online shopping, fruits, vegetables, veggimart, veggi mart, buy grocery, buy fruits, buy vegetables";

    	return view('index')->with(compact('featuredAll','productsAll','categories','banners','meta_title','meta_description','meta_keywords','testimonialAll','fruits','veg','banner1','banner2','banner3'));
    }

    public function products(){
    	// $productsAll = Product::orderBy('id','DESC')->get();
    	$productsAll = Product::where(['status'=>1, 'admin_approved'=>1])->paginate(9);

    	$categories = Category::with('categories')->where(['parent_id'=>0])->get();
    	$categories = json_decode(json_encode($categories));
    	// echo "<pre>"; print_r($categories); die;

     	$categories_menu = "";
    	foreach ($categories as $cat) {
			$categories_menu .= "<div class='panel-heading'>
				<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordian' href='#".$cat->id."'>
						<span class='badge pull-right'><i class='fa fa-plus'></i></span>
						".$cat->name."
					</a>
				</h4>
			</div>

			<div id='".$cat->id."' class='panel-collapse collapse'>
				<div class='panel-body'>
					<ul>";
					$sub_categories = Category::where(['parent_id'=>$cat->id])->get();
		    		foreach($sub_categories as $subcat){
						$categories_menu .= "<li><a href='".$subcat->url."'>".$subcat->name." </a></li>";
		    		}
					$categories_menu .= "</ul>
				</div>
			</div>";    		
    	}
    	return view('products.products')->with(compact('productsAll','categories'));
    }

    public function featuredProducts(){
        // $productsAll = Product::orderBy('id','DESC')->get();

        $productsAll = Product::where(['status'=>1, 'admin_approved'=>1, 'featured'=>1])->paginate(8);

        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        $categories = json_decode(json_encode($categories));
        // echo "<pre>"; print_r($categories); die;

        $categories_menu = "";
        foreach ($categories as $cat) {
            $categories_menu .= "<div class='panel-heading'>
                <h4 class='panel-title'>
                    <a data-toggle='collapse' data-parent='#accordian' href='#".$cat->id."'>
                        <span class='badge pull-right'><i class='fa fa-plus'></i></span>
                        ".$cat->name."
                    </a>
                </h4>
            </div>

            <div id='".$cat->id."' class='panel-collapse collapse'>
                <div class='panel-body'>
                    <ul>";
                    $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
                    foreach($sub_categories as $subcat){
                        $categories_menu .= "<li><a href='".$subcat->url."'>".$subcat->name." </a></li>";
                    }
                    $categories_menu .= "</ul>
                </div>
            </div>";            
        }
        return view('products.featured_products')->with(compact('productsAll','categories'));
    }

    public function contact(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $contact = new Contact;
            $contact->name = $data['name'];
            $contact->email = $data['email'];
            $contact->mobile = $data['mobile'];
            $contact->subject = $data['subject'];
            $contact->comment = $data['comment'];
            date_default_timezone_set('Asia/Kolkata');
            $contact->save();

            /* Code for contact Email Start */
            $email = "manoj@ycstech.in";
            $messageData = [
                'name' => $data['name'],
                'email' => $data['email'],
                'mobile' => $data['mobile'],
                'subject' => $data['subject'],
                'comment' => $data['comment']
            ];
            Mail::send('emails.enquiry',$messageData,function($message) use($email){
                $message->to($email)->subject('Enquiry - Veggi Mart');    
            });
            /* Code for Order Email Ends */
            return redirect()->back()->with('flash_message_success','Thanks for your Enquiry/Feedback, We will get back to you soon!');
        }
        $contactDetails = ContactDetail::first();
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        $meta_title = 'Contact Us | Veggi Mart';
        return view('contact')->with(compact('categories','contactDetails','meta_title'));
    }

    public function vendorRegister(){
    	$meta_title = 'Vendor Registration | Veggi Mart';
    	$categories = Category::with('categories')->where(['parent_id'=>0])->get();
    	return view('users.vendor_register')->with(compact('categories','meta_title'));
    }

    public function about(){
        $meta_title = 'About Us | Veggi Mart';
    	return view('about')->with(compact('meta_title'));
    }

    public function faq(){
        $meta_title = "FAQ's | Veggi Mart";
        return view('faq')->with(compact('meta_title'));
    }

    public function notFound(){
        $meta_title = "OOP's Page Not Found";
        return view('404')->with(compact('meta_title'));
    }

}
