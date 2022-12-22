<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\BalanceRequestController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;


// =======================================================
//  <------------------ WEBSITE ROUTE LIST -------------->
//  ======================================================

Route::get('/', [WebsiteController::class, 'home'])->name('web.home');
Route::get('/profile/{slug}', [WebsiteController::class, 'profile'])->name('web.profile')->middleware('auth');
Route::get('/logout', [WebsiteController::class, 'Weblogout'])->name('web.logout');

// Frontend Service Route
Route::get('/service/{slug}', [WebsiteController::class, 'singleService'])->name('web.single.service');
Route::get('/buyer/{slug}', [WebsiteController::class, 'buyerProfile'])->name('web.buyer.profile');
Route::get('/category/{slug}', [WebsiteController::class, 'cateegoryService'])->name('web.category.service');

//frontend place Bid Route
Route::get('/placebid/{slug}', [WebsiteController::class, 'PlaceBid'])->middleware('auth')->name('web.placebid');
Route::post('/placebid/store', [WebsiteController::class, 'Bid_store'])->middleware('auth')->name('web.placebid.store');



// =======================================================
//  <------------------ ADMIN ROUTE LIST ---------------->
//  ======================================================

Route::prefix('admin')->middleware('auth', 'panelaccess')->group(function () {

    // <------- ADMIN ROUTE LIST ------->
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'dashboard')->name('admin.dashboard');
        Route::get('/blank', 'blank')->name('admin.blank');
        Route::get('/form', 'formDesign')->name('admin.form');
        Route::get('/logout', 'logout')->name('admin.logout');
        Route::get('/cache-clear', 'cacheClear')->name('admin.cache.clear');
    });

    // <------- ADMIN USER ROUTE LIST ------->
    Route::controller(UserController::class)->prefix('user')->middleware('admin')->group(function () {
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
    Route::controller(RoleController::class)->prefix('role')->middleware('superadmin')->group(function () {
        Route::get('/', 'index')->name('admin.role.index');
        Route::get('/create', 'create')->name('admin.role.create');
        Route::post('/', 'store')->name('admin.role.store');
        Route::get('/edit/{slug}', 'edit')->name('admin.role.edit');
        Route::put('/update/{slug}', 'update')->name('admin.role.update');
        Route::get('/delete/{slug}', 'destroy')->name('admin.role.destroy');
    });

    // <------- ADMIN BALANCE REQUEST ROUTE LIST ------->
    Route::controller(BalanceRequestController::class)->prefix('balance')->middleware('buyer')->group(function () {
        Route::get('/', 'index')->name('admin.balance.index');
        Route::post('/', 'store')->name('admin.balance.store');
        Route::post('/update/{id}', 'update')->name('admin.balance.update');
        Route::get('/delete/{id}', 'destroy')->name('admin.balance.destroy');
    });
    // <------- Category ------->
    Route::controller(CategoryController::class)->prefix('category')->middleware('admin')->group(function () {
        Route::get('/', 'index')->name('admin.category.index');
        Route::post('/store', 'store')->name('admin.category.store');
        Route::post('/update/{id}', 'update')->name('admin.category.update');
        Route::get('/delete/{id}', 'destroy')->name('admin.category.destroy');
    });
    // <------- SubCategory ------->
    Route::controller(SubCategoryController::class)->prefix('sub-category')->middleware('admin')->group(function () {
        Route::get('/', 'index')->name('admin.subcategory.index');
        Route::post('/store', 'store')->name('admin.subcategory.store');
        Route::get('/edit', 'edit')->name('admin.subcategory.edit');
        Route::post('/update', 'update')->name('admin.subcategory.update');
    });

    // <------- SERVICE ROUTE LIST ------->
    Route::controller(ServiceController::class)->prefix('service')->group(function () {
        Route::get('/', 'index')->name('buyer.service.index')->middleware('auth', 'panelaccess');
        Route::post('/store', 'store')->name('buyer.service.store');
        Route::get('/delete/{id}', 'distroy')->name('buyer.service.delete');
        Route::post('/update/{id}', 'update')->name('buyer.service.update');
        Route::get('/yourservice/{user_id}', 'yourservice')->name('buyer.service.yourservice')->middleware('auth', 'buyer');
        Route::get('/request', 'viewServiceRequest')->name('buyer.service.request');
        Route::get('/approve/{id}', 'ApproveService')->name('buyer.service.ApproveRequest');
    });

    // <------- Product ------->
    Route::controller(ProductController::class)->prefix('product')->middleware('admin')->group(function () {
        Route::get('/', 'index')->name('admin.product.index');
        Route::post('/store', 'store')->name('admin.product.store');
        Route::post('/update/{id}', 'update')->name('admin.product.update');
        Route::get('/delete/{id}', 'destroy')->name('admin.product.delete');
        // Product Status Update
        Route::get('/active/{slug}', 'active')->name('admin.product.active');
        Route::get('/deactive/{slug}', 'deactive')->name('admin.product.deactive');
    });
});



// Route::get('/category', function () {
//     return view('backend.pages.category.addcategory');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
