<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'push-notifications';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="push-notifications-hero">
  <div class="inner tiny-inner center-text">
    <span class="show annotation semi-bold uppercase faded bottom-margin-small smd-bottom-margin-medium">Features</span>
    <h1 class="hulk bottom-margin-tiny">Mobile Push Notifications</h1>
    <p>Keep customers coming back with timely, personal, and actionable push notifications.</p>
    <a class="btn btn-success btn-large bottom-margin-smedium" href="https://app.getvero.com/signup">Get started</a>
  </div>
  <div class="inner flush-top smd-flush-bottom full-width">
    <ul class="bg-dots bg-dots-offset unstyled-list flex flex-column smd-flex-row justify-center items-center push-list">
      <li class="no-margin">
        <img class="push border-radius-2 align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push-message-1.svg" alt="Push notification 1">
      </li>
      <li class="no-margin">
        <img class="push border-radius-2 align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push-message-2.svg" alt="Push notification 2">
      </li>
      <li class="no-margin">
        <img class="push border-radius-2 align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push-message-3.svg" alt="Push notification 3">
      </li>
    </ul>
  </div>
</section>
<section class="bg-dark-blue bg-dots">
  <div class="inner large-inner flush-bottom center-text">
    <div class="bg-dots bg-dots-offset">
      <picture>
        <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/workflow-mobile.png 1x, /wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/workflow-mobile@2x.png 2x">
        <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/workflow-desktop.png 1x, /wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/workflow-desktop@2x.png 2x">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/workflow-desktop.png 1x, 2x" alt="Workflow">
      </picture>
    </div>
  </div>
  <div class="inner top-padding-smedium font-white center-text">
    <h2 class="chunk bottom-margin-micro smd-bottom-margin-tiny">One workflow for email and push messages</h2>
    <p class="medium">Easily manage and monitor complex customer journeys in one place.</p>
  </div>
</section>
<section>
  <div class="inner flush-bottom">
    <div class="push-notifications-media center-text md-lg-left-text">
      <div class="col-aside">
        <img class="align-middle bottom-margin-tiny smd-bottom-margin-small" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/toggle.svg" alt="Seamlessly edit and preview messages on iOS and Android">
        <h2 class="chunk bottom-margin-micro smd-bottom-margin-tiny">Seamlessly edit and preview messages on iOS and Android</h2>
        <p>Easily manage and monitor complex customer journeys in one place.</p>
      </div>

      <div class="col-main flex justify-center">
        <div class="bg-dots bg-dots-offset md-lg-left-margin-auto">
          <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/toggle.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/toggle@2x.png 2x"  alt="Seamlessly edit and preview messages on iOS and Android">
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner flush-bottom">
    <div class="push-notifications-media center-text md-lg-left-text">
      <div class="col-aside md-lg-order-1">
        <img class="align-middle bottom-margin-tiny smd-bottom-margin-small" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/personalize.svg" alt="Create personalized content">
        <h2 class="chunk bottom-margin-micro smd-bottom-margin-tiny">Create personalized content</h2>
        <p>Add Liquid templating language to deliver helpful push messages.</p>
      </div>

      <div class="col-main flex justify-center md-lg-justify-start md-lg-order-0">
        <div class="d-inline-block bg-dots bg-dots-offset">
          <picture>
            <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/create-personalized-content-mobile.svg">
            <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/create-personalized-content-desktop.svg">
            <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/create-personalized-content-desktop.svg" alt="Create personalized content">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner flush-bottom">
    <div class="push-notifications-media center-text md-lg-left-text">
      <div class="col-aside">
        <img class="align-middle bottom-margin-tiny smd-bottom-margin-small" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push.svg" alt="Push messages at the right time">
        <h2 class="chunk bottom-margin-micro smd-bottom-margin-tiny">Push messages at the right time</h2>
        <p>Schedule or trigger messages based on customer behavior.</p>
      </div>

      <div class="col-main flex justify-center">
        <div class="d-inline-block bg-dots bg-dots-offset md-lg-left-margin-auto">
          <picture>
            <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push.png 1x, /wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push@2x.png 2x">
            <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push-desktop.png 1x, /wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push-desktop@2x.png 2x">
            <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/create-personalized-content-desktop.svg" alt="Push messages at the right time">
          </picture>

          <!-- <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push@2x.png 2x" alt="Push messages at the right time"> -->
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner">
    <div class="push-notifications-media center-text md-lg-left-text">
      <div class="col-aside md-lg-order-1">
        <img class="align-middle bottom-margin-tiny smd-bottom-margin-small" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing.svg" alt="Test and optimize">
        <h2 class="chunk bottom-margin-micro smd-bottom-margin-tiny">Test and optimize</h2>
        <p>A/B test campaigns to improve customer engagement.</p>
      </div>

      <div class="col-main flex justify-center md-lg-justify-start md-lg-order-0">
        <div class="d-inline-block bg-dots bg-dots-offset">
          <picture>
            <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing-mobile.png 1x, /wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing-mobile@2x.png 2x">
            <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing-desktop.png 1x, /wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing-desktop@2x.png 2x">
            <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing-desktop.png" alt="Test and optimize">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk bottom-margin-small">Design, manage and optimize your mobile push messages</h4>

    <a class="btn btn-success btn-large bottom-margin-small" href="https://app.getvero.com/signup">Get started</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  // add_page_tracking_code("ProductPage");
?>