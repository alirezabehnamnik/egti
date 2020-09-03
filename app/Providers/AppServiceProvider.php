<?php

namespace App\Providers;
use App\Setting;
use App\FriendRequests;

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
      view()->composer('layouts.profile', function ($view) {
        $data = FriendRequests::where('receiver_id', Auth::user()->id)->get();
        $view->with('data', $data);
      });
    }
}
