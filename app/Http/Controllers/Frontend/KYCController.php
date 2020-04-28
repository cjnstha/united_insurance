<?php

namespace App\Http\Controllers\Frontend;

use App\Models\KYC;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KYCController extends Controller
{
    public function index(){
        $kycs = KYC::all();
        return view('frontend.kyc.index',compact('kycs'));
    }
}
