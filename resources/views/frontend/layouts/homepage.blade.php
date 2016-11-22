@include('frontend.includes.header')
<body id="app-layout" class="home" style="background: linear-gradient(#7CB8E3, #D8E7F5);">

@include('includes.partials.logged-in-as')
<div id="section-one"></div>
@include('frontend.includes.nav')

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
<script src="/js/picnic-scroll.js"></script>
<script>
    $('body').scrollspy({target: '#main-nav'});
    $(function () {
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                console.log(this.hash);
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