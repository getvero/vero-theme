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

  // Pricing Slider
  if ( jQuery('body').hasClass('pricing') ) {
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

  var subscribeBlogInline;
  var subscribeBlog2;

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