// Sliders for the email/data pages
jQuery(document).ready(function(){
  jQuery('.bxslider').bxSlider({
    mode            : 'fade',
    adaptiveHeight  : true,
    responsive      : true,
    infiniteLoop    : false,
    hideControlOnEnd: true,
    pager           : false
  });
  var careersSlider = jQuery('#careers-profiles-slider').bxSlider({
    mode            : 'fade',
    adaptiveHeight  : true,
    responsive      : true,
    controls        : false,
    infiniteLoop    : true,
    hideControlOnEnd: false,
    pager           : false
  });

  jQuery('#careers-profiles-slider .bx-control').click(function(){
    var slideNum = jQuery(this).data('bx');
    careersSlider.goToSlide(slideNum);
  });

  jQuery('#slider-monthly').click(function(){
    if(jQuery(this).hasClass('active')) {
      return false;
    }
    else {
      slider.goToSlide(2);
      jQuery(this).addClass('active')
      jQuery('#slider-self-hosted').removeClass('active')
      return false;
    }
  });
  jQuery('#slider-self-hosted').click(function(){
    if(jQuery(this).hasClass('active')) {
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

  // Range slider
  var rangeSlider = function(){
    var slider = jQuery('.js-slider'),
        range  = jQuery('.js-slider-range'),
        price  = jQuery('.js-slider-price'),
        value  = jQuery('.js-slider-value');

    slider.each(function(){
      value.each(function(){
        var value = jQuery(this).prev().attr('value');
        jQuery(this).html(value);
      });

      range.on('input', function(){
        jQuery(this).next(value).html(this.value);

        if (this.value <= 15000) {
          jQuery(price).html('$125');

          console.log('Less than 15000')
        } else if (this.value >= 15001 && this.value <= 50000) {
          jQuery(price).html('$199');

          console.log('Less than 50000')
        } else if (this.value >= 50001 && this.value <= 100000) {
          jQuery(price).html('$399');

          console.log('Less than 100000')
        } else if (this.value >= 100001 && this.value <= 200000) {
          jQuery(price).html('$749');

          console.log('Less than 200000')
        } else if (this.value >= 200001 && this.value <= 300000) {
          jQuery(price).html('$1049');

          console.log('Less than 300000')
        } else if (this.value >= 300001 && this.value <= 400000) {
          jQuery(price).html('$1399');

          console.log('Less than 400000')
        } else if (this.value >= 400001 &&this.value <= 500000) {
          jQuery(price).html('$1749');

          console.log('Less than 500000')
        }
      });
    });
  };

  rangeSlider();

  // Toggle FAQs
  jQuery('.js-toggle').click(function(){
    jQuery(this).parent().toggleClass('active');
    jQuery(this).next().toggleClass('active');
  });

});

var h          = jQuery(".nav-primary .wrap");
var stuck      = false;
var stickPoint = getDistance();

function getDistance() {
  var topDist = h.offset().top;
  return topDist;
}

function getHeight() {
  var height = h.height();
  return height;
}

jQuery(window).scroll(function(){
  var height   = getHeight();
  var distance = getDistance() - jQuery(window).scrollTop();
  var offset   = jQuery(window).scrollTop();
  console.log('scroll');
  if ( (distance <= 0) && !stuck) {
    jQuery(".nav-primary").addClass('sticky');
    jQuery(".nav-primary").height(height);
    stuck = true;
    console.log('stick');
  } else if (stuck && (offset <= stickPoint)){
    jQuery(".nav-primary").removeClass('sticky');
    jQuery(".nav-primary").css('height','auto');
    stuck = false;
    console.log('unstick');
  }
});

// Liquid guide sticky sidebar
var heroDistance = jQuery('.content-sidebar-wrap').offset().top;

jQuery(window).scroll(function(){
  if (jQuery(window).scrollTop() > heroDistance - 89) {
    jQuery('.sidebar-sticky').addClass('sticky');
  } else {
    jQuery('.sidebar-sticky').removeClass('sticky');
  }

  // At bottom
  if(jQuery(window).scrollTop() + jQuery(window).height() > (jQuery(document).height() - 950) ) {
    jQuery('.sidebar-sticky').addClass('bottom');
  } else {
    jQuery('.sidebar-sticky').removeClass('bottom');
  }
});