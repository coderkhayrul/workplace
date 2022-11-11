<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
    } //end method

     public function blank(){
        return view('backend.blank');
    } //end method

    public function formDesign(){
        return view('backend.formDesign');
    } //end method
}
