@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
    <div class="col-md-12">
      <div class="m-title">
        <div class="row">
          <div class="col-md-12 text-center">
             <div> مسابقات پایان یافته </div>
             <small style="font-size: 14px;"> ابتدا مسابقاتی که تاریخ شروع آنها نزدیک است نمایش داده می شوند </small>
           </div>
        </div>
      </div>
      <hr>
    </div>
  </div>
  <div class="row">
    @foreach ($data as $item)
    <div class="col-md-4 tournament-item text-center">

      <div class="tournament-details">
        <div class="tournament-image">
          <img src="/images/tournaments/{{$item->image}}" width="124" alt="{{$item->tag}}">
          <br>
          {{$item->game->name}}
        </div>
        <li>
          نام مسابقه:
          <span class="tournament-text"> {{$item->name}} </span>
        </li>

        <li>
          تاریخ شروع:
          <span class="tournament-text"> {{jdate($item->start_date)->format('Y-m-d')}} </span>
        </li>

        <li>
          تاریخ پایان:
          <span class="tournament-text"> {{jdate($item->end_date)->format('Y-m-d')}} </span>
        </li>

        <li>
          تعداد تیم های شرکت کننده:
          <span class="tournament-text"> {{$item->teams_count}} </span>
        </li>

        <li>
          ظرفیت تیم:
          <span class="tournament-text"> {{$item->max_teams}} </span>
        </li>

        <li>
          @php
          $price = number_format($item->entry_price);
          @endphp
          هزینه ورود:
          @if (!$item->entry_price)
          <span class="tournament-text"> رایگان </span>
          @else
          <span class="tournament-text"> {{$price}} تومان </span>
          @endif
        </li>

        <li>
          <i class="far fa-star gold" aria-hidden="true"></i> مبلغ کل جایزه:
          @php
          $prize_pool = number_format($item->prize_pool);
          @endphp
          <span class="tournament-text"> {{$prize_pool}} تومان </span>
        </li>

        <li>
          <i class="fas fa-trophy gold" aria-hidden="true"></i>
          جایزه تیم اول:
          @php
          $fprize = number_format($item->fplace_reward);
          @endphp
          <span class="tournament-text"> {{$fprize}} تومان </span>
        </li>

        <li>
          <i class="fas fa-trophy silver" aria-hidden="true"></i>
          جایزه تیم دوم:
          @php
          $sprize = number_format($item->splace_reward);
          @endphp
          <span class="tournament-text"> {{$sprize}} تومان </span>
        </li>

        <li>
          <i class="fas fa-trophy bronze" aria-hidden="true"></i>
          جایزه تیم سوم:
          @php
          $tprize = number_format($item->tplace_reward);
          @endphp
          <span class="tournament-text"> {{$tprize}} تومان </span>
        </li>

        @if ($item->foplace_reward)
        <li>
          <i class="fas fa-trophy bronze" aria-hidden="true"></i>
          جایزه تیم چهارم:
          @php
          $foprize = number_format($item->foplace_reward);
          @endphp
          <span class="tournament-text"> {{$foprize}} تومان </span>
        </li>
        @endif

        @if ($item->fiplace_reward)
        <li>
          <i class="fas fa-trophy bronze" aria-hidden="true"></i>
          جایزه تیم پنجم:
          @php
          $fiprize = number_format($item->fiplace_reward);
          @endphp
          <span class="tournament-text"> {{$fiprize}} تومان </span>
        </li>
        @endif

      </div>
    </div>
    @endforeach
  </div>

{{ $data->links() }}

</div>

@endsection
