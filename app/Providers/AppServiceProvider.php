<?php

namespace App\Providers;
use App\Setting;
use App\FriendRequests;
use App\Supports;

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
        $tickets = Supports::where('user_id', Auth::user()->id)->where('enabled', '!=', 0)->get();
        $view->with('data', $data)->with('tickets', $tickets);
      });
    }
}
