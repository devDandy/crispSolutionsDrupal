(function ($) {
  Drupal.behaviors.photoBlog = {
    attach: function (context, settings) {
      // Code to be run on page load, and
      // on ajax load added here
	  $(window).load(function() {
	    $('.flexslider').flexslider();
	});
    }
  };
}(jQuery));
