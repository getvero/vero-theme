<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'more-page';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="event-manager-heading">
  <div class="inner small-inner center-text bottom-padding-medium">
    <p class="semi-bold center-text smallish font-brand-primary center-text no-top-margin bottom-margin-medium">Event Management</p>
    <h1 class="bottom-margin-small biggie">Confidently send emails using real-time customer data</h1>
    <p class="no-top-margin medium">Vero's Event Manager gives marketing and engineering teams the visibility and clarity to collaborate and rapidly implement personalized email campaigns. </p>
  </div>
</section>
<section id="event-manager-event-schema" class="double-padding">
  <div class="inner large-inner center-text flush-bottom flush-top">
    <!-- <h1 class="tubs no-bottom-margin">Manage your event schema</h1>
    <p class="medium bottom-padding-medium">The "event stream" has become an industry standard for tracking real-time customer activity. Vero's Event Manager enables you to clearly see the customer activity you are tracking and brings clarity to your overall data pipeline.</p> -->
    <img src="/wp-content/themes/vero/assets/images/landing-pages/event-manager/event-hero.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/event-manager/event-hero@2x.png 2x" class="center-text  d-block responsive-image small-cover-image-150">
  </div>
</section>
<section id="event-manager-add-event" class="feature-section double-padding">
  <div class="inner halfs medium-inner left-padding-large right-padding-large flush-bottom">
    <div class="left primary">
      <h1 class="tubs regular no-bottom-margin">Design email campaigns with placeholder events</h1>
      <p class="medium top-margin-medium no-bottom-margin">With Vero's Event Manager you can use placeholder events to build and test triggered email campaigns before integrating any code into your website or application.<br><br>
      Marketing teams can design personalized customer journeys and then collaborate with engineering to rapidly implement them.</p>
    </div>
    <div class="right secondary">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/event-manager/event-add.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/event-manager/event-add@2x.png 2x" class="small-responsive-image hide-on-mobile">
    </div>
  </div>
</section>
<section id="event-manager-test-event" class="feature-section double-padding">
  <div class="inner halfs medium-inner small-reverse left-padding-large right-padding-large flush-bottom flush-top">
    <div class="left right-text">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/event-manager/event-test.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/event-manager/event-test@2x.png 2x" class="pull-right small-responsive-image right-padding-medium hide-on-mobile">
    </div>
    <div class="right">
      <h1 class="tubs regular no-bottom-margin">Test and debug automated emails</h1>
      <p class="medium top-margin-medium no-bottom-margin">Simulate user activity by triggering test events for any customer profile in your Vero account and have complete confidence that your customers will receive the right emails at the right time.<br><br>Trigger live, individual emails to customers and test basic or sophisticated email campaigns with ease.</p>
    </div>
  </div>
</section>
<section id="features-more" class="double-padding">
  <div class="inner medium-inner top-padding-large bottom-padding-large">
    <p class="semi-bold center-text annotation uppercase font-brand-gray center-text no-top-margin bottom-margin-medium">AND MORE</p>
    <ul class="feature-list left-align unstyled-list halfs">
      <li><img class="right-margin-small" src="/wp-content/themes/vero/assets/images/landing-pages/event-manager/event-error.svg"><div class="right"><p class="medium regular no-top-margin">See when data stops flowing</p><p class="light">See events that are no longer firing and the campaigns they're linked to. Debug and troubleshoot campaigns that are not working with greater clarity.</p></div></li>
      <li><img src="/wp-content/themes/vero/assets/images/landing-pages/event-manager/event-detail.svg"><div class="right"><p class="medium regular no-top-margin">Troubleshoot every inch of data</p><p class="light">View recently fired events and their attached properties to make sure your data reflects the personalization in your emails.</p></div></li>
      <li><img class="right-margin-small" src="/wp-content/themes/vero/assets/images/landing-pages/event-manager/event-tidy.svg"><div class="right"><p class="medium regular no-top-margin">Keep your account clean</p><p class="light">Rename events in plain English, record event descriptions and know which events you can remove due to inactivity to keep your Vero account in order.</p></div></li>
      <li><img src="/wp-content/themes/vero/assets/images/landing-pages/event-manager/event-speed.svg"><div class="right"><p class="medium regular no-top-margin">Move faster</p><p class="light">Set up your entire Vero account or any new email campaign, and design your ideal workflow before integrating code.</p></div></li>
    </ul>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title chunk semi-bold bottom-margin-small">Put your data first and craft better customer experiences</h1>
    <p class="sub-heading">Create a free account, import your data and see how Vero can help your team.</p>
    <form action="https://app.getvero.com/pre_signups" method='post' class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Create your account">
    </form>
    <p class="mini faded center-text mf-half center-block top-margin-small horizontal-padding-small">In order to provide our service to you, we must store your personal information. Any personal data that we collect will be handled in accordance with our <a href="/privacy">Privacy Notice</a>.</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>