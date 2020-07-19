<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function drm($drm)
    {
      return view('help.index', ['drm' => $drm]);
    }
}
