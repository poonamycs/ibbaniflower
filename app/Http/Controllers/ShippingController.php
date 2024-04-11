<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shippingCharge;

class ShippingController extends Controller
{
    public function addPincode(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $pinCount = shippingCharge::where('pincode',$data['pincode'])->count();
            if($pinCount>0){
                return redirect()->back()->with('flash_message_error',''. $data['pincode'] .', is already added!'); 
            }

            $shipping = new shippingCharge;            
            $shipping->pincode = $data['pincode'];
            $shipping->city = $data['city'];
            $shipping->state = $data['state'];
            $shipping->save();
            return redirect()->back()->with('flash_message_success','New picode added');
        }
    }

    public function viewShipping(){
    	$shipping_charges = shippingCharge::orderBy('pincode','ASC')->get();
    	return view('admin.shipping.view_shipping')->with(compact('shipping_charges'));
    }

    public function editShipping(Request $request, $id){
    	if($request->isMethod('post')){
    		$data = $request->all();

    		// echo "<pre>"; print_r($data); die;
    		shippingCharge::where('id',$id)->update(['shipping_charges'=>$data['shipping_charges']]);
    		return redirect()->back()->with('flash_message_success','Shipping Charges Updated Successfully.');
    	}

    	$shippingDetails = shippingCharge::where('id',$id)->first();
    	return view('admin.shipping.edit_shipping')->with(compact('shippingDetails'));
    }

    public function deleteShipping($id){
        shippingCharge::where('id',$id)->delete();
        return redirect()->back()->with('flash_message_success','Record deleted.');
    }
}
