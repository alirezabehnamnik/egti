<?php

namespace App\Http\Controllers;
use App\Teams;
use App\Games;
use App\TournamentsRegister;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $id = "$id";
        $teams = Teams::where('user_id', Auth::user()->id)->orWhere('standin_id', Auth::user()->id)->orWhereJsonContains('players_id', $id)->where('enabled', 1)->limit(6)->get()->sortBy('game_id');
        $array = array();
        foreach ($teams as $v) {
          $data = $v->game_id;
          $array[$v->id] = array(
            'games' => array(
            )
          );
          $games = Games::whereIn('id', $data)->get();
          foreach ($games as $k) {
            array_push($array[$v->id]['games'], $k->name);
          }
        }

        $tournaments = TournamentsRegister::where('user_id', Auth::user()->id)->limit(4)->get();
        return view('profile.index', ['teams' => $teams, 'tournaments' => $tournaments, 'data' => $array]);
    }

    public function errorPage($code)
    {
      return abort($code);
    }
}
