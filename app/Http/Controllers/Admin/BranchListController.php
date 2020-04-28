<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BranchList;
use Illuminate\Http\Request;

class BranchListController extends Controller
{
    public function index()
    {
        $branches = BranchList::all();
        return view('admin.branch.index', compact('branches'));
    }

    public function create()
    {
        return view('admin.branch.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $branches = new BranchList;
            $branches->branch_image = request()->file('branch_image')->store('branch', 'public');
            $branches->branch_title = $data['branch_title'];
            $branches->branch_title_nep = $data['branch_title_nep'];
            $branches->address = $data['address'];
            $branches->address_nep = $data['address_nep'];
            $branches->branch_contact = $data['branch_contact'];
            $branches->branch_fax = $data['branch_fax'];
            $branches->branch_email = $data['branch_email'];
            $branches->branch_incharge = $data['branch_incharge'];
            $branches->branch_incharge_nep = $data['branch_incharge_nep'];
            $branches->position = $data['position'];
            $branches->position_nep = $data['position_nep'];
            $branches->status = $data['status'];
            $branches->save();
            return redirect()->route('branches.index')->with('flash_message_success', 'Agents Added Successfully');
        }
    }

    public function edit($id)
    {
        $branches = BranchList::findOrFail($id);
        return view('admin.branch.edit', compact('branches'));
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $branches = BranchList::findOrFail($id);
            $branches->branch_image = request()->file('branch_image')->store('branch', 'public');
            $branches->branch_title = $data['branch_title'];
            $branches->branch_title_nep = $data['branch_title_nep'];
            $branches->address = $data['address'];
            $branches->address_nep = $data['address_nep'];
            $branches->branch_contact = $data['branch_contact'];
            $branches->branch_fax = $data['branch_fax'];
            $branches->branch_email = $data['branch_email'];
            $branches->branch_incharge = $data['branch_incharge'];
            $branches->branch_incharge_nep = $data['branch_incharge_nep'];
            $branches->position = $data['position'];
            $branches->position_nep = $data['position_nep'];
            $branches->save();
            return redirect()->route('branches.index')->with('flash_message_success', 'Branches Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $branches = BranchList::findOrFail($id);
        $branches->delete();
        return redirect()->back()->with('flash_message_success', 'Branch Deleted Successfully');
    }
}
