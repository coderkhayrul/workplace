<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use Carbon\Carbon;

class WebsiteController extends Controller
{
    public function home()
    {
        $todaty= Carbon::now();
        $services= Service::where('status',1)->where('EndDate','>=',$todaty)->OrderBy('created_at','DESC')->limit(15)->get();
        return view('frontend.home',compact('services'));
    }
    public function profile($slug)
    {
        return view('frontend.pages.profile');
    }

    public function Weblogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
