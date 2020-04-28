<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;


class AgentController extends Controller
{
     public function index(){
         $agents = Agent::all();
        return view('admin.agents.index',compact('agents'));
    }

    public function create(){
        return view('admin.agents.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $agents = new Agent;
            $agents->agent_name = $data['agent_name'];
            $agents->agent_code = $data['agent_code'];
            $agents->email = $data['email'];
            $agents->contact_no = $data['contact_no'];
            $agents->license_no = $data['license_no'];
            $agents->agent_address = $data['agent_address'];
            $agents->status = $data['agent_status'];
            $agents->save();
            return redirect()->route('agents.index')->with('flash_message_success','Agents Added Successfully');
        }
    }

     public function edit($id){
       $agents = Agent::findOrFail($id);
       return view('admin.agents.edit',compact('agents'));
    }

    public function update( Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            $agents = Agent::findOrFail($id);
            $agents->agent_name = $data['agent_name'];
            $agents->agent_code = $data['agent_code'];
            $agents->agent_address = $data['agent_address'];
            $agents->status = $data['agent_status'];
            $agents->update();
            return redirect()->route('agents.index')->with('flash_message_success','Agents Updated Successfully');
        }
    }

    public function destroy($id){
       $agents = Agent::findOrFail($id);
       $agents->delete();
       return redirect()->back()->with('flash_message_success','Agent Deleted Successfully');
    }
}
