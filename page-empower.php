<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'jobs empower-jobs';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section id="job-hero">
  <div class="inner xlarge-inner">
    <div class="intro-header center-text center-block">
      <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-engage.svg" alt="Engage icon">

      <h1 class="biggie semi-bold bottom-margin-small center-text">Cut coding and speed up your iteration</h1>

      <p class="large bottom-margin-medium">Empower your marketing team to create and test customer experiences using real-time, accurate product data.</p>

      <div class="flex items-center justify-center intro-footer bottom-margin-medium">
        <a class="btn btn-success btn-large md-right-margin-small" href="https://app.getvero.com/signup">Start a free trial</a>
        <a class="medium regular unstyled underline-link" id="demo-trigger" rel="leanModal" href="#demo">Talk to our sales team</a>
      </div>
    </div>
  </div>
</section>
<section class="small-padding bg-dots-strip" id="job-quote">
  <div class="inner large-inner">
    <div class="flex flex-wrap justify-center items-center">
      <div class="col-aside">
        <img class="border-radius-4 avatar responsive-image" src="/wp-content/themes/vero/assets/images/jobs/julien-catani.jpg" srcset="/wp-content/themes/vero/assets/images/jobs/julien-catani@2x.jpg 2x" alt="A portrait of Julien Catani">
      </div>

      <div class="col-main">
        <blockquote class="quotation-marks">
          <p class="large quote">We push all of our behavioural events to Vero…, that moves email engagement out of our apps and into the hands of our non-developer teammates, allowing them to build highly-personalized emails, based on complex event-based logic on their own insights.</p>

          <a class="d-block medium regular unstyled underline-link no-bottom-margin" href="https://www.getvero.com/resources/driving-revenue-increasing-nps-personalised-email/">Luke Chesser</a>
          <span class="d-block medium">Founder at Unsplash</span>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="grid job-feature job-feature-left">
      <div>
        <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Fusion</span>
        <h2 class="chunk regular">Seamlessly integrate Vero with your software</h2>
        <p class="medium">Vero’s flexible API ensures seamless integration with your core software, allowing you to easily transfer and manage your customer data. Vero’s lets you define the user model to ensure it makes sense for your product and business.</p>

        <ul class="medium">
          <li>Store, track and segment:</li>
          <li>customer properties (such as name, location, 	timezone); and</li>
          <li>customer activity (checkouts, browsing 	behaviour, product interactions)</li>
        </ul>

        <p class="medium">Quickly connect Vero with:</p>
        <ul class="medium">
          <li>Customer Data Platforms integrations, such 	as Segment</li>
          <li>Native libraries for Ruby, PHP, Python, and	more</li>
        </p>

        <a class="medium regular unstyled underline-link cta-arrow-link" href="">Connect Vero

        <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </a>
      </div>
      <div class="flex justify-center">
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
    </div>
    <div class="grid job-feature job-feature-thirds items-center">
      <div class="md-right-text">
        <h2 class="atomic semi-bold">Liquid and data inspector</h2>
        <p class="medium">Vero supports Liquid so you can display dynamic content in your email and push messages.</p>
        <a class="medium regular unstyled underline-link cta-arrow-link" href="">Personalize your content

        <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </a>
      </div>
      <div class="flex justify-center">
        <div class="image-dots image-dots-3">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/personalization.svg" alt="UI of Event Manager with abstract shapes">
        </div>
      </div>
      <div>
        <h2 class="atomic semi-bold">Fusion</h2>
        <p class="medium">Pull content from APIs directly into your messages at send time. You can send account usage updates and tailored product recommendations to weather forecasts.</p>
        <a class="medium regular unstyled underline-link cta-arrow-link" href="">Load data from its source

        <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="grid job-feature-left">
      <div>
        <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Reporting</span>
        <h2 class="chunk regular">Optimize for growth</h2>
        <p class="medium">Test and optimize your customer journeys to drive more growth for your business. Roll out successful A/B tests in minutes. Analyze what brings the best results, iron out imperfections, and always release winning variations.</p>

        <a class="medium regular unstyled underline-link cta-arrow-link" href="">Test and optimize your campaigns

        <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </a>
      </div>
      <div class="flex justify-center">
        <div class="image-dots image-dots-4">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/reporting.svg" alt="UI of Event Manager with abstract shapes">
        </div>
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
