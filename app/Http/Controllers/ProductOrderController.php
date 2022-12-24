<?php

namespace App\Http\Controllers;

use App\Models\ProductOrder;
use Illuminate\Http\Request;

class ProductOrderController extends Controller
{
    public function payment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'bank_name' => 'required',
            'phone' => 'required',
            'tns_number' => 'required',
            'total_amount' => 'required',
        ]);

        $order = ProductOrder::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'order_code' => 'FL' . rand(10000, 99999),
            'name' => $request->name,
            'email' => $request->email,
            'bank_name' => $request->bank_name,
            'phone_number' => $request->phone,
            'tns_number' => $request->tns_number,
            'price' => $request->price,
            'service_fee' => $request->service_fee,
            'total_amount' => $request->total_amount,
        ]);

        $notification = array(
            'message' => 'Order Placed Successfully!',
            'alert-type' => 'success',
        ); // returns Notification,
        return redirect()->route('web.home')->with($notification);
    }
}
