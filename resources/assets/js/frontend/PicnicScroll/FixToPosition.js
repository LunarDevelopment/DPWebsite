"use strict";
/**
 * FixedPosition
 * @constructor
 */
module.exports = {

    centerBasketPos: function(quarterWindowWidth, halfWindowWidth, halfWindowHeight) {
        $('#picnic-basket').css({'left':halfWindowWidth + 'px', 'top':halfWindowHeight + 'px'});
    },
    iconOneBasketPos: function(halfWindowWidth, halfWindowHeight) {
        $('#section-one-icon').css({'position':'fixed', 'left':halfWindowWidth + 50 + 'px', 'top':halfWindowHeight + 'px'});
    },
    iconTwoBasketPos: function(halfWindowWidth, halfWindowHeight) {
        $('#section-two-icon').css({'position':'fixed', 'left':halfWindowWidth + 'px', 'top':halfWindowHeight + 'px'});
    },
    iconThreeBasketPos: function(halfWindowWidth, halfWindowHeight) {
        $('#section-three').css({'position':'fixed', 'left':halfWindowWidth - 100 + 'px', 'top':halfWindowHeight + 'px'});
    },
    iconFourBasketPos: function(halfWindowWidth, halfWindowHeight) {
        $('#section-four').css({'position':'fixed', 'left':halfWindowWidth - 150 + 'px', 'top':halfWindowHeight + 'px'});
    }

};
