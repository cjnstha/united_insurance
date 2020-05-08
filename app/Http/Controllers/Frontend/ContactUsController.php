<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
//use Illuminate\Validation\Validator;


class ContactUsController extends Controller
{
     public function contact(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//Send Contact Email//
    		$email = "coolsijan12@gmail.com";
    		$messageData = [
    			'name'=>$data['name'],
    			'email'=>$data['email'],
    			'subject'=>$data['subject'],
    			'message'=>$data['message']
    		];

    		Mail::send('email.enquiry',$messageData,function($message)use($email){
    			$message->to($email)->subject('Enquiry from E-Shoppe Webite');
    		});

    		return redirect()->back()->with('flash_message_success','Thanks for your Enquiry. We wil get back to you soon.');
    	}
    	return view('frontend.pages.contact');
    }
}
