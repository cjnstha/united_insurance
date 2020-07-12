<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CitizenCharter;
use Illuminate\Http\Request;

class CitizenCharterController extends Controller
{
    public function index(){
        $citizens = CitizenCharter::orderBy('hierarchy', 'asc')->get();
        return view('frontend.pages.citizen-charters',compact('citizens'));
    }
}
