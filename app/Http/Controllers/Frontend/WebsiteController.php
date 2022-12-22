<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;

class WebsiteController extends Controller
{
    public function home()
    {
        $todaty = Carbon::now();
        $services = Service::where('status', 1)->where('EndDate', '>=', $todaty)->OrderBy('created_at', 'DESC')->limit(15)->get();
        return view('frontend.home', compact('services'));
    }
    public function profile($slug)
    {
        return view('frontend.pages.profile');
    }

    //place bid page show method
    public function PlaceBid(string $slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('frontend.pages.plabeBid', compact('service'));
    } //end method

    public function Weblogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function singleService(string $slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('frontend.pages.singleService', compact('service'));
    }

    public function buyerProfile($slug)
    {
        $buyer = User::where('user_slug', $slug)->first();
        return view('frontend.pages.buyerProfile', compact('buyer'));
    }
}
