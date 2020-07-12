<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\BOD;
use App\Models\ProductDetail;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $abouts = AboutUs::all();
         $about = json_decode(json_encode($abouts));
        $products = ProductDetail::all();
        return view('frontend.pages.about', compact('about', 'products'));
    }
}
