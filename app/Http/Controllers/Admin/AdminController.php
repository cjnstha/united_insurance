<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Admin;
use App\Role;
class AdminController extends Controller
{


	public function login(Request $request){
	    if($request->isMethod('post')){
	        $data = $request->all();
//	        echo "<prev>"; print_r($data); die;

            $validatedData = $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required',
            ]);

            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return redirect('admin/dashboard');
            }
            else{
                Session::flash('error_message','Invalid Email or Password');
                return redirect()->back();
            }
        }
		return view('admin.admin_login');
	}

	public function dashboard(){
		return view('admin.admin_dashboard');
	}

	public function viewUsers(){
	    $admin = Admin::all();
	    return view('admin.usermgmt.view_user',compact('admin'));
    }

    public function addUsers(Request $request){
	    $roles = Role::all();
	    if($request->isMethod('post')){
	        $data = $request->all();
//	        $adminCount = Admin::where('email',$data['email'])->count();
	        $admin = new Admin;
            $admin->email = $data['email'];
            $admin->password = md5($data['password']);
            $admin->status = $data['status'];
            $admin->type = $data['type'];
            $admin->save();
            return redirect('/admin/view-users')->with('flash_message_success','New Admin added Successfully');
        }
	    return view('admin.usermgmt.add_users',compact('roles'));
    }
	public function logout(){
	    Auth::guard('admin')->logout();
	    return redirect('/admin');
    }
}
