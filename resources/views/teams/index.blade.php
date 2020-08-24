@extends('layouts.app')

@section('content')

<div class="container-fluid">

  <div class="row">

    @if ($data->enabled == 1)

    <div class="col-md-2">
      <div class="sidebar">
        <div class="sidenav-profile text-center">
          <img src="/images/teams/logo/{{$data->logo}}" width="128px" height="128px" alt="{{$data->username}}">
          <br>
          <br>
          <h5> {{$data->name}} </h5>
          <small> [{{$data->tag}}] </small>
        </div>
        <br>
        <div class="sidenav-link">
          <li data-toggle="collapse" href="#info" aria-expanded="false" aria-controls="info">
            <i class="fas fa-user-alt" aria-hidden="true"></i> مشخصات
          </li>
          <li data-toggle="collapse" data-target="#tournaments" aria-expanded="false" aria-controls="tournaments">
            <i class="fas fa-clipboard-list" aria-hidden="true"></i>  مسابقات
          </li>
          <li data-toggle="collapse" data-target="#games" aria-expanded="false" aria-controls="games">
            <i class="fas fa-gamepad" aria-hidden="true"></i>  بازی ها
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
                    آمار تیم
                  </div>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-3">
                  <div class="user-info">
                    <span> کل مسابقات تیم: <b> {{count($tournaments)}} </b> </span>
                  </div>
                </div>

              </div>

              <br>
              <br>

              <div class="m-title">
                <div class="row">
                  <div class="col-md-12">
                    مقام های تیم <small class="text-muted"> (کل مقام هایی که تیم تا کنون در مسابقات مختلف کسب کرده است) </small>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                @if ($result['fplace'])
                  <div class="col-md-1 col-3">
                    <div class="sog bg-gold text-center" data-toggle="tooltip" data-placement="top" title="مقام اول">
                      <i class="fa fa-trophy tr-result-icon" aria-hidden="true"></i>
                      <div class="sog-text"> {{$result['fplace']}} بار </div>
                    </div>
                  </div>
                @endif
                @if ($result['splace'])
                  <div class="col-md-1 col-3">
                    <div class="sog bg-silver text-center" data-toggle="tooltip" data-placement="top" title="مقام دوم">
                      <i class="fa fa-trophy tr-result-icon" aria-hidden="true"></i>
                      <div class="sog-text"> {{$result['tplace']}} بار </div>
                    </div>
                  </div>
                @endif
                @if ($result['tplace'])
                  <div class="col-md-1 col-3">
                    <div class="sog bg-bronze text-center" data-toggle="tooltip" data-placement="top" title="مقام سوم">
                      <i class="fa fa-trophy tr-result-icon" aria-hidden="true"></i>
                      <div class="sog-text"> {{$result['tplace']}} بار </div>
                    </div>
                  </div>
                @endif
                @if ($result['foplace'])
                  <div class="col-md-1 col-3">
                    <div class="sog bg-bronze text-center">
                      <i class="fa fa-trophy tr-result-icon" aria-hidden="true"></i>
                      <div class="sog-text"> {{$result['foplace']}} بار </div>
                    </div>
                  </div>
                @endif
                @if ($result['fiplace'])
                  <div class="col-md-1 col-3">
                    <div class="sog bg-bronze text-center">
                      <i class="fa fa-trophy tr-result-icon" aria-hidden="true"></i>
                      <div class="sog-text"> {{$result['fiplace']}} بار </div>
                    </div>
                  </div>
                @endif
              </div>

              <br>
              <br>

              <div class="m-title">
                <div class="row">
                  <div class="col-md-12">
                    بازیکنان تیم
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 col-md-2 text-center">
                    <div class="team-item">
                      <div class="user-image">
                        <img src="/images/avatars/{{$captain->avatar}}" alt="{{$captain->name}}">
                      </div>
                      <div class="team-text">
                        {{$captain->username}}
                      </div>
                      <br>
                      <span> کاپیتان </span>
                      <hr>
                      <a href="{{route('user_profile', ['username' => $captain->username])}}" target="_blank">
                        <span class="show-btn bg-dorange">
                          نمایش کاربر
                        </span>
                      </a>
                    </div>
                </div>
                @foreach ($players as $v)
                  <div class="col-10 col-md-2 text-center">
                      <div class="team-item">
                        <div class="user-image">
                          <img src="/images/avatars/{{$v->avatar}}" alt="{{$v->name}}">
                        </div>
                        <div class="team-text">
                          {{$v->username}}
                        </div>
                        <br>
                        <span> بازیکن </span>
                        <hr>
                        <a href="{{route('user_profile', ['username' => $v->username])}}" target="_blank">
                          <span class="show-btn bg-dorange">
                            نمایش کاربر
                          </span>
                        </a>
                      </div>
                  </div>
                @endforeach

                <div class="col-10 col-md-2 text-center">
                    <div class="team-item">
                      <div class="user-image">
                        <img src="/images/avatars/{{$standin->avatar}}" alt="{{$standin->name}}">
                      </div>
                      <div class="team-text">
                        {{$standin->username}}
                      </div>
                      <br>
                      <span> بازیکن ذخیره </span>
                      <hr>
                      <a href="{{route('user_profile', ['username' => $standin->username])}}" target="_blank">
                        <span class="show-btn bg-dorange">
                          نمایش کاربر
                        </span>
                      </a>
                    </div>
                </div>

              </div>

            </div>
          </div>
        </div>


        <div class="card">
          <div id="tournaments" class="collapse" data-parent="#accordion">
            <div class="card-body">

              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    مسابقات تیم
                  </div>
                </div>
              </div>
              <hr>

              <div class="row">
                @if (!($tournaments->isEmpty()))
                    @foreach ($tournaments as $item)
                      <div class="col-md-3 tournament-item text-center">
                        <div class="tournament-details">
                          <div class="tournament-image">
                            <img src="/images/tournaments/{{$item->tournament->image}}" width="124" alt="{{$item->tournament->tag}}">
                            <br>
                            {{$item->tournament->g_name}}
                          </div>
                          <li>
                            نام مسابقه:
                            <span class="tournament-text"> {{$item->tournament->name}} </span>
                          </li>

                          <li>
                            تاریخ شروع:
                            <span class="tournament-text"> {{$item->tournament->start_date}} </span>
                          </li>

                          <li>
                            تاریخ پایان:
                            <span class="tournament-text"> {{$item->tournament->end_date}} </span>
                          </li>

                          <li>
                            تعداد تیم های شرکت کننده:
                            <span class="tournament-text"> {{$item->tournament->teams_count}} </span>
                          </li>

                          <li>
                            ظرفیت تیم:
                            <span class="tournament-text"> {{$item->tournament->max_teams}} </span>
                          </li>

                          <li>
                            @php
                            $price = number_format($item->tournament->entry_price);
                            @endphp
                            هزینه ورود:
                            @if (!$item->tournament->entry_price)
                            <span class="tournament-text"> رایگان </span>
                            @else
                            <span class="tournament-text"> {{$price}} تومان </span>
                            @endif
                          </li>

                          <li>
                            <i class="far fa-star gold" aria-hidden="true"></i> مبلغ کل جایزه:
                            @php
                            $prize_pool = number_format($item->tournament->prize_pool);
                            @endphp
                            <span class="tournament-text"> {{$prize_pool}} تومان </span>
                          </li>

                          <li>
                            <i class="fas fa-trophy gold" aria-hidden="true"></i>
                            جایزه تیم اول:
                            @php
                            $fprize = number_format($item->tournament->fplace_reward);
                            @endphp
                            <span class="tournament-text"> {{$fprize}} تومان </span>
                          </li>

                          <li>
                            <i class="fas fa-trophy silver" aria-hidden="true"></i>
                            جایزه تیم دوم:
                            @php
                            $sprize = number_format($item->tournament->splace_reward);
                            @endphp
                            <span class="tournament-text"> {{$sprize}} تومان </span>
                          </li>

                          <li>
                            <i class="fas fa-trophy bronze" aria-hidden="true"></i>
                            جایزه تیم سوم:
                            @php
                            $tprize = number_format($item->tournament->tplace_reward);
                            @endphp
                            <span class="tournament-text"> {{$tprize}} تومان </span>
                          </li>

                          @if ($item->tournament->foplace_reward)
                          <li>
                            <i class="fas fa-trophy bronze" aria-hidden="true"></i>
                            جایزه تیم چهارم:
                            @php
                            $foprize = number_format($item->tournament->foplace_reward);
                            @endphp
                            <span class="tournament-text"> {{$foprize}} تومان </span>
                          </li>
                          @endif

                          @if ($item->tournament->fiplace_reward)
                          <li>
                            <i class="fas fa-trophy bronze" aria-hidden="true"></i>
                            جایزه تیم پنجم:
                            @php
                            $fiprize = number_format($item->tournament->fiplace_reward);
                            @endphp
                            <span class="tournament-text"> {{$fiprize}} تومان </span>
                          </li>
                          @endif

                          @if ($item->tournament->enabled == -1)
                          <a href="{{route('tournament_results', ['id' => $item->tournament->id])}}" target="_blank" class="tr-result">
                            نمایش نتایج
                          </a>
                          @endif
                        </div>
                      </div>
                    @endforeach
                @else
                  <h5 class="text-muted"> مسابقه ای برای نمایش وجود ندارد! </h5>
                @endif
              </div>

            </div>
          </div>
        </div>


        <div class="card">
          <div id="games" class="collapse" data-parent="#accordion">
            <div class="card-body">

              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    بازی های تیم
                  </div>
                </div>
              </div>
              <hr>

              <div class="row">
                @if (!($games->isEmpty()))
                  @foreach ($games as $item)
                  <a href="{{route('game', ['id' => $item->id])}}">
                    <div class="col-md-4 game-item text-center">
                      <div class="game-image">
                        <img src="/images/games/{{$item->image}}" width="350" alt="">
                        <div class="game-text">
                          <span class="game-name"> {{$item->name}} </span>
                          @php
                          $decode = json_decode($item->platforms);
                          @endphp
                          <span class="game-platforms">
                            @if(in_array("1", $decode))
                            <i class="fas fa-desktop ml-1" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="PC"></i>
                            @endif

                            @if(in_array("2", $decode))
                            <i class="fab fa-playstation ml-1" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="PlayStation 4"></i>
                            @endif

                            @if(in_array("3", $decode))
                            <i class="fab fa-xbox ml-1" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Xbox One"></i>
                            @endif
                          </span>
                        </div>
                      </div>
                    </div>
                  </a>
                  @endforeach
                @endif
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

    @else
    <div class="col-12 text-center">
      <div class="alert alert-danger">
        <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>  درحال حاضر این تیم غیرفعال می باشد
      </div>
    </div>
    @endif
  </div>
</div>

@endsection
