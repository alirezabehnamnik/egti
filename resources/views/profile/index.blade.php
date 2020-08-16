@extends('layouts.profile')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div class="m-title">
        <div class="row">
          <div class="col-md-3">
            تیم های من
            <small>
              <a href="{{route('manage_team')}}" class="dorange">
                (نمایش همه)
              </a>
            </small>
          </div>
        </div>
      </div>
      <hr>
    </div>
    @foreach ($teams as $item)
    <div class="col-md-2 text-center">
        <div class="team-item">
          <div class="team-image">
            <img src="/images/teams/logo/{{$item->logo}}" alt="{{$item->name}}">
          </div>
          <div class="team-text">
            {{$item->name}}
          </div>
          <br>
          <span> بازی های تیم: </span>
          @foreach ($data[$item->id] as $v)
            @for ($i = 0; $i < count($v); $i++)
              <li class="team-game-name"> {{$v[$i]}} </li>
            @endfor
          @endforeach
          <hr>
          <a href="{{route('team_profile', ['tag' => $item->tag])}}" target="_blank">
            <span class="show-btn bg-green">
              نمایش تیم
            </span>
          </a>
        </div>
    </div>
    @endforeach
  </div>

  <br>
  <br>


  <div class="row">
    <div class="col-md-12">
      <div class="m-title">
        <div class="row">
          <div class="col-md-3">
            آخرین مسابقات من
            <small>
              <a href="{{route('my_tournaments')}}" class="dorange">
                (نمایش همه)
              </a>
            </small>
          </div>
        </div>
      </div>
      <hr>
    </div>
      @foreach ($tournaments as $item)
      <div class="col-md-3 tournament-item text-center">

        <div class="tournament-details">
          <div class="tournament-image">
            <img src="images/tournaments/{{$item->tournament->image}}" width="124" alt="{{$item->tournament->tag}}">
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
  </div>

</div>

@endsection
