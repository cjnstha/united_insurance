<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BOD;
use Carbon\Carbon;

class BODController extends Controller
{
    public function index(){
        $bods = BOD::all();
        return view('admin.bod.index',compact('bods'));
    }

    public function create(){
        return view('admin.bod.create');
    }

    public function store(Request $request){
//        dd($request->all());
        if($request->isMethod('post')){
            $data = $request->all();
            $bod = new BOD;
            if ($request->hasfile('image')) {
                $image =$request->file('image');
                $ext = $image->getClientOriginalExtension();
                $destination = 'images/bod';
                $photo_name = md5(time());
                $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
                $image->move($destination, $photo_original_name);
                $bod->bod_imag = $photo_original_name;
            }
            $bod->bod_name = $data['bod_name'];
            $bod->bod_name_nep = $data['bod_name_np'];
            $bod->bod_position = $data['bod_position'];
            $bod->bod_position_nep = $data['bod_position_np'];
            $bod->bod_message = $data['bod_message'];
            $bod->bod_message_nep = $data['bod_message_np'];
            $bod->status = $data['status'];
            $bod->updated_at = Carbon::today();
            $bod->save();
            return redirect()->route('bod.index')->with('flash_message_success','Board of Director added successfully');
        }
    }
}
