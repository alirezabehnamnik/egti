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
                <div class="card-header red-bar"> <i class="fas fa-user-plus" aria-hidden="true"></i> {{ __('بن کاربر') }}</div>

                <div class="card-body shadow">
                    <form method="POST" action="{{ route('admin_user_disable_save', ['id' => $id]) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="reason" class="col-md-4 col-form-label text-md-right">{{ __('دلیل:') }} </label>

                            <div class="col-md-6">
                                <input id="reason" type="text" class="form-control @error('reason') is-invalid @enderror" name="reason" value="{{ old('reason') }}" autocomplete="reason">

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
