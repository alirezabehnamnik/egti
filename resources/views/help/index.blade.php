@extends('layouts.help')

@section('content')

<div class="container-fluid drm-{{$drm}}" style="height:200vh;">
  <div class="row">
    <div class="col-md-12 drm-top-bar">
        <img src="/images/{{$drm}}.png" width="64px">
        راهنمای
        @if ($drm == "steam")
          استیم
        @elseif ($drm == "ubisoft")
          یوپلی
        @elseif ($drm == "epicgames")
          اپیک گیمز
        @elseif ($drm == "riot")
          ریوت گیمز
        @endif
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12 text-center">
      برای پیدا کردن نام کاربری حساب
      @if ($drm == "steam")
        استیم
      @elseif ($drm == "ubisoft")
        یوپلی
      @elseif ($drm == "epicgames")
        اپیک گیمز
      @elseif ($drm == "riot")
        ریوت گیمز
      @endif
       خود مراحل زیر را به ترتیب انجام دهید.
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div class="line"></div>
      <br><br><br><br><br><br>
      <div class="col-md-5 drm-text drm-text-left">
        <div class="circle"></div>
        تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست
      </div>
      <div class="col-md-5 drm-text drm-text-right">
        <div class="circle"></div>
        تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست
      </div>
    </div>
  </div>
</div>

@endsection
