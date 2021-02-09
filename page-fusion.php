<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'fusion';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="fusion-hero" banner-name="Emails that can talk to APIs" element-position="top">
  <div class="inner center-text flush-bottom stack-lg">
    <span class="flex items-center justify-center atomic semi-bold font-gray-dark">
      <a href="/features">Features</a>
      <svg class="horizontal-margin-xxxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg>
      Fusion
    </span>

    <div class="stack-md">
      <div class="stack-xs">
        <h1 class="biggie semi-bold">Emails that can talk to APIs</h1>
        <p class="large">Load data from its origin for greater accuracy and flexibility.</p>
      </div>
      <a class="btn btn--success btn--large track-start-trial" element-position="top"  href="http://app.getvero.com/signup/newsletters">Start a free trial</a>
    </div>

    <div class="overflow-hidden" style="height: 250px;">
      <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-hero.svg" alt="emails that can talk to APIs">
    </div>
  </div>
</section>
<section class="bg-dark-blue-lighter double-padding">
  <div class="inner small-inner flush-bottom bottom-margin-md center-text">
    <div class="stack-xxs">
      <h2 class="chunk semi-bold">Load data from its source</h2>
      <p class="large">Use APIs to access data where it originates: databases, data models or third party platforms.</p>
    </div>
  </div>
  <div class="inner small-inner center-text">
    <div class="fusion-api-diagram grid">
      <div>
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/api-endpoint.svg" alt="Connect an API endpoint">
      </div>
      <div class="flex items-center justify-center">
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/newsletter.svg" alt="Add data to emails using Liquid<">
      </div>
      <div class="stack-xxs">
        <h3 class="atomic semi-bold">Connect an API endpoint</h3>
        <p>Add an external data source URL to an email using Vero's data inspector. To load specific user or event data, Vero can pass identifying attributes with every API request.</p>
      </div>
      <div class="stack-xxs">
        <h3 class="atomic semi-bold">Add data to emails using Liquid</h3>
        <p>Data is loaded for access via Liquid tags, enabling you access the full JSON object and insert attributes (or HTML) into your email content, just like this: <code>{{external.user_region}}</code>.</p>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner center-text stack-xxs">
    <div>
      <h2 class="micro semi-bold">Example API endpoint</h2>
      <pre class="language-html"><code>https://api.yoursite.com/people-you-may-know/{{user.id}}</code></pre>
    </div>
    <div class="flex">
      <div class="fusion-code-json right-margin-xxs">
        <pre data-src="/wp-content/themes/vero/snippets/fusion-json.json"></pre>
      </div>
      <div class="fusion-code-html">
        <pre data-src="/wp-content/themes/vero/snippets/fusion-html.html"></pre>
      </div>
    </div>
  </div>
