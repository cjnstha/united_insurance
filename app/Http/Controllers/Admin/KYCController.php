<?php

namespace App\Http\Controllers\Admin;

use App\Models\KYC;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KYCController extends Controller
{
    public function index(){
        $kycs = KYC::all();
        return view('admin.kyc.index',compact('kycs'));
    }

    public function create(){
        return view('admin.kyc.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $kycs = new KYC;
            $kycs->kyc_name = $data['kyc_name'];
            $kycs->kyc_file = $data['kyc_file'];
            $kycs->status = $data['status'];
            $kycs->save();
            return redirect()->route('kyc.index')->with('flash_message_success','KYC Form Added Successfully');
        }
    }

    public function edit($id){
        $kycs = KYC::findOrFail($id);
        return view('admin.kyc.edit',compact('kycs'));
    }

    public function update(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            $kycs = KYC::findOrFail($id);
            $kycs->kyc_name = $data['kyc_name'];
            $kycs->kyc_file = $data['kyc_file'];
            $kycs->status = $data['status'];
            $kycs->update();
            return redirect()->route('kyc.index')->with('flash_message_success','AGM Minute Updated Successfully');
        }
    }

    public function destroy($id){
        $kycs = KYC::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success','AGM Minute Deleted Successfully');
    }

}
