<?php

namespace App\Providers;
use App\Setting;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

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
      view()->composer('layouts.app', function ($view) {
        $data = Setting::first();
        $auth = Auth::guard('admins')->user();
        $view->with('data', $data)->with('auth', $auth);
      });
    }
}
