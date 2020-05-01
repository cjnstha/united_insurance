<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Financial;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
     public function index(){
        $financials = Financial::all();
        return view('admin.financial-report.index',compact('financials'));
    }

    public function create(){
        return view('admin.financial-report.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $quarters = new Financial;
            $quarters->name = $data['name'];
            $quarters->file_name = request()->file('file_name')->store('financials', 'public');
            $quarters->status = $data['status'];
            $quarters->save();
            return redirect()->route('financial.index')->with('flash_message_success','Quarterly Report Added Successfully');
        }
    }
}
