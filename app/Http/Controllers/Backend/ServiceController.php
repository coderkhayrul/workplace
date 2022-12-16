<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    //service index method
    public function index(){
        return view('backend.pages.service.index');
    }//end method



    //service store method
    public function store(Request $request){
        $services = new Service;


    }
}
