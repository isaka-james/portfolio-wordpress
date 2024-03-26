(function ($) {
	"use strict";

    //document ready function
    jQuery(document).ready(function($){

		 $("#portfolio-canvas-menu").portfoliocAnvasaccesSiblEdropDown();

        }); // end document ready
		

    	    $.fn.portfoliocAnvasaccesSiblEdropDown = function () {
			    var el = $(this);

			    /* Make dropdown menus keyboard accessible */

			    $("a", el).focus(function() {
			        $(this).parents("li").addClass("hover");
			    }).blur(function() {
			        $(this).parents("li").removeClass("hover");
			    });
			}

}(jQuery));	