<?php

namespace App\Http\Controllers;
use App\MyGames;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($username)
    {
      $data = User::where('username', $username)->first();
      $games = MyGames::select('name')->whereIn('id', $data->mygames)->get();
      return view('users.index', ['data' => $data, 'games' => $games]);
    }

    public function edit()
    {
      $user = Auth::user();
      $games_list = MyGames::where('enabled', 1)->get();
      return view('users.edit', ['user' => $user, 'games_list' => $games_list]);
    }

    public function save(Request $request)
    {
      if (!$request['password']) {
          unset($request['password']);
          unset($request['password_confirmation']);
      }
      unset($request['_token']);
      $validated = $request->validate([
        'password' => ['confirmed'],
        'name' => ['required', 'string', 'max:255'],
        'family' => ['required', 'string', 'max:255'],
      ]);
      if ($request['avatar2']) {
          $extension = $request['avatar2']->extension();
          $name = Auth::user()->username.".".$extension;
          $url = $request->file('avatar2')->move(public_path('\images\avatars'), $name);
          $request->request->add(['avatar' => $name]);
          $req = request()->only(['name', 'family', 'steam', 'uplay', 'epicgames', 'riot', 'mygames', 'platforms_id', 'avatar']);
          User::where('id', Auth::user()->id)->update($req);
      } else {
          User::where('id', Auth::user()->id)->update(request()->all());
      }

      return redirect()->back()->with('message', 'اطلاعات شما با موفقیت ویرایش شد.');
    }
}
