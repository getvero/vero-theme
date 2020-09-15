<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'jobs coordinate-jobs';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="job-hero" banner-name="Co-ordinate messaging" element-position="top">
  <div class="inner tiny-inner">
    <div class="intro-header center-text center-block">
      <img class="bottom-margin-xs" src="/wp-content/themes/vero/assets/dist/images/home/coordinate-messaging-with-vero.svg" alt="Co-ordinate your messaging strategy with Vero">

      <h1 class="biggie semi-bold bottom-margin-sm">Co-ordinate messaging</h1>

      <p class="tubs bottom-margin-lg">Create and manage emails, push notifications and custom interactions on a single canvas</p>

      <form class="js-signup-form track-signup-form home-signup-form lg-horizontal-margin-sm stack-xs bottom-margin-sm"
        element-position="top"
        action="https://formkeep.com/f/5401a0ae5cb8"
        accept-charset="UTF-8"
        enctype="multipart/form-data"
        method="POST">

        <div class="flex flex-column sm-flex-row">
          <input class="bg-white form-control full-width" id="user_email" type="email" name="email" placeholder="Your email address" required>

          <input class="btn btn--success btn--medium track-start-trial" element-position="top" type="submit" name="submit" value="Start a free trial">

          <a class="d-inline-block semi-bold ws-nowrap underline-link padding-xs track-contact-us" element-position="top" href="/demo/">Schedule a demo</a>
        </div>

        <div class="js-home-contact-msg home-contact-msg font-brand-error"></div>
      </form>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner flush-top large-inner">
    <div class="grid job-feature job-feature-left">
      <div class="col-main">
        <!-- <span class="d-block annotation uppercase semi-bold faded bottom-margin-xs">Workflows</span> -->

        <h2 class="tubs semi-bold">Design a better customer experience</h2>

        <p class="medium bottom-margin-md">With all your messaging channels and tools in one place, you can visualize your customer journey as you build it.</p>

        <a class="btn btn--medium btn--outline btn--primary" href="/workflows">Intuitive Workflows</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="bg-dots-offset">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/workflows-2.svg" alt="Visibility and clarity with Vero customer data">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner large-inner">
    <!-- <span class="d-block annotation uppercase semi-bold faded bottom-margin-lg center-text">Multi-channel</span> -->

    <div class="grid job-feature job-feature-right">
      <div class="col-main">
        <h2 class="tubs semi-bold bottom-margin-sm">Right message, right time, right channel</h2>

        <p class="medium">Send personalized emails and mobile push notifications to drive customer engagement and reduce churn</p>

        <p class="medium">Add dynamic content to your messages with Liquid or data pulled directly from APIs.</p>

        <p class="medium">Send unique product recommendations, account usage updates, even the weather forecast and more.</p>
      </div>
      <div class="col-aside flex justify-center">
        <div class="bg-dots-offset">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/right-message-time-channel-vero.svg" alt="Right message right time with channel with Vero">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding bottom-border-light">
  <div class="inner large-inner flush-bottom">
    <div class="grid job-feature job-feature-left">
      <div class="col-main">
        <!-- <span class="d-block annotation uppercase semi-bold faded bottom-margin-xs">Webhook</span> -->

        <h2 class="tubs semi-bold">Trigger custom interactions anywhere <span class="d-inline annotation pill pill--primary">Coming soon</span></h2>

        <p class="medium">Trigger a HTTP webhook to any software or service in your stack, enabling you to drive and manage customer interactions across the entire lifecycle.</p>

        <p class="medium">Combine email and mobile push with any channel you can dream up with Vero’s Workflows.</p>

        <p class="medium bottom-margin-md">Add tasks to Pipedrive, trigger messages to Lambda, open tickets in HelpScout – if you can dream it up, you can build it with our webhooks.</p>
      </div>
      <div class="col-aside flex justify-center">
        <div class="bg-dots-offset">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/trigger-custom-interactions-vero.svg" alt="Trigger custom interactions anywhere with Vero">
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  include 'pages-shared/jobs-navigation.php';
?>
<section class="bg-gray-lighter" banner-name="Scale personalized messages" element-position="bottom">
  <div class="inner small-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams scale personalized customer messaging</h4>

    <form class="js-signup-form track-signup-form home-signup-form lg-horizontal-margin-lg stack-xs bottom-margin-sm"
      element-position="bottom"
      action="https://formkeep.com/f/5401a0ae5cb8"
      accept-charset="UTF-8"
      enctype="multipart/form-data"
      method="POST">

      <div class="flex flex-column sm-flex-row">
        <input class="bg-white form-control full-width" id="user_email" type="email" name="email" placeholder="Your email address" required>

        <input class="btn btn--success btn--medium track-start-trial" element-position="bottom" type="submit" name="submit" value="Start a free trial">

        <a class="d-inline-block semi-bold ws-nowrap underline-link padding-xs track-contact-us" element-position="bottom" href="/demo/">Schedule a demo</a>
      </div>

      <div class="js-home-contact-msg home-contact-msg font-brand-error"></div>
    </form>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>
