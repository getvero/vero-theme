jQuery(window).load(function(){
  jQuery('pre.okaidia').find('code').addClass('okaidia');
});

var isFixed         = false;

jQuery(window).scroll(function() {
  // Sticky header
  var header          = jQuery('.page .nav-primary');
  var resourcesHeader = jQuery('.js-resources-sidebar');
  var scroll          = jQuery(window).scrollTop();

  if (scroll >= 10) {
    header.addClass('sticky');
    resourcesHeader.css('top', header.outerHeight());
    // console.log('Stick');
  } else {
    header.removeClass('sticky');
    resourcesHeader.css('top', 'auto');
    // console.log('Unstick');
  }

  // Sticky table of contents
  // if ( jQuery('body.single').length > 0 ) {
  //   var entryContentOffset = jQuery('.entry-content').offset().top;
  //   var entryFooterOffset  = jQuery('.entry-footer').offset().top;
  //   var toc                = jQuery('.table-of-contents');
  //   var shouldBeFixed      = scroll + 100 > entryContentOffset;

  //   if ( shouldBeFixed && !isFixed ) {
  //     toc.addClass('is-visible')
  //     isFixed = true;
  //   } else if ( !shouldBeFixed && isFixed ) {
  //     toc.removeClass('is-visible')
  //     isFixed = false;
  //   } else if ( scroll > entryFooterOffset && isFixed ) {
  //     toc.removeClass('is-visible')
  //     isFixed = false;
  //   }
  // }
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

jQuery(document).ready(function() {
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
        jQuery('.js-enquire-intro-menu').hide();
        jQuery('.js-thanks-menu').show();
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
  jQuery('.js-category-toggle').on('click', function() {
    var textCont =  jQuery(this).text();

    if (textCont == 'Menu') {
      jQuery('.js-resources-menu').addClass('is-visible');
      jQuery(this).addClass('is-active');
      jQuery(this).text('Close');
    } else {
      jQuery('.js-resources-menu').removeClass('is-visible');
      jQuery(this).removeClass('is-active');
      jQuery(this).text('Menu');
    }
  });

  // Open subscribe form
  var form       = jQuery('.js-resources-menu-footer');

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