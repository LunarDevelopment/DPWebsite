(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

/**
 * AnimateToPosition
 * @constructor
 */

module.exports = {

    iconOneAnimate: function iconOneAnimate(quarterWindowWidth, halfWindowWidth, halfWindowHeight) {
        $('#basket-item-1').css({ 'position': 'fixed', 'top': halfWindowHeight / 2 * 1.55 + 'px', 'left': quarterWindowWidth }).animate({ 'left': halfWindowWidth - 146 + 'px', 'top': halfWindowHeight + 'px' }, 1000);
    },
    iconTwoAnimate: function iconTwoAnimate(quarterWindowWidth, halfWindowWidth, halfWindowHeight) {
        $('#basket-item-2').css({ 'position': 'fixed', 'top': halfWindowHeight / 2 * 1.55 + 'px', 'left': quarterWindowWidth * 3 }).animate({ 'left': halfWindowWidth + 46 + 'px', 'top': halfWindowHeight + 'px' }, 1000);
    },
    iconThreeAnimate: function iconThreeAnimate(quarterWindowWidth, halfWindowWidth, halfWindowHeight) {
        $('#basket-item-3').css({ 'position': 'fixed', 'top': halfWindowHeight / 2 * 1.55 + 'px', 'left': quarterWindowWidth }).animate({ 'left': halfWindowWidth - 100 + 'px', 'top': halfWindowHeight + 'px' }, 1000);
    },
    iconFourAnimate: function iconFourAnimate(quarterWindowWidth, halfWindowWidth, halfWindowHeight) {
        $('#basket-item-4').css({ 'position': 'fixed', 'top': halfWindowHeight / 2 * 1.55 + 'px', 'left': quarterWindowWidth * 3 }).animate({ 'left': halfWindowWidth + 'px', 'top': halfWindowHeight + 'px' }, 1000);
    }

};

},{}],2:[function(require,module,exports){
"use strict";
/**
 * FinaleAnimate
 * @constructor
 */

module.exports = {

    iconOneFinalePos: function iconOneFinalePos(quarterWindowWidth, halfWindowHeight) {
        $('#section-one-icon').css({ 'position': 'absolute', 'left': quarterWindowWidth * 1 + 'px', 'top': halfWindowHeight * 11 + 'px' });
    },
    iconTwoFinalePos: function iconTwoFinalePos(quarterWindowWidth, halfWindowHeight) {
        $('#section-two-icon').css({ 'position': 'absolute', 'left': quarterWindowWidth * 2 + 'px', 'top': halfWindowHeight * 11 + 'px' });
    },
    iconThreeFinalePos: function iconThreeFinalePos(quarterWindowWidth, halfWindowHeight) {
        $('#section-three-icon').css({ 'position': 'absolute', 'left': quarterWindowWidth * 3 + 'px', 'top': halfWindowHeight * 11 + 'px' });
    },
    iconFourFinalePos: function iconFourFinalePos(quarterWindowWidth, halfWindowHeight) {
        $('#section-four-icon').css({ 'position': 'absolute', 'left': quarterWindowWidth * 4 + 'px', 'top': halfWindowHeight * 11 + 'px' });
    }

};

},{}],3:[function(require,module,exports){
"use strict";
/**
 * FixedPosition
 * @constructor
 */

module.exports = {

    centerBasketPos: function centerBasketPos(quarterWindowWidth, halfWindowWidth, halfWindowHeight) {
        $('#picnic-basket').css({ 'left': halfWindowWidth + 'px', 'top': halfWindowHeight + 'px' });
    },
    iconOneBasketPos: function iconOneBasketPos(halfWindowWidth, halfWindowHeight) {
        $('#section-one-icon').css({ 'position': 'fixed', 'left': halfWindowWidth + 50 + 'px', 'top': halfWindowHeight + 'px' });
    },
    iconTwoBasketPos: function iconTwoBasketPos(halfWindowWidth, halfWindowHeight) {
        $('#section-two-icon').css({ 'position': 'fixed', 'left': halfWindowWidth + 'px', 'top': halfWindowHeight + 'px' });
    },
    iconThreeBasketPos: function iconThreeBasketPos(halfWindowWidth, halfWindowHeight) {
        $('#section-three').css({ 'position': 'fixed', 'left': halfWindowWidth - 100 + 'px', 'top': halfWindowHeight + 'px' });
    },
    iconFourBasketPos: function iconFourBasketPos(halfWindowWidth, halfWindowHeight) {
        $('#section-four').css({ 'position': 'fixed', 'left': halfWindowWidth - 150 + 'px', 'top': halfWindowHeight + 'px' });
    }

};

},{}],4:[function(require,module,exports){
"use strict";

/**
 * AnimateToPosition
 * @constructor
 */

module.exports = {

    iconOneAnimate: function iconOneAnimate(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight) {
        $('#section-one-icon').css({ 'top': windowHeight + halfWindowHeight - basketItemHeight + 'px', 'left': quarterWindowWidth + 'px' });
    },
    iconTwoAnimate: function iconTwoAnimate(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight) {
        $('#section-two-icon').css({ 'top': windowHeight * 2 + halfWindowHeight - basketItemHeight + 'px', 'left': quarterWindowWidth * 3 + 'px' });
    },
    iconThreeAnimate: function iconThreeAnimate(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight) {
        $('#section-three-icon').css({ 'top': windowHeight * 3 + halfWindowHeight - basketItemHeight + 'px', 'left': quarterWindowWidth + 'px' });
    },
    iconFourAnimate: function iconFourAnimate(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight) {
        $('#section-four-icon').css({ 'top': windowHeight * 4 + halfWindowHeight - basketItemHeight + 'px', 'left': quarterWindowWidth * 3 + 'px' });
    }

};

},{}],5:[function(require,module,exports){
"use strict";
/**
 * StartPositions
 * @constructor
 */

module.exports = {

    centerBasketPos: function centerBasketPos(halfWindowHeight, halfWindowWidth) {
        $('#picnic-basket').css('left', halfWindowWidth + 'px').css('top', halfWindowHeight + halfWindowHeight / 1.5 + 'px');
    },
    iconOneBasketPos: function iconOneBasketPos(windowHeight, halfWindowHeight, basketItemHeight, quarterWindowWidth) {
        $('#section-one-icon').css({ 'position': 'absolute', 'top': windowHeight + halfWindowHeight - basketItemHeight + 'px', 'left': quarterWindowWidth + 'px' });
    },
    iconTwoBasketPos: function iconTwoBasketPos(windowHeight, halfWindowHeight, basketItemHeight, quarterWindowWidth) {
        $('#section-two-icon').css({ 'position': 'absolute', 'top': windowHeight * 2 + halfWindowHeight - basketItemHeight + 'px', 'left': quarterWindowWidth * 3 + 'px' });
    },
    iconThreeBasketPos: function iconThreeBasketPos(windowHeight, halfWindowHeight, basketItemHeight, quarterWindowWidth) {
        $('#section-three-icon').css({ 'position': 'absolute', 'top': windowHeight * 3 + halfWindowHeight - basketItemHeight + 'px', 'left': quarterWindowWidth + 'px' });
    },
    iconFourBasketPos: function iconFourBasketPos(windowHeight, halfWindowHeight, basketItemHeight, quarterWindowWidth) {
        $('#section-four-icon').css({ 'position': 'absolute', 'top': windowHeight * 4 + halfWindowHeight - basketItemHeight + 'px', 'left': quarterWindowWidth * 3 + 'px' });
    }

};

},{}],6:[function(require,module,exports){
'use strict';

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
$(window).scroll(function () {
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
        } else if (scroll > windowHeight * 2 && itemBasketTwo && scrollDirection) {
            AnimateToPosition.iconTwoAnimate(quarterWindowWidth, halfWindowWidth, halfWindowHeight);
            itemBasketTwo = false;
        } else if (scroll > windowHeight * 3 && itemBasketThree && scrollDirection) {
            AnimateToPosition.iconThreeAnimate(quarterWindowWidth, halfWindowWidth, halfWindowHeight);
            itemBasketThree = false;
        } else if (scroll > windowHeight * 4 && itemBasketFour && scrollDirection) {
            AnimateToPosition.iconFourAnimate(quarterWindowWidth, halfWindowWidth, halfWindowHeight);
            itemBasketFour = false;
        }

        /*
         * Scroll up Animations triggers
         */
        if (scroll < windowHeight && itemBasketOne === false && !scrollDirection) {
            ReAnimateToPosition.iconOneAnimate(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight);
            itemBasketOne = true;
        } else if (scroll < windowHeight * 2 && itemBasketTwo === false && !scrollDirection) {
            ReAnimateToPosition.iconTwoAnimate(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight);
            itemBasketTwo = true;
        } else if (scroll < windowHeight * 3 && itemBasketThree === false && !scrollDirection) {
            ReAnimateToPosition.iconThreeAnimate(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight);
            itemBasketThree = true;
        } else if (scroll < windowHeight * 4 && itemBasketFour === false && !scrollDirection) {
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

},{"./PicnicScroll/AnimateToPosition":1,"./PicnicScroll/FinaleAnimate":2,"./PicnicScroll/FixToPosition":3,"./PicnicScroll/ReAnimateToPosition":4,"./PicnicScroll/StartPosition":5}]},{},[6]);

//# sourceMappingURL=picnic-scroll.js.map
