<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index(){
        $reserves = Reserve::all();
        return view('frontend.pages.reserve',compact('reserves'));
    }
}
