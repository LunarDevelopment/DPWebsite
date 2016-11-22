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
             * Check whether
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
                var scrollFlag = 0;
                var basketItemHeight = 220;
                var basketPos;
                var basketTrigger;
                var initialBasketPos;
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
                basketPos = halfWindowHeight + quarterWindowHeight - (basketItemHeight / 4);
                siteNavHeight = $('#main-nav').height();
                // $('#picnic-basket').css({'left': '50%', 'margin-left': '-160px', 'top': basketPos + 'px'});
                $('.about-img-icon').css({'opacity': '0'});

                //Get basket position from top
                initialBasketPos = $('#picnic-basket').offset();
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

                        //
                        finaleBasketPosition = $('#get-started').offset();

                        /*
                         * Scroll down Animations triggers
                         */
                        if (scroll > basketTrigger.top && picnicAnimated) {
                            $('#picnic-basket').css({'position': 'fixed','top': basketBeforeAnimation, 'left': '50%', 'margin-left': '-160px', 'z-index': '3000',})
                                .animate({'top': basketPos + 'px'});
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
                        } else if (scroll > (finalTrigger.top - 10) && finalePosition) {
                            var basketPosition = $('#picnic-basket').offset();
                            AnimateToPosition.finalePosition(basketPosition, finaleBasketPosition.top);
                            console.log(finaleBasketPosition.top);
                            finalePosition = false;
                        }
                    }
                });
            }
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
