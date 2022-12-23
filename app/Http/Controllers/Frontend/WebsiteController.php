<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use App\Models\PlaceBit;

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

    //Bid store method
    public function Bid_store(Request $request){
        if (PlaceBit::where('user_id', Auth::user()->id )->where('service_id',$request->service_id)->exists()) {
            $notification = array(
                'message' => 'You Already Bid This Service',
                'alert-type' => 'error',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        }
        else{
            $placeBid = new PlaceBit;
            $placeBid->service_id = $request->service_id;
            $placeBid->user_id = Auth::user()->id;
            $placeBid->price = $request->price;
            $placeBid->dateline = $request->dateline;
            $placeBid->file = 'file';
            $placeBid->bidDes = $request->bidDes;
            $placeBid->save();
            if ($placeBid) {
                $notification = array(
                    'message' => 'Biding  Successfully! Thank you :)',
                    'alert-type' => 'success',
                ); // returns Notification,
                return redirect()->back()->with($notification);
            }
        }


    }//end bid store

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

    public function cateegoryService($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('frontend.pages.categoryService', compact('category'));
    }
}
