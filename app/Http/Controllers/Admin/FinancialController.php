<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Financial;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function index()
    {
        $financials = Financial::all();
        return view('admin.financial-report.index', compact('financials'));
    }

    public function create()
    {
        return view('admin.financial-report.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $financials = new Financial;
            //Upload Doucments//
            if ($request->hasfile('file_name')) {
                $image = $request->file('file_name');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/financial';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $financials->file_name = $photo_original_name;
            }
            $financials->name = $data['name'];
            $financials->status = $data['status'];
            $financials->save();
            return redirect()->route('financial.index')->with('flash_message_success', 'Quarterly Report Added Successfully');
        }
    }

    public function edit($id)
    {
        $financials = Financial::findorFail($id);
        return view('admin.financial-report.edit', compact('financials'));
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $financials = Quarterly::findorFail($id);
            //Upload Doucments//
            if ($request->hasfile('file_name')) {
                $image = $request->file('file_name');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/financial';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $financials->file_name = $photo_original_name;
            }
            $financials->name = $data['name'];
            $financials->status = $data['status'];
            $financials->update();
            return redirect()->route('quarter.index')->with('flash_message_success', 'Financial Report Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $financials = Financial::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success', 'Financial Report Deleted Successfully');
    }
}
