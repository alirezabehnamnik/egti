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
      if (!$tournaments->trResult) {
        abort(404);
      }
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

    public function showRegister($id)
    {
      $data = Tournaments::where('id', $id)->first();
      if (!$data) {
        abort(404);
      }
      $teams = Teams::where('user_id', Auth::user()->id)->whereRaw("JSON_CONTAINS(game_id, '[\"$data->game_id\"]' )")->where('enabled', 1)->get();
      return view('tournaments.register', ['data' => $data, 'teams' => $teams]);
    }

    public function register(Request $request)
    {
      $user_id = Auth::user()->id;
      $validated = $request->validate([
        'team_id' => ['required', 'numeric'],
        'rules' => ['accepted'],
      ]);

      $checkDup = TournamentsRegister::where('user_id', $user_id)->where('tournament_id', $request['tournament_id'])->get();

      if (!$checkDup->isEmpty()) {
        return back()->with('error', 'شما قبلا در این مسابقه ثبت نام کرده اید و مجاز به ثبت نام مجدد نمی باشید!');
      }
      
      $a = Teams::where('id', $request['team_id'])->first();
      $b = Tournaments::where('id', $request['tournament_id'])->first();

      if ($b->teams_count == $b->max_teams) {
        return back()->with('error', 'ظرفیت ثبت نام در این مسابقه تکمیل شده است!');
      }

      if ($b->player_per_team != count($a->players_id)) {
        return back()->with('error', 'حداقل بازیکن تیم برای این مسابقه باید '. $b->player_per_team.' نفر باشد!');
      }

       $sql = TournamentsRegister::create([
          'tournament_id' => $request['tournament_id'],
          'team_id' => $request['team_id'],
          'user_id' => $user_id,
          'enabled' => 1,
      ]);

      if ($sql) {
         $summ = $b->teams_count + 1;
         Tournaments::where('id', $request['tournament_id'])->update(['teams_count' => $summ]);

         if ($summ == $b->max_teams) {
           Tournaments::where('id', $request['tournament_id'])->update(['enabled' => 2]);
         }

      }

      return redirect()->back()->with('message', 'شما با موفقیت در مسابقه '. $request['tournament_name'] .' ثبت نام کردید!');
    }

    public function myTournaments()
    {
      $data = TournamentsRegister::where('user_id', Auth::user()->id)->paginate(4);
      return view('tournaments.mytournaments', ['data' => $data]);
    }
}
