@extends('layouts.profile')

@section('content')

<div class="container-fluid">
  <br>
  <div class="row">
    @if(session()->has('message'))
    <div class="col-md-12">
      <div class="alert alert-success">
          <i class="far fa-check-circle" aria-hidden="true"></i> {{ session()->get('message') }}
      </div>
    </div>
    <br>
    @endif

    @if (!$data->isEmpty())
      @foreach ($data as $v)
      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 text-center">
          <div class="team-item">
            <div class="user-image">
              <img src="/images/avatars/{{$v->user->avatar}}" alt="{{$v->user->name}}">
            </div>
            <div class="team-text">
              <a href="{{route('user_profile', ['username' => $v->user->username])}}" style="color:#FFF;">
                {{$v->user->username}}
              </a>
            </div>
            <br>
            <span> {{$v->user->name}} {{$v->user->family}} </span>
            <hr>
            <a href="{{route('friend_requests_result', ['result' => 'accept', 'sender' => $v->user->id, 'receiver' => Auth::user()->id])}}" data-toggle="tooltip" data-placement="top" title="قبول" style="color: #FFF;">
              <span class="show-btn bg-dorange">
                <i class="fas fa-check" aria-hidden="true"></i> قبول درخواست
              </span>
            </a>
            <br>
            <br>
            <a href="{{route('friend_requests_result', ['result' => 'reject', 'sender' => $v->user->id, 'receiver' => Auth::user()->id])}}" data-toggle="tooltip" data-placement="top" title="رد" style="color: #FFF;">
              <span class="show-btn bg-indigo">
                <i class="fas fa-times" aria-hidden="true"></i> رد درخواست
              </span>
            </a>
          </div>
      </div>
      @endforeach
    @else
      <div class="col-md-12">
        <div class="alert alert-warning">
            <i class="fas fa-exclamation-triangle" aria-hidden="true"></i> شما هیچ درخواست دوستی ندارید.
        </div>
      </div>
    @endif
  </div>

</div>

@endsection
