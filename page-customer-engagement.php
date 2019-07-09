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
      <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/dist/images/home/engage-customers-with-vero.svg" alt="Engage customers with Vero">

      <h1 class="biggie semi-bold bottom-margin-small">Engage customers</h1>

      <p class="larger bottom-margin-medium">Send email and push notifications that drive customer engagement and increase revenue</p>

      <div class="flex items-center justify-center intro-footer">
        <a class="btn btn-success btn-large md-right-margin-small" href="https://app.getvero.com/signup">Start a free trial</a>

        <a class="medium regular underline-link typeform-share link" id="talk_to_us" href="https://getvero.typeform.com/to/d9wZ4V" data-mode="popup" target="_blank">Talk to us</a>
      </div>
    </div>
  </div>
</section>
<section class="small-padding bg-dots-strip" id="job-quote">
  <div class="inner">
    <div class="flex flex-wrap justify-center">
      <div class="col-aside">
        <div class="border-light border-radius-2 bg-white vertical-padding-tiny horizontal-padding-smedium">
          <img class="full-image" src="/wp-content/themes/vero/assets/dist/images/home/logos/helloprint-logo-vero.svg" alt="Helloprint logo Vero">
        </div>
      </div>

      <div class="col-main">
        <blockquote class="quotation-marks">
          <p class="large quote">Vero enables us to use real-time data to personalise our emails with relevant content to drive more revenue.</p>

          <span class="show medium regular">Julien Catani</span>
          <span class="show medium">Head of CRM at Helloprint</span>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="grid job-feature job-feature-left bottom-margin-xlarge">
      <div class="col-main">
        <!-- <span class="show annotation uppercase semi-bold faded bottom-margin-tiny">Workflows</span> -->

        <h2 class="chunk regular bottom-margin-smedium">Easily create and manage automated workflows</h2>

        <p class="medium bottom-margin-smedium">Workflows help you visualize your customer experience as you build it. It makes even the most complex customer journeys easy to manage.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/workflows">Streamline your workflows</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-1">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/workflows-2.svg" alt="Create and manage automated Workflows with Vero">
        </div>
      </div>
    </div>
    <div class="grid job-feature job-feature-right">
      <div class="col-main">
        <!-- <span class="show annotation uppercase semi-bold faded bottom-margin-tiny">data Management</span> -->

        <h2 class="chunk regular bottom-margin-smedium">Confidently send messages with real-time data</h2>

        <p class="medium bottom-margin-smedium">Vero tracks your customer's actions, as they happen, and gives you a clear view of the data. You can feel confident in sending the right message, at the right time.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/event-manager">See your customer data</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-2">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/event-manager.svg" alt="Visibility and clarity with Vero customer data">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner xlarge-inner">
    <div class="inner small-inner flush-top flush-bottom center-text bottom-margin-medium">
      <!-- <span class="show annotation uppercase semi-bold faded bottom-margin-tiny">Personalization</span> -->

      <h2 class="chunk regular bottom-margin-small">Send personalized emails and push notifications</h2>

      <p class="large">Improve the impact of every message you send your customers by including helpful and engaging content</p>
    </div>

    <div class="grid job-feature job-feature-thirds items-center">
      <div class="col md-right-text">
        <p class="medium bottom-margin-smedium">Add dynamic content to your email and push notifications using Liquid.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/email-personalization-liquid-guide">Personalize your content</a>
        </a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-3">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/personalized-emails-push-notifications-vero.svg" alt="Send personalized emails and push notifications with Vero">
        </div>
      </div>
      <div class="col">
        <!-- <p class="medium">Pull data from APIs into messages at send time to give customers a truly personalized experience.</p> -->

        <p class="medium bottom-margin-smedium">Send customers account usage updates, tailored product recommendations and more.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/fusion">Load data from it's source</a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner bottom-padding-medium">
    <div class="grid job-feature job-feature-left">
      <div class="col-main">
        <!-- <span class="show annotation uppercase semi-bold faded bottom-margin-tiny">Reporting</span> -->

        <h2 class="chunk regular bottom-margin-smedium">Optimize for growth</h2>

        <p class="medium bottom-margin-smedium">Test and optimize your customer journeys to drive more growth for your business. Easily design and manage your A/B tests with Vero's flexible and powerful features.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="https://help.getvero.com/articles/a-b-testing-email-campaigns">Robust A/B testing</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-4">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/optimize-for-growth-vero.svg" alt="Optimize for growth with Vero">
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
