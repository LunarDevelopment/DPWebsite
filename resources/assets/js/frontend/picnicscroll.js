"use strict";

var AnimateToPosition = require('./PicnicScroll/AnimateToPosition');
var BootstrapScroll = require('./PicnicScroll/BootstrapScroll');

$(document).ready(function () {


    if ($(window).width() >= 1200) {


        /*
         * Call BootstrapScroll.smoothScroll method.
         */
        BootstrapScroll.smoothScroll();

        /*
         * Set variables to be used in logic below.
         */
        var windowHeight;
        var halfWindowHeight;
        var quarterWindowHeight;
        var itemBasketOne = true;
        var itemBasketTwo = true;
        var itemBasketThree = true;
        var itemBasketFour = true;
        var finalePosition = true;
        var basketItemHeight = 220;
        var basketPos;
        var basketTrigger;
        var picnicAnimated = true;
        var animationOne = $('#section-two').offset();
        var animationTwo = $('#section-three').offset();
        var animationThree = $('#section-four').offset();
        var animationFour = $('#section-five').offset();
        var finaleBasketPosition;

        /**
         * Document Ready
         */
        windowHeight = $(window).height();
        halfWindowHeight = windowHeight / 2;
        quarterWindowHeight = windowHeight / 4;
        basketPos = halfWindowHeight + quarterWindowHeight - (basketItemHeight / 4);
        $('.about-img-icon').css({'opacity': '0'});
        //Get Header 1 text from top
        basketTrigger = $('#headerOneText').offset();

        $('#picnic-basket').css({
            'position': 'fixed',
            'top': basketPos + 'px',
            'left': '50%',
            'margin-left': '-160px',
            'z-index': '3000',
            'opacity': '0'
        });

        /**
         * Scroll listener
         */
        $(window).scroll(function () {
            /*
             * Get Scroll Position INT.
             */
            var scroll = $(window).scrollTop();

            /*
             * Set Basket position to Fixed.
             */
            // var basketBeforeAnimation = $('window').scrollTop() - $('#picnic-basket').offset().top; //Get fixed position of Basket
            if (picnicAnimated) {
                $('#picnic-basket').animate({'opacity': '1'}, 2000);
                picnicAnimated = false;
            }

            /*
             * Each animation will only occur once. Each if/else if/else statement specifies when the animation will
             * occur.
             */
            var finalTrigger = $('#final-trigger').offset(); //Set animation point for finale transition.
            finaleBasketPosition = $('#get-started').offset(); //Get started buttons position from Top
            if (scroll >= animationOne.top && itemBasketOne) {
                var iconPosition = $('#section-two-icon').offset();
                AnimateToPosition.iconOneAnimate(basketPos, iconPosition);
                itemBasketOne = false;
            } else if (scroll >= animationTwo.top && itemBasketTwo) {
                var iconPosition = $('#section-three-icon').offset();
                AnimateToPosition.iconTwoAnimate(basketPos, iconPosition);
                itemBasketTwo = false;
            } else if (scroll >= animationThree.top && itemBasketThree) {
                var iconPosition = $('#section-four-icon').offset();
                AnimateToPosition.iconThreeAnimate(basketPos, iconPosition);
                itemBasketThree = false;
            } else if (scroll >= animationFour.top && itemBasketFour) {
                var iconPosition = $('#section-five-icon').offset();
                AnimateToPosition.iconFourAnimate(basketPos, iconPosition);
                itemBasketFour = false;
            } else if (scroll >= (finalTrigger.top) && finalePosition) {
                AnimateToPosition.finalePosition(finaleBasketPosition.top);
                finalePosition = false;
            }
        });


    }


});
