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

        <form method="POST" action="{{ route('save_privacy') }}" enctype="multipart/form-data">
            @csrf
            <h4 class="text-center"> <i class="fas fa-user-shield red-icon" aria-hidden="true"></i> تنظیمات حریم شخصی </h4>
            <br>
            <div class="form-group row">
              <div class="col-md-12">
                <span> کاربران بتوانند استان و شهر شما را مشاهده کنند؟ </span> <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_location" id="privacy_location1" value="1" {{$data->privacy_location == 1 ? 'checked' : ''}} >
                  <label class="form-check-label" for="privacy_location1">بله</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_location" id="privacy_location2" value="0" {{$data->privacy_location == 0 ? 'checked' : ''}}>
                  <label class="form-check-label" for="privacy_location2">خیر</label>
                </div>
                <hr>
              </div>
              <div class="col-md-12">
                <span> کاربران بتوانند ایمیل شما را مشاهده کنند؟ </span> <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_email" id="privacy_email1" value="1" {{$data->privacy_email == 1 ? 'checked' : ''}} >
                  <label class="form-check-label" for="privacy_email1">بله</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_email" id="privacy_email2" value="0" {{$data->privacy_email == 0 ? 'checked' : ''}}>
                  <label class="form-check-label" for="privacy_email2">خیر</label>
                </div>
                <hr>
              </div>
              <div class="col-md-12">
                <span> کاربران بتوانند شماره همراه شما را مشاهده کنند؟ </span> <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_phone" id="privacy_phone1" value="1" {{$data->privacy_phone == 1 ? 'checked' : ''}} >
                  <label class="form-check-label" for="privacy_phone1">بله</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_phone" id="privacy_phone2" value="0" {{$data->privacy_phone == 0 ? 'checked' : ''}}>
                  <label class="form-check-label" for="privacy_phone2">خیر</label>
                </div>
                <hr>
              </div>
              <div class="col-md-12">
                <span>
                  پروفایل شما خصوصی است؟
                  <br>
                  <small> درصورت فعال کردن , فقط دوستان شما می توانند پروفایل شما را مشاهده کنند. </small>
                  <br>
                </span>
                <div class="form-check form-check-inline">
                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_profile" id="privacy_profile1" value="1" {{$data->privacy_profile == 1 ? 'checked' : ''}} >
                  <label class="form-check-label" for="privacy_profile1">بله</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input fix-radio-btn" type="radio" name="privacy_profile" id="privacy_profile2" value="0" {{$data->privacy_profile == 0 ? 'checked' : ''}}>
                  <label class="form-check-label" for="privacy_profile2">خیر</label>
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
