jQuery(document).ready(function() {
  jQuery('.js-demo-form').validate({
    errorClass  : 'error-msg',
    errorElement: 'span'
  });

  jQuery.each(jQuery('.js-demo-form input, .js-demo-form select'), function(index, control) {
    jQuery(control).focusout(function() {
      // if (jQuery('.js-demo-form').validate().element(this)) {
      //   // Code for show a valid message or remove a invalid message
      // } else {
      //   // Code for show a invalid message
      // }

      jQuery('.js-demo-form').validate().element(this);
    });
  });

  jQuery('.append-user-id').each(function(index) {
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
});