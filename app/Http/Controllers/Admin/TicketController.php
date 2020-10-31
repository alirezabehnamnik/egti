<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

use App\Supports;
use App\SupportComments;
use App\Teams;
use App\User;

class TicketController extends Controller
{
  public function index()
  {
    $tickets = Supports::where('enabled', '<', 5)->paginate(30);
    return view('admin.ticket.index', ['tickets' => $tickets]);
  }
  public function ended()
  {
    $tickets = Supports::where('enabled', '>=', 5)->paginate(30);
    return view('admin.ticket.index', ['tickets' => $tickets]);
  }

  public function showTicket($id)
  {
    $data = Supports::where('id', $id)->first();
    $comments = SupportComments::where('support_id', $data->id)->get();
    return view('admin.ticket.single', ['data' => $data, 'comments' => $comments]);
  }

  public function newComment(Request $request, $id)
  {
    $admin = Auth::guard('admins')->user();
    $time = Carbon::now()->format('Y-m-d-H-i-s');
    $array = array();
    $validated = $request->validate([
      'message' => ['required'],
    ]);
    if ($request['attachment']) {
      $allowedfileExtension=['jpeg','jpg','png','zip','rar'];
      foreach ($request['attachment'] as $v) {
        $rand = mt_rand(0, 9999);
        $extension = $v->extension();
        $check = in_array($extension,$allowedfileExtension);
        if (!$check) {
          return redirect()->back()->with('error', 'فرمت فایل پیوست مجاز نمی باشد!');
        }
        if (round($v->getSize() / 1024 > 2200)) {
          return redirect()->back()->with('error', 'حجم فایل پیوست, بیش از حد مجاز می باشد!');
        }
        $name = $admin->username."-".$time."-".$rand.".".$extension;
        $url = $v->move(public_path('/images/attachments'), $name);
        array_push($array, $name);
      }
    }
    $sql = SupportComments::create([
        'support_id' => $id,
        'is_admin' => 1,
        'message' => $request['message'],
        'attachment' => $array,
        'created_at' => Carbon::now()->setTimezone('Asia/Tehran'),
        'updated_at' => Carbon::now()->setTimezone('Asia/Tehran'),
        'enabled' => 1,
    ]);
    Supports::where('id', $id)->update([
      'enabled' => 3,
    ]);
    return redirect()->back()->with('message', 'پاسخ شما با موفقیت ارسال شد.');
  }

  public function setInProgress($id)
  {
    $sql = Supports::where('id', $id)->update([
      'enabled' => 2,
    ]);
    if ($sql) {
      return redirect()->back()->with('message', 'تیکت درحالت "درحال پیگیری" قرار گرفت');
    } else {
      return redirect()->back()->with('error', 'خطایی رخ داده است لطفا مجددا امتحان کنید!');
    }
  }

  public function closeTicket($id)
  {
    $sql = Supports::where('id', $id)->update([
      'enabled' => 6,
    ]);
    if ($sql) {
      return redirect()->back()->with('message', 'تیکت با موفقیت بسته شد.');
    } else {
      return redirect()->back()->with('error', 'خطایی رخ داده است لطفا مجددا امتحان کنید!');
    }
  }

  public function search(Request $request)
  {
    $query = Supports::select('id','title', 'user_id', 'department', 'created_at', 'enabled');
    if ($request['department']) {
      $query->where('department', 'like', '%'.$request['department'].'%');
    }
    if ($request['enabled']) {
      $query->where('enabled', $request['enabled']);
    }
    $tickets = $query->where('enabled', '<', 5)->paginate(30);
    return view('admin.ticket.index', ['tickets' => $tickets->withQueryString()]);
  }

  public function showCreate()
  {
    $users = User::all();
    return view('admin.ticket.create', ['users' => $users]);
  }

  public function saveCreate(Request $request)
  {
    $time = Carbon::now()->format('Y-m-d-H-i-s');
    $array = array();
    $validated = $request->validate([
      'department' => ['required'],
      'title' => ['required'],
      'description' => ['required'],
    ]);
    if ($request['attachment']) {
      $allowedfileExtension=['jpeg','jpg','png','zip','rar'];
      foreach ($request['attachment'] as $v) {
        $rand = mt_rand(0, 9999);
        $extension = $v->extension();
        $check = in_array($extension,$allowedfileExtension);
        if (!$check) {
          return redirect()->back()->with('error', 'فرمت فایل پیوست مجاز نمی باشد!');
        }
        if (round($v->getSize() / 1024 > 2200)) {
          return redirect()->back()->with('error', 'حجم فایل پیوست, بیش از حد مجاز می باشد!');
        }
        $name = "adminupload-".$time."-".$rand.".".$extension;
        $url = $v->move(public_path('/images/attachments'), $name);
        array_push($array, $name);
      }
    }
    $sql = Supports::create([
        'user_id' => $request['user_id'],
        'department' => $request['department'],
        'team_id' => $request['team_id'],
        'payment_number' => $request['payment_number'],
        'title' => $request['title'],
        'description' => $request['description'],
        'attachment' => $array,
        'enabled' => 3,
    ]);
    return redirect()->back()->with('message', 'تیکت شما با موفقیت ارسال شد. مدیران ما در اولین فرصت مشکل شما را بررسی خواهند کرد.');
  }

}
