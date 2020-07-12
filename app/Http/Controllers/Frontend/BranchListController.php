<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BranchList;
use Illuminate\Http\Request;

class BranchListController extends Controller
{
    public function index(){
        $branches = BranchList::all();
        return view('frontend.pages.branch-list',compact('branches'));
    }
}
