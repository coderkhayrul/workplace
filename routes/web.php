<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// =======================================================
//  <------------------ WEBSITE ROUTE LIST --------------->
//  ======================================================

Route::get('/', [WebsiteController::class, 'websiteVisit'])->name('web.home');


// =======================================================
//  <------------------ ADMIN ROUTE LIST --------------->
//  ======================================================

Route::prefix('admin')->group(function(){

    // <------- ADMIN ROUTE LIST ------->
    Route::controller(AdminController::class)->group(function(){
        Route::get('/','dashboard')->name('admin.dashboard');
        Route::get('/blank','blank')->name('admin.blank');
        Route::get('/form','formDesign')->name('admin.form');
    });


});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
