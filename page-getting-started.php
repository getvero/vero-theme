<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'getting-started';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="push-notifications-hero">
  <div class="inner tiny-inner flush-bottom center-text">
    <span class="flex items-center justify-center feature-label bottom-margin-small xs-bottom-margin-medium"><a class="unstyled" href="/features">Features</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg> Push Notifications</span>
    <h1 class="hulk bottom-margin-tiny">Getting Started</h1>
    <p class="large">Keep customers coming back with timely, personalized, and actionable push notifications.</p>
    <a class="btn btn-success btn-large bottom-margin-smedium" href="https://app.getvero.com/signup">Get started</a>
  </div>
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
<section class="bg-offwhite">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk bottom-margin-small">Design, manage and optimize your mobile push messages</h4>

    <a class="btn btn-success btn-large bottom-margin-small" href="https://app.getvero.com/signup">Get started</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>