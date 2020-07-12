<?php

namespace App\Http\Controllers\Frontend;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Information;
use App\Models\AboutUs;
use App\Models\News;
use App\Models\PopUp;
use App\Models\ProductDetail;
use App\Models\ProductType;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $abouts = AboutUs::all();
        $about = json_decode(json_encode($abouts));
        $products = ProductDetail::all();
        $chairman = TeamMember::where('team_position','Information Officer')->first();
        $news = News::take(1)->get();
        $recents = News::orderBy('created_at','ASC')->latest()->take(3)->get();
        $popups = PopUp::latest()->take(1)->get();
        $infos = Information::all();
        return view('frontend.home',compact('abouts','products','chairman','news','recents','popups','infos'));
    }
}
