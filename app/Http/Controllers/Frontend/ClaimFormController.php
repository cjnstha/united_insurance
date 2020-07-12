<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ClaimForm;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClaimFormController extends Controller
{
    public function index(){
        $products = ProductDetail::get();
//        $claims = ClaimForm::get();
//        foreach($claims as $key => $val){
//            $product_name = ProductDetail::where(['id' =>$val->product_id])->first();
//            $claims[$key]->product_name = $product_name->product_name;
//        }
        return view('frontend.pages.claim-form',compact('products'));
    }
}
