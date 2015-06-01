<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'high-volume-senders';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<section id="top" class="reliable">
  <div class="inner center-text">
    <?php if($_GET['thanks'] == 'yourock'){?>
      <h1>Thanks!</h1>
      <h2>Hang tight, one of our Customer Success engineers will be in touch soon.</h2>
    <?php } else { ?>
    <h1>Send a lot of email?<br/>Get a personal demo of the future of email.</h1>
    <h2>One of our Customer Success engineers will get in touch and show you around Vero, so you can see the full power of behavioral email.</h2>
    <form id="high-volume-sender-form" action='http://localhost:3000/demos' method='post'>
      <div class="half">
        <div class="form-group"><label>Name:</label><input id="sender_name" class="form-control" name="name" type="text" autofocus="autofocus" /></div>
        <div class="form-group"><label>Email:</label><input id="sender_email_address" class="form-control" name="email" type="text" /></div>
        <div class="form-group"><label>Phone:</label><input id="sender_phone" class="form-control" name="phone" type="text" /></div>
        <div class="form-group"><label>Company name:</label><input id="sender_company_name" class="form-control" name="company_name" type="text" /></div>
      </div>
      <div class="half">
        <div class="form-group"><label>Current number of subscribers:</label><select id="sender_subscribers" class="form-control" name="subscribers">
          <option value="10000">0 - 10,000 subscribers</option>
          <option value="100000">10,000 - 100,000 subscribers</option>
          <option value="250000">100,000 - 250,000 subscribers</option>
          <option value="500000">250,000 - 500,000 subscribers</option>
          <option value="1000000">500,000 - 1,000,000 subscribers</option>
          <option value="5000000">1,000,000 - 5,000,000 subscribers</option>
          <option value="10000000">5,000,000 - 10,000,000 subscribers</option>
          <option value="more">10,000,000+ subscribers</option></select></div>
        <div class="form-group"><label>Current number of emails sent monthy:</label><select id="sender_emails" class="form-control" name="monthly_emails">
          <option value="250000">0 - 250,000 emails</option>
          <option value="1000000">250,000 - 1,000,000 emails</option>
          <option value="1000000">500,000 - 1,000,000 emails</option>
          <option value="1000000">1,000,000 - 5,000,000 emails</option>
          <option value="10000000">5,000,000 - 10,000,000 emails</option>
          <option value="50000000">10,000,000 - 50,000,000 emails</option>
          <option value="more">50,000,000+ emails</option></select></div>
        <div class="form-group">
          <label>Preferred contact method:</label><br>
          <input id="email" checked="checked" name="contact_method" type="radio" value="email" />
          <label class="method" for="email"><img src="/wp-content/themes/vero/assets/images/phone.png"></label>
          <input id="phone" name="contact_method" type="radio" value="phone" />
          <label class="method" for="phone"><img src="/wp-content/themes/vero/assets/images/mail-white.png"></label>
        </div>
        <input type="hidden" name="redirect_on_success" value="https://www.getvero.com/email-marketing-demo/?thanks=yourock"
        <div class="form-group"><input type="submit" value="Get in touch" id="request-demo" class="btn btn-warning"></div>
      </div>
    </form>
    <?php } ?>
  </div>
</section>
<?php 
  no_menus_genesis_footer();
?>