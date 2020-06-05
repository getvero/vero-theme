jQuery(document).ready(function() {
  if (jQuery('body').hasClass('pricing')) {
    var pricingSlider = document.getElementById('html5');

    var allSliderRanges = {
      'min': [2000, 1000],
      '33.33%': [15000, 1000],
      '66.66%': [75000, 1000],
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
      'name'        : 'Starter',
      'customers'   : 2000,
      'messages'    : 10000,
      'data_points' : 1000000,
      'price'       : 49,
      'overage_rate': 25
    }, {
      'name'        : 'Pro',
      'customers'   : 10000,
      'messages'    : 75000,
      'data_points' : 7500000,
      'price'       : 199,
      'overage_rate': 13
    }, {
      'name'        : 'Growth',
      'customers'   : 75000,
      'messages'    : 375000,
      'data_points' : 37000000,
      'price'       : 599,
      'overage_rate': 8
    }, {
      'name'        : 'Enterprise',
      'customers'   : 250000,
      'messages'    : 12500000,
      'data_points' : 125000000,
      'price'       : 1299,
      'overage_rate': 5
    }];

    var pricingSliderValue         = document.querySelector('.js-pricing-slider-value');
    var pricingMessagesValue       = document.querySelector('.js-pricing-messages-value')
    var pricingDataPointsValue     = document.querySelector('.js-pricing-data-points-value')

    var pricingAdditionalCustomersValue = document.querySelector('.js-pricing-additional-customers');
    var pricingAdditionalPriceValue     = document.querySelector('.js-pricing-additional-price');
    var pricingTotalCost                = document.querySelector('.js-pricing-total-cost');

    var numberFormat = wNumb({
      decimals: 0,
      thousand: ','
    });

    // Update slider values
    pricingSlider.noUiSlider.on('update', function (values, handle) {
      // Set handle value
      pricingSliderValue.textContent     = values[handle];

      // Set messages and data points values
      pricingMessagesValue.textContent   = numberFormat.to(numberFormat.from(values[handle]) * 5);
      pricingDataPointsValue.textContent = numberFormat.to(numberFormat.from(values[handle]) * 500);

      if (values[handle] == numberFormat.to(10000)) {
        pricingMessagesValue.textContent = numberFormat.to(75000);
      }
    });

    // Switch overage calculator based on plan
    var primaryLinks     = document.querySelectorAll('.js-overage-calculator');
    var secondaryLinks   = document.querySelectorAll('.js-test');

    var pricingPlanName     = document.querySelector('.js-pricing-plan-name');
    var pricingPlanPrice    = document.querySelector('.js-pricing-plan-price');
    var pricingOverageTotal = document.querySelector('.js-pricing-total-overage-cost');

    function planSwitcher(links) {
      for (const [index, link] of links.entries()) {
        link.addEventListener('click', function() {
          // Open modal
          var overlay    = document.querySelector('.js-overlay');

          if (!overlay) {
            var newOverlay        = document.createElement('div');
            var modal             = document.querySelector('.js-modal');
            var close             = document.createElement('span');

            document.querySelector('.js-modal').classList.remove('is-active');

            newOverlay.setAttribute('class', 'js-overlay overlay overlay--pricing flex items-center justify-center');
            close.setAttribute('class', 'js-overlay-close overlay-close pointer');
            close.innerHTML = '<svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="none" d="M0 0h32v32H0z"/><path d="M23.071 8.929a1 1 0 010 1.414L17.414 16l5.657 5.657a1 1 0 01-1.414 1.414L16 17.414l-5.657 5.657a1 1 0 01-1.414-1.414L14.586 16l-5.657-5.657a1 1 0 011.414-1.414L16 14.586l5.657-5.657a1 1 0 011.414 0z" fill="#fff"/></g></svg>'

            modal.parentNode.insertBefore(newOverlay, modal);

            newOverlay.prepend(close);
            newOverlay.append(modal);

            modal.classList.add('is-active');

            document.body.classList.add('overflow-hidden');
          }

          overlayClose();

          // Update pricing slider when moving
          pricingSlider.noUiSlider.on('update', function (values, handle) {
            var currentCustomers = numberFormat.from(pricingSlider.noUiSlider.get())
            var additionalCustomers = currentCustomers - pricingPlans[index].customers;

            pricingAdditionalCustomersValue.textContent = numberFormat.to(additionalCustomers);
            pricingAdditionalPriceValue.textContent     = numberFormat.to((additionalCustomers * 0.001) * pricingPlans[index].overage_rate);
            pricingTotalCost.textContent = Number(pricingAdditionalPriceValue.innerHTML) + pricingPlans[index].price;

          });

          if (index) {
            console.log('Clicking on ' + pricingPlans[index].name);

            // Disable handle
            pricingSlider.noUiSlider.on('change', function (values, handle) {
              if (pricingPlans[index].name) {
                // pricingSlider.noUiSlider.set(pricingPlans[index].customers);
              }
            });
          }

          var planValue = [2000, 15000, 75000, 250000];

          if (pricingPlans[index].name == 'Pro') {
            allSliderRanges = {
              'min': [10000, 1000],
              '50%': [75000, 1000],
              'max': [250000]
            };

             planValue = [10000, 75000, 250000]
          } else if (pricingPlans[index].name == 'Growth') {
            allSliderRanges = {
              'min': [75000, 1000],
              '50%': [150000, 1000],
              'max': [250000]
            };

             planValue = [75000, 150000, 250000]
          } else if (pricingPlans[index].name == 'Enterprise') {
            allSliderRanges = {
              'min': [2000, 1000],
              'max': [250000]
            };

             planValue = [2000, 250000]
          }

          // Update slider range based on customers per plan
          pricingSlider.noUiSlider.updateOptions({
            start: 0,
            range: allSliderRanges,
            pips   : {
              mode   : 'values',
              values : planValue,
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
            }
          });

          // Set the slider value
          pricingSlider.noUiSlider.set(pricingPlans[index].customers);

          // Set the plan and price values
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

    function overlayClose() {
      document.querySelector('.js-overlay-close').addEventListener('click', function(event) {
        var el     = document.querySelector('.js-overlay');
        var parent = el.parentNode;

        document.querySelector('.js-modal').classList.remove('is-active');

        while (el.firstChild) parent.insertBefore(el.firstChild, el);

        parent.removeChild(el);

        document.querySelector('.js-overlay-close').remove();
        document.body.classList.remove('overflow-hidden');
      });
    }

    planSwitcher(primaryLinks);
    planSwitcher(secondaryLinks);

    // Dropdown
    var dropdown = document.querySelector('.js-pricing-plan-dropdown');

    pricingPlanName.addEventListener('click', function() {
      dropdown.classList.toggle('fade');
    });
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

    jQuery('#careers-profiles-slider .bx-control').click(function() {
      var slideNum = jQuery(this).data('bx');
      careersSlider.goToSlide(slideNum);
    });
  }

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
  var resourcesHeader           = document.querySelector('.js-resources-header');
  var openResourcesSubscibeForm = document.querySelector('.js-open-resources-subscribe-form');

  openResourcesSubscibeForm.addEventListener('click', function() {
    resourcesHeader.classList.add('is-active');
  });

  // Close subscribe form
  var closeResourcesSubscibeForm = document.querySelector('.js-close-resources-subscribe-form');

  closeResourcesSubscibeForm.addEventListener('click', function() {
    var formActive = resourcesHeader.classList.contains('is-active');

    if (formActive) {
      resourcesHeader.classList.remove('is-active');
    }
  });

  var subscribeForm = document.querySelector('.subscribe-form');

  jQuery('.js-subscribe-form').each(function(index) {
    jQuery(this).on('submit', function() {
      event.preventDefault();

      // needs for recaptacha ready
      grecaptcha.ready(function() {
        // do request for recaptcha token
        // response is promise with passed token
        grecaptcha.execute('6LfUD_YUAAAAAO5FOQgHwsQSEMzOZYEPHEo_DZRX', {action: 'create_blog_subscription'}).then(function(token) {

          // add token to form
          jQuery('.js-subscribe-form').eq(index).prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');

          var formEl = jQuery('.js-subscribe-form');

          jQuery.ajax({
            type: 'POST',
            url: formEl.prop('action'),
            accept: {
              javascript: 'application/javascript'
            },
            data: formEl.serialize()
          }).done(function(data) {
            // console.log('submitted');

            var thisForm = jQuery('.js-subscribe-form').eq(index);

            thisForm.addClass('hide');

            if (index == 0) {
              var subscribeMsg     = document.querySelector('.js-subscribe-form-msg');
              var subscribeMsgText = document.createElement('p');

              subscribeMsg.querySelector('h3').textContent = 'Almost there!';
              subscribeMsgText.textContent = "We've sent you an email to confirm your subscription.";
              subscribeMsg.append(subscribeMsgText);
            } else if (index == 1) {
              var successMsgText = document.createElement('h3');

              successMsgText.className = 'no-margin';
              successMsgText.textContent = "We've sent you an email to confirm your subscription.";
              document.querySelector('.form-box').append(successMsgText);
            }
          });
        });
      });
    });
  });

  // jQuery('.js-subscribe-form').submit(function() {
  //   // we stoped it
  //   event.preventDefault();
  //   console.log('test');
  //   var email = jQuery('#email-address').val();

  //   // needs for recaptacha ready
  //   grecaptcha.ready(function() {
  //     // do request for recaptcha token
  //     // response is promise with passed token
  //     grecaptcha.execute('6LfUD_YUAAAAAO5FOQgHwsQSEMzOZYEPHEo_DZRX', {action: 'create_blog_subscription'}).then(function(token) {

  //       // add token to form
  //       jQuery('.js-subscribe-form').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');

  //       var formEl = jQuery('.js-subscribe-form');
  //       var submitButton = jQuery('input[type=submit]', formEl);

  //       jQuery.ajax({
  //         type: 'POST',
  //         url: formEl.prop('action'),
  //         accept: {
  //           javascript: 'application/javascript'
  //         },
  //         data: formEl.serialize()
  //       }).done(function(data) {
  //         console.log('submitted');
  //         // subscribeForm.classList.add('hide');
  //         // document.querySelector('.js-subscribe-form-intro-msg').classList.add('hide');
  //         // document.querySelector('.js-subscribe-form-submitted-msg').classList.add('show');
  //       });
  //     });
  //   });
  // });

});