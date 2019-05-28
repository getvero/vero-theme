jQuery(window).load(function(){
  jQuery('pre.okaidia').find('code').addClass('okaidia');
});

jQuery(document).ready(function() {
  // Load hljs
  if ( jQuery('body.blog').length > 0 || jQuery('body.single').length > 0 || jQuery('body.archive').length > 0 || jQuery('body.search').length > 0 ) {
    hljs.initHighlightingOnLoad();
  }


  // Feature image switcher
  jQuery('.feature-swapper-option').click(function(e){
    var swapTo = jQuery(this).data('swap-to');
    var parentSwapper = jQuery(this).parents('.feature-swapper');
    parentSwapper.find('li.active').removeClass('active');
    jQuery(this).parent('li').addClass('active');
    parentSwapper.find('.active-feature').removeClass('active-feature').addClass('inactive-feature');
    var featureId = '#' + swapTo
    parentSwapper.find(featureId).removeClass('inactive-feature').addClass('active-feature');
  });

});

jQuery(document).ready(function(){
  // Lean Modal triggers
  if ( jQuery('body.home').length > 0 || jQuery('body.pricing').length > 0 ) {
    jQuery('a[rel*=leanModal]').leanModal({
      top        : 80,
      closeButton: '.modal-close'
    });
  }

  if ( jQuery('body.blog').length > 0 || jQuery('body.single').length > 0 || jQuery('body.archive').length > 0 || jQuery('body.search').length > 0 ) {
    jQuery('.js-blog-subscribe-btn').leanModal({
      top        : 300,
      closeButton: '.modal-close'
    });
  }

  if(window.location.hash) {
    var hash = window.location.hash.substring(1);
    if(hash == 'demo') {
      jQuery('#demo-trigger').click();
    }
  }

  // Show blog subscription form
  // jQuery('.js-overlay').on('click', function() {
  //   if (!jQuery(event.target).closest('.js-newsletter').length) {
  //     closeModal();
  //   }
  // });

  jQuery('.js-newsletter-close').on('click', function() {
    closeModal();
  });

  function closeModal() {
    // jQuery('.js-overlay').fadeOut(200);
    jQuery('.js-newsletter').removeClass('show');

    sessionStorage['PopupShown'] = 'yes';
  }

  jQuery(window).scroll(function() {
    if(sessionStorage['PopupShown'] != 'yes') {
      if (jQuery(window).scrollTop() > jQuery('body').height() / 4) {
        // jQuery('.js-overlay').show();
        jQuery('.js-newsletter').addClass('show');
      }
    }
  });

  var validateForm;
  var requestDemo;
  var subscribeBlogHeader;
  var subscribeBlogInline;
  var subscribeBlogFullscreen;

  jQuery('#high-volume-sender-form').submit(function(e) {
    e.preventDefault();
    requestDemo(e);
    return false;
  });

  // Blog header subscribe form
  jQuery('.js-blog-header-form').submit(function(e) {
    e.preventDefault();
    subscribeBlogHeader(e);
    return false;
  });

  // Blog inline subscribe form
  jQuery('.js-blog-subscribe-form').submit(function(e) {
    console.log('Click blog inline subscribe form button');
    e.preventDefault();
    subscribeBlogInline(e);
    return false;
  });

  // Blog fullscreen popup subscribe form
  // jQuery('.js-blog-fs-popup-form').submit(function(e) {
  //   e.preventDefault();
  //   subscribeBlogFullscreen(e);
  //   return false;
  // });

  // Blog popup subscribe form
  jQuery('.js-blog-popup-form').submit(function(e) {
    e.preventDefault();
    subscribeBlogPopup(e);
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

  subscribeBlogHeader = function(e) {
    var url = jQuery('.js-blog-header-form').attr('action');
    jQuery.ajax({
      type: 'POST',
      url : url,
      data: jQuery('.js-blog-header-form').serialize(),
      success: function(data)
      {
        jQuery('.js-blog-header-form').hide();
        jQuery('.js-enquire-intro').hide();
        jQuery('.js-thanks').show();
      }
    });
  };

  // subscribeBlogFullscreen = function(e) {
  //   var url = jQuery('.js-blog-fs-popup-form').attr('action');
  //   jQuery.ajax({
  //     type: 'POST',
  //     url : url,
  //     data: jQuery('.js-blog-fs-popup-form').serialize(),
  //     success: function(data)
  //     {
  //       jQuery('.js-blog-fs-popup-form').hide();
  //       jQuery('.js-policy').hide();
  //       jQuery('.js-enquire-intro-2').hide();
  //       jQuery('.js-thanks-2').show();
  //     }
  //   });
  // };

  subscribeBlogPopup = function(e) {
    var url = jQuery('.js-blog-popup-form').attr('action');
    jQuery.ajax({
      type: 'POST',
      url : url,
      data: jQuery('.js-blog-popup-form').serialize(),
      success: function(data)
      {
        jQuery('.js-blog-popup-form').hide();
        jQuery('.js-policy').hide();
        jQuery('.js-enquire-intro-2').hide();
        jQuery('.js-thanks-2').show();
      }
    });
  };

  subscribeBlogInline = function(e) {
    var url = jQuery('.js-blog-subscribe-form').attr('action');
    jQuery.ajax({
      type: 'POST',
      url : url,
      data: jQuery('.js-blog-subscribe-form').serialize(),
      success: function(data)
      {
        jQuery('.js-blog-subscribe-form').hide();
        jQuery('.js-enquire-intro-3').hide();
        jQuery('.js-thanks-3').show();
      }
    });
  };

});