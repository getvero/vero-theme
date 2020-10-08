jQuery(window).scroll(function() {
  var header          = jQuery('.nav-primary');
  var scroll          = jQuery(window).scrollTop();

  if (scroll > 0) {
    header.addClass('sticky');
  } else {
    header.removeClass('sticky');
  }
});

jQuery(document).ready(function() {
  // Responsive menu
  jQuery('.js-nav-primary-toggle').on( 'click', function() {
    var textcont =  jQuery( '.nav-primary-toggle' ).text();

    if(textcont == 'Menu'){
      jQuery('#menu-marketing-navbar-right').slideDown();
      jQuery('.nav-primary-toggle').text('Close');
    }
    else if(textcont == 'Close'){
      jQuery('#menu-marketing-navbar-right').slideUp();
      jQuery('.nav-primary-toggle').text('Menu');
      jQuery('#menu-marketing-navbar-right').addClass('slid');
    }
  });

  jQuery(window).resize(function(){
    if (jQuery('.nav-menu-toggle a').text() === 'Menu'){
      jQuery( '#menu-marketing-navbar-right').removeAttr('style');
    }
  });
});