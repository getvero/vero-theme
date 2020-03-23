<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = '';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="drag-and-drop-hero">
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
      <ul class="unstyled-list relative center-text drag-and-drop-hero-imgs">
        <li class="drag-and-drop-hero-img drag-and-drop-hero-img--1 relative">
          <img class="responsive-image align-middle border border-radius-2 shadow-1" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-1.jpg" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-1@2x.jpg 2x" alt="Vero's drag and drop editor main screen">
        </li>
        <li class="drag-and-drop-hero-img drag-and-drop-hero-img--2">
          <img class="responsive-image align-middle border border-radius-2 shadow-1" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-2.jpg" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-2@2x.jpg 2x" alt="Image pane">
        </li>
      </ul>
    </div>
  </section>
</section>
<section>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-md">
      <div class="col-main order-2 md-order-1">
        <h2 class="chunk bottom-margin-sm">Templates that work everywhere</h2>
        <p class="large">Easily design and build templates that work across all major devices and clients responsively. With our drag and drop editor there's no need to know HTML and all it's quirks.</p>
      </div>
      <div class="col-aside order-1 md-order-2 center-text md-right-text">
        <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/templates-that-work.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/templates-that-work@2x.png 2x" alt="Templates that work everywhere">
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-md items-center">
      <div class="col-main order-2">
        <h2 class="chunk bottom-margin-sm">Keep your campaigns consistent</h2>
        <p class="large">Our WYSIWYG editor gives each member of your team the ability to edit the content of each campaign without worrying about breaking the look and feel of your templates.</p>
      </div>
      <div class="col-aside order-1">
        <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/campaigns-consistent.svg" alt="Keep campaigns consistent">
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-md items-center">
      <div class="col-main order-2 md-order-1">
        <h2 class="chunk bottom-margin-sm">Content editing on the fly</h2>
        <p class="large">Enable your team to build the content they need by creating a library of common snippets that can be placed in your templates on the fly.</p>
      </div>
      <div class="col-aside order-1 md-order-2">
        <p>Image</p>
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-md items-center">
      <div class="col-main order-2">
        <h2 class="chunk bottom-margin-sm">Easily personalize your messages</h2>
        <p class="large">Use dynamic variables throughout your drag-and-drop template with the click of a button.</p>
      </div>
      <div class="col-aside order-1">
        <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/personalizing-your-messages.svg" alt="Personalizing your messages">
      </div>
    </div>
  </div>
</section>
<section class="bg-dark-blue-lighter">
  <div class="inner large-inner">
    <h2 class="chunk">And more features</h2>

    <ul class="unstyled-list">
      <li>
        <h3 class="micro bottom-margin-xs">Template defaults</h3>
        <p class="medium">Keep your templates on brand by setting default colors and fonts.</p>
      </li>
      <li>
        <h3 class="micro bottom-margin-xs">Liquid data</h3>
        <p class="medium">Easily personalise by inserting customer or event data into your templates with Liquid.</p>
      </li>
      <li>
        <h3 class="micro bottom-margin-xs">Starting template</h3>
        <p class="medium">Start from scratch or select one of our professionally designed templates as a starting point.</p>
      </li>
      <li>
        <h3 class="micro bottom-margin-xs">WYSIWYG</h3>
        <p class="medium">What you see is what you get. The content you're editing is exactly what your customers will see.</p>
      </li>
    </ul>
  </div>
</section>
<section>
  <div class="inner">
    <h3>Coming soon</h3>
    <ul class="unstyled-list">
      <li>
        <h3 class="micro">Data inspector</h3>
        <p class="medium">Preview your campaigns with real data to see how exactly they'll look for your customers.</p>
      </li>
    </ul>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>