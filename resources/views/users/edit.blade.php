@extends('layouts.profile')

@section('content')


<br>
<br>
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

        <form method="POST" action="{{ route('save_edit') }}" enctype="multipart/form-data">
            @csrf

            <h4 class="text-center"> <i class="fas fa-user-edit red-icon" aria-hidden="true"></i> اطلاعات فردی </h4>
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
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام:') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" placeholder="نام" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" autocomplete="name">

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
                    <input id="family" type="text" class="form-control @error('family') is-invalid @enderror" name="family" value="{{$user->family}}" autocomplete="family">

                    @error('family')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="avatar2" class="col-md-4 col-form-label text-md-right">{{ __('آواتار:') }} </label>

                <div class="col-md-6">
                    <input id="avatar2" type="file" class="form-control @error('avatar2') is-invalid @enderror" name="avatar2">
                    <small> حداکثر حجم مجاز 2MB می باشد </small>
                    <br>
                    <small> آواتار باید در سایز 256x256 باشد. </small>
                    <br>
                    <small> فرمت های مجاز: png,jpeg,jpg </small>
                    @error('avatar2')
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
                    <input id="steam" type="text" class="form-control" name="steam" value="{{$user->steam}}" autocomplete="steam">
                    <small> <a href="/help/steam" target="_blank"> راهنما </a> </small>
                </div>
              </div>

              <div class="form-group row">
                <label for="uplay" class="col-md-4 col-form-label text-md-right">{{ __('یوپلی:') }}</label>

                <div class="col-md-6">
                    <input id="uplay" type="text" class="form-control" name="uplay" value="{{$user->uplay}}" autocomplete="uplay">
                    <small> <a href="/help/uplay" target="_blank"> راهنما </a> </small>
                </div>
              </div>

              <div class="form-group row">
                <label for="epicgames" class="col-md-4 col-form-label text-md-right">{{ __('اپیک گیمز:') }}</label>

                <div class="col-md-6">
                    <input id="epicgames" type="text" class="form-control" name="epicgames" value="{{$user->epicgames}}" autocomplete="epicgames">
                    <small> <a href="/help/epicgames" target="_blank"> راهنما </a> </small>
                </div>
              </div>

              <div class="form-group row">
                <label for="riot" class="col-md-4 col-form-label text-md-right">{{ __('ریوت گیمز:') }}</label>

                <div class="col-md-6">
                    <input id="riot" type="text" class="form-control" name="riot" value="{{$user->riot}}" autocomplete="riot">
                    <small> <a href="/help/riot" target="_blank"> راهنما </a> </small>
                </div>
            </div>

            <hr>

            <h4 class="text-center"> <i class="fas fa-gamepad red-icon" aria-hidden="true"></i> بازی های مورد علاقه </h4>
            <br>
            <div class="form-group row">
              <div class="col-md-12">
                @foreach ($games_list as $v)
                <div class="form-check">
                  <label class="form-check-label">
                    <input id="mygames" name="mygames[]" type="checkbox" class="form-check-input"
                    @if ($user->mygames)
                     {{ in_array($v->id, $user->mygames) ? 'checked' : '' }}
                    @endif
                    value="{{$v->id}}">{{$v->name}}
                  </label>
                </div>
                @endforeach
                </div>
              </div>

              <hr>

              <h4 class="text-center"> <i class="fab fa-playstation red-icon" aria-hidden="true"></i> پلتفرم های من </h4>
              <br>
              <div class="form-group row">

                <div class="col-md-12 text-center">

                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input id="platforms_id" name="platforms_id[]" type="checkbox" class="form-check-input"
                      @if ($user->platforms_id)
                        {{ in_array(1,$user->platforms_id) ? 'checked' : '' }}
                      @endif
                      value="1"> <i class="fas fa-desktop" aria-hidden="true"></i> PC
                    </label>
                  </div>

                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input id="platforms_id" name="platforms_id[]" type="checkbox" class="form-check-input"
                      @if ($user->platforms_id)
                        {{ in_array(2,$user->platforms_id) ? 'checked' : '' }}
                      @endif
                      value="2"> <i class="fab fa-playstation" aria-hidden="true"></i> PlayStation
                    </label>
                  </div>

                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input id="platforms_id" name="platforms_id[]" type="checkbox" class="form-check-input"
                      @if ($user->platforms_id)
                        {{ in_array(3,$user->platforms_id) ? 'checked' : '' }}
                      @endif
                      value="3"> <i class="fab fa-xbox" aria-hidden="true"></i> Xbox
                    </label>
                  </div>
                  </div>
                </div>

                <hr>

                <h4 class="text-center"> <i class="fas fa-user-shield red-icon" aria-hidden="true"></i> تنظیمات حریم شخصی </h4>
                <br>
                <div class="form-group row">
                  <div class="col-md-12">
                    <span> کاربران بتوانند استان و شهر شما را مشاهده کنند؟ </span>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input fix-radio-btn" type="radio" name="privacy_location" id="privacy_location1" value="1" {{$user->privacy_location == 1 ? 'checked' : ''}} >
                      <label class="form-check-label" for="privacy_location1">بله</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input fix-radio-btn" type="radio" name="privacy_location" id="privacy_location2" value="0" {{$user->privacy_location == 0 ? 'checked' : ''}}>
                      <label class="form-check-label" for="privacy_location2">خیر</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <span> کاربران بتوانند ایمیل شما را مشاهده کنند؟ </span>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input fix-radio-btn" type="radio" name="privacy_email" id="privacy_email1" value="1" {{$user->privacy_email == 1 ? 'checked' : ''}} >
                      <label class="form-check-label" for="privacy_email1">بله</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input fix-radio-btn" type="radio" name="privacy_email" id="privacy_email2" value="0" {{$user->privacy_email == 0 ? 'checked' : ''}}>
                      <label class="form-check-label" for="privacy_email2">خیر</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <span> کاربران بتوانند شماره همراه شما را مشاهده کنند؟ </span>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input fix-radio-btn" type="radio" name="privacy_phone" id="privacy_phone1" value="1" {{$user->privacy_phone == 1 ? 'checked' : ''}} >
                      <label class="form-check-label" for="privacy_phone1">بله</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input fix-radio-btn" type="radio" name="privacy_phone" id="privacy_phone2" value="0" {{$user->privacy_phone == 0 ? 'checked' : ''}}>
                      <label class="form-check-label" for="privacy_phone2">خیر</label>
                    </div>
                  </div>
                </div>


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
