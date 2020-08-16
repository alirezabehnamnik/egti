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
          <div class="team-image">
            <img src="/images/teams/logo/{{$item->logo}}" alt="{{$item->name}}">
          </div>
          <div class="team-text">
            {{$item->name}}
          </div>
        <ul>
          @foreach ($data[$item->id] as $v)
            @for ($i = 0; $i < count($v); $i++)
             <li> {{$v[$i]}} </li>
            @endfor
          @endforeach
        </ul>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
