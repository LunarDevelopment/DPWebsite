<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}"/>

    <title>@yield('title', app_name())</title>

    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', 'Digital Picnic')">
    <meta name="author" content="@yield('meta_author', 'Benjamin Jackson')">
@yield('meta')

<!-- Styles -->
@yield('before-styles-end')
{{ Html::style(elixir('css/frontend.css')) }}

<!-- Check if the language is set to RTL, so apply the RTL layouts -->
    @langRTL
    {!! Html::style(elixir('css/rtl.css')) !!}
    @endif

    @yield('after-styles-end')
</head>
<body id="app-layout">
@include('includes.partials.logged-in-as')
@include('frontend.includes.nav')

@include('includes.partials.messages')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
</div>

@include('frontend.includes.footer-cities')
@include('frontend.includes.footer-body')
@include('frontend.includes.footer-copyright')
@include('frontend.includes.footer')