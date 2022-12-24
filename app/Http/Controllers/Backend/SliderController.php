<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Slider;
use Image;
use File;

class SliderController extends Controller
{
   public function IndexSlider(){
        $sliders = Slider::latest()->get();
        return view('backend.pages.slider.index');
   } //end method
   public function AddedSlider(){
    return view('backend.pages.slider.create');
   } //end method

   public function sliderStore(Request $request){
    $request->validate([
        'slider_title'=>'required|regex:/^[a-zA-Z _]+$/u|max:150',
        'slider_shortdescription'=>'required',
        'slider_status'=>'required',
        'slider_image'=>'required|mimes:jpg,png,giff',
    ]);

    $slider = new Slider();
    $slider->slider_title = $request->slider_title;
    $slider->slider_shortdescription = $request->slider_shortdescription;
    $slider->slider_status = $request->slider_status;
    if($request->slider_image){
        $sliderimage = $request->file('slider_image');
        $sliderimagename = rand().'.'.$sliderimage->getClientOriginalExtension();
        $sliderImagepath = public_path('backend/sliderimage/'.$sliderimagename);
        Image::make($sliderimage)->save( $sliderImagepath);
        $slider->slider_image = $sliderimagename;
    }
    $slider->save();
    return redirect()->route('slider.index')->with('success','Slider Image Inset Done');


   } //end method

}
