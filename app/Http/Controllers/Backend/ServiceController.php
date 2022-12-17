<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Carbon\Carbon;
use Image;
use File;
use Illuminate\Support\Facades\Date;

class ServiceController extends Controller
{

    //service index method
    public function index(){
        $services=Service::where('status',1)->OrderBy('EndDate','ASC')->get();
        $TotalServiceCount = $services->count();
        return view('backend.pages.service.index',compact('services','TotalServiceCount'));
    }//end method



    //service store method
    public function store(Request $request){
        $today = Carbon::now();
        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'EndDate'=>'required|after:'.$today,
            'cat_id'=>'required',
            'document'=>'required',
            'shortDes'=>'required|min:',
            'longdes'=>'required',
        ]);
        $services = new Service;
        $services->title= $request->title;
        $services->slug= str_slug($request->title);
        $services->user_id= auth()->user()->id;
        $services->cat_id= $request->cat_id;
        $services->shortDes= $request->shortDes;
        $services->longdes= $request->longdes;
        $services->price= $request->price;
        $services->StartDate= Carbon::now();
        $services->EndDate= $request->EndDate;
        $image = $request->file('document');
        $imageCustomename = rand().'.'.$image->getClientOriginalExtension();
        $location = public_path('uploads/services/'.$imageCustomename);
        Image::make($image)->save($location);
        $services->document= $imageCustomename;
        $services->save();
        if( $services){
            $notification = array(
                'message' => 'Service Create Successfully!',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        }
        else{
            $notification = array(
                'message' => 'Service Create Failed!',
                'alert-type' => 'error',
            ); // returns Notification,

            return redirect()->back()->with($notification);
        }
     }//end method

     //service delete method
     public function distroy($id){
        $service = Service::find($id);
            //image file delete
            if($service){
                if(File::exists('uploads/services/'.$service->document)){
                    File::delete('uploads/services/'.$service->document);
                }
            }
        $service->delete();
        if($service){
            $notification = array(
                'message' => 'Service Delete Successfully!',
                'alert-type' => 'error',
            ); // returns Notification,
            return redirect()->back()->with($notification);
         }
         else{
            $notification = array(
                'message' => 'Delete Create Failed!',
                'alert-type' => 'error',
            ); // returns Notification,

            return redirect()->back()->with($notification);
         }



     }//end method
}