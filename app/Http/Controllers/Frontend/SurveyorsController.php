<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Surveyor;
use Illuminate\Http\Request;

class SurveyorsController extends Controller
{
    public function index(){
        $surveyors = Surveyor::all();
        return view('frontend.pages.surveyors',compact('surveyors'));
    }
}
