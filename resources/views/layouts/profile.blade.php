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
            <img src="/images/avatars/{{Auth::user()->avatar}}" width="128px" height="128px" alt="{{Auth::user()->username}}">
            <br>
            <br>
            <span> {{Auth::user()->username}} </span>
          </div>
          <hr>
          <div class="sidenav-link">
            <a href="{{route('home')}}">
              <li> <i class="fas fa-home" aria-hidden="true"></i> خانه </li>
            </a>
            <a href="{{route('games')}}">
              <li> <i class="fas fa-gamepad" aria-hidden="true"></i> بازی ها </li>
            </a>
            <a href="{{route('tournaments')}}">
              <li> <i class="fas fa-trophy" aria-hidden="true"></i> مسابقات </li>
            </a>
            <a href="{{route('profile')}}">
              <li> <i class="fas fa-user-edit" aria-hidden="true"></i> ویرایش اطلاعات </li>
            </a>
            <li data-toggle="collapse" data-target="#team"> <i class="fas fa-users-cog" aria-hidden="true"></i> مدیریت تیم <span style="float:left;"> + </span> </li>
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
            </div>
            <a href="{{route('my_tournaments')}}">
              <li> <i class="fas fa-clipboard-list" aria-hidden="true"></i> مسابقات من </li>
            </a>
          </div>

          <div class="sidenav-footer">
            تمامی حقوق برای
            <span> EG Team </span>
            محفوظ می باشد.
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
