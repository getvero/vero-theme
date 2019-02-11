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

      <h1 class="biggie semi-bold bottom-margin-small center-text">Co-ordinate customer interactions across the entire lifecycle</h1>

      <p class="large bottom-margin-medium">Design and manage all your customer communications on a single canvas.</p>

      <div class="flex items-center justify-center intro-footer">
        <a class="btn btn-success btn-large md-right-margin-small" href="https://app.getvero.com/signup">Start a free trial</a>
        <a class="btn btn-primary btn-outline btn-large" id="demo-trigger" rel="leanModal" href="#demo">Talk to us</a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="grid job-feature job-feature-left">
      <div class="col-main">
        <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Workflows</span>
        <h2 class="chunk regular">Unified messaging platform</h2>
        <p class="medium">Stop “hacking” tools together. Embrace all your messaging channels to design better customer experiences.</p>

        <p class="medium">A central command center for your customer messaging, Vero helps you limit customer frustration and messaging fatigue, and move faster with all the tools you need in one place.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/workflows">Learn how our workflow can help</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-1">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/workflows.svg" alt="UI of Workflows with abstract shapes">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner xlarge-inner">
    <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium center-text">Multi-channel</span>
    <h2 class="chunk regular bottom-margin-tiny center-text">Reach customers on their preferred channel</h2>
    <div class="section-header center-block center-text bottom-margin-large">
      <p class="large">Your customers switch between mobile, email and the web regularly and rapidly.</p>

      <a class="btn btn-medium btn-outline btn-primary" href="/workflows">CTA</a>
    </div>
    <div class="grid job-feature job-feature-thirds items-center">
      <div class="md-right-text">
        <p class="medium">Vero supports Liquid so you can display dynamic content in your email and push messages.</p>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-3">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/personalization.svg" alt="UI of Event Manager with abstract shapes">
        </div>
      </div>
      <div>
        <p class="medium">Pull content from APIs directly into your messages at send time. You can send account usage updates and tailored product recommendations to weather forecasts.</p>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="grid job-feature job-feature-left">
      <div class="col-main">
        <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Webhook</span>
        <h2 class="chunk regular">Trigger custom interactions anywhere <span class="d-inline pill pill-tiny pill-primary">Coming soon</span></h2>
        <p class="medium">Trigger a HTTP webhook to any software or service in your stack, enabling you to drive and manage customer interactions across the entire lifecycle.</p>

        <p class="medium">Combine email and mobile push with any channel you can dream up with Vero’s Workflows

        <p class="medium">Add tasks to Pipedrive, trigger messages to Lambda, open tickets in HelpScout – if you can dream it up, you can build it with our webhooks.</p>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-4">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/reporting.svg" alt="UI of Event Manager with abstract shapes">
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner xlarge-inner">
    <div class="shadow-1 border-light border-radius-2 padding-small flex flex-column md-flex-row justify-around center-text jobs-navigation">
      <div class="block">
        <a class="d-block unstyled cta-arrow-link" href="/engage/">
          <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-engage.svg" alt="Engage icon">

          <h3 class="atomic semi-bold bottom-margin-tiny">Engage customers</h3>

          <p>Engage customers and grow your business.</p>

          <span class="regular unstyled underline-link">Learn more

            <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
          </span>
        </a>
      </div>
      <div class="block">
        <a class="d-block unstyled cta-arrow-link" href="/empower/">
          <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-empower.svg" alt="Empower icon">

          <h3 class="atomic semi-bold bottom-margin-tiny">Empower your team</h3>

          <p>Cut coding and speed up your iteration.</p>

          <span class="regular unstyled underline-link cta-arrow-link">Learn more

            <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
          </span>
        </a>
      </div>
      <div class="block">
        <a class="d-block unstyled cta-arrow-link" href="/coordinate/">
          <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-coordinate.svg" alt="Co-ordinate icon">

          <h3 class="atomic semi-bold bottom-margin-tiny">Co-ordinate experiences</h3>

          <p>Cut coding and iterate faster.</p>

          <span class="regular unstyled underline-link cta-arrow-link">Learn more

            <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
          </span>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding footer-cta bg-dots-strip bg-right">
  <div class="inner xlarge-inner">
    <div class="flex flex-wrap">
      <div class="col-aside">
        <h3 class="tubs regular bottom-margin-tiny">Put your data first and craft better customer experiences</h3>
        <p class="medium">Let Vero help you manage every touchpoint your customer has with your business.</p>
      </div>
      <div class="col-main flex">
        <a class="btn btn-large btn-success self-center left-margin-auto" href="#none">Start a free trial</a>
      </div>
    </div>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("PricingPage");
  include("demo-enquiry-form.php");
?>
