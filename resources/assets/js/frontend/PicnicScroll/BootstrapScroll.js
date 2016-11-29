"use strict";

/**
 * BootstrapScroll
 * @constructor
 */
module.exports = {

    smoothScroll: function () {

        /*
         * Bootstraps ScrollSpy method, see http://getbootstrap.com/javascript/.
         */
        $('body'
        ).scrollspy({target: '#main-nav'});

        /*
         * Applies a smooth transition whenever a link with a leading '#' symbol is clicked to an element with
         * the corresponding ID.
         */
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

    }

};