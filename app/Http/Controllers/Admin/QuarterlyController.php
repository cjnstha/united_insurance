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
            $quarters->name = $data['name'];
            $quarters->file_name = request()->file('file_name')->store('quarters', 'public');
            $quarters->status = $data['status'];
            $quarters->save();
            return redirect()->route('quarter.index')->with('flash_message_success','Quarterly Report Added Successfully');
        }
    }
}
