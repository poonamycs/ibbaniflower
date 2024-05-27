<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallerycategory;
use App\Models\Galleryproduct;
use App\Models\Corporatecategory;
use App\Models\Corporateproduct;
use Auth;
use Session;
use Image;
use Illuminate\Support\Facades\Input;

class GalleryController extends Controller
{
    public function editAlbumtype(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $category = Gallerycategory::where('id',$request->id1)->first();
            $category->category = $data['category1'];
            $category->update();
            $category = Gallerycategory::where('id',$request->id2)->first();
            $category->category = $data['category2'];
            $category->update(); 
            $category = Gallerycategory::where('id',$request->id3)->first();
            $category->category = $data['category3'];
            $category->update();
            $category = Gallerycategory::where('id',$request->id4)->first();
            $category->category = $data['category4'];
            $category->update();
            return redirect('/admin/album-type')->with('flash_message_success','Category updated Successfully!');
        }
        $categories = Gallerycategory::all();
        return view('admin.gallery.add_gallery_category')->with(compact('categories'));
    }

    public function addImages(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('image')){
                $files = $request->file('image');
                foreach($files as $file){
                    // Upload Images after Resize
                    $image = new Galleryproduct;
                    $extension = $file->getClientOriginalExtension();
                    $fileName = rand(111,99999).'.'.$extension;                  

                    $large_image_path  = 'images/backend_images/gallery/large/'.$fileName;
                    $small_image_path  = 'images/backend_images/gallery/small/'.$fileName;   

                    Image::make($file)->save($large_image_path);
                    Image::make($file)->resize(300, 300)->save($small_image_path);

                    $image->image = $fileName;  
                    $image->category = $data['category'];
                    $image->save();
                }   
            }
            return redirect()->back()->with('flash_message_success', 'Gallery Images has been added successfully');
        }
        $gallerycategory = Gallerycategory::all();
        $galleryproduct = Galleryproduct::all();
        return view('admin.gallery.add_gallery_product')->with(compact('gallerycategory','galleryproduct'));
    }

    public function deleteAltImage($id=null){
        //Get product image name
        $productImage = Galleryproduct::where(['id'=>$id])->first();

        //get image path
        $large_image_path  = 'images/backend_images/gallery/large/';
        $small_image_path  = 'images/backend_images/gallery/small/';

        //delete large image if not exits in folder
        if(file_exists($large_image_path.$productImage->image)){
            // echo $large_image_path.$productImage->image; die;
            unlink($large_image_path.$productImage->image);
        }

        //delete small image if not exits in folder
        if(file_exists($small_image_path.$productImage->image)){
            unlink($small_image_path.$productImage->image);
        }

        //delete image from product table
        Galleryproduct::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Product Alternate Image has been Deleted');
    }

    public function editcorporatecategory(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $category = Corporatecategory::where('id',$request->id1)->first();
            $category->category = $data['category1'];
            $category->update();
            $category = Corporatecategory::where('id',$request->id2)->first();
            $category->category = $data['category2'];
            $category->update(); 
            $category = Corporatecategory::where('id',$request->id3)->first();
            $category->category = $data['category3'];
            $category->update();
            $category = Corporatecategory::where('id',$request->id4)->first();
            $category->category = $data['category4'];
            $category->update();
            return redirect('/admin/corporate-category')->with('flash_message_success','Category updated Successfully!');
        }
        $categories = Corporatecategory::all();
        return view('admin.gallery.add_corporate_category')->with(compact('categories'));
    }

    public function addcorporateimage(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('image')){
                $files = $request->file('image');
                foreach($files as $file){
                    // Upload Images after Resize
                    $image = new Corporateproduct;
                    $extension = $file->getClientOriginalExtension();
                    $fileName = rand(111,99999).'.'.$extension;                  

                    $large_image_path  = 'images/backend_images/gallery/large/'.$fileName;
                    $small_image_path  = 'images/backend_images/gallery/small/'.$fileName;   

                    Image::make($file)->save($large_image_path);
                    Image::make($file)->resize(480, 420)->save($small_image_path);

                    $image->image = $fileName;  
                    $image->category = $data['category'];
                    $image->save();
                }   
            }
            return redirect()->back()->with('flash_message_success', 'Gallery Images has been added successfully');
        }
        $corporatecategory = Corporatecategory::all();
        $corporateproduct = Corporateproduct::all();
        return view('admin.gallery.add_corporate_product')->with(compact('corporatecategory','corporateproduct'));
    }

    public function deletecorporateimage($id=null){
        //Get product image name
        $productImage = Corporateproduct::where(['id'=>$id])->first();

        //get image path
        $large_image_path  = 'images/backend_images/gallery/large/';
        $small_image_path  = 'images/backend_images/gallery/small/';

        //delete large image if not exits in folder
        if(file_exists($large_image_path.$productImage->image)){
            // echo $large_image_path.$productImage->image; die;
            unlink($large_image_path.$productImage->image);
        }

        //delete small image if not exits in folder
        if(file_exists($small_image_path.$productImage->image)){
            unlink($small_image_path.$productImage->image);
        }

        //delete image from product table
        Corporateproduct::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Product Alternate Image has been Deleted');
    }
}
