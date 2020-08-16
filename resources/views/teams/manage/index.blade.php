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


    @if(session()->has('error'))
      <div class="col-md-12">
        <div class="alert alert-danger">
          <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>  {{ session()->get('error') }}
        </div>
      </div>
    @endif

    @if(session()->has('message'))
    <div class="col-md-12">
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
          <div class="team-text">
            {{$item->name}}
          </div>
        @if ($item->enabled == 2)
        </a>
        @endif
        <br>
        <span> بازی های تیم: </span>
        @foreach ($data[$item->id] as $v)
          @for ($i = 0; $i < count($v); $i++)
            <li class="team-game-name"> {{$v[$i]}} </li>
          @endfor
        @endforeach
        <hr>
        <div class="team-panel">
          <a href="#" class="tmi edit-b green">
            <span> <i class="fas fa-edit" aria-hidden="true"></i> ویرایش </span>
          </a>
          @if ($item->enabled == 2)
            <a href="{{route('undelete_team', ['id' => $item->id])}}" class="tmi unlock-b red">
              <span> <i class="fas fa-unlock" aria-hidden="true"></i> فعال کردن </span>
            </a>
          @else
            <a href="{{route('delete_team', ['id' => $item->id])}}" class="tmi lock-b dorange">
              <span> <i class="fas fa-lock" aria-hidden="true"></i> غیر فعال کردن </span>
            </a>
          @endif
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
