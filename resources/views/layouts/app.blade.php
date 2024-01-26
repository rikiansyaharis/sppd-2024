@extends('layouts.base')

@section('app')

    <div class="main-wrapper">
        
        @include('layouts.partials.header')

        @include('layouts.partials.aside')

        @yield('main')

    </div>

@endsection
