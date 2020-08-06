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

          @if(session()->has('error'))
            <div class="col-md-6 offset-md-3">
              <div class="alert alert-danger">
                <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>  {{ session()->get('error') }}
              </div>
            </div>
          @endif

          <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام تیم:') }} <span class="required">*</span> </label>

              <div class="col-md-6">
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

              <div class="col-md-6">
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

              <div class="col-md-6">
                  <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                  <small> حداکثر حجم مجاز 2MB می باشد </small>
                  <br>
                  <small> لوگو تیم باید در سایز 256x256 باشد. </small>
                  @error('logo')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="form-group row">
              <label for="players_id" class="col-md-4 col-form-label text-md-right">{{ __('بازیکنان تیم:') }} <span class="required">*</span></label>

              <div class="col-md-6">

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

              <div class="col-md-6">

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

              <div class="col-md-6">

                <select class="form-control @error('game_id') is-invalid @enderror" id="game_id" name="game_id">
                  <option></option>

                  @foreach ($games as $v)
                  <option value="{{$v->id}}">{{$v->name}}</option>
                  @endforeach
                </select>
                <small> شما باید برای هر بازی , یک تیم جدا ایجاد کنید. </small>
                <br>
                <small> انتخاب بازیکن تکراری برای بازی های مختلف مجاز است. </small>
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
                  <button type="submit" class="btn btn-lg btn-red">
                      {{ __('ایجاد تیم') }}
                  </button>
              </div>
          </div>
      </form>
    </div>
  </div>
</div>

@endsection
