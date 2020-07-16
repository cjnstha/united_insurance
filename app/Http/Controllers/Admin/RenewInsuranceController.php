<?php

namespace App\Http\Controllers\Admin;

use App\RenewInsurance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RenewInsuranceController extends Controller
{
    public function index(){
        $renews = RenewInsurance::latest()->get();
        return view('admin.renew.index',compact('renews'));
    }
}
