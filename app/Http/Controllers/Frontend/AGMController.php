<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AGMForm;
use Illuminate\Http\Request;

class AGMController extends Controller
{
    public function index (){
        $agms = AGMForm::all();
        return view('frontend.agm-minute.index',compact('agms'));
    }
}
