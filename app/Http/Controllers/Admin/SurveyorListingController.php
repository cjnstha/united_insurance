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
             //Upload Doucments//
             if ($request->hasfile('surveyor_files')) {
                $image =$request->file('surveyor_files');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/policy-proposal';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $surveyors->surveyor_files = $photo_original_name;
            }
            $surveyors->surveyor_name = $data['surveyor_name'];
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
             //Upload Doucments//
             if ($request->hasfile('surveyor_files')) {
                $image =$request->file('surveyor_files');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/surveyors-form';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $surveyors->surveyor_files = $photo_original_name;
            }
            $surveyors->surveyor_name = $data['surveyor_name'];
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
