<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Admin Dashboard Methord
    public function dashboard(){
        return view('backend.dashboard');
    } //end method

    // Admin Logout Methord
    public function logout()
    {
        Auth::logout();
        $notification = array(
            'message' => 'Successfully Logout',
            'alert-type' => 'success',
        ); // returns Notification,

        return redirect()->route('login')->with($notification);
    }

    // Application Cache Clear Methord
    public function cacheClear()
    {
        Artisan::call('cache:clear');
        $notification = array(
            'message' => 'Application Cache Clear',
            'alert-type' => 'success',
        ); // returns Notification,

        return redirect()->back()->with($notification);
    }

    public function blank(){
        return view('backend.blank');
    } //end method

    public function formDesign(){
        return view('backend.formDesign');
    } //end method
}
