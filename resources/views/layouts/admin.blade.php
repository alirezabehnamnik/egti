<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <div id="mask">
          <div class="loader">
              <img src="/images/loading.gif" width="140" alt='loading'>
          </div>
        </div>

        <div class="sidenav">
          <div class="sidenav-profile text-center">
            <div class="logout-profile" data-toggle="tooltip" data-placement="bottom" title="خروج">
              <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                 <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
            <a href="{{route('user_profile', ['username' => Auth::guard('admins')->user()->username])}}" target="_blank" style="color:#FFF;">
              <span> {{Auth::guard('admins')->user()->username}} </span>
              <br>
              @php
                $role = json_decode(Auth::guard('admins')->user()->role);
                $role = $role[0];
              @endphp
              <span> {{$role}} </span>
            </a>
          </div>
          <hr>
          <div class="sidenav-link">
            <a href="{{route('home')}}" target="_blank">
              <li> <i class="fas fa-home" aria-hidden="true"></i> صفحه اصلی سایت </li>
            </a>
            <a href="{{route('admin_panel')}}">
              <li> <i class="fas fa-house-user" aria-hidden="true"></i> پنل مدیریت </li>
            </a>
            @if (Auth::guard('admins')->user()->role == '["owner"]')
            <a href="{{route('admin_settings')}}">
              <li> <i class="fas fa-cog" aria-hidden="true"></i> تنظیمات </li>
            </a>
            @endif

            <li class="collapse-li" data-toggle="collapse" data-target="#users">
              <i class="fas fa-users" aria-hidden="true"></i> کاربران
              <div class="clps-icon"> <i class="fas fa-angle-down" aria-hidden="true"></i> </div>
            </li>
            <div class="nav-list collapse" id="users">
              <a href="{{route('admin_users')}}">
                <li class="nav-list-item">
                  <i class="fas fa-cog" aria-hidden="true"></i> مدیریت
                </li>
              </a>
              <a href="{{route('admin_user_add')}}">
                <li class="nav-list-item">
                  <i class="fas fa-plus" aria-hidden="true"></i> افزودن
                </li>
              </a>
            </div>

            <li class="collapse-li" data-toggle="collapse" data-target="#games">
              <i class="fas fa-gamepad" aria-hidden="true"></i> بازی ها
              <div class="clps-icon"> <i class="fas fa-angle-down" aria-hidden="true"></i> </div>
            </li>
            <div class="nav-list collapse" id="games">
              <a href="{{route('admin_games')}}">
                <li class="nav-list-item">
                  <i class="fas fa-cog" aria-hidden="true"></i> مدیریت
                </li>
              </a>
              <a href="{{route('admin_game_add')}}">
                <li class="nav-list-item">
                  <i class="fas fa-plus" aria-hidden="true"></i> افزودن
                </li>
              </a>
            </div>

            <li class="collapse-li" data-toggle="collapse" data-target="#tournaments">
              <i class="fas fa-clipboard-list" aria-hidden="true"></i> مسابقات
              <div class="clps-icon"> <i class="fas fa-angle-down" aria-hidden="true"></i> </div>
            </li>
            <div class="nav-list collapse" id="tournaments">
              <a href="{{route('admin_tournaments')}}">
                <li class="nav-list-item">
                  <i class="fas fa-cog" aria-hidden="true"></i> مدیریت
                </li>
              </a>
              <a href="{{route('admin_tournament_add')}}">
                <li class="nav-list-item">
                  <i class="fas fa-plus" aria-hidden="true"></i> افزودن
                </li>
              </a>
            </div>

            <a href="{{route('admin_teams')}}">
              <li> <i class="fas fa-users-cog" aria-hidden="true"></i> مدیریت تیم ها </li>
            </a>
          </div>

        </div>


        <main class="mt-2">
          <div style="margin-right: 16%;">
            @yield('content')
          </div>
        </main>

    </div>
</body>
</html>
