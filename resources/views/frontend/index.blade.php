@extends('frontend.layouts.homepage')

@section('content')
    <img id="picnic-basket" class="home-basket" src="/img/website/basket.svg" alt="Picnic basket">
    <div id="home-scroll" class="home-scroller text-center">
        <a href="#section-up"><img id="up-nav" src="/img/website/trans.png"></a>
        <a href="#section-two"><img id="blue-dot" src="/img/website/trans.png"></a>
        <a href="#section-three"><img id="turquoise-dot" src="/img/website/trans.png"></a>
        <a href="#section-four"><img id="pink-dot" src="/img/website/trans.png"></a>
        <a href="#section-five"><img id="yellow-dot" src="/img/website/trans.png"></a>
        <a href="#section-down"><img id="down-nav" src="/img/website/trans.png"></a>
    </div>
    @include('frontend.homepage-sections.section-one')
    @include('frontend.homepage-sections.section-two')
    @include('frontend.homepage-sections.section-three')
    @include('frontend.homepage-sections.section-four')
    @include('frontend.homepage-sections.section-five')
    @include('frontend.includes.footer-cities')
    @include('frontend.homepage-sections.section-six')
@endsection

@section('after-scripts-end')
    {{--<script src="/js/picnic-scroll.js"></script>--}}
    <!-- NavBar -->
    <script>
        $(window).on('scroll', function() {
            var scrollPosY = window.pageYOffset;
            var scrollTrigger = 74;
            if(scrollPosY > scrollTrigger) {
                $('#nav').addClass('navbar-fixed-top');
                $('#logo').addClass('header-logo-fixed');
            } else {
                $('#nav').removeClass('navbar-fixed-top');
                $('#logo').removeClass('header-logo-fixed');
            }
        });
    </script>
    <!-- Scroll -->
    <script>
    </script>
@stop