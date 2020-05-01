<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ClaimForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClaimFormController extends Controller
{
    public function index(){
        $claims = ClaimForm::all();
        return view('frontend.pages.claim-form',compact('claims'));
    }
}
