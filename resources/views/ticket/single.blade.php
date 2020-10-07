
@extends('layouts.profile')

@section('content')

<br>


<div class="container-fluid">
  <div class="row">
    <div class="col-10 offset-1">
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

      <div class="card-register">
        <h4 class="text-center">
          <i class="fas fa-info-circle red-icon" aria-hidden="true"></i> مشاهده تیکت #{{$data->id}}
        </h4>
        <hr>
        <div class="row">
          <div class="col-6">
            <span> عنوان: {{$data->title}} </span>
          </div>
          <div class="col-6">
            <span> بخش: {{$data->department}} </span>
          </div>
        </div>
        @if ($data->team_id && $data->payment_number)
          <br>
          <div class="row">
            @if ($data->team_id)
              <div class="col-6">
                <span> تیم: {{$data->team->name}} [{{$data->team->tag}}] </span>
              </div>
            @endif
            @if ($data->payment_number)
              <div class="col-6">
                <span> شماره سفارش: {{$data->payment_number}} </span>
              </div>
            @endif
          </div>
        @endif
        <hr>
        <div class="row">
          <div class="col-12">
            متن تیکت شما:
            <br>
            <br>
            {!! $data->description !!}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-6">
            فایل پیوست:
            @if ($data->attachment)
              @foreach ($data->attachment as $v => $k)
                <a href="/images/attachments/{{$k}}" target="_blank">
                  <i class="fas fa-file-image" aria-hidden="true"></i> فایل پیوست {{$v+1}}
                </a>
                &nbsp;
              @endforeach
            @else
              -
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-10 offset-1">
      <p>
        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#newComment" aria-expanded="false" aria-controls="newComment">
          ارسال پاسخ به تیکت
        </button>
      </p>
      <div class="collapse" id="newComment">
        <div class="card card-body">
          <form method="POST" action="{{ route('support_new_comment', ['id' => $data->id]) }}" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                  <label for="message" class="col-md-2 col-form-label text-md-right">{{ __('پیام:') }} </label>

                  <div class="col-md-10">
                      <textarea name="message" id="editor" class="form-control @error('message') is-invalid @enderror" aria-label="With textarea" rows="5"> {{ old('message') }} </textarea>

                      @error('message')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="attachment" class="col-md-2 col-form-label text-md-right">{{ __('تصویر پیوست:') }} </label>

                  <div class="col-md-10">
                      <input id="attachment" type="file" class="form-control @error('attachment') is-invalid @enderror" name="attachment[]" multiple>
                      <small> درصورت نیاز مدارک خود را برای ما ارسال کنید </small>
                      <br>
                      <small> حداکثر حجم مجاز 2MB می باشد </small>
                      <br>
                      <small> فرمت های مجاز: png,jpeg,jpg </small>
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
                          {{ __('ارسال پاسخ') }}
                      </button>
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  @if (!$comments->isEmpty())

        <?php $counter = 1; ?>
        @foreach ($comments as $v)
          <div class="row">
            <div class="col-10 offset-1">
              <div class="comment-header">
                #{{$counter++}}
                پاسخ
                @if ($v->is_admin == 1)
                <span class="btn btn-sm btn-dorange"> مدیریت </span>
                @else
                <span class="btn btn-sm btn-info"> شما </span>
                @endif
                <div style="float:left;direction:ltr;">
                  {{jdate($v->created_at)->format('Y/m/d H:i:s')}}
                </div>
              </div>
              <div class="comment-message">
                {!! $v->message !!}
              </div>
              <div class="comment-attachment">
                فایل پیوست:
                @if ($v->attachment)
                  @foreach ($v->attachment as $v => $k)
                    <a href="/images/attachments/{{$k}}" target="_blank">
                      <i class="fas fa-file-image" aria-hidden="true"></i> فایل پیوست {{$v+1}}
                    </a>
                    &nbsp;
                  @endforeach
                @else
                  -
                @endif
              </div>
            </div>
          </div>

          <br>
        @endforeach

  @endif

</div>

@endsection
