<?php

namespace App\Http\Controllers\Admin;

use App\Models\PolicyProposal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PolicyProposalController extends Controller
{
    public function index()
    {
        $policies = PolicyProposal::all();
        return view('admin.policy-proposal.index', compact('policies'));
    }

    public function create()
    {
        return view('admin.policy-proposal.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $policies = new PolicyProposal;
            //Upload Doucments//
            if ($request->hasfile('policy_file')) {
                $image = $request->file('policy_file');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/policy-proposal';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $policies->policy_file = $photo_original_name;
            }
            $policies->policy_name = $data['policy_name'];
            $policies->policy_file = request()->file('policy_file')->store('policy', 'public');
            $policies->status = $data['status'];
            $policies->save();
            return redirect()->route('policyForm.index')->with('flash_message_success', 'Policy Proposal Form Added Successfully');
        }
    }

    public function edit($id)
    {
        $policies = PolicyProposal::findOrFail($id);
        return view('admin.policy-proposal.edit', compact('policies'));
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $policies = PolicyProposal::findOrFail($id);

            //Upload Doucments//
            if ($request->hasfile('policy_file')) {
                $image = $request->file('policy_file');
                $ext = $image->getClientOriginalExtension();
                $destination = 'file/policy-proposal';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $policies->policy_file = $photo_original_name;
            }

            $policies->policy_name = $data['policy_name'];
            $policies->status = $data['status'];
            $policies->update();
            return redirect()->route('policyForm.index')->with('flash_message_success', 'Policy Proposal Form Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $policies = PolicyProposal::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success', 'Policy Proposal Form Deleted Successfully');
    }
}
