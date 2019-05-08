jQuery(document).ready(function() {
  // Slider for careers page
  if (jQuery('body').hasClass('careers')) {
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
  }

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

  // Pricing Slider
  if (jQuery('body').hasClass('pricing')) {
    var slider = document.getElementById('js-price-slider');

    noUiSlider.create(slider, {
      start   : 50000,
      connect : [true, false],
      step    : 1000,
      tooltips: wNumb({
        decimals: 0,
        thousand: ',',
        edit    : function(value) {
          return parseInt(value.replace(/,/g, "")) == 300001 ? value + '+' : value;
        }
      }),
      range: {
          'min': 0,
          'max': 300001
      },
      format: wNumb({
          decimals: 0,
          thousand: ','
      })
      // ,
      // pips: {
      //   mode   : 'values',
      //   values : [0, 100000, 200000, 300000, 400000, 500000, 500001],
      //   density: 10,
      //   format : wNumb({
      //     decimals: 0,
      //     thousand: ','
      //   })
      // }
    });

    var customerUpdate = document.getElementById('js-customer-update'),
        priceUpdate    = document.getElementById('js-price'),
        trialBtn       = document.getElementById('js-trial-btn');

    slider.noUiSlider.on('update', function(values, handle) {
      // Update customer value when sliding
      // customerUpdate.innerHTML = values[handle];

      // Strip comma from the values
      var str = values[handle];
          str = str.replace(/,/g, "");

      if (parseInt(str) <= 15000) {
        priceUpdate.innerHTML = '$125';

        trialBtn.classList.remove('hide');
      } else if (parseInt(str) >= 15001 && parseInt(str) <= 50000) {
        priceUpdate.innerHTML = '$199';

        trialBtn.classList.remove('hide');
      } else if (parseInt(str) >= 50001 && parseInt(str) <= 100000) {
        priceUpdate.innerHTML = '$399';

        trialBtn.classList.remove('hide');
      } else if (parseInt(str) >= 100001 && parseInt(str) <= 200000) {
        priceUpdate.innerHTML = '$749';

        trialBtn.classList.remove('hide');
      } else if (parseInt(str) >= 200001 && parseInt(str) <= 300000) {
        priceUpdate.innerHTML = '$1,049';

        trialBtn.classList.remove('hide');
      } else if (parseInt(str) == 300001) {
        priceUpdate.innerHTML = 'High-volume pricing starts at $1,399';

        trialBtn.classList.add('hide');
      }
    });

    // Toggle FAQs
    jQuery('.js-toggle').click(function(){
      jQuery(this).parent().toggleClass('active');
      jQuery(this).next().toggleClass('active');
    });
  }
});


var h          = jQuery('.nav-primary');
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

// jQuery(window).scroll(function(){
//   var height   = getHeight();
//   var distance = getDistance() - jQuery(window).scrollTop();
//   var offset   = jQuery(window).scrollTop();

//   if ((distance <= 0) && !stuck) {
//     jQuery('.nav-primary').addClass('sticky');
//     stuck = true;
//     console.log('stick');
//   } else if (stuck && (offset <= stickPoint)){
//     jQuery('.nav-primary').removeClass('sticky');
//     stuck = false;
//     console.log('unstick');
//   }
// });

// Smooth scroll
var scroll = new SmoothScroll('[data-scroll]');