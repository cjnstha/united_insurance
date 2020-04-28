<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function index(){
        $data = AboutUs::all();
        return view('admin.aboutus.index',compact('data'));
    }

    public function create(){
        return view('admin.aboutus.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $about = new AboutUs();
            if ($request->hasfile('image')) {
                $image =$request->file('image');
                $ext = $image->getClientOriginalExtension();
                $destination = 'images/logo';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $about->image = $photo_original_name;
            }
            $about->introduction = $data['introduction'];
            $about->vision = $data['vision'];
            $about->mission = $data['mission'];
            $about->value = $data['value'];
            $about->introduction_nep = $data['introduction_nep'];
            $about->vision_nep = $data['vision_nep'];
            $about->mission_nep = $data['mission_nep'];
            $about->value_nep = $data['value_nep'];
            $about->created_at = Carbon::today();
            $about->save();
            return redirect()->route('about.index')->with('flash_message_success','Company Profile added successfully');
        }
    }

    public function edit($id){
        $about_us = AboutUs::findOrFail($id);
        return view('admin.aboutus.edit',compact('about_us'));
    }

    public function update(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            $about = AboutUs::findOrFail($id);
            if ($request->hasfile('image')) {
                $image =$request->file('image');
                $ext = $image->getClientOriginalExtension();
                $destination = 'images/logo';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $about->image = $photo_original_name;
            }
            $about->introduction = $data['introduction'];
            $about->vision = $data['vision'];
            $about->mission = $data['mission'];
            $about->value = $data['value'];
            $about->introduction_nep = $data['introduction_nep'];
            $about->vision_nep = $data['vision_nep'];
            $about->mission_nep = $data['mission_nep'];
            $about->value_nep = $data['value_nep'];
            $about->created_at = Carbon::today();
            $about->update();
            return redirect()->route('about.index')->with('flash_message_success','Company Profile updated successfully');
        }
    }

    public function destroy($id){
        $about = AboutUs::findOrFail($id);
        $about->delete();
        return redirect()->route('about.index')->with('flash_message_success','Company Profile Deleted Successfully');
    }
}
