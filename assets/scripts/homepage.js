// Generated by CoffeeScript 1.7.1
(function() {
  var controller;

  window.dotsAndLines = function() {};

  window.blink = function() {
    jQuery('.active').delay(2000).fadeTo(100, 0.5).delay(100).fadeTo(100, 1, blink);
  };

  window.ellipses = function(elem) {
    var count;
    count = 0;
    window.loadingInterval = setInterval((function() {
      var dots;
      count++;
      dots = new Array(count % 10).join('.');
      elem.html('Listening.' + dots);
    }), 500);
  };

  window.getTagColor = function(type) {
    switch (type) {
      case 'action':
        return 'blue';
      case 'email':
        return 'green';
      default:
        return 'yellow';
    }
  };

  window.updateStatus = function(status, message) {
    var newBubble;
    clearInterval(window.loadingInterval);
    newBubble = jQuery("<span class='bubble " + status + "'></span>");
    jQuery("#status-update").html('').append(newBubble).append(message);
    return setTimeout((function() {
      window.ellipses(jQuery("#status-update"));
    }), 3000);
  };

  window.addWaitingTag = function() {
    var newAction, newDescription, newTag;
    newTag = jQuery("<span class='tag active yellow'></span>").html("WAITING");
    newDescription = jQuery("<p></p>").html("Keep browsing...");
    newAction = jQuery("<div class='action waiting'></div>").append(newTag).append(newDescription);
    jQuery('#vero-live .wrap .inside').append(newAction.css({
      opacity: 0,
      display: 'inline-block'
    }).animate({
      opacity: 1
    }, 1500));
    return newAction;
  };

  window.animateTracker = function() {
    var sizeScene, tween;
    tween = TweenMax.to('#vero-live-container', 0.5, {
      width: "100%"
    });
    sizeScene = new ScrollScene({
      triggerElement: '#container-trigger'
    }).setTween(tween).addTo(controller);
    return jQuery("#vero-live-sticky").sticky({
      topSpacing: 0
    });
  };

  window.trackAction = function(type, text) {
    var newAction, newDescription, newTag, status, totalWidth;
    if (type === 'action') {
      status = 'Successfully tracked action';
      window.updateStatus('success', status);
    } else if (type === 'email') {
      status = 'Successfully sent email';
      window.updateStatus('success', status);
    }
    jQuery('.waiting').remove();
    jQuery('.active').removeClass('active');
    newTag = jQuery("<span class='tag'></span>").addClass(window.getTagColor(type)).html(type);
    newDescription = jQuery("<p></p>").html(text);
    newAction = jQuery("<div class='action'></div>").append(newTag).append(newDescription);
    jQuery('#vero-live .wrap .inside').append(newAction.css({
      opacity: 0,
      display: 'inline-block'
    }).animate({
      opacity: 1
    }, 1500));
    totalWidth = 0;
    jQuery('#vero-live .wrap .inside .action').each(function(index) {
      totalWidth += parseInt(jQuery(this).width(), 10);
    });
    if (totalWidth > jQuery('#vero-live .inside').width()) {
      return jQuery('#vero-live .wrap .inside ').first().css('text-align', 'right');
    } else {
      return jQuery('#vero-live .wrap .inside ').first().css('text-align', 'left');
    }
  };

  controller = void 0;

  jQuery(document).ready(function() {
    jQuery("#hero form").submit(function(e) {
      var email, top;
      email = jQuery("#hero form #email").val();
      top = jQuery("#hero");
      top.find("h2").html("Watch the live tracker below to see how Vero tracks visitor behavior and triggers emails.");
      top.find("form").animate({
        opacity: 0
      }, 1500, function() {
        top.find("form").remove();
        return window.trackAction('action', email + ' did <em>Completed home page form</em>');
      });
      setTimeout((function() {
        window.trackAction('email', 'Sent email <em>Thanks for trying Vero!</em>');
      }), 6000);
      return false;
    });
    controller = new ScrollMagic();
    window.animateTracker();
    return window.ellipses(jQuery("#status-update"));
  });

}).call(this);
