<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Auth;
use Session;
use Image;
use Illuminate\Support\Facades\Input;

class BrandController extends Controller
{
    public function addBrand(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $brand = new Brand;
            $brand->name = $data['brand_name'];
            if($request->hasFile('image')){
                $image_tmp = $request->image;                     
                $filename = time().'.'.$image_tmp->clientExtension(); 

                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $image_path = 'images/frontend_images/brand/'.$filename;
                    Image::make($image_tmp)->resize(500,200)->save($image_path);

                    // Store image name in category table
                    $brand->image = $filename;
                }
            }else{
                $brand->image = '';
            }

            $brand->save();
            return redirect('/admin/view-brands/')->with('flash_message_success','Brand added Successfully!');
        }
        return view('/admin/brands/add_brand');
       }

    public function editBrand(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            // Upload Product image
            if($request->hasFile('image')){
                $image_tmp = $request->image;
                $filename = time().'.'.$image_tmp->clientExtension();

                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $image_path = 'images/frontend_images/brand/'.$filename;

                    // Resizes image
                    Image::make($image_tmp)->resize(500,200)->save($image_path);
                }
            } else if(!empty($data['current_image'])){
                $filename = $data['current_image'];
            }else{
                $filename = '';
            }
            Brand::where(['id'=>$id])->update(['name'=>$data['brand_name'],'image'=>$filename]);
            return redirect('/admin/view-brands')->with('flash_message_success','Brand updated Successfully!');
        }
        $brand = Brand::where(['id'=>$id])->first();
        return view('admin.brands.edit_brand')->with(compact('brand'));
    }

    public function deleteBrand(Request $request, $id = null){
        if(!empty($id)){
            Brand::where(['id'=>$id])->delete();
            // return redirect()->back()->('flash_message_success','Category Deleted Successfully');
            return redirect('/admin/view-brands')->with('flash_message_success','Brand Deleted Successfully');
        }
    }

    public function viewBrands(){
        $brands = Brand::all();
        return view('admin.brands.view_brands')->with(compact('brands'));
    }
}
