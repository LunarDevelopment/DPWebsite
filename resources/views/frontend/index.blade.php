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
    <meta name="author" content="@yield('meta_author', 'Digital Picnic')">
@yield('meta')

<!-- Styles -->
{{ Html::style(elixir('css/frontend.css')) }}

<!-- Check if the language is set to RTL, so apply the RTL layouts -->
    @langRTL
    {!! Html::style(elixir('css/rtl.css')) !!}
    @endif

</head>
<body id="app-layout" class="home" style="background:linear-gradient(#7CB8E3,#D8E7F5);">
    @include('frontend.includes.cookie')
    @include('includes.partials.logged-in-as')
    <div id="section-one"></div>
    @include('frontend.includes.nav')
    @include('frontend.includes.cookie')
    {{--<!----- SCROLL BAR ----->--}}
    {{--<div id="home-scroll" class="home-scroller text-center hidden-sm hidden-xs hidden-md">--}}
        {{--<a id="scrollUp"><img id="up-nav" src="/img/website/trans.png"></a>--}}
        {{--<a href="#section-two"><img id="blue-dot" src="/img/website/trans.png"></a>--}}
        {{--<a href="#section-three"><img id="turquoise-dot" src="/img/website/trans.png"></a>--}}
        {{--<a href="#section-four"><img id="pink-dot" src="/img/website/trans.png"></a>--}}
        {{--<a href="#section-five"><img id="yellow-dot" src="/img/website/trans.png"></a>--}}
        {{--<a id="scrollDown"><img id="down-nav" src="/img/website/trans.png"></a>--}}
    {{--</div>--}}
    <!----- HOMEPAGE SECTIONS ----->
    @include('frontend.homepage-sections.section-one')
    <div class="cloud-borders"><img src="/img/website/cloudborders.svg"></div>

    @include('frontend.homepage-sections.section-two')
    <div class="cloud-borders"><img src="/img/website/cloudborders.svg"></div>

    @include('frontend.homepage-sections.section-three')
    <div class="cloud-borders"><img src="/img/website/cloudborders.svg"></div>

    @include('frontend.homepage-sections.section-four')
    <div class="cloud-borders"><img src="/img/website/cloudborders.svg"></div>

    @include('frontend.homepage-sections.section-five')

    @include('frontend.homepage-sections.section-six')
    @include('frontend.includes.footer-body')
    @include('frontend.includes.footer-copyright')
<!-- Scripts -->
{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
<script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery/jquery-2.1.4.min.js')}}"><\/script>')</script>
{!! Html::script('js/vendor/bootstrap/bootstrap.min.js') !!}
<script src="/js/picnic-scroll.js"></script>
@include('includes.partials.ga')
</body>
</html>