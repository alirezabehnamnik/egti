<?php

namespace App\Http\Controllers;
use App\Setting;

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
}
