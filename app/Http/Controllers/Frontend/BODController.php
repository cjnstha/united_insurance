<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BOD;
use Illuminate\Http\Request;

class BODController extends Controller
{
    public function index(){
        $chairman = BOD::where('hierarchy','1')->get();
        $bods = BOD::where('hierarchy', '!=', '1')->orderBy('hierarchy','asc')->get();
        return view('frontend.pages.bod',compact('bods','chairman'));
    }

    public function detail($id){
        $details = BOD::findOrFail($id);
        return view('frontend.pages.bod-detail',compact('details'));
    }
}
