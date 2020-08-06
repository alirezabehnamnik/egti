@extends('layouts.profile')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div class="m-title">
        <div class="row">
          <div class="col-md-3"> تیم های من </div>
        </div>
      </div>
      <hr>
    </div>
    @foreach ($teams as $item)
    <div class="col-md-2 text-center">
      <a href="{{route('team_profile', ['tag' => $item->tag])}}">
        <div class="team-item">
          <div class="team-image">
            <img src="/images/teams/logo/{{$item->logo}}" alt="{{$item->name}}">
          </div>
          <div class="team-text">
            {{$item->name}}
          </div>
          <div class="game-icon" data-toggle="tooltip" data-placement="top" title="{{$item->game->name}}">
            <a href="{{route('game', ['id' => $item->game->id])}}" target="_blank">
              <img src="/images/games/logo/{{$item->game->image}}" width="48px" height="48px" alt="">
            </a>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>

@endsection
