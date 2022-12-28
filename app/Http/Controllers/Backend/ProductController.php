<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use App\Models\Backend\Product;
use App\Models\ProductOrder;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderby('id', 'asc')->get();
        return view('backend.pages.product.index', compact('product'));
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
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'download_link' => 'required',
            'orderby' => 'required|numeric',
            'product_image' => 'required',
            'product_details' => 'required',

        ]);
        $product = new Product();
        $product->author_id = $request->author_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->download_link = $request->download_link;
        $product->orderby = $request->orderby;
        $product->product_slug = uniqid();
        $product->product_details = $request->product_details;
        $image = $request->file('product_image');
        $imageCustomename = rand() . '.' . $image->getClientOriginalExtension();
        $location = public_path('uploads/products/' . $imageCustomename);
        Image::make($image)->save($location);
        $product->product_image = $imageCustomename;
        $product->save();
        if ($product) {
            $notification = array(
                'message' => 'Product Create Successfully!',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Product Create Failed!',
                'alert-type' => 'error',
            ); // returns Notification,

            return redirect()->back()->with($notification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'download_link' => 'required',
            'orderby' => 'required',
            'product_details' => 'required',
        ]);
        $product = Product::find($id);
        $product->author_id = $request->author_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->download_link = $request->download_link;
        $product->orderby = $request->orderby;
        $product->product_details = $request->product_details;
        if (!empty($request->product_image)) {
            if (File::exists('uploads/products/' . $product->product_image)) {
                File::delete('uploads/products/' . $product->product_image);
            }
            $image = $request->file('product_image');
            $imageCustomename = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/products/' . $imageCustomename);
            Image::make($image)->save($location);
            $product->product_image = $imageCustomename;
        }
        $product->update();
        if ($product) {
            $notification = array(
                'message' => 'Product Update Successfully!',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Product Update Failed!',
                'alert-type' => 'error',
            ); // returns Notification,

            return redirect()->back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        //image file delete
        if ($product) {
            if (File::exists('uploads/products/' . $product->product_image)) {
                File::delete('uploads/products/' . $product->product_image);
            }
        }
        $product->delete();
        if ($product) {
            $notification = array(
                'message' => 'Product Delete Successfully!',
                'alert-type' => 'error',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => ' Product Delete  Failed!',
                'alert-type' => 'error',
            ); // returns Notification,

            return redirect()->back()->with($notification);
        }
    }
    public function active($slug)
    {
        $product = Product::where('product_slug', $slug)->update(['status' => 1]);
        if ($product) {
            $notification = array(
                'message' => 'Product Status Updated!',
                'alert-type' => 'success',
            ); // returns Notification,
        } else {
            $notification = array(
                'message' => 'Product Status Failed!',
                'alert-type' => 'error',
            ); // returns Notification,
        }
        return redirect()->back()->with($notification);
    }

    public function deactive($slug)
    {
        $product = Product::where('product_slug', $slug)->update(['status' => 0]);
        if ($product) {
            $notification = array(
                'message' => 'Product Status Updated!',
                'alert-type' => 'success',
            ); // returns Notification
        } else {
            $notification = array(
                'message' => 'Product Update Failed!',
                'alert-type' => 'error',
            ); // returns Notification
        }
        return redirect()->back()->with($notification);
    }
    public function order()
    {
        $orders = ProductOrder::all();
        return view('backend.pages.product.order', compact('orders'));
    }

    public function pending()
    {
        $orders = ProductOrder::where('status', 1)->get();
        return view('backend.pages.product.order', compact('orders'));
    }

    public function approve()
    {
        $orders = ProductOrder::where('status', 2)->get();
        return view('backend.pages.product.order', compact('orders'));
    }

    public function rejected()
    {
        $orders = ProductOrder::where('status', 3)->get();
        return view('backend.pages.product.order', compact('orders'));
    }

    public function approveStatus($id)
    {
        $order = ProductOrder::where('id', $id)->update([
            'status' => 2
        ]);
        if ($order) {
            $notification = array(
                'message' => 'Order Status Updated!',
                'alert-type' => 'success',
            ); // returns Notification
        } else {
            $notification = array(
                'message' => 'Order Update Failed!',
                'alert-type' => 'error',
            ); // returns Notification
        }
        return redirect()->back()->with($notification);
    }

    public function rejectedStatus($id)
    {
        $order = ProductOrder::where('id', $id)->update([
            'status' => 3
        ]);
        if ($order) {
            $notification = array(
                'message' => 'Order Status Updated!',
                'alert-type' => 'success',
            ); // returns Notification
        } else {
            $notification = array(
                'message' => 'Order Update Failed!',
                'alert-type' => 'error',
            ); // returns Notification
        }
        return redirect()->back()->with($notification);
    }
}
