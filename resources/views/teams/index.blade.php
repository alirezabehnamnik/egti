@extends('layouts.app')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-md-2">
      <div class="sidebar">
        <div class="sidenav-profile text-center">
          <img src="/images/avatars/{{$data->avatar}}" width="128px" height="128px" alt="{{$data->username}}">
          <br>
          <br>
          <a href="{{route('user_profile', ['username' => $data->username])}}" target="_blank" style="color:#FFF;">
            <span> {{$data->username}} </span>
          </a>
        </div>
        <br>
        <div class="sidenav-link">
          <li data-toggle="collapse" href="#info" aria-expanded="false" aria-controls="info">
            <i class="fas fa-user-alt" aria-hidden="true"></i> مشخصات
          </li>
          <li data-toggle="collapse" data-target="#teams" aria-expanded="false" aria-controls="teams">
            <i class="fas fa-users" aria-hidden="true"></i>  تیم ها
          </li>
        </div>

      </div>
    </div>
    <div class="col-md-10">
      <div id="accordion">

        <div class="card">
          <div id="info" class="collapse show" data-parent="#accordion">
            <div class="card-body">
                
            </div>
          </div>
        </div>
        <div class="card">
          <div id="teams" class="collapse" data-parent="#accordion">
            <div class="card-body">
              @if (!($teams->isEmpty()))
                <div class="row">
                  @foreach ($teams as $item)
                  <div class="col-10 col-md-2 text-center">
                      <div class="team-item">
                        @if ($item->user_id == Auth::user()->id)
                        <div class="team-captain" data-toggle="tooltip" data-placement="top" title="کاربر در این تیم کاپیتان است"> <i class="fas fa-star" aria-hidden="true"></i> </div>
                        @endif
                        <div class="team-image" style="width: 218px;">
                          <img src="/images/teams/logo/{{$item->logo}}" alt="{{$item->name}}">
                        </div>
                        <div class="team-text">
                          {{$item->name}}
                        </div>
                        <br>
                        <span> بازی های تیم: </span>
                        @foreach ($gar[$item->id] as $v)
                          @for ($i = 0; $i < count($v); $i++)
                            <li class="team-game-name"> {{$v[$i]}} </li>
                          @endfor
                        @endforeach
                        <hr>
                        <a href="{{route('team_profile', ['tag' => $item->tag])}}" target="_blank">
                          <span class="show-btn bg-dorange">
                            نمایش تیم
                          </span>
                        </a>
                      </div>
                  </div>
                  @endforeach
                </div>
              @else
                <h5 class="text-muted"> تیمی برای نمایش وجود ندارد! </h5>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
