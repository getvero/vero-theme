jQuery(window).load(function(){
  jQuery('pre.okaidia').find('code').addClass('okaidia');
});

jQuery(document).ready(function(){
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
  jQuery('a[rel*=leanModal]').leanModal({
    top        : 80,
    closeButton: '.modal-close'
  });

  jQuery('.js-blog-subscribe-btn').leanModal({
    top        : 300,
    closeButton: '.modal-close'
  });

  if(window.location.hash) {
    var hash = window.location.hash.substring(1);
    if(hash == 'demo') {
      jQuery('#demo-trigger').click();
    }
  }

  jQuery('#high-volume-sender-form').submit(function(e) {
    e.preventDefault();
    requestDemo(e);
    return false;
  });

  jQuery('.js-blog-subscribe-form').submit(function(e) {
    e.preventDefault();
    subscribeBlog(e);
    return false;
  });

  var validateForm;
  var requestDemo;

  validateForm = function() {
    var company, email_addr, emails, name, subscribers, ret;
    ret = true;
    name = jQuery('#sender_name');
    email_addr = jQuery('#sender_email_address');
    company = jQuery('#sender_company_name');
    subscribers = jQuery('#sender_subscribers');
    emails = jQuery('#sender_emails');

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
    console.log("Trying to validate");
    if (validateForm()) {
      var url = jQuery("#high-volume-sender-form").attr('action');
      jQuery.ajax({
        type: "POST",
        url: url,
        data: jQuery("#high-volume-sender-form").serialize(),
        success: function(data)
        {
           console.log('Demo sent!');
           jQuery("#high-volume-sender-form").hide();
           jQuery("#enquire-intro").hide();
           jQuery("#thanks").show();
        }
      });
    }
  };

  subscribeBlog = function(e) {
    console.log("Trying to validate");
    if (validateForm()) {
      var url = jQuery('.js-blog-subscribe-form').attr('action');
      jQuery.ajax({
        type: "POST",
        url: url,
        data: jQuery('.js-blog-subscribe-form').serialize(),
        success: function(data)
        {
           jQuery('.js-blog-subscribe-form').hide();
           jQuery("#enquire-intro").hide();
           jQuery("#thanks").show();
        }
      });
    }
  };
});