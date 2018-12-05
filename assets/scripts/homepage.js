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

  // Price slider
  var slider = document.getElementById('js-price-slider');

  noUiSlider.create(slider, {
    start   : 50000,
    connect : [true, false],
    step    : 1000,
    tooltips: wNumb({
      decimals: 0,
      mark    : '.',
      thousand: ','
    }),
    range   : {
        'min': 0,
        'max': 500000
    },
    format: wNumb({
        decimals: 0,
        mark    : '.',
        thousand: ','
    }),
    pips: {
      mode: 'values',
      values: [0, 50000, 100000, 150000, 200000, 250000, 300000, 350000, 400000, 450000, 500000],
      density: 10,
      format: wNumb({
        encoder: function( value ){
          return value / 1000;
        },
        suffix: 'k'
      })
    }
  });

  var priceUpdate = document.getElementById('js-price-update'),
      inputPrice  = document.getElementById('js-price');

  slider.noUiSlider.on('update', function (values, handle) {
    priceUpdate.innerHTML = values[handle];

    if (values[handle] <= 15000) {
      inputPrice.innerHTML = '$125';
    } else if (values[handle] >= 15001 && values[handle] <= 50000) {
      inputPrice.innerHTML = '$199';
    } else if (values[handle] >= 50001 && values[handle] <= 100000) {
      inputPrice.innerHTML = '$399';
    } else if (values[handle] >= 100001 && values[handle] <= 200000) {
      inputPrice.innerHTML = '$749';
    } else if (values[handle] >= 200001 && values[handle] <= 300000) {
      inputPrice.innerHTML = '$1049';
    } else if (values[handle] >= 300001 && values[handle] <= 400000) {
      inputPrice.innerHTML = '$1399';
    } else if (values[handle] >= 400001 &&values[handle] <= 500000) {
      inputPrice.innerHTML = '$1749';
    }
  });

  // Toggle FAQs
  jQuery('.js-toggle').click(function(){
    jQuery(this).parent().toggleClass('active');
    jQuery(this).next().toggleClass('active');
  });

});

var slider = document.getElementById('slider');

noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    }
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