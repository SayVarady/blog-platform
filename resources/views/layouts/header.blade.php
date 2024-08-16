<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/main-logo.png') }}" />
    <link rel="icon" href="{{ asset('assets/images/main-logo.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Flame DI - where blogger gather</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/components/vue.js')


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}} ">


    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}} ">

    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}} ">
</head>

<body class="background-default-color">
@include('layouts.navbar')

@yield('header')
