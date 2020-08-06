@extends('layouts.profile')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div class="m-title">
        <div class="row">
          <div class="col-md-3"> <i class="fas fa-cog" aria-hidden="true"></i> مدیریت تیم های من </div>
        </div>
      </div>
      <hr>
    </div>

    @if(session()->has('message'))
    <div class="col-md-6 offset-md-3">
      <div class="alert alert-success">
          <i class="far fa-check-circle" aria-hidden="true"></i> {{ session()->get('message') }}
      </div>
    </div>
    @endif

  </div>
  <div class="row">
    @foreach ($teams as $item)
    <div class="col-md-2 text-center">
      <div class="team-item">
        @if ($item->enabled == 2)
          <div class="team-disabled">
            <span> <i class="fas fa-lock" style="font-size: 4rem;" aria-hidden="true"></i> <br> این تیم غیر فعال می باشد </span>
          </div>
        <a href="{{route('team_profile', ['tag' => $item->tag])}}">
        @endif
          <div class="team-image">
            <img src="/images/teams/logo/{{$item->logo}}" alt="{{$item->name}}">
          </div>
          <div class="team-text" style="bottom: 20px;">
            {{$item->name}}
          </div>
          <div class="game-icon" data-toggle="tooltip" data-placement="top" title="{{$item->game->name}}">
            <a href="{{route('game', ['id' => $item->game->id])}}" target="_blank">
              <img src="/images/games/logo/{{$item->game->image}}" width="48px" height="48px" alt="">
            </a>
          </div>
        @if ($item->enabled == 2)
        </a>
        @endif
        <div class="team-panel">
          <a href="#" class="tmi purple">
            <i class="fas fa-edit" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="ویرایش (به زودی)"></i>
          </a>
          @if ($item->enabled == 2)
            <a href="{{route('undelete_team', ['id' => $item->id])}}" class="tmi red">
              <i class="fas fa-lock-open" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="فعال کردن تیم"></i>
            </a>
          @else
            <a href="{{route('delete_team', ['id' => $item->id])}}" class="tmi red">
              <i class="fas fa-lock" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="غیر فعال کردن تیم"></i>
            </a>
          @endif
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
