<?php

namespace App\Http\Controllers\Admin;

use App\Models\SurveyorListing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurveyorListingController extends Controller
{
      public function index(){
        $surveyors = SurveyorListing::all();
        return view('admin.surveyor-form.index',compact('surveyors'));
    }

    public function create(){
        return view('admin.surveyor-form.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $surveyors = new SurveyorListing;
            $surveyors->surveyor_name = $data['surveyor_name'];
            $surveyors->surveyor_files = request()->file('surveyor_files')->store('surveyor-form', 'public');
            $surveyors->status = $data['status'];
            $surveyors->save();
            return redirect()->route('surveyor-application.index')->with('flash_message_success','Surveyor Application Form Added Successfully');
        }
    }

    public function edit($id){
        $surveyors = SurveyorListing::findOrFail($id);
        return view('admin.surveyor-form.edit',compact('surveyors'));
    }

    public function update(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            $surveyors = SurveyorListing::findOrFail($id);
            $surveyors->surveyor_name = $data['surveyor_name'];
            $surveyors->surveyor_files = request()->file('surveyor_files')->store('surveyor-form', 'public');
            $surveyors->status = $data['status'];
            $surveyors->update();
            return redirect()->route('surveyor-application.index')->with('flash_message_success','Surveyor Application Form Updated Successfully');
        }
    }

    public function destroy($id){
        $surveyors = SurveyorListing::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success','Surveyor Application Form Deleted Successfully');
    }
}
