<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BranchList;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;

class BranchListController extends Controller
{
    public function index()
    {
        $branches = BranchList::all();
        return view('admin.branch.index', compact('branches'));
    }

    public function create()
    {
        return view('admin.branch.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $branches = new BranchList;
            if ($request->hasfile('branch_image')) {
                $image_tmp = Input::file('branch_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/branch/default/' . $fileName;
                    $large_image_path = 'images/branch/large/' . $fileName;
                    $medium_image_path = 'images/branch/medium/' . $fileName;
                    $small_image_path = 'images/branch/small/' . $fileName;

                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(866, 457)->save($large_image_path);
                    Image::make($image_tmp)->fit(450, 450)->save($medium_image_path);
                    Image::make($image_tmp)->fit(60, 60)->save($small_image_path);

                    $branches->branch_image = $fileName;
                }
            }

            $branches->branch_title = $data['branch_title'];
            $branches->branch_title_nep = $data['branch_title_nep'];
            $branches->address = $data['address'];
            $branches->address_nep = $data['address_nep'];
            $branches->branch_contact = $data['branch_contact'];
            $branches->branch_fax = $data['branch_fax'];
            $branches->branch_email = $data['branch_email'];
            $branches->branch_incharge = $data['branch_incharge'];
            $branches->branch_incharge_nep = $data['branch_incharge_nep'];
            $branches->position = $data['position'];
            $branches->position_nep = $data['position_nep'];
            $branches->status = $data['status'];
            $branches->save();
            return redirect()->route('branches.index')->with('flash_message_success', 'Agents Added Successfully');
        }
    }

    public function edit($id)
    {
        $branches = BranchList::findOrFail($id);
        return view('admin.branch.edit', compact('branches'));
    }

    public function update(Request $request, $id=null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $branches = BranchList::findOrFail($id);
            if ($request->hasFile('branch_image')) {
                $image_tmp = $request->file('branch_image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/branch/default/' . $fileName;
                    $large_image_path = 'images/branch/large/' . $fileName;
                    $medium_image_path = 'images/branch/medium/' . $fileName;
                    $small_image_path = 'images/branch/small/' . $fileName;

                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(866, 457)->save($large_image_path);
                    Image::make($image_tmp)->fit(450, 450)->save($medium_image_path);
                    Image::make($image_tmp)->fit(60, 60)->save($small_image_path);

                }
            } else if (!empty($data['current_image'])) {
                $fileName = $data['current_image'];
            } else {
                $fileName = '';
            }
            BranchList::where(['id' => $id])->update([
                'branch_title' => $data['branch_title'],
                'branch_title_nep' => $data['branch_title_nep'],
                'address' => $data['address'],
                'address_nep' => $data['address_nep'],
                'branch_contact' => $data['branch_contact'],
                'branch_fax' => $data['branch_fax'],
                'branch_title' => $data['branch_title' ],
                'branch_title_nep' => $data['branch_title_nep'],
                'address' => $data['address'],
                'address_nep' => $data['address_nep'],
                'branch_contact' => $data['branch_contact'],
                'branch_fax' => $data['branch_fax'],
                'branch_email' => $data['branch_email'],
                'branch_incharge' => $data['branch_incharge'],
                'branch_incharge_nep' => $data['branch_incharge_nep'],
                'position' => $data['position'],
                'position_nep' => $data['position_nep'],
                'status' => $data['status'],
                'branch_image' => $fileName
              ]);
            return redirect()->route('branches.index')->with('flash_message_success', 'Branches Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $branches = BranchList::findOrFail($id);
        $branches->delete();
        return redirect()->back()->with('flash_message_success', 'Branch Deleted Successfully');
    }
}
