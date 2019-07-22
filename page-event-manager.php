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
    <h1 class="chunk regular bottom-margin-small biggie">Confidently send emails using real-time customer data</h1>
    <p class="no-top-margin medium">Vero's Event Manager gives marketing and engineering teams the visibility and clarity to collaborate and rapidly implement personalized email campaigns. </p>
  </div>
</section>
<section id="event-manager-event-schema" class="double-padding">
  <div class="inner large-inner center-text flush-bottom flush-top">
    <img class="center-text show responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-hero.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-hero@2x.png 2x"  alt="Confidently send emails using real-time customer data">
  </div>
</section>
<section id="event-manager-add-event" class="feature-section double-padding">
  <div class="inner halfs medium-inner left-padding-large right-padding-large flush-bottom">
    <div class="left primary">
      <h2 class="tubs regular bottom-margin-medium">Design email campaigns with placeholder events</h2>
      <p class="medium">With Vero's Event Manager you can use placeholder events to build and test triggered email campaigns before integrating any code into your website or application.<br><br>
      Marketing teams can design personalized customer journeys and then collaborate with engineering to rapidly implement them.</p>
    </div>
    <div class="right secondary">
      <img class="small-responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-add.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-add@2x.png 2x" alt="Design email campaigns with placeholder events">
    </div>
  </div>
</section>
<section id="event-manager-test-event" class="feature-section double-padding">
  <div class="inner halfs medium-inner small-reverse left-padding-large right-padding-large flush-bottom flush-top">
    <div class="left">
      <img class="fl-r small-responsive-image right-padding-medium" src="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-test.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/event-manager/event-test@2x.png 2x" alt="Test and debug automated emails">
    </div>
    <div class="right">
      <h2 class="tubs regular bottom-margin-medium">Test and debug automated emails</h2>
      <p class="medium">Simulate user activity by triggering test events for any customer profile in your Vero account and have complete confidence that your customers will receive the right emails at the right time.<br><br>Trigger live, individual emails to customers and test basic or sophisticated email campaigns with ease.</p>
    </div>
  </div>
</section>
<section id="features-more" class="double-padding">
  <div class="inner medium-inner top-padding-large bottom-padding-large">
    <p class="semi-bold center-text annotation uppercase font-brand-gray center-text no-top-margin bottom-margin-medium">AND MORE</p>
    <ul class="feature-list left-align unstyled-list grid grid-auto">
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
<section class="cta border-dark-blue bg-white center-text">
  <div class="cta-wrap">
    <h4 class="regular bottom-margin-smedium">Vero helps marketing and engineering teams use their data to create a better customer messaging experience</h4>

    <a class="btn btn-success btn-large bottom-margin-smedium" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>