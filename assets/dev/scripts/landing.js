jQuery(document).ready(function() {
  if (jQuery('body').hasClass('pricing')) {
    var pricingSlider = document.getElementById('html5');

    var allSliderRanges = {
      'min': [2000, 1000],
      '35%': [15000, 1000],
      '70%': [75000, 1000],
      'max': [250000]
    };

    noUiSlider.create(pricingSlider, {
      start  : [2000],
      connect: 'lower',
      step   : 1000,
      range  : allSliderRanges,
      pips   : {
        mode   : 'values',
        values : [2000, 15000, 75000, 250000],
        // mode   : 'positions',
        // values : [0, 35, 70, 100],
        density: 100,
        stepped: true,
        format: wNumb({
          decimals: 0,
          thousand: ',',
          suffix  : 'k',
          encoder: function(value) {
            return value / 1000;
          }
        })
      },
      format: wNumb({
        decimals: 0,
        thousand: ','
      })
    });

    var pricingPlans = [{
      'name'       : 'Starter',
      'customers'  : 2000,
      'messages'   : 10000,
      'data_points': 1000000,
      'price'      : 49
    }, {
      'name'       : 'Pro',
      'customers'  : 10000,
      'messages'   : 75000,
      'data_points': 7500000,
      'price'      : 199
    }, {
      'name'       : 'Growth',
      'customers'  : 75000,
      'messages'   : 375000,
      'data_points': 37000000,
      'price'      : 599
    }, {
      'name'       : 'Enterprise',
      'customers'  : 250000,
      'messages'   : 12500000,
      'data_points': 125000000,
      'price'      : 1299
    }];

    var pricingSliderValue         = document.querySelector('.js-pricing-slider-value');
    var pricingMessagesValue       = document.querySelector('.js-pricing-messages-value')
    var pricingDataPointsValue     = document.querySelector('.js-pricing-data-points-value')

    var pricingAdditionalCustomers = document.querySelector('.js-pricing-additional-customers');
    var pricingAdditionalPrice     = document.querySelector('.js-pricing-additional-price');

    var numberFormat = wNumb({
      decimals: 0,
      thousand: ','
    });

    var priceFormat = wNumb({
      decimals: 2,
      thousand: ','
    });

    // Update pricing slider
    pricingSlider.noUiSlider.on('update', function (values, handle) {
      pricingSliderValue.textContent     = values[handle];
      pricingMessagesValue.textContent   = numberFormat.to(numberFormat.from(values[handle]) * 5);
      pricingDataPointsValue.textContent = numberFormat.to(numberFormat.from(values[handle]) * 500);

      if (values[handle] == numberFormat.to(10000)) {
        pricingMessagesValue.textContent = numberFormat.to(75000);
      }

      var currentCustomers = numberFormat.from(pricingSlider.noUiSlider.get());
      var additionalPrice  = currentCustomers - 2000;

      pricingAdditionalCustomers.textContent = numberFormat.to(currentCustomers - 2000);
      pricingAdditionalPrice.textContent     = priceFormat.to(additionalPrice  * 0.01250);
    });

    // Switch overage calculator
    var primaryLinks     = document.querySelectorAll('.js-overage-calculator');
    var secondaryLinks   = document.querySelectorAll('.js-test');

    var pricingPlanName  = document.querySelector('.js-pricing-plan-name');
    var pricingPlanPrice = document.querySelector('.js-pricing-plan-price');

    function overageSwitcher(links) {
      for (let [index, link] of links.entries()) {
        link.addEventListener('click', function() {
          // alert('Starter ' + index);
          pricingSlider.noUiSlider.on('update', function (values, handle) {
            var currentCustomers = numberFormat.from(pricingSlider.noUiSlider.get())
            var additionalPrice = currentCustomers - pricingPlans[index].customers;

            pricingAdditionalCustomers.textContent = numberFormat.to(currentCustomers - pricingPlans[index].customers);
            pricingAdditionalPrice.textContent     = priceFormat.to(additionalPrice * 0.01250);
          });

          // Store values depeneding on plan
          var maxCustomers = 250000;
          var pipValues    = [2000, 15000, 75000, 250000];
          var step         = 1000;

          if (link.textContent == 'Enterprise') {
            console.log('Clicking on enterprise');

            pricingSlider.noUiSlider.on('update', function (values, handle) {
              if (numberFormat.from(values[handle]) < pricingPlans[index].customers) {
                console.log('Less than enterpise customers');
              }
            });
          }

          // Update slider range based on customers per plan
          pricingSlider.noUiSlider.updateOptions({
            step : step,
            range: allSliderRanges
            // range: {
            //   'min': pricingPlans[index].customers,
            //   'max': maxCustomers
            // },
          });


          // Set the slider value
          pricingSlider.noUiSlider.set(pricingPlans[index].customers);

          pricingPlanName.textContent  = pricingPlans[index].name;
          pricingPlanPrice.textContent = pricingPlans[index].price;

          // Remove is-active class
          for (var dropdownLink of secondaryLinks) {
            dropdownLink.classList.remove('is-active');
          }

          if (links == secondaryLinks) {
            if (link.textContent == pricingPlans[index].name) {
              link.classList.add('is-active');
            }
          }
        });
      }
    }

    overageSwitcher(primaryLinks);
    overageSwitcher(secondaryLinks);
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