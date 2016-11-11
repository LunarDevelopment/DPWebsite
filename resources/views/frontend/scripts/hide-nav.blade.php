<script>
    $(window).on('scroll', function() {
        var scrollPosY = window.pageYOffset;
        var scrollTrigger = 74;
        if(scrollPosY < 0 ) {
            $('#logo').addClass('header-logo-fixed');
            $('').addClass('');
        } else if(scrollPosY > scrollTrigger) {
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