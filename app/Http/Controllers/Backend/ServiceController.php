<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\PlaceBit;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\ServiceSubmite;


class ServiceController extends Controller
{

    //service index method
    public function index()
    {
        $services = Service::with('user', 'category')->where('status', 1)->OrderBy('EndDate', 'ASC')->get();
        // $TotalServiceCount = $services->count();
        $categories = Category::all();
        return view('backend.pages.service.index', compact('services', 'categories'));
    } //end method



    //service store method
    public function store(Request $request)
    {
        $today = Carbon::now();
        $request->validate([
            'title' => 'required|max:255',
            'price' => 'required',
            'EndDate' => 'required|after:' . $today,
            'cat_id' => 'required',
            'document' => 'required',
            'shortDes' => 'required|min:',
            'longdes' => 'required',
        ]);
        $services = new Service;
        $services->title = $request->title;
        $services->slug = Str::slug($request->title);
        $services->user_id = auth()->user()->id;
        $services->cat_id = $request->cat_id;
        $services->shortDes = $request->shortDes;
        $services->longdes = $request->longdes;
        $services->price = $request->price;
        $services->StartDate = Carbon::now();
        $services->EndDate = $request->EndDate;
        $image = $request->file('document');
        $imageCustomename = rand() . '.' . $image->getClientOriginalExtension();
        $location = public_path('uploads/services/' . $imageCustomename);
        Image::make($image)->save($location);
        $services->document = $imageCustomename;
        $services->save();
        if ($services) {
            $notification = array(
                'message' => 'Service Create Successfully!',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Service Create Failed!',
                'alert-type' => 'error',
            ); // returns Notification,

            return redirect()->back()->with($notification);
        }
    } //end method

    //service delete method
    public function distroy($id)
    {
        $service = Service::find($id);
        //image file delete
        if ($service) {
            if (File::exists('uploads/services/' . $service->document)) {
                File::delete('uploads/services/' . $service->document);
            }
        }
        $service->delete();
        if ($service) {
            $notification = array(
                'message' => 'Service Delete Successfully!',
                'alert-type' => 'error',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => ' Service Delete  Failed!',
                'alert-type' => 'error',
            ); // returns Notification,

            return redirect()->back()->with($notification);
        }
    } //end method

    //service update method
    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->user_id = auth()->user()->id;
        $service->cat_id = $request->cat_id;
        $service->shortDes = $request->shortDes;
        $service->longdes = $request->longdes;
        $service->price = $request->price;
        $service->EndDate = $request->EndDate;
        if (!empty($request->document)) {
            if (File::exists('uploads/services/' . $service->document)) {
                File::delete('uploads/services/' . $service->document);
            }
            $image = $request->file('document');
            $imageCustomename = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/services/' . $imageCustomename);
            Image::make($image)->save($location);
            $service->document = $imageCustomename;
        }
        $service->update();
        if ($service) {
            $notification = array(
                'message' => 'Service Update Successfully!',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => ' Service Update  Failed!',
                'alert-type' => 'error',
            ); // returns Notification,

            return redirect()->back()->with($notification);
        }
    } //end method

    //your service method
    public function yourservice($user_id)
    {
        $services = Service::with('category')->where('user_id', $user_id)->OrderBy('created_at', 'DESC')->get();
        $TotalServiceCount = $services->count();
        $categories = Category::all();
        return view('backend.pages.service.yourService', compact('services', 'TotalServiceCount', 'categories'));
    } //end method

    //service request start
    public function viewServiceRequest()
    {
        $requestedService = Service::where('status', 2)->OrderBy('created_at', 'DESC')->get();
        return view('backend.pages.service.serviceRequest', compact('requestedService'));
    } //end method

    public function ApproveService($id)
    {
        $request = Service::find($id);
        $request->status = 1;
        $request->update();
        if ($request) {
            $notification = array(
                'message' => 'Service Aproved Successfully!',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => ' Service Update  Failed!',
                'alert-type' => 'error',
            ); // returns Notification,

            return redirect()->back()->with($notification);
        }
    }

    //service Bid show method
    public function Bidapprove($id)
    {
        $allbids = PlaceBit::where('service_id', $id)->OrderBy('created_at', 'DESC')->get();
        return view('backend.pages.service.bid_approve', compact('allbids'));
    } //end method

    //bid file download method
    public function BidFileDownload($file)
    {
        return response()->download(public_path('uploads/placeBid/' . $file));
    } //end method

    //hire seller method
    public function BidHire($id)
    {
        $bids = PlaceBit::find($id);
        $bids->status = 1;
        $bids->update();
        if ($bids) {
            $notification = array(
                'message' => 'You heaired' . '"' . $bids->user->user_name . '"' . 'For This Project',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        }
    } //end method

    //Complete job approve method
    public function Completejob($id)
    {
        $bids = PlaceBit::find($id);
        $bids->status = 2;
        $bids->update();
        if ($bids) {
            $notification = array(
                'message' => 'Your Given Job Completed! :)',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        }
    } //end Complete job approve method

    //project submition method view
    public function SubmitionView($bid_id){

        $resive_submition= ServiceSubmite::where('bid_id',$bid_id)->first();
        return view('backend.pages.service.Service_complete',compact('resive_submition'));
    }//end method

    //service complete file download
    public function ServiceCompleteFileDownload($file){
        return response()->download(public_path('uploads/Service_submite/' . $file));

    }
}
