@extends('layouts.app')

@section('content')

<div class="container-fluid">

  @if ($data->enabled == 1)
  <div class="row">
    @if(session()->has('error'))
      <div class="col-md-12">
        <div class="alert alert-danger">
          <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>  {{ session()->get('error') }}
        </div>
      </div>
    @endif

    @if(session()->has('message'))
    <div class="col-md-12">
      <div class="alert alert-success">
          <i class="far fa-check-circle" aria-hidden="true"></i> {{ session()->get('message') }}
      </div>
    </div>
    @endif
    <div class="col-md-2">
      <div class="sidebar">
        <div class="sidenav-profile text-center">
          <img src="/images/avatars/{{$data->avatar}}" width="128px" height="128px" alt="{{$data->username}}">
          <br>
          <br>
          <span> {{$data->username}} </span>
          @if (Auth::check() && Auth::user()->id != $data->id)
          <hr>
            @if ($hasRequest)
              <a href="{{route('user_remove_add_friend', ['sender' => Auth::user()->id, 'receiver' => $data->id])}}" style="color:#FFF;">
                <span class="add-friend request-sent">
                  <i class="far fa-clock" aria-hidden="true"></i> درانتظار قبول کردن
                </span>
              </a>
            @else
              <a href="{{route('user_add_friend', ['id' => $data->id])}}" style="color:#FFF;">
                <span class="add-friend">
                  <i class="fas fa-plus" aria-hidden="true"></i> افزودن به دوستان
                </span>
              </a>
            @endif
          @endif
        </div>
        <br>
        @if ($data->privacy_profile == 0 || $data->id == auth()->user()->id || $isFriend)
        <div class="sidenav-link">
          <li data-toggle="collapse" href="#info" aria-expanded="false" aria-controls="info">
            <i class="fas fa-user-alt" aria-hidden="true"></i> مشخصات
          </li>
          <li data-toggle="collapse" data-target="#teams" aria-expanded="false" aria-controls="teams">
            <i class="fas fa-users" aria-hidden="true"></i>  تیم ها
          </li>
          <li data-toggle="collapse" data-target="#friends" aria-expanded="false" aria-controls="friends">
            <i class="fas fa-user-friends" aria-hidden="true"></i>  دوستان
          </li>
        </div>
        @endif

      </div>
    </div>
    <div class="col-md-10">
      <div id="accordion">
        @if ($data->privacy_profile == 0 || $data->id == auth()->user()->id || $isFriend)
        <div class="card">
          <div id="info" class="collapse show" data-parent="#accordion">
            <div class="card-body">

              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    مشخصات فردی
                  </div>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-3">
                  <div class="user-info">
                    <span> نام: <b> {{$data->name}} </b> </span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="user-info">
                    <span> نام خانوادگی: <b> {{$data->family}} </b> </span>
                  </div>
                </div>
                @if ($data->privacy_location == 1)
                  <div class="col-md-3">
                    <div class="user-info">
                      <span> استان: <b> {{$data->state->name}} </b> </span>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="user-info">
                      <span> شهر: <b> {{$data->city->name}} </b> </span>
                    </div>
                  </div>
                @endif
                @if ($data->privacy_email == 1)
                  <div class="col-md-3">
                    <div class="user-info">
                      <span> ایمیل: <b> {{$data->email}} </b> </span>
                    </div>
                  </div>
                @endif
                @if ($data->privacy_phone == 1)
                <div class="col-md-3">
                  <div class="user-info">
                    <span> تلفن همراه: <b> {{$data->phone_number}} </b> </span>
                  </div>
                </div>
                @endif
              </div>

              <br>
              <br>

              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    شبکه های اجتماعی بازی ها
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                @if ($data->epicgames || $data->uplay || $data->riot || $data->steam)

                  @if ($data->steam)
                  <div class="col-md-1 col-6">
                    <a href="https://steamcommunity.com/id/{{$data->steam}}" target="_blank">
                      <div class="sog steam">
                        <img src="/images/steam.png" alt="">
                        <div class="sog-text"> Steam </div>
                      </div>
                    </a>
                  </div>
                  @endif

                  @if ($data->epicgames)
                  <div class="col-md-1 col-6">
                    <div class="sog epicgames" data-toggle="collapse" href="#epicgames" aria-expanded="false" aria-controls="epicgames">
                      <img src="/images/epicgames.png" alt="">
                      <div class="sog-text"> Epic Games </div>
                    </div>
                  </div>
                  @endif

                  @if ($data->uplay)
                  <div class="col-md-1 col-6">
                    <div class="sog ubisoft" data-toggle="collapse" href="#ubisoft" aria-expanded="false" aria-controls="ubisoft">
                      <img src="/images/ubisoft.png" alt="">
                      <div class="sog-text"> Uplay </div>
                    </div>
                  </div>
                  @endif

                  @if ($data->riot)
                  <div class="col-md-1 col-6">
                    <div class="sog riot" data-toggle="collapse" href="#riot" aria-expanded="false" aria-controls="riot">
                      <img src="/images/riot.png" alt="">
                      <div class="sog-text"> Riot </div>
                    </div>
                  </div>
                  @endif


                  @if ($data->epicgames || $data->uplay || $data->riot)
                  <div class="col-md-6">
                    <div id="sog">

                      @if ($data->epicgames)
                      <div class="card">
                        <div id="epicgames" class="collapse" data-parent="#sog">
                          <div class="card-body">
                            برای افزودن این کاربر به لیست دوستان خود از طریق نرم افزار Epic Games Launcher اقدام کنید.
                            <hr>
                            آی دی: {{$data->epicgames}}
                          </div>
                        </div>
                      </div>
                      @endif

                      @if ($data->uplay)
                      <div class="card">
                        <div id="ubisoft" class="collapse" data-parent="#sog">
                          <div class="card-body">
                            برای افزودن این کاربر به لیست دوستان خود از طریق نرم افزار Uplay اقدام کنید.
                            <hr>
                            آی دی: {{$data->uplay}}
                          </div>
                        </div>
                      </div>
                      @endif

                      @if ($data->riot)
                      <div class="card">
                        <div id="riot" class="collapse" data-parent="#sog">
                          <div class="card-body">
                            برای افزودن این کاربر به لیست دوستان خود از طریق یکی از بازی های Riot Games اقدام کنید.
                            <hr>
                            آی دی: {{$data->riot}}
                          </div>
                        </div>
                      </div>
                      @endif

                    </div>
                  </div>
                  @endif

                @else

                  <h5 class="text-muted"> اطلاعاتی برای نمایش وجود ندارد! </h5>

                @endif
              </div>


              <br>
              <br>
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    بازی های مورد علاقه
                  </div>
                </div>
              </div>
              <hr>

              <div class="row">
                @if ($data->mygames)
                  @foreach ($games as $v)
                    <span class="game-name-prof"> {{$v->name}} </span>
                  @endforeach
                @else
                <h5 class="text-muted"> اطلاعاتی برای نمایش وجود ندارد! </h5>
                @endif
              </div>



              <br>
              <br>
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    پلتفرم های من
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                @if ($data->platforms_id)
                  @if (in_array(1, $data->platforms_id))
                    <div style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="PC">
                      <h1> <i class="fas fa-desktop" aria-hidden="true"></i> </h1>
                    </div>
                  @endif

                  @if (in_array(2, $data->platforms_id))
                    <div style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="PlayStation">
                      <h1> <i class="fab fa-playstation" aria-hidden="true"></i> </h1>
                    </div>
                  @endif

                  @if (in_array(3, $data->platforms_id))
                    <div style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Xbox">
                      <h1> <i class="fab fa-xbox" aria-hidden="true"></i> </h1>
                    </div>
                  @endif
                @else
                <h5 class="text-muted"> اطلاعاتی برای نمایش وجود ندارد! </h5>
                @endif
              </div>

            </div>
          </div>
        </div>
        <div class="card">
          <div id="teams" class="collapse" data-parent="#accordion">
            <div class="card-body">
              @if (!($teams->isEmpty()))
                <div class="row">
                  @foreach ($teams as $item)
                  <div class="col-10 col-md-2 text-center">
                      <div class="team-item">
                        @if ($item->user_id == $data->id)
                        <div class="team-captain" data-toggle="tooltip" data-placement="top" title="کاربر در این تیم کاپیتان است"> <i class="fas fa-star" aria-hidden="true"></i> </div>
                        @endif
                        <div class="team-image" style="width: 218px;">
                          <img src="/images/teams/logo/{{$item->logo}}" alt="{{$item->name}}">
                        </div>
                        <div class="team-text">
                          {{$item->name}}
                          <br>
                          <small>[{{$item->tag}}]</small>
                        </div>
                        <br>
                        <span> بازی های تیم: </span>
                        @foreach ($gar[$item->id] as $v)
                          @for ($i = 0; $i < count($v); $i++)
                            <li class="team-game-name"> {{$v[$i]}} </li>
                          @endfor
                        @endforeach
                        <hr>
                        <a href="{{route('team_profile', ['tag' => $item->tag])}}" target="_blank">
                          <span class="show-btn bg-dorange">
                            نمایش تیم
                          </span>
                        </a>
                      </div>
                  </div>
                  @endforeach
                </div>
              @else
                <h5 class="text-muted"> تیمی برای نمایش وجود ندارد! </h5>
              @endif
            </div>
          </div>
        </div>
        <div class="card">
          <div id="friends" class="collapse" data-parent="#accordion">
            <div class="card-body">
              @if (!($friends->isEmpty()))
                <div class="row">
                  @foreach ($friends as $v)
                  <div class="col-10 col-md-2 text-center">
                      <div class="team-item">
                        <div class="user-image">
                          <img src="/images/avatars/{{$v->avatar}}" alt="{{$v->name}}">
                        </div>
                        <div class="team-text">
                          {{$v->username}}
                        </div>
                        <br>
                        <span> {{$v->name}} {{$v->family}} </span>
                        <hr>
                        <a href="{{route('user_profile', ['username' => $v->username])}}" target="_blank">
                          <span class="show-btn bg-dorange">
                            <i class="fas fa-eye" aria-hidden="true"></i> نمایش کاربر
                          </span>
                        </a>
                      </div>
                  </div>
                  @endforeach
                </div>
              @else
                <h5 class="text-muted"> تیمی برای نمایش وجود ندارد! </h5>
              @endif
            </div>
          </div>
        </div>
        @else
          <div class="col-md-12">
            <div class="alert alert-warning">
              <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>  پروفایل توسط کاربر مخفی شده است. برای مشاهده پروفایل, {{$data->username}} باید شما را به دوستان خود اضافه کند.
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
  @else

  <div class="row">
    <div class="col-12 text-center">
      <div class="alert alert-danger">
        <i class="fas fa-exclamation-triangle" aria-hidden="true"></i> این کاربر توسط مدیریت بن شده است. دلیل: <b> {{$data->reason}} </b>
      </div>
    </div>
  </div>

  @endif

</div>



@endsection
