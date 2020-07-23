<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\State;
use App\City;
use App\MyGames;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data['rules']);
        return Validator::make($data, [
            'username' => ['required', 'string', 'min:3', 'alpha_dash', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'family' => ['required', 'string', 'max:255'],
            'state_id' => ['required', 'numeric'],
            'city_id' => ['required', 'numeric'],
            'phone_number' => ['required', 'numeric','min:11', 'max:11'],
            'rules' => ['accepted'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // $vehicleString = json_encode($data['platforms_id']);
        // dd($data['platforms_id']);
        return User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'name' => $data['name'],
            'family' => $data['family'],
            'state_id' => $data['state_id'],
            'city_id' => $data['city_id'],
            'address' => $data['address'],
            'phone_number' => $data['phone_number'],
            'steam' => $data['steam'],
            'uplay' => $data['uplay'],
            'epicgames' => $data['epicgames'],
            'riot' => $data['riot'],
            'mygames' => $data['mygames'],
            'platforms_id' => $data['platforms_id'],
        ]);
    }

    public function showRegistrationForm()
    {
      $state = State::where('enabled', 1)->get();
      $games_list = MyGames::where('enabled', 1)->get();
      return view('auth.register',  ['state' => $state, 'games_list' => $games_list]);
    }

    public function getcities($id) {
      $cities = City::where('state_id', $id)->get();
      return response()->json($cities);
    }

}
