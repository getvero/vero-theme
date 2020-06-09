jQuery(document).ready(function() {
  if (document.body.classList.contains('pricing')) {
    var pricingSlider = document.querySelector('.js-pricing-customer-slider');

    var allSliderRanges = {
      'min'   : [2000, 1000],
      '33.33%': [15000, 1000],
      '66.66%': [75000, 1000],
      'max'   : 250000
    };

    noUiSlider.create(pricingSlider, {
      start  : [2000],
      connect: 'lower',
      step   : 1000,
      range  : allSliderRanges,
      pips   : {
        mode   : 'values',
        values : [2000, 15000, 75000, 250000],
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
    });

    var monthLinks  = document.querySelectorAll('.js-overage-calculator');
    var annualLinks = document.querySelectorAll('.js-overage-calculator-annual');

    planSwitcher(monthLinks);
    planSwitcher(annualLinks);

    // Work out discount
    function annualDiscount(price) {
      return (price * 12) * 0.9;
    }

    // Switch the fixed pricing to monthly or annual
    var pricingFreqText = document.querySelectorAll('.js-pricing-frequency');

    var pricingPlanPrice = document.querySelector('.js-pricing-plan-price');

    function pricingSwitcher(links, index) {
      monthAnnual(links);

      if (links == annualLinks) {
        // Set the annual price values
        pricingPlanPrice.textContent = numberFormat.to(annualDiscount(pricingPlans[index].price));
      } else {
        // Set the monthly price values
        pricingPlanPrice.textContent = pricingPlans[index].price;
      }
    }

    function monthAnnual(links) {
      var str;

      if (links == annualLinks) {
        str = '/yr';
      } else {
        str = '/mo';
      }

      for (const el of pricingFreqText) {
        el.textContent = str;
      }
    }

    var pricingPlanName     = document.querySelector('.js-pricing-plan-name');

    // Switch overage calculator based on plan
    function planSwitcher(links) {
      for (const [index, el] of links.entries()) {
        el.addEventListener('click', function() {
          openOverageCalculator();

          pricingSwitcher(links, index);

          // Update values when moving slider
          pricingSlider.noUiSlider.on('update', function (values, handle) {
            var currentCustomers = numberFormat.from(pricingSlider.noUiSlider.get())
            var additionalCustomers = currentCustomers - pricingPlans[index].customers;

            // Additional customers
            pricingAdditionalCustomersValue.textContent = numberFormat.to(additionalCustomers);

            // Divide additional customers by 100 to get the price easier
            additionalCustomers = additionalCustomers * 0.001;

            var additionPrice = additionalCustomers * pricingPlans[index].overage_rate;

            if (links == annualLinks) {
              // Additional price
              pricingAdditionalPriceValue.textContent = numberFormat.to(annualDiscount(additionPrice));

              // Total cost
              pricingTotalCost.textContent = numberFormat.to(numberFormat.from(pricingAdditionalPriceValue.textContent) + (annualDiscount(pricingPlans[index].price)));
            } else {
              // Additional price
              pricingAdditionalPriceValue.textContent = numberFormat.to(additionPrice);

              // Total cost
              pricingTotalCost.textContent = numberFormat.to(numberFormat.from(pricingAdditionalPriceValue.textContent) + pricingPlans[index].price);
            }
          });

          var planValue = [];
          var formatTest = {
            decimals: 0,
            thousand: ',',
            suffix  : 'k',
            encoder: function(value) {
              return value / 1000;
            }
          };

          pricingSlider.removeAttribute('disabled');

          if (pricingPlans[index].name == 'Starter') {
            allSliderRanges = {
              'min': [2000, 1000],
              '33.33%': [15000, 1000],
              '66.66%': [75000, 1000],
              'max': 250000
            };

            planValue = [2000, 15000, 75000, 250000]
          } else if (pricingPlans[index].name == 'Pro') {
            allSliderRanges = {
              'min': [10000, 1000],
              '50%': [125000, 1000],
              'max': 250000
            };

            planValue = [10000, 125000, 250000]
          } else if (pricingPlans[index].name == 'Growth') {
            allSliderRanges = {
              'min': [75000, 1000],
              '50%': [150000, 1000],
              'max': 250000
            };

             planValue = [75000, 150000, 250000]
          } else if (pricingPlans[index].name == 'Enterprise') {
            pricingSlider.setAttribute('disabled', true);

            allSliderRanges = {
              'min': [200000, 1000],
              '50%': [225000, 1000],
              'max': 250000
            };

            planValue = [200000, 225000, 250000]

            formatTest = {
              decimals: 0,
              thousand: ',',
              suffix  : 'k',
              encoder: function(value) {
                return value / 1000;
              }
              ,
              edit: function(value, original) {
                if (original == 250000) {
                  return value + '+';
                } else {
                  return value;
                }
              }
            }
          }

          // Update slider range based on customers per plan
          pricingSlider.noUiSlider.updateOptions({
            start: 0,
            range: allSliderRanges,
            pips: {
              mode   : 'values',
              values : planValue,
              density: 100,
              stepped: true,
              format : wNumb(formatTest)
            }
          });

          // Set the slider value
          pricingSlider.noUiSlider.set(pricingPlans[index].customers);

          // Set the fixed plan and monthly price value on switching plans
          pricingPlanName.textContent  = pricingPlans[index].name;
        });
      }
    }

    function openOverageCalculator() {
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

      closeOverageCalculator();
    }

    function closeOverageCalculator() {
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

  var resourcesHeader            = document.querySelector('.js-resources-header');
  var openResourcesSubscibeForm  = document.querySelector('.js-open-resources-subscribe-form');
  var closeResourcesSubscibeForm = document.querySelector('.js-close-resources-subscribe-form');

  if (resourcesHeader) {
    // Open subscribe form
    openResourcesSubscibeForm.addEventListener('click', function() {
      resourcesHeader.classList.add('is-active');
    });

    // Close subscribe form
    closeResourcesSubscibeForm.addEventListener('click', function() {
      var formActive = resourcesHeader.classList.contains('is-active');

      if (formActive) {
        resourcesHeader.classList.remove('is-active');
      }
    });
  }

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

  // Add lax to Drag and Drop
  if (document.body.classList.contains('drag-and-drop')) {
    window.onload = function() {
      lax.setup() // init

      const updateLax = () => {
        lax.update(window.scrollY)
        window.requestAnimationFrame(updateLax)
      }

      window.requestAnimationFrame(updateLax)
    }
  }

});