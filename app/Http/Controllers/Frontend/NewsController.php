<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(){
        $news = News::latest()->paginate(3);
        return view('frontend.pages.news',compact('news'));
    }

    public function detail($id){
        $news = News::findOrFail($id);
        $recents = News::orderBy('created_at', 'desc')->get();
        return view('frontend.pages.news-detail',compact('news','recents'));

    }
}
