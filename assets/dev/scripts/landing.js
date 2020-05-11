jQuery(document).ready(function() {
  if (jQuery('body').hasClass('pricing')) {
    var pricingSlider = document.getElementById('html5');

    noUiSlider.create(pricingSlider, {
      start    : [2000],
      connect  : 'lower',
      step     : 1000,
      range: {
        'min': [2000],
        'max': [300000]
      },
       pips: {
        mode   : 'positions',
        // values : [10000, 25000, 50000, 75000],
        values : [0, 25, 50, 75, 100],
        density: 100,
        stepped: true
      }
    });

    var stepSliderValueElement = document.getElementById('slider-step-value');
    var pricingMessagesValue   = document.querySelector('.js-pricing-messages-value')
    var pricingDataPointsValue = document.querySelector('.js-pricing-data-points-value')

    pricingSlider.noUiSlider.on('update', function (values, handle) {
      stepSliderValueElement.innerHTML = values[handle] * 1;
      pricingMessagesValue.innerHTML   = values[handle] * 5;
      pricingDataPointsValue.innerHTML   = values[handle] * 500;

      if (values[handle] == 10000) {
        pricingMessagesValue.innerHTML = 75000;
      }
    });

    var pricingStarter  = document.querySelector('.js-overage-calculator--starter');
    var pricingPro      = document.querySelector('.js-overage-calculator--pro');
    var pricingGrowth   = document.querySelector('.js-overage-calculator--growth');
    var pricingPlanText = document.querySelector('.js-pricing-plan');

    let pricingTiers = [{
      'customers'  : 2000,
      'messages'   : 10000,
      'data_points': 1000000
    }, {
      'customers'  : 10000,
      'messages'   : 75000,
      'data_points': 7500000
    }, {
      'customers'  : 75000,
      'messages'   : 375000,
      'data_points': 37000000
    }, {
      'customers'  : 250000,
      'messages'   : 12500000,
      'data_points': 1000000
    }];

    var overageCalculatorsLinks = document.querySelectorAll('.js-overage-calculator');

    for (let [index, overageCalculatorsLink] of overageCalculatorsLinks.entries()) {
      overageCalculatorsLink.addEventListener('click', function () {
        alert('Starter ' + index);

        pricingSlider.noUiSlider.updateOptions({
          range: {
            'min': pricingTiers[index].customers,
            'max': [300000]
          }
        });

        pricingSlider.noUiSlider.set(pricingTiers[index].customers);
      });
    }
  }

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

  var validateForm;
  var requestDemo;
  var subscribeBlogInline;

  jQuery('#high-volume-sender-form').submit(function(e) {
    e.preventDefault();
    requestDemo(e);
    return false;
  });

  // Main blog subscribe form
  jQuery('.js-blog-subscribe-form').submit(function(e) {
    e.preventDefault();
    subscribeBlog(e);
    return false;
  });

  jQuery('.js-blog-subscribe-form-2').submit(function(e) {
    e.preventDefault();
    subscribeBlog2(e);
    return false;
  });

  // Blog inline subscribe form
  jQuery('.js-blog-inline-form').submit(function(e) {
    e.preventDefault();
    subscribeBlogInline(e);
    return false;
  });

  validateForm = function() {
    var company, email_addr, emails, name, subscribers, ret;
    ret         = true;
    name        = jQuery('#sender_name');
    email_addr  = jQuery('#sender_email_address');
    company     = jQuery('#sender_company_name');
    subscribers = jQuery('#sender_subscribers');
    emails      = jQuery('#sender_emails');

    if (name.val() !== '') {
      name.removeClass('error');
    } else {
      name.addClass('error');
      ret = false;
    }
    if (email_addr.val() !== '') {
      email_addr.removeClass('error');
    } else {
      email_addr.addClass('error');
      ret = false;
    }
    if (company.val() !== '') {
      company.removeClass('error');
    } else {
      company.addClass('error');
      ret = false;
    }
    if (subscribers.val() !== '') {
      subscribers.removeClass('error');
    } else {
      subscribers.addClass('error');
      ret = false;
    }
    if (emails.val() !== '') {
      emails.removeClass('error');
    } else {
      emails.addClass('error');
      ret = false;
    }
    return ret;
  };

  requestDemo = function(e) {
    console.log('Trying to validate');
    if (validateForm()) {
      var url = jQuery('#high-volume-sender-form').attr('action');
      jQuery.ajax({
        type: 'POST',
        url: url,
        data: jQuery('#high-volume-sender-form').serialize(),
        success: function(data)
        {
           console.log('Demo sent!');
           jQuery('#high-volume-sender-form').hide();
           jQuery('#enquire-intro').hide();
           jQuery('#thanks').show();
        }
      });
    }
  };

  subscribeBlog = function(e) {
    var url = jQuery('.js-blog-subscribe-form').attr('action');
    jQuery.ajax({
      type: 'POST',
      url : url,
      data: jQuery('.js-blog-subscribe-form').serialize(),
      success: function(data)
      {
        jQuery('.js-blog-subscribe-form').hide();
        jQuery('.js-enquire-menu').hide();
        jQuery('.js-thanks-menu').show();
      }
    });
  };

  subscribeBlog2 = function(e) {
    var url = jQuery('.js-blog-subscribe-form-2').attr('action');
    jQuery.ajax({
      type: 'POST',
      url : url,
      data: jQuery('.js-blog-subscribe-form-2').serialize(),
      success: function(data)
      {
        jQuery('.js-blog-subscribe-form-2').hide();
        jQuery('.js-enquire-menu-2').hide();
        jQuery('.js-thanks-menu-2').show();
      }
    });
  };

  subscribeBlogInline = function(e) {
    var url = jQuery('.js-blog-inline-form').attr('action');
    jQuery.ajax({
      type: 'POST',
      url : url,
      data: jQuery('.js-blog-inline-form').serialize(),
      success: function(data)
      {
        jQuery('.js-blog-inline-form').hide();
        jQuery('.js-enquire-intro-3').hide();
        jQuery('.js-thanks-3').show();
      }
    });
  };

  // Responsive resources menu
  var isFixed   = false;
  var menuClone = jQuery('.js-category-toggle').clone();

  jQuery('.js-category-toggle').on('click', function() {
    var isActive  = jQuery('js-category-toggle.is-active').length > 0;

    if (!isActive && !isFixed) {
      jQuery('.js-resources-menu').addClass('is-visible');
      jQuery(this).addClass('is-active');
      jQuery(this).html('<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"><path d="M9.414 8l5.657 5.657a1 1 0 0 1-1.414 1.414L8 9.414l-5.657 5.657A1 1 0 0 1 .93 13.657L6.586 8 .929 2.343A1 1 0 0 1 2.343.93L8 6.586 13.657.929a1 1 0 0 1 1.414 1.414L9.414 8z" fill="#9D9D9D" fill-rule="evenodd"/></svg>');
      isFixed = true;
    } else {
      jQuery('.js-resources-menu').removeClass('is-visible');
      jQuery(this).removeClass('is-active');
      jQuery(this).html(menuClone);
      isFixed = false;
    }
  });

  // Open subscribe form
  var form = jQuery('.js-resources-menu-footer');

  jQuery('.js-open-subscribe-form').on('click', function() {
    form.addClass('is-active');
  });

  jQuery('.js-resources-menu-footer-close').on('click', function() {
    var formActive = jQuery('.js-resources-menu-footer.is-active');
    var formOpen   = formActive.length > 0;

    if (formOpen) {
      form.removeClass('is-active');
    }
  });

});