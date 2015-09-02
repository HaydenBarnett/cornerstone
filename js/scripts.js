(function ($) {
	"use strict"

    // Toggle mobile menu

	$(".hamburger").click(function () {
        $("#mobile-menu").toggleClass('active');
        $(".hamburger .bar-1").toggleClass("active");
        $(".hamburger .bar-2").toggleClass("active");
        $(".hamburger .bar-3").toggleClass("active");
        return false;
    });

}(jQuery));