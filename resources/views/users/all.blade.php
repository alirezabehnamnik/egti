@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="search">
          <i class="fas fa-search" aria-hidden="true"></i> جستجو
        </button>
        <a href="{{route('users_list')}}">
          <button class="btn btn-danger" type="button">
            <i class="fas fa-sync-alt" aria-hidden="true"></i> بارگذاری مجدد
          </button>
        </a>
      </p>
      <div class="collapse" id="search">
        <div class="card card-body">
          <form method="GET" action="{{ route('users_list') }}" class="form-inline">
            <input type="text" value="{{request()->username}}" class="form-control mb-2 mr-sm-2" name="username" placeholder="نام کاربری">
            <select class="form-control col-2" id="state_id_all" name="state_id">
              <option value="">-- انتخاب کنید --</option>
              @foreach ($state as $v)
              <option {{request()->state_id == $v->id ? 'selected' : ''}} value="{{$v->id}}">{{$v->name}}</option>
              @endforeach
            </select>
            <select class="form-control col-2" id="city_id" name="city_id">
              <option value="">-- استان را انتخاب کنید --</option>
            </select>
            <div class="col-2">
              <select class="form-control" id="mygames_id" name="mygames">
                <option value=""> -- انتخاب کنید -- </option>
                @foreach ($mygames as $v)
                <option {{request()->mygames == $v->id ? 'selected' : ''}} value="{{$v->id}}">{{$v->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-2">
              <button type="submit" class="btn btn-primary mb-2">جستجو</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <table class="table table-dark table-hover table-bordered">
      <tbody>
        @foreach ($data as $v)
          <tr>
            <td width="64px;" style="padding: 0px;position:relative;"> <img src="/images/avatars/{{$v->avatar}}" width="100%" alt=""> <div class="user-status {{$v->isOnline() ? 'bg-green' : 'bg-red'}}" data-toggle="tooltip" data-placement="top" title="{{$v->isOnline() ? 'آنلاین' : 'آفلاین'}}"></div> </td>
            <td> {{$v->username}} </td>
            <td> {{$v->name}} {{$v->family}} </td>
            <td>
              @if ($v->privacy_location == 1)
                {{$v->state->name}}
              @else
                مخفی شده توسط کاربر
              @endif
            </td>
            <td>
              @if ($v->privacy_location == 1)
                {{$v->city->name}}
              @else
                مخفی شده توسط کاربر
              @endif
            </td>
            <td>
              @if ($v->mygames)
                @foreach ($games[$v->username] as $f)
                <span class="user-name"> {{$f}} </span>
                @endforeach
              @else
                داده ای وجود ندارد!
              @endif
            </td>
            <td class="text-center">
              <a href="{{route('user_profile', ['username' => $v->username])}}" target="_blank" data-toggle="tooltip" data-placement="top" title="نمایش">
                <button type="button" class="btn btn-sm btn-success" name="button">
                  <i class="far fa-eye" aria-hidden="true"></i>
                </button>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $data->links() }}
  </div>
</div>

@endsection
