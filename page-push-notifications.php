<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'push-notifications';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="push-notifications-hero">
  <section>
    <div class="inner tiny-inner flush-bottom center-text">
      <span class="flex items-center justify-center feature-label bottom-margin-small xs-bottom-margin-medium"><a class="unstyled" href="/features">Features</a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg> Push Notifications</span>
      <h1 class="hulk bottom-margin-tiny">Mobile Push Notifications</h1>
      <p class="large">Keep customers coming back with timely, personalized, and actionable push notifications.</p>
      <a class="btn btn-success btn-large bottom-margin-smedium" href="https://app.getvero.com/signup">Get started</a>
    </div>
  </section>
  <section class="xs-bg-dots tiny-padding">
    <div class="inner xs-flush-bottom">
      <ul class="unstyled-list flex flex-column xs-flex-row justify-center items-center push-list">
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
</section>
<section class="bg-offwhite">
  <div class="inner large-inner center-text">
    <div class="flex flex-column">
      <div class="order-1 xs-order-0 xs-bottom-margin-smedium">
        <picture class="d-inline-block bg-dots-offset">
          <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/workflow-mobile.png 1x, /wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/workflow-mobile@2x.png 2x">
          <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/workflow-desktop.png 1x, /wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/workflow-desktop@2x.png 2x">
          <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/workflow-desktop.png" alt="Workflow">
        </picture>
      </div>

      <div class="order-0 xs-order-1 bottom-margin-smedium xs-no-bottom-margin">
        <h2 class="chunk bottom-margin-micro xs-bottom-margin-tiny">One workflow for email and push messages</h2>
        <p class="large">Easily manage and monitor complex customer journeys in one place.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default center-text lg-left-text">
      <div class="col-main">
        <img class="align-middle bottom-margin-tiny xs-bottom-margin-small" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/toggle.svg" alt="Seamlessly edit and preview messages on iOS and Android">
        <h2 class="chunk bottom-margin-micro xs-bottom-margin-tiny">Seamlessly edit and preview messages on iOS and Android</h2>
        <p class="large">Toggle between platform views to quickly edit and view messages.</p>
      </div>

      <div class="col-aside flex justify-center">
        <div class="bg-dots-offset lg-left-margin-auto">
          <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/toggle.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/toggle@2x.png 2x"  alt="Seamlessly edit and preview messages on iOS and Android">
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default center-text md-left-text">
      <div class="col-main lg-order-1">
        <img class="align-middle bottom-margin-tiny xs-bottom-margin-small" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/personalize.svg" alt="Create personalized content">
        <h2 class="chunk bottom-margin-micro xs-bottom-margin-tiny">Create personalized content</h2>
        <p class="large">Add Liquid templating language to deliver helpful push messages.</p>
      </div>

      <div class="col-aside flex justify-center lg-justify-start lg-order-0">
        <div class="d-inline-block bg-dots-offset">
          <picture>
            <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/create-personalized-content-mobile.svg">
            <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/create-personalized-content-desktop.svg">
            <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/create-personalized-content-desktop.svg" alt="Create personalized content">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default center-text md-left-text">
      <div class="col-main">
        <img class="align-middle bottom-margin-tiny xs-bottom-margin-small" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push.svg" alt="Push messages at the right time">
        <h2 class="chunk bottom-margin-micro xs-bottom-margin-tiny">Push messages at the right time</h2>
        <p class="large">Schedule or trigger messages based on customer behavior.</p>
      </div>

      <div class="col-aside flex justify-center">
        <div class="d-inline-block bg-dots-offset lg-left-margin-auto">
          <picture>
            <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push.png 1x, /wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push@2x.png 2x">
            <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push-desktop.png 1x, /wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push-desktop@2x.png 2x">
            <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/create-personalized-content-desktop.svg" alt="Push messages at the right time">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default center-text md-left-text">
      <div class="col-main lg-order-1">
        <img class="align-middle bottom-margin-tiny xs-bottom-margin-small" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing.svg" alt="Test and optimize">
        <h2 class="chunk bottom-margin-micro xs-bottom-margin-tiny">Test and optimize</h2>
        <p class="large">A/B test campaigns to improve customer engagement.</p>
      </div>

      <div class="col-aside flex justify-center lg-justify-start lg-order-0">
        <div class="d-inline-block bg-dots-offset">
          <picture>
            <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing-mobile.png 1x, /wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing-mobile@2x.png 2x">
            <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing-desktop.png 1x, /wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing-desktop@2x.png 2x">
            <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing-desktop.png" alt="Test and optimize">
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