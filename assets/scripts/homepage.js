// Sliders for the email/data pages
jQuery(document).ready(function(){
  jQuery('.bxslider').bxSlider({
    mode: 'fade',
    adaptiveHeight: true,
    responsive: true,
    infiniteLoop: false,
    hideControlOnEnd: true,
    pager: false
  });
  var slider = jQuery('#pricing-slider').bxSlider({
    mode: 'fade',
    adaptiveHeight: true,
    responsive: true,
    controls: false,
    infiniteLoop: false,
    hideControlOnEnd: true,
    pager: false
  });

  jQuery('#slider-monthly').click(function(){
    if(jQuery(this).hasClass('active')) {
      return false;
    }
    else {
      slider.goToSlide(2);
      jQuery(this).addClass('active')
      jQuery('#slider-yearly').removeClass('active')
      return false;
    }
  });
  jQuery('#slider-yearly').click(function(){
    if(jQuery(this).hasClass('active')){
      return false;
    }
    else {
      slider.goToSlide(1);
      jQuery(this).addClass('active')
      jQuery('#slider-monthly').removeClass('active')
      return false;
    }
  });
});