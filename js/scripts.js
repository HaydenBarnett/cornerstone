(function ($) {
	"use strict"

    // Toggle mobile menu

	$(".hamburger").click(function () {
        $("#mobile-menu").toggleClass('active');
        $(".hamburger").toggleClass("active");
        return false;
    });

}(jQuery));