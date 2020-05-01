<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Quarterly;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuarterlyReportController extends Controller
{
    public function index(){
        $quarters = Quarterly::all();
        return view('frontend.pages.quarterly',compact('quarters'));
    }
}
