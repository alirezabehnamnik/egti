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
        @if ($auth)
        <div class="admin-navbar">
          <a href="{{route('admin_panel')}}" style="color: #FFF;">
            شما با نام کاربری {{$auth->username}} در پنل مدیریت وارد شده اید. برای مشاهده پنل مدیریت کلیک کنید.
          </a>
        </div>
        @endif
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark shadow" {{$auth ? 'style=margin-top:30px' : ''}}>
            <a href="{{route('home')}}" class="mobile-logo">
              <img class="navbar-brand" src="/images/logo.png" width="64px" >
            </a>
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      @php
                        $fitem = json_decode($data->navbar_item);
                      @endphp

                      @foreach ($fitem as $v)
                      <li class="nav-item {{$v->link == 'home' ? 'active' : ''}}">
                        @if ($v->link != '#' && Route::has($v->link))
                        <a class="nav-link" href="{{route($v->link)}}"><i class="{{$v->icon}}"></i> {{$v->text}} </a>
                        @else
                        <a class="nav-link" href="#"><i class="{{$v->icon}}"></i> {{$v->text}} </a>
                        @endif
                      </li>
                      @endforeach
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"> <i class="fa fa-unlock-alt red-icon"></i> {{ __('ورود') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"> <i class="fa fa-user-plus red-icon"></i> {{ __('ثبت نام') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} , خوش آمدید <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        {{ __('پروفایل') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @if (Auth::check() && !$hasTickets->isEmpty())
          <div class="col-3 col-sm-2">
            <div class="new-ticket" {{$treq != false ? 'style=bottom:70px;' : ''}}>
              <span>
                <i class="far fa-question-circle dorange" aria-hidden="true"></i>
                شما
                {{count($hasTickets)}}
                تیکت باز دارید. برای مشاهده
                <a class="dorange" href="{{route('support')}}">
                  کلیک
                </a>
                کنید.
              </span>
            </div>
          </div>
        @endif
        @if (Auth::check() && !$treq->isEmpty())
          <div class="col-3 col-sm-2">
            <div class="new-ticket">
              <span>
                <i class="far fa-question-circle dorange" aria-hidden="true"></i>
                شما
                {{count($treq)}}
                درخواست عضویت در تیم دارید. برای مشاهده
                <a class="dorange" href="{{route('show_join')}}">
                  کلیک
                </a>
                کنید.
              </span>
            </div>
          </div>
        @endif

        <main class="mt-7">
            @if (Auth::check() && Auth::user()->reason)
            <div class="col-md-12">
              <div class="alert alert-danger">
                <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>  حساب کاربری شما به دلیل {{Auth::user()->reason}} توسط مدیریت محدود شده است!
              </div>
            </div>
            @else
              @yield('content')

            @endif
        </main>

        <br>
        <br>
        <br>


        <!-- Footer Start -->
        <div class="container-fluid">

          <div class="row">
            <div class="footer-top"></div>

            <div class="footer fill col-md-12">

              <div class="container">

                <div class="footer-social">

                  <div class="row">
                    <div class="col-md-6 footer-right">
                      <span> <i class="far fa-bell" aria-hidden="true"></i> مارا در شبکه ها اجتماعی دنبال کنید: </span>
                      @php
                        $social = json_decode($data->social_networks);
                      @endphp
                      @foreach ($social as $v)
                      <div class="footer-social-link">
                        <a href="{{$v->link}}" target="_blank">
                          <img src="/images/{{$v->icon}}" with="40" alt="" data-toggle="tooltip" data-placement="top" title="{{$v->title}}">
                        </a>
                      </div>
                      @endforeach
                    </div>

                    <div class="col-md-6 footer-left">
                      {{$data->email}} <img src="/images/mail.png" width="40" alt="">
                    </div>
                  </div>

                </div>

                <hr>
                <div class="footer-info">
                    <div class="row">
                      <div class="col-md-6">
                        <i class="fas fa-clipboard-list" aria-hidden="true"></i> درباره ما
                        <hr>
                        {!! $data->about !!}
                      </div>
                      <div class="col-md-3 text-center">
                        <i class="fas fa-clock" aria-hidden="true"></i>  ساعت کاری پشتیبانی
                        <hr>
                        {!! $data->work_time !!}
                      </div>
                      <div class="col-md-3 text-center">
                        <i class="fas fa-phone" aria-hidden="true"></i> تلفن تماس
                        <hr>
                        {!! $data->phone !!}
                      </div>
                    </div>
                </div>
                <hr>
                <div class="footer-info">
                  <div class="row">

                    <div class="footer-links col-md-3 text-center">
                      <span> <i class="fas fa-users" aria-hidden="true"></i> دوستان </span>
                      <hr>
                      @php
                        $friends = json_decode($data->friends_footer);
                      @endphp
                      @foreach ($friends as $v)
                      <a class="text-left" href="{{$v->link}}" target="_blank">
                        <li> {{$v->text}} </li>
                      </a>
                      @endforeach

                    </div>

                    <div class="footer-links col-md-3 text-center">
                      <span> <i class="fas fa-link" aria-hidden="true"></i> لینک های مفید </span>
                      <hr>
                      @php
                        $link = json_decode($data->link_footer);
                      @endphp
                      @foreach ($link as $v)
                      <a class="text-left" href="{{$v->link}}" target="_blank">
                        <li> {{$v->text}} </li>
                      </a>
                      @endforeach

                    </div>

                    <div class="footer-links col-md-3 text-center">
                      <span> <i class="fas fa-scroll" aria-hidden="true"></i> مطالب کاربردی </span>
                      <hr>
                      @php
                        $learning = json_decode($data->learning_footer);
                      @endphp
                      @foreach ($learning as $v)
                      <a class="text-left" href="{{$v->link}}" target="_blank">
                        <li> {{$v->text}} </li>
                      </a>
                      @endforeach

                    </div>

                    <div class="col-md-2 offset-md-1 text-center">
                      <span> <i class="fas fa-certificate" aria-hidden="true"></i> نماد ها </span>
                      <hr>
                      <div class="owl-carousel owl-certs owl-theme text-center">
                        <div class="item">
                            <a href="" target="_blank">
                              <img src="/images/namad.png" alt="">
                              <!-- <img src="/images/etemad.png" alt=""> -->
                            </a>
                        </div>
                        <div class="item">
                            <a href="" target="_blank">
                              <img src="/images/namad.png" alt="">
                              <!-- <img src="/images/samandehi.png" alt=""> -->
                            </a>
                        </div>
                        <div class="item">
                            <a href="" target="_blank">
                              <img src="/images/namad.png" alt="">
                              <!-- <img src="/images/bonyad.png" alt=""> -->
                            </a>
                        </div>
                      </div>
                    </div>


                  </div>

                </div>

              </div>

              <div class="row">
                <div class="copyright">
                  <i class="far fa-copyright" aria-hidden="true"></i>
                  تمامی حقوق برای
                  <span> EG Team </span>
                  محفوظ می باشد.
                </div>
              </div>

            </div>
          </div>

        </div>

    </div>
</body>
</html>
