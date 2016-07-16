(function ($) {
	"use strict"

    // Toggle mobile menu

	$(".hamburger").click(function () {
        $("#mobile-menu").toggleClass('active');
        $(".hamburger").toggleClass("active");
        return false;
    });

    // Auto wrap iframes with responsive container

    $("iframe").wrap("<div class='video-container'/>");

}(jQuery));