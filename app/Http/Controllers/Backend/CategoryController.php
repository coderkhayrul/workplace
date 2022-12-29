<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('status', 1)->get();
        return view('backend.pages.category.addcategory', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'category_name' => 'required',
            'status' => 'required',
        ]);
        $Category = new Category();
        $Category->name = $request->category_name;
        $Category->slug = Str::slug($request->category_name, '-');
        $Category->status = $request->status;
        $Category->save();
        $notification = array(
            'message' => ' Category Created Done',
            'alert-type' => 'success',
        ); // returns Notification,
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
        $category = Category::find($request->id);
        return response()->json([
            'data'=> $category,

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
        $category = Category::find($request->cat_id);
        $category->name = $request->category_name;
        $category->status = $request->status;
        $category->update();
        return response()->json([
            'success'=> 'Category Updated Successfully',

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = decrypt($request->id);
        $category = Category::findOrFail($id);
        // dd($category);
        $category->delete();

        return response()->json([
            'status' => 'Data Deleted Successfully!'
        ]);
    }
}
