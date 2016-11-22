@extends('frontend.layouts.homepage')

@section('content')
    <div class="alert alert-dismissible alert-cookies" role="alert">
        <div class="col-md-8 col-md-offset-2">
            <img class="cookie" src="/img/website/cookie.svg">
            <p><strong>There's cookies in our Picnic basket!</strong> If you continue to use our website,
                we'll assume you're happy with our use of cookies.
                <button type="button" class="cookies-close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true"><img src="/img/website/x.png"></span></button>
            </p>
        </div>
    </div>
    <!----- SCROLL BAR ----->
    <div id="home-scroll" class="home-scroller text-center hidden-sm hidden-xs hidden-md">
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
    @include('frontend.homepage-sections.section-six')
@endsection

@section('after-scripts-end')
@stop