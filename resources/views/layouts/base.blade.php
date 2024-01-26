<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title> {{ $title ?? '' }} | Universitas 17 Agustus 1945 Banyuwangi</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/Logo/Logo-untag.png')}}">
    @include('layouts.partials.style')
    @stack('styles')
</head>
<body>

    <div class="preloader">
        <div class="loader"></div>
    </div>

    @yield('app')

    @include('layouts.partials.script')
    @stack('scripts')
</body>
</html>
