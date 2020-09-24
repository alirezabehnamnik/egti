@extends('layouts.app')

@section('content')
<!-- Test 2 -->

        <div class="flex-center position-ref full-height">

            <div class="content">

              <div class="container-fluid mmt-1">
                <!-- Main Slider Section Start -->
                <div class="row">
                  <div class="col-md-12 nopadding">
                    @php
                    $slider = json_decode($setting->slider);
                    @endphp
                    <div id="carouselSlider" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        @for ($i = 0; $i < count($slider); $i++ )
                        <li data-target="#carouselSlider" data-slide-to="{{$i}}"></li>
                        @endfor
                      </ol>
                      <div class="carousel-inner">
                        @for ($j = 0; $j < count($slider); $j++)
                          <div class="carousel-item {{$j == 0 ? 'active' : ''}}">
                            <img class="d-block w-100" src="/images/slider/{{$slider[$j]->image}}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>{{$slider[$j]->title}}</h5>
                              <p>{{$slider[$j]->text}}</p>
                            </div>
                          </div>
                        @endfor
                      </div>
                      <a class="carousel-control-prev" href="#carouselSlider" role="button" data-slide="prev">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselSlider" role="button" data-slide="next">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- Main Slider Section End -->

                <br>
                <br>

              </div>

              <div class="container">

                <!-- Games list Section Start -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="m-title">
                      <div class="row">
                        <div class="col-md-3"> <span> بازی ها </span> </div>
                        <a class="show-more text-center" href="{{route('games')}}">
                          نمایش همه بازی ها
                        </a>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  @foreach ($games_list as $item)
                  <a href="{{route('game', ['id' => $item->id])}}">
                    <div class="col-md-4 game-item text-center">
                      <div class="game-image">
                        <img src="/images/games/{{$item->image}}" width="350" alt="">
                        <div class="game-text">
                          <span class="game-name"> {{$item->name}} </span>
                          @php
                          $decode = $item->platforms;
                          @endphp
                          <span class="game-platforms">
                            @if(in_array("1", $decode))
                            <i class="fas fa-desktop ml-1" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="PC"></i>
                            @endif

                            @if(in_array("2", $decode))
                            <i class="fab fa-playstation ml-1" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="PlayStation 4"></i>
                            @endif

                            @if(in_array("3", $decode))
                            <i class="fab fa-xbox ml-1" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Xbox One"></i>
                            @endif
                          </span>
                        </div>
                      </div>
                    </div>
                  </a>
                  @endforeach
                </div>
                <!-- Games list Section End -->

                <br>
                <br>
                <br>

                <!-- Tournaments list Section Start -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="m-title">
                      <div class="row">
                        <div class="col-md-3"> <span> مسابقات جدید </span> </div>
                        <a class="show-more text-center" href="{{route('tournaments')}}">
                          نمایش همه مسابقات
                        </a>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  @if ($tournaments)
                    @foreach ($tournaments as $item)
                    <div class="col-md-4 tournament-item text-center">

                      <div class="tournament-details">
                        <div class="tournament-image">
                          <img src="/images/tournaments/{{$item->image}}" width="124" alt="{{$item->tag}}">
                          <br>
                          {{$item->g_name}}
                        </div>
                        <li>
                          نام مسابقه:
                          <span class="tournament-text"> {{$item->name}} </span>
                        </li>

                        <li>
                          تاریخ شروع:
                          <span class="tournament-text"> {{jdate($item->start_date)->format('Y-m-d')}} </span>
                        </li>

                        <li>
                          تاریخ پایان:
                          <span class="tournament-text"> {{jdate($item->end_date)->format('Y-m-d')}} </span>
                        </li>

                        <li>
                          تعداد تیم های شرکت کننده:
                          <span class="tournament-text"> {{$item->teams_count}} </span>
                        </li>

                        <li>
                          ظرفیت تیم:
                          <span class="tournament-text"> {{$item->max_teams}} </span>
                        </li>

                        <li>
                          @php
                          $price = number_format($item->entry_price);
                          @endphp
                          هزینه ورود:
                          @if (!$item->entry_price)
                          <span class="tournament-text"> رایگان </span>
                          @else
                          <span class="tournament-text"> {{$price}} تومان </span>
                          @endif
                        </li>

                        <li>
                          <i class="far fa-star gold" aria-hidden="true"></i> مبلغ کل جایزه:
                          @php
                          $prize_pool = number_format($item->prize_pool);
                          @endphp
                          <span class="tournament-text"> {{$prize_pool}} تومان </span>
                        </li>

                        <li>
                          <i class="fas fa-trophy gold" aria-hidden="true"></i>
                          جایزه تیم اول:
                          @php
                          $fprize = number_format($item->fplace_reward);
                          @endphp
                          <span class="tournament-text"> {{$fprize}} تومان </span>
                        </li>

                        <li>
                          <i class="fas fa-trophy silver" aria-hidden="true"></i>
                          جایزه تیم دوم:
                          @php
                          $sprize = number_format($item->splace_reward);
                          @endphp
                          <span class="tournament-text"> {{$sprize}} تومان </span>
                        </li>

                        <li>
                          <i class="fas fa-trophy bronze" aria-hidden="true"></i>
                          جایزه تیم سوم:
                          @php
                          $tprize = number_format($item->tplace_reward);
                          @endphp
                          <span class="tournament-text"> {{$tprize}} تومان </span>
                        </li>

                        @if ($item->foplace_reward)
                        <li>
                          <i class="fas fa-trophy bronze" aria-hidden="true"></i>
                          جایزه تیم چهارم:
                          @php
                          $foprize = number_format($item->foplace_reward);
                          @endphp
                          <span class="tournament-text"> {{$foprize}} تومان </span>
                        </li>
                        @endif

                        @if ($item->fiplace_reward)
                        <li>
                          <i class="fas fa-trophy bronze" aria-hidden="true"></i>
                          جایزه تیم پنجم:
                          @php
                          $fiprize = number_format($item->fiplace_reward);
                          @endphp
                          <span class="tournament-text"> {{$fiprize}} تومان </span>
                        </li>
                        @endif

                        @if ($item->enabled == 1)
                          <a href="{{route('show_tr_register', ['id' => $item->id])}}" target="_blank" class="tr-register">
                            ثبت نام
                          </a>
                        @elseif ($item->enabled == 2)
                          <a class="tr-register disabled-register" data-toggle="tooltip" data-placement="top" title="مهلت ثبت نام در این مسابقه به پایان رسیده است">
                            ثبت نام
                          </a>
                        @elseif ($item->enabled == -1)
                        <a href="{{route('tournament_results', ['id' => $item->id])}}" target="_blank" class="tr-result">
                          نمایش نتایج
                        </a>
                        @endif
                      </div>
                    </div>
                    @endforeach
                  @endif
                </div>
                <!-- Tournaments list section End -->

                <br>
                <br>
                <br>

                @if ($setting->showSponsers == 1)
                <!-- Sponsers Slider Section Start -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="m-title">
                      <div class="row">
                        <div class="col-md-3"> <span> اسپانسر ها </span> </div>
                      </div>
                    </div>
                    <hr>
                  </div>
                  <div class="owl-carousel owl-sponsers owl-theme">
                    @foreach ($sponsers as $item)
                    <div class="item">
                      @if ($item->url)
                      <a href="{{$item->url}}" target="_blank">
                        <img src="/images/sponsers/{{$item->image}}.png" data-toggle="tooltip" data-placement="top" title="{{$item->name}}"/>
                      </a>
                      @else
                      <img src="/images/sponsers/{{$item->image}}.png" data-toggle="tooltip" data-placement="top" title="{{$item->name}}"/>
                      @endif
                    </div>
                    @endforeach
                  </div>
                </div>
                <!-- Sponsers Slider Section End -->
                @endif

                @if ($setting->showPartners == 1)
                <br>
                <br>

                <!-- Supporters Slider Section Start -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="m-title">
                      <div class="row">
                        <div class="col-md-3"> <span> همکاران </span> </div>
                      </div>
                    </div>
                    <hr>
                  </div>
                  <div class="owl-carousel owl-partners owl-theme">
                    @foreach ($partners as $item)
                    <div class="item">
                      @if ($item->url)
                      <a href="{{$item->url}}" target="_blank">
                        <img src="/images/sponsers/{{$item->image}}.png" data-toggle="tooltip" data-placement="top" title="{{$item->name}}"/>
                      </a>
                      @else
                      <img src="/images/sponsers/{{$item->image}}.png" data-toggle="tooltip" data-placement="top" title="{{$item->name}}"/>
                      @endif
                    </div>
                    @endforeach
                  </div>
                </div>
                <!-- Supporters Slider Section End -->
                @endif

              </div>


            </div>
        </div>

@endsection
