<!-- Scripts -->
{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
<script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery/jquery-2.1.4.min.js')}}"><\/script>')</script>
{!! Html::script('js/vendor/bootstrap/bootstrap.min.js') !!}

@yield('before-scripts-end')

@yield('after-scripts-end')
<script>
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
</script>

@include('includes.partials.ga')
</body>
</html>