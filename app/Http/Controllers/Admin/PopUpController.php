<?php

namespace App\Http\Controllers\Admin;

use App\Models\PopUp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class PopUpController extends Controller
{
    public function index()
    {
        $popups = PopUp::latest()->get();
        return view('admin.pop-up.index', compact('popups'));
    }

    public function create()
    {
        return view('admin.pop-up.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $popups = new PopUp;

            if ($request->hasfile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/popup/default/' . $fileName;
                    $large_image_path = 'images/popup/large/' . $fileName;


                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(898, 836)->save($large_image_path);


                    $popups->image = $fileName;
                }
            }
            $popups->popup_title = $data['popup_title'];
            $popups->popup_title_nep = $data['popup_title_nep'];
            $popups->description = $data['description'];
            $popups->description_nep = $data['description_nep'];
            $popups->status = $data['status'];
            $popups->save();
            return redirect()->route('popups.index')->with('success_message','New Pop Up has been added successfully');
        }

    }

    public function edit($id)
    {
        $popups = PopUp::findOrFail($id);
        return view('admin.pop-up.edit',compact('popups'));
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            if ($request->hasFile('image')) {
                $image_tmp = $request->file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/popup/default/' . $fileName;
                    $large_image_path = 'images/popup/large/' . $fileName;

                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(898, 836)->save($large_image_path);

                }
            } else if (!empty($data['current_image'])) {
                $fileName = $data['current_image'];
            } else {
                $fileName = '';
            }
             PopUp::where(['id' => $id])->update([
                'popup_title' => $data['popup_title'],
                'popup_title_nep' => $data['popup_title_nep'],
                'description' => $data['description'],
                'description_nep' => $data['description_nep'],
                'status' => $data['status'],
                'image' => $fileName,
            ]);
            return redirect()->route('popups.index')->with('success_message','New Pop Up has been updated successfully');
        }
    }

    public function destroy($id){
        $popups = PopUp::findOrFail($id)->delete();
        return redirect()->back()->with('error_message', 'PopUp Deleted Successfully');
    }
}
