@extends('layouts.profile')

@section('content')
<br>
<div class="container-fluid">
  <div class="row">
    @if(session()->has('message'))
    <div class="col-md-12">
      <div class="alert alert-success">
          <i class="far fa-check-circle" aria-hidden="true"></i> {{ session()->get('message') }}
      </div>
    </div>
    @endif
    @if (!$data)
      <div class="col-md-12">
        <div class="alert alert-warning">
            <i class="far fa-check-circle" aria-hidden="true"></i> شما هنوز دوستی ندارید!
        </div>
      </div>
    @else
      @foreach ($data as $v)
        <div class="col-10 col-md-2 text-center">
            <div class="team-item">
              <div class="user-image">
                <img src="/images/avatars/{{$v->avatar}}" alt="{{$v->name}}">
              </div>
              <div class="team-text">
                {{$v->username}}
              </div>
              <br>
              <span> {{$v->name}} {{$v->family}} </span>
              <hr>
              <a href="{{route('user_profile', ['username' => $v->username])}}" target="_blank">
                <span class="show-btn bg-dorange">
                  <i class="fas fa-eye" aria-hidden="true"></i> نمایش کاربر
                </span>
              </a>
              <br>
              <br>
              <a href="{{route('remove_friend', ['id' => $v->id])}}">
                <span class="show-btn bg-indigo">
                  <i class="fas fa-times" aria-hidden="true"></i> حذف دوست
                </span>
              </a>
            </div>
        </div>
      @endforeach
    @endif
  </div>
</div>

@endsection
