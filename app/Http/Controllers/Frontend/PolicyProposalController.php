<?php

namespace App\Http\Controllers\Frontend;

use App\Models\PolicyProposal;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PolicyProposalController extends Controller
{
    public function index(){
        $products = ProductDetail::get();
        return view('frontend.pages.policy-proposal-form',compact('products'));
    }
}
