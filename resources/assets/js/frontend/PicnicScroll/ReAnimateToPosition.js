"use strict";

/**
 * AnimateToPosition
 * @constructor
 */
module.exports = {

    iconOneAnimate: function(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight) {
        $('#section-one-icon').css({'top':windowHeight + halfWindowHeight - basketItemHeight + 'px', 'left':quarterWindowWidth + 'px'});
    },
    iconTwoAnimate: function(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight) {
        $('#section-two-icon').css({'top':windowHeight * 2 + halfWindowHeight - basketItemHeight + 'px', 'left':quarterWindowWidth * 3 + 'px'});
    },
    iconThreeAnimate: function(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight) {
        $('#section-three-icon').css({'top':windowHeight * 3 + halfWindowHeight - basketItemHeight + 'px', 'left':quarterWindowWidth + 'px'});
    },
    iconFourAnimate: function(windowHeight, halfWindowHeight, quarterWindowWidth, basketItemHeight) {
        $('#section-four-icon').css({'top':windowHeight  * 4 + halfWindowHeight - basketItemHeight + 'px', 'left':quarterWindowWidth * 3 + 'px'});
    }

};
