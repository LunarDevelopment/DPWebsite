<!-- Scripts -->
{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
<script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery/jquery-2.1.4.min.js')}}"><\/script>')</script>
{!! Html::script('js/vendor/bootstrap/bootstrap.min.js') !!}

@yield('before-scripts-end')

@yield('after-scripts-end')
<script>
    $(document).ready(function () {
        if ($(window).width() < 992) {
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
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-87467802-1', 'auto');
    ga('send', 'pageview');

</script>

@include('includes.partials.ga')
</body>
</html>