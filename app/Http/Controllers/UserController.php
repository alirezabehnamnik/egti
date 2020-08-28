<?php

namespace App\Http\Controllers;
use App\User;
use App\MyGames;
use App\TournamentsRegister;
use App\Teams;
use App\Games;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index($username)
    {
      $data = User::where('username', $username)->first();
      if (!$data) {
        abort(404);
      }
      $games = null;
      if ($data->mygames) {
        $games = MyGames::select('name')->whereIn('id', $data->mygames)->get();
      }
      $id = "$data->id";
      $teams = Teams::where('user_id', $data->id)->orWhere('standin_id', $data->id)->orWhereJsonContains('players_id', $id)->where('enabled', 1)->get();
      $array = array();
      foreach ($teams as $v) {
        $gid = $v->game_id;
        $array[$v->id] = array(
          'games' => array(
          )
        );
        $ngames = Games::whereIn('id', $gid)->get();
        foreach ($ngames as $k) {
          array_push($array[$v->id]['games'], $k->name);
        }
      }
      return view('users.index', ['data' => $data, 'games' => $games, 'teams' => $teams, 'gar' => $array]);
    }
}
