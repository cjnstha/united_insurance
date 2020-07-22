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
        return view('frontend.pages.claim-form',compact('products'));
    }
}
