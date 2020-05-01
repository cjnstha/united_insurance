<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BOD;
use Illuminate\Http\Request;

class BODController extends Controller
{
    public function index(){
        $bods = BOD::all();
        return view('frontend.pages.bod',compact('bods'));
    }

    public function detail($id){
        $details = BOD::findOrFail($id);
        return view('frontend.pages.bod-detail',compact('details'));
    }
}
