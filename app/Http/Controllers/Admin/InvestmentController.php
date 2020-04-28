<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investor;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{

    public function index(){
        $investments = Investor::all();
        return view ('admin.investors.index',compact('investments'));
    }

    public function create(){
        return view('admin.investors.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $investments = new Investor;
            $investments->particulars = $data['particulars'];
            $investments->particulars_nep = $data['particulars_nep'];
            $investments->status = $data['status'];
            $investments->save();
            return redirect()->route('investment.index')->with('flash_message_success', 'Investment Added Successfully');
        }
    }

    public function edit($id){
        $investments = Investor::findOrFail($id);
        return view('admin.investors.edit',compact('investments'));
    }

    public function update(Request $request, $id){
        if ($request->isMethod('post')) {
            $data = $request->all();
            $investments = Investor::findOrFail($id);
            $investments->particulars = $data['particulars'];
            $investments->particulars_nep = $data['particulars_nep'];
            $investments->status = $data['status'];
            $investments->update();
            return redirect()->route('investment.index')->with('flash_message_success', 'Investment Updated Successfully');
        }
    }

    public function destroy($id){
        $invesments = Investor::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_danger','Investment Deleted Successfully');
    }
}
