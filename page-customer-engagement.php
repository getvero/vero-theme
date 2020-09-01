<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'jobs engage-jobs';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="border-bottom-light" id="job-hero" banner-name="Engage customers" element-position="top">
  <div class="inner tiny-inner">
    <div class="intro-header center-text center-block">
      <img class="bottom-margin-xs" src="/wp-content/themes/vero/assets/dist/images/home/engage-customers-with-vero.svg" alt="Engage customers with Vero">

      <h1 class="biggie semi-bold bottom-margin-sm">Engage customers</h1>

      <p class="tubs bottom-margin-lg">Send email and push notifications that drive customer engagement and increase revenue</p>

      <form class="js-signup-form home-signup-form lg-horizontal-margin-sm stack-xs bottom-margin-sm"
        action="https://formkeep.com/f/5401a0ae5cb8"
        accept-charset="UTF-8"
        enctype="multipart/form-data"
        method="POST">

        <div class="flex flex-column sm-flex-row">
          <input class="bg-white form-control full-width" id="user_email" type="email" name="email" placeholder="Your email address" required>

          <input class="btn btn--success btn--medium track-start-trial" element-position="top" type="submit" name="submit" value="Start a free trial">

          <input class="btn underline-link track-contact-us" element-position="top" type="submit" name="talk_to_us" value="Talk to us">
        </div>

        <div class="js-home-contact-msg home-contact-msg font-brand-error"></div>
      </form>
    </div>
  </div>
</section>
<section class="bg-offwhite small-padding job-quote border-bottom-light">
  <div class="inner">
    <div class="flex flex-wrap justify-center">
      <div class="col-aside">
        <div class="border-light border-radius-2 bg-white vertical-padding-tiny horizontal-padding-md">
          <img class="full-width" src="/wp-content/themes/vero/assets/dist/images/home/logos/helloprint-logo-vero.svg" alt="Helloprint logo Vero">
        </div>
      </div>

      <div class="col-main">
        <blockquote class="quote-mark">
          <p class="large quote">Vero enables us to use real-time data to personalise our emails with relevant content to drive more revenue.</p>

          <span class="show semi-bold">Julien Catani</span>
          <span class="show">Head of CRM at Helloprint</span>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner large-inner">
    <div class="grid job-feature job-feature-left bottom-margin-xxl">
      <div class="col-main">
        <!-- <span class="show annotation uppercase semi-bold faded bottom-margin-xs">Workflows</span> -->

        <h2 class="tubs semi-bold bottom-margin-sm">Easily create and manage automated workflows</h2>

        <p class="medium bottom-margin-md">Workflows help you visualize your customer experience as you build it. It makes even the most complex customer journeys easy to manage.</p>

        <a class="btn btn--medium btn--outline btn--primary" href="/workflows">Streamline your workflows</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="bg-dots-offset">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/workflows-2.svg" alt="Create and manage automated Workflows with Vero">
        </div>
      </div>
    </div>
    <div class="grid job-feature job-feature-right">
      <div class="col-main">
        <!-- <span class="show annotation uppercase semi-bold faded bottom-margin-xs">data Management</span> -->

        <h2 class="tubs semi-bold bottom-margin-sm">Confidently send messages with real-time data</h2>

        <p class="medium bottom-margin-md">Vero tracks your customer's actions, as they happen, and gives you a clear view of the data. You can feel confident in sending the right message, at the right time.</p>

        <a class="btn btn--medium btn--outline btn--primary" href="/event-manager">See your customer data</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="bg-dots-offset">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/event-manager.svg" alt="Visibility and clarity with Vero customer data">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner large-inner">
    <div class="inner small-inner flush-top flush-bottom center-text bottom-margin-lg">
      <!-- <span class="show annotation uppercase semi-bold faded bottom-margin-xs">Personalization</span> -->

      <h2 class="chunk semi-bold bottom-margin-sm">Send personalized emails and push notifications</h2>

      <p class="large">Improve the impact of every message you send your customers by including helpful and engaging content</p>
    </div>

    <div class="grid job-feature job-feature-thirds items-center">
      <div class="col md-right-text">
        <p class="medium bottom-margin-md">Add dynamic content to your email and push notifications using Liquid.</p>

        <a class="btn btn--medium btn--outline btn--primary" href="/email-personalization-liquid-guide">Personalize your content</a>
        </a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="bg-dots-offset">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/personalized-emails-push-notifications-vero.svg" alt="Send personalized emails and push notifications with Vero">
        </div>
      </div>
      <div class="col">
        <!-- <p class="medium">Pull data from APIs into messages at send time to give customers a truly personalized experience.</p> -->

        <p class="medium bottom-margin-md">Send customers account usage updates, tailored product recommendations and more.</p>

        <a class="btn btn--medium btn--outline btn--primary" href="/fusion">Load data from it's source</a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding bottom-border-light">
  <div class="inner large-inner flush-bottom">
    <div class="grid job-feature job-feature-left">
      <div class="col-main">
        <!-- <span class="show annotation uppercase semi-bold faded bottom-margin-xs">Reporting</span> -->

        <h2 class="tubs semi-bold bottom-margin-sm">Optimize for growth</h2>

        <p class="medium bottom-margin-md">Test and optimize your customer journeys to drive more growth for your business. Easily design and manage your A/B tests with Vero's flexible and powerful features.</p>

        <a class="btn btn--medium btn--outline btn--primary" href="https://help.getvero.com/articles/a-b-testing-email-campaigns">Robust A/B testing</a>
      </div>
      <div class="col-aside flex justify-center">
        <div class="bg-dots-offset">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/jobs/optimize-for-growth-vero.svg" alt="Optimize for growth with Vero">
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

    <form class="js-signup-form home-signup-form lg-horizontal-margin-xl stack-xs bottom-margin-sm"
      action="https://formkeep.com/f/5401a0ae5cb8"
      accept-charset="UTF-8"
      enctype="multipart/form-data"
      method="POST">

      <div class="flex flex-column sm-flex-row">
        <input class="bg-white form-control full-width" id="user_email" type="email" name="email" placeholder="Your email address" required>

        <input class="btn btn--success btn--medium track-start-trial" element-position="bottom" type="submit" name="submit" value="Start a free trial">

        <input class="btn underline-link track-contact-us" element-position="bottom" type="submit" name="talk_to_us" value="Talk to us">
      </div>

      <div class="js-home-contact-msg home-contact-msg font-brand-error"></div>
    </form>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>
