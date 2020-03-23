<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = '';
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
      <p class="large">Our drag and drop editor uses <a class="underline-link-rev" href="#none">MJML</a> to ensure your emails are supported across major email clients.</p>

      <div class="flex flex-column xs-flex-row items-center justify-center">
        <a class="btn btn-large btn-success bottom-margin-xs xs-no-bottom-margin xs-right-margin-sm" href="https://app.getvero.com/signup">Start a free trial</a>

        <a class="btn btn-gray-darker btn-large btn-outline typeform-share link" id="talk_to_us" data-mode="popup" href="https://getvero.typeform.com/to/d9wZ4V" target="_blank">Talk to us</a>
      </div>
    </div>
    <div class="inner xlarge-inner">
      <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-1.png" alt="Vero's drag and drop editor main screen">
    </div>
  </section>
</section>
<?php
  no_content_genesis_footer();
?>