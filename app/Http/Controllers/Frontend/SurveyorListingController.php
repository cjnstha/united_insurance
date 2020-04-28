<?php

namespace App\Http\Controllers\Frontend;

use App\Models\SurveyorListing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurveyorListingController extends Controller
{
    public function index(){
        $surveyors = SurveyorListing::all();
        return view('frontend.surveyor-listing.index',compact('surveyors'));
    }
}
