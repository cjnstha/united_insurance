<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quarterly;
use Illuminate\Http\Request;

class QuarterlyController extends Controller
{
    public function index(){
        $quarters = Quarterly::all();
        return view('admin.quarter-reports.index',compact('quarters'));
    }

    public function create(){
        return view('admin.quarter-reports.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $quarters = new Quarterly;
             //Upload Doucments//
             if ($request->hasfile('file_name')) {
                $image =$request->file('file_name');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/quarters';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $quarters->file_name = $photo_original_name;
            }
            $quarters->name = $data['name'];
            $quarters->status = $data['status'];
            $quarters->save();
            return redirect()->route('quarter.index')->with('flash_message_success','Quarterly Report Added Successfully');
        }
    }

    public function edit($id){
        $quarters = Quarterly::findorFail($id);
        return view('admin.quarter-reports.edit',compact('quarters'));
    }

    public function update(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            $quarters = Quarterly::findorFail($id);
             //Upload Doucments//
             if ($request->hasfile('file_name')) {
                $image =$request->file('file_name');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/quarters';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $quarters->file_name = $photo_original_name;
            }
            $quarters->name = $data['name'];
            $quarters->status = $data['status'];
            $quarters->update();
            return redirect()->route('quarter.index')->with('flash_message_success','Quarterly Report Updated Successfully');
        }
    }

    public function destroy($id){
        $quarters = Quarterly::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success','Quarterly Report Deleted Successfully');
    }
}
