<?php

namespace App\Http\Controllers;
use App\Games;
use App\Tournaments;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
      $games_list = Games::where('enabled', 1)->get();
      return view('games.index', ['games_list' => $games_list]);
    }

    public function game($id)
    {
      $tournaments = Tournaments::where('enabled', 1)->where('game_id', $id)->get();
      $game = Games::select("name")->where('id', $id)->first();
      if (!$game) {
        abort(404);
      }
      return view('games.single_game', ['data' => $tournaments, 'game' => $game]);
    }
}
