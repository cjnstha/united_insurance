<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index(){
         $orders = TeamMember::where('hierarchy','1')->get();
        $teams = TeamMember::where('hierarchy','!=','1')->orderBy('hierarchy','asc')->get();
        return view('frontend.pages.team-members',compact('teams','orders'));
    }

    public function detail($id){
        $details = TeamMember::findOrFail($id);
        return view('frontend.pages.team-detail',compact('details'));
    }
}
