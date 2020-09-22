<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> 403 - Forbidden </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/404.css') }}" rel="stylesheet">

    <style media="screen">

    </style>

</head>
<body>

      <section class="wrapper">

          <div class="container">

              <div id="scene" class="scene" data-hover-only="false">


                  <div class="circle" data-depth="1.2"></div>

                  <div class="one" data-depth="0.9">
                      <div class="content">
                          <span class="piece"></span>
                          <span class="piece"></span>
                          <span class="piece"></span>
                      </div>
                  </div>

                  <div class="two" data-depth="0.60">
                      <div class="content">
                          <span class="piece"></span>
                          <span class="piece"></span>
                          <span class="piece"></span>
                      </div>
                  </div>

                  <div class="three" data-depth="0.40">
                      <div class="content">
                          <span class="piece"></span>
                          <span class="piece"></span>
                          <span class="piece"></span>
                      </div>
                  </div>

                  <p class="p404" data-depth="0.50">403</p>
                  <p class="p404" data-depth="0.10">403</p>

              </div>

              <div class="text">
                  <article>
                      <p>
                      ): متاسفانه درخواست مورد نظر یافت نشد
                      </p>
                      <a href="{{route('home')}}"> <button>بازگشت به صفحه اصلی</button> </a>
                  </article>
              </div>

          </div>
      </section>
</body>
</html>
