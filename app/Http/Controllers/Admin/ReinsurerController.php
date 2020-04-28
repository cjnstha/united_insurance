<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reinsurer;
use Illuminate\Http\Request;

class ReinsurerController extends Controller
{
    public function index(){
        $reinsurers = Reinsurer::all();
        return view('admin.reinsurer.index', compact('reinsurers'));
    }

    public function create(){
        return view('admin.reinsurer.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $reinsurers = new Reinsurer;
            $reinsurers->title = $data['title'];
            $reinsurers->tagline = $data['tagline'];
            $reinsurers->image = request()->file('image')->store('re-insurers', 'public');
            $reinsurers->save();
            return redirect()->route('reinsurer.index')->with('flash_message_success','Re-Insurer Added Successfully');
        }
    }

    public function edit($id){
        $reinsurers = Reinsurer::findOrFail($id);
        return view('admin.reinsurer.edit',compact('reinsurers'));
    }

    public function update(Request $request, $id){
         if($request->isMethod('post')){
            $data = $request->all();
            $reinsurers = Reinsurer::findOrFail($id);
            $reinsurers->title = $data['title'];
            $reinsurers->tagline = $data['tagline'];
            $reinsurers->image = request()->file('image')->store('re-insurers', 'public');
            $reinsurers->update();
            return redirect()->route('reinsurer.index')->with('flash_message_success','Re-Insurer Updated Successfully');
        }
    }

    public function destroy($id){
        $reinsurers = Reinsurer::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_danger','Re-Insurers Deleted Successfully');
    }
}
