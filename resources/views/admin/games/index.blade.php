@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  <div class="row">
    @if(session()->has('message'))
    <div class="col-md-12">
      <div class="alert alert-success">
          <i class="far fa-check-circle" aria-hidden="true"></i> {{ session()->get('message') }}
      </div>
    </div>
    @endif
    <div class="col-md-12">
      <table class="table table-hover table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">نام</th>
            <th scope="col"> تگ </th>
            <th scope="col"> عکس </th>
            <th scope="col"> پلتفورم ها </th>
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
                <a href="/images/games/{{$v->image}}" target="_blank">
                  نمایش
                </a>
              </td>
              <td>
                @if(in_array("1", $v->platforms))
                <i class="fas fa-desktop ml-1" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="PC"></i>
                @endif

                @if(in_array("2", $v->platforms))
                <i class="fab fa-playstation ml-1" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="PlayStation 4"></i>
                @endif

                @if(in_array("3", $v->platforms))
                <i class="fab fa-xbox ml-1" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Xbox One"></i>
                @endif
              </td>
              <td>
                {{$v->enabled == 1 ? 'فعال' : 'غیرفعال'}}
              </td>
              <td class="text-center">
                <a href="{{route('game', ['id' => $v->id])}}" target="_blank" data-toggle="tooltip" data-placement="top" title="نمایش">
                  <button type="button" class="btn btn-sm btn-info" name="button">
                    <i class="far fa-eye" aria-hidden="true"></i>
                  </button>
                </a>
                <a href="{{route('admin_game_edit', ['id' => $v->id])}}" target="_blank" data-toggle="tooltip" data-placement="top" title="ویرایش">
                  <button type="button" class="btn btn-sm btn-success" name="button">
                    <i class="far fa-edit" aria-hidden="true"></i>
                  </button>
                </a>
                <a href="{{route('admin_game_toggle_status', ['id' => $v->id])}}" data-toggle="tooltip" data-placement="top" title="{{$v->enabled == 1 ? 'غیرفعال' : 'فعال'}}">
                  <button type="button" class="btn btn-sm btn-danger" name="button">
                    @if ($v->enabled == 1)
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
