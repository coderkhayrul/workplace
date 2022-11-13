<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function websiteVisit()
    {
        return view('welcome');
    }

    public function Weblogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
