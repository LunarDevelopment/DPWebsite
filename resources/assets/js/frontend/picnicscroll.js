var AnimateToPosition = require('./PicnicScroll/AnimateToPosition');
var ReAnimateToPosition = require('./PicnicScroll/ReAnimateToPosition');
var StartPosition = require('./PicnicScroll/StartPosition');
var FixToPosition = require('./PicnicScroll/FixToPosition');
var FinaleAnimate = require('./PicnicScroll/FinaleAnimate');
var windowHeight;
var halfWindowHeight;
var windowWidth;
var halfWindowWidth;
var quarterWindowWidth;
var basketItemHeight;
var basketItemWidth;
var siteNavHeight;
var itemBasketOne = true;
var itemBasketTwo = true;
var itemBasketThree = true;
var itemBasketFour = true;
var lastScrollTop = 0;
var scrollDirection = 0;
var scrollFlag = 0;

/**
 * Document Ready
 */
$(document).ready(function () {
    windowHeight = $(window).height();
    halfWindowHeight = windowHeight / 2;
    windowWidth = $(window).width();
    halfWindowWidth = windowWidth / 2;
    quarterWindowWidth = windowWidth / 4;
    basketItemHeight = $('.home-icon').height();
    basketItemWidth = $('.home-icon').width();
    siteNavHeight = $('#main-nav').height();
    StartPosition.centerBasketPos(halfWindowHeight, halfWindowWidth);
    StartPosition.iconOneBasketPos(windowHeight, halfWindowHeight, basketItemHeight, quarterWindowWidth);
    StartPosition.iconTwoBasketPos(windowHeight, halfWindowHeight, basketItemHeight, quarterWindowWidth);
    StartPosition.iconThreeBasketPos(windowHeight, halfWindowHeight, basketItemHeight, quarterWindowWidth);
    StartPosition.iconFourBasketPos(windowHeight, halfWindowHeight, basketItemHeight, quarterWindowWidth);
});

/**
 * Scroll listener
 */
$(window).scroll(function() {
    if (scrollFlag === 0) {
        /*
         * Get Scroll Position INT.
         */
        scroll = $(window).scrollTop();

        /*
         * Get Scroll Direction
         */
        var scrollTop = $(this).scrollTop();
        if (scrollTop > lastScrollTop) {
            scrollDirection = 1; //up
        } else {
            scrollDirection = 0; //down
        }
        lastScrollTop = scrollTop;

        /*
         * Scroll down Animations triggers
         */
        if (scroll > windowHeight && itemBasketOne && scrollDirection) {
            AnimateToPosition.iconOneAnimate(quarterWindowWidth, halfWindowWidth, halfWindowHeight);
            itemBasketOne = false;
        } else if (scroll > (windowHeight * 2) && itemBasketTwo && scrollDirection) {
            AnimateToPosition.iconTwoAnimate(quarterWindowWidth, halfWindowWidth, halfWindowHeight);
            itemBasketTwo = false;
        } else if (scroll > (windowHeight * 3) && itemBasketThree && scrollDirection) {
            AnimateToPosition.iconThreeAnimate(quarterWindowWidth, halfWindowWidth, halfWindowHeight);
            itemBasketThree = false;
        } else if (scroll > (windowHeight * 4) && itemBasketFour && scrollDirection) {
            AnimateToPosition.iconFourAnimate(quarterWindowWidth, halfWindowWidth, halfWindowHeight);
            itemBasketFour = false;
        }

        /*
         * Scroll up Animations triggers
         */
        if (scroll < windowHeight && itemBasketOne === false && !scrollDirection) {
            ReAnimateToPosition.iconOneAnimate(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight);
            itemBasketOne = true;
        } else if (scroll < (windowHeight * 2) && itemBasketTwo === false && !scrollDirection) {
            ReAnimateToPosition.iconTwoAnimate(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight);
            itemBasketTwo = true;
        } else if (scroll < (windowHeight * 3) && itemBasketThree === false && !scrollDirection) {
            ReAnimateToPosition.iconThreeAnimate(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight);
            itemBasketThree = true;
        } else if (scroll < (windowHeight * 4) && itemBasketFour === false && !scrollDirection) {
            ReAnimateToPosition.iconFourAnimate(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight);
            itemBasketFour = true;
        }
    }
});

// $('#footer-section').click(function(quarterWindowWidth, halfWindowHeight) {
//     FinaleAnimate.iconOneFinalePos(quarterWindowWidth, halfWindowHeight);
//     FinaleAnimate.iconTwoFinalePos(quarterWindowWidth, halfWindowHeight);
//     FinaleAnimate.iconThreeFinalePos(quarterWindowWidth, halfWindowHeight);
//     FinaleAnimate.iconFourFinalePos(quarterWindowWidth, halfWindowHeight);
// });