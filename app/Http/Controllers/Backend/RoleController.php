<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::where('role_status', 1)->get();
        return view('backend.pages.role.index', compact('roles'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'role_name' => 'required|unique:roles,role_slug,' . $slug . ',role_name',
            'role_comments' => 'required',
        ]);

        Role::where('role_slug', $slug)->update([
            'role_name' => $request->role_name,
            'role_slug' => 'admin',
            'role_comments' => $request->role_comments,
        ]);

        $notification = array(
            'message' => 'Role Update Successfully!',
            'alert-type' => 'success',
        ); // returns Notification,

        return redirect()->back()->with($notification);
    }

    public function destroy($slug)
    {
        $role = Role::where('role_slug', $slug)->update([
            'role_status' => 0,
        ]);

        $notification = array(
            'message' => 'Role Delete Successfully!',
            'alert-type' => 'success',
        ); // returns Notification,

        return redirect()->back()->with($notification);
    }
}
