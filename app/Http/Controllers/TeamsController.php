<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    return view('teams.create');
  }

  public function create(Request $request)
  {
    if ($request->hasFile('logo')) {
            //  Let's do everything here
            if ($request->file('logo')->isValid()) {
                //
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'logo' => 'mimes:jpeg,png|max:1014',
                ]);
                $extension = $request->logo->extension();
                $d = $request->logo->storeAs('/public/images/teams/logo', $validated['name'].".".$extension);
                $url = Storage::put($d);
                dd($url);
            }
        }
        abort(500, 'Could not upload image :(');
  }
}
