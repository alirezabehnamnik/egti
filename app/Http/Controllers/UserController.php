<?php

namespace App\Http\Controllers;
use App\User;
use App\MyGames;
use App\TournamentsRegister;
use App\Teams;
use App\Games;
use App\State;

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

    public function showAll(Request $request)
    {
      if ($request['username'] || $request['state_id'] || $request['city_id'] || $request['mygames']) {
        $query = User::select('avatar', 'username', 'name', 'family', 'state_id', 'city_id', 'mygames');
        if ($request['username']) {
          $query->where('username', 'like', '%'.$request['username'].'%');
        }
        if ($request['state_id']) {
          $query->where('state_id', $request['state_id']);
        }
        if ($request['city_id']) {
          $query->where('city_id', $request['city_id']);
        }
        if ($v = $request['mygames']) {
          // $query->whereIn('mygames',  $games_input);
          $query->whereRaw("JSON_CONTAINS(mygames, '[\"$v\"]' )");
        }
        $data = $query->paginate(2);
      } else {
        $data = User::paginate(2);
      }
      $state = State::where('enabled', 1)->get();
      $mygames = MyGames::where('enabled', 1)->get();
      $array = array();
      foreach ($data as $v) {
        if ($v->mygames) {
          $array[$v->username] = array();
          $games = MyGames::select('name')->whereIn('id', $v->mygames)->get();
          foreach ($games as $k) {
            array_push($array[$v->username], $k->name);
          }
        }
      }
      return view('users.all', ['data' => $data->withQueryString(), 'games' => $array, 'state' => $state, 'mygames' => $mygames]);
    }


    public function getcities($id) {
      $cities = State::find($id)->City;
      return response()->json($cities);
    }
}
