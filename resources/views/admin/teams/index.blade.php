@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="search">
          <i class="fas fa-search" aria-hidden="true"></i> جستجو
        </button>
        <a href="{{route('admin_teams')}}">
          <button class="btn btn-danger" type="button">
            <i class="fas fa-sync-alt" aria-hidden="true"></i> بارگذاری مجدد
          </button>
        </a>
      </p>
      <div class="collapse" id="search">
        <div class="card card-body">
          <form method="GET" action="{{ route('admin_team_search') }}" class="form-inline">
            <input type="text" class="form-control mb-2 mr-sm-2" name="id" placeholder="آی دی">
            <input type="text" class="form-control mb-2 mr-sm-2" name="name" placeholder="نام">
            <input type="text" class="form-control mb-2 mr-sm-2" name="tag" placeholder="تگ">
            <div class="col-md-2">
              <select class="form-control" id="standin_id" name="user_id">
                <option></option>
                @foreach ($users as $v)
                <option value="{{$v->id}}">{{$v->username}}</option>
                @endforeach
              </select>
            </div>
            <select class="form-control mb-2 mr-sm-2" name="enabled">
              <option value="0"> غیرفعال توسط مدیر </option>
              <option value="1"> فعال </option>
              <option value="2"> غیرفعال توسط کاپیتان </option>
            </select>

            <button type="submit" class="btn btn-primary mb-2">جستجو</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    @if(session()->has('message'))
    <div class="col-md-12">
      <div class="alert alert-success">
          <i class="far fa-check-circle" aria-hidden="true"></i> {{ session()->get('message') }}
      </div>
    </div>
    @endif
    <div class="col-md-12">
      <table class="table table-hover table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">نام</th>
            <th scope="col"> تگ </th>
            <th scope="col"> عکس </th>
            <th scope="col"> کاپیتان </th>
            <th scope="col"> وضعیت </th>
            <th scope="col">عملیات</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $v)
            <tr>
              <th scope="row">{{$v->id}}</th>
              <td> {{$v->name}} </td>
              <td> {{$v->tag}} </td>
              <td>
                <a href="/images/teams/logo/{{$v->logo}}" target="_blank">
                  نمایش
                </a>
              </td>
              <td> <a href="{{route('user_profile', ['username' => $v->captain->username])}}" target="_blank"> {{$v->captain->username}} </a> </td>
              <td>
                @if ($v->enabled == 1)
                  فعال
                @elseif ($v->enabled == 2)
                  غیرفعال توسط کاپیتان
                @else
                  غیرفعال توسط مدیر
                @endif
              </td>
              <td class="text-center">
                <a href="{{route('admin_team_edit', ['id' => $v->id])}}" target="_blank" data-toggle="tooltip" data-placement="top" title="ویرایش">
                  <button type="button" class="btn btn-sm btn-success" name="button">
                    <i class="far fa-edit" aria-hidden="true"></i>
                  </button>
                </a>
                <a href="{{route('admin_team_toggle_status', ['id' => $v->id])}}" data-toggle="tooltip" data-placement="top" @if ($v->enabled == 1 || $v->enabled == 2) title="غیرفعال" @else title="فعال" @endif>
                  <button type="button" class="btn btn-sm btn-danger" name="button">
                    @if ($v->enabled == 1 || $v->enabled == 2)
                    <i class="far fa-trash-alt" aria-hidden="true"></i>
                    @else
                    <i class="fas fa-undo" aria-hidden="true"></i>
                    @endif
                  </button>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
