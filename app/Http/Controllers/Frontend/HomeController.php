<?php

namespace App\Http\Controllers\Frontend;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $abouts = AboutUs::all();
        return view('frontend.home',compact('abouts'));
    }
}
