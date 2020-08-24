@extends('layouts.app')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-md-2">
      <div class="sidebar">
        <div class="sidenav-profile text-center">
          <img src="/images/avatars/{{$data->avatar}}" width="128px" height="128px" alt="{{$data->username}}">
          <br>
          <br>
          <span> {{$data->username}} </span>
        </div>
        <br>
        <div class="sidenav-link">
          <li data-toggle="collapse" href="#info" aria-expanded="false" aria-controls="info">
            <i class="fas fa-user-alt" aria-hidden="true"></i> مشخصات
          </li>
          <li data-toggle="collapse" data-target="#teams" aria-expanded="false" aria-controls="teams">
            <i class="fas fa-users" aria-hidden="true"></i>  تیم ها
          </li>
        </div>

      </div>
    </div>
    <div class="col-md-10">
      <div id="accordion">

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
                        @if ($item->user_id == Auth::user()->id)
                        <div class="team-captain" data-toggle="tooltip" data-placement="top" title="کاربر در این تیم کاپیتان است"> <i class="fas fa-star" aria-hidden="true"></i> </div>
                        @endif
                        <div class="team-image" style="width: 218px;">
                          <img src="/images/teams/logo/{{$item->logo}}" alt="{{$item->name}}">
                        </div>
                        <div class="team-text">
                          {{$item->name}}
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
      </div>
    </div>
  </div>
</div>



@endsection
