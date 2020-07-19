@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header red-bar">{{ __('ثبت نام') }}</div>

                <div class="card-body shadow">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <h4 class="text-center"> <i class="fas fa-user-edit red-icon" aria-hidden="true"></i> اطلاعات فردی </h4>
                        <hr>
                        <br>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('نام کاربری:') }} <span class="required">*</span> </label>

                            <div class="col-md-6">
                                <input autofocus id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمزعبور:') }} <span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ایمیل:') }} <span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="family" type="text" class="form-control @error('family') is-invalid @enderror" name="family" value="{{ old('family') }}" required autocomplete="family" autofocus>

                                @error('family')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('استان:') }} <span class="required">*</span></label>

                            <div class="col-md-6">

                              <select class="form-control" id="state" name="state">
                                <option value="">-- انتخاب کنید --</option>
                                @foreach ($state as $v)
                                <option value="{{$v->id}}">{{$v->name}}</option>
                                @endforeach
                              </select>

                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('شهر:') }} <span class="required">*</span></label>

                            <div class="col-md-6">

                              <select class="form-control" id="city" name="city">
                                <option value="">-- انتخاب کنید --</option>
                              </select>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('آدرس:') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('شماره همراه:') }} <span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber">
                                <small> مثال: 09171234567 </small>
                                @error('phonenumber')
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
                                <input id="steam" type="text" class="form-control @error('steam') is-invalid @enderror" name="steam" value="{{ old('steam') }}" autocomplete="steam">
                                <small> <a href="/help/steam" target="_blank"> راهنما </a> </small>
                                @error('steam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="uplay" class="col-md-4 col-form-label text-md-right">{{ __('یوپلی:') }}</label>

                            <div class="col-md-6">
                                <input id="uplay" type="text" class="form-control @error('uplay') is-invalid @enderror" name="uplay" value="{{ old('uplay') }}" autocomplete="uplay">
                                <small> <a href="/help/uplay" target="_blank"> راهنما </a> </small>
                                @error('uplay')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="epicgames" class="col-md-4 col-form-label text-md-right">{{ __('اپیک گیمز:') }}</label>

                            <div class="col-md-6">
                                <input id="epicgames" type="text" class="form-control @error('epicgames') is-invalid @enderror" name="epicgames" value="{{ old('epicgames') }}" autocomplete="epicgames">
                                <small> <a href="/help/epicgames" target="_blank"> راهنما </a> </small>
                                @error('epicgames')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="riot" class="col-md-4 col-form-label text-md-right">{{ __('ریوت گیمز:') }}</label>

                            <div class="col-md-6">
                                <input id="riot" type="text" class="form-control @error('riot') is-invalid @enderror" name="riot" value="{{ old('riot') }}" autocomplete="riot">
                                <small> <a href="/help/riot" target="_blank"> راهنما </a> </small>
                                @error('riot')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                <input id="my_games" type="checkbox" class="form-check-input" value="{{$v->id}}">{{$v->name}}
                              </label>
                            </div>
                            @endforeach


                              @error('my_games')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>

                          <hr>

                          <h4 class="text-center"> <i class="fab fa-playstation red-icon" aria-hidden="true"></i> پلتفرم های من </h4>
                          <br>
                          <div class="form-group row">

                            <div class="col-md-12 text-center">

                              <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input id="platforms" type="checkbox" class="form-check-input" value="1"> <i class="fas fa-desktop" aria-hidden="true"></i> PC
                                </label>
                              </div>

                              <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input id="platforms" type="checkbox" class="form-check-input" value="2"> <i class="fab fa-playstation" aria-hidden="true"></i> PlayStation
                                </label>
                              </div>

                              <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input id="platforms" type="checkbox" class="form-check-input" value="3"> <i class="fab fa-xbox" aria-hidden="true"></i> Xbox
                                </label>
                              </div>


                                @error('platforms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                            <hr>

                            <div class="form-group row">

                              <div class="col-md-12">

                                <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input id="platforms" type="checkbox" class="form-check-input" value="1"> <i class="fas fa-gavel" aria-hidden="true"></i>
                                    متن
                                    <a href="#" target="_blank"> قوانین </a>
                                    را خوانده ام و آنها را می پذیرم.
                                  </label>
                                </div>

                                  @error('my_games')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                </div>
                              </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-red">
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
