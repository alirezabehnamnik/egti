<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
      return view('admin.setting');
    }
}
