jQuery(window).scroll(function() {
  var header          = jQuery('.nav-primary');
  var scroll          = jQuery(window).scrollTop();

  if (scroll > 0) {
    header.addClass('sticky');
  } else {
    header.removeClass('sticky');
  }
});