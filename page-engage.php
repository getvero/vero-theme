<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'jobs engage-jobs';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section id="job-hero">
  <div class="inner xlarge-inner">
    <div class="intro-header center-text center-block">
      <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-engage.svg" alt="Engage icon">

      <h1 class="biggie semi-bold bottom-margin-small">Engage customers and grow your business</h1>

      <p class="large bottom-margin-medium">Send email and push notifications that drive customer engagement and increase revenue.</p>

      <div class="flex items-center justify-center intro-footer bottom-margin-medium">
        <a class="btn btn-success btn-large md-right-margin-small" href="https://app.getvero.com/signup">Start a free trial</a>

        <a class="btn btn-primary btn-outline btn-large" id="demo-trigger" rel="leanModal" href="#demo">Talk to us</a>
      </div>
    </div>
  </div>
</section>
<section class="small-padding bg-dots-strip" id="job-quote">
  <div class="inner">
    <div class="flex flex-wrap justify-center">
      <div class="col-aside">
        <div class="border-light border-radius-2 bg-white padding-small">
          <img src="/wp-content/themes/vero/assets/images/home/logos/v4/home-helloprint.svg" alt="Helloprint logo">
        </div>

        <!-- <img class="border-radius-1 avatar responsive-image" src="/wp-content/themes/vero/assets/images/jobs/julien-catani.jpg" srcset="/wp-content/themes/vero/assets/images/jobs/julien-catani@2x.jpg 2x" alt="A portrait of Julien Catani"> -->
      </div>

      <div class="col-main">
        <blockquote class="quotation-marks">
          <p class="large quote">Vero enables us to use real-time data to personalise our emails with relevant content to drive a higher revenue.</p>

          <span class="d-block medium regular">Julien Catani</span>
          <span class="d-block medium">Head of CRM at Helloprint</span>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="grid job-feature job-feature-left bottom-margin-xlarge">
      <div class="col-main">
        <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Workflows</span>

        <h2 class="chunk regular bottom-margin-xsmall">Easily create and manage automated workflows</h2>

        <p class="medium bottom-margin-xsmall">Workflows help you visualize your customer experience as you build it. It makes even the most complex customer journeys easy to manage.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/workflows">Streamline your workflows</a>
      </div>
      <div class="flex justify-center">
        <div class="image-dots image-dots-1">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/workflows.svg" alt="UI of Workflows with abstract shapes">
        </div>
      </div>
    </div>
    <div class="grid job-feature job-feature-right">
      <div class="col-main">
        <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">data Management</span>

        <h2 class="chunk regular bottom-margin-xsmall">Confidently send messages with real-time data</h2>

        <p class="medium bottom-margin-xsmall">Vero tracks your customer's actions, as they happen, and gives you a clear view of the data. You can feel confident in sending the right message, at the right time.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/event-manager">See your customer data</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-2">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/event-manager.svg" alt="UI of Event Manager with abstract shapes">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner xlarge-inner">
    <div class="section-header center-block center-text bottom-margin-large">
      <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Personalization</span>

      <h2 class="chunk regular bottom-margin-small">Send personalized emails and push notifications</h2>

      <p class="large">Improve the impact of every message you send your customers by including helpful and engaging content.</p>
    </div>

    <div class="grid job-feature job-feature-thirds items-center">
      <div class="col md-right-text">
        <p class="medium">Add dynamic content to your email and push notifications using Liquid.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/email-personalization-liquid-guide">Personalize your content</a>
        </a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-3">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/personalization.svg" alt="UI of Event Manager with abstract shapes">
        </div>
      </div>
      <div class="col">
        <p class="medium">Pull data from APIs into messages at send time to give customers a truly personalized experience.</p>

        <p class="medium">Send customers: account usage updates, tailored product recommendations and more</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/fusion">Load data from it's source</a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="grid job-feature-left">
      <div class="col-main">
        <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Reporting</span>

        <h2 class="chunk regular bottom-margin-xsmall">Optimize for growth</h2>

        <p class="medium">Test and optimize your customer journeys to drive more growth for your business. Easily design and manage your A/B tests with Vero's flexible and powerful features.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="https://help.getvero.com/articles/a-b-testing-email-campaigns">Robust A/B testing</a>
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
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/home/home-engage.svg" alt="Engage icon">

          <h3 class="atomic semi-bold bottom-margin-tiny">Engage customers</h3>

          <p>Engage customers and grow your business.</p>

          <span class="regular unstyled underline-link">Learn more

            <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
          </span>
        </a>
      </div>
      <div class="block">
        <a class="d-block unstyled cta-arrow-link" href="/empower/">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/home/home-empower.svg" alt="Empower icon">

          <h3 class="atomic semi-bold bottom-margin-tiny">Empower your team</h3>

          <p>Cut coding and speed up your iteration.</p>

          <span class="regular unstyled underline-link cta-arrow-link">Learn more

            <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
          </span>
        </a>
      </div>
      <div class="block">
        <a class="d-block unstyled cta-arrow-link" href="/coordinate/">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/home/home-coordinate.svg" alt="Co-ordinate icon">

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
        <h3 class="tubs regular bottom-margin-tiny">Create better customer experiences</h3>
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
