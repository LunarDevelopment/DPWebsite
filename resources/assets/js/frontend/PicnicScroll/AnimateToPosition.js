"use strict";

/**
 * AnimateToPosition
 * @constructor
 */
module.exports = {

    iconOneAnimate: function(quarterWindowWidth, halfWindowWidth, halfWindowHeight) {
        $('#basket-item-1').css({'position': 'fixed','top': halfWindowHeight / 2 * 1.55 + 'px','left': quarterWindowWidth})
            .animate({'left': (halfWindowWidth - 146) + 'px','top':halfWindowHeight + 'px'}, 1000);
    },
    iconTwoAnimate: function(quarterWindowWidth, halfWindowWidth, halfWindowHeight) {
        $('#basket-item-2').css({'position' :'fixed','top': halfWindowHeight / 2 * 1.55 + 'px','left': quarterWindowWidth * 3})
            .animate({'left': (halfWindowWidth + 46) + 'px','top' :halfWindowHeight + 'px'}, 1000);
    },
    iconThreeAnimate: function(quarterWindowWidth, halfWindowWidth, halfWindowHeight) {
        $('#basket-item-3').css({'position':'fixed','top': halfWindowHeight / 2 * 1.55 + 'px','left': quarterWindowWidth})
            .animate({'left': (halfWindowWidth - 100) + 'px','top':halfWindowHeight + 'px'}, 1000);
    },
    iconFourAnimate: function(quarterWindowWidth, halfWindowWidth, halfWindowHeight) {
        $('#basket-item-4').css({'position':'fixed','top': halfWindowHeight / 2 * 1.55 + 'px','left': quarterWindowWidth * 3})
            .animate({'left': halfWindowWidth + 'px','top':halfWindowHeight + 'px'}, 1000);
    }

};
