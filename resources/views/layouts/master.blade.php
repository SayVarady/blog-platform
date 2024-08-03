@include('layouts.header')
@include('layouts.navbar')
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    @yield('content')

@extends('layouts.footer')
