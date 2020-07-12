<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $faqs = Faq::all();
        return view('admin.faq.index',compact('faqs'));
    }

    public function create(){
        return view('admin.faq.create');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $faqs = new Faq;

            $faqs->title = $data['title'];
            $faqs->title_nep = $data['title_nep'];
            $faqs->details = $data['details'];
            $faqs->details_nep = $data['details_nep'];
            $faqs->status = $data['status'];
            $faqs->save();
            return redirect()->route('faqs.index')->with('flash_message_success','Citien Charter added successfully');
        }
    }

    public function edit($id){

        $faqs = Faq::findOrFail($id);
        return view('admin.faq.edit',compact('faqs'));
    }

    public function update(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();

            $faqs = Faq::findOrFail($id);

            $faqs->title = $data['title'];
            $faqs->title_nep = $data['title_nep'];
            $faqs->details = $data['details'];
            $faqs->details_nep = $data['details_nep'];
            $faqs->status = $data['status'];
            $faqs->update();
            return redirect()->route('faqs.index')->with('flash_message_success','Citizen Charter updated successfully');
        }
    }

    public function destroy($id){
        $faqs = Faq::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success','Faq Deleted Successfully');
    }

}
