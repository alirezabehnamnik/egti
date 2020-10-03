@extends('layouts.help')

@section('content')
<div class="container-fluid drm-{{$drm}}" style="height:200vh;">
  <div class="drm-header">
      <h3>
        <img src="/images/{{$drm}}.png" width="110px">  &nbsp;
        آموزش پیدا کردن آی دی
        @if ($drm == "steam")
          استیم
        @elseif ($drm == "ubisoft")
          یوپلی
        @elseif ($drm == "epicgames")
          اپیک گیمز
        @elseif ($drm == "riot")
          ریوت گیمز
        @endif
      </h3>
    <hr>
  </div>
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
  @if ($drm == "steam")
  <div class="row">
    <div class="col-md-12">
      <ul class="help-ul">
        <li>
          ابتدا وارد وبسایت
          <a href="https://store.steampowered.com/" target="_blank">
            استیم
          </a>
          شوید.
        </li>
        <li>
          سپس مانند تصویر زیر روی گزینه <kbd> Login </kbd> کلیک کنید.
          <br>
          <br>
          <div class="col-8">
            <img src="/images/help/steam/1.jpg" width="100%;">
          </div>
        </li>
        <li>
          اطلاعات حساب استیم خود را در قسمت های خواسته شده وارد کنید و سپس گزینه <kbd> Sign in </kbd> را بزنید تا وارد حساب کاربری خود شوید.
          <br>
          <br>
          <div class="col-8">
            <img src="/images/help/steam/2.jpg" width="100%;">
          </div>
        </li>
        <li>
          پس از اینکه وارد حساب کاربری خود شدید, مطابق تصویر بر روی نام حساب خود در بالا سمت راست وبسایت کلیک کنید و در منوی باز شده بر روی گزینه <kbd> View profile </kbd> کلیک کنید تا وارد صفحه پروفایل خود شوید.
          <br>
          <br>
          <div class="col-8">
            <img src="/images/help/steam/3.jpg" width="100%;">
          </div>
        </li>
        <li>
          در صورتی که لینک صفحه بازشده در قسمت بالای مرورگر, به صورت <kbd> https://steamcommunity.com/profiles/765611990918730 </kbd> باشد فقط کافیست عداد آخر لینک یعنی <kbd> 765611990918730 </kbd> را کپی کرده و در قسمت "استیم آی دی" وارد کنید.
          <br>
          <br>
          اما در صورتی که لینک صفحه بازشده در قسمت بالای مرورگر به صورت <kbd> https://steamcommunity.com/id/example </kbd> باشد باید مراحل بعد را نیز انجام دهید تا استیم آی دی خود را پیدا کنید.
        </li>
        <br>
        <hr>
        <br>
        <li>
          ابتدا قسمت آخر لینک پروفایل خود یعنی <kbd> example </kbd> را کپی کرده و سپس روی این
          <a href="https://steamdb.info/calculator/" target="_blank">
            لینک
          </a>
          کلیک کنید.
        </li>
        <li>
          پس از باز شدن وبسایت مطابق تصویر, قسمت آخر لینک پروفایل که در مرحله قبل کپی کرده بودید را در قسمت شماره 1 وارد کنید و سپس بر روی قسمت 2 کلیک کنید تا به مرحله بعد بروید.
          <br>
          <br>
          <div class="col-8">
            <img src="/images/help/steam/4.jpg" width="100%;">
          </div>
        </li>
        <li>
          در صفحه باز شده, قسمتی که در تصویر مشخص شده استیم آی دی شما می باشد. کد مشخص شده یعنی <kbd> 7656119839934 </kbd> را کپی کرده و سپس در قسمت "استیم آی دی" وارد کنید.
          <br>
          <br>
          <div class="col-8">
            <img src="/images/help/steam/5.jpg" width="100%;">
          </div>
        </li>
      </ul>
    </div>
  </div>
  @elseif ($drm == "epicgames")
  epicgames
  @elseif ($drm == "ubisoft")
  uplay
  @elseif ($drm == "riot")
  riot
  @endif
</div>

@endsection
