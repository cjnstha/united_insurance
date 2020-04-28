<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CapitalStructure;
use Illuminate\Http\Request;

class CapitalStructureController extends Controller
{
    public function index(){
        $capitals = CapitalStructure::all();
        return view('admin.capital-structure.index',compact('capitals'));
    }

    public function create(){
        return view('admin.capital-structure.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $capitals = new CapitalStructure;
            $capitals->capital_details = $data['capital_details'];
            $capitals->capital_details_np = $data['capital_details_np'];
            $capitals->status = $data['status'];
            $capitals->save();
            return redirect()->route('capital.index')->with('flash_message_success','Capital Structure added succesfully');
        }
    }

     public function edit($id){
        $capitals = CapitalStructure::findOrFail($id);
        return view('admin.capital-structure.edit',compact('capitals'));
    }

    public function update(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();

            $capitals = CapitalStructure::findOrFail($id);
            $capitals->capital_details = $data['capital_details'];
            $capitals->capital_details_np = $data['capital_details_np'];
            $capitals->status = $data['status'];
            $capitals->update();
            return redirect()->route('capital.index')->with('flash_message_success','Capital Structure updated succesfully');
        }
    }

    public function destroy($id){
        $capitals = CapitalStructure::findOrFail($id);
        $capitals->delete();
        return redirect()->back()->with('flash_message_warning','Capital Structure Deleted Successfully');
    }

}
