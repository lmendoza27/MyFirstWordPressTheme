// https://betterstudio.com/blog/jquery-not-a-function-wordpress/
jQuery(document).on("scroll", function () {
	if (jQuery(document).scrollTop() > 100) {
		jQuery("header").addClass("small");
	} else {
		jQuery("header").removeClass("small");
	}
});

// https://stackoverflow.com/questions/41661014/jquery-on-click-by-id-in-wordpress-not-functioning

/*jQuery('#nav-toggle').on('click', function() {
	alert("Hola")
	console.log("Hola")
	//jQuery('.header-mobile').toggleClass('show-nav');
	//jQuery('.content-wrap').toggleClass('content-shrink');
  });*/


  jQuery(document).ready(function() {
	jQuery('#nav-toggle').click(open);
		function open() {
			//alert('inside hello function');
			jQuery('.header-mobile').toggleClass('show-nav');
		}

  })