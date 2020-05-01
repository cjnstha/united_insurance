<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index(){
        $teams = TeamMember::all();
        return view('frontend.pages.team-members',compact('teams'));
    }

    public function detail($id){
        $details = TeamMember::findOrFail($id);
        return view('frontend.pages.team-detail',compact('details'));
    }
}
