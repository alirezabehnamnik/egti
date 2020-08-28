@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="search">
          <i class="fas fa-search" aria-hidden="true"></i> جستجو
        </button>
        <a href="{{route('admin_tournaments')}}">
          <button class="btn btn-danger" type="button">
            <i class="fas fa-sync-alt" aria-hidden="true"></i> بارگذاری مجدد
          </button>
        </a>
      </p>
      <div class="collapse" id="search">
        <div class="card card-body">
          <form method="GET" action="{{ route('admin_tournament_search') }}" class="form-inline">
            <input type="text" class="form-control mb-2 mr-sm-2" name="id" placeholder="آی دی">
            <input type="text" class="form-control mb-2 mr-sm-2" name="name" placeholder="نام">
            <input type="text" class="form-control mb-2 mr-sm-2" name="tag" placeholder="تگ">
            <div class="col-md-2">
              <select class="form-control mb-2 mr-sm-2" id="game_id_admin" name="game_id">
                <option></option>
                @foreach ($games as $v)
                <option value="{{$v->id}}">{{$v->name}}</option>
                @endforeach
              </select>
            </div>
            <input type="text" class="form-control mb-2 mr-sm-2" name="start_date" placeholder="تاریخ شروع">
            <input type="text" class="form-control mb-2 mr-sm-2" name="end_date" placeholder="تاریخ پایان">
            <select class="form-control mb-2 mr-sm-2" name="enabled">
              <option value="0"> غیرفعال </option>
              <option value="1"> فعال </option>
              <option value="-1"> پایان ثبت نام </option>
              <option value="2"> خاتمه یافته </option>
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
            <th scope="col"> بازی </th>
            <th scope="col"> عکس </th>
            <th scope="col"> تاریخ شروع </th>
            <th scope="col"> تاریخ پایان </th>
            <th scope="col"> هزینه ورود </th>
            <th scope="col"> تیم های ثبت شده </th>
            <th scope="col"> حداکثر تیم ها </th>
            <th scope="col"> کل جایزه </th>
            <th scope="col"> جایزه نفر اول </th>
            <th scope="col"> جایزه نفر دوم </th>
            <th scope="col"> جایزه نفر سوم </th>
            <th scope="col"> جایزه نفر چهارم </th>
            <th scope="col"> جایزه نفر پنجم </th>
            <th scope="col"> وضعیت </th>
            <th scope="col">عملیات</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $v)
          @php
          $entry_price = number_format($v->entry_price);
          $prize_pool = number_format($v->prize_pool);
          $fprize = number_format($v->fplace_reward);
          $sprize = number_format($v->splace_reward);
          $tprize = number_format($v->tplace_reward);
          $foprize = number_format($v->foplace_reward);
          $fiprize = number_format($v->fiplace_reward);
          @endphp
            <tr>
              <th scope="row">{{$v->id}}</th>
              <td> {{$v->name}} </td>
              <td> {{$v->tag}} </td>
              <td> {{$v->game->name}} </td>
              <td>
                <a href="/images/tournaments/{{$v->image}}" target="_blank">
                  نمایش
                </a>
              </td>
              <td> {{$v->start_date}} </td>
              <td> {{$v->end_date}} </td>
              <td> {{$entry_price}} </td>
              <td> {{$v->teams_count}} </td>
              <td> {{$v->max_teams}} </td>
              <td> {{$prize_pool}} </td>
              <td> {{$fprize}} </td>
              <td> {{$sprize}} </td>
              <td> {{$tprize}} </td>
              <td> {{$foprize}} </td>
              <td> {{$fiprize}} </td>
              <td>
                @if ($v->enabled == 1)
                  فعال
                @elseif ($v->enabled == -1)
                  پایان ثبت نام
                @elseif ($v->enabled == 2)
                  خاتمه یافته
                @else
                  غیر فعال
                @endif
              </td>
              <td class="text-center">
                <a href="{{route('admin_tournament_edit', ['id' => $v->id])}}" target="_blank" data-toggle="tooltip" data-placement="top" title="ویرایش">
                  <button type="button" class="btn btn-sm btn-success" name="button">
                    <i class="far fa-edit" aria-hidden="true"></i>
                  </button>
                </a>
                <a href="{{route('admin_tournament_toggle_status', ['id' => $v->id])}}" data-toggle="tooltip" data-placement="top" @if ($v->enabled == 1 || $v->enabled == -1 || $v->enabled == 2) title="غیرفعال" @else title="فعال" @endif>
                  <button type="button" class="btn btn-sm btn-danger" name="button">
                    @if ($v->enabled == 1 || $v->enabled == -1 || $v->enabled == 2)
                    <i class="far fa-trash-alt" aria-hidden="true"></i>
                    @else
                    <i class="fas fa-undo" aria-hidden="true"></i>
                    @endif
                  </button>
                </a>
                @if ($v->enabled == 1)
                <a href="{{route('admin_tournament_end_register', ['id' => $v->id])}}" data-toggle="tooltip" data-placement="top" title="پایان ثبت نام">
                  <button type="button" class="btn btn-sm btn-info" name="button">
                    <i class="fas fa-hourglass-end" aria-hidden="true"></i>
                  </button>
                </a>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
