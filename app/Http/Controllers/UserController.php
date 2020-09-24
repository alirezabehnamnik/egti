<?php

namespace App\Http\Controllers;
use App\User;
use App\MyGames;
use App\TournamentsRegister;
use App\Teams;
use App\Games;
use App\State;
use App\FriendRequests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index($username)
    {
      $hasRequest = null;
      $friends = null;
      $data = User::where('username', $username)->first();
      if (!$data) {
        abort(404);
      }
      $user_id = Auth::user()->id;
      $isFriend = User::where('username', $username)->whereRaw("JSON_CONTAINS(friends_id, '[\"$user_id\"]' )")->first();
      if (Auth::check()) {
        $frRequest = FriendRequests::where('sender_id', Auth::user()->id)->where('receiver_id', $data->id)->first();
        if ($frRequest) {
          $hasRequest = true;
        } else {
          $hasRequest = false;
        }
      }
      if (!$data) {
        abort(404);
      }
      $games = null;
      if ($data->mygames) {
        $games = MyGames::select('name')->whereIn('id', $data->mygames)->get();
      }
      $id = "$data->id";
      $teams = Teams::where('user_id', $data->id)->orWhere('standin_id', $data->id)->orWhereJsonContains('players_id', $id)->where('enabled', 1)->get();
      if ($data->friends_id) {
        $friends = User::whereIn('id', json_decode($data->friends_id))->get();
      }
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
      return view('users.index', ['data' => $data, 'games' => $games, 'teams' => $teams, 'gar' => $array, 'hasRequest' => $hasRequest, 'isFriend' => $isFriend, 'friends' => $friends]);
    }

    public function showAll(Request $request)
    {
      if ($request['username'] || $request['state_id'] || $request['city_id'] || $request['mygames']) {
        $query = User::select('avatar', 'username', 'name', 'family', 'state_id', 'city_id', 'mygames', 'privacy_location', 'privacy_email', 'privacy_phone');
        if ($request['username']) {
          $query->where('username', 'like', '%'.$request['username'].'%');
        }
        if ($request['state_id']) {
          $query->where('state_id', $request['state_id'])->where('privacy_location', 1);
        }
        if ($request['city_id']) {
          $query->where('city_id', $request['city_id'])->where('privacy_location', 1);
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

    public function addFriend($id)
    {
      $data = FriendRequests::create([
          'sender_id' => Auth::user()->id,
          'receiver_id' => $id,
          'enabled' => 1,
      ]);
      if ($data) {
        return redirect()->back()->with('message', 'درخواست دوستی باموفقیت ارسال شد.');
      } else {
        return redirect()->back()->with('error', 'خطایی رخ داده است! لطفا مجددا امتحان کنید و درصورت وجود مشکل با پشتیبان سایت تماس بگیرید!');
      }
    }

    public function removeAddFriend($sender, $receiver)
    {
        FriendRequests::where('sender_id', $sender)->where('receiver_id', $receiver)->delete();
        return redirect()->back();
    }
}
