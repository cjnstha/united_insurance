<?php

namespace App\Http\Controllers\Admin;

use App\Models\PolicyProposal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PolicyProposalController extends Controller
{
     public function index(){
        $policies = PolicyProposal::all();
        return view('admin.policy-proposal.index',compact('policies'));
    }

    public function create(){
        return view('admin.policy-proposal.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $policies = new PolicyProposal;
            $policies->policy_name = $data['policy_name'];
            $policies->policy_file = $data['policy_file'];
            $policies->status = $data['status'];
            $policies->save();
            return redirect()->route('policyForm.index')->with('flash_message_success','Policy Proposal Form Added Successfully');
        }
    }

    public function edit($id){
        $policies = PolicyProposal::findOrFail($id);
        return view('admin.policy-proposal.edit',compact('policies'));
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $policies = PolicyProposal::findOrFail($id);
            $policies->policy_name = $data['policy_name'];
            $policies->policy_file = $data['policy_file'];
            $policies->status = $data['status'];
            $policies->update();
            return redirect()->route('policyForm.index')->with('flash_message_success', 'Policy Proposal Form Updated Successfully');
        }
    }

    public function destroy($id){
        $policies = PolicyProposal::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success','Policy Proposal Form Deleted Successfully');
    }
}
