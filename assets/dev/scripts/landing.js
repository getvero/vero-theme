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
      range  : allSliderRanges
    });

    var pricingPlans = [{
      'name'        : 'Starter',
      'customers'   : 2000,
      'messages'    : 10000,
      'data_points' : 160000,
      'price'       : 49,
      'annual_price': 529,
      'overage_rate': 18
    }, {
      'name'        : 'Pro',
      'customers'   : 15000,
      'messages'    : 75000,
      'data_points' : 1200000,
      'price'       : 199,
      'annual_price': 2149,
      'overage_rate': 8
    }, {
      'name'        : 'Growth',
      'customers'   : 75000,
      'messages'    : 375000,
      'data_points' : 6000000,
      'price'       : 499,
      'annual_price': 5389,
      'overage_rate': 5
    }, {
      'name'        : 'Enterprise',
      'customers'   : 250000,
      'messages'    : 1250000,
      'data_points' : 20000000,
      'price'       : 1299,
      'annual_price': 14029,
      'overage_rate': 4
    }, {
      'name'        : 'Enterprise 2',
      'customers'   : 750000,
      'messages'    : 3750000,
      'data_points' : 60000000,
      'price'       : 1799,
      'annual_price': 19429,
      'overage_rate': 2
    }, {
      'name'        : 'Enterprise 3',
      'customers'   : 1250000,
      'messages'    : 6250000,
      'data_points' : 100000000,
      'price'       : 2499,
      'annual_price': 26989,
      'overage_rate': 1.80
    }, {
      'name'        : 'Enterprise 4',
      'customers'   : 2500000,
      'messages'    : 12500000,
      'data_points' : 200000000,
      'price'       : 4499,
      'annual_price': 48589,
      'overage_rate': 1.60
    }, {
      'name'        : 'Enterprise 5',
      'customers'   : 5000000,
      'messages'    : 25000000,
      'data_points' : 400000000,
      'price'       : 7499,
      'annual_price': 80989,
      'overage_rate': 1.40
    }];

    var numberFormat = wNumb({
      decimals: 0,
      thousand: ','
    });

    var monthlyLinks  = document.querySelectorAll('.js-overage-calculator');
    var annualLinks   = document.querySelectorAll('.js-overage-calculator-annual');
    var dropdownLinks = document.querySelectorAll('.js-overage-dropdown');

    planSwitcher(monthlyLinks);
    planSwitcher(annualLinks);
    planSwitcher(dropdownLinks);

    var pricingSliderValue        = document.querySelector('.js-pricing-slider-value');
    var pricingMessagesValue      = document.querySelector('.js-pricing-messages-value')
    var pricingEventsTrackedValue = document.querySelector('.js-pricing-events-tracked-value')

    var basePlanPrice = document.querySelector('.js-pricing-plan-price');

    var pricingAdditionalCustomersValue = document.querySelector('.js-pricing-additional-customers');
    var pricingAdditionalPriceValue     = document.querySelector('.js-pricing-additional-price');
    var pricingTotalCost                = document.querySelector('.js-pricing-total-cost');

    var pricingPlanName = document.querySelectorAll('.js-pricing-plan-name');

    var overrageMsg = document.querySelector('.js-pricing-overage-msg');

    // Switch overage calculator based on plan
    function planSwitcher(links) {
      for (const [index, el] of links.entries()) {
        el.addEventListener('click', function() {
          // Remove class for pricing dropdown
          pricingDropdown.classList.remove('fade');

          if (links == monthlyLinks || links == annualLinks) {
            openOverageCalculator();

            priceSwitcher(links, index);
          } else {
            if (document.querySelector('.js-pricing-frequency').textContent == '/yr') {
              // Set the base annual price values
              basePlanPrice.textContent = numberFormat.to(annualPrice(pricingPlans[index].price));
            } else {
              // Set the base monthly price values
              basePlanPrice.textContent = numberFormat.to(pricingPlans[index].price);
            }
          }

          for (const el of dropdownLinks) {
            el.classList.remove('is-active');
          }

          dropdownLinks[index].classList.add('is-active');

          // Add overage rate
          var overageRates = document.querySelectorAll('.js-overage-rate');

          for (const el of overageRates) {
            el.textContent = pricingPlans[index].overage_rate;
          }

          // Update values when moving slider
          pricingSlider.noUiSlider.on('update', function (values, handle) {
            var currentCustomers    = numberFormat.from(pricingSlider.noUiSlider.get())
            var additionalCustomers = currentCustomers - pricingPlans[index].customers;

            // Set handle value
            if (currentCustomers == 10000000) {
              pricingSliderValue.textContent = values[handle] + '+';
            } else {
              pricingSliderValue.textContent = values[handle];
            }

            // Set additional customers value
            pricingAdditionalCustomersValue.textContent = numberFormat.to(additionalCustomers);

            // Divide additional customers by 1000 to get the price easier
            var addCustomerRate = additionalCustomers * 0.001;

            var additionPrice = addCustomerRate * pricingPlans[index].overage_rate;

            // Set messages values
            pricingMessagesValue.textContent = numberFormat.to(pricingPlans[index].messages + (addCustomerRate * 5000));

            // Set events tracked values
            pricingEventsTrackedValue.textContent = numberFormat.to(pricingPlans[index].data_points + (addCustomerRate * 80000));

            // Set Total prices depending on annual or monthly
            if (document.querySelector('.js-pricing-frequency').textContent == '/yr') {
              // Additional price
              pricingAdditionalPriceValue.textContent = numberFormat.to(annualPrice(additionPrice));

              // Total cost
              pricingTotalCost.textContent = numberFormat.to(numberFormat.from(pricingAdditionalPriceValue.textContent) + annualPrice(pricingPlans[index].price));
            } else {
              // Additional price
              pricingAdditionalPriceValue.textContent = numberFormat.to(additionPrice);

              // Total cost
              pricingTotalCost.textContent = numberFormat.to(numberFormat.from(pricingAdditionalPriceValue.textContent) + pricingPlans[index].price);
            }

            // Messaginging
            if (index == 7) {

              if (numberFormat.from(values[handle]) == 10000000) {
                overrageMsg.classList.add('is-active');
                overrageMsg.textContent = "We offer plans scaling into the 10s of millions. Please get in touch, we'd love to learn about your needs.";
              } else {
                overrageMsg.classList.remove('is-active');
                overrageMsg.textContent = '';
              }

            } else {

              if (document.querySelector('.js-pricing-frequency').textContent == '/yr') {
                if (numberFormat.from(pricingTotalCost.innerHTML) > pricingPlans[index + 1].annual_price) {
                  overrageMsg.classList.add('is-active');
                  overrageMsg.textContent = "You could consider updating to the next tier.";
                } else {
                  overrageMsg.classList.remove('is-active');
                  overrageMsg.textContent = '';
                }
              } else {
                if (numberFormat.from(pricingTotalCost.innerHTML) > pricingPlans[index + 1].price) {
                  overrageMsg.classList.add('is-active');
                  overrageMsg.textContent = "You could consider updating to the next tier.";
                } else {
                  overrageMsg.classList.remove('is-active');
                  overrageMsg.textContent = '';
                }
              }

            }

          });

          var planValue = [];

          if (pricingPlans[index].name == 'Starter') {
            allSliderRanges = {
              'min'   : [2000, 1000],
              '33.33%': [15000, 1000],
              '66.66%': [75000, 1000],
              'max'   : 250000
            };

            planValue = [2000, 15000, 75000, 250000]
          } else if (pricingPlans[index].name == 'Pro') {
            allSliderRanges = {
              'min'   : [15000, 1000],
              '33.33%': [100000, 1000],
              '66.66%': [200000, 1000],
              'max'   : 250000
            };

            planValue = [15000, 125000, 250000]
          } else if (pricingPlans[index].name == 'Growth') {
            allSliderRanges = {
              'min'   : [75000, 1000],
              '33.33%': [150000, 1000],
              '66.66%': [200000, 1000],
              'max'   : 250000
            };

             planValue = [75000, 150000, 250000]
          } else if (pricingPlans[index].name == 'Enterprise') {
            allSliderRanges = {
              'min': [250000, 1000],
              '25%': [450000, 1000],
              '50%': [750000, 1000],
              '75%': [2500000, 1000],
              'max': 5000000
            };

            planValue = [250000, 450000, 750000, 2500000, 5000000]
          } else if (pricingPlans[index].name == 'Enterprise 2') {
            allSliderRanges = {
              'min': [750000, 1000],
              '25%': [1000000, 1000],
              '50%': [2500000, 1000],
              '75%': [4000000, 1000],
              'max': 5000000
            };

            planValue = [750000, 1000000, 2500000, 4000000, 5000000]
          } else if (pricingPlans[index].name == 'Enterprise 3') {
            allSliderRanges = {
              'min'   : [1250000, 1000],
              '33.33%': [3000000, 1000],
              '66.66%': [4250000, 1000],
              'max'   : 5000000
            };

            planValue = [1250000, 3000000, 4250000, 5000000]

          } else if (pricingPlans[index].name == 'Enterprise 4') {
            allSliderRanges = {
              'min': [2500000, 1000],
              '50%': [3750000, 1000],
              'max': 5000000
            };

            planValue = [2500000, 3750000, 5000000]
          } else if (pricingPlans[index].name == 'Enterprise 5') {
            allSliderRanges = {
              'min': [5000000, 1000],
              '50%': [7500000, 1000],
              'max': 10000000
            };

            planValue = [5000000, 7500000, 10000000]
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
              format : wNumb({
                decimals: 0,
                thousand: ',',
                suffix  : 'k',
                encoder: function(value) {
                  return value / 1000;
                },
                edit: function(value, original) {
                  if (original >= 1000000) {
                    return original / 1000000 + 'M';
                  } else {
                    return value;
                  }
                }
              })
            },
            format: wNumb({
              decimals: 0,
              thousand: ','
            })
          });

          // Set the slider value
          pricingSlider.noUiSlider.set(pricingPlans[index].customers);

          setPlanName(index);

          // Switch button context
          btnSwitcher();

          function btnSwitcher() {
            var btns = document.querySelectorAll('.js-pricing-btn');

            if (index == 0 || index == 1 || index == 2) {
              btns[0].classList.remove('hide');
              btns[0].classList.add('show');

              btns[1].classList.remove('show');
              btns[1].classList.add('hide');
            } else {
              btns[0].classList.remove('show');
              btns[0].classList.add('hide');

              btns[1].classList.remove('hide');
              btns[1].classList.add('show');
            }
          }

        });
      }
    }

    // Work out annual price
    function annualPrice(price) {
      return (price * 12) * 0.9;
    }

    // Switch the fixed pricing to monthly or annual
    function priceSwitcher(links, index) {
      monthAnnual(links);

      if (document.querySelector('.js-pricing-frequency').textContent == '/yr') {
        // Set the base annual price values
        basePlanPrice.textContent = numberFormat.to(annualPrice(pricingPlans[index].price));
      } else {
        // Set the base monthly price values
        basePlanPrice.textContent = numberFormat.to(pricingPlans[index].price);
      }
    }

    function monthAnnual(links) {
      var pricingFreqText = document.querySelectorAll('.js-pricing-frequency');
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

    var overlay = document.querySelector('.js-overlay');

    overlay.addEventListener('click', function(event) {
      // If the click happened inside the modal, do nothing
      if (event.target.closest('.js-modal') && !event.target.closest('.js-overlay-close')) return;

      closeOverageCalculator();
    }, false);

    function openOverageCalculator() {
      var overlay = document.querySelector('.js-overlay');
      var modal   = document.querySelector('.js-modal');

      if (!overlay.classList.contains('is-active')) {
        document.body.classList.add('overflow-hidden');

        overlay.classList.add('is-active');
        modal.classList.add('is-active');
      }
    }

    function closeOverageCalculator() {
      var overlay = document.querySelector('.js-overlay');
      var modal   = document.querySelector('.js-modal');

      overlay.classList.remove('is-active');
      modal.classList.remove('is-active');

      document.body.classList.remove('overflow-hidden');

      pricingSlider.noUiSlider.reset();
    }

    // Open dropdown
    var pricingDropdown = document.querySelector('.js-pricing-plan-dropdown');
    var pricingPlanLink = document.querySelector('.js-pricing-plan-link');

    overlay.addEventListener('click', function(event) {
      if (!event.target.closest('.js-pricing-plan-dropdown')) {
        if (pricingDropdown.classList.contains('fade')) {
          pricingDropdown.classList.remove('fade')
        }
      } else {
        if (pricingDropdown.classList.contains('fade')) {
          pricingDropdown.classList.remove('fade')
        } else {
          pricingDropdown.classList.add('fade')
        }
      }

      if (event.target.closest('.js-pricing-plan-link')) {
        if (pricingDropdown.classList.contains('fade')) {
          pricingDropdown.classList.remove('fade')
        } else {
          pricingDropdown.classList.add('fade')
        }
      }
    }, false);

    // Set plan name
    function setPlanName(index) {
      for (const el of pricingPlanName) {
        el.textContent = pricingPlans[index].name;
      }
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

  // var resourcesHeader            = document.querySelector('.js-resources-header');
  // var openResourcesSubscibeForm  = document.querySelector('.js-open-resources-subscribe-form');
  // var closeResourcesSubscibeForm = document.querySelector('.js-close-resources-subscribe-form');

  // if (resourcesHeader) {
  //   // Open subscribe form
  //   openResourcesSubscibeForm.addEventListener('click', function() {
  //     resourcesHeader.classList.add('is-active');
  //   });

  //   // Close subscribe form
  //   closeResourcesSubscibeForm.addEventListener('click', function() {
  //     var formActive = resourcesHeader.classList.contains('is-active');

  //     if (formActive) {
  //       resourcesHeader.classList.remove('is-active');
  //     }
  //   });
  // }

  // Blog subscribe form validation
  jQuery('.js-subscribe-form').validate({
    errorClass  : 'error-msg',
    errorElement: 'span'
  });

  jQuery.each(jQuery('.js-subscribe-form input'), function(index, control) {
    jQuery(control).focusout(function() {
      jQuery('.js-subscribe-form').validate().element(this);
    });
  });

  function validEmail(email) {
    var regex = /^.+@.+\..+$/;
    return regex.test(email);
  }

  // Blog subscribe form
  jQuery('.js-subscribe-form').each(function(index) {
    jQuery(this).on('submit', function() {
      event.preventDefault();

      try {anonymous_id = window.analytics._user.anonymousId();}
      catch {}

      if(typeof anonymous_id !== 'undefined'){
        // Append the Segment.com anonymous_id
        jQuery('<input />').attr('type', 'hidden')
        .attr('name', 'anonymous_id')
        .attr('value', anonymous_id)
        .appendTo('.js-subscribe-form');
      }

      // Append page path and URL
      jQuery('<input />').attr('type', 'hidden')
        .attr('name', 'page_path')
        .attr('value', window.location.pathname)
        .appendTo('.js-subscribe-form');
      jQuery('<input />').attr('type', 'hidden')
        .attr('name', 'page_url')
        .attr('value', window.location.href)
        .appendTo('.js-subscribe-form');

      // needs for recaptacha ready
      grecaptcha.ready(function() {
        // do request for recaptcha token
        // response is promise with passed token
        grecaptcha.execute('6LfUD_YUAAAAAO5FOQgHwsQSEMzOZYEPHEo_DZRX', {action: 'create_blog_subscription'}).then(function(token) {

          // add token to form
          jQuery('.js-subscribe-form').eq(index).prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');

          var formEl        = jQuery('.js-subscribe-form');
          var emailFieldVal = formEl.find('.form-control').val();

          if (emailFieldVal && validEmail(emailFieldVal)) {
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
          }
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

  jQuery('.js-signup-form').each(function(index) {
    var self = this;

    jQuery(self).on('click', '.btn', function(e) {
      var subEl = jQuery(e.target);

      event.preventDefault();

      try {anonymous_id = window.analytics._user.anonymousId();}
      catch {}

      if(typeof anonymous_id !== 'undefined'){
        // Append the Segment.com anonymous_id
        jQuery('<input />').attr('type', 'hidden')
        .attr('name', 'anonymous_id')
        .attr('value', anonymous_id)
        .appendTo(self);
      }

      // Append page path and URL
      jQuery('<input />').attr('type', 'hidden')
        .attr('name', 'page_path')
        .attr('value', window.location.pathname)
        .appendTo(self);
      jQuery('<input />').attr('type', 'hidden')
        .attr('name', 'page_url')
        .attr('value', window.location.href)
        .appendTo(self);

      // Append the button that was clicked
      jQuery(self).append(
        jQuery('<input type="hidden">').attr( {
          name: 'submit_button',
          value: subEl.val()
        })
      );

      var formEl = jQuery(self);
      jQuery.ajax({
        type: 'POST',
        url: formEl.prop('action'),
        accept: {
          javascript: 'application/javascript'
        },
        data: formEl.serialize()
      }).done(function(data) {
        var emailFieldVal = jQuery(self).find('.form-control').val();
        var validateMsg = jQuery(self).children('.js-home-contact-msg');

        // Redirect depending on submit submit_button
        if (emailFieldVal == '') {
          validateMsg.addClass('is-active');
          validateMsg.text('Please enter your email address');
        } else if (!validEmail(emailFieldVal)) {
          validateMsg.addClass('is-active');
          validateMsg.text('Please enter a valid email address');
        } else if (subEl.val() == 'Start a free trial') {
          window.location.href = 'https://app.getvero.com/signup?email=' + jQuery(self).find("input[name='email']").val();
        }
      });
    });
  });

  jQuery('.append-user-id').submit(function(e) {
    var self = this;

    try {anonymous_id = window.analytics._user.anonymousId();}
    catch {}

    if(typeof anonymous_id !== 'undefined'){
      // Append the Segment.com anonymous_id
      jQuery('<input />').attr('type', 'hidden')
      .attr('name', 'anonymous_id')
      .attr('value', anonymous_id)
      .appendTo(self);
    }

    // Append page path and URL
    jQuery('<input />').attr('type', 'hidden')
      .attr('name', 'page_path')
      .attr('value', window.location.pathname)
      .appendTo(self);
    jQuery('<input />').attr('type', 'hidden')
      .attr('name', 'page_url')
      .attr('value', window.location.href)
      .appendTo(self);
  });

   // Slide out blog banner
  if (document.body.classList.contains('single')) {
    let promoSticky = document.querySelector('.js-post-promo-sticky');

    function onScroll() {
      let scrollTop            = window.scrollY;
      let docHeight            = document.body.offsetHeight;
      let winHeight            = window.innerHeight;
      let scrollPercent        = scrollTop / (docHeight - winHeight);
      let scrollPercentRounded = Math.round(scrollPercent * 100);

      if (scrollPercentRounded >= 25) {
        promoSticky.classList.add('is-active');
      } else {
        promoSticky.classList.remove('is-active');
      }
    }

    window.addEventListener('scroll', onScroll)

    // Listen to all clicks on the document
    document.addEventListener('click', function(event) {
      // If the event target doesn't match bail
      if (!event.target.closest('.js-post-promo-sticky-close')) return;

      // Otherwise, run your code...
      promoSticky.classList.remove('is-active');

      window.setTimeout(function() {
        promoSticky.remove();
      }, 400);
    }, false);
  }
});
