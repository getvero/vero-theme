<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'high-volume-senders';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<section id="high-volume">
  <div id="top">
    <div class="inner center-text">
      <h1>Triggered email at scale.</h1>
      <p>Need more juice? We offer custom packages for power users.</p>
    </div>
  </div>
  <div id="features">
    <div class="inner">
      <ul class="list-unstyled list-inline">
        <li class="center-text">
          <img src="/wp-content/themes/vero/assets/images/high-volume/stamp.png">
          <h5>Send millions of emails <br>each month</h5>
        </li>
        <li class="center-text">
          <img src="/wp-content/themes/vero/assets/images/high-volume/mail-settings.png">
          <h5>Support guaranteed <br>within an hour</h5>
        </li>
        <li class="center-text">
          <img src="/wp-content/themes/vero/assets/images/high-volume/mail-empty.png">
          <h5>Dedicated IP addresses</h5>
        </li>
      </ul>
    </div>
  </div>
  <div class="inner">
    <form id="high-volume-sender-form">
      <div class="half">
        <div class="form-group"><label>Name:</label><input id="sender_name" class="form-control" name="sender[name]" type="text" autofocus="autofocus" /></div>
        <div class="form-group"><label>Email:</label><input id="sender_email_address" class="form-control" name="sender[email_address]" type="text" /></div>
        <div class="form-group"><label>Phone:</label><input id="sender_phone" class="form-control" name="sender[phone]" type="text" /></div>
        <div class="form-group"><label>Company name:</label><input id="sender_company_name" class="form-control" name="sender[company_name]" type="text" /></div>
      </div>
      <div class="half">
        <div class="form-group"><label>Current number of subscribers:</label><select id="sender_subscribers" class="form-control" name="sender[subscribers]"><option value="500000">&lt; 500,000 subscribers</option><option value="1000000">&lt; 1,000,000 subscribers</option><option value="5000000">&lt; 5,000,000 subscribers</option><option value="10000000">&lt; 10,000,000 subscribers</option><option value="more">&gt; 10,000,000 subscribers</option></select></div>
        <div class="form-group"><label>Current number of emails sent monthy:</label><select id="sender_emails" class="form-control" name="sender[emails]"><option value="1000000">&lt; 1,000,000 emails</option><option value="5000000">&lt; 5,000,000 emails</option><option value="10000000">&lt; 10,000,000 emails</option><option value="50000000">&lt; 50,000,000 emails</option><option value="more">&gt; 50,000,000 emails</option></select></div>
        <!--<div class="form-group"><label>Comments or questions:</label><textarea id="sender_question" class="form-control" name="sender[question]"></textarea></div>-->
        <div class="form-group"><label>Contact method:</label><br><label class="method" for="email"><input id="email" checked="checked" name="contact_method" type="radio" value="email" /> Email</label>&nbsp;&nbsp;<label class="method" for="phone"><input id="phone" name="contact_method" type="radio" value="phone" /> Phone</label></div>
        <div class="form-group"><a id="request-demo" class="btn btn-primary" href="#">Get in touch</a></div>
      </div>
    </form>
  </div>
</section>
<?php 
  //no_content_genesis_footer();
?>