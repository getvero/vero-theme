jQuery(document).ready(function() {
  jQuery('.js-demo-form').validate();

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
});