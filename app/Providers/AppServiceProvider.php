<?php

namespace App\Providers;

use App\Models\Backend\Category;
use App\Models\Backend\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('navbars', Category::where('status', '1')->limit(12)->get());
        view()->share('setting', Setting::first());
    }
}
