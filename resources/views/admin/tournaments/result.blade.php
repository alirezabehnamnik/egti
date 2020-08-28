@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @if(session()->has('message'))
        <div class="col-md-12">
          <div class="alert alert-success">
              <i class="far fa-check-circle" aria-hidden="true"></i> {{ session()->get('message') }}
          </div>
        </div>
        @endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-header red-bar"> <i class="fas fa-user-plus" aria-hidden="true"></i> {{ __('افزودن نتیجه برای مسابقه') }}</div>

                <div class="card-body shadow">
                    <form method="POST" action="{{ route('admin_tournament_result_add') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="tournaments_id" class="col-md-4 col-form-label text-md-right">{{ __('مسابقه:') }} </label>

                            <div class="col-md-6">
                              <select class="form-control mb-2 mr-sm-2" id="tournaments_id" name="tournaments_id">
                                <option></option>
                                @foreach ($tournaments as $v)
                                <option value="{{$v->id}}">{{$v->name}} - {{$v->tag}}</option>
                                @endforeach
                              </select>

                                @error('reason')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fplace_id" class="col-md-4 col-form-label text-md-right">{{ __('تیم اول:') }} </label>

                            <div class="col-md-6">
                              <select class="form-control mb-2 mr-sm-2" id="fplace_id" name="fplace_id">
                                <option></option>
                                @foreach ($teams as $v)
                                <option value="{{$v->id}}">{{$v->name}} - {{$v->tag}}</option>
                                @endforeach
                              </select>

                                @error('reason')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="splace_id" class="col-md-4 col-form-label text-md-right">{{ __('تیم دوم:') }} </label>

                            <div class="col-md-6">
                              <select class="form-control mb-2 mr-sm-2" id="splace_id" name="splace_id">
                                <option></option>
                                @foreach ($teams as $v)
                                <option value="{{$v->id}}">{{$v->name}} - {{$v->tag}}</option>
                                @endforeach
                              </select>

                                @error('reason')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tplace_id" class="col-md-4 col-form-label text-md-right">{{ __('تیم سوم:') }} </label>

                            <div class="col-md-6">
                              <select class="form-control mb-2 mr-sm-2" id="tplace_id" name="tplace_id">
                                <option></option>
                                @foreach ($teams as $v)
                                <option value="{{$v->id}}">{{$v->name}} - {{$v->tag}}</option>
                                @endforeach
                              </select>

                                @error('reason')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foplace_id" class="col-md-4 col-form-label text-md-right">{{ __('تیم چهارم:') }} </label>

                            <div class="col-md-6">
                              <select class="form-control mb-2 mr-sm-2" id="foplace_id" name="foplace_id">
                                <option></option>
                                @foreach ($teams as $v)
                                <option value="{{$v->id}}">{{$v->name}} - {{$v->tag}}</option>
                                @endforeach
                              </select>

                                @error('reason')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fiplace_id" class="col-md-4 col-form-label text-md-right">{{ __('تیم پنجم') }} </label>

                            <div class="col-md-6">
                              <select class="form-control mb-2 mr-sm-2" id="fiplace_id" name="fiplace_id">
                                <option></option>
                                @foreach ($teams as $v)
                                <option value="{{$v->id}}">{{$v->name}} - {{$v->tag}}</option>
                                @endforeach
                              </select>

                                @error('reason')
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
                                    {{ __('ثبت') }}
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
