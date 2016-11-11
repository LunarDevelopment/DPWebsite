<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}"/>

    <title>@yield('title', app_name())</title>

    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
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
<body id="app-layout" class="home" style="background: linear-gradient(#7CB8E3, #D8E7F5);">

@include('includes.partials.logged-in-as')
@include('frontend.includes.nav')

@include('includes.partials.messages')
@yield('content')

@include('frontend.includes.footer-body')
@include('frontend.includes.footer-copyright')

<!-- Scripts -->
{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
<script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery/jquery-2.1.4.min.js')}}"><\/script>')</script>
{!! Html::script('js/vendor/bootstrap/bootstrap.min.js') !!}

@yield('before-scripts-end')
{{--{!! Html::script(elixir('js/frontend.js')) !!}--}}
@yield('after-scripts-end')
@include('frontend.scripts.hide-nav')
<script>
    $('body').scrollspy({target: '#main-nav'});
    $(function () {
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

@include('includes.partials.ga')
</body>
</html>