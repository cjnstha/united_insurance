<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Surveyor;
use Illuminate\Http\Request;

class SurveyorsController extends Controller
{
    public function index()
    {
        $surveyors = Surveyor::all();
        return view('admin.surveyors.index', compact('surveyors'));
    }

    public function create()
    {
        return view('admin.surveyors.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $surveyors = new Surveyor;
            $surveyors->name = $data['name'];
            $surveyors->address = $data['address'];
            $surveyors->post = $data['post'];
            $surveyors->contact_no = $data['contact_no'];
            $surveyors->license_no = $data['license_no'];
            $surveyors->class = $data['class'];
            $surveyors->status = $data['status'];
            $surveyors->save();
            return redirect()->route('surveyors.index')->with('flash_message_success', 'Surveyors Added Successfully');
        }
    }

    public function edit($id)
    {
        $surveyors = Surveyor::findOrFail($id);
        return view('admin.surveyors.edit', compact('surveyors'));
    }

    public function update(Request $request, $id)
    {
//        $surveyors = Surveyor::findOrFail($id);
        Surveyor::findOrFail($id)->update([
            'name' => request('name'),
            'address' => request('address'),
            'post' => request('post'),
            'contact_no' => request('contact_no'),
            'license_no' => request('license_no'),
            'class' => request('class'),
            'status' => request('status'),
        ]);
        return redirect()->route('surveyors.index')->with('message_success','Surveyors added successfully');
    }

    public function destroy($id){
        $surveyors = Surveyor::findOrFail($id)->delete();
        return redirect()->back()->with('message_success','Deleted Successfully');
    }
}
