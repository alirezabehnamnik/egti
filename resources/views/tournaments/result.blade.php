@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="m-title">
          <div class="row">
            <div class="col-md-12 text-center">
              نتایج مسابقات {{$tournament->name}}
            </div>
          </div>
        </div>
        <hr>
        @php
        $prize_pool = number_format($tournament->prize_pool);
        @endphp
        <span> مبلغ کل جایزه: {{$prize_pool}} </span>

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
               اعضا:
               <br>
              <a href="{{route('user_profile', ['username' => $tplace->captain->username])}}" target="_blank" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="کاپیتان"> <i class="fas fa-user-tie winning-icon" aria-hidden="true"></i> {{ $tplace->captain->username }} </div>
              </a>
              @foreach ($tp_players as $item)
              <a href="{{route('user_profile', ['username' => $item->username])}}" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="بازیکن"> <i class="fas fa-users winning-icon" aria-hidden="true"></i> {{ $item->username }} </div>
              </a>
              @endforeach
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
               اعضا:
               <br>
              <a href="{{route('user_profile', ['username' => $fplace->captain->username])}}" target="_blank" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="کاپیتان"> <i class="fas fa-user-tie winning-icon" aria-hidden="true"></i> {{ $fplace->captain->username }} </div>
              </a>
              @foreach ($fp_players as $item)
              <a href="{{route('user_profile', ['username' => $item->username])}}" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="بازیکن"> <i class="fas fa-users winning-icon" aria-hidden="true"></i> {{ $item->username }} </div>
              </a>
              @endforeach
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
               اعضا:
               <br>
              <a href="{{route('user_profile', ['username' => $splace->captain->username])}}" target="_blank" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="کاپیتان"> <i class="fas fa-user-tie winning-icon" aria-hidden="true"></i> {{ $splace->captain->username }} </div>
              </a>
              @foreach ($sp_players as $item)
              <a href="{{route('user_profile', ['username' => $item->username])}}" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="بازیکن"> <i class="fas fa-users winning-icon" aria-hidden="true"></i> {{ $item->username }} </div>
              </a>
              @endforeach
              <a href="{{route('user_profile', ['username' => $splace->standin->username])}}" class="link-color">
                <div class="winner-text" data-placement="top" data-toggle="tooltip" title="بازیکن ذخیره"> <i class="fas fa-people-arrows winning-icon" aria-hidden="true"></i> {{ $splace->standin->username }} </div>
              </a>
            </li>
          </div>
        </div>
      </div>

</div>

@endsection
