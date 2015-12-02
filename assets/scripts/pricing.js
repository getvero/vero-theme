// Sliders for the email/data pages
jQuery(document).ready(function(){
  jQuery('a[rel*=leanModal]').leanModal({ top : 80, closeButton: ".modal_close" });
  if(window.location.hash) {
    var hash = window.location.hash.substring(1); 
    if(hash == 'demo') {
      jQuery('#demo-trigger').click(); 
    }
  }

  jQuery('#request-demo').click(function(e) {
    e.preventDefault();
    console.log("Pushed button");
    requestDemo();
    return false;
  });

  var validateForm;
  var requestDemo;

  validateForm = function() {
    var company, email_addr, emails, name, subscribers, ret;
    ret = true;
    name = jQuery("#sender_name");
    email_addr = jQuery("#sender_email_address");
    company = jQuery("#sender_company_name");
    subscribers = jQuery("#sender_subscribers");
    emails = jQuery("#sender_emails");

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

  requestDemo = function() {
    console.log("Trying to validate");
    if (validateForm()) {
      console.log("Valid!");
      jQuery("#high-volume-sender-form").submit();
      jQuery("#high-volume > .inner").addClass('center-text').html("<h3 style='color:#222;font-weight:bold;'>Thanks for your request!</h3><h4 style='color:#222;padding-bottom:100px;'>We will contact you shortly.</h4>");
      return console.log('success');
    }
  };
});