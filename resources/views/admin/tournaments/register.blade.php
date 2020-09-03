@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="search">
          <i class="fas fa-search" aria-hidden="true"></i> جستجو
        </button>
        <a href="{{route('admin_tournament_register', ['id' => $id])}}">
          <button class="btn btn-danger" type="button">
            <i class="fas fa-sync-alt" aria-hidden="true"></i> بارگذاری مجدد
          </button>
        </a>
      </p>
      <div class="collapse show" id="search">
        <div class="card card-body">
          <form method="GET" action="{{ route('admin_tournament_register_search', ['id' => $id]) }}" class="form-inline">
            <input type="text" value="{{request()->payment_number}}" class="form-control mb-2 mr-sm-2" name="payment_number" placeholder="شماره سفارش">
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
            <th scope="col">مسابقه</th>
            <th scope="col"> تیم (تگ) </th>
            <th scope="col">کاپیتان (پرداخت کننده)</th>
            <th scope="col"> شماره سفارش </th>
            <th scope="col"> وضعیت </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $v)
            <tr>
              <th scope="row">{{$v->id}}</th>
              <td> {{$v->tournament->name}} </td>
              <td> <a href="{{route('team_profile', ['tag' => $v->team->tag])}}"> {{$v->team->tag}} </a> </td>
              <td> <a href="{{route('user_profile', ['username' => $v->user->username])}}"> {{$v->user->username}} </a> </td>
              <td> {{$v->payment_number}} </td>
              <td>
                @if ($v->enabled == 1)
                  پرداخت موفق
                @else
                  غیر فعال
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
