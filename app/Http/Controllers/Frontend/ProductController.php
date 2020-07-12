<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ProductDetail;
use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductDetail::all();
        return view('frontend.pages.product', compact('products'));
    }

//    public function particularProduct($id)
//    {
//        $products = ProductDetail::findOrFail($id);
//        return view('frontend.pages.product', compact('products'));
//    }
}
