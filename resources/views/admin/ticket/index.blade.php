@extends('layouts.admin')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div class="m-title">
        <div class="row">
          <div class="col-md-4">
            تیکت های پشتیبانی
          </div>
        </div>
      </div>
      <hr>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="search">
          <i class="fas fa-search" aria-hidden="true"></i> جستجو
        </button>
        <a href="{{route('admin_tickets')}}">
          <button class="btn btn-danger" type="button">
            <i class="fas fa-sync-alt" aria-hidden="true"></i> بارگذاری مجدد
          </button>
        </a>
      </p>
      <div class="collapse" id="search">
        <div class="card card-body">
          <form method="GET" action="{{ route('admin_tickets_search') }}" class="form-inline">
            <div class="col-md-2">
              <select class="form-control" id="standin_id" name="department">
                <option value=""> انتخاب کنید </option>
                <option value="مالی"> مالی </option>
                <option value="پشتیبانی مسابقات"> پشتیبانی مسابقات </option>
                <option value="پشتیبانی وبسایت"> پشتیبانی وبسایت </option>
                <option value="گزارش خطا"> گزارش خطا </option>
                <option value="مدیریت"> مدیریت </option>
              </select>
            </div>
            <select class="form-control mb-2 mr-sm-2" name="enabled">
              <option value=""> وضعیت </option>
              <option {{request()->enabled == 1 ? 'selected' : ''}} value="1"> در انتظار پاسخ </option>
              <option {{request()->enabled == 2 ? 'selected' : ''}} value="2">  درحال پیگیری </option>
              <option {{request()->enabled == 3 ? 'selected' : ''}} value="3"> پاسخ داده شده </option>
              <option {{request()->enabled == 4 ? 'selected' : ''}} value="4"> پاسخ کاربر </option>
              <option {{request()->enabled == 5 ? 'selected' : ''}} value="5"> تمام شد </option>
              <option {{request()->enabled == 6 ? 'selected' : ''}} value="6"> بسته شده </option>
            </select>
            <button type="submit" class="btn btn-primary mb-2">جستجو</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <br>
  @if (!$tickets->isEmpty())
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col"> عنوان </th>
            <th scope="col"> ارسال کننده </th>
            <th scope="col"> بخش </th>
            <th scope="col"> وضعیت </th>
            <th scope="col"> زمان ارسال </th>
            <th scope="col"> عملیات </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tickets as $v)
          <tr>
            <td> {{$v->title}} </td>
            <td> {{$v->user->username}} </td>
            <td>  {{$v->department}} </td>
            <td>
              @switch ($v->enabled)
                @case (1)
                  <span class="t-status pending"> در انتظار پاسخ </span>
                  @break
                @case (2)
                  <span class="t-status in-progress"> درحال پیگیری </span>
                  @break
                @case (3)
                  <span class="t-status answered"> پاسخ داده شده </span>
                  @break
                @case (4)
                  <span class="t-status user-answered"> پاسخ کاربر </span>
                  @break
                @case (5)
                  <span class="t-status completed"> تمام شده </span>
                  @break
                @case (6)
                  <span class="t-status closed"> بسته شده </span>
                  @break
              @endswitch
            </td>
            <td>
                {{jdate($v->created_at)->format('Y/m/d H:i:s')}}
            </td>
            <td>
              <a href="{{route('admin_ticket_show', ['id' => $v->id])}}">
                <button class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="نمایش تیکت"> <i class="fas fa-eye" aria-hidden="true"></i> </button>
              </a>
              @if ($v->enabled != 6 && $v->enabled != 5 && $v->enabled != 2)
              <a href="{{route('admin_ticket_progress', ['id' => $v->id])}}">
                <button class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="درحال پیگیری"> <i class="fas fa-history" aria-hidden="true"></i> </button>
              </a>
              @endif
              @if ($v->enabled != 6 && $v->enabled != 5)
                <a href="{{route('admin_ticket_close', ['id' => $v->id])}}">
                  <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="بستن تیکت"> <i class="fas fa-trash-alt" aria-hidden="true"></i> </button>
                </a>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $tickets->links() }}
    </div>
  </div>


  @else
  <div class="no-data">
    <span> شما هیچ تیکت پشتیبانی ندارید. </span>
  </div>
  @endif

</div>

@endsection
