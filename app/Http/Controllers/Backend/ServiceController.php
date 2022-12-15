<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //service create method
    public function create(){
        return view('backend.pages.service.serviceAdd');
    }
}
