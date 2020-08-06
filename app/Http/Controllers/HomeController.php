<?php

namespace App\Http\Controllers;
use App\Teams;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teams = Teams::where('user_id', Auth::user()->id)->where('enabled', 1)->limit(6)->get()->sortBy('game_id');
        return view('profile.index', ['teams' => $teams]);
    }
}
