<?php

namespace App\Http\Controllers;
use App\Games;
use App\Tournaments;
use App\Sponsers;
use App\Partners;
use App\Setting;

use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
      $setting = Setting::first();
      $games_list = Games::where('enabled', 1)->get()->random(6);
      $tournaments = Tournaments::select('tournaments.*', 'games.name as g_name')->join('games', 'tournaments.game_id', '=', 'games.id')->where('tournaments.enabled', '!=', 0)->orderBy('id', 'desc')->limit(6)->get();
      $sponsers = Sponsers::where('enabled', 1)->get();
      $partners = Partners::where('enabled', 1)->get();
      return view('welcome',  ['setting' => $setting, 'games_list' => $games_list, 'tournaments' => $tournaments, 'sponsers' => $sponsers, 'partners' => $partners]);
    }

    public function notFound()
    {
      return view('404');
    }
}
