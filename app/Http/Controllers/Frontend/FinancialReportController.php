<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Financial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinancialReportController extends Controller
{
    public function index(){
        $financials = Financial::all();
        return view('frontend.pages.financial-report',compact('financials'));
    }
}
