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
