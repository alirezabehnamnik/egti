<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index($drm)
    {
      if ($drm != "steam" && $drm != "ubisoft" && $drm != "epicgames" && $drm != "riot") {
        abort(404);
      }
      return view('help.index', ['drm' => $drm]);
    }
}
