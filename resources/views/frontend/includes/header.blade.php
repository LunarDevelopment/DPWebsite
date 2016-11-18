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

<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>