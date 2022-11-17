<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
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
//  <------------------ WEBSITE ROUTE LIST -------------->
//  ======================================================

Route::get('/', [WebsiteController::class, 'websiteVisit'])->name('web.home');
Route::get('/logout', [WebsiteController::class, 'Weblogout'])->name('web.logout');


// =======================================================
//  <------------------ ADMIN ROUTE LIST ---------------->
//  ======================================================
// ->middleware('')
Route::prefix('admin')->middleware('admin')->group(function(){

    // <------- ADMIN ROUTE LIST ------->
    Route::controller(AdminController::class)->group(function(){
        Route::get('/','dashboard')->name('admin.dashboard');
        Route::get('/blank','blank')->name('admin.blank');
        Route::get('/form','formDesign')->name('admin.form');
        Route::get('/logout','logout')->name('admin.logout');
        Route::get('/cache-clear','cacheClear')->name('admin.cache.clear');
    });

    // <------- ADMIN USER ROUTE LIST ------->
    Route::controller(UserController::class)->prefix('user')->group(function(){
        Route::get('/','index')->name('admin.user.index');
        Route::get('/create','create')->name('admin.user.create');
        Route::post('/','store')->name('admin.user.store');
        Route::get('/edit/{slug}','edit')->name('admin.user.edit');
        Route::put('/update/{slug}','update')->name('admin.user.update');
        Route::get('/delete/{slug}','destroy')->name('admin.user.destroy');

        Route::get('/profile/{slug}','profileShow')->name('admin.user.profile');

        Route::post('/profile/account/{slug}','profileAccount')->name('admin.user.account');
        Route::get('/profile/{slug}','profileShow')->name('admin.user.profile');
        Route::get('/profile/{slug}','profileShow')->name('admin.user.profile');
    });

    // <------- ADMIN USER ROLE ROUTE LIST ------->
    Route::controller(RoleController::class)->prefix('role')->group(function(){
        Route::get('/','index')->name('admin.role.index');
        Route::get('/create','create')->name('admin.role.create');
        Route::post('/','store')->name('admin.role.store');
        Route::get('/edit/{slug}','edit')->name('admin.role.edit');
        Route::put('/update/{slug}','update')->name('admin.role.update');
        Route::get('/delete/{slug}','destroy')->name('admin.role.destroy');
    });


});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
