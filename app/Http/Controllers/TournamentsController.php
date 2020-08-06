<?php

namespace App\Http\Controllers;
use App\Tournaments;
use App\TournamentsResults;
use App\TournamentsRegister;
use App\Teams;
use App\User;


use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class TournamentsController extends Controller
{
    public function index()
    {
      $data = Tournaments::where('enabled', '>', 0)->orderBy('start_date', 'ASC')->paginate(6);
      $etour = Tournaments::where('enabled', '-1')->orderBy('start_date', 'ASC')->paginate(6);
      return view('tournaments.index', ['data' => $data, 'etour' => $etour]);
    }

    public function result($id)
    {
      $tournaments = Tournaments::find($id);
      $trResult = TournamentsResults::find($tournaments->trResult->id);

      $fplace = Teams::find($trResult->fplace_id);
      $splace = Teams::find($trResult->splace_id);
      $tplace = Teams::find($trResult->tplace_id);

      $fp_players = User::whereIn('id', $fplace->players_id)->get();
      $sp_players = User::whereIn('id', $splace->players_id)->get();
      $tp_players = User::whereIn('id', $tplace->players_id)->get();

      return view('tournaments.result', [
        'tournament' => $tournaments,
        'trResult' => $trResult,
        'fplace' => $fplace,
        'fp_players' => $fp_players,
        'splace' => $splace,
        'sp_players' => $sp_players,
        'tplace' => $tplace,
        'tp_players' => $tp_players,
      ]);
    }

    public function register()
    {
      if (Auth::check()) {
        dd("here");
      } else {
        dd("hoer");
      }
      return view('tournaments.register');
    }

    public function myTournaments()
    {
      $data = TournamentsRegister::where('user_id', Auth::user()->id)->paginate(4);
      return view('tournaments.mytournaments', ['data' => $data]);
    }
}
