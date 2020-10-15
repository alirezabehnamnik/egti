<?php

namespace App\Providers;
use App\Setting;
use App\FriendRequests;
use App\Supports;
use App\TeamRequests;

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
        $hasTickets = false;
        $treq = false;
        $data = Setting::first();
        $auth = Auth::guard('admins')->user();
        if (Auth::check()) {
          $hasTickets = Supports::where('user_id', Auth::user()->id)->where('enabled', 3)->get();
          $treq = TeamRequests::where('user_id', Auth::user()->id)->get();
        }
        $view->with('data', $data)->with('auth', $auth)->with('hasTickets', $hasTickets)->with('treq', $treq);
      });
      view()->composer('layouts.profile', function ($view) {
        $data = FriendRequests::where('receiver_id', Auth::user()->id)->get();
        $treq = TeamRequests::where('user_id', Auth::user()->id)->get();
        $tickets = Supports::where('user_id', Auth::user()->id)->where('enabled', '!=', 0)->get();
        $hasTickets = Supports::where('user_id', Auth::user()->id)->where('enabled', 3)->get();
        $view->with('data', $data)->with('tickets', $tickets)->with('hasTickets', $hasTickets)->with('treq', $treq);
      });
    }
}
