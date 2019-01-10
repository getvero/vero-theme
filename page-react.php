<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'react';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section id="hero">
  <div class="inner xlarge-inner">
    <div class="grid intro">
      <div class="hero-body">
        <span class=" d-block annotation uppercase regular faded bottom-margin-medium">Assist your customers</span>

        <h1 class="biggie semi-bold bottom-margin-small">Send alerts and relevant data to your team so they can offer better help, faster</h1>

        <p class="medium">Notify and alert your teams based on customer interactions. Learn faster, be more proactive and get the right people on your team on the job.</p>
      </div>
      <div class="hero-footer">
        <a class="btn btn-success btn-large" href="https://app.getvero.com/signup">Start a free trial</a>
        <a class="regular underline" id="demo-trigger" rel="leanModal" href="#demo">Talk to our sales team</a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <h2 class=" d-block annotation uppercase regular faded bottom-margin-medium">How it works</h2>

    <div class="grid grid-thirds">
      <div>
        <h3 class="tubs semi-bold">Integrate</h3>
        <p class="medium">Collect real-time events and customer data from your website, app or systems.</p>
        <a class="underline-link" href="#none">Learn more</a>
      </div>
      <div>
        <h3 class="tubs semi-bold">Notify</h3>
        <p class="medium">Collect real-time events and customer data from your website, app or systems.</p>
        <a class="underline-link" href="#none">Learn more</a>
      </div>
      <div>
        <h3 class="tubs semi-bold">Reach</h3>
        <p class="medium">Collect real-time events and customer data from your website, app or systems.</p>
        <a class="underline-link" href="#none">Learn more</a>
      </div>
    </div>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("PricingPage");
  include("demo-enquiry-form.php");
?>
