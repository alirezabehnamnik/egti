@extends('layouts.profile')

@section('content')

<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form method="POST" action="{{ route('add_team') }}" enctype="multipart/form-data">
          @csrf

          <h4 class="text-center">
            <i class="far fa-plus-square red-icon" aria-hidden="true"></i> ایجاد تیم جدید
          </h4>
          <hr>
          <br>

          <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام کاربری:') }} <span class="required">*</span> </label>

              <div class="col-md-6">
                  <input autofocus id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="form-group row">
              <label for="tag" class="col-md-4 col-form-label text-md-right">{{ __('نام کاربری:') }} <span class="required">*</span> </label>

              <div class="col-md-6">
                  <input autofocus id="tag" type="text" class="form-control @error('tag') is-invalid @enderror" name="tag" value="{{ old('tag') }}" autocomplete="tag">

                  @error('tag')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="form-group row">
              <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('نام کاربری:') }} <span class="required">*</span> </label>

              <div class="col-md-6">
                  <input autofocus id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">

                  @error('logo')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>


          <br>
          <div class="form-group row mb-0">
              <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-lg btn-red">
                      {{ __('ثبت نام') }}
                  </button>
              </div>
          </div>
      </form>
    </div>
  </div>
</div>

@endsection
