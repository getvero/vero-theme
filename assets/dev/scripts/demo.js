jQuery(document).ready(function() {
  jQuery('.js-demo-form').validate({
    errorClass  : 'error-msg',
    errorElement: 'span'
  });

  jQuery.each(jQuery('.js-demo-form input'), function(index, control) {
    jQuery(control).focusout(function() {
      if (jQuery('.js-demo-form').validate().element(this)) {
          //Code for show a valid message or remove a invalid message
      } else {
          //Code for show a invalid message
      }
    });
  });
});