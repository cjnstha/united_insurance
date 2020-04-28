<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index(){
        $reserves = Reserve::all();
        return view('admin.reserves.index',compact('reserves'));
    }

    public function create(){
        return view('admin.reserves.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $reserves = new Reserve;
            $reserves->particulars = $data['particulars'];
            $reserves->particulars_nep = $data['particulars_nep'];
            $reserves->status = $data['status'];
            $reserves->save();
            return redirect()->route('reserve.index')->with('flash_message_success','Reserves added Successfully');
        }
    }

     public function edit($id){
        $reserves = Reserve::findOrFail($id);
        return view('admin.reserves.edit',compact('reserves'));
    }

    public function update(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            $reserves = Reserve::findOrFail($id);
            $reserves->particulars = $data['particulars'];
            $reserves->particulars_nep = $data['particulars_nep'];
            $reserves->status = $data['status'];
            $reserves->update();
            return redirect()->route('reserve.index')->with('flash_message_success','Reserves updated Successfully');
        }
    }

    public function destroy($id){
        $reserves = Reserve::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_danger','Reserve Deleted Successfully');
    }
}
