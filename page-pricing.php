<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'pricing';
  return $classes;  
}

include 'pages/shared/static-header.php';
?>
<section id="top">
  <div class="inner">
    <h1 class="center-text">Join 5,000+ customers that have
      improved their email marketing</h1>
      <ul class="list-inline">
        <li class="center-text"><img src="/wp-content/themes/vero/assets/images/targeted-email.jpg" alt="Targeted_emails_icon" />
          <h3 class="h5">Send very targeted emails</h3>
          Vero track customers' actions in your app and let you customize each email based on what they have done previously.</li>
          <li class="center-text"><img src="/wp-content/themes/vero/assets/images/ab-tests.jpg" alt="A_b_testing_icon" />
            <h3 class="h5">A/B Testing</h3>
            Create two or more variations and see which email convert better.</li>
            <li class="center-text"><img src="/wp-content/themes/vero/assets/images/one-place.jpg" alt="Emails_in_one_place_icon" />
              <h3 class="h5">All your emails in one place</h3>
              You can manage all type of emails in Vero: Newsletters, Triggered campaigns, Drip campaigns, Transactional email,...</li>
            </ul>
          </div>
        </section><section id="join">
        <div class="inner">
          <div class="price-box">Just <span class="monthly-price">$99</span> a month or <span class="yearly-price">$990</span> a year.</div>
          <form class="form-inline">
            <div class="calculator center-text">I need
              <div class="form-group"><select id="plan" class="form-control" name="plan"><option value="99">25,000 emails (up to 12,500 subscribers)</option><option value="149">175,000 emails (up to 50,000 subscribers)</option><option value="249">250,000 emails (up to 100,000 subscribers)</option>
                <option value="549">400,000 emails (up to 175,000 subscribers)</option>
                <option value="749">700,000 emails (up to 300,000 subscribers)</option>
                <option value="1099">1,000,000 emails (up to 500,000 subscribers)</option>
                <option value="1499">1,500,000 emails (up to 750,000 subscribers)</option><option value="1799">2,500,000 emails (up to 1,250,000 subscribers)</option>
                <option value="-1">More than 2.5M emails (greater than 1.25M subscribers)</option></select></div>
                <p class="inline-block"> bill me</p><div class="form-group"><select id="period" class="form-control" name="period"><option value="1">yearly</option><option value="2">monthly</option></select></div><p class="inline-block">and <span class="discount">save 16% </span></p>

              </div>
              <div class="high-volume center-text">
                <div class="emails"><div class="form-group"><label for="Number_of_monthly_emails">Number of monthly emails</label><input id="monthly-email" class="form-control" name="monthly-email" type="text" value="2500000" /></div></div><div class="customers"><div class="form-group"><label for="Number_of_customers">Number of customers</label><input id="customers" class="form-control" name="customers" type="text" value="2000000" /></div></div>
                <div class="clearfix"></div>
              </div>
              <div class="join-now center-text"><a href="https://app.getvero.com/signup" class="btn btn-success btn-large">Start your 14 day free trial</a></div>
            </form></div>
          </section>
          <?php 
          no_content_genesis_footer();
          ?>