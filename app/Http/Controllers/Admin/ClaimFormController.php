<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClaimForm;
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
        return view('admin.claim-form.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $claims = new ClaimForm;
            $claims->claim_name = $data['claim_name'];
            $claims->claim_files = $data['claim_files'];
            $claims->status = $data['status'];
            $claims->save();
            return redirect()->route('claim.index')->with('flash_message_success', 'Claim Form Added Successfully');
        }
    }

    public function edit($id)
    {
        $claims = ClaimForm::findOrFail($id);
        return view('admin.claim-form.edit', compact('claims'));
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $claims = ClaimForm::findOrFail($id);
            $claims->claim_name = $data['claim_name'];
            $claims->claim_files = $data['claim_files'];
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
