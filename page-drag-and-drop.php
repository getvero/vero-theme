<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'drag-and-drop';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<div class="bg-dark-blue drag-and-drop-banner z-9999">
  <a class="font-white" href="#none">
    <p><span>We built this editor <strong>from the ground up</strong> rather than just using a plugin.</span> <span class="font-white underline-link semi-bold">Find out why</span></p>
  </a>
</div>
<?php
  do_action( 'genesis_before_header' );
  do_action( 'genesis_header' );
  do_action( 'genesis_after_header' );
?>
<section class="drag-and-drop-hero overflow-hidden">
  <div class="inner tiny-inner flush-bottom center-text stack-lg">
    <span class="flex items-center justify-center atomic semi-bold font-brand-gray-dark">
      <a href="/features">Features</a>
      <svg class="horizontal-margin-xxxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg>
      Drag and Drop
    </span>

    <div>
      <h1 class="hulk semi-bold bottom-margin-sm">Design beautiful emails</h1>

      <p class="large bottom-margin-md">Help your team deliver great looking and highly engaging emails to every device without writing a line of code.</p>
    </div>

    <div class="flex flex-column xs-flex-row items-center justify-center">
      <a class="btn btn-large btn-success bottom-margin-xs xs-no-bottom-margin xs-right-margin-sm" href="https://app.getvero.com/signup">Try for free</a>

      <a class="btn btn-gray-darker btn-large btn-outline typeform-share link" id="talk_to_us" data-mode="popup" href="https://getvero.typeform.com/to/d9wZ4V" target="_blank">Talk to us</a>
    </div>
  </div>
  <div class="inner xlarge-inner">
    <ul class="unstyled-list relative drag-and-drop-hero-imgs lg-center-text">
      <li class="d-inline-block relative z-4">
        <div class="drag-and-drop-line-1 absolute z-999">
          <svg xmlns="http://www.w3.org/2000/svg" width="242" height="85"><path fill="none" stroke="#6F0DFB" stroke-dasharray="3 8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M74 84h26.202c11.836 0 21.43-9.595 21.43-21.43 0-11.836-9.594-21.43-21.43-21.43H21.07C9.986 41.14 1 32.153 1 21.07 1 9.985 9.986 1 21.07 1h223.442"/></svg>
        </div>
        <div class="drag-and-drop-line-2 absolute z-999">
          <svg xmlns="http://www.w3.org/2000/svg" width="203" height="85"><path fill="none" stroke="#6FD350" stroke-dasharray="3 8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M65.262 1h26.565c11.836 0 21.43 9.595 21.43 21.43 0 11.836-9.594 21.43-21.43 21.43H21.07C9.986 43.86 1 52.847 1 63.93 1 75.015 9.986 84 21.07 84h180.407"/></svg>
        </div>
        <div class="drag-and-drop-hero-img drag-and-drop-hero-img--1">
          <img class="d-inline-block responsive-image align-middle border border-radius-3 shadow-1" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-1.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-1@2x.png 2x" alt="Vero's drag and drop editor main screen">
        </div>
        <div class="drag-and-drop-hero-img drag-and-drop-hero-img--4 absolute">
          <img class="responsive-image align-middle border border-radius-3 shadow-1" src="/wp-content/themes/vero/assets/dev/images/landing-pages/drag-and-drop/color.png" srcset="/wp-content/themes/vero/assets/dev/images/landing-pages/drag-and-drop/color@2x.png 2x" alt="">
        </div>
      </li>
      <li class="drag-and-drop-hero-img drag-and-drop-hero-img--2 absolute z-1">
        <img class="responsive-image align-middle border border-radius-3 shadow-1" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-2.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/hero-2@2x.png 2x" alt="Image pane">
      </li>
      <li class="drag-and-drop-hero-img drag-and-drop-hero-img--3 absolute z-5">
        <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dev/images/landing-pages/drag-and-drop/two-columns.png" srcset="/wp-content/themes/vero/assets/dev/images/landing-pages/drag-and-drop/two-columns.png 2x" alt="">
      </li>
    </ul>
  </div>

