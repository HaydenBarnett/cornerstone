(function ($) {
    "use strict"

    // Toggle mobile menu

    $("#hamburger").on('click', function () {
        $("#mobile-menu, #hamburger").toggleClass('active');
        return false;
    });

    // Auto wrap iframes with responsive container

    // $("iframe").wrap("<div class='video-container'/>");

}(jQuery));