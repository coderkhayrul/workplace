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
            'phone_number' => 'required',
            'tns_number' => 'required',
            'total_amount' => 'required',
        ]);

        $order = ProductOrder::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'email' => $request->email,
            'bank_name' => $request->bank_name,
            'phone_number' => $request->phone_number,
            'tns_number' => $request->tns_number,
            'price' => $request->price,
            'service_fee' => $request->service_fee,
            'total_amount' => $request->total_amount,
        ]);

        $notification = array(
            'message' => 'Order Placed Successfully!',
            'alert-type' => 'success',
        ); // returns Notification,
        return redirect()->back()->with($notification);
    }
}
