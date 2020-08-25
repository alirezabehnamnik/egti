@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="search">
          <i class="fas fa-search" aria-hidden="true"></i> جستجو
        </button>
        <a href="{{route('admin_users')}}">
          <button class="btn btn-danger" type="button">
            <i class="fas fa-sync-alt" aria-hidden="true"></i> بارگذاری مجدد
          </button>
        </a>
      </p>
      <div class="collapse" id="search">
        <div class="card card-body">
          <form method="GET" action="{{ route('admin_users_search') }}" class="form-inline">
            <input type="text" class="form-control mb-2 mr-sm-2" name="id" placeholder="آی دی">
            <input type="text" class="form-control mb-2 mr-sm-2" name="username" placeholder="نام کاربری">
            <input type="text" class="form-control mb-2 mr-sm-2" name="email" placeholder="ایمیل">
            <input type="text" class="form-control mb-2 mr-sm-2" name="family" placeholder="نام خانوادگی">
            <input type="text" class="form-control mb-2 mr-sm-2" name="phone_number" placeholder="شماره تلفن">

            <button type="submit" class="btn btn-primary mb-2">جستجو</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">نام</th>
            <th scope="col">نام خانوادگی</th>
            <th scope="col">نام کاربری</th>
            <th scope="col">ایمیل</th>
            <th scope="col">شماره تلفن</th>
            <th scope="col">عملیات</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $v)
            <tr>
              <th scope="row">{{$v->id}}</th>
              <td> {{$v->name}} </td>
              <td> {{$v->family}} </td>
              <td> {{$v->username}} </td>
              <td> {{$v->email}} </td>
              <td> {{$v->phone_number}} </td>
              <td class="text-center">
                <a href="{{route('admin_user_edit', ['id' => $v->id])}}" target="_blank">
                  <button type="button" class="btn btn-sm btn-success" name="button">
                    <i class="far fa-edit" aria-hidden="true"></i>
                  </button>
                </a>
                <a href="#">
                  <button type="button" class="btn btn-sm btn-danger" name="button">
                    <i class="fas fa-trash" aria-hidden="true"></i>
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
</div>

@endsection
