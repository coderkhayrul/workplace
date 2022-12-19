<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\BalanceRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BalanceRequestController extends Controller
{
    public function index()
    {

        // $checkUser = User::where('role_id', 1)->get();
        // $balances = BalanceRequest::where('user_id', 1)->get();
        // dd($checkUser);

        if (Auth::user()->role_id == 1) {
            $balances = BalanceRequest::all();
            return view('backend.pages.balanceRequest.index', compact('balances'));
        } else {
            $balances = BalanceRequest::where('user_id', Auth::user()->id)->get();
            return view('backend.pages.balanceRequest.index', compact('balances'));
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'method' => 'required',
            'number' => 'required',
            'traID' => 'required',
        ]);

        $balance = new BalanceRequest();
        $balance->user_id = Auth::user()->id;
        $balance->amount = $request->amount;
        $balance->method = $request->method;
        $balance->number = $request->number;
        $balance->traID = $request->traID;
        $balance->status = '2';
        $balance->approve_id = Auth::user()->id;
        $balance->created_at = Carbon::now();
        $balance->save();

        $notification = array(
            'message' => 'Your Request has been Received and will be Processed Shortly!!!',
            'alert-type' => 'success',
        ); // returns Notification,

        return redirect()->back()->with($notification);
    }

    public function update(Request $request, $id)
    {
        $balance = BalanceRequest::find($id);
        $balance->user_id = Auth::user()->id;
        $balance->amount = $request->amount;
        $balance->method = $request->method;
        $balance->number = $request->number;
        $balance->traID = $request->traID;
        $balance->status = $request->status;
        $balance->approve_id = Auth::user()->id;
        $balance->created_at = Carbon::now();
        $balance->updated_at = Carbon::now();
        $balance->update();

        $notification = array(
            'message' => 'This Payment has been Received',
            'alert-type' => 'success',
        ); // returns Notification,

        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $balance = BalanceRequest::find($id)->delete();
        $notification = array(
            'message' => 'Balance Request Deleted Successfully',
            'alert-type' => 'success',
        ); // returns Notification,

        return redirect()->back()->with($notification);
    }
}
