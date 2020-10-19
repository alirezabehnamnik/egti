<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/ckeditor/translations/fa.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid" id="app">

        <div id="mask">
          <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="text">
              درحال بارگذاری
            </div>
          </div>
        </div>

        <div class="row">
          <div class="sidenav">
            <div class="sidenav-profile text-center">
              <div class="logout-profile" data-toggle="tooltip" data-placement="bottom" title="خروج">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                   خروج
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
              <div class="collapse-sidenav in-nav">
                <i class="fas fa-sliders-h" aria-hidden="true"></i>
              </div>
              <img src="/images/avatars/{{Auth::user()->avatar}}" width="128px" height="128px" alt="{{Auth::user()->username}}">
              <br>
              <br>
              <a href="{{route('user_profile', ['username' => Auth::user()->username])}}" target="_blank" style="color:#FFF;">
                <span> {{Auth::user()->username}} </span>
              </a>
            </div>
            <hr>
            <div class="sidenav-link">
              <a href="{{route('home')}}">
                <li> <i class="fas fa-home" aria-hidden="true"></i> خانه </li>
              </a>
              <a href="{{route('profile')}}">
                <li> <i class="fas fa-user" aria-hidden="true"></i> پروفایل </li>
              </a>
              <a href="{{route('edit_profile')}}">
                <li> <i class="fas fa-user-edit" aria-hidden="true"></i> ویرایش اطلاعات </li>
              </a>
              <a href="{{route('show_privacy')}}">
                <li> <i class="fas fa-user-shield" aria-hidden="true"></i> تنظیمات حریم شخصی </li>
              </a>
              <li class="collapse-li" data-toggle="collapse" data-target="#ticket">
                 <i class="far fa-question-circle" aria-hidden="true"></i> تیکت پشتیبانی
                 <div class="clps-icon"> <i class="fas fa-angle-down" aria-hidden="true"></i> </div>
               </li>
              <div class="nav-list collapse" id="ticket">
                <a href="{{route('support')}}">
                  <li style="margin-right: 10px;">
                    <i class="fas fa-question" aria-hidden="true"></i> تیکت های من <span class="friendsCount"> {{count($hasTickets)}} </span>
                  </li>
                </a>
                <a href="{{route('support_show_create')}}">
                  <li style="margin-right: 10px;">
                    <i class="fas fa-plus" aria-hidden="true"></i> ایجاد تیکت جدید
                  </li>
                </a>
              </div>
              <li class="collapse-li" data-toggle="collapse" data-target="#friends">
                 <i class="fas fa-users" aria-hidden="true"></i> دوستان
                 <div class="clps-icon"> <i class="fas fa-angle-down" aria-hidden="true"></i> </div>
               </li>
              <div class="nav-list collapse" id="friends">
                <a href="{{route('my_friends')}}">
                  <li style="margin-right: 10px;">
                    <i class="fas fa-user-friends" aria-hidden="true"></i> دوستان من
                  </li>
                </a>
                <a href="{{route('friend_requests')}}">
                  <li style="margin-right: 10px;">
                    <i class="fas fa-user-plus" aria-hidden="true"></i> درخواست های دوستی <span class="friendsCount"> {{count($data)}} </span>
                  </li>
                </a>
              </div>
              <li class="collapse-li" data-toggle="collapse" data-target="#team">
                 <i class="fas fa-users-cog" aria-hidden="true"></i> تیم
                 <div class="clps-icon"> <i class="fas fa-angle-down" aria-hidden="true"></i> </div>
               </li>
              <div class="nav-list collapse" id="team">
                <a href="{{route('create_team')}}">
                  <li style="margin-right: 10px;">
                    <i class="fas fa-plus" aria-hidden="true"></i> ایجاد تیم
                  </li>
                </a>
                <a href="{{route('manage_team')}}">
                  <li style="margin-right: 10px;">
                    <i class="fas fa-cog" aria-hidden="true"></i> مدیریت تیم
                  </li>
                </a>
                <a href="{{route('my_team')}}">
                  <li style="margin-right: 10px;">
                    <i class="fas fa-users" aria-hidden="true"></i> تیم های من
                  </li>
                </a>
              </div>
              <a href="{{route('show_join')}}">
                <li> <i class="fas fa-exchange-alt" aria-hidden="true"></i> درخواست های عضویت در تیم <span class="friendsCount"> {{count($treq)}} </span> </li>
              </a>
              <a href="{{route('my_tournaments')}}">
                <li> <i class="fas fa-clipboard-list" aria-hidden="true"></i> مسابقات من </li>
              </a>
            </div>
          </div>
          <div class="collapse-sidenav out-nav">
            <i class="fas fa-sliders-h" aria-hidden="true"></i>
          </div>

          @if (Auth::check() && !$hasTickets->isEmpty())
            <div class="notification" id="hasTickets" {{!$treq->isEmpty() ? 'style=bottom:65px;' : ''}}>
              <span class="notification-count"> {{count($hasTickets)}} </span>
              <i class="fas fa-envelope-open-text" aria-hidden="true"></i>
            </div>
            <div class="col-3 col-sm-2">
              <div class="new-ticket hidden panel-notify" id="hasTickets-text" {{!$treq->isEmpty() ? 'style=bottom:60px;' : ''}}>
                <span>
                  <i class="far fa-question-circle dorange" aria-hidden="true"></i>
                  شما
                  {{count($hasTickets)}}
                  تیکت باز دارید.
                </span>
              </div>
            </div>
          @endif
          @if (Auth::check() && !$treq->isEmpty())
            <div class="notification" id="treq">
              <i class="fas fa-exchange-alt" aria-hidden="true"></i>
              <span class="notification-count"> {{count($treq)}} </span>
            </div>
            <div class="col-3 col-sm-2">
              <div class="new-ticket hidden panel-notify" id="treq-text">
                <span>
                  <i class="far fa-question-circle dorange" aria-hidden="true"></i>
                  شما
                  {{count($treq)}}
                  درخواست عضویت در تیم دارید.
                </span>
              </div>
            </div>
          @endif

          <main class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-xl-2 mobile-margin">
            @if (Auth::check())
              @if (Auth::user()->reason)
              <br>
              <div class="col-md-12">
                <div class="alert alert-danger">
                  <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>  حساب کاربری شما به دلیل {{Auth::user()->reason}} توسط مدیریت محدود شده است!
                </div>
              </div>
              @else
                @yield('content')

              @endif
            @endif
          </main>
        </div>




    </div>
</body>
</html>
