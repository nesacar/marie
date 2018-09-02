<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Marie Claire</title>
  <link rel="stylesheet" href="{{ url('client/styles/main.css') }}">
  {!! $settings->analytics !!}
</head>
<body>
  @include('themes.' . env('APP_THEME') . '.partials.graphics')

  <div id="app" class="content">
    @include('themes.' . env('APP_THEME') . '.partials.sidenav')
    @include('themes.' . env('APP_THEME') . '.partials.beautybox.header')

    @yield('content')
  </div>
  @include('themes.' . env('APP_THEME') . '.partials.footer')
  <script async src="//banners.ministudio.rs/www/delivery/asyncjs.php"></script>
  <script src="{{ url('client/scripts/main.js') }}"></script>
</body>
</html>