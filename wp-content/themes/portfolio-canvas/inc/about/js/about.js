(function ($) {
  "use strict";

  $(document).ready(function ($) {
    $(".portfolio-canvas-about-notice .btn-dismiss").on("click", function (e) {
      e.preventDefault();

      var $this = $(this);

      var userid = $(this).data("userid");
      var nonce = $(this).data("nonce");

      $.ajax({
        type: "GET",
        dataType: "json",
        url: ajaxurl,
        data: {
          action: "portfolio_canvas_dismiss",
          userid: userid,
          _wpnonce: nonce,
        },
        success: function (response) {
          if (true === response.status) {
            $this.parents(".portfolio-canvas-about-notice").fadeOut("slow");
          }
        },
      });
    });

    $(".eye-notice .notice-dismiss").on("click", function () {
      var url = new URL(location.href);
      url.searchParams.append("hnotice", 1);
      location.href = url;
    });
  });
})(jQuery);
