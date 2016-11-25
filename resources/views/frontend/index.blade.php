@extends('frontend.layouts.homepage')

@section('content')
    <!----- SCROLL BAR ----->
    <div id="home-scroll" class="home-scroller text-center hidden-sm hidden-xs hidden-md">
        <a id="scrollUp"><img id="up-nav" src="/img/website/trans.png"></a>
        <a href="#section-two"><img id="blue-dot" src="/img/website/trans.png"></a>
        <a href="#section-three"><img id="turquoise-dot" src="/img/website/trans.png"></a>
        <a href="#section-four"><img id="pink-dot" src="/img/website/trans.png"></a>
        <a href="#section-five"><img id="yellow-dot" src="/img/website/trans.png"></a>
        <a id="scrollDown"><img id="down-nav" src="/img/website/trans.png"></a>
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