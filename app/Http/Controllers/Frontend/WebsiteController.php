<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use App\Models\Backend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use App\Models\PlaceBit;
use Intervention\Image\File;
use App\Models\Backend\Subscriber;

class WebsiteController extends Controller
{
    public function home()
    {
        $categories = Category::where('status', 1)->take(4)->get();
        return view('frontend.home', compact('categories'));
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
    public function Bid_store(Request $request)
    {
        //bid form validation
        $today = Carbon::now();
        $request->validate([
            'price' => 'required',
            'dateline' => 'required|after:' . $today,
            'bidDes' => 'required',
            'file' => 'max:1020',
        ]);
        if (PlaceBit::where('user_id', Auth::user()->id)->where('service_id', $request->service_id)->exists()) {
            $notification = array(
                'message' => 'You Already Bid This Service',
                'alert-type' => 'error',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        } else {
            $placeBid = new PlaceBit;
            $placeBid->service_id = $request->service_id;
            $placeBid->user_id = Auth::user()->id;
            $placeBid->price = $request->price;
            $placeBid->dateline = $request->dateline;
            $placeBid->bidDes = $request->bidDes;
            $file = $request->file;
            if ($file) {
                $filename = rand() . '.' . $file->getClientOriginalExtension();
                $location = public_path('uploads/placeBid/');
                $file->move($location,  $filename);
                $placeBid->file = $filename;
            }
            $placeBid->save();
            if ($placeBid) {
                $notification = array(
                    'message' => 'Biding  Successfully! Thank you :)',
                    'alert-type' => 'success',
                ); // returns Notification,
                return redirect()->back()->with($notification);
            }
        }
    } //end bid store

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

    //SellerProfile method
    public function SellerProfile($slug)
    {
        $seller = User::with('profile')->where('user_slug', $slug)->first();
        $sellerId= $seller->id;
        $bidservices=PlaceBit::with('user','service')->where('user_id',$seller->id)->get();
        return view('frontend.pages.sellerProfile', compact('seller','bidservices'));
    }//end method

    public function cateegoryService($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('frontend.pages.categoryService', compact('category'));
    }
    public function Subscribe(Request $request)
    {

        $subscribe = Subscriber::create([
            'email' => $request->email,
        ]);

        if ($subscribe) {
            $notification = array(
                'message' => 'Thank you! For Your Subscription:)',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        }
    }

    public function product()
    {
        $products = Product::with('author')->orderby('created_at', "ASC")->get();
        return view('frontend.pages.products', compact('products'));
    }

    public function productView($slug)
    {
        $product = Product::with('author')->where('product_slug', $slug)->first();
        return view('frontend.pages.productView', compact('product'));
    }

    public function productBid($slug)
    {
        $product = Product::where('product_slug', $slug)->first();
        return view('frontend.pages.productBid', compact('product'));
    }

    //method for search
    public function Search(Request $request){
        $todaty = Carbon::now();
        $searches= Service::with('user')
        ->orderBy('id','DESC')
        ->where('status',1)
        ->where('EndDate', '>=', $todaty)
        ->where('title','LIKE','%'.$request->search.'%')->get();
        return view('frontend.pages.search',compact('searches'));
    }
}
