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
  <canvas id="dots"></canvas>
  <div class="inner center-text">
    <?php if($_GET['thanks'] == 'yourock'){?>
      <h1>Thanks!</h1>
      <h2>Hang tight, one of our Customer Success engineers will be in touch soon.</h2>
    <?php } else { ?>
    <h1>Get a personal demo of the future of email.</h1>
    <h2>One of our Customer Success engineers will get in touch and show you around Vero, so you can see the full power of behavioral email.</h2>
    <form id="high-volume-sender-form" action='https://app.getvero.com/forms/3c6371cb540e6fb7d22e53a0fd2adaa1' method='post'>
      <div class="half">
        <div class="form-group"><label>Name:</label><input id="sender_name" class="form-control" name="event[name]" type="text" autofocus="autofocus" /></div>
        <div class="form-group"><label>Email:</label><input id="sender_email_address" class="form-control" name="email" type="text" /></div>
        <div class="form-group"><label>Phone:</label><input id="sender_phone" class="form-control" name="event[phone]" type="text" /></div>
        <div class="form-group"><label>Company name:</label><input id="sender_company_name" class="form-control" name="event[company_name]" type="text" /></div>
      </div>
      <div class="half">
        <div class="form-group"><label>Current number of subscribers:</label><select id="sender_subscribers" class="form-control" name="event[subscribers]"><option value="500000">&lt; 500,000 subscribers</option><option value="1000000">&lt; 1,000,000 subscribers</option><option value="5000000">&lt; 5,000,000 subscribers</option><option value="10000000">&lt; 10,000,000 subscribers</option><option value="more">&gt; 10,000,000 subscribers</option></select></div>
        <div class="form-group"><label>Current number of emails sent monthy:</label><select id="sender_emails" class="form-control" name="event[monthly_emails]"><option value="1000000">&lt; 1,000,000 emails</option><option value="5000000">&lt; 5,000,000 emails</option><option value="10000000">&lt; 10,000,000 emails</option><option value="50000000">&lt; 50,000,000 emails</option><option value="more">&gt; 50,000,000 emails</option></select></div>
        <div class="form-group">
          <label>Preferred contact method:</label><br>
          <input id="email" checked="checked" name="event[contact_method]" type="radio" value="email" />
          <label class="method" for="email"><img src="/wp-content/themes/vero/assets/images/phone.png"></label>
          <input id="phone" name="event[contact_method]" type="radio" value="phone" />
          <label class="method" for="phone"><img src="/wp-content/themes/vero/assets/images/mail-white.png"></label>
        </div>
        <input type="hidden" name="redirect_on_success" value="https://www.getvero.com/get-a-demo/?thanks=yourock"
        <div class="form-group"><input type="submit" value="Get in touch" id="request-demo" class="btn btn-warning"></div>
      </div>
    </form>
    <?php } ?>
  </div>
</section>
<?php 
  no_menus_genesis_footer();
?>