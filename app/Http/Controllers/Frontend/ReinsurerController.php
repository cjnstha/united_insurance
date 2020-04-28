<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reinsurer;
use Illuminate\Http\Request;

class ReinsurerController extends Controller
{
    public function index(){
        $reinsurers = Reinsurer::all();
        return view('frontend.reinsurer.index',compact('reinsurers'));
    }
}
