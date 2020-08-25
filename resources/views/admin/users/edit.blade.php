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

        <form method="POST" action="{{ route('admin_user_edit_save', ['id' => $data->id]) }}" enctype="multipart/form-data">
            @csrf
            <h4 class="text-center"> <i class="fas fa-user-edit red-icon" aria-hidden="true"></i> ویرایش کاربر {{$data->username}} </h4>
            <hr>
            <br>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمزعبور:') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تکرار رمزعبور') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('نام کاربری:') }}</label>

                <div class="col-md-6">
                    <input id="username" type="text" placeholder="نام" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$data->username}}" autocomplete="username">

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ایمیل:') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" placeholder="نام" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data->email}}" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

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
                <label for="family" class="col-md-4 col-form-label text-md-right">{{ __('نام خانوادگی:') }}</label>

                <div class="col-md-6">
                    <input id="family" type="text" class="form-control @error('family') is-invalid @enderror" name="family" value="{{$data->family}}" autocomplete="family">

                    @error('family')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('بازنشانی آواتار؟:') }} </label>
                <div class="col-md-6">
                  <img src="/images/avatars/{{$data->avatar}}" alt="">
                  <div class="form-check">
                    <input id="avatar" class="form-check-input" type="checkbox" value="1" name="resetAvatar"> بله
                  </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('آدرس:') }}</label>

                <div class="col-md-6">
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$data->address}}" autocomplete="address">

                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <hr>
            <h4 class="text-center"> <i class="fab fa-steam red-icon" aria-hidden="true"></i> حساب کاربری بازی ها </h4>
            <br>

            <div class="form-group row">
                <label for="steam" class="col-md-4 col-form-label text-md-right">{{ __('استیم:') }}</label>

                <div class="col-md-6">
                    <input id="steam" type="text" class="form-control" name="steam" value="{{$data->steam}}" autocomplete="steam">
                    <small> <a href="/help/steam" target="_blank"> راهنما </a> </small>
                </div>
              </div>

              <div class="form-group row">
                <label for="uplay" class="col-md-4 col-form-label text-md-right">{{ __('یوپلی:') }}</label>

                <div class="col-md-6">
                    <input id="uplay" type="text" class="form-control" name="uplay" value="{{$data->uplay}}" autocomplete="uplay">
                    <small> <a href="/help/uplay" target="_blank"> راهنما </a> </small>
                </div>
              </div>

              <div class="form-group row">
                <label for="epicgames" class="col-md-4 col-form-label text-md-right">{{ __('اپیک گیمز:') }}</label>

                <div class="col-md-6">
                    <input id="epicgames" type="text" class="form-control" name="epicgames" value="{{$data->epicgames}}" autocomplete="epicgames">
                    <small> <a href="/help/epicgames" target="_blank"> راهنما </a> </small>
                </div>
              </div>

              <div class="form-group row">
                <label for="riot" class="col-md-4 col-form-label text-md-right">{{ __('ریوت گیمز:') }}</label>

                <div class="col-md-6">
                    <input id="riot" type="text" class="form-control" name="riot" value="{{$data->riot}}" autocomplete="riot">
                    <small> <a href="/help/riot" target="_blank"> راهنما </a> </small>
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
