"use strict";
/**
 * FinaleAnimate
 * @constructor
 */
module.exports = {

    iconOneFinalePos: function(quarterWindowWidth, halfWindowHeight) {
        $('#section-one-icon').css({'position':'absolute', 'left':quarterWindowWidth * 1 + 'px', 'top':halfWindowHeight * 11 + 'px'});
    },
    iconTwoFinalePos: function(quarterWindowWidth, halfWindowHeight) {
        $('#section-two-icon').css({'position':'absolute', 'left':quarterWindowWidth * 2 + 'px', 'top':halfWindowHeight * 11 + 'px'});
    },
    iconThreeFinalePos: function(quarterWindowWidth, halfWindowHeight) {
        $('#section-three-icon').css({'position':'absolute', 'left':quarterWindowWidth * 3 + 'px', 'top':halfWindowHeight * 11 + 'px'});
    },
    iconFourFinalePos: function(quarterWindowWidth, halfWindowHeight) {
        $('#section-four-icon').css({'position':'absolute', 'left':quarterWindowWidth * 4 + 'px', 'top':halfWindowHeight * 11 + 'px'});
    }

};
