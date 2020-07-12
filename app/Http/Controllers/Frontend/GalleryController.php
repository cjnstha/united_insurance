<?php

namespace App\Http\Controllers\Frontend;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::latest()->take(6)->get();
        return view('frontend.pages.gallery',compact('galleries'));
    }
}
