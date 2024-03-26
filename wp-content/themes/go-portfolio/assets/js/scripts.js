(function ($) {
	"use strict";

    //document ready function
    jQuery(document).ready(function($){

		 $("#go-portfolio-menu").myPorfolioAccessDropdown();

        }); // end document ready
		

    	    $.fn.myPorfolioAccessDropdown = function () {
			    var el = $(this);

			    /* Make dropdown menus keyboard accessible */

			    $("a", el).focus(function() {
			        $(this).parents("li").addClass("hover");
			    }).blur(function() {
			        $(this).parents("li").removeClass("hover");
			    });
			}

}(jQuery));	

document.addEventListener("DOMContentLoaded", function() {
    // Get reference to the header element
    const header = document.getElementById("masthead");

    // Calculate the desired scroll distance (e.g., 10% of the viewport height)
    const scrollDistance = window.innerHeight * 0.1; // Adjust this value as needed

    // Add a scroll event listener to the window
    window.addEventListener("scroll", function() {
        // Check if the user has scrolled down the calculated distance
        if (window.scrollY > scrollDistance) {
            // Add a class to the header to make it fixed
            header.classList.add("myport-hfixed");
        } else {
            // Remove the class to make the header return to its original position
            header.classList.remove("myport-hfixed");
        }
    });
});