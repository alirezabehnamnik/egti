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

        <form method="POST" action="{{ route('admin_game_edit_save', ['id' => $data->id]) }}" enctype="multipart/form-data">
            @csrf
            <h4 class="text-center"> <i class="fas fa-user-edit red-icon" aria-hidden="true"></i> ویرایش بازی {{$data->name}} </h4>
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
                <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('عکس:') }} </label>

                <div class="col-md-6">
                    <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
                    <small> عکس باید در سایز 645x300 باشد. </small>
                    <br>
                    <small> فرمت های مجاز: png,jpeg,jpg </small>
                    @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <img src="/images/games/{{$data->image}}" width="100%" alt="">
                </div>
            </div>

            <div class="form-group row">

              <div class="col-md-12 text-center">

                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input id="platforms" name="platforms[]" type="checkbox" class="form-check-input" {{ in_array(1,json_decode($data->platforms)) ? 'checked' : '' }} value="1"> <i class="fas fa-desktop" aria-hidden="true"></i> PC
                  </label>
                </div>

                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input id="platforms" name="platforms[]" type="checkbox" class="form-check-input" {{ in_array(2,json_decode($data->platforms)) ? 'checked' : '' }} value="2"> <i class="fab fa-playstation" aria-hidden="true"></i> PlayStation
                  </label>
                </div>

                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input id="platforms" name="platforms[]" type="checkbox" class="form-check-input" {{ in_array(3,json_decode($data->platforms)) ? 'checked' : '' }} value="3"> <i class="fab fa-xbox" aria-hidden="true"></i> Xbox
                  </label>
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
