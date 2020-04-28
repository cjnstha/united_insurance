<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Premium;
use Illuminate\Http\Request;

class PremiumController extends Controller
{
    public function index(){
        $premiums = Premium::all();
        return view('admin.premium.index',compact('premiums'));
    }

    public function create(){
        return view('admin.premium.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $premiums = new Premium;
            $premiums->premium_details = $data['premium_details'];
            $premiums->premium_details_nep = $data['premium_details_nep'];
            $premiums->status =$data['status'];
            $premiums->save();
            return redirect()->route('premium.index')->with('flash_message_success','Premium Structure Added Successfully');
        }
    }

    public function edit($id){
        $premiums = Premium::findOrFail($id);
        return view('admin.premium.edit',compact('premiums'));
    }

    public function update(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            $premiums = Premium::findOrFail($id);
            $premiums->premium_details = $data['premium_details'];
            $premiums->premium_details_nep = $data['premium_details_nep'];
            $premiums->status =$data['status'];
            $premiums->update();
            return redirect()->route('premium.index')->with('flash_message_success','Premium Structure Updated Successfully');
        }
    }

    public function destroy($id){
        $premiums = Premium::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_error','Premium Structure Deleted Successfully');
    }
}
