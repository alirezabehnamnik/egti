@extends('layouts.admin')

@section('content')


<div class="container-fluid">

  <div class="row">
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

  </div>

  @php
    $navbar_item = json_decode($data->navbar_item);
    $slider = json_decode($data->slider);
    $network = json_decode($data->social_networks);
    $friends = json_decode($data->friends_footer);
    $link = json_decode($data->link_footer);
    $learning = json_decode($data->learning_footer);
  @endphp
  <div class="row">
    <div class="col-md-12">
      <form method="POST" action="{{ route('admin_settings_update') }}" enctype="multipart/form-data">
          @csrf

          <!-- Start Navbar -->
          <div class="row">
            <div class="col-md-12">
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    تنظیمات ناوبار
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          @for ($i = 0; $i < count($navbar_item); $i++)
            <div class="row">
              <label for="text">متن:</label>
              <div class="col-sm-2">
                <input type="text" name="navtext[{{$i}}]" value="{{$navbar_item[$i]->text}}" class="form-control form-control-sm" id="text">
              </div>
              <label for="link">لینک:</label>
              <div class="col-sm-2">
                <input type="text" name="navlink[{{$i}}]" value="{{$navbar_item[$i]->link}}" class="form-control form-control-sm" id="link">
              </div>
              <label for="icon">آیکون:</label>
              <div class="col-sm-2">
                <input type="text" name="navicon[{{$i}}]" value="{{$navbar_item[$i]->icon}}" class="form-control form-control-sm" id="icon">
              </div>
            </div>
          @endfor
          <div class="row">
            <label for="text">متن:</label>
            <div class="col-sm-2">
              <input type="text" name="navtext[{{count($navbar_item)}}]" class="form-control form-control-sm" id="text">
            </div>
            <label for="link">لینک:</label>
            <div class="col-sm-2">
              <input type="text" name="navlink[{{count($navbar_item)}}]" class="form-control form-control-sm" id="link">
            </div>
            <label for="icon">آیکون:</label>
            <div class="col-sm-2">
              <input type="text" name="navicon[{{count($navbar_item)}}]" class="form-control form-control-sm" id="icon">
            </div>
          </div>
          <!-- End Navbar -->
          <br>
          <!-- Start Slider -->
          <div class="row">
            <div class="col-md-12">
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    تنظیمات اسلایدر
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          @for ($i = 0; $i < count($slider); $i++)
            <div class="row">
              <label for="image">عکس:</label>
              <div class="col-sm-2">
                <input type="text" name="slimage[{{$i}}]" value="{{$slider[$i]->image}}" class="form-control form-control-sm" id="image">
              </div>
              <label for="title">عنوان:</label>
              <div class="col-sm-2">
                <input type="text" name="sltitle[{{$i}}]" value="{{$slider[$i]->title}}" class="form-control form-control-sm" id="title">
              </div>
              <label for="text">متن:</label>
              <div class="col-sm-2">
                <input type="text" name="sltext[{{$i}}]" value="{{$slider[$i]->text}}" class="form-control form-control-sm" id="text">
              </div>
            </div>
          @endfor
          <div class="row">
            <label for="image">عکس:</label>
            <div class="col-sm-2">
              <input type="text" name="slimage[{{count($slider)}}]" class="form-control form-control-sm" id="image">
            </div>
            <label for="title">عنوان:</label>
            <div class="col-sm-2">
              <input type="text" name="sltitle[{{count($slider)}}]" class="form-control form-control-sm" id="title">
            </div>
            <label for="text">متن:</label>
            <div class="col-sm-2">
              <input type="text" name="sltext[{{count($slider)}}]" class="form-control form-control-sm" id="text">
            </div>
          </div>
          <!-- End Slider -->
          <br>
          <!-- Start Sponsers -->
          <div class="row">
            <div class="col-md-12">
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    تنظیمات نمایش اسپانسر ها
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="showSponsers" id="sponActive" value="1" {{$data->showSponsers == 1 ? 'checked' : ''}}>
            <label class="form-check-label" for="sponActive"> فعال </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="showSponsers" id="sponDeactive" value="0" {{$data->showSponsers == 0 ? 'checked' : ''}}>
            <label class="form-check-label" for="sponDeactive"> غیر فعال </label>
          </div>
          <!-- End Sponsers -->
          <br>
          <!-- Start Partners -->
          <div class="row">
            <div class="col-md-12">
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    تنظیمات نمایش همکاران
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="showPartners" id="partActive" value="1" {{$data->showPartners == 1 ? 'checked' : ''}}>
            <label class="form-check-label" for="partActive"> فعال </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="showPartners" id="partDeactive" value="0" {{$data->showPartners == 0 ? 'checked' : ''}}>
            <label class="form-check-label" for="partDeactive"> غیر فعال </label>
          </div>
          <!-- End Partners -->
          <br>
          <!-- Start Social Networks -->
          <div class="row">
            <div class="col-md-12">
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    تنظیمات شبکه های اجتماعی
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          @for ($i = 0; $i < count($network); $i++)
            <div class="row">
              <label for="icon">عکس:</label>
              <div class="col-sm-2">
                <input type="text" name="nicon[{{$i}}]" value="{{$network[$i]->icon}}" class="form-control form-control-sm" id="icon">
              </div>
              <label for="title">عنوان:</label>
              <div class="col-sm-2">
                <input type="text" name="ntitle[{{$i}}]" value="{{$network[$i]->title}}" class="form-control form-control-sm" id="title">
              </div>
              <label for="link">لینک:</label>
              <div class="col-sm-2">
                <input type="text" name="nlink[{{$i}}]" value="{{$network[$i]->link}}" class="form-control form-control-sm" id="link">
              </div>
            </div>
          @endfor
          <div class="row">
            <label for="icon">عکس:</label>
            <div class="col-sm-2">
              <input type="text" name="nicon[{{count($network)}}]" class="form-control form-control-sm" id="icon">
            </div>
            <label for="title">عنوان:</label>
            <div class="col-sm-2">
              <input type="text" name="ntitle[{{count($network)}}]" class="form-control form-control-sm" id="title">
            </div>
            <label for="link">لینک:</label>
            <div class="col-sm-2">
              <input type="text" name="nlink[{{count($network)}}]" class="form-control form-control-sm" id="link">
            </div>
          </div>
          <!-- End Social Networks -->
          <br>
          <!-- Star Email  -->
          <div class="row">
            <div class="col-md-12">
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    تنظیمات ایمیل
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          <div class="row">
            <label for="email">ایمیل:</label>
            <div class="col-sm-2">
              <input type="email" name="email" value="{{$data->email}}"  class="form-control form-control-sm" id="email">
            </div>
          </div>
          <!-- End Email -->
          <br>
          <!-- Star About  -->
          <div class="row">
            <div class="col-md-12">
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    تنظیمات درباره ما
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          <div class="row">
            <label for="about">متن:</label>
            <div class="col-sm-6">
              <textarea name="about" class="form-control" aria-label="With textarea"> {{$data->about}} </textarea>
            </div>
          </div>
          <!-- End About -->
          <br>
          <!-- Star Work Time  -->
          <div class="row">
            <div class="col-md-12">
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    تنظیمات ساعات کاری
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          <div class="row">
            <label for="about">متن:</label>
            <div class="col-sm-6">
              <textarea name="work_time" class="form-control" aria-label="With textarea"> {{$data->work_time}} </textarea>
            </div>
          </div>
          <!-- End Work Time -->
          <br>
          <!-- Star Phone  -->
          <div class="row">
            <div class="col-md-12">
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    تنظیمات تلفن تماس
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          <div class="row">
            <label for="phone">شماره:</label>
            <div class="col-sm-6">
              <textarea name="phone" dir="ltr" class="form-control" aria-label="With textarea"> {{$data->phone}} </textarea>
            </div>
          </div>
          <!-- End Phone -->
          <br>
          <!-- Start Friends Footer -->
          <div class="row">
            <div class="col-md-12">
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    تنظیمات لینک های دوستان
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          @for ($i = 0; $i < count($friends); $i++)
            <div class="row">
              <label for="text">متن:</label>
              <div class="col-sm-2">
                <input type="text" name="ftext[{{$i}}]" value="{{$friends[$i]->text}}" class="form-control form-control-sm" id="text">
              </div>
              <label for="link">لینک:</label>
              <div class="col-sm-2">
                <input type="text" name="flink[{{$i}}]" value="{{$friends[$i]->link}}" class="form-control form-control-sm" id="link">
              </div>
            </div>
          @endfor
          <div class="row">
            <label for="text">متن:</label>
            <div class="col-sm-2">
              <input type="text" name="ftext[{{count($friends)}}]" class="form-control form-control-sm" id="text">
            </div>
            <label for="link">لینک:</label>
            <div class="col-sm-2">
              <input type="text" name="flink[{{count($friends)}}]" class="form-control form-control-sm" id="link">
            </div>
          </div>
          <!-- End Friends Footer -->
          <br>
          <!-- Start Link Footer -->
          <div class="row">
            <div class="col-md-12">
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    تنظیمات لینک های مفید
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          @for ($i = 0; $i < count($link); $i++)
            <div class="row">
              <label for="text">متن:</label>
              <div class="col-sm-2">
                <input type="text" name="litext[{{$i}}]" value="{{$link[$i]->text}}" class="form-control form-control-sm" id="text">
              </div>
              <label for="link">لینک:</label>
              <div class="col-sm-2">
                <input type="text" name="lilink[{{$i}}]" value="{{$link[$i]->link}}" class="form-control form-control-sm" id="link">
              </div>
            </div>
          @endfor
          <div class="row">
            <label for="text">متن:</label>
            <div class="col-sm-2">
              <input type="text" name="litext[{{count($link)}}]" class="form-control form-control-sm" id="text">
            </div>
            <label for="link">لینک:</label>
            <div class="col-sm-2">
              <input type="text" name="lilink[{{count($link)}}]" class="form-control form-control-sm" id="link">
            </div>
          </div>
          <!-- End Link Footer -->
          <br>
          <!-- Start Learning Footer -->
          <div class="row">
            <div class="col-md-12">
              <div class="m-title">
                <div class="row">
                  <div class="col-md-3">
                    تنظیمات لینک های کاربردی
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          @for ($i = 0; $i < count($learning); $i++)
            <div class="row">
              <label for="text">متن:</label>
              <div class="col-sm-2">
                <input type="text" name="letext[{{$i}}]" value="{{$learning[$i]->text}}" class="form-control form-control-sm" id="text">
              </div>
              <label for="link">لینک:</label>
              <div class="col-sm-2">
                <input type="text" name="lelink[{{$i}}]" value="{{$learning[$i]->link}}" class="form-control form-control-sm" id="link">
              </div>
            </div>
          @endfor
          <div class="row">
            <label for="text">متن:</label>
            <div class="col-sm-2">
              <input type="text" name="letext[{{count($learning)}}]" class="form-control form-control-sm" id="text">
            </div>
            <label for="link">لینک:</label>
            <div class="col-sm-2">
              <input type="text" name="lelink[{{count($learning)}}]" class="form-control form-control-sm" id="link">
            </div>
          </div>
          <!-- End Learning Footer -->

          <div class="form-group row mb-0">
              <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-md btn-dorange" style="position:fixed;bottom: 10px; left: 10px;">
                      {{ __('بروزرسانی') }}
                  </button>
              </div>
          </div>
      </form>
    </div>
  </div>

</div>

@endsection
