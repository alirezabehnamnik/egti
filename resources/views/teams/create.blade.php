@extends('layouts.profile')

@section('content')

<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="card-register">
        <form method="POST" action="{{ route('add_team') }}" enctype="multipart/form-data">
            @csrf

            <h4 class="text-center">
              <i class="far fa-plus-square red-icon" aria-hidden="true"></i> ایجاد تیم جدید
            </h4>
            <hr>
            <br>

            @if(session()->has('error'))
              <div class="col-md-12">
                <div class="alert alert-danger">
                  <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>  {{ session()->get('error') }}
                </div>
              </div>
            @endif

            @if(session()->has('message'))
            <div class="col-md-12">
              <div class="alert alert-success">
                  <i class="far fa-check-circle" aria-hidden="true"></i> {{ session()->get('message') }}
              </div>
            </div>
            @endif

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام تیم:') }} <span class="required">*</span> </label>

                <div class="col-md-7">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="tag" class="col-md-4 col-form-label text-md-right">{{ __('تگ تیم:') }} <span class="required">*</span> </label>

                <div class="col-md-7">
                    <input id="tag" type="text" class="form-control @error('tag') is-invalid @enderror" name="tag" value="{{ old('tag') }}" autocomplete="tag">
                    <small> فقط حروف انگلیسی مجاز می باشد. </small>
                    @error('tag')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('لوگو تیم:') }} <span class="required">*</span> </label>

                <div class="col-md-7">
                    <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                    <small> حداکثر حجم مجاز 2MB می باشد </small>
                    <br>
                    <small> لوگو تیم باید در سایز 256x256 باشد. </small>
                    <br>
                    <small> فرمت های مجاز: png,jpeg,jpg </small>
                    @error('logo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="players_id" class="col-md-4 col-form-label text-md-right">{{ __('بازیکنان تیم:') }} <span class="required">*</span></label>

                <div class="col-md-7">

                  <select class="form-control @error('players_id') is-invalid @enderror" id="players_id" name="players_id[]" multiple="multiple">
                    @foreach ($users as $v)
                    <option value="{{$v->id}}">{{$v->username}}</option>
                    @endforeach
                  </select>
                  <small> تعداد مجاز انتخاب , باید با توجه به تعداد افراد تیم بازی مربوطه باشد (بجز خود شما که کاپیتان تیم هستید). </small>
                  <br>
                  <small> به عنوان مثال برای بازی CS:GO که تیم 5 نفره دارد شما باید 4 بازی کن انتخاب کنید. </small>
                    @error('players_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="standin_id" class="col-md-4 col-form-label text-md-right">{{ __('بازیکن ذخیره:') }} <span class="required">*</span></label>

                <div class="col-md-7">

                  <select class="form-control @error('standin_id') is-invalid @enderror" id="standin_id" name="standin_id">
                    <option></option>
                    @foreach ($users as $v)
                    <option value="{{$v->id}}">{{$v->username}}</option>
                    @endforeach
                  </select>

                    @error('standin_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="game_id" class="col-md-4 col-form-label text-md-right">{{ __('بازی:') }} <span class="required">*</span></label>

                <div class="col-md-7">

                  <select class="form-control @error('game_id') is-invalid @enderror" id="game_id" name="game_id[]" multiple="multiple">
                    @foreach ($games as $v)
                    <option value="{{$v->id}}">{{$v->name}}</option>
                    @endforeach
                  </select>
                  <small> شما می توانید چند بازی برای یک تیم انتخاب کنید. </small>
                  <br>
                  <small> شما برای هر بازی فقط یک تیم می توانید داشته باشید پس در صورتی که می خواهید برای بازی دیگری , تیمی با بازیکن های مختلف داشته باشید , یک تیم جدید ایجاد کنید. </small>
                    @error('game_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>
            <div class="form-group row mb-0">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-md btn-dorange">
                        {{ __('ایجاد تیم') }}
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
