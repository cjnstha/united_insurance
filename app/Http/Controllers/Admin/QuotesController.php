<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quotes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuotesController extends Controller
{
    public function index(){
        $quotes = Quotes::latest()->get();
        return view('admin.quotes.index',compact('quotes'));
    }
}
