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
             //Upload Doucments//
             if ($request->hasfile('rightshare_file')) {
                $image =$request->file('rightshare_file');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/make-claim';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $rights->rightshare_file = $photo_original_name;
            }
            $rights->rightshare_name = $data['rightshare_name'];
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
             //Upload Doucments//
             if ($request->hasfile('rightshare_file')) {
                $image =$request->file('rightshare_file');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/right-share';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $rights->rightshare_file = $photo_original_name;
            }
            $rights->rightshare_name = $data['rightshare_name'];
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
