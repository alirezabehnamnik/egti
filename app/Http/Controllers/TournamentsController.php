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
      $data = Tournaments::where('enabled', 1)->orderBy('start_date', 'ASC')->limit(3)->get();
      $etour = Tournaments::where('enabled', -1)->orderBy('start_date', 'ASC')->limit(3)->get();
      $soon = Tournaments::where('enabled', 2)->orderBy('start_date', 'ASC')->limit(3)->get();
      $inprogress = Tournaments::where('enabled', 4)->orderBy('start_date', 'DESC')->limit(3)->get();
      return view('tournaments.index', ['data' => $data, 'etour' => $etour, 'soon' => $soon, 'inprogress' => $inprogress]);
    }

    public function showActive()
    {
      $data = Tournaments::where('enabled', 1)->orderBy('start_date', 'ASC')->paginate(12);
      return view('tournaments.active', ['data' => $data]);
    }

    public function showEnd()
    {
      $data = Tournaments::where('enabled', -1)->orderBy('start_date', 'ASC')->paginate(12);
      return view('tournaments.end', ['data' => $data]);
    }

    public function showSoon()
    {
      $data = Tournaments::where('enabled', 2)->orderBy('start_date', 'ASC')->paginate(12);
      return view('tournaments.soon', ['data' => $data]);
    }

    public function showProg()
    {
      $data = Tournaments::where('enabled', 4)->orderBy('start_date', 'DESC')->paginate(12);
      return view('tournaments.progress', ['data' => $data]);
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

      if ($b->player_per_team != count($a->players_id + 1)) {
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
      $user_id = Auth::user()->id;
      $team_ids = array();
      $teams = Teams::select('id')->whereRaw("JSON_CONTAINS(players_id, '[\"$user_id\"]' )")->orWhere('standin_id', $user_id)->get();
      foreach ($teams as $v) {
        array_push($team_ids, $v->id);
      }
      $data = TournamentsRegister::where('user_id', $user_id)->orWhereIn('team_id', $team_ids)->paginate(8);
      return view('tournaments.mytournaments', ['data' => $data]);
    }
}
