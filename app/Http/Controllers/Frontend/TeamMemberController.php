<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index(){
        $teams = TeamMember::all();
        return view('frontend.team-member.index',compact('teams'));
    }
}
