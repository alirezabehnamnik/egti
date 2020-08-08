@extends('layouts.app')

@section('content')

<br>
<br>
<div class="container-fluid">
  <div class="row">

    @if ($teams->isEmpty())
    <div class="col-md-6 offset-md-3">
      <div class="alert alert-danger">
        <i class="fas fa-exclamation-triangle" aria-hidden="true"></i> شما تیمی برای بازی {{$data->game->name}} ندارید. ابتدا یک تیم برای این بازی ایجاد کنید.
        <a href="{{route('create_team')}}" class="btn btn-md btn-dorange alert-button">
          ایجاد تیم
        </a>
      </div>
    </div>
    @else
    <div class="col-md-4 offset-md-4">
      <div class="card-register">

        <form method="POST" action="{{ route('tr_register') }}" enctype="multipart/form-data">
            @csrf

            <h5 class="text-center">
              <i class="fas fa-clipboard-list dorange" aria-hidden="true"></i> ثبت نام در مسابقه {{$data->name}} بازی {{$data->game->name}}
            </h5>
            <hr>

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

            <br>


            <div class="form-group row">
                <label for="team_id" class="col-md-4 col-form-label text-md-right">{{ __('تیم شما:') }} <span class="required">*</span> </label>

                <div class="col-md-6">
                  <select class="form-control @error('team_id') is-invalid @enderror" id="team_id" name="team_id">
                    <option></option>
                    @foreach ($teams as $v)
                    <option value="{{$v->id}}">{{$v->tag}}</option>
                    @endforeach
                  </select>

                  @error('team_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                </div>
            </div>

            <input type="hidden" name="tournament_id" value="{{$data->id}}">
            <input type="hidden" name="tournament_name" value="{{$data->name}}">

            <br>
            <div class="form-group row">
                <div class="form-check-inline col-md-12">
                  <label class="form-check-label">
                    <input name="rules" type="checkbox" class="form-check-input" value="1"> <i class="fas fa-gavel" aria-hidden="true"></i>
                    متن
                    <a href="#" target="_blank"> قوانین مسابقات </a>
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

              @if ($data->entry_price)
              <br>
              <div class="form-group row">
                  <div class="col-md-12">
                    <div class="alert alert-info">
                      @php
                      $price = number_format($data->entry_price);
                      @endphp
                      <i class="fas fa-coins" aria-hidden="true"></i>   هزینه ثبت نام در این مسابقه {{$price}} تومان می باشد.
                    </div>
                  </div>
              </div>
              @endif

            <hr>
            <div class="form-group row mb-0">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-lg btn-dorange">
                        {{ __('پرداخت و ثبت نام') }}
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
    @endif
  </div>
</div>

@endsection
