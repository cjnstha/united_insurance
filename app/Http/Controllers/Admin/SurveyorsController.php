<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Surveyor;
use Illuminate\Http\Request;

class SurveyorsController extends Controller
{
    public function index(){
        $surveyors = Surveyor::all();
        return view('admin.surveyors.index',compact('surveyors'));
    }

    public function create(){
        return view('admin.surveyors.create');
    }

    public function store(Request $request){
         if($request->isMethod('post')){
            $data = $request->all();
            $surveyors = new Surveyor;
            $surveyors->name = $data['name'];
            $surveyors->address = $data['address'];
            $surveyors->post = $data['post'];
            $surveyors->contact_no = $data['contact_no'];
            $surveyors->license_no = $data['license_no'];
            $surveyors->class = $data['class'];
            $surveyors->status = $data['status'];
            $surveyors->save();
            return redirect()->route('surveyors.index')->with('flash_message_success','Agents Added Successfully');
        }
    }
}
