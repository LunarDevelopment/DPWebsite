"use strict";

/**
 * HomeScroller
 * @constructor
 */
module.exports = {

    homeScroll: function () {

        /*
         * Array of positions for navigation by arrows.
         */
        var pagePosition = {
            'positionOne': Math.round($('#section-one').offset().top),
            'positionTwo': Math.round($('#section-two').offset().top),
            'positionThree': Math.round($('#section-three').offset().top),
            'positionFour': Math.round($('#section-four').offset().top),
            'positionFive': Math.round($('#section-five').offset().top),
            'positionSix': Math.round($('#section-six').offset().top)
        };

        /*
         * Array of ID's of elements in order from Top of the document to the bottom.
         */
        var scroll = [
            '#section-one',
            '#section-two',
            '#section-three',
            '#section-four',
            '#section-five',
            '#section-six'
        ];

        /*
         * On click of the scroll down button call the checkScrollPosition and scroll to the next position below.
         */
        $('#scrollDown').click(function () {
            var scrollPosition = checkScrollPosition(); //Get scroll position and add 1
            if (scrollPosition === 0) {
                scrollPosition = 1;
            } else {
                scrollPosition += 1;
            }
            if (scrollPosition <= 5) {
                var target = $(scroll[scrollPosition]); //scroll to this position
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000); //Set animation speed
            }
        });

        /*
         * On click of the scroll up button call the checkScrollPosition and scroll to the next position above.
         */
        $('#scrollUp').click(function () {
            var scrollPosition = checkScrollPosition(); //Get scroll position
            if (scrollPosition >= 0) {
                var target = $(scroll[scrollPosition]); //scroll to this position
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000); //Set animation speed
            }
        });

        /**
         * checkScrollPosition
         *
         * find the windows scrollTop position and set a scroll position in comparison to the page
         * positions set in the pagePosition array.
         *
         * @returns {number}
         */
        function checkScrollPosition() {
            var scroll = $(window).scrollTop(); //Get windows scrollTop position
            console.log(scroll);
            console.log(pagePosition['positionTwo']);
            console.log(pagePosition['positionThree']);
            if (scroll < pagePosition['positionTwo']) {
                return 0;
            } else if (scroll >= pagePosition['positionTwo'] && scroll < pagePosition['positionThree']) {
                return 1;
            } else if (scroll >= pagePosition['positionThree'] && scroll < pagePosition['positionFour']) {
                return 2;
            } else if (scroll >= pagePosition['positionFour'] && scroll < pagePosition['positionFive']) {
                return 3;
            } else if (scroll >= pagePosition['positionFive'] && scroll < pagePosition['positionSix']) {
                return 4;
            } else if (scroll >= pagePosition['positionSix']) {
                return 5;
            }
        };
    }
};