<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClaimForm;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClaimFormController extends Controller
{
    public function index()
    {
        $claims = ClaimForm::all();
        return view('admin.claim-form.index', compact('claims'));
    }

    public function create()
    {
        $products = ProductDetail::get();
        return view('admin.claim-form.create',compact('products'));
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $claims = new ClaimForm;
            if ($request->hasfile('claim_files')) {
                $image =$request->file('claim_files');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/kyc';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $claims->claim_files = $photo_original_name;
            }
            $claims->product_id = $data['product_id'];
            $claims->claim_name = $data['claim_name'];
            $claims->status = $data['status'];
            $claims->save();
            return redirect()->route('claim.index')->with('flash_message_success', 'Claim Form Added Successfully');
        }
    }

    public function edit($id)
    {
        $claims = ClaimForm::findOrFail($id);
        $products = ProductDetail::get();
        return view('admin.claim-form.edit', compact('claims','products'));
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $claims = ClaimForm::findOrFail($id);

            if ($request->hasfile('claim_files')) {
                $image =$request->file('claim_files');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/claim-form';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $claims->claim_files = $photo_original_name;
            }

            $claims->product_id = $data['product_id'];
            $claims->claim_name = $data['claim_name'];
            $claims->status = $data['status'];
            $claims->update();
            return redirect()->route('claim.index')->with('flash_message_success', 'Claim Form Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $claims = ClaimForm::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success', 'Claim Form Deleted Successfully');
    }
}
