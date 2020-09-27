<?php

namespace App\Http\Controllers;
use App\Teams;
use App\User;
use App\Games;
use App\TournamentsRegister;
use App\TournamentsResults;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TeamsController extends Controller
{

    public function index($tag)
    {
      $data = Teams::where('tag', $tag)->first();
      if (!$data) {
        abort(404);
      }
      $captain = User::where('id', $data->user_id)->first();
      $players = User::whereIn('id', $data->players_id)->get();
      $standin = User::where('id', $data->standin_id)->first();
      $tournaments = TournamentsRegister::where('team_id', $data->id)->get();
      $games = Games::whereIn('id', $data->game_id)->get();
      $trIds = [];
      foreach ($tournaments as $v)
      {
          array_push($trIds, $v->tournament_id);
      }
      $trResult = TournamentsResults::whereIn('tournaments_id', $trIds)->get();
      $fplace = null;
      $splace = null;
      $tplace = null;
      $foplace = null;
      $fiplace = null;
      foreach ($trResult as $v) {
        if ($v->fplace_id == $data->id) {
          $fplace++;
        } elseif ($v->splace_id == $data->id) {
          $splace++;
        } elseif ($v->tplace_id == $data->id) {
          $tplace++;
        } elseif ($v->foplace_id == $data->id) {
          $foplace++;
        } elseif ($v->fiplace_id == $data->id) {
          $fiplace++;
        }
      }
      $result = [
        'fplace' => $fplace,
        'splace' => $splace,
        'tplace' => $tplace,
        'foplace' => $foplace,
        'fiplace' => $fiplace,
      ];
      return view('teams.index', ['data' => $data, 'captain' => $captain, 'players' => $players, 'standin' => $standin, 'tournaments' => $tournaments, 'games' => $games, 'result' => $result]);
    }

    public function showCreate()
    {
      $users = User::where('id', '!=', Auth::user()->id)->get();
      $games = Games::where('enabled', 1)->get();
      return view('teams.create', ['users' => $users, 'games' => $games]);
    }

    public function create(Request $request)
    {
      $user_id = Auth::user()->id;
      $game_id = $request['game_id'];
      $validated = $request->validate([
        'name' => ['required', 'string', 'min:3', 'regex: (^[a-zA-Z\d\-_\s]+$)', ],
        'tag' => ['required', 'string', 'min:3', 'regex:/(^([a-zA-Z]+)(\d+)?$)/u', 'unique:teams'],
        'logo' => ['required', 'image','mimes:jpeg,png,jpg', 'max:2048', 'dimensions:mwidth=256,height=256'],
        'players_id' => ['required', 'array'],
        'standin_id' => ['required', 'numeric'],
        'game_id' => ['required'],
      ]);
      $data = Teams::select('game_id')->where('user_id', $user_id)->where('enabled', 1)->get();
      $j = count($game_id);
      for ($i=0; $i < $j ; $i++) {
        foreach ($data as $v) {
          if (in_array($game_id[$i], $v->game_id)) {
            return back()->with('error', 'شما درحال حاظر یک تیم فعال برای یکی از بازی های انتخاب شده دارید و مجاز به ساخت مجدد تیم نمی باشید!');
          } else {
            continue;
          }
        }
      }
      $extension = $request['logo']->extension();
      $name = $request['tag'].".".$extension;
      $url = $request->file('logo')->move(public_path('/images/teams\logo'), $name);
      $sql = Teams::create([
          'name' => $request['name'],
          'tag' => $request['tag'],
          'logo' => $name,
          'user_id' => $user_id,
          'players_id' => $request['players_id'],
          'standin_id' => $request['standin_id'],
          'game_id' => $request['game_id'],
          'enabled' => 1,
      ]);
      return redirect()->back()->with('message', 'تیم جدید با موفقیت ایجاد شد!');

    }

    public function showManage()
    {
      $teams = Teams::where('user_id', Auth::user()->id)->where('enabled', '!=', 0)->get();
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
      return view('teams.manage.index', ['teams' => $teams, 'data' => $array]);
    }

    public function disableTeam($id)
    {
      $verifyUser = Teams::where('id', $id)->where('user_id', Auth::user()->id)->update(['enabled' => 2]);
      if ($verifyUser) {
        return redirect()->back()->with('message', 'تیم باموفقیت غیر فعال شد!');
      } else {
        abort(401);
      }
    }

    public function enableTeam($id)
    {
      $user_id = Auth::user()->id;
      $verifyUser = Teams::select('user_id')->where('id', $id)->first();
      if ($verifyUser->user_id == $user_id) {
        $data = Teams::select('game_id')->where('user_id', $user_id)->where('enabled', 1)->get();
        $checkDup = Teams::select('game_id')->where('id', $id)->first();
        $game_id = $checkDup->game_id;
        foreach ($data as $v) {
          foreach ($game_id as $k) {
            $str = $v->game_id;
            $d = Str::contains($k, $str);
            if ($d) {
              return redirect()->back()->with('error', 'شما درحال حاظر یک تیم فعال برای یکی از بازی های این تیم دارید و مجاز به فعال کردن این تیم نمی باشید!');
            }
          }
        }
        Teams::where('id', $id)->where('user_id', $user_id)->update(['enabled' => 1]);
        return redirect()->back()->with('message', 'تیم باموفقیت فعال شد!');
      } else {
        abort(401);
      }
    }

    public function showEdit($id)
    {
      $data = Teams::where('id', $id)->where('user_id', Auth::user()->id)->first();
      $users = User::where('id', '!=', Auth::user()->id)->get();
      $games = Games::where('enabled', 1)->get();
      if ($data) {
        return view('teams.manage.edit', ['data' => $data, 'users' => $users, 'games' => $games]);
      } else {
        abort(401);
      }
    }

    public function saveEdit(Request $request)
    {
      unset($request['_token']);
      $validated = $request->validate([
        'logo' => ['image','mimes:jpeg,png,jpg', 'max:2048', 'dimensions:mwidth=256,height=256'],
        'players_id' => ['array'],
        'standin_id' => ['numeric'],
      ]);
      if ($request['logo']) {
          $extension = $request['logo']->extension();
          $name = $request['tag'].".".$extension;
          $url = $request->file('logo')->move(public_path('\images\teams\logo'), $name);
          $req = request()->only([
            'players_id' => $request['players_id'],
            'standin_id' => $request['standin_id'],
          ]);
          Teams::where('id', Auth::user()->id)->update($req);
      } else {
        dd(request()->all());
          Teams::where('id', Auth::user()->id)->update(request()->all());
      }
      return redirect()->back()->with('message', 'اطلاعات شما با موفقیت ویرایش شد.');
    }

}
