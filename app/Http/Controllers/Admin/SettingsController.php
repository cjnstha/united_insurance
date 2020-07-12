<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Information;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function addInfos(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $infos = new Information;
            $infos->experience = $data['experience'];
            $infos->customers = $data['customers'];
            $infos->support = $data['support'];
            $infos->stable = $data['stable'];
            $infos->status = $data['status'];
            $infos->save();
            return redirect()->route('infos.create')->with('success_message','Information Added Successfully');
        }
        $infos = Information::all();
        return  view('admin.info.create',compact('infos'));
    }

    public function destroy($id){
        $infos = Information::findOrFail($id)->delete();
        return redirect()->back();
    }
}
