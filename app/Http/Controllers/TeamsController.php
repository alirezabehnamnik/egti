<?php

namespace App\Http\Controllers;
use App\Teams;
use App\User;
use App\Games;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamsController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index($tag)
  {
    return view('teams.index', ['tag' => $tag]);
  }

  public function showCreate()
  {
    $users = User::where('id', '!=', Auth::user()->id)->get();
    $games = Games::where('enabled', 1)->get();
    return view('teams.create', ['users' => $users, 'games' => $games]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  Request  $request
   * @return \App\Teams
   */
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
    $cnt = null;
    $hast = null;
    $nist = null;
    for ($i=0; $i < $j ; $i++) {
      foreach ($data as $v) {
        if (in_array($game_id[$i], $v->game_id)) {
          $hast++;
          return back()->with('error', 'شما درحال حاظر یک تیم فعال برای بازی '. $v->game->name .' دارید و مجاز به ساخت مجدد تیم نمی باشید!');
        } else {
          $nist++;
          continue;
        }
        $cnt++;
      }
    }
    $extension = $request['logo']->extension();
    $name = $request['tag'].".".$extension;
    $url = $request->file('logo')->move(public_path('\images\teams\logo'), $name);
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
    return view('teams.manage.index', ['teams' => $teams,]);
  }

  public function deleteTeam($id)
  {
    $verifyUser = Teams::where('id', $id)->where('user_id', Auth::user()->id)->update(['enabled' => 2]);
    if ($verifyUser) {
      return redirect()->back()->with('message', 'تیم باموفقیت غیر فعال شد!');
    } else {
      abort(403, 'Access Denied!');
    }
  }

  public function undeleteTeam($id)
  {
    $verifyUser = Teams::where('id', $id)->where('user_id', Auth::user()->id)->update(['enabled' => 1]);
    if ($verifyUser) {
      return redirect()->back()->with('message', 'تیم باموفقیت فعال شد!');
    } else {
      abort(403, 'Access Denied!');
    }
  }

  public function showEdit($id)
  {
    $data = Teams::where('id', $id)->where('user_id', Auth::user()->id)->get();
    if (!$data->isEmpty()) {
      abort(403, 'Under Construction!');
      // return view('teams.manage.edit', ['data' => $data]);
    } else {
      abort(403, 'Access Denied!');
    }
  }


}
