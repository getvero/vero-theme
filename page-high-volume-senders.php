<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'high-volume-senders';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<section id="top">
  <canvas id="dots"></canvas>
  <div class="inner center-text">
    <h1>Get a personal demo of the future of email.</h1>
    <p>One of our Customer Success team will give you a personal demo of Vero, so you can see the full power of email.</p>
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
        <div class="form-group">
          <label>Preferred contact method:</label><br>
          <input id="email" checked="checked" name="contact_method" type="radio" value="email" />
          <label class="method" for="email"><img src="/wp-content/themes/vero/assets/images/phone.png"></label>
          <input id="phone" name="contact_method" type="radio" value="phone" />
          <label class="method" for="phone"><img src="/wp-content/themes/vero/assets/images/mail-white.png"></label>
        </div>
        <div class="form-group"><a id="request-demo" class="btn btn-warning" href="#">Get in touch</a></div>
      </div>
    </form>
  </div>
</section>
<?php 
  no_menus_genesis_footer();
?>