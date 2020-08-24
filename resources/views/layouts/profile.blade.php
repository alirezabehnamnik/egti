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
    <div class="container-fluid" id="app">

        <div id="mask">
          <div class="loader">
              <img src="/images/loading.gif" width="140" alt='loading'>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2 col-2 sidenav">
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
              <a href="{{route('user_profile', ['username' => Auth::user()->username])}}" target="_blank" style="color:#FFF;">
                <span> {{Auth::user()->username}} </span>
              </a>
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
                <li> <i class="fas fa-user" aria-hidden="true"></i> پروفایل </li>
              </a>
              <a href="{{route('edit_profile')}}">
                <li> <i class="fas fa-user-edit" aria-hidden="true"></i> ویرایش اطلاعات </li>
              </a>
              <li class="collapse-li" data-toggle="collapse" data-target="#team">
                 <i class="fas fa-users-cog" aria-hidden="true"></i> مدیریت تیم
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
          <div class="col-md-2 col-2"></div>
          <main class="col-md-10">
              @yield('content')
          </main>
        </div>




    </div>
</body>
</html>
