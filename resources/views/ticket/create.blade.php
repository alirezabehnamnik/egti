@extends('layouts.profile')

@section('content')

<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card-register">
        <form method="POST" action="{{ route('support_save_create') }}" enctype="multipart/form-data">
            @csrf

            <h4 class="text-center">
              <i class="far fa-plus-square red-icon" aria-hidden="true"></i> ایجاد تیکت پشتیبانی
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
                <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('واحد پشتیبانی:') }} <span class="required">*</span> </label>

                <div class="col-md-7">

                  <select class="form-control @error('department') is-invalid @enderror" name="department">
                    <option value=""> انتخاب کنید </option>
                    <option value="مالی"> مالی </option>
                    <option value="پشتیبانی مسابقات"> پشتیبانی مسابقات </option>
                    <option value="پشتیبانی وبسایت"> پشتیبانی وبسایت </option>
                    <option value="گزارش خطا"> گزارش خطا </option>
                    <option value="مدیریت"> مدیریت </option>
                  </select>

                    @error('department')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="team_id" class="col-md-4 col-form-label text-md-right">{{ __('تیم:') }} </label>

                <div class="col-md-7">

                  <select class="form-control @error('team_id') is-invalid @enderror" id="standin_id" name="team_id">
                    <option></option>
                    @foreach ($teams as $v)
                    <option value="{{$v->id}}">{{$v->name}} ({{$v->tag}})</option>
                    @endforeach
                  </select>

                    @error('team_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="payment_number" class="col-md-4 col-form-label text-md-right">{{ __('شماره سفارش:') }} </label>

                <div class="col-md-7">
                    <input id="payment_number" type="text" class="form-control @error('payment_number') is-invalid @enderror" name="payment_number" value="{{ old('payment_number') }}" autocomplete="payment_number">
                    <small> درصورتی که مشکل شما مربوط به پرداخت می باشد, شماره سفارش خود را در این قسمت وارد کنید. </small>

                    @error('payment_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('عنوان:') }} <span class="required">*</span> </label>

                <div class="col-md-7">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title">

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('توضیحات:') }} <span class="required">*</span> </label>

                <div class="col-md-7">
                    <textarea name="description" id="editor" class="form-control @error('description') is-invalid @enderror" aria-label="With textarea" rows="5"> {{ old('description') }} </textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="attachment" class="col-md-4 col-form-label text-md-right">{{ __('تصویر پیوست:') }} </label>

                <div class="col-md-7">
                    <input id="attachment" type="file" class="form-control @error('attachment') is-invalid @enderror" name="attachment[]" multiple>
                    <small> درصورت نیاز مدارک خود را برای ما ارسال کنید </small>
                    <br>
                    <small> حداکثر حجم مجاز 2MB می باشد </small>
                    <br>
                    <small> فرمت های مجاز: png,jpeg,jpg,zip,rar </small>
                    @error('attachment')
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
                        {{ __('ایجاد تیکت') }}
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
