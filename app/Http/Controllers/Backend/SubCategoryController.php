<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Backend\SubCategory;
use App\Models\Backend\Category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::where('status', 1)->get();
        $data['subCategories'] = SubCategory::where('status', 1)->get();
        // dd($data);
        return view('backend.pages.subcategory.index', $data);
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
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
        ]);

        $data = SubCategory::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'orderby' => $request->orderby,
        ]);
        if ($data) {
            $notification = array(
                'message' => 'Sub-Category Create Successfully!',
                'alert-type' => 'success',
            ); // returns Notification,
        } else {
            $notification = array(
                'message' => 'Sub-Category Create Failed!',
                'alert-type' => 'success',
            ); // returns Notification,
        }
        return redirect()->back()->with($notification);
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
    public function edit(Request $request)
    {
        $subcategories = SubCategory::findOrFail($request->id);
        return response()->json([
            'subcategories' => $subcategories,
        ]);
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
        // dd($request->all());

        // $request->validate([
        //     'category_id' => 'required',
        //     'name' => 'required',
        // ]);

        SubCategory::where('id', $request->subcategory_id)->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'orderby' => $request->orderby,
        ]);

        // if ($data) {
        //     $notification = array(
        //         'message' => 'Sub-Category Updated Successfully!',
        //         'alert-type' => 'success',
        //     ); // returns Notification,
        // } else {
        //     $notification = array(
        //         'message' => 'Sub-Category Update Failed!',
        //         'alert-type' => 'success',
        //     ); // returns Notification,
        // }
        return response()->json([
            'success' => 'Sub-Category Updated Successfully',
        ]);
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
