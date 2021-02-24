(function ($) {
    "use strict"

    $('.nav-hamburger').on('click', function() {
        $('.nav-hamburger, .nav-mobile').toggleClass('active');
    });

}(jQuery));