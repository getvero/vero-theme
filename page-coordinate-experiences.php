<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'jobs coordinate-jobs';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="double-padding" id="job-hero">
  <div class="inner xlarge-inner">
    <div class="intro-header center-text center-block">
      <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-coordinate.svg" alt="Co-ordinate icon">

      <h1 class="biggie semi-bold bottom-margin-small center-text">Co-ordinate messaging</h1>

      <p class="large bottom-margin-medium">Create and manage emails, push notifications and custom interactions on a single canvas</p>

      <div class="flex items-center justify-center intro-footer">
        <a class="btn btn-success btn-large md-right-margin-small" href="https://app.getvero.com/signup">Start a free trial</a>
        <a class="btn btn-primary btn-outline btn-large" id="demo-trigger" rel="leanModal" href="#demo">Talk to us</a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner flush-top xlarge-inner">
    <div class="grid job-feature job-feature-left">
      <div class="col-main">
        <!-- <span class="d-block annotation uppercase semi-bold faded bottom-margin-tiny">Workflows</span> -->

        <h2 class="chunk regular">Design a better customer experience</h2>

        <p class="medium bottom-margin-medium">With all your messaging channels and tools in one place, you can visualize your customer journey as you build it.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/workflows">Intuitive Workflows</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-1">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/workflows-2.svg" alt="UI of Workflows with abstract shapes">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner xlarge-inner">
    <!-- <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium center-text">Multi-channel</span> -->
    <div class="section-header center-block center-text bottom-margin-large">
      <h2 class="chunk regular bottom-margin-small center-text">Right message, right time, right channel</h2>

      <p class="large">Send personalized emails and mobile push notifications to drive customer engagement and reduce churn</p>
    </div>
    <div class="grid job-feature job-feature-right">
      <div class="col-main">
        <p class="medium">Add dynamic content to your messages with Liquid or data pulled directly from APIs.</p>

        <p class="medium">Send unique product recommendations, account usage updates, even the weather forecast and more.</p>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-3">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/channels.svg" alt="Multi-channel with abstract shapes">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner bottom-padding-medium">
    <div class="grid job-feature job-feature-left">
      <div class="col-main">
        <!-- <span class="d-block annotation uppercase semi-bold faded bottom-margin-tiny">Webhook</span> -->
        <h2 class="chunk regular">Trigger custom interactions anywhere <span class="d-inline pill pill-tiny">Coming soon</span></h2>

        <p class="medium">Trigger a HTTP webhook to any software or service in your stack, enabling you to drive and manage customer interactions across the entire lifecycle.</p>

        <p class="medium">Combine email and mobile push with any channel you can dream up with Vero’s Workflows.</p>

        <p class="medium bottom-margin-smedium">Add tasks to Pipedrive, trigger messages to Lambda, open tickets in HelpScout – if you can dream it up, you can build it with our webhooks.</p>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-4">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/webhook.svg" alt="Visualization of webhook integrations with abstract shapes">
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  include 'pages-shared/jobs-navigation.php';
  include 'pages-shared/footer-cta.php';
?>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("PricingPage");
  include("demo-enquiry-form.php");
?>
