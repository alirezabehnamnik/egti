<?php

namespace App\Http\Controllers;
use App\Setting;
use App\User;
use App\State;
use App\City;
use App\MyGames;
use App\Games;
use App\Tournaments;
use App\Teams;
use App\TournamentsRegister;
use App\TournamentsResults;

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

    // Logout form
    public function logout(Request $request) {
      Auth::guard('admins')->logout();
      return redirect('admin/login');
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
        'about' => $input['about'],
        'work_time' => $input['work_time'],
        'phone' => $input['phone'],
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
      $data = User::paginate(50);
      return view('admin.users.index', ['data' => $data]);
    }

    // Search User
    public function searchUser(Request $request)
    {
      $enabled = null;
      if ($request['enabled'] == 2) {
        $enabled = 0;
      } elseif ($request['enabled'] == 1) {
        $enabled = 1;
      }
      $query = User::select('id', 'username', 'email', 'family', 'phone_number', 'enabled');
      if ($request['id']) {
        $query->where('id', $request['id']);
      }
      if ($request['username']) {
        $query->where('username', 'like', '%'.$request['username'].'%');
      }
      if ($request['email']) {
        $query->where('email', 'like', '%'.$request['email'].'%');
      }
      if ($request['family']) {
        $query->where('family', 'like', '%'.$request['family'].'%');
      }
      if ($request['phone_number']) {
        $query->where('phone_number', 'like', '%'.$request['phone_number'].'%');
      }
      if ($request['enabled']) {
        $query->where('enabled', $enabled);
      }
      $data = $query->paginate(50);
      return view('admin.users.index', ['data' => $data->withQueryString()]);
    }

    // Edit User
    public function showEditUser($id)
    {
      $data = User::where('id', $id)->first();
      return view('admin.users.edit', ['data' => $data]);
    }

    // Edit User Save
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

    // Add User Save
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

    // Disable User Show
    public function disbaleUserShow($id)
    {
      $data = User::where('id', $id)->first();
      if ($data->enabled == 0) {
        User::where('id', $id)->update([
          'reason' => "",
          'enabled' => 1,
        ]);
        return redirect('/admin/users');
      } else {
        return view('admin.users.disable', ['id' => $id]);
      }
    }

    // Disable User Save
    public function disableUserSave(Request $request, $id)
    {
      unset($request['_token']);
      $validated = $request->validate([
        'reason' => ['required'],
      ]);
      User::where('id', $id)->update([
        'reason' => $request['reason'],
        'enabled' => 0,
      ]);
      return redirect('/admin/users');
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
        'tag' => ['required', 'string', 'max:255'],
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

    // Save Game
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

    // Tournaments
    public function showTournaments()
    {
      $games = Games::where('enabled', 1)->get();
      $data = Tournaments::paginate(40);
      return view('admin.tournaments.index', ['data' => $data, 'games' => $games]);
    }

    // Tournament Edit Show
    public function showEditTournament($id)
    {
      $data = Tournaments::where('id', $id)->first();
      $games = Games::where('enabled', 1)->get();
      return view('admin.tournaments.edit', ['data' => $data, 'games' => $games]);
    }

    // Tournament Edit Save
    public function saveEditTournament(Request $request, $id)
    {
      unset($request['_token']);
      $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'tag' => ['required', 'string', 'max:255'],
        'avatar' => ['dimensions:min_width=256,min_height=256', 'mimes:png'],
        'game_id' => ['required'],
      ]);
      if ($request['avatar']) {
          $extension = $request['avatar']->extension();
          $name = $request['tag'].".".$extension;
          $url = $request->file('avatar')->move(public_path('\images\tournaments'), $name);
          $request->request->add(['image' => $name]);
          $req = request()->only(['name', 'tag', 'game_id', 'image', 'start_date', 'end_date', 'entry_price', 'max_teams', 'player_per_team', 'prize_pool', 'fplace_reward', 'splace_reward', 'tplace_reward', 'foplace_reward', 'fiplace_reward']);
          Tournaments::where('id', $id)->update($req);
      } else {
          Tournaments::where('id', $id)->update(request()->all());
      }
      return redirect()->back()->with('message', 'مسابقه با موفقیت بروزرسانی شد.');
    }

    // Tournament Add Show
    public function showAddTournament()
    {
      $games = Games::where('enabled', 1)->get();
      return view('admin.tournaments.add', ['games' => $games]);
    }

    // Save Tournament
    public function saveAddTournament(Request $request)
    {
      unset($request['_token']);
      $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'tag' => ['required', 'string', 'max:255', 'unique:tournaments'],
        'avatar' => ['required', 'dimensions:min_width=256,min_height=256', 'mimes:png'],
        'game_id' => ['required'],
      ]);
      $extension = $request['avatar']->extension();
      $name = $request['tag'].".".$extension;
      $url = $request->file('avatar')->move(public_path('\images\games'), $name);
      $d = Tournaments::create([
          'name' => $request['name'],
          'tag' => $request['tag'],
          'game_id' => $request['game_id'],
          'image' => $name,
          'start_date' => $request['start_date'],
          'end_date' => $request['end_date'],
          'entry_price' => $request['entry_price'],
          'max_teams' => $request['max_teams'],
          'player_per_team' => $request['player_per_team'],
          'prize_pool' => $request['prize_pool'],
          'fplace_reward' => $request['fplace_reward'],
          'splace_reward' => $request['splace_reward'],
          'tplace_reward' => $request['tplace_reward'],
          'foplace_reward' => $request['foplace_reward'],
          'fiplace_reward' => $request['fiplace_reward'],
          'enabled' => 1,
      ]);
      return redirect()->back()->with('message', 'مسابقه جدید با موفقیت افزوده شد.');
    }

    // Toggle Tournament Status
    public function toggleTournamentStatus($id)
    {
      $d = Tournaments::select('enabled')->where('id', $id)->first();
      $d = $d->enabled;
      if ($d == 1) {
        $d = 0;
      } elseif ($d == 0) {
        $d = 1;
      }
      Tournaments::where('id', $id)->update(['enabled' => $d]);
      return redirect()->back()->with('message', 'وضعیت مسابقه با موفقیت تغییر کرد.');
    }

    // End Register Tournament
    public function endTournamentRegister($id)
    {
      Tournaments::where('id', $id)->update(['enabled' => 2]);
      return redirect()->back()->with('message', 'وضعیت مسابقه با موفقیت تغییر کرد.');
    }

    // Search Tournamnet
    public function searchTournament(Request $request)
    {
      $enabled = null;
      if ($request['enabled'] == 3) {
        $enabled = 0;
      } elseif ($request['enabled'] == 1) {
        $enabled = 1;
      } elseif ($request['enabled'] == -1) {
        $enabled = -1;
      } elseif ($request['enabled'] == 2) {
        $enabled = 2;
      }
      $query = Tournaments::select('id', 'name', 'tag', 'game_id', 'start_date', 'end_date', 'enabled');
      if ($request['id']) {
        $query->where('id', $request['id']);
      }
      if ($request['name']) {
        $query->where('name', 'like', '%'.$request['name'].'%');
      }
      if ($request['tag']) {
        $query->where('tag', 'like', '%'.$request['tag'].'%');
      }
      if ($request['game_id']) {
        $query->where('game_id', $request['game_id']);
      }
      if ($request['start_date']) {
        $query->where('start_date', 'like', '%'.$request['start_date'].'%');
      }
      if ($request['end_date']) {
        $query->where('end_date', 'like', '%'.$request['end_date'].'%');
      }
      if ($request['enabled']) {
        $query->where('enabled', $enabled);
      }
      $data = $query->paginate(40);
      $games = Games::where('enabled', 1)->get();
      return view('admin.tournaments.index', ['data' => $data->withQueryString(), 'games' => $games]);
    }

    // Show Tournament Regsiters
    public function showRegister($id)
    {
      $data = TournamentsRegister::where('tournament_id', $id)->paginate(20);
      return view('admin.tournaments.register', ['data' => $data, 'id' => $id]);
    }

    // Tournament Register Search
    public function searchTournamentRegister(Request $request, $id)
    {
      $query = TournamentsRegister::where('tournament_id', $id);
      if ($request['payment_number']) {
        $query->where('payment_number', 'like', '%'.$request['payment_number'].'%');
      }
      $data = $query->paginate(40);
      return view('admin.tournaments.register', ['data' => $data->withQueryString(), 'id' => $id]);
    }

    public function tournamentResultShow()
    {
      $tournaments = Tournaments::where('enabled', 2)->get();
      $teams = Teams::where('enabled', '!=', 0)->get();
      return view('admin.tournaments.result', ['tournaments' => $tournaments, 'teams' => $teams]);
    }

    public function tournamentResultAdd(Request $request)
    {
      unset($request['_token']);
      $validated = $request->validate([
        'tournaments_id' => ['required'],
        'fplace_id' => ['required'],
        'splace_id' => ['required'],
        'tplace_id' => ['required'],
      ]);
      $d = TournamentsResults::create([
          'tournaments_id' => $request['tournaments_id'],
          'fplace_id' => $request['fplace_id'],
          'splace_id' => $request['splace_id'],
          'tplace_id' => $request['tplace_id'],
          'foplace_id' => $request['foplace_id'],
          'fiplace_id' => $request['fiplace_id'],
          'enabled' => 1,
      ]);
      Tournaments::where('id', $request['tournaments_id'])->update(['enabled' => -1]);
      return redirect()->back()->with('message', 'نتیجه مسابقه با موفقیت افزوده شد.');
    }

    // Show Teams
    public function showTeams()
    {
      $data = Teams::paginate(40);
      $users = User::all();
      return view('admin.teams.index', ['data' => $data, 'users' => $users]);
    }

    // Team Edit Show
    public function showEditTeam($id)
    {
      $data = Teams::where('id', $id)->first();
      $games = Games::where('enabled', 1)->get();
      return view('admin.teams.edit', ['data' => $data, 'games' => $games]);
    }

    // Team Edit Save
    public function saveEditTeam(Request $request, $id)
    {
      unset($request['_token']);
      $validated = $request->validate([
        'name' => ['required'],
        'tag' => ['required'],
      ]);
      if ($request['resetAvatar'] == 1) {
        $request->request->add(['logo' => 'default.png']);
        unset($request['resetAvatar']);
      }
      Teams::where('id', $id)->update(request()->all());
      return redirect()->back()->with('message', 'اطلاعات تیم با موفقیت ویرایش شد.');
    }

    // Search Tournamnet
    public function searchTeam(Request $request)
    {
      $enabled = null;
      if ($request['enabled'] == 3) {
        $enabled = 0;
      } elseif ($request['enabled'] == 1) {
        $enabled = 1;
      } elseif ($request['enabled'] == 2) {
        $enabled = 2;
      }
      $query = Teams::select('id', 'name', 'tag', 'user_id', 'enabled');
      if ($request['id']) {
        $query->where('id', $request['id']);
      }
      if ($request['name']) {
        $query->where('name', 'like', '%'.$request['name'].'%');
      }
      if ($request['tag']) {
        $query->where('tag', 'like', '%'.$request['tag'].'%');
      }
      if ($request['user_id']) {
        $query->where('user_id', $request['user_id']);
      }
      if ($request['enabled']) {
        $query->where('enabled', $enabled);
      }
      $data = $query->paginate(40);
      $users = User::all();
      return view('admin.teams.index', ['data' => $data->withQueryString(), 'users' => $users]);
    }

    // Disable Team Show
    public function disbaleTeamShow($id)
    {
      $data = Teams::where('id', $id)->first();
      if ($data->enabled == 0) {
        Teams::where('id', $id)->update([
          'enabled' => 1,
        ]);
        return redirect('/admin/teams');
      } else {
        return view('admin.teams.disable', ['id' => $id]);
      }
    }

    // Disable Team Save
    public function disableTeamSave(Request $request, $id)
    {
      unset($request['_token']);
      $validated = $request->validate([
        'reason' => ['required'],
      ]);
      Teams::where('id', $id)->update([
        'reason' => $request['reason'],
        'enabled' => 0,
      ]);
      return redirect('/admin/teams');
    }

}
