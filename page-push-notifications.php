<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'push-notifications';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section>
  <div class="inner small-inner center-text bottom-padding-medium">
    <h1 class="hulk bottom-margin-tiny">Mobile Push Notifications</h1>
    <p class="medium">Keep customers coming back with timely, personal, and actionable push notifications.</p>
    <a class="btn btn-success btn-large bottom-margin-smedium full-width" href="https://app.getvero.com/signup">Get started</a>
  </div>
</section>
<section class="bg-dark-blue">
  <div class="inner font-white center-text">
    <h2 class="chunk">One workflow for email and push messages</h2>
    <p class="medium">Easily manage and monitor complex customer journeys in one place.</p>
  </div>
</section>
<section>
  <div class="inner small-inner flush-bottom center-text">
    <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/toggle.svg" alt="Seamlessly edit and preview messages on iOS and Android">
    <h2 class="chunk">Seamlessly edit and preview messages on iOS and Android</h2>
    <p class="medium">Easily manage and monitor complex customer journeys in one place.</p>

    <div class="d-inline-block bg-dots bg-dots-offset">
      <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/toggle.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/toggle@2x.png 2x"  alt="Seamlessly edit and preview messages on iOS and Android">
    </div>
  </div>
</section>
<section>
  <div class="inner small-inner flush-bottom center-text">
    <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/personalize.svg" alt="Create personalized content">
    <h2 class="chunk">Create personalized content</h2>
    <p class="medium">Add Liquid templating language to deliver helpful push messages.</p>

    <div class="d-inline-block bg-dots bg-dots-offset">
      <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/create-personalized-content.svg" alt="Create personalized content">
    </div>
  </div>
</section>
<section>
  <div class="inner small-inner flush-bottom center-text">
    <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push.svg" alt="Push messages at the right time">
    <h2 class="chunk">Push messages at the right time</h2>
    <p class="medium">Schedule or trigger messages based on customer behavior.</p>

    <div class="d-inline-block bg-dots bg-dots-offset">
      <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/push@2x.png 2x" alt="Push messages at the right time">
    </div>
  </div>
</section>
<section>
  <div class="inner small-inner center-text">
    <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing.svg" alt="Test and optimize">
    <h2 class="chunk">Test and optimize</h2>
    <p class="medium">A/B test campaigns to improve customer engagement</p>

    <div class="d-inline-block bg-dots bg-dots-offset">
      <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/push-notifications/ab-testing@2x.png 2x" alt="Push messages at the right time">
    </div>
  </div>
</section>
<section>
  <div class="inner small-inner center-text">
    <h4 class="chunk bottom-margin-smedium">Design, manage and optimize your mobile push messages</h4>

    <a class="btn btn-success btn-large bottom-margin-smedium" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>