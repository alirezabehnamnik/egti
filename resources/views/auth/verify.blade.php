@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('تایید ایمیل') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('لینک جدید به ایمیل شما ارسال شد. در صورتی که ایمیلی دریافت نکردید قسمت اسپم ها رو بررسی کنید.') }}
                        </div>
                    @endif

                    {{ __('برای مشاهده این قسمت باید صحت ایمیل خود را تایید کنید. برای اینکار روی لینکی که به ایمیل شما ارسال شده است کلیک کنید.') }}
                    {{ __('اگر ایمیلی دریافت نکردید') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('اینجا') }}</button>
                    </form>
                    کلیک کنید.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
