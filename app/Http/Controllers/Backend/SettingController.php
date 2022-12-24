<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Setting;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting= Setting::first();
        return view('backend.pages.setting.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $setting= Setting::first();
        $setting-> company_name =$request->company_name;
        if($request->logo){
            if(File::exists('uploads/setting/'.$setting->logo)){
                File::delete('uploads/setting/'.$setting->logo);
                $image=$request->file('logo');
                $imgCustomName=rand().'.'.$image->getClientOriginalExtension();
                $location=public_path('uploads/setting/'.$imgCustomName);
                Image::make($image)->save($location);
                $setting->logo=$imgCustomName;
            }
        }
        $setting-> facebook_link=$request->facebook_link;
        $setting-> instagram_link=$request->instagram_link;
        $setting-> twitter_link=$request->twitter_link;
        $setting-> linkedin_link=$request->linkedin_link;
        $setting-> short_description=$request->short_description;
        $setting->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