</section>
<div class="drag-and-drop-features bg-dark-blue-lighter">
  <section id="drag-and-drop-section-1">
    <div class="inner">
      <div class="w-sidebar w-sidebar--feature-sm items-center">
        <div class="col-main order-2 sm-order-1">
          <h2 class="chunk bottom-margin-sm">Beautiful emails in minutes, from scratch</h2>
          <p class="large">Enable your team to build the content they need by creating a library of common snippets that can be placed in your templates on the fly.</p>
        </div>
        <div class="col-aside order-1 sm-order-2 center-text sm-right-text">
          <div class="d-inline-block relative drag-and-drop-feature-img">
            <img class="align-middle absolute z-2 lax"
                data-lax-translate-x="200 0, 170 20, 140 40, 90 220 | offset=-200"
                data-lax-translate-y="200 0, 100 100, 90 90 | offset=-200"
                data-lax-anchor="#drag-and-drop-section-1"
              src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/beautiful-emails-drag.svg" alt="Beautiful emails dragging">
            <img class="responsive-image align-middle relative z-1" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/beautiful-emails.svg" alt="Beautiful emails in minutes">
            <div class="shape shape--1 border-radius-100 absolute lax" data-lax-scale="600 0, 400 1" data-lax-anchor="#drag-and-drop-section-1"></div>
            <div class="shape shape--2 border-radius-100 absolute lax" data-lax-scale="450 0, 300 1" data-lax-anchor="#drag-and-drop-section-1"></div>
            <div class="shape shape--3 border-radius-100 absolute lax" data-lax-scale="400 0, 350 1" data-lax-anchor="#drag-and-drop-section-1"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="drag-and-drop-section-2">
    <div class="inner">
      <div class="w-sidebar w-sidebar--feature-sm">
        <div class="col-main order-2">
          <h2 class="chunk bottom-margin-sm">Templates that work everywhere</h2>
          <p class="large">Easily design and build templates that work across all major devices and clients responsively. With our drag and drop editor there's no need to know HTML and all it's quirks.</p>
        </div>
        <div class="col-aside order-1 center-text sm-left-text">
          <div class="d-inline-block relative drag-and-drop-feature-img">
            <img class="responsive-image align-middle relative z-1" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/templates-that-work.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/templates-that-work@2x.png 2x" alt="Templates that work everywhere">
            <div class="shape shape--1 border-radius-100 absolute lax" data-lax-scale="800 0, 600 1" data-lax-anchor="#drag-and-drop-section-2"></div>
            <div class="shape shape--2 border-radius-100 absolute lax" data-lax-scale="500 0, 420 1" data-lax-anchor="#drag-and-drop-section-2"></div>
            <div class="shape shape--3 border-radius-100 absolute lax" data-lax-scale="400 0, 320 1" data-lax-anchor="#drag-and-drop-section-2"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="drag-and-drop-section-3">
    <div class="inner">
      <div class="w-sidebar w-sidebar--feature-sm items-center">
        <div class="col-main order-2 sm-order-1">
          <h2 class="chunk bottom-margin-sm">Directly edit your content</h2>
          <p class="large">Our WYSIWYG editor gives each member of your team the ability to edit the content of each campaign without worrying about breaking the look and feel of your templates.</p>
        </div>
        <div class="col-aside order-1 sm-order-2 center-text sm-right-text">
          <div class="d-inline-block relative drag-and-drop-feature-img">
            <img class="responsive-image align-middle relative z-1" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/campaigns-consistent.svg" alt="Keep campaigns consistent">
            <div class="shape shape--1 border-radius-100 absolute lax" data-lax-scale="550 0, 475 1" data-lax-anchor="#drag-and-drop-section-3"></div>
            <div class="shape shape--2 border-radius-100 absolute lax" data-lax-scale="500 0, 415 1" data-lax-anchor="#drag-and-drop-section-3"></div>
            <div class="shape shape--3 border-radius-100 absolute lax" data-lax-scale="350 0, 290 1" data-lax-anchor="#drag-and-drop-section-3"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="drag-and-drop-section-4">
     <div class="inner">
      <div class="w-sidebar w-sidebar--feature-sm items-center">
        <div class="col-main order-2">
          <h2 class="chunk bottom-margin-sm">Easily personalize your messages</h2>
          <p class="large">Extend your personalisation with powerful <a class="underline-link" href="">Liquid templating language</a>. Use dynamic variables throughout your drag-and-drop template with the click of a button.</p>
        </div>
        <div class="col-aside order-1 center-text sm-left-text">
          <div class="d-inline-block relative drag-and-drop-feature-img">
            <img class="responsive-image align-middle relative z-1" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/personalizing-your-messages.svg" alt="Personalizing your messages">
            <div class="shape shape--1 border-radius-100 absolute lax" data-lax-scale="600 0, 500 1" data-lax-anchor="#drag-and-drop-section-4"></div>
            <div class="shape shape--2 border-radius-100 absolute lax" data-lax-scale="400 0, 300 1" data-lax-anchor="#drag-and-drop-section-4"></div>
            <div class="shape shape--3 border-radius-100 absolute lax" data-lax-scale="300 0, 275 1" data-lax-anchor="#drag-and-drop-section-4"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<section class="double-padding drag-and-drop-more-features">
  <div class="inner large-inner">
    <h2 class="tubs center-text bottom-margin-lg">And more features</h2>

    <div class="w-sidebar w-sidebar--feature-lg">
      <div class="col-main">
        <ul class="unstyled-list drag-and-drop-feature-list grid grid-halfs center-text lg-left-text">
          <li class="w-sidebar w-sidebar--icon">
            <div class="col-main">
              <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/defaults.svg" alt="">
            </div>
            <div class="col-aside">
              <h3 class="micro bottom-margin-xxs">Template defaults</h3>
              <p class="medium">Keep your templates on-brand by setting default colors and fonts.</p>
            </div>
          </li>
          <li class="w-sidebar w-sidebar--icon">
            <div class="col-main">
              <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/liquid-data.svg" alt="">
            </div>
            <div class="col-aside">
              <h3 class="micro bottom-margin-xxs">Dynamic content</h3>
              <p class="medium">Easily personalise by inserting customer data into your templates with <a class="underline-link" href="/email-personalization-liquid-guide">Liquid</a>.</p>
            </div>
          </li>
          <li class="w-sidebar w-sidebar--icon">
            <div class="col-main">
              <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/starting-templates.svg" alt="">
            </div>
            <div class="col-aside">
              <h3 class="micro bottom-margin-xxs">Starting templates</h3>
              <p class="medium">Start from scratch or select one of our professionally designed templates as a starting point.</p>
            </div>
          </li>
          <li class="w-sidebar w-sidebar--icon">
            <div class="col-main">
              <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/wysiwyg.svg" alt="">
            </div>
            <div class="col-aside">
              <h3 class="micro bottom-margin-xxs">WYSIWYG</h3>
              <p class="medium">What you see is what you get. The content you're editing is exactly what your customers will see.</p>
            </div>
          </li>
        </ul>
      </div>

      <div class="col-aside hide md-show drag-and-drop-more-features-img overflow-hidden">
        <div class="relative">
          <div class="drag-and-drop-line-1 absolute z-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="134" height="82"><path fill="none" stroke="#6FD350" stroke-dasharray="3 8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M134 1H76.985C66.407 1 57.832 9.575 57.832 20.153c0 10.579 8.575 19.154 19.153 19.154h21.326c11.513 0 20.846 9.333 20.846 20.846 0 11.514-9.333 20.847-20.846 20.847H-5h0"/></svg>
          </div>

          <div class="drag-and-drop-line-2 absolute z-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="294" height="68"><path fill="none" stroke="#01B2D0" stroke-dasharray="3 8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h105.017c9.763 0 17.677 7.914 17.677 17.677s-7.914 17.678-17.677 17.678h-46.41c-8.463 0-15.323 6.86-15.323 15.322C44.284 60.14 51.144 67 59.607 67H297"/></svg>
          </div>

          <img class="align-middle md-left-margin-lg" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/more-features.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/more-features@2x.png 2x" alt="More features">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner center-text lg-left-text">
    <h3 class="tubs bottom-margin-lg center-text">Coming soon</h3>
    <ul class="unstyled-list grid grid-halfs">
      <li class="w-sidebar w-sidebar--icon">
        <div class="col-main">
          <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/data-inspector.svg" alt="Data inspector">
        </div>
        <div class="col-aside">
          <h3 class="micro bottom-margin-xxs">Data inspector</h3>
          <p class="medium">Preview your campaigns with real data to see how exactly they'll look for your customers.</p>
        </div>
      </li>
      <li class="w-sidebar w-sidebar--icon">
        <div class="col-main">
          <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/reusable-blocks.svg" alt="Reusable blocks">
        </div>
        <div class="col-aside">
          <h3 class="micro bottom-margin-xxs">Reusable blocks</h3>
          <p class="medium">Create a library of common snippets that can be placed in your templates on the fly.</p>
        </div>
      </li>
      <li class="w-sidebar w-sidebar--icon">
        <div class="col-main">
          <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/exporting.svg" alt="Exporting">
        </div>
        <div class="col-aside">
          <h3 class="micro bottom-margin-xxs">Exporting</h3>
          <p class="medium">For more advanced control, easily export and edit your templates as HTML.</p>
        </div>
      </li>
      <li class="w-sidebar w-sidebar--icon">
        <div class="col-main">
          <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/drag-and-drop/icon/importing.svg" alt="Importing">
        </div>
        <div class="col-aside">
          <h3 class="micro bottom-margin-xxs">Importing</h3>
          <p class="medium">Import your existing MJML templates and edit them visually.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="double-padding bg-offwhite relative drag-and-drop-cta border-bottom">
  <div class="inner tiny-inner center-text relative z-1">
    <span class="show font-brand-gray-dark semi-bold annotation uppercase bottom-margin-md">Start a trial</span>
    <h2 class="chunk bottom-margin-md">Scale personalized customer messaging</h2>

    <div class="flex flex-column xs-flex-row items-center justify-center">
      <a class="btn btn-large btn-success bottom-margin-xs xs-no-bottom-margin xs-right-margin-sm" href="https://app.getvero.com/signup">Start a free trial</a>

      <a class="btn btn-gray-darker btn-large btn-outline typeform-share link" id="talk_to_us" data-mode="popup" href="https://getvero.typeform.com/to/d9wZ4V" target="_blank">Talk to us</a>
    </div>
  </div>
</section>
<section class="micro-padding">
  <div class="inner center-text">
    <p class="annotation font-brand-gray-dark center-text">Illustrations by <a class="underline-link-rev" href="#none">icons8.com</a></p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>