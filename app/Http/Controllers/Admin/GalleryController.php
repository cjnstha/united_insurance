<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $galleries = new Gallery;
            $galleries->title = $data['title'];

            if ($request->hasfile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/gallery/default/' . $fileName;
                    $large_image_path = 'images/gallery/large/' . $fileName;
                    $medium_image_path = 'images/gallery/medium/' . $fileName;
                    $small_image_path = 'images/gallery/small/' . $fileName;


                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(449, 366)->save($large_image_path);
                    Image::make($image_tmp)->fit(386, 315)->save($medium_image_path);
                    Image::make($image_tmp)->fit(200, 200)->save($small_image_path);


                    $galleries->image = $fileName;
                }
            }
            $galleries->status = $data['status'];
            $galleries->save();
            return redirect()->route('galleries.index')->with('success_message', 'Gallery Added Successfully');
        }
    }

    public function edit($id)
    {
        $galleries = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('galleries'));
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $galleries = Gallery::findOrFail($id);

            if ($request->hasFile('image')) {
                $image_tmp = $request->file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/gallery/default/' . $fileName;
                    $large_image_path = 'images/gallery/large/' . $fileName;
                    $medium_image_path = 'images/gallery/medium/' . $fileName;
                    $small_image_path = 'images/gallery/small/' . $fileName;

                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(449, 366)->save($large_image_path);
                    Image::make($image_tmp)->fit(386, 315)->save($medium_image_path);
                    Image::make($image_tmp)->fit(200, 200)->save($small_image_path);

                }
            } else if (!empty($data['current_image'])) {
                $fileName = $data['current_image'];
            } else {
                $fileName = '';
            }
            Gallery::where(['id' => $id])->update(['title' => $data['title'], 'image' => $fileName, 'status' => $data['status']]);
            return redirect()->route('galleries.index')->with('success_message', 'Gallery Added Successfully');
        }
    }

    public function destroy($id){
        $galleries = Gallery::findOrFail($id)->delete();
        return redirect()->back()->with('error_message','Gallery Deleted Successfully');
    }
}
