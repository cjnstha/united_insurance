<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index(){
        return view('admin.products.index');
    }

    public function typeCreate(){
        return view('admin.produts.type');
    }
//    public function index(){
//        return view('admin.products.index');
//    }

    public function create(){
        return view('admin.products.create');
    }
}
