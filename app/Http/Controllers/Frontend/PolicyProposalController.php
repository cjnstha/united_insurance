<?php

namespace App\Http\Controllers\Frontend;

use App\Models\PolicyProposal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PolicyProposalController extends Controller
{
    public function index(){
        $policies = PolicyProposal::all();
        return view('frontend.policy-proposal.index',compact('policies'));
    }
}
