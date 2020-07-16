<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RenewInsuranceController extends Controller
{
    public function renew(Request $request){
        if($request->isMethod('post')){
            $data= $request->all();
            $renews = new \App\RenewInsurance;
            $renews->insurance_type = $data['insurance_type'];
            $renews->name = $data['name'];
            $renews->phone_number = $data['phone_number'];
            $renews->policy_number = $data['policy_number'];
            $renews->email = $data['email'];
            $renews->save();
            return redirect()->back();
        }
        return view('frontend.pages.renew');
    }
}
