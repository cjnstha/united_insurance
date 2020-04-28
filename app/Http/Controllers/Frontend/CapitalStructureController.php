<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CapitalStructure;
use Illuminate\Http\Request;

class CapitalStructureController extends Controller
{
    public function index(){
        $capitals = CapitalStructure::all();
        return view('frontend.pages.capital-structure',compact('capitals'));
    }
}