</section>
<section class="bg-dark-blue-lighter double-padding">
  <div class="inner small-inner flush-bottom bottom-margin-lg center-text">
    <div class="stack-xxs">
      <h2 class="chunk semi-bold">Email as a true extension of your product</h2>
      <p class="large">Fusion leverages the data powering your product on-site, enabling you to craft superior interactions off-site.</p>
    </div>
  </div>
  <div class="inner flush-bottom">
    <ul class="feature-list unstyled-list grid grid-thirds">
      <li class="stack-xs center-text">
        <svg class="align-middle" width="300" height="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g transform="translate(130 8)"><rect stroke="#F15242" stroke-width="2" fill="#FFF" x="1" y="1" width="38" height="46" rx="4"/><circle fill-opacity=".4" fill="#F15242" cx="20" cy="21" r="9"/><rect fill-opacity=".4" fill="#F15242" x="11" y="34" width="18" height="2" rx="1"/></g><g transform="translate(86 8)"><rect stroke="#01B2D0" stroke-width="2" fill="#FFF" x="1" y="1" width="38" height="46" rx="4"/><circle fill-opacity=".4" fill="#01B2D0" cx="20" cy="21" r="9"/><rect fill-opacity=".4" fill="#01B2D0" x="11" y="34" width="18" height="2" rx="1"/></g><g transform="translate(174 8)"><rect stroke="#FFC111" stroke-width="2" fill="#FFF" x="1" y="1" width="38" height="46" rx="4"/><rect fill-opacity=".4" fill="#FFC111" x="11" y="34" width="18" height="2" rx="1"/><circle fill-opacity=".4" fill="#FFC111" cx="20" cy="21" r="9"/></g></g></svg>

        <div class="stack-xs">
          <h3 class="semi-bold atomic">Recommendations</h3>
          <p class="light">Access data models and insert dynamically calculated product recommendation emails tailored specifically to each customer.</p>
        </div>
      </li>
      <li class="stack-xs center-text">
        <svg class="align-middle" width="300" height="64" xmlns="http://www.w3.org/2000/svg"><g transform="translate(80 8)" fill="none" fill-rule="evenodd"><rect stroke="#6F0DFB" stroke-width="2" fill="#FFF" x="1" y="1" width="138" height="46" rx="4"/><g fill="#6F0DFB"><path d="M24 32a8 8 0 11-8-8v8z" fill-opacity=".4"/><path d="M18 22a8 8 0 018 8h-8z" fill-opacity=".2"/></g><g fill="#6F0DFB"><path d="M48 32a8 8 0 11-8-8v8z" fill-opacity=".4"/><path d="M42 22a8 8 0 018 8h-8z" fill-opacity=".2"/></g><g fill="#6F0DFB"><path d="M72 32a8 8 0 11-8-8v8z" fill-opacity=".4"/><path d="M66 22a8 8 0 018 8h-8z" fill-opacity=".2"/></g><rect fill="#6F0DFB" opacity=".2" x="8" y="8" width="64" height="2" rx="1"/><rect fill="#6F0DFB" opacity=".4" x="8" y="12" width="48" height="2" rx="1"/><path fill-opacity=".4" fill="#6F0DFB" d="M124 8h8v32h-8z"/><path fill-opacity=".2" fill="#6F0DFB" d="M112 12h8v28h-8z"/><path fill-opacity=".4" fill="#6F0DFB" d="M100 16h8v24h-8z"/><path fill-opacity=".2" fill="#6F0DFB" d="M88 20h8v20h-8z"/></g></svg>

        <div class="stack-xs">
          <h3 class="semi-bold atomic">Dynamic Data &amp; Charts</h3>
          <p class="light">Pull complex data structures or even fully rendered HTML charts to deliver unique weekly updates with usage details to each customer.</p>
        </div>
      </li>
      <li class="stack-xs center-text">
        <svg class="align-middle" width="300" height="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g transform="translate(130 8)"><rect stroke="#F15242" stroke-width="2" fill="#FFF" x="1" y="1" width="38" height="46" rx="4"/><circle fill-opacity=".4" fill="#F15242" cx="20" cy="21" r="9"/><rect fill-opacity=".4" fill="#F15242" x="11" y="34" width="18" height="2" rx="1"/></g><g transform="translate(86 8)"><rect stroke="#01B2D0" stroke-width="2" fill="#FFF" x="1" y="1" width="38" height="46" rx="4"/><circle fill-opacity=".4" fill="#01B2D0" cx="20" cy="21" r="9"/><rect fill-opacity=".4" fill="#01B2D0" x="11" y="34" width="18" height="2" rx="1"/></g><g transform="translate(174 8)"><rect stroke="#FFC111" stroke-width="2" fill="#FFF" x="1" y="1" width="38" height="46" rx="4"/><rect fill-opacity=".4" fill="#FFC111" x="11" y="34" width="18" height="2" rx="1"/><circle fill-opacity=".4" fill="#FFC111" cx="20" cy="21" r="9"/></g></g></svg>

        <div class="stack-xs">
          <h3 class="semi-bold atomic">Delightful Details</h3>
          <p class="light">Impress your users with personalised enriched data pulled from services like OpenWeather, Clearbit and more.</p>
        </div>
      </li>
    </ul>
  </div>
  <div class="inner">
    <ul class="feature-list left-align unstyled-list grid grid-halfs">
      <li>
        <div class="right-margin-sm">
          <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect stroke="#F15242" stroke-width="2" x="9" y="23" width="30" height="20" rx="2"/><path d="M24 27a3 3 0 011 5.829V39h-2v-6.17A3.001 3.001 0 0124 27z" fill-opacity=".4" fill="#F15242"/><path d="M24 5c5.523 0 10 4.477 10 10v8h0-20v-8c0-5.523 4.477-10 10-10z" stroke="#F15242" stroke-width="2"/></g></svg>
        </div>

        <div class="stack-xxxs">
          <h3 class="atomic semi-bold">Access live data</h3>
          <p>Spend less time normalizing your data and building push-based data pipelines. With Fusion, you can access the most accurate data, when you need it.</p>
        </div>
      </li>
      <li>
        <div class="right-margin-sm">
          <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><g stroke="#FFC111" stroke-width="2" fill="none" fill-rule="evenodd"><circle stroke-opacity=".4" cx="15" cy="15" r="7"/><circle stroke-opacity=".4" cx="33" cy="15" r="7"/><circle cx="33" cy="33" r="7"/><circle cx="15" cy="33" r="7"/></g></svg>
        </div>

        <div class="stack-xxxs">
          <h3 class="atomic semi-bold">Smart caching</h3>
          <p>Fusion caches content as efficiently as possible. It loads all the permutations and keeps them on hand for the duration of your send.</p>
        </div>
      </li>
      <li>
        <div class="right-margin-sm">
          <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><g stroke="#6F0DFB" stroke-width="2" fill="none" fill-rule="evenodd"><g transform="translate(6 9)"><path stroke-opacity=".4" stroke-linecap="round" stroke-linejoin="round" d="M3 3l9.091 5.883V20"/><circle fill="#FFF" cx="3" cy="3" r="3"/></g><g transform="matrix(-1 0 0 1 42 9)"><path stroke-opacity=".4" stroke-linecap="round" stroke-linejoin="round" d="M3 3l9.091 5.883V20"/><circle fill="#FFF" cx="3" cy="3" r="3"/></g><g transform="translate(21 6)"><path stroke-opacity=".4" stroke-linecap="round" stroke-linejoin="round" d="M3 6v22"/><circle fill="#FFF" cx="3" cy="3" r="3"/></g><rect fill="#FFF" x="12" y="26" width="24" height="16" rx="2"/></g></svg>
        </div>

        <div class="stack-xxxs">
          <h3 class="atomic semi-bold">Works with third party APIs too…</h3>
          <p>Delight your customers by enriching your emails with data pulled from any number APIs.</p>
        </div>
      </li>
      <li class="flex">
        <div class="right-margin-sm">
          <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect stroke="#F15242" stroke-width="2" x="9" y="23" width="30" height="20" rx="2"/><path d="M24 27a3 3 0 011 5.829V39h-2v-6.17A3.001 3.001 0 0124 27z" fill-opacity=".4" fill="#F15242"/><path d="M24 5c5.523 0 10 4.477 10 10v8h0-20v-8c0-5.523 4.477-10 10-10z" stroke="#F15242" stroke-width="2"/></g></svg>
        </div>

        <div class="stack-xxxs">
          <h3 class="atomic semi-bold flex items-center">Multiple Authentication Methods <span class="pill pill--primary pill--small left-margin-xxxs">coming soon</span></h3>
          <p>Fusion supports several common authentication methods to give you fast and easy access to your APIs.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="double-padding">
  <div class="inner small-inner center-text">
    <div class="stack-xxs">
      <h2 class="chunk semi-bold">Built to Scale</h2>
      <p class="large">As your business grows, Vero scales with you. Concentrate on designing product experiences you customers love and let us handle delivering them, whether you have just one customer or 100 million.</p>
    </div>
  </div>
  <div class="inner flush-bottom">
    <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-scale.svg" alt="Scale with Fusion">
  </div>
