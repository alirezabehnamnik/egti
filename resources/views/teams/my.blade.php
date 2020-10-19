@extends('layouts.profile')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div class="m-title">
        <div class="row">
          <div class="col-md-3">
            تیم های من
          </div>
        </div>
      </div>
      <hr>
    </div>
    @foreach ($teams as $item)
    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2 text-center">
        <div class="team-item">
          @if ($item->user_id == Auth::user()->id)
          <div class="team-captain" data-toggle="tooltip" data-placement="top" title="کاربر در این تیم کاپیتان است"> <i class="fas fa-star" aria-hidden="true"></i> </div>
          @endif
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


</div>

@endsection
