<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ProductDetail;
use App\Models\Quotes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class QuotesController extends Controller
{
    public function index(Request $request)
    {
        $products = ProductDetail::all();
        if ($request->isMethod('post')) {
            $data = $request->all();
            $quotes = new Quotes;

            //Upload Doucments//
             if ($request->hasfile('documents')) {
                $image =$request->file('documents');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/quote_doc';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $quotes->documents = $photo_original_name;
            }

            $quotes->insurance_type = $data['insurance_type'];
            $quotes->name_insured = $data['name_insured'];
            $quotes->phone_number = $data['phone_number'];
            $quotes->email = $data['email'];
            $quotes->contact_person = $data['contact_person'];
            $quotes->message = $data['message'];
            $quotes->save();
            return redirect()->back()->with('success_message','Quotes has been successfully submitted');
        }
        return view('frontend.pages.quote',compact('products'));
    }
}
