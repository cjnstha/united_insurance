<?php

namespace App\Http\Controllers\Frontend;

use App\Models\MakeClaims;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MakeClaimsController extends Controller
{
    public function index(Request $request){
        $products = ProductDetail::all();

        if ($request->isMethod('post')) {
            $data = $request->all();
            $claims = new MakeClaims;

            //Upload Doucments//
             if ($request->hasfile('documents')) {
                $image =$request->file('documents');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/make-claim';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $claims->documents = $photo_original_name;
            }

            $claims->insurance_type = $data['insurance_type'];
            $claims->name_insured = $data['name_insured'];
            $claims->phone_number = $data['phone_number'];
            $claims->email = $data['email'];
            $claims->contact_person = $data['contact_person'];
            $claims->message = $data['message'];
            $claims->date_loss = $data['date_loss'];
            $claims->detail_loss = $data['detail_loss'];
            $claims->save();
            return redirect()->back()->with('success_message','Make a claim has been successfully submitted');
        }
        return view('frontend.pages.make-claim',compact('products'));
    }
}
