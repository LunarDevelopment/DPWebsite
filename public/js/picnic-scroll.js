(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

/**
 * AnimateToPosition
 * @constructor
 */

module.exports = {

    iconOneAnimate: function iconOneAnimate(basketPos, iconPos) {
        $('#section-two-icon').css({ 'position': 'fixed', 'top': '30%', 'left': iconPos.left + 180 + 'px', 'z-index': '2990' }).animate({ 'left': '50%', 'top': basketPos + 'px', 'width': '110px', 'margin-left': '-152' }, 1000);
    },
    iconTwoAnimate: function iconTwoAnimate(basketPos, iconPos) {
        $('#section-three-icon').css({ 'position': 'fixed', 'top': '30%', 'left': iconPos.left + 180 + 'px', 'z-index': '2991' }).animate({ 'left': '50%', 'top': basketPos + 'px', 'height': '110px', 'margin-left': '-120px' }, 1000);
    },
    iconThreeAnimate: function iconThreeAnimate(basketPos, iconPos) {
        $('#section-four-icon').css({ 'position': 'fixed', 'top': '30%', 'left': iconPos.left + 180 + 'px', 'z-index': '2992' }).animate({ 'left': '50%', 'top': basketPos + 'px', 'width': '110px', 'margin-left': '-10px' }, 1000);
    },
    iconFourAnimate: function iconFourAnimate(basketPos, iconPos) {
        $('#section-five-icon').css({ 'position': 'fixed', 'top': '30%', 'left': iconPos.left + 180 + 'px', 'z-index': '2990' }).animate({ 'left': '50%', 'top': basketPos + 'px', 'width': '110px', 'margin-left': '42px' }, 1000);
    },

    finalePosition: function finalePosition(finaleBasketPosition) {
        //finaleBasketPosition minus 220 is height of basket
        //and 220(height of basket) + 70 is Get Started button
        $('#picnic-basket').css({ 'position': 'absolute', 'top': finaleBasketPosition - 220 + 70 + 'px', 'left': '50%' + 'px', 'margin-left': '-160px' });

        $('#section-two-icon').addClass('hidden');
        $('#section-three-icon').addClass('hidden');
        $('#section-four-icon').addClass('hidden');
        $('#section-five-icon').addClass('hidden');

        $('.about-img-icon').animate({ 'opacity': '1' }, 1000);

        $('#section-two-icon-hidden').removeClass('hidden');
        $('#section-three-icon-hidden').removeClass('hidden');
        $('#section-four-icon-hidden').removeClass('hidden');
        $('#section-five-icon-hidden').removeClass('hidden');
    }

};

},{}],2:[function(require,module,exports){
'use strict';

/**
 * The script is only to run on devices greater than or equal to 992px.
 * To do this I check whether a class has changed to its media query value for devices under 992px.
 * If the media query value has changed the code will not run.
 */

var AnimateToPosition = require('./PicnicScroll/AnimateToPosition');

var runCode = false;

$(document).ready(function () {
    if ($(window).width() >= 1200) {
        /**
         * Set variables to be used in logic below.
         */
        var windowHeight;
        var halfWindowHeight;
        var quarterWindowHeight;
        var windowWidth;
        var siteNavHeight;
        var itemBasketOne = true;
        var itemBasketTwo = true;
        var itemBasketThree = true;
        var itemBasketFour = true;
        var finalePosition = true;
        var scrollFlag = 0;
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
        windowWidth = $(window).width();
        basketPos = halfWindowHeight + quarterWindowHeight - basketItemHeight / 4;
        siteNavHeight = $('#main-nav').height();
        // $('#picnic-basket').css({'left': '50%', 'margin-left': '-160px', 'top': basketPos + 'px'});
        $('.about-img-icon').css({ 'opacity': '0' });
        //Get Header 1 text from top
        basketTrigger = $('#headerOneText').offset();

        /**
         * Scroll listener
         */
        $(window).scroll(function () {
            if (scrollFlag === 0) {
                /*
                 * Get Scroll Position INT.
                 */
                var scroll = $(window).scrollTop();

                /**
                 * Set animation point for finale transition.
                 * @type {jQuery}
                 */
                var finalTrigger = $('#final-trigger').offset();

                //Work out fixed position
                var basketBeforeAnimation = $('#picnic-basket').offset().top - $('window').scrollTop();

                //Get started buttons position from Top
                finaleBasketPosition = $('#get-started').offset();

                /*
                 * Scroll down Animations triggers
                 */
                if (scroll > basketTrigger.top && picnicAnimated) {
                    $('#picnic-basket').css({
                        'position': 'fixed',
                        'top': basketBeforeAnimation,
                        'left': '50%',
                        'margin-left': '-160px',
                        'z-index': '3000'
                    }).animate({ 'top': basketPos + 'px' });
                    picnicAnimated = false;
                }

                if (scroll > animationOne.top && itemBasketOne) {
                    var iconPosition = $('#section-two-icon').offset();
                    AnimateToPosition.iconOneAnimate(basketPos, iconPosition);
                    itemBasketOne = false;
                } else if (scroll > animationTwo.top && itemBasketTwo) {
                    var iconPosition = $('#section-three-icon').offset();
                    AnimateToPosition.iconTwoAnimate(basketPos, iconPosition);
                    itemBasketTwo = false;
                } else if (scroll > animationThree.top && itemBasketThree) {
                    var iconPosition = $('#section-four-icon').offset();
                    AnimateToPosition.iconThreeAnimate(basketPos, iconPosition);
                    itemBasketThree = false;
                } else if (scroll > animationFour.top && itemBasketFour) {
                    var iconPosition = $('#section-five-icon').offset();
                    AnimateToPosition.iconFourAnimate(basketPos, iconPosition);
                    itemBasketFour = false;
                } else if (scroll > finalTrigger.top - 10 && finalePosition) {
                    AnimateToPosition.finalePosition(finaleBasketPosition.top);
                    finalePosition = false;
                }
            }
        });
    }
});

},{"./PicnicScroll/AnimateToPosition":1}]},{},[2]);

//# sourceMappingURL=picnic-scroll.js.map
