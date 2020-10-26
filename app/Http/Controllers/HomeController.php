<?php

namespace App\Http\Controllers;
use App\Teams;
use App\Games;
use App\TournamentsRegister;
use App\FriendRequests;
use App\User;

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

        $user_id = Auth::user()->id;
        $team_ids = array();
        $teams_list = Teams::select('id')->whereRaw("JSON_CONTAINS(players_id, '[\"$user_id\"]' )")->orWhere('standin_id', $user_id)->get();
        foreach ($teams_list as $v) {
          array_push($team_ids, $v->id);
        }
        $tournaments = TournamentsRegister::where('user_id', Auth::user()->id)->orWhereIn('team_id', $team_ids)->get();
        if (count($tournaments) > 4) {
          $tournaments = $tournaments->random(4);
        }
        return view('profile.index', ['teams' => $teams, 'tournaments' => $tournaments, 'data' => $array]);
    }

    public function friendRequests()
    {
      $data = FriendRequests::where('receiver_id', Auth::user()->id)->get();
      return view('profile.friendRequests', ['data' => $data]);
    }

    public function friendResult($result, $sender, $receiver)
    {
      if ($result == "accept") {
        $data = User::select('friends_id')->where('id', $receiver)->first();
        $array = [];
        if ($data->friends_id) {
          $array = json_decode($data->friends_id);
        }
        array_push($array, $sender);
        $update = User::where('id', $receiver)->update(['friends_id' => $array]);
        if ($update) {
          $delete = FriendRequests::where('sender_id', $sender)->where('receiver_id', $receiver)->delete();
          return redirect()->back()->with('message', 'درخواست دوستی با موفقیت قبول شد.');
        }
      } elseif ($result == "reject") {
        $delete = FriendRequests::where('sender_id', $sender)->where('receiver_id', $receiver)->delete();
        return redirect()->back()->with('message', 'درخواست دوستی با موفقیت رد شد.');
      }
    }

    public function myFriends()
    {
      $user = User::select('friends_id')->where('id', Auth::user()->id)->first();
      if ($user->friends_id) {
        $data = User::whereIn('id', json_decode($user->friends_id))->get();
      } else {
        $data = null;
      }
      return view('profile.friends', ['data' => $data]);
    }

    public function removeFriend($id)
    {
      $user = User::select('friends_id')->where('id', Auth::user()->id)->first();
      $array = array();
      $array = json_decode($user->friends_id);
      if (($key = array_search($id, $array)) !== false) {
        unset($array[$key]);
        $array = array_values($array);
      } else {
        return abort(403);
      }
      if ($array == null) {
        $array = null;
      }
      $update = User::where('id', Auth::user()->id)->update(['friends_id' => $array]);
      return redirect()->back()->with('message', 'کاربر مورد نظر با موفقیت از لیست دوستان شما حذف شد.');
    }

    public function errorPage($code)
    {
      return abort($code);
    }

    public function tournamentRules()
    {
      return view('trules');
    }

    public function rules()
    {
      return view('rules');
    }
}
