@extends('layouts.master')

@section('styles')
    <style type="text/css">
        html {
            background: url(/img/slider-1.jpg) no-repeat top center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
@endsection

@section('body')
    <div class="container">
        @include('layouts.header')

        <div class="pb-50">
            @yield('content')
        </div>
    </div>
@stop
