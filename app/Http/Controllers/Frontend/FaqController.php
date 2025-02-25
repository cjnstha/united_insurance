<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
   public function index(){
       $faqs = Faq::all();
       return view('frontend.pages.faqs',compact('faqs'));
   }
}
