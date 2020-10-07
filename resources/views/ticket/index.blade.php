@extends('layouts.profile')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div class="m-title">
        <div class="row">
          <div class="col-md-4">
            تیکت های پشتیبانی من
            <small>
              <a href="{{route('support_show_create')}}" class="dorange">
                (ارسال تیکت جدید)
              </a>
            </small>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </div>
  @if (!$tickets->isEmpty())
  <div class="row">
    <div class="col-10 offset-1">
      <table class="table table-hover table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col"> عنوان </th>
            <th scope="col"> بخش </th>
            <th scope="col"> وضعیت </th>
            <th scope="col"> عملیات </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tickets as $v)
          <tr>
            <td> {{$v->title}} </td>
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
              <a href="{{route('support_show', ['id' => $v->id])}}">
                <button class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="نمایش تیکت"> <i class="fas fa-eye" aria-hidden="true"></i> </button>
              </a>
              @if ($v->enabled != 5)
                <a href="#">
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
