@extends('layouts.admin')

@section('content')

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

        <form method="POST" action="{{ route('admin_tournament_edit_save', ['id' => $data->id]) }}" enctype="multipart/form-data">
            @csrf
            <h4 class="text-center"> <i class="fas fa-user-edit red-icon" aria-hidden="true"></i> ویرایش مسابقه "{{$data->name}}" </h4>
            <hr>
            <br>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام:') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}" autocomplete="name">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="tag" class="col-md-4 col-form-label text-md-right">{{ __('تگ:') }}</label>

                <div class="col-md-6">
                    <input id="tag" type="text" class="form-control @error('tag') is-invalid @enderror" name="tag" value="{{$data->tag}}" autocomplete="tag">

                    @error('tag')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="game_id" class="col-md-4 col-form-label text-md-right">{{ __('بازی:') }} </label>

                <div class="col-md-6">
                  <select class="form-control @error('game_id') is-invalid @enderror" id="game_id_admin" name="game_id">
                    @foreach ($games as $v)
                    <option {{$data->game_id == $v->id ? 'selected' : ''}} value="{{$v->id}}">{{$v->name}}</option>
                    @endforeach
                  </select>
                    @error('game_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('عکس:') }} </label>

                <div class="col-md-6">
                    <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
                    <small> عکس باید در سایز 256x256 باشد. </small>
                    <br>
                    <small> فرمت های مجاز: png </small>
                    @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <img src="/images/tournaments/{{$data->image}}" style="background:#212121;" width="100%" alt="">
                </div>
            </div>

            <div class="form-group row">
                <label for="start_date" class="col-md-4 col-form-label text-md-right">{{ __('تاریخ شروع:') }}</label>

                <div class="col-md-6">
                    <input id="start_date" type="text" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{$data->start_date}}" autocomplete="start_date">

                    @error('start_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('تاریخ پایان:') }}</label>

                <div class="col-md-6">
                    <input id="end_date" type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{$data->end_date}}" autocomplete="end_date">

                    @error('end_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="entry_price" class="col-md-4 col-form-label text-md-right">{{ __('هزینه ورود:') }}</label>

                <div class="col-md-6">
                    <input id="entry_price" type="number" class="form-control @error('entry_price') is-invalid @enderror" name="entry_price" value="{{$data->entry_price}}" autocomplete="entry_price">

                    @error('entry_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="max_teams" class="col-md-4 col-form-label text-md-right">{{ __('حداکثر تیم ها:') }}</label>

                <div class="col-md-6">
                    <input id="max_teams" type="number" class="form-control @error('max_teams') is-invalid @enderror" name="max_teams" value="{{$data->max_teams}}" autocomplete="max_teams">

                    @error('max_teams')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="player_per_team" class="col-md-4 col-form-label text-md-right">{{ __('تعداد بازیکن های هر تیم:') }}</label>

                <div class="col-md-6">
                    <input id="player_per_team" type="number" class="form-control @error('player_per_team') is-invalid @enderror" name="player_per_team" value="{{$data->player_per_team}}" autocomplete="player_per_team">

                    @error('player_per_team')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="prize_pool" class="col-md-4 col-form-label text-md-right">{{ __('مبلغ کل جایزه:') }}</label>

                <div class="col-md-6">
                    <input id="prize_pool" type="number" class="form-control @error('prize_pool') is-invalid @enderror" name="prize_pool" value="{{$data->prize_pool}}" autocomplete="prize_pool">

                    @error('prize_pool')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="fplace_reward" class="col-md-4 col-form-label text-md-right">{{ __('مبلغ جایزه تیم اول:') }}</label>

                <div class="col-md-6">
                    <input id="fplace_reward" type="number" class="form-control @error('fplace_reward') is-invalid @enderror" name="fplace_reward" value="{{$data->fplace_reward}}" autocomplete="fplace_reward">

                    @error('fplace_reward')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="splace_reward" class="col-md-4 col-form-label text-md-right">{{ __('مبلغ جایزه تیم دوم:') }}</label>

                <div class="col-md-6">
                    <input id="splace_reward" type="number" class="form-control @error('splace_reward') is-invalid @enderror" name="splace_reward" value="{{$data->splace_reward}}" autocomplete="splace_reward">

                    @error('splace_reward')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="tplace_reward" class="col-md-4 col-form-label text-md-right">{{ __('مبلغ جایزه تیم سوم:') }}</label>

                <div class="col-md-6">
                    <input id="tplace_reward" type="number" class="form-control @error('tplace_reward') is-invalid @enderror" name="tplace_reward" value="{{$data->tplace_reward}}" autocomplete="tplace_reward">

                    @error('tplace_reward')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="foplace_reward" class="col-md-4 col-form-label text-md-right">{{ __('مبلغ جایزه تیم چهارم:') }}</label>

                <div class="col-md-6">
                    <input id="foplace_reward" type="number" class="form-control @error('foplace_reward') is-invalid @enderror" name="foplace_reward" value="{{$data->foplace_reward}}" autocomplete="foplace_reward">

                    @error('foplace_reward')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="fiplace_reward" class="col-md-4 col-form-label text-md-right">{{ __('مبلغ جایزه تیم پنجم:') }}</label>

                <div class="col-md-6">
                    <input id="fiplace_reward" type="number" class="form-control @error('fiplace_reward') is-invalid @enderror" name="fiplace_reward" value="{{$data->fiplace_reward}}" autocomplete="fiplace_reward">

                    @error('fiplace_reward')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <hr>



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
