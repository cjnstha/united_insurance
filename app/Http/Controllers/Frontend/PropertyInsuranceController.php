<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyInsuranceController extends Controller
{
    public function index(){
        return view('frontend.property-insurance.index');
    }
}
