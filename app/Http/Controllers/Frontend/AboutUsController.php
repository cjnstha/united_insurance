<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $abouts = AboutUs::all();
        return view('frontend.pages.about',compact('abouts'));
    }
}
