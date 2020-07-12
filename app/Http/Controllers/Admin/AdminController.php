<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Session;
use App\Admin;
use App\Role;

class AdminController extends Controller
{


    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
//	        echo "<prev>"; print_r($data); die;

            $validatedData = $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required',
            ]);

            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect('admin/dashboard');
            } else {
                Session::flash('error_message', 'Invalid Email or Password');
                return redirect()->back();
            }
        }
        return view('admin.admin_login');
    }

    public function userMgmt()
    {
        $users = Admin::get();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.add_users');
    }

    public function addUsers(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            /*echo "<pre>";print_r($data); die;*/
            $adminCount = Admin::where('email', $data['email'])->count();
            if ($adminCount > 0) {
                return redirect()->back()->with('flash_message_error', 'User already exists! Please choose another.');
            } else {
                if (empty($data['status'])) {
                    $data['status'] = 0;
                }
                if ($data['type'] == "Admin") {
                    $admin = new Admin;
                    $admin->type = $data['type'];
                    $admin->name = $data['name'];
                    $admin->email = $data['email'];
                    $admin->password = md5($data['password']);
                    $admin->status = $data['status'];
                    $admin->save();
                    return redirect()->back()->with('flash_message_success', 'Admin added successfully!');
                } else if ($data['type'] == "Editor") {
                    if (empty($data['product_access'])) {
                        $data['product_access'] = 0;
                    }
                    if (empty($data['news_access'])) {
                        $data['news_access'] = 0;
                    }
                    if (empty($data['buy_access'])) {
                        $data['buy_access'] = 0;
                    }
                    if (empty($data['claim_access'])) {
                        $data['claim_access'] = 0;
                    }
                    if (empty($data['quotes_access'])) {
                        $data['quotes_access'] = 0;
                    }
                    $admin = new Admin;
                    $admin->type = $data['type'];
                    $admin->name = $data['name'];
                    $admin->email = $data['email'];
                    $admin->password = Hash::make($data['password']);
                    $admin->status = $data['status'];
                    $admin->product_access = $data['product_access'];
                    $admin->news_access = $data['news_access'];
                    $admin->quotes_access = $data['quotes_access'];
                    $admin->buy_access = $data['buy_access'];
                    $admin->claim_access = $data['claim_access'];
                    $admin->save();
                    return redirect()->back()->with('flash_message_success', 'User added successfully!');
                }

            }
        }
    }


    public
    function editUsers($id = null)
    {
//        if(Gate::denies('edit-users')){
//            return redirect()->route('users.index');
//        }

//        $roles = Role::all();
        $adminDetails = Admin::findOrFail($id);
        return view('admin.users.update_admin_details', compact('adminDetails'));
    }

    public
    function updateAdminDetails(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $adminDetails = Admin::findOrFail($id);
            $rules = [
                'name' => 'required|regex:/^[\pL\s\-]+$/u ',
                'mobile' => 'required|numeric|min:10',

            ];
            $customMessages = [
                'name.required' => 'Name is required',
                'name.alpha' => 'Valid Name is required',
                'mobile.numeric' => 'Mobile Number exceeds the 10 digits',
                'mobile.required' => 'Valid Mobile Number is required',

            ];
            $this->validate($request, $rules, $customMessages);
            //Upload Image//
            if ($request->hasFile('image')) {
                $image_tmp = $request->file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/admin_images/default/' . $fileName;
                    $small_image_path = 'images/admin_images/small/' . $fileName;

                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(60, 60)->save($small_image_path);

                }
            } else if (!empty($data['current_image'])) {
                $fileName = $data['current_image'];
            } else {
                $fileName = '';
            }
            //Update Admin Details//
            Admin::where(['id' => $id])->update(['type' => $data['type'], 'name' => $data['name'], 'mobile' => $data['mobile'], 'image' => $fileName]);
            Session::flash('success_message', 'Admin Details Updated Successfully');
            return redirect()->route('users.index');

        }

    }


    public
    function destroy($id)
    {
        $admin = Admin::findOrFail($id)->delete();
        return redirect()->back();

    }

    public
    function dashboard()
    {
        return view('admin.admin_dashboard');
    }

    public
    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

    public
    function settings()
    {
        $adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        return view('admin.settings.settings', compact('adminDetails'));
    }

    public
    function chkCurrentPassword(Request $request)
    {
        $data = $request->all();
        if (Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public
    function updateCurrentPassword(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)) {
                //Check if new and current password matching//
                if ($data['new_pwd'] == $data['confirm_pwd']) {
                    Admin::where('id', Auth::guard('admin')->user()->id)->update(['password' => bcrypt($data['new_pwd'])]);
                    Session::flash('success_message', 'Password has been updated successfully');
                } else {
                    Session::flash('error_message', 'Your Confirm Password is didnot match with new password');

                }
            } else {
                Session::flash('error_message', 'Your Current Password is Incorrect');
            }
            return redirect()->back();
        }
    }


}