</section>
<section class="double-padding bg-offwhite relative" banner-name="Scale personalized messages" element-position="bottom">
  <div class="inner small-inner center-text stack-md">
    <h4 class="chunk semi-bold">Vero helps marketing and engineering teams scale personalized customer messaging</h4>

    <div class="stack-md">
      <form class="js-signup-form track-signup-form home-signup-form lg-horizontal-margin-xxl stack-xs"
        <?php if (get_field('sign_up')) { ?>
          data-url="<?php echo get_field('sign_up'); ?>"
        <?php } ?>
        element-position="bottom"
        action="https://formkeep.com/f/5401a0ae5cb8"
        accept-charset="UTF-8"
        enctype="multipart/form-data"
        method="POST">

        <div class="flex flex-column sm-flex-row">
          <input class="bg-white form-control full-width" id="user_email" type="email" name="email" placeholder="Your email address" required>

          <input class="btn btn--success btn--medium track-start-trial" element-position="bottom" type="submit" name="submit" value="Start a free trial">
        </div>

        <div class="js-home-contact-msg home-contact-msg font-brand-error"></div>
      </form>

      <p class="medium">See Vero in action: <a class="underline-link regular track-contact-us" href="/demo/" element-position="bottom">schedule a demo</a></p>
    </div>
  </div>

  <span class="show cation regular font-gray-dark absolute full-width center-text" style="bottom: 24px">No credit card details required</span>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>