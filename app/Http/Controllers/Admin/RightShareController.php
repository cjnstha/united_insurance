<?php

namespace App\Http\Controllers\Admin;

use App\Models\RightShare;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RightShareController extends Controller
{
     public function index(){
        $rights = RightShare::all();
        return view('admin.right-share.index',compact('rights'));
    }

    public function create(){
        return view('admin.right-share.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $rights = new RightShare;
            $rights->rightshare_name = $data['rightshare_name'];
            $rights->rightshare_file = $data['rightshare_file'];
            $rights->status = $data['status'];
            $rights->save();
            return redirect()->route('rightshare.index')->with('flash_message_success','RightShare Form Added Successfully');
        }
    }

    public function edit($id){
        $rights = RightShare::findOrFail($id);
        return view('admin.right-share.edit',compact('rights'));
    }

    public function update(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            $rights = RightShare::findOrFail($id);
            $rights->rightshare_name = $data['rightshare_name'];
            $rights->rightshare_file = $data['rightshare_file'];
            $rights->status = $data['status'];
            $rights->update();
            return redirect()->route('rightshare.index')->with('flash_message_success','Right Share Form Updated Successfully');
        }
    }

    public function destroy($id){
        $rights = RightShare::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success','Right Share Form Deleted Successfully');
    }
}
