<?php

namespace App\Http\Controllers;
use App\Games;
use App\Tournaments;
use App\Sponsers;
use App\Partners;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
      $games_list = Games::where('enabled', 1)->get()->random(6);
      $tournaments = Tournaments::select('tournaments.*', 'games.name as g_name')->join('games', 'tournaments.game_id', '=', 'games.id')->where('tournaments.enabled', '!=', 0)->orderBy('id', 'desc')->get();
      $sponsers = Sponsers::where('enabled', 1)->get();
      $partners = Partners::where('enabled', 1)->get();
      return view('welcome',  ['games_list' => $games_list, 'tournaments' => $tournaments, 'sponsers' => $sponsers, 'partners' => $partners]);
    }
}
