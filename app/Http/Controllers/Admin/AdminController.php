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


    public function dashboard()
    {
        return view('admin.admin_dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

    public function settings()
    {
        $adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        return view('admin.settings.settings', compact('adminDetails'));
    }

    public function chkCurrentPassword(Request $request)
    {
        $data = $request->all();
        if (Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public function updateCurrentPassword(Request $request)
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
