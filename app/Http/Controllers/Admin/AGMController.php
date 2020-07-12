<?php

namespace App\Http\Controllers\Admin;

use App\Models\AGMForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AGMController extends Controller
{
    public function index(){
        $agms = AGMForm::all();
        return view('admin.agm-minute.index',compact('agms'));
    }

    public function create(){
        return view('admin.agm-minute.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $agms = new AGMForm;
             //Upload Doucments//
             if ($request->hasfile('agm_files')) {
                $image =$request->file('agm_files');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/agm';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $agms->agm_files = $photo_original_name;
            }
            $agms->agm_name = $data['agm_name'];
            $agms->status = $data['status'];
            $agms->save();
            return redirect()->route('agm.index')->with('flash_message_success','AGM Minute Added Successfully');
        }
    }

    public function edit($id){
        $agms = AGMForm::findOrFail($id);
        return view('admin.agm-minute.edit',compact('agms'));
    }

    public function update(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            $agms = AGMForm::findOrFail($id);
              //Upload Doucments//
             if ($request->hasfile('agm_files')) {
                $image =$request->file('agm_files');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/agm';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $agms->agm_files = $photo_original_name;
            }
            $agms->agm_name = $data['agm_name'];
            $agms->status = $data['status'];
            $agms->update();
            return redirect()->route('agm.index')->with('flash_message_success','AGM Minute Updated Successfully');
        }
    }

    public function destroy($id){
        $agms = AGMForm::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success','AGM Minute Deleted Successfully');
    }

}
