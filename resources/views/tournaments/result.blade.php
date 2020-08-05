@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="m-title">
          <div class="row">
            <div class="col-md-12 text-center">
              نتایج مسابقات {{$tournament->name}} بازی {{$tournament->game->name}}
              <br>
              <br>
              @php
              $prize_pool = number_format($tournament->prize_pool);
              $fprize = number_format($tournament->fplace_reward);
              $sprize = number_format($tournament->splace_reward);
              $tprize = number_format($tournament->tplace_reward);
              @endphp
              <h5> <i class="fas fa-star gold" aria-hidden="true"></i> مبلغ کل جایزه: {{$prize_pool}} تومان </h5>
            </div>
          </div>
        </div>
        <hr>


      </div>
    </div>
    <div class="row">
      <!-- Third Place -->
      <div class="col-md-4 tournament-item text-center mt-7">
        <div class="tournament-details">
          <div class="winner-image">
            <img src="/images/teams/logo/{{$trResult->tplace->logo}}" alt="{{$trResult->tplace->name}}">
            <div class="rank bg-bronze" data-toggle="tooltip" data-placement="top" title="مقام سوم مسابقات">
              <i class="fas fa-trophy" aria-hidden="true"></i>
            </div>
            <br>
            <br>
            <h5 class="text-center"> {{ $trResult->tplace->name }} </h5>
            <hr>
            <li>
                مبلغ جایزه:
                <br>
                <div class="winner-text"> <i class="far fa-money-bill-alt winning-icon"></i> {{$tprize}} تومان  </div>
            </li>
            <li>
               اعضا:
               <br>
              <a href="{{route('user_profile', ['username' => $tplace->captain->username])}}" target="_blank" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="کاپیتان"> <i class="fas fa-user-tie winning-icon" aria-hidden="true"></i> {{ $tplace->captain->username }} </div>
              </a>
              <hr>
              @foreach ($tp_players as $item)
              <a href="{{route('user_profile', ['username' => $item->username])}}" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="بازیکن"> <i class="fas fa-users winning-icon" aria-hidden="true"></i> {{ $item->username }} </div>
              </a>
              @endforeach
              <hr>
              <a href="{{route('user_profile', ['username' => $tplace->standin->username])}}" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="بازیکن ذخیره"> <i class="fas fa-people-arrows winning-icon" aria-hidden="true"></i> {{ $tplace->standin->username }} </div>
              </a>
            </li>
          </div>
        </div>
      </div>

      <!-- First Place -->
      <div class="col-md-4 tournament-item text-center">
        <div class="tournament-details">
          <div class="winner-image">
            <img src="/images/teams/logo/{{$trResult->fplace->logo}}" alt="{{$trResult->fplace->name}}">
            <div class="rank bg-gold" data-toggle="tooltip" data-placement="top" title="مقام اول مسابقات">
              <i class="fas fa-trophy" aria-hidden="true"></i>
            </div>
            <br>
            <br>
            <h5 class="text-center"> {{ $trResult->fplace->name }} </h5>
            <hr>
            <li>
                مبلغ جایزه:
                <br>
                <div class="winner-text"> <i class="far fa-money-bill-alt winning-icon"></i> {{$fprize}} تومان  </div>
            </li>
            <li>
               اعضا:
               <br>
              <a href="{{route('user_profile', ['username' => $fplace->captain->username])}}" target="_blank" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="کاپیتان"> <i class="fas fa-user-tie winning-icon" aria-hidden="true"></i> {{ $fplace->captain->username }} </div>
              </a>
              <hr>
              @foreach ($fp_players as $item)
              <a href="{{route('user_profile', ['username' => $item->username])}}" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="بازیکن"> <i class="fas fa-users winning-icon" aria-hidden="true"></i> {{ $item->username }} </div>
              </a>
              @endforeach
              <hr>
              <a href="{{route('user_profile', ['username' => $fplace->standin->username])}}" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="بازیکن ذخیره"> <i class="fas fa-people-arrows winning-icon" aria-hidden="true"></i> {{ $fplace->standin->username }} </div>
              </a>
            </li>
          </div>
        </div>
      </div>

      <!-- Second Place -->
      <div class="col-md-4 tournament-item text-center mt-5">
        <div class="tournament-details">
          <div class="winner-image">
            <img src="/images/teams/logo/{{$trResult->splace->logo}}" alt="{{$trResult->splace->name}}">
            <div class="rank bg-silver" data-toggle="tooltip" data-placement="top" title="مقام دوم مسابقات">
              <i class="fas fa-trophy" aria-hidden="true"></i>
            </div>
            <br>
            <br>
            <h5 class="text-center"> {{ $trResult->splace->name }} </h5>
            <hr>
            <li>
                مبلغ جایزه:
                <br>
                <div class="winner-text"> <i class="far fa-money-bill-alt winning-icon"></i> {{$sprize}} تومان  </div>
            </li>
            <li>
               اعضا:
               <br>
              <a href="{{route('user_profile', ['username' => $splace->captain->username])}}" target="_blank" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="کاپیتان"> <i class="fas fa-user-tie winning-icon" aria-hidden="true"></i> {{ $splace->captain->username }} </div>
              </a>
              <hr>
              @foreach ($sp_players as $item)
              <a href="{{route('user_profile', ['username' => $item->username])}}" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="بازیکن"> <i class="fas fa-users winning-icon" aria-hidden="true"></i> {{ $item->username }} </div>
              </a>
              @endforeach
              <hr>
              <a href="{{route('user_profile', ['username' => $splace->standin->username])}}" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="بازیکن ذخیره"> <i class="fas fa-people-arrows winning-icon" aria-hidden="true"></i> {{ $splace->standin->username }} </div>
              </a>
            </li>
          </div>
        </div>
      </div>

</div>

@endsection
