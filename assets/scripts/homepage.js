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

  jQuery('.menu-item-has-children > a').click(function(e){
    e.preventDefault();
    e.stopPropagation();
    if(jQuery(this).siblings('.sub-menu').hasClass('show-sub-menu')) {
      jQuery(this).siblings('.sub-menu').removeClass('show-sub-menu');
      console.log('remove')
    }
    else {
      jQuery(this).siblings('.sub-menu').addClass('show-sub-menu');
      console.log('add')
    }
  });

  jQuery(document).click(function (e){
    var sub_menu = jQuery(".menu-item-has-children > .sub-menu");
    var link = jQuery(".menu-item-has-children > a");
    console.log(sub_menu);
    if (!sub_menu.is(e.target) && sub_menu.has(e.target).length === 0){
      sub_menu.removeClass('show-sub-menu');
      console.log('outside-remove');
    }
  });
});