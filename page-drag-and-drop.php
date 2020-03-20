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
      <span class="flex items-center justify-center atomic semi-bold font-brand-gray-dark bottom-margin-sm xs-bottom-margin-lg">
        <a href="/features">Features</a>
        <svg class="horizontal-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg>
        Drag and Drop
      </span>

      <h1 class="hulk bottom-margin-xs">Design beautiful emails</h1>
      <p class="large">Keep customers coming back with timely, personalized, and actionable push notifications.</p>
      <a class="btn btn-success btn-large bottom-margin-md" href="https://app.getvero.com/signup">Get started</a>
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
<?php
  no_content_genesis_footer();
?>