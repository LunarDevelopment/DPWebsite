"use strict";

/**
 * AnimateToPosition
 * @constructor
 */
module.exports = {

    iconOneAnimate: function (basketPos, iconPos) {
        $('#section-two-icon')
            .css({'position': 'fixed', 'top': '30%', 'left': iconPos.left + 180 + 'px', 'z-index': '2990',})
            .animate({'left': '50%', 'top': basketPos + 'px', 'width': '110px', 'margin-left': '-152'}, 1000);
    },

    iconTwoAnimate: function (basketPos, iconPos) {
        $('#section-three-icon')
            .css({'position': 'fixed', 'top': '30%', 'left': iconPos.left - 180 + 'px', 'z-index': '2991',})
            .animate({'left': '50%', 'top': basketPos + 'px', 'height': '110px', 'margin-left': '-120px'}, 1000);
    },

    iconThreeAnimate: function (basketPos, iconPos) {
        $('#section-four-icon')
            .css({'position': 'fixed', 'top': '30%', 'left': iconPos.left + 180 + 'px', 'z-index': '2992',})
            .animate({'left': '50%', 'top': basketPos + 'px', 'width': '110px', 'margin-left': '-10px'}, 1000);
    },

    iconFourAnimate: function (basketPos, iconPos) {
        $('#section-five-icon')
            .css({'position': 'fixed', 'top': '30%', 'left': iconPos.left - 180 + 'px', 'z-index': '2990'})
            .animate({'left': '50%', 'top': basketPos + 'px', 'width': '110px', 'margin-left': '42px'}, 1000);
    },

    finalePosition: function (finaleBasketPosition) {
        $('#picnic-basket').css({
            'position': 'absolute',
            'top': finaleBasketPosition - 220 + 70 + 'px',
            'left': '50%' + 'px',
            'margin-left': '-160px',
            'opacity': 0
        })
            .animate({
                'opacity': 1
            }, 1000);
        $('#section-two-icon').addClass('hidden');
        $('#section-three-icon').addClass('hidden');
        $('#section-four-icon').addClass('hidden');
        $('#section-five-icon').addClass('hidden');
        $('.about-img-icon').animate({'opacity': '1'}, 1000);
        $('#picnic-basket-hidden').removeClass('hidden');
        $('#section-two-icon-hidden').removeClass('hidden');
        $('#section-three-icon-hidden').removeClass('hidden');
        $('#section-four-icon-hidden').removeClass('hidden');
        $('#section-five-icon-hidden').removeClass('hidden');
    },

};
