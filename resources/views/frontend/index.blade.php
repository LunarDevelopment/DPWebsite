@extends('frontend.layouts.homepage')

@section('content')
    <div class="alert alert-dismissible alert-cookies" role="alert">
        <div class="col-md-8 col-md-offset-2">
            <img class="cookie" src="/img/website/Cookie.svg">
            <p><strong>There's cookies in our Picnic basket!</strong> To help us provide a more tailored experience for
                you, our website uses cookies. Take a look at our Privacy & Cookie Policy for
                more info. It's a bit boring mind, why not meet our team instead? If you continue to use our website,
                we'll assume you're happy with our use of cookies.
                <button type="button" class="cookies-close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true"><img src="/img/website/x.png"></span></button>
            </p>
        </div>
    </div>
    <!----- PICNIC BASKET ----->
    <img id="picnic-basket" class="home-basket hidden-sm hidden-xs" src="/img/website/basket.svg" alt="Picnic basket">
    <!----- SCROLL BAR ----->
    <div id="home-scroll" class="home-scroller text-center hidden-sm hidden-xs">
        <a href="#section-one"><img id="up-nav" src="/img/website/trans.png"></a>
        <a href="#section-two"><img id="blue-dot" src="/img/website/trans.png"></a>
        <a href="#section-three"><img id="turquoise-dot" src="/img/website/trans.png"></a>
        <a href="#section-four"><img id="pink-dot" src="/img/website/trans.png"></a>
        <a href="#section-five"><img id="yellow-dot" src="/img/website/trans.png"></a>
        <a href="#section-six"><img id="down-nav" src="/img/website/trans.png"></a>
    </div>
    <!----- HOMEPAGE SECTIONS ----->
    @include('frontend.homepage-sections.section-one')
    <div style="height:0;top:10px;position:relative;top:200px;"><img src="/img/website/cloudborders.svg"></div>
    @include('frontend.homepage-sections.section-two')
    <div style="height:0;top:10px;position:relative;top:200px;"><img src="/img/website/cloudborders.svg"></div>
    @include('frontend.homepage-sections.section-three')
    <div style="height:0;top:10px;position:relative;top:200px;"><img src="/img/website/cloudborders.svg"></div>
    @include('frontend.homepage-sections.section-four')
    <div style="height:0;top:10px;position:relative;top:200px;"><img src="/img/website/cloudborders.svg"></div>
    @include('frontend.homepage-sections.section-five')
    @include('frontend.includes.footer-cities')
    <div id="section-six" style=" position: relative; bottom: 150px;"></div>
    @include('frontend.homepage-sections.section-six')
@endsection

@section('after-scripts-end')
    {{--<script src="/js/picnic-scroll.js"></script>--}}
    <!-- NavBar -->
    <script>
        $(window).on('scroll', function () {
            var scrollPosY = window.pageYOffset;
            var scrollTrigger = 74;
            if (scrollPosY > scrollTrigger) {
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