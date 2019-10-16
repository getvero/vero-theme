<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'jobs empower-jobs';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="border-bottom-light" id="job-hero">
  <div class="inner xlarge-inner">
    <div class="intro-header center-text center-block">
      <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/dist/images/home/empower-your-team-with-vero.svg" alt="Empower your team with Vero">

      <h1 class="biggie semi-bold bottom-margin-small">Empower your team</h1>

      <p class="tubs bottom-margin-medium">Empower your marketing team to create and test customer experiences using real-time data</p>

      <div class="flex items-center justify-center intro-footer">
        <a class="btn btn-success btn-large md-right-margin-small" href="https://app.getvero.com/signup">Start a free trial</a>

        <a class="medium regular underline-link typeform-share link" id="talk_to_us" href="https://getvero.typeform.com/to/d9wZ4V" data-mode="popup" target="_blank">Talk to us</a>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite small-padding job-quote border-bottom-light">
  <div class="inner large-inner">
    <div class="flex flex-wrap justify-center">
      <div class="col-aside">
        <div class="border-light border-radius-2 bg-white vertical-padding-tiny horizontal-padding-smedium">
          <img class="full-width" src="/wp-content/themes/vero/assets/dist/images/home/logos/unsplash-logo-vero.svg" alt="Unsplash logo Vero">
        </div>
      </div>

      <div class="col-main">
        <blockquote class="">
          <p class="large quote quote-mark">We push all of our behavioural events to Vero… that moves email engagement out of our apps and into the hands of our non-developer teammates, allowing them to build highly-personalized emails, based on complex event-based logic on their own insights.</p>

          <span class="show semi-bold">Luke Chesser</span>
          <span class="show">Founder at Unsplash</span>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="grid job-feature job-feature-left">
      <div class="col-main">
        <h2 class="chunk regular bottom-margin-smedium">Seamlessly integrate Vero with your software</h2>

        <p class="medium">Vero’s flexible API ensures seamless integration with your core software so you can easily transfer and manage your customer data your way</p>

        <p class="medium">Quickly connect Vero with customer data platforms like Segment, and native libraries for Ruby, PHP, Python, and more.</p>

        <p class="medium bottom-margin-smedium">Easily store, track and segment customer properties and customer activity.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="https://developers.getvero.com/">Connect Vero</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="bg-dots-offset">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/integrate-vero-with-your-software.svg" alt="Seamlessly integrate Vero with your software">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner xlarge-inner">
    <div class="inner small-inner flush-top flush-bottom center-text bottom-margin-medium">
      <h2 class="chunk regular bottom-margin-small">Visibility and clarity</h2>

      <p class="large">Vero bridges the gap between your engineering and marketing teams</p>
    </div>
    <div class="grid job-feature job-feature-right">
      <div class="col-main">
        <p class="medium bottom-margin-smedium">Empower your non-technical team members to use real-time data to create, test and optimize customer messages with ease.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/event-manager">Empower your team</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="bg-dots-offset">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/visibility-and-clarity-vero-customer-data.svg" alt="Visibility and clarity with Vero customer data">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding bottom-border-light">
  <div class="inner xlarge-inner flush-bottom">
    <div class="grid job-feature job-feature-left">
      <div class="col-main">
        <h2 class="chunk regular bottom-margin-smedium">Create and iterate, faster</h2>

        <p class="medium bottom-margin-smedium">Workflows give you and your team a clear view of all the triggers, conditions, filters, timings and content that make up your customer journey. Run AB tests and optimize every message to drive more growth.</p>

        <a class="btn btn-medium btn-outline btn-primary" href="/workflows">Intuitive workflows</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="bg-dots-offset">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/create-iterate-faster-with-workflows-vero.svg" alt="Create and iterate faster with Workflows in Vero">
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  include 'pages-shared/jobs-navigation.php';
?>
<section class="bg-gray-lighter">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk bottom-margin-small">Scale personalized customer messaging</h4>

    <a class="btn btn-success btn-large bottom-margin-small" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  include("demo-enquiry-form.php");
?>
