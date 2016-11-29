<script>
    $(document).ready(function () {
        if ($(window).width() > 992) {
            var logoHeight = $('#logo').height();
            $(window).on('scroll', function () {
                var scrollPosY = window.pageYOffset;
                var scrollTrigger = 74;
                if (scrollPosY < 0) {
                    $('#logo').addClass('header-logo-fixed');
                } else if (scrollPosY < scrollTrigger) {
                    var newHeight = logoHeight - scrollPosY;
                    $('#logo-img').css({height: newHeight + 'px'});
                    $('#nav').removeClass('navbar-fixed-top');
                    $('#logo').removeClass('header-logo-fixed');
                    $('#subscribe').removeClass('subscribe-bar-margin');
                } else if (scrollPosY > scrollTrigger) {
                    $('#logo-img').css({height: '74px'});
                    $('#nav').addClass('navbar-fixed-top');
                    $('#logo').addClass('header-logo-fixed');
                    $('#subscribe').addClass('subscribe-bar-margin');
                }
            });
        }
    });
</script>