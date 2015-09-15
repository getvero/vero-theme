// Generated by CoffeeScript 1.8.0
(function() {
  var calculatePrice, customePrice, hideGuideSidebar, renderPrice, requestDemo, validateForm;

  jQuery(function() {
    return jQuery(document).on('click', ".vscroller", function(e) {
      var target;
      e.preventDefault();
      target = jQuery(this).attr('href');
      return jQuery('body').animate({
        scrollTop: jQuery(target).offset().top
      }, 600);
    });
  });

  renderPrice = function(price) {
    var monthlyPrice, yearlyPrice;
    monthlyPrice = numeral(price).format("jQuery0,0");
    yearlyPrice = numeral(price * 10).format("jQuery0,0");
    jQuery(".monthly-price").text("$" + monthlyPrice);
    jQuery(".yearly-price").text("$" + yearlyPrice);
  };

  calculatePrice = function(emails, customers) {
    var price;
    price = 1799;
    emails = parseInt(emails) || 2500000;
    customers = parseInt(customers) || 2000000;
    if (emails > 2500000) {
      price += (emails - 2500000) / 1000 * 0.12;
    }
    if (customers > 2000000) {
      price += (customers - 2000000) / 1000 * 0.90;
    }
    return price;
  };

  customePrice = function() {
    var price;
    price = calculatePrice(jQuery("#monthly-email").val(), jQuery("#customers").val());
    renderPrice(price);
  };

  jQuery("#monthly-email, #customers").on("keyup", function() {
    customePrice();
  });

  jQuery("#plan").on("change", function() {
    if (jQuery("#plan").val() === "-1") {
      jQuery(".high-volume").show();
      customePrice();
    } else {
      renderPrice(jQuery("#plan").val());
    }
  });

  jQuery("#period").on("change", function() {
    if (jQuery("#plan").val() === "-1") {
      customePrice();
    } else {
      renderPrice(jQuery("#plan").val());
    }
    if (jQuery(this).val() === "1") {
      jQuery(".yearly-discount").show();
    } else {
      jQuery(".yearly-discount").hide();
    }
  });

  validateForm = function() {
    var $company, $email_addr, $emails, $name, $subscribers, ret;
    ret = true;
    if (($name = jQuery("#sender_name")).val() !== '') {
      $name.removeClass('error');
    } else {
      $name.addClass('error');
      ret = false;
    }
    if (($email_addr = jQuery("#sender_email_address")).val() !== '') {
      $email_addr.removeClass('error');
    } else {
      $email_addr.addClass('error');
      ret = false;
    }
    if (($company = jQuery("#sender_company_name")).val() !== '') {
      $company.removeClass('error');
    } else {
      $company.addClass('error');
      ret = false;
    }
    if (($subscribers = jQuery("#sender_subscribers")).val() !== '') {
      $subscribers.removeClass('error');
    } else {
      $subscribers.addClass('error');
      ret = false;
    }
    if (($emails = jQuery("#sender_emails")).val() !== '') {
      $emails.removeClass('error');
    } else {
      $emails.addClass('error');
      ret = false;
    }
    return ret;
  };

  hideGuideSidebar = function() {
    jQuery.cookie('hide_guide_sidebar', 'true', {
      expires: 90
    });
    return jQuery('#sidebar').attr("style", function(i, s) {
      return "display: none !important;";
    });
  };

  requestDemo = function() {
    if (validateForm()) {
      jQuery("#high-volume-sender-form").submit();
      jQuery("#high-volume > .inner").addClass('center-text').html("<h3 style='color:#222;font-weight:bold;'>Thanks for your request!</h3><h4 style='color:#222;padding-bottom:100px;'>We will contact you shortly.</h4>");
      return console.log('success');
    }
  };

  jQuery(function() {
    if (jQuery("#high-volume-sender-form").length) {
      jQuery(document).on('click', '#request-demo', function() {
        requestDemo();
        return false;
      });
    }
    if (jQuery(".price-selection").length) {
      jQuery(document).on('change', '.price-selection', function() {
        var feature, features, monthly, yearly, _i, _len, _results;
        monthly = parseInt(jQuery(this).val());
        yearly = Math.round((monthly * 10) / 12);
        jQuery('.yearly-price').text("$" + yearly);
        jQuery('.monthly-price').text("$" + monthly);
        features = jQuery("[data-pricing]");
        _results = [];
        for (_i = 0, _len = features.length; _i < _len; _i++) {
          feature = features[_i];
          if (jQuery(feature).data('pricing') <= monthly) {
            _results.push(jQuery(feature).removeClass('disable'));
          } else {
            _results.push(jQuery(feature).addClass('disable'));
          }
        }
        return _results;
      });
    }
    return jQuery(document).on("click", ".slider", function(e) {
      var target;
      e.preventDefault();
      target = jQuery(this).attr("href");
      return jQuery("body").animate({
        scrollTop: jQuery(target).offset().top - 90
      }, 600);
    });
  });

  jQuery(function() {
    if (jQuery("#hide-guide-sidebar").length) {
      return jQuery(document).on('click', '#hide-guide-sidebar', function() {
        hideGuideSidebar();
        return false;
      });
    }
  });

  //// Prevent the flash that happens before the font is loaded
  // first, create the object that contains
  // configuration variables
  MTIConfig = {};

  // next, add a variable that will control
  // whether or not FOUT will be prevented
  MTIConfig.EnableCustomFOUTHandler = true // true = prevent FOUT

  //Highlight.js
  jQuery(document).ready(function() {
    jQuery('pre').each(function(i, block) {
      hljs.highlightBlock(block);
    });
  });

  jQuery(document).ready( function(){
    jQuery( 'nav' ).before( '<button class="menu-toggle" role="button" aria-pressed="false"></button>' ); // Add toggles to menus
    jQuery( 'nav .sub-menu' ).before( '<button class="sub-menu-toggle" role="button" aria-pressed="false"></button>' ); // Add toggles to sub menus

    // Show/hide the navigation
    jQuery( '.menu-toggle, .sub-menu-toggle' ).on( 'click', function() {
      var $this = jQuery( this );
      $this.attr( 'aria-pressed', function( index, value ) {
      return 'false' === value ? 'true' : 'false';
    });

    $this.toggleClass( 'activated' );
    $this.next( 'nav, .sub-menu' ).slideToggle( 'fast' );

    });
  });
  
  //Responsive Header
  jQuery(document).ready( function(){
    jQuery( '.nav-menu-toggle' ).on( 'click', function() {
      var textcont =  jQuery( '.nav-menu-toggle' ).text();
      if(textcont == 'Menu'){
        jQuery( '#menu-marketing-navbar-right' ).slideDown();
        jQuery( '.nav-menu-toggle a' ).text('Close');
      }
      else if(textcont == 'Close'){
        jQuery( '#menu-marketing-navbar-right' ).slideUp();
        jQuery( '.nav-menu-toggle a' ).text('Menu');
        jQuery( '#menu-marketing-navbar-right' ).addClass('slid');
      }
    });
  });

  jQuery(window).resize(function(){
    if (jQuery('.nav-menu-toggle a').text() === 'Menu'){
      jQuery( '#menu-marketing-navbar-right').removeAttr('style');
    }
  });

  //Waypoints

  if( jQuery('.single .shares-block')[0] != undefined ) {
    var sharesInView = new Waypoint({
      element: jQuery('.single .shares-block')[0],
      handler: function(){
        jQuery('.single .widget-area').toggleClass('show');
      }
    });
  }

  if( jQuery('.single .subscribe-form')[0] != undefined ) {
    var subscribeInView = new Waypoint({
      element: jQuery('.single .subscribe-form')[0],
      handler: function(){
        jQuery('.single .widget-area').toggleClass('show');
      },
      offset: '100%'
    });
  }

  
}).call(this);
