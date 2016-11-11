"use strict";
/**
 * StartPositions
 * @constructor
 */
module.exports = {

    centerBasketPos: function(halfWindowHeight, halfWindowWidth) {
        $('#picnic-basket').css('left', (halfWindowWidth) + 'px')
            .css('top', (halfWindowHeight + halfWindowHeight / 1.5) + 'px');
    },
    iconOneBasketPos: function(windowHeight, halfWindowHeight, basketItemHeight, quarterWindowWidth) {
        $('#section-one-icon').css({'position':'absolute', 'top':windowHeight + halfWindowHeight - basketItemHeight + 'px', 'left':quarterWindowWidth + 'px'});
    },
    iconTwoBasketPos: function(windowHeight, halfWindowHeight, basketItemHeight, quarterWindowWidth) {
        $('#section-two-icon').css({'position':'absolute', 'top':windowHeight * 2 + halfWindowHeight - basketItemHeight + 'px', 'left':quarterWindowWidth * 3 + 'px'});
    },
    iconThreeBasketPos: function(windowHeight, halfWindowHeight, basketItemHeight, quarterWindowWidth) {
        $('#section-three-icon').css({'position':'absolute', 'top':windowHeight * 3 + halfWindowHeight - basketItemHeight + 'px', 'left':quarterWindowWidth + 'px'});
    },
    iconFourBasketPos: function(windowHeight, halfWindowHeight, basketItemHeight, quarterWindowWidth) {
        $('#section-four-icon').css({'position':'absolute', 'top':windowHeight  * 4 + halfWindowHeight - basketItemHeight + 'px', 'left':quarterWindowWidth * 3 + 'px'});
    }

};
