<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact(){
        $contacts = ContactUs::latest()->get();
        return view('admin.settings.contact',compact('contacts'));
    }
}
