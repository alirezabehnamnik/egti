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
      $validated = $request->validate([
        'password' => ['confirmed'],
        'name' => ['required', 'string', 'max:255'],
        'family' => ['required', 'string', 'max:255'],
      ]);
      if ($request['passwrod']) {
        User::where('id', Auth::user()->id)->update([
          'password' => Hash::make($request['password']),
          'name' => $request['name'],
          'family' => $request['family'],
          'steam' => $request['steam'],
          'uplay' => $request['uplay'],
          'epicgames' => $request['epicgames'],
          'riot' => $request['riot'],
          'mygames' => $request['mygames'],
          'platforms_id' => $request['platforms_id'],
        ]);
      } else {
        User::where('id', Auth::user()->id)->update([
          'name' => $request['name'],
          'family' => $request['family'],
          'steam' => $request['steam'],
          'uplay' => $request['uplay'],
          'epicgames' => $request['epicgames'],
          'riot' => $request['riot'],
          'mygames' => $request['mygames'],
          'platforms_id' => $request['platforms_id'],
        ]);
      }
      return redirect()->back()->with('message', 'اطلاعات شما با موفقیت ویرایش شد.');
    }
}
