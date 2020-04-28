<?php

namespace App\Http\Controllers\Frontend;

use App\Models\RightShare;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RightShareController extends Controller
{
    public function index(){
        $rights = RightShare::all();
        return view('frontend.right-share.index',compact('rights'));
    }
}
