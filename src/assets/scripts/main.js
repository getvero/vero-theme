jQuery(window).scroll(function() {
  var header          = jQuery('.nav-primary');
  var scroll          = jQuery(window).scrollTop();

  if (scroll > 0) {
    header.addClass('sticky');
  } else {
    header.removeClass('sticky');
  }
});

jQuery(document).ready(function() {
  // Responsive marketing menu
  jQuery('.nav-primary-label').on('click', function() {
    if (!jQuery('.nav-primary-check').prop('checked')) {
      jQuery('.menu-primary > .menu-item-has-children > .sub-menu').addClass('hide');
    }
  });

  jQuery('.menu-primary > .menu-item-has-children').on('click', function() {
    jQuery(this).children('.sub-menu').toggleClass('hide');

    jQuery(this).children('.sub-menu').toggleClass('flex');
  });

  // Responsive resources menu
  var isFixed   = false;
  var menuClone = jQuery('.js-category-toggle').clone();

  jQuery('.js-category-toggle').on('click', function() {
    var isActive = jQuery('js-category-toggle.is-active').length > 0;

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

  // Form validation defaults
  jQuery.validator.setDefaults({
    errorClass  : 'error-msg',
    errorElement: 'span'
  });

  // Blog subscribe form validation
  jQuery('.js-subscribe-form').validate();

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

              var subscribeMsg     = document.querySelector('.js-subscribe-form-msg');

              subscribeMsg.querySelector('h3').textContent = "We've sent you an email to confirm your subscription";
            });
          }
        });
      });
    });
  });

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

      var emailFieldVal = jQuery(self).find('.form-control').val();
      var validateMsg = jQuery(self).children('.js-home-contact-msg');

      if (emailFieldVal == '') {
        validateMsg.addClass('is-active');
        validateMsg.text('Please enter your email address');
      } else if (!validEmail(emailFieldVal)) {
        validateMsg.addClass('is-active');
        validateMsg.text('Please enter a valid email address');
      } else {
        var formEl = jQuery(self);
        jQuery.ajax({
          type: 'POST',
          url: formEl.prop('action'),
          accept: {
            javascript: 'application/javascript'
          },
          data: formEl.serialize()
        }).done(function(data) {
          // Redirect
          if (jQuery(self).is('[data-url]')) {
            // attribute exists
            window.location.href = 'https://app.getvero.com' + jQuery(self).data('url') + '?email=' + jQuery(self).find("input[name='email']").val();
          } else {
            // attribute does not exist
            window.location.href = 'https://app.getvero.com/signup?email=' + jQuery(self).find("input[name='email']").val();
          }
        });
      }

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
