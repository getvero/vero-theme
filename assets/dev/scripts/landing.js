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