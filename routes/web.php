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
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\ProductOrderController;
use Illuminate\Support\Facades\Route;


// =======================================================
//  <------------------ WEBSITE ROUTE LIST -------------->
//  ======================================================

// TEST NOTIFICATION ROUTE START
Route::get('/test', function () {
    $notification = array(
        'message' => 'Test Notification!',
        'alert-type' => 'success',
    ); // returns Notification,
    return redirect()->back()->with($notification);
})->name('web.test');
// TEST NOTIFICATION ROUTE END


Route::get('/', [WebsiteController::class, 'home'])->name('web.home');
Route::get('/profile/{slug}', [WebsiteController::class, 'profile'])->name('web.profile')->middleware('auth');
Route::get('/logout', [WebsiteController::class, 'Weblogout'])->middleware('auth')->name('web.logout');
Route::get('/allcategories',function() {
 return view('frontend.categories');
})->name('allcategories');

// Frontend Service Route
Route::get('/service/{slug}', [WebsiteController::class, 'singleService'])->name('web.single.service');
//frontend buyer and seller profile route
Route::get('/buyer/{slug}', [WebsiteController::class, 'buyerProfile'])->name('web.buyer.profile');

Route::get('/seller/{slug}', [WebsiteController::class, 'SellerProfile'])->name('web.seller.profile');

Route::get('/category/{slug}', [WebsiteController::class, 'cateegoryService'])->name('web.category.service');
// Frontend Subscribe Route
Route::post('/subscribe', [WebsiteController::class, 'subscribe'])->name('web.subscribe');
//frontend place Bid Route
Route::get('/placebid/{slug}', [WebsiteController::class, 'PlaceBid'])->middleware('auth')->name('web.placebid');
Route::post('/bidstore', [WebsiteController::class, 'Bid_store'])->middleware('auth')->name('web.placebid.store');
//frontend search route
Route::get('/search', [WebsiteController::class, 'Search'])->name('web.search');

//frontend project submission
Route::get('/submite/{id}', [WebsiteController::class, 'ProjectSubmite'])->middleware('auth')->name('web.projectsubmite.view');
Route::post('/submite/store', [WebsiteController::class, 'ProjectSubmiteStore'])->middleware('auth')->name('web.projectsubmite.store');

// <------- DIGITAL PRODUCT ROUTE LIST ------->


// <------- ADMIN USER ROLE ROUTE LIST ------->
Route::prefix('product')->group(function () {
    Route::get('/', [WebsiteController::class, 'product'])->name('web.digital.product.all');
    Route::get('/{slug}', [WebsiteController::class, 'productView'])->name('web.digital.product.view');
    Route::get('/bid/{slug}', [WebsiteController::class, 'productBid'])->name('web.digital.product.place-bid');
    Route::post('/payment', [ProductOrderController::class, 'payment'])->name('web.digital.product.order');
});

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
        Route::get('/edit', 'edit')->name('admin.category.edit');
        Route::post('/update', 'update')->name('admin.category.update');
        Route::get('/delete', 'destroy')->name('admin.category.destroy');
    });
    // <------- SubCategory ------->
    Route::controller(SubCategoryController::class)->prefix('sub-category')->middleware('admin')->group(function () {
        Route::get('/', 'index')->name('admin.subcategory.index');
        Route::post('/store', 'store')->name('admin.subcategory.store');
        Route::get('/edit', 'edit')->name('admin.subcategory.edit');
        Route::post('/update', 'update')->name('admin.subcategory.update');
        Route::get('/delete', 'destroy')->name('admin.subcategory.delete');
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
        Route::get('/service/bid/{id}', 'Bidapprove')->name('buyer.bid.approve')->middleware('auth', 'buyer');
        Route::get('/bid/download/{file}', 'BidFileDownload')->name('buyer.bid.download')->middleware('auth', 'buyer');
        Route::get('/bid/hire/{id}', 'BidHire')->name('buyer.bid.hire')->middleware('auth', 'buyer');
        Route::get('/bid/completejob/{id}', 'Completejob')->name('buyer.bid.completejob')->middleware('auth', 'buyer');
        Route::get('/submition/view/{bid_id}', 'SubmitionView')->name('buyer.projectSubmition.view')->middleware('auth', 'buyer');
        Route::get('/service/complete/download/{file}', 'BidFileDownload')->name('buyer.servicecomplete.download')->middleware('auth', 'buyer');
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
        //product Order
        Route::get('/order', 'order')->name('admin.product.order');
        Route::get('/pending', 'pending')->name('admin.product.order.pending');
        Route::get('/approve', 'approve')->name('admin.product.order.approve');
        Route::get('/rejected', 'rejected')->name('admin.product.order.rejected');

        Route::get('/approve/{id}', 'approveStatus')->name('admin.product.order.approve.status');
        Route::get('/rejected/{id}', 'rejectedStatus')->name('admin.product.order.rejected.status');
    });
    // <------- Setting ------->
    Route::controller(SettingController::class)->prefix('setting')->middleware('admin')->group(function () {
        Route::get('/', 'index')->name('admin.setting.index');
        Route::post('/update', 'update')->name('admin.setting.update');
    });
    // <------- Slider ------->
    Route::controller(SliderController::class)->prefix('slider')->middleware('admin')->group(function () {
        Route::get('/manage/slider', 'IndexSlider')->name('slider.index');
        Route::get('/add/slider', 'AddedSlider')->name('add.slider');
        Route::POST('/store', 'sliderStore')->name('slider.store');
        Route::GET('/edit/{id}', 'SliderEdit')->name('slider.edit');
        Route::POST('/update/{id}', 'SliderUpdate')->name('slider.update');
        Route::GET('/delete/{id}', 'SliderDelete')->name('slider.delete');
    });
});



// Route::get('/category', function () {
//     return view('backend.pages.category.addcategory');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
