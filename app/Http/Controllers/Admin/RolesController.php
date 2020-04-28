<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;

class RolesController extends Controller
{
    public function viewRole(){
        $roles = Role::all();
        return view('admin.roles.index',compact('roles'));
    }

    public function addRoles(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $roles = new Role;
            $roles->name = $data['name'];
            $roles->save();
            return redirect('/admin/view-roles')->with('flash_message_success','Roles added Successfully');
        }
        return view('admin.roles.index');
    }
}
