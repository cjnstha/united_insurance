<?php

namespace App\Http\Controllers\Admin;

use App\Models\MakeClaims;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MakeClaimController extends Controller
{
    public function index(){
        $claims = MakeClaims::latest()->get();
        return view('admin.make-claim.index',compact('claims'));
    }
}
