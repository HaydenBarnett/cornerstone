(function ($) {
    "use strict"

    $(".nav-hamburger").on('click', function () {
        $(".nav-mobile, .nav-hamburger").toggleClass('active');
        return false;
    });

}(jQuery));