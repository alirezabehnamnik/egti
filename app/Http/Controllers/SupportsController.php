<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

use App\Supports;
use App\SupportComments;
use App\Teams;

class SupportsController extends Controller
{
    public function index()
    {
      $tickets = Supports::where('user_id', Auth::user()->id)->paginate(10);
      return view('ticket.index', ['tickets' => $tickets]);
    }

    public function showCreate()
    {
      $user_id = Auth::user()->id;
      $id = "$user_id";
      $teams = Teams::where('user_id', $user_id)->orWhere('standin_id', $user_id)->orWhereJsonContains('players_id', $id)->where('enabled', 1)->get();
      return view('ticket.create', ['teams' => $teams]);
    }

    public function saveCreate(Request $request)
    {
      $user_id = Auth::user()->id;
      $time = Carbon::now()->format('Y-m-d-H-i-s');
      $array = array();
      $validated = $request->validate([
        'department' => ['required'],
        'title' => ['required'],
        'description' => ['required'],
      ]);
      if ($request['attachment']) {
        foreach ($request['attachment'] as $v) {
          $rand = mt_rand(0, 9999);
          $extension = $v->extension();
          $name = Auth::user()->username."-".$time."-".$rand.".".$extension;
          $url = $v->move(public_path('\images\attachments'), $name);
          array_push($array, $name);
        }
      }
      $sql = Supports::create([
          'user_id' => $user_id,
          'department' => $request['department'],
          'team_id' => $request['team_id'],
          'payment_number' => $request['payment_number'],
          'title' => $request['title'],
          'description' => $request['description'],
          'attachment' => $array,
          'enabled' => 1,
      ]);
      return redirect()->back()->with('message', 'تیکت شما با موفقیت ارسال شد. مدیران ما در اولین فرصت مشکل شما را بررسی خواهند کرد.');
    }

    public function showTicket($id)
    {
      $data = Supports::where('id', $id)->first();
      $comments = SupportComments::where('support_id', $data->id)->get();
      return view('ticket.single', ['data' => $data, 'comments' => $comments]);
    }

    public static function now(\DateTimeZone $timeZone = null): Jalalian {
      return true;
    }

    public function newComment(Request $request, $id)
    {
      $time = Carbon::now()->format('Y-m-d-H-i-s');
      $array = array();
      $validated = $request->validate([
        'message' => ['required'],
      ]);
      if ($request['attachment']) {
        foreach ($request['attachment'] as $v) {
          $rand = mt_rand(0, 9999);
          $extension = $v->extension();
          $name = Auth::user()->username."-".$time."-".$rand.".".$extension;
          $url = $v->move(public_path('\images\attachments'), $name);
          array_push($array, $name);
        }
      }
      $sql = SupportComments::create([
          'support_id' => $id,
          'is_admin' => 0,
          'message' => $request['message'],
          'attachment' => $array,
          'created_at' => Carbon::now()->setTimezone('Asia/Tehran'),
          'updated_at' => Carbon::now()->setTimezone('Asia/Tehran'),
          'enabled' => 1,
      ]);
      return redirect()->back()->with('message', 'پاسخ شما با موفقیت ارسال شد.');
    }
}
