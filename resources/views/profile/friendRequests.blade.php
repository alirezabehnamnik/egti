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
    @foreach ($data as $v)
      <div class="col-3">
        <div class="fr-item">
          <a href="{{route('user_profile', ['username' => $v->user->username])}}">
            <span style="color: #282f39"> {{$v->user->username}} </span>
          </a>
          <div class="fr-controlls">
            <a href="{{route('friend_requests_result', ['result' => 'accept', 'sender' => $v->user->id, 'receiver' => Auth::user()->id])}}" data-toggle="tooltip" data-placement="top" title="قبول" style="color: #FFF;">
              <i class="fas fa-check green" aria-hidden="true"></i>
            </a>
            <a href="{{route('friend_requests_result', ['result' => 'reject', 'sender' => $v->user->id, 'receiver' => Auth::user()->id])}}" data-toggle="tooltip" data-placement="top" title="رد" style="color: #FFF;">
              <i class="fas fa-times red" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

</div>

@endsection
