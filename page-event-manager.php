<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'more-page';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section banner-name="Send emails using real-time data" element-position="top">
  <div class="inner tiny-inner center-text stack-lg">
    <span class="flex items-center justify-center atomic semi-bold font-gray-dark">
      <a href="/features">Features</a>
      <svg class="horizontal-margin-xxxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg>
      Event Management
    </span>

    <div class="stack-md">
      <div class="stack-xs">
        <h1 class="biggie semi-bold">Confidently send emails using real-time customer data</h1>
        <p class="large">Give marketing and engineering teams the visibility and clarity to collaborate and rapidly implement personalized email campaigns.</p>
      </div>
      <a class="btn btn--success btn--large track-start-trial" element-position="top"  href="http://app.getvero.com/signup">Start a free trial</a>
    </div>
  </div>
</section>
<section id="event-manager-event-schema" class="double-padding">
  <div class="inner large-inner center-text flush-bottom flush-top">
    <img class="center-text show responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-hero.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-hero@2x.png 2x"  alt="Confidently send emails using real-time customer data">
  </div>
</section>
<section id="event-manager-add-event" class="double-padding">
  <div class="inner halfs medium-inner flush-bottom">
    <div class="left primary stack-sm">
      <h2 class="tubs semi-bold">Design email campaigns with placeholder events</h2>
      <p class="medium">With Vero's Event Manager you can use placeholder events to build and test triggered email campaigns before integrating any code into your website or application.</p>
      <p class="medium">Marketing teams can design personalized customer journeys and then collaborate with engineering to rapidly implement them.</p>
    </div>
    <div class="right secondary">
      <img class="small-responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-add.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-add@2x.png 2x" alt="Design email campaigns with placeholder events">
    </div>
  </div>
</section>
<section id="event-manager-test-event" class="double-padding">
  <div class="inner halfs medium-inner small-reverse flush-bottom flush-top">
    <div class="left">
      <img class="fl-r small-responsive-image right-padding-lg" src="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-test.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-test@2x.png 2x" alt="Test and debug automated emails">
    </div>
    <div class="right stack-sm">
      <h2 class="tubs semi-bold">Test and debug automated emails</h2>
      <p class="medium">Simulate user activity by triggering test events for any customer profile in your Vero account and have complete confidence that your customers will receive the right emails at the right time.</p>
      <p class="medium">Trigger live, individual emails to customers and test basic or sophisticated email campaigns with ease.</p>
    </div>
  </div>
</section>
<section id="features-more" class="double-padding">
  <div class="inner medium-inner top-padding-xl bottom-padding-xl">
    <p class="semi-bold center-text annotation uppercase font-gray center-text no-top-margin bottom-margin-lg">AND MORE</p>
    <ul class="feature-list left-align unstyled-list grid grid-halfs">
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-error.svg" alt="See when data stops flowing">
        <div class="right">
          <h3 class="medium regular">See when data stops flowing</h3>
          <p>See events that are no longer firing and the campaigns they're linked to. Debug and troubleshoot campaigns that are not working with greater clarity.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-detail.svg" alt="Troubleshoot every inch of data">
        <div class="right">
          <h3 class="medium regular">Troubleshoot every inch of data</h3>
          <p>View recently fired events and their attached properties to make sure your data reflects the personalization in your emails.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-tidy.svg" alt="Keep your account clean">
        <div class="right">
          <h3 class="medium regular">Keep your account clean</h3>
          <p>Rename events in plain English, record event descriptions and know which events you can remove due to inactivity to keep your Vero account in order.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-speed.svg" alt="Move faster">
        <div class="right">
          <h3 class="medium regular">Move faster</h3>
          <p>Set up your entire Vero account or any new email campaign, and design your ideal workflow before integrating code.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
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