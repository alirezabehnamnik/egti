@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
    <div class="col-md-12">
      <div class="m-title">
        <div class="row">
          <div class="col-md-12 text-center"> بازی ها </div>
        </div>
      </div>
      <hr>
    </div>
  </div>
  <div class="row">
    @foreach ($games_list as $item)
    <div class="col-md-4 game-item text-center">
      <a href="{{route('game', ['id' => $item->id])}}">
        <div class="game-image">
          <img src="/images/games/{{$item->image}}" width="350" alt="">
          <div class="game-text">
            <span class="game-name"> {{$item->name}} </span>
            <span class="game-platforms">
              @if(in_array("1", $item->platforms))
              <i class="fas fa-desktop ml-1" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="PC"></i>
              @endif

              @if(in_array("2", $item->platforms))
              <i class="fab fa-playstation ml-1" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="PlayStation 4"></i>
              @endif

              @if(in_array("3", $item->platforms))
              <i class="fab fa-xbox ml-1" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Xbox One"></i>
              @endif
            </span>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>

</div>

  @endsection
