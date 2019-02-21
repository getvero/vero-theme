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
      <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-empower.svg" alt="Empower icon">

      <h1 class="biggie semi-bold bottom-margin-small center-text">Empower your team</h1>

      <p class="large bottom-margin-medium">Empower your marketing team to create and test customer experiences using real-time data</p>

      <div class="flex items-center justify-center intro-footer bottom-margin-medium">
        <a class="btn btn-success btn-large md-right-margin-small" href="https://app.getvero.com/signup">Start a free trial</a>

        <a class="btn btn-primary btn-outline btn-large" id="demo-trigger" rel="leanModal" href="#demo">Talk to us</a>
      </div>
    </div>
  </div>
</section>
<section class="small-padding bg-dots-strip" id="job-quote">
  <div class="inner xlarge-inner">
    <div class="flex flex-wrap justify-center">
      <div class="col-aside">
        <div class="border-light border-radius-2 bg-white vertical-padding-tiny horizontal-padding-smedium">
          <img class="full-image" src="/wp-content/themes/vero/assets/images/home/logos/v4/home-unsplash.svg" alt="Helloprint logo">
        </div>
      </div>

      <div class="col-main">
        <blockquote class="quotation-marks">
          <p class="large quote">We push all of our behavioural events to Vero… that moves email engagement out of our apps and into the hands of our non-developer teammates, allowing them to build highly-personalized emails, based on complex event-based logic on their own insights.</p>

          <a class="d-block medium regular unstyled underline-link no-bottom-margin" href="https://www.getvero.com/resources/driving-revenue-increasing-nps-personalised-email/">Luke Chesser</a>
          <span class="d-block medium">Founder at Unsplash</span>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner xlarge-inner">
    <div class="section-header center-block center-text bottom-margin-large">
      <!-- <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">API integration</span> -->

      <h2 class="chunk regular bottom-margin-small">Seamlessly integrate Vero with your software</h2>

      <!-- <p class="medium bottom-margin-smedium">Vero’s flexible API ensures seamless integration with your core software, allowing you to easily transfer and manage your customer data. Vero’s lets you define the user model to ensure it makes sense for your product and business.</p> -->

      <p class="large bottom-margin-smedium">Vero’s flexible API ensures seamless integration with your core software so you can easily transfer and manage your customer data your way</p>

      <a class="btn btn-medium btn-outline btn-primary" href="https://developers.getvero.com/">Connect Vero</a>
    </div>

    <div class="grid job-feature job-feature-thirds items-center">
      <div class="col md-right-text">
        <p class="medium">Quickly connect Vero with customer data platforms, such as Segment, and native libraries for Ruby, PHP, Python, and more.</p>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-1">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/api.svg" alt="UI of customer profile with API integrations">

          <!-- Made a purchase, signed up -->
        </div>
      </div>
      <div class="col">
        <p class="medium no-bottom-margin">Easily store, track and segment customer properties and customer activity.</p>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner bottom-padding-medium">
    <div class="grid job-feature job-feature-left bottom-margin-xlarge">
      <div class="col-main">
        <!-- <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Workflows</span> -->

        <h2 class="chunk regular bottom-margin-smedium">Code less, move faster</h2>

        <p class="medium">Vero bridges the gap between your engineer team and marketing team.</p>

        <p class="medium bottom-margin-smedium">Empower your non-technical team members to use your customer data to create, test and optimize customer messages with ease. Help your team move faster.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/event-manager/">Move faster</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-4">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/filter.svg" alt="UI of Event Manager with abstract shapes">

          <!-- Event mananger imagery -->
        </div>
      </div>
    </div>
    <div class="grid job-feature job-feature-right">
      <div class="col-main">
        <!-- <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Workflows</span> -->

        <h2 class="chunk regular bottom-margin-smedium">Empower your team</h2>

        <p class="medium bottom-margin-smedium">Workflows give you and your team a clear view of all the triggers, conditions, filters, timings and content that make up your customer journey.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/workflows">Workflows</a>
      </div>
      <div class="col-aside flex items-center">
        <div class="image-dots image-dots-4">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/workflows.svg" alt="UI of Event Manager with abstract shapes">

          <!-- -->
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
