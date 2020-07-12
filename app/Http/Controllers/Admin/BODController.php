<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BOD;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class BODController extends Controller
{
    public function index()
    {
        $bods = BOD::all();
        return view('admin.bod.index', compact('bods'));
    }

    public function create()
    {
        return view('admin.bod.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        if ($request->isMethod('post')) {
            $data = $request->all();
            $bod = new BOD;
            if ($request->hasfile('bod_imag')) {
                $image_tmp = Input::file('bod_imag');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/bod/default/' . $fileName;
                    $large_image_path = 'images/bod/large/' . $fileName;
//                    $medium_image_path = 'images/bod/medium/' . $fileName;
//                    $small_image_path = 'images/bod/small/' . $fileName;

                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(253, 235)->save($large_image_path);
//                    Image::make($image_tmp)->fit(450, 450)->save($medium_image_path);
//                    Image::make($image_tmp)->fit(60, 60)->save($small_image_path);

                    $bod->bod_imag = $fileName;
                }
            }
            $bod->bod_name = $data['bod_name'];
            $bod->experience = $data['experience'];
            $bod->email = $data['email'];
            $bod->contact = $data['contact'];
            $bod->bod_name_nep = $data['bod_name_nep'];
            $bod->bod_position = $data['bod_position'];
            $bod->bod_position_nep = $data['bod_position_nep'];
            $bod->bod_message = $data['bod_message'];
            $bod->bod_message_nep = $data['bod_message_nep'];
            $bod->status = $data['status'];
            $bod->hierarchy = $data['hierarchy'];
            $bod->updated_at = Carbon::today();
            $bod->save();
            return redirect()->route('bod.index')->with('flash_message_success', 'Board of Director added successfully');
        }
    }

    public function edit($id)
    {
        $bods = BOD::findOrFail($id);
        return view('admin.bod.edit', compact('bods'));
    }

    public function update(Request $request, $id)
    {
//        dd($request->all());
        if ($request->isMethod('post')) {
            $data = $request->all();
            $bod = BOD::findOrFail($id);
            if ($request->hasFile('bod_imag')) {
                $image_tmp = $request->file('bod_imag');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/bod/default/' . $fileName;
                    $large_image_path = 'images/bod/large/' . $fileName;
                    $medium_image_path = 'images/bod/medium/' . $fileName;
                    $small_image_path = 'images/bod/small/' . $fileName;

                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(898, 836)->save($large_image_path);
                    Image::make($image_tmp)->fit(450, 450)->save($medium_image_path);
                    Image::make($image_tmp)->fit(60, 60)->save($small_image_path);

                }
            } else if (!empty($data['current_image'])) {
                $fileName = $data['current_image'];
            } else {
                $fileName = '';
            }

            BOD::where(['id'=> $id])->update([
                'bod_name' => $data['bod_name'],
                'experience' => $data['experience'],
                'email' => $data['email'],
                'contact' => $data['contact'],
                'bod_name_nep' => $data['bod_name_nep'],
                'bod_position' => $data['bod_position'],
                'bod_position_nep' => $data['bod_position_nep'],
                'bod_message' => $data['bod_message'],
                'bod_message_nep' => $data['bod_message_nep'],
                'status' => $data['status'],
                'hierarchy'=>$data['hierarchy'],
                'bod_imag' => $fileName,
        ]);
            return redirect()->route('bod.index')->with('flash_message_success', 'Board of Director updated successfully');
        }
    }

    public function destroy($id)
    {
        $bods = BOD::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_success', 'BOD Profile deleted successfully');

    }

}
