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

            $citizens = new Faq;

            $citizens->title = $data['title'];
            $citizens->title_nep = $data['title_nep'];
            $citizens->details = $data['details'];
            $citizens->details_nep = $data['details_nep'];
            $citizens->status = $data['status'];
            $citizens->save();
            return redirect()->route('faqs.index')->with('flash_message_success','Citien Charter added successfully');
        }
    }
}
