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
@include('frontend.includes.cookie')
@include('includes.partials.logged-in-as')
@include('frontend.includes.nav')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('includes.partials.messages')
            @yield('content')
        </div>
    </div>
</div>

@include('frontend.includes.footer-cities')
@include('frontend.includes.footer-body')
@include('frontend.includes.footer-copyright')

<!-- Scripts -->
{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
<script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery/jquery-2.1.4.min.js')}}"><\/script>')</script>
{!! Html::script('js/vendor/bootstrap/bootstrap.min.js') !!}

@yield('before-scripts-end')
@yield('after-scripts-end')
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-87467802-1', 'auto');
    ga('send', 'pageview');
</script>
<script>
    $(document).ready(function () {
        if ($(window).width() > 992) {
            $(window).on('scroll', function () {
                var scrollPosY = window.pageYOffset;
                var scrollTrigger = 74;
                if (scrollPosY < 0) {
                    $('#logo').addClass('header-logo-fixed');
                    $('').addClass('');
                } else if (scrollPosY > scrollTrigger) {
                    $('#nav').addClass('navbar-fixed-top');
                    $('#logo').addClass('header-logo-fixed');
                    $('#subscribe').addClass('subscribe-bar-margin');
                } else {
                    $('#nav').removeClass('navbar-fixed-top');
                    $('#logo').removeClass('header-logo-fixed');
                    $('#subscribe').removeClass('subscribe-bar-margin');
                }
            });
        }
    });
</script>
<script>
    $('form').submit(function(){
        $(this).find('button[type=submit]').prop('disabled', true);
    });
</script>

@include('includes.partials.ga')
</body>
</html>