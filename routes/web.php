<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\BalanceRequestController;
use Illuminate\Support\Facades\Route;


// =======================================================
//  <------------------ WEBSITE ROUTE LIST -------------->
//  ======================================================

Route::get('/', [WebsiteController::class, 'home'])->name('web.home');
Route::get('/logout', [WebsiteController::class, 'Weblogout'])->name('web.logout');


// =======================================================
//  <------------------ BUYER ROUTE LIST ---------------->
//  ======================================================

Route::prefix('buyer')->group(function () {
    // <------- SERVICE ROUTE LIST ------->
    Route::controller(ServiceController::class)->prefix('service')->group(function () {
        Route::get('/', 'index')->name('buyer.service.index');
        Route::post('/store', 'store')->name('buyer.service.store');
        Route::get('/delete/{id}', 'distroy')->name('buyer.service.delete');
    });
});


// =======================================================
//  <------------------ ADMIN ROUTE LIST ---------------->
//  ======================================================

Route::prefix('admin')->middleware('auth', 'admin')->group(function () {

    // <------- ADMIN ROUTE LIST ------->
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'dashboard')->name('admin.dashboard');
        Route::get('/blank', 'blank')->name('admin.blank');
        Route::get('/form', 'formDesign')->name('admin.form');
        Route::get('/logout', 'logout')->name('admin.logout');
        Route::get('/cache-clear', 'cacheClear')->name('admin.cache.clear');
    });

    // <------- ADMIN USER ROUTE LIST ------->
    Route::controller(UserController::class)->prefix('user')->group(function () {
        Route::get('/', 'index')->name('admin.user.index');
        Route::get('/create', 'create')->name('admin.user.create');
        Route::post('/', 'store')->name('admin.user.store');
        Route::get('/edit/{slug}', 'edit')->name('admin.user.edit');
        Route::put('/update/{slug}', 'update')->name('admin.user.update');
        Route::get('/delete/{slug}', 'destroy')->name('admin.user.destroy');

        Route::get('/profile/{slug}', 'profileShow')->name('admin.user.profile');
        Route::post('/profile/account/{slug}', 'profileAccount')->name('admin.user.account');
        Route::post('/profile/setting/{slug}', 'profileSetting')->name('admin.user.setting');
        Route::post('/profile/socialmedia/{slug}', 'profileSocialMedia')->name('admin.user.socialmedia');
    });

    // <------- ADMIN USER ROLE ROUTE LIST ------->
    Route::controller(RoleController::class)->prefix('role')->group(function () {
        Route::get('/', 'index')->name('admin.role.index');
        Route::get('/create', 'create')->name('admin.role.create');
        Route::post('/', 'store')->name('admin.role.store');
        Route::get('/edit/{slug}', 'edit')->name('admin.role.edit');
        Route::put('/update/{slug}', 'update')->name('admin.role.update');
        Route::get('/delete/{slug}', 'destroy')->name('admin.role.destroy');
    });

    // <------- ADMIN BALANCE REQUEST ROUTE LIST ------->
    Route::controller(BalanceRequestController::class)->prefix('balance')->group(function () {
        Route::get('/', 'index')->name('admin.balance.index');
        Route::post('/', 'store')->name('admin.balance.store');
        Route::post('/update/{id}', 'update')->name('admin.balance.update');
        Route::get('/delete/{id}', 'destroy')->name('admin.balance.destroy');
    });
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
