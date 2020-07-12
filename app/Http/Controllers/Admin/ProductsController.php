<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ProductBenefit;
use App\Models\ProductDetail;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = ProductDetail::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.addProduct');
    }

    public function store(Request $request)
    {
//        dd(request()->all());

        if ($request->hasfile('product_image')) {
            $image = $request->file('product_image');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/products';
            $photo_name = md5(time());
            $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name);
            $product_image = $photo_original_name;
        }

        if ($request->hasfile('product_icon')) {
            $image = $request->file('product_icon');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/products';
            $photo_name = md5(time());
            $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name);
            $product_icon = $photo_original_name;
        }

        if ($request->hasfile('file_pdf')) {
            $image = $request->file('file_pdf');
            $ext = $image->getClientOriginalExtension();
            $destination = 'file/products';
            $photo_name = md5(time());
            $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name);
            $product_pdf = $photo_original_name;
        }
        if ($request->hasfile('file_doc')) {
            $image = $request->file('file_doc');
            $ext = $image->getClientOriginalExtension();
            $destination = 'file/products';
            $photo_name = md5(time());
            $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name);
            $product_doc = $photo_original_name;
        }

        $products = ProductDetail::create([
            'product_name' => request('product_name'),
            'product_name_nep' => request('product_name_nep'),
            'product_image' => $product_image,
            'product_icon' => $product_icon,
            'details' => request('details'),
            'details_nep' => request('details_nep'),
            'slider1' => request('slider1'),
            'slider2' => request('slider2'),
            'slider3' => request('slider3'),
            'slider1_nep' => request('slider1_nep'),
            'slider2_nep' => request('slider2_nep'),
            'slider3_nep' => request('slider3_nep'),
            'file_pdf' => $product_pdf,
            'file_doc' => $product_doc,
            'claim_form'=>request('claim_form'),
            'proposal_form'=>request('proposal_form'),
            'status' => request('status'),
        ]);
        return redirect()->route('products.index')->with('flash_message_success', 'Products Details Added Successfully');
    }

    public function edit($id)
    {

        $products = ProductDetail::findOrFail($id);
        return view('admin.products.editProduct', compact('products'));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasfile('product_icon')) {
            $image = $request->file('product_icon');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/products';
            $photo_name = md5(time());
            $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name);
            $product_icon = $photo_original_name;
        }

        if ($request->hasfile('product_image')) {
            $image = $request->file('product_image');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/products';
            $photo_name = md5(time());
            $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name);
            $product_image = $photo_original_name;
        }
        if ($request->hasfile('file_pdf')) {
            $image = $request->file('file_pdf');
            $ext = $image->getClientOriginalExtension();
            $destination = 'file/products';
            $photo_name = md5(time());
            $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name);
            $product_pdf = $photo_original_name;
        }
        if ($request->hasfile('file_doc')) {
            $image = $request->file('file_doc');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/products';
            $photo_name = md5(time());
            $photo_original_name = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name);
            $product_doc = $photo_original_name;
        }

        ProductDetail::findOrFail($id)->update([
            'product_name' => request('product_name'),
            'product_name_nep' => request('product_name_nep'),
            'product_image' => $product_image,
            'product_image' => $product_icon,
            'details' => request('details'),
            'details_nep' => request('details_nep'),
            'slider1' => request('slider1'),
            'slider2' => request('slider2'),
            'slider3' => request('slider3'),
            'slider1_nep' => request('slider1_nep'),
            'slider2_nep' => request('slider2_nep'),
            'slider3_nep' => request('slider3_nep'),
            'file_pdf' => $product_pdf,
            'file_doc' => $product_doc,
            'claim_form'=>request('claim_form'),
            'proposal_form'=>request('proposal_form'),
            'status' => request('status')
        ]);
        return redirect()->route('products.index')->with('flash_message_success', 'Products Details Updated Successfully');
    }

    public function destroy($id)
    {
        $products = ProductDetail::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success', 'Products Deleted Successfully');
    }
}
