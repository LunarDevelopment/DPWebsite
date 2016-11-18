/**
 * The script is only to run on devices greater than or equal to 992px.
 * To do this I check whether a class has changed to its media query value for devices under 992px.
 * If the media query value has changed the code will not run.
 */

var AnimateToPosition = require('./PicnicScroll/AnimateToPosition');

var runCode = false;

$(document).ready(function () {
    /**
     * Check wether
     */
    checkSize();
    if (runCode) {
        /**
         * Set variables to be used in logic below.
         */
        var windowHeight;
        var halfWindowHeight;
        var quarterWindowHeight;
        var windowWidth;
        var halfWindowWidth;
        var quarterWindowWidth;
        var siteNavHeight;
        var itemBasketOne = true;
        var itemBasketTwo = true;
        var itemBasketThree = true;
        var itemBasketFour = true;
        var finalePosition = true;
        var lastScrollTop = 0;
        var scrollDirection = 0;
        var scrollFlag = 0;
        var basketItemHeight = 220;
        var basketPos;

        /**
         * Document Ready
         */
        windowHeight = $(window).height();
        halfWindowHeight = windowHeight / 2;
        quarterWindowHeight = windowHeight / 4;
        windowWidth = $(window).width();
        halfWindowWidth = windowWidth / 2;
        quarterWindowWidth = windowWidth / 4;
        basketPos = halfWindowHeight + quarterWindowHeight - (basketItemHeight / 4);
        siteNavHeight = $('#main-nav').height();
        $('#picnic-basket').css({'left': '50%', 'margin-left': '-160px', 'top': basketPos + 'px'});
        $('.about-img-icon').css({'opacity': '0'});
        /**
         * Scroll listener
         */
        $(window).scroll(function () {
            if (scrollFlag === 0) {
                /*
                 * Get Scroll Position INT.
                 */
                var scroll = $(window).scrollTop();
                console.log(scroll);

                /*
                 * Scroll down Animations triggers
                 */
                if (scroll > windowHeight && itemBasketOne) {
                    var iconPosition = $('#section-two-icon').offset();
                    AnimateToPosition.iconOneAnimate(basketPos, iconPosition);
                    itemBasketOne = false;
                } else if (scroll > (windowHeight * 2) && itemBasketTwo) {
                    var iconPosition = $('#section-three-icon').offset();
                    AnimateToPosition.iconTwoAnimate(basketPos, iconPosition);
                    itemBasketTwo = false;
                } else if (scroll > (windowHeight * 3) && itemBasketThree) {
                    var iconPosition = $('#section-four-icon').offset();
                    AnimateToPosition.iconThreeAnimate(basketPos, iconPosition);
                    itemBasketThree = false;
                } else if (scroll > (windowHeight * 4) && itemBasketFour) {
                    var iconPosition = $('#section-five-icon').offset();
                    AnimateToPosition.iconFourAnimate(basketPos, iconPosition);
                    itemBasketFour = false;
                } else if (scroll > 5220 && finalePosition) {
                    var basketPosition = $('#picnic-basket').offset();
                    AnimateToPosition.finalePosition(basketPosition);
                    finalePosition = false;
                }
            }
        });
    }
});

/**
 * This function checks a class to see if it has changed to its media query value.
 */
function checkSize() {
    if ($(".panel-icon").css("margin-top") !== "-80px" || $(".panel-icon").css("margin-top") !== "-50px;") {
        runCode = true;
    }
}