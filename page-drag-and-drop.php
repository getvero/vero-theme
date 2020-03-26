<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'drag-and-drop';
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
      <ul class="unstyled-list relative drag-and-drop-hero-imgs">
        <li class="drag-and-drop-hero-img drag-and-drop-hero-img--1 relative md-center-text">
          <img class="d-inline-block responsive-image align-middle border border-radius-3 shadow-1" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-1.jpg" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-1@2x.jpg 2x" alt="Vero's drag and drop editor main screen">
        </li>
        <li class="drag-and-drop-hero-img drag-and-drop-hero-img--2 absolute">
          <img class="responsive-image align-middle border border-radius-3 shadow-1" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-2.jpg" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-2@2x.jpg 2x" alt="Image pane">
        </li>
        <li class="drag-and-drop-hero-img drag-and-drop-hero-img--3 absolute">
          <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dev/images/landing-pages/drag-and-drop/section.png" srcset="/wp-content/themes/vero/assets/dev/images/landing-pages/drag-and-drop/section@2x.png 2x" alt="">
        </li>
        <li class="drag-and-drop-hero-img drag-and-drop-hero-img--4 absolute">
          <img class="responsive-image align-middle border border-radius-3 shadow-1" src="/wp-content/themes/vero/assets/dev/images/landing-pages/drag-and-drop/color.png" srcset="/wp-content/themes/vero/assets/dev/images/landing-pages/drag-and-drop/color@2x.png 2x" alt="">
        </li>
      </ul>
    </div>
  </section>
</section>
<div class="drag-and-drop-features bg-offwhite">
  <section id="drag-and-drop-section-1">
    <div class="inner">
      <div class="w-sidebar w-sidebar--feature-md">
        <div class="col-main order-2 md-order-1">
          <h2 class="chunk bottom-margin-sm">Templates that work everywhere</h2>
          <p class="large">Easily design and build templates that work across all major devices and clients responsively. With our drag and drop editor there's no need to know HTML and all it's quirks.</p>
        </div>
        <div class="col-aside order-1 md-order-2 center-text md-right-text">
          <div class="d-inline-block relative drag-and-drop-feature-img">
            <img class="responsive-image align-middle relative" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/templates-that-work.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/templates-that-work@2x.png 2x" alt="Templates that work everywhere">
            <div class="circle circle--1 absolute lax" data-lax-scale="0 1, 75 0 | offset=-140" data-lax-anchor="#drag-and-drop-section-1"></div>
            <div class="circle circle--2 absolute lax" data-lax-scale="0 1, 75 0 | offset=20" data-lax-anchor="#drag-and-drop-section-1"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="drag-and-drop-section-2">
    <div class="inner">
      <div class="js-test w-sidebar w-sidebar--feature-md items-center">
        <div class="col-main order-2">
          <h2 class="chunk bottom-margin-sm">Keep your campaigns consistent</h2>
          <p class="large">Our WYSIWYG editor gives each member of your team the ability to edit the content of each campaign without worrying about breaking the look and feel of your templates.</p>
        </div>
        <div class="col-aside order-1">
          <div class="d-inline-block relative drag-and-drop-feature-img">
            <img class="responsive-image align-middle relative" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/campaigns-consistent.svg" alt="Keep campaigns consistent">
            <div class="circle circle--1 absolute lax" data-lax-scale="0 1, 50 0 | offset=-300" data-lax-anchor="#drag-and-drop-section-2"></div>
            <div class="circle circle--2 absolute lax" data-lax-scale="20 1, 100 0 | offset=-50" data-lax-anchor="#drag-and-drop-section-2"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
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
  </section>
  <section id="drag-and-drop-section-4">
     <div class="inner">
      <div class="w-sidebar w-sidebar--feature-md items-center">
        <div class="col-main order-2">
          <h2 class="chunk bottom-margin-sm">Easily personalize your messages</h2>
          <p class="large">Use dynamic variables throughout your drag-and-drop template with the click of a button.</p>
        </div>
        <div class="col-aside order-1">
          <div class="d-inline-block relative drag-and-drop-feature-img">
            <img class="responsive-image align-middle relative" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/personalizing-your-messages.svg" alt="Personalizing your messages">
            <div class="circle circle--1 absolute lax" data-lax-scale="0 1, 50 0 | offset=-100" data-lax-anchor="#drag-and-drop-section-4"></div>
            <div class="circle circle--2 absolute lax" data-lax-scale="50 1, 100 0" data-lax-anchor="#drag-and-drop-section-4"></div>
            <div class="circle circle--3 absolute lax" data-lax-scale="0 1, 50 0 | offset=-200" data-lax-anchor="#drag-and-drop-section-4"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<section class="double-padding drag-and-drop-more-features">
  <div class="inner large-inner">
    <h2 class="chunk center-text bottom-margin-lg">And more features</h2>

    <div class="w-sidebar w-sidebar--feature-lg">
      <div class="col-main">
        <ul class="unstyled-list drag-and-drop-feature-list">
          <li class="w-sidebar w-sidebar--icon">
            <div class="col-main">
              <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/defaults.svg" alt="">
            </div>
            <div class="col-aside">
              <h3 class="micro bottom-margin-xxs">Template defaults</h3>
              <p class="medium">Keep your templates on brand by setting default colors and fonts.</p>
            </div>
          </li>
          <li class="w-sidebar w-sidebar--icon">
            <div class="col-main">
              <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/liquid-data.svg" alt="">
            </div>
            <div class="col-aside">
              <h3 class="micro bottom-margin-xxs">Liquid data</h3>
              <p class="medium">Easily personalise by inserting customer or event data into your templates with Liquid.</p>
            </div>
          </li>
          <li class="w-sidebar w-sidebar--icon">
            <div class="col-main">
              <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/starting-templates.svg" alt="">
            </div>
            <div class="col-aside">
              <h3 class="micro bottom-margin-xxs">Starting template</h3>
              <p class="medium">Start from scratch or select one of our professionally designed templates as a starting point.</p>
            </div>
          </li>
          <li class="w-sidebar w-sidebar--icon">
            <div class="col-main">
              <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/wysiwyg.svg" alt="">
            </div>
            <div class="col-aside">
              <h3 class="micro bottom-margin-xxs">WYSIWYG</h3>
              <p class="medium">What you see is what you get. The content you're editing is exactly what your customers will see.</p>
            </div>
          </li>
        </ul>
      </div>

      <div class="col-aside drag-and-drop-more-features-img overflow-hidden">
        <img class="align-middle md-left-margin-lg" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/more-features.svg" alt="">
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner">
    <h3 class="micro font-brand-primary bottom-margin-lg center-text">Coming soon</h3>
    <ul class="unstyled-list grid grid-halfs">
      <li class="w-sidebar w-sidebar--icon">
        <div class="col-main">
          <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/data-inspector.svg" alt="Data inspector">
        </div>
        <div class="col-aside">
          <h3 class="micro bottom-margin-xxs">Data inspector</h3>
          <p class="medium">Preview your campaigns with real data to see how exactly they'll look for your customers.</p>
        </div>
      </li>
      <li class="w-sidebar w-sidebar--icon">
        <div class="col-main">
          <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/reusable-blocks.svg" alt="Reusable blocks">
        </div>
        <div class="col-aside">
          <h3 class="micro bottom-margin-xxs">Reusable blocks</h3>
          <p class="medium">Creating a library of common snippets that can be placed in your templates on the fly.</p>
        </div>
      </li>
      <li class="w-sidebar w-sidebar--icon">
        <div class="col-main">
          <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/exporting.svg" alt="Exporting">
        </div>
        <div class="col-aside">
          <h3 class="micro bottom-margin-xxs">Exporting</h3>
          <p class="medium">For more advanced control easily export and edit them in our HTML mode.</p>
        </div>
      </li>
      <li class="w-sidebar w-sidebar--icon">
        <div class="col-main">
          <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/importing.svg" alt="Importing">
        </div>
        <div class="col-aside">
          <h3 class="micro bottom-margin-xxs">Importing</h3>
          <p class="medium">Start from scratch or select one of our professionally designed templates as a starting point.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="double-padding bg-offwhite relative drag-and-drop-cta">
  <div class="inner tiny-inner center-text relative z-1">
    <span class="show font-brand-gray-dark semi-bold annotation uppercase bottom-margin-md">Start a trial</span>
    <h2 class="chunk bottom-margin-md">Scale personalized customer messaging</h2>

    <div class="flex flex-column xs-flex-row items-center justify-center">
      <a class="btn btn-large btn-success bottom-margin-xs xs-no-bottom-margin xs-right-margin-sm" href="https://app.getvero.com/signup">Start a free trial</a>

      <a class="btn btn-gray-darker btn-large btn-outline typeform-share link" id="talk_to_us" data-mode="popup" href="https://getvero.typeform.com/to/d9wZ4V" target="_blank">Talk to us</a>
    </div>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>