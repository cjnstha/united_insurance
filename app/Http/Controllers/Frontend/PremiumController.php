<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Premium;
use Illuminate\Http\Request;

class PremiumController extends Controller
{
    public function index(){
        $premiums = Premium::all();
        return view('frontend.pages.premium-structure',compact('premiums'));
    }
}
