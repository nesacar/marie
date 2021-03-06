<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('seo')
    <link rel="stylesheet" href="{{ url('client/styles/main.css') }}">
    {!! $settings->analytics !!}

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="domain" content="{{ url('/') }}">
</head>
<body>
@include('themes.' . env('APP_THEME') . '.partials.graphics')

<div id="app" class="content">
    @banner(['position' => \App\Position::setBannerByPosition($positions, 'BL')])@endbanner
    @banner(['position' => \App\Position::setBannerByPosition($positions, 'BR')])@endbanner

    @include('themes.' . env('APP_THEME') . '.partials.sidenav')
    @include('themes.' . env('APP_THEME') . '.partials.header')

    @yield('content')
    @banner(['position' => \App\Position::setBannerByPosition($positions, 'MBH3')])@endbanner
</div>
@include('themes.' . env('APP_THEME') . '.partials.footer')
<script async src="//banners.ministudio.rs/www/delivery/asyncjs.php"></script>
<script src="{{ url('client/scripts/main.js') }}"></script>
</body>
</html>