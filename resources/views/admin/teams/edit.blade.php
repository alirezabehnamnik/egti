@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  <div class="row">

    <div class="col-md-6 offset-md-3">
      <div class="card-register">

        <br>

        @if(session()->has('message'))
        <div class="col-md-12">
          <div class="alert alert-success">
              <i class="far fa-check-circle" aria-hidden="true"></i> {{ session()->get('message') }}
          </div>
        </div>
        @endif

        <form method="POST" action="{{ route('admin_team_edit_save', ['id' => $data->id]) }}" enctype="multipart/form-data">
            @csrf
            <h4 class="text-center"> <i class="fas fa-user-edit red-icon" aria-hidden="true"></i> ویرایش تیم {{$data->name}} </h4>
            <hr>
            <br>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام:') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" placeholder="نام" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}" autocomplete="name">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="tag" class="col-md-4 col-form-label text-md-right">{{ __('تگ:') }}</label>

                <div class="col-md-6">
                    <input id="tag" type="text" placeholder="تگ" class="form-control @error('tag') is-invalid @enderror" name="tag" value="{{$data->tag}}" autocomplete="tag">

                    @error('tag')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('بازنشانی آواتار؟:') }} </label>
                <div class="col-md-6">
                  <img src="/images/teams/logo/{{$data->logo}}" alt="">
                  <div class="form-check">
                    <input id="avatar" class="form-check-input" type="checkbox" value="1" name="resetAvatar"> بله
                  </div>
                </div>
            </div>



            <hr>

            <br>
            <div class="form-group row mb-0">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-md btn-dorange">
                        {{ __('ویرایش') }}
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
