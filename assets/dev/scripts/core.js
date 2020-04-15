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

  jQuery('.menu-item-has-children > a').click(function(e){
    e.preventDefault();
    e.stopPropagation();

    if(jQuery(this).siblings('.sub-menu').hasClass('show-sub-menu')) {
      jQuery(this).siblings('.sub-menu').removeClass('show-sub-menu');
    }
    else {
      jQuery('.sub-menu.show-sub-menu').removeClass('show-sub-menu');
      jQuery(this).siblings('.sub-menu').addClass('show-sub-menu');
    }
  });

  jQuery(document).click(function (e){
    var sub_menu = jQuery(".menu-item-has-children > .sub-menu");
    var link     = jQuery(".menu-item-has-children > a");
    if (!sub_menu.is(e.target) && sub_menu.has(e.target).length === 0){
      sub_menu.removeClass('show-sub-menu');
    }
  });

  // if(window.location.hash) {
  //   var hash = window.location.hash.substring(1);
  //   if(hash == 'demo') {
  //     jQuery('#demo-trigger').click();
  //   }
  // }
});