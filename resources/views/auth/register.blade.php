@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header red-bar"> <i class="fas fa-user-plus" aria-hidden="true"></i> {{ __('ثبت نام') }}</div>

                <div class="card-body shadow">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <h4 class="text-center"> <i class="fas fa-user-edit red-icon" aria-hidden="true"></i> اطلاعات فردی </h4>
                        <hr>
                        <br>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('نام کاربری:') }} <span class="required">*</span> </label>

                            <div class="col-md-6">
                                <input autofocus id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمزعبور:') }} <span class="required">*</span></label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تکرار رمزعبور') }} <span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ایمیل:') }} <span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                <small> مثال: example@gmail.com </small>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام:') }} <span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="نام" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="family" class="col-md-4 col-form-label text-md-right">{{ __('نام خانوادگی:') }} <span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="family" type="text" class="form-control @error('family') is-invalid @enderror" name="family" value="{{ old('family') }}" autocomplete="family">

                                @error('family')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state_id" class="col-md-4 col-form-label text-md-right">{{ __('استان:') }} <span class="required">*</span></label>

                            <div class="col-md-6">

                              <select class="form-control @error('state_id') is-invalid @enderror" id="state_id" name="state_id">
                                <option value="">-- انتخاب کنید --</option>
                                @foreach ($state as $v)
                                <option value="{{$v->id}}">{{$v->name}}</option>
                                @endforeach
                              </select>

                                @error('state_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city_id" class="col-md-4 col-form-label text-md-right">{{ __('شهر:') }} <span class="required">*</span></label>

                            <div class="col-md-6">

                              <select class="form-control @error('city_id') is-invalid @enderror" id="city_id" name="city_id">
                                <option value="">-- انتخاب کنید --</option>
                              </select>

                                @error('city_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('آدرس:') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" autocomplete="address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('شماره همراه:') }} <span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" autocomplete="phone_number">
                                <small> مثال: 09171234567 </small>
                                @error('phone_number')
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
                                <input id="steam" type="text" class="form-control" name="steam" value="{{ old('steam') }}" autocomplete="steam">
                                <small> <a href="/help/steam" target="_blank"> راهنما </a> </small>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="uplay" class="col-md-4 col-form-label text-md-right">{{ __('یوپلی:') }}</label>

                            <div class="col-md-6">
                                <input id="uplay" type="text" class="form-control" name="uplay" value="{{ old('uplay') }}" autocomplete="uplay">
                                <small> <a href="/help/ubisoft" target="_blank"> راهنما </a> </small>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="epicgames" class="col-md-4 col-form-label text-md-right">{{ __('اپیک گیمز:') }}</label>

                            <div class="col-md-6">
                                <input id="epicgames" type="text" class="form-control" name="epicgames" value="{{ old('epicgames') }}" autocomplete="epicgames">
                                <small> <a href="/help/epicgames" target="_blank"> راهنما </a> </small>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="riot" class="col-md-4 col-form-label text-md-right">{{ __('ریوت گیمز:') }}</label>

                            <div class="col-md-6">
                                <input id="riot" type="text" class="form-control" name="riot" value="{{ old('riot') }}" autocomplete="riot">
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
                                <input id="mygames" name="mygames[]" type="checkbox" class="form-check-input" value="{{$v->id}}">{{$v->name}}
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
                                  <input id="platforms_id" name="platforms_id[]" type="checkbox" class="form-check-input" value="1"> <i class="fas fa-desktop" aria-hidden="true"></i> PC
                                </label>
                              </div>

                              <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input id="platforms_id" name="platforms_id[]" type="checkbox" class="form-check-input" value="2"> <i class="fab fa-playstation" aria-hidden="true"></i> PlayStation
                                </label>
                              </div>

                              <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input id="platforms_id" name="platforms_id[]" type="checkbox" class="form-check-input" value="3"> <i class="fab fa-xbox" aria-hidden="true"></i> Xbox
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
                                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_location" id="privacy_location1" value="1" checked>
                                  <label class="form-check-label" for="privacy_location1">بله</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_location" id="privacy_location2" value="0">
                                  <label class="form-check-label" for="privacy_location2">خیر</label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <span> کاربران بتوانند ایمیل شما را مشاهده کنند؟ </span>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_email" id="privacy_email1" value="1" checked>
                                  <label class="form-check-label" for="privacy_email1">بله</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_email" id="privacy_email2" value="0">
                                  <label class="form-check-label" for="privacy_email2">خیر</label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <span> کاربران بتوانند شماره همراه شما را مشاهده کنند؟ </span>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_phone" id="privacy_phone1" value="1" checked>
                                  <label class="form-check-label" for="privacy_phone1">بله</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_phone" id="privacy_phone2" value="0">
                                  <label class="form-check-label" for="privacy_phone2">خیر</label>
                                </div>
                              </div>
                            </div>
                            <hr>

                            <div class="form-group row">

                                <div class="form-check-inline col-md-12">
                                  <label class="form-check-label">
                                    <input name="rules" type="checkbox" class="form-check-input" value="1"> <i class="fas fa-gavel" aria-hidden="true"></i>
                                    متن
                                    <a href="{{route('rules')}}" target="_blank"> قوانین </a>
                                    را خوانده ام و آنها را می پذیرم.
                                  </label>
                                  <input type="hidden" class="form-control @error('rules') is-invalid @enderror">
                                  @error('rules')
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
    </div>
</div>
@endsection
