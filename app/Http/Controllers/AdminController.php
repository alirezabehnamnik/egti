<?php

namespace App\Http\Controllers;
use App\Setting;
use App\User;
use App\State;
use App\City;
use App\MyGames;
use App\Games;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index()
    {
      return view('admin.index');
    }

    // Login form
    public function showLogin()
    {
      return view('admin.login');
    }
    public function login(Request $request)
    {
      $input = $request->all();

      $this->validate($request, [
          'username' => 'required',
          'password' => 'required',
      ]);

      if(Auth::guard('admins')->attempt(array('username' => $input['username'], 'password' => $input['password'])))
      {
          return redirect()->route('admin_panel');
      }else{
          return redirect()->route('admin_show_login')
              ->with('error','نام کاربری و یا رمزعبور اشتباه است.');
      }
    }

    // Settings
    public function showSetting()
    {
      $setting = Setting::first();
      return view('admin.setting', ['data' => $setting]);
    }

    public function updateSetting(Request $request)
    {
      $setting = Setting::first();
      $input = $request->all();
      $array = array();

      // Navbar Update
      $navbarArray = array();
      for ($i=0; $i < count($input['navtext']) ; $i++) {
        if ($input['navtext'][$i] && $input['navlink'][$i]) {
          $text = $input['navtext'][$i];
          $link = $input['navlink'][$i];
          $icon = $input['navicon'][$i];
          $array = array(
            'text' => $text,
            'link' => $link,
            'icon' => $icon,
          );
          array_push($navbarArray, $array);
        }
      }
      // Slider Update
      $sliderArray = array();
      for ($i=0; $i < count($input['slimage']) ; $i++) {
        if ($input['slimage'][$i]) {
          $image = $input['slimage'][$i];
          $title = $input['sltitle'][$i];
          $text = $input['sltext'][$i];
          $array = array(
            'image' => $image,
            'title' => $title,
            'text' => $text,
          );
          array_push($sliderArray, $array);
        }
      }
      // Social Networks Update
      $networkArray = array();
      for ($i=0; $i < count($input['nicon']) ; $i++) {
        if ($input['nicon'][$i]) {
          $icon = $input['nicon'][$i];
          $title = $input['ntitle'][$i];
          $link = $input['nlink'][$i];
          $array = array(
            'icon' => $icon,
            'title' => $title,
            'link' => $link,
          );
          array_push($networkArray, $array);
        }
      }
      // Friends Footer Update
      $friendsArray = array();
      for ($i=0; $i < count($input['ftext']) ; $i++) {
        if ($input['ftext'][$i]) {
          $text = $input['ftext'][$i];
          $link = $input['flink'][$i];
          $array = array(
            'text' => $text,
            'link' => $link,
          );
          array_push($friendsArray, $array);
        }
      }
      // Link Footer Update
      $linkArray = array();
      for ($i=0; $i < count($input['litext']) ; $i++) {
        if ($input['litext'][$i]) {
          $text = $input['litext'][$i];
          $link = $input['lilink'][$i];
          $array = array(
            'text' => $text,
            'link' => $link,
          );
          array_push($linkArray, $array);
        }
      }
      // Learning Footer Update
      $learningArray = array();
      for ($i=0; $i < count($input['letext']) ; $i++) {
        if ($input['letext'][$i]) {
          $text = $input['letext'][$i];
          $link = $input['lelink'][$i];
          $array = array(
            'text' => $text,
            'link' => $link,
          );
          array_push($learningArray, $array);
        }
      }
      $sql = Setting::where('id', 1)->update([
        'navbar_item' => json_encode($navbarArray),
        'slider' => json_encode($sliderArray),
        'showSponsers' => $input['showSponsers'],
        'showPartners' => $input['showPartners'],
        'social_networks' => json_encode($networkArray),
        'email' => $input['email'],
        'friends_footer' => json_encode($friendsArray),
        'link_footer' => json_encode($linkArray),
        'learning_footer' => json_encode($learningArray),
      ]);
      if ($sql == 1) {
        return redirect()->route('admin_settings')
            ->with('message','تنظیمات با موفقیت بروزرسانی شد.');
      } else {
        return redirect()->route('admin_settings')
            ->with('error','خطایی رخ داده است لطفا مجددا تلاش کنید!');
      }
    }

    // Users
    public function showUsers()
    {
      $data = User::paginate(100);
      return view('admin.users.index', ['data' => $data]);
    }

    public function searchUser(Request $request)
    {
      $input = $request->all();
      $id = $input['id'];
      $username = $input['username'];
      $email = $input['email'];
      $family = $input['family'];
      $phone_number = $input['phone_number'];
      $query = User::select('id', 'username', 'email', 'family', 'phone_number');
      if ($id) {
        $query->where('id', $id);
      }
      if ($username) {
        $query->where('username', 'like', '%'.$username.'%');
      }
      if ($email) {
        $query->where('email', 'like', '%'.$email.'%');
      }
      if ($family) {
        $query->where('family', 'like', '%'.$family.'%');
      }
      if ($phone_number) {
        $query->where('phone_number', 'like', '%'.$phone_number.'%');
      }
      $data = $query->paginate(100);
      return view('admin.users.index', ['data' => $data]);
    }

    // Edit User
    public function showEditUser($id)
    {
      $data = User::where('id', $id)->first();
      return view('admin.users.edit', ['data' => $data]);
    }

    public function saveEditUser(Request $request, $id)
    {
      if (!$request['password']) {
          unset($request['password']);
          unset($request['password_confirmation']);
      }
      unset($request['_token']);
      $validated = $request->validate([
        'password' => ['confirmed'],
      ]);
      if ($request['resetAvatar'] == 1) {
        $request->request->add(['avatar' => 'default.png']);
        unset($request['resetAvatar']);
      }
      User::where('id', $id)->update(request()->all());
      return redirect()->back()->with('message', 'اطلاعات کاربر با موفقیت ویرایش شد.');
    }

    // Add User
    public function showAddUser()
    {
      $state = State::where('enabled', 1)->get();
      $games_list = MyGames::where('enabled', 1)->get();
      return view('admin.users.add', ['state' => $state, 'games_list' => $games_list]);
    }

    public function addUser(Request $request)
    {
      $validated = $request->validate([
        'username' => ['required', 'string', 'min:3', 'alpha_dash', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'name' => ['required', 'string', 'max:255'],
        'family' => ['required', 'string', 'max:255'],
        'state_id' => ['required', 'numeric'],
        'city_id' => ['required', 'numeric'],
        'phone_number' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10', 'unique:users'],
      ]);
      User::create([
          'username' => $request['username'],
          'password' => Hash::make($request['password']),
          'email' => $request['email'],
          'avatar' => 'default.png',
          'name' => $request['name'],
          'family' => $request['family'],
          'state_id' => $request['state_id'],
          'city_id' => $request['city_id'],
          'address' => $request['address'],
          'phone_number' => $request['phone_number'],
          'steam' => $request['steam'],
          'uplay' => $request['uplay'],
          'epicgames' => $request['epicgames'],
          'riot' => $request['riot'],
          'mygames' => $request['mygames'],
          'platforms_id' => $request['platforms_id'],
      ]);
      return redirect()->back()->with('message', 'کاربر با موفقیت افزوده شد.');
    }
    public function getcities($id) {
      $cities = State::find($id)->City;
      return response()->json($cities);
    }

    // Games
    public function showGames()
    {
      $data = Games::all();
      return view('admin.games.index', ['data' => $data]);
    }

    // Show Game Edit
    public function showEditGame($id)
    {
      $data = Games::where('id', $id)->first();
      return view('admin.games.edit', ['data' => $data]);
    }

    // Save Game Edit
    public function saveEditGame(Request $request, $id)
    {
      unset($request['_token']);
      $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'tag' => ['required', 'string', 'max:255', 'unique:games'],
        'avatar' => ['dimensions:min_width=645,min_height=300', 'mimes:jpeg,jpg,png'],
      ]);
      if ($request['avatar']) {
          $extension = $request['avatar']->extension();
          $name = $request['tag'].".".$extension;
          $url = $request->file('avatar')->move(public_path('\images\games'), $name);
          $request->request->add(['image' => $name]);
          $req = request()->only(['name', 'tag', 'image', 'platforms']);
          Games::where('id', $id)->update($req);
      } else {
          Games::where('id', $id)->update(request()->all());
      }
      return redirect()->back()->with('message', 'بازی با موفقیت بروزرسانی شد.');
    }

    // Toggle Game Status
    public function toggleGameStatus($id)
    {
      $d = Games::select('enabled')->where('id', $id)->first();
      $d = $d->enabled;
      if ($d == 1) {
        $d = 0;
      } elseif ($d == 0) {
        $d = 1;
      }
      Games::where('id', $id)->update(['enabled' => $d]);
      return redirect()->back()->with('message', 'وضعیت بازی با موفقیت تغییر کرد.');
    }

    // Show Game Add
    public function showAddGame()
    {
      return view('admin.games.add');
    }

    // Save Game Edit
    public function saveAddGame(Request $request)
    {
      unset($request['_token']);
      $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'tag' => ['required', 'string', 'max:255', 'unique:games'],
        'avatar' => ['required', 'dimensions:min_width=645,min_height=300', 'mimes:jpeg,jpg,png'],
        'platforms' => ['required'],
      ]);
      $extension = $request['avatar']->extension();
      $name = $request['tag'].".".$extension;
      $url = $request->file('avatar')->move(public_path('\images\games'), $name);
      Games::create([
          'name' => $request['name'],
          'tag' => $request['tag'],
          'image' => $name,
          'platforms' => $request['platforms'],
          'enabled' => 1,
      ]);
      return redirect()->back()->with('message', 'بازی جدید با موفقیت افزوده شد.');
    }

}
