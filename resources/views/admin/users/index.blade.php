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
            <input type="text" value="{{request()->id}}" class="form-control mb-2 mr-sm-2" name="id" placeholder="آی دی">
            <input type="text" value="{{request()->username}}" class="form-control mb-2 mr-sm-2" name="username" placeholder="نام کاربری">
            <input type="text" value="{{request()->email}}" class="form-control mb-2 mr-sm-2" name="email" placeholder="ایمیل">
            <input type="text" value="{{request()->family}}" class="form-control mb-2 mr-sm-2" name="family" placeholder="نام خانوادگی">
            <input type="text" value="{{request()->phone_number}}" class="form-control mb-2 mr-sm-2" name="phone_number" placeholder="شماره تلفن">
            <select class="form-control mb-2 mr-sm-2" name="enabled">
              <option value=""> وضعیت </option>
              <option {{request()->enabled == 1 ? 'selected' : ''}} value="1"> فعال </option>
              <option {{request()->enabled == 2 ? 'selected' : ''}} value="2"> بن شده </option>
            </select>
            <button type="submit" class="btn btn-primary mb-2">جستجو</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">نام</th>
            <th scope="col">نام خانوادگی</th>
            <th scope="col">نام کاربری</th>
            <th scope="col">ایمیل</th>
            <th scope="col">شماره تلفن</th>
            <th scope="col">دلیل بن</th>
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
              <td>
                {{$v->email}}
                @if ($v->email_verified_at)
                  <i style="color: #8cba51;" class="fas fa-check" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="ایمیل تایید شده است"></i>
                @else
                  <i style="color: #ec2e2e;" class="fas fa-times" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="ایمیل تایید نشده است"></i>
                @endif
              </td>
              <td> {{$v->phone_number}} </td>
              <td> {{$v->reason}} </td>
              <td class="text-center">
                <a href="{{route('user_profile', ['username' => $v->username])}}" target="_blank" data-toggle="tooltip" data-placement="top" title="نمایش">
                  <button type="button" class="btn btn-sm btn-info" name="button">
                    <i class="far fa-eye" aria-hidden="true"></i>
                  </button>
                </a>
                <a href="{{route('admin_user_edit', ['id' => $v->id])}}" data-toggle="tooltip" data-placement="top" title="ویرایش">
                  <button type="button" class="btn btn-sm btn-success" name="button">
                    <i class="far fa-edit" aria-hidden="true"></i>
                  </button>
                </a>
                <a href="{{route('admin_user_disable', ['id' => $v->id])}}" data-toggle="tooltip" data-placement="top" @if ($v->enabled == 1) title="بن" @else title="آنبن" @endif>
                  <button type="button" class="btn btn-sm btn-danger" name="button">
                    @if ($v->enabled == 1)
                    <i class="fas fa-ban" aria-hidden="true"></i>
                    @else
                    <i class="fas fa-undo" aria-hidden="true"></i>
                    @endif
                  </button>
                </a>
                @if (!$v->email_verified_at)
                  <a href="{{route('admin_verify_user', ['id' => $v->id])}}" data-toggle="tooltip" data-placement="top" title="تایید ایمیل">
                    <button type="button" class="btn btn-sm btn-warning" name="button">
                      <i class="fas fa-check" aria-hidden="true"></i>
                    </button>
                  </a>
                @endif
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
