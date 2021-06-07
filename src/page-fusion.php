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

    <div class="fusion-hero-img overflow-hidden">
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
<section class="double-padding fusion-api-example">
  <div class="inner center-text stack-sm">
    <h2 class="micro semi-bold">Example API endpoint</h2>

    <div class="stack-xxs">
      <pre class="language-html"><code>https://api.yoursite.com/people-you-may-know/{{user.id}}</code></pre>
      <div class="flex flex-wrap items-stretch">
        <div class="fusion-code-json bottom-margin-xs md-no-bottom-margin md-right-margin-xxs">
          <pre class="language-json" data-src="/wp-content/themes/vero/snippets/fusion-json.json"></pre>
        </div>
        <div class="fusion-code-html">
          <pre class="language-html" data-src="/wp-content/themes/vero/snippets/fusion-html.html"></pre>
        </div>
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
  <div class="inner border-bottom">
    <ul class="unstyled-list grid grid-thirds">
      <li class="stack-xs center-text">
        <svg class="align-middle" width="300" height="144" xmlns="http://www.w3.org/2000/svg"><g transform="translate(80 8)" fill="none" fill-rule="evenodd"><rect stroke="#1B2E5B" stroke-width="2" fill="#FFF" x="20" y="1" width="98" height="126" rx="8"/><rect fill="#F1F1F1" x="37" y="30" width="64" height="4" rx="2"/><rect fill="#F1F1F1" x="37" y="38" width="56" height="4" rx="2"/><rect fill="#F1F1F1" x="37" y="46" width="48" height="4" rx="2"/><rect fill="#F1F1F1" x="37" y="54" width="56" height="4" rx="2"/><rect fill="#F1F1F1" x="37" y="62" width="56" height="4" rx="2"/><rect fill="#E1E1E1" x="37" y="22" width="24" height="4" rx="2"/><g transform="translate(0 74)"><rect stroke="#1B2E5B" stroke-width="2" fill="#FFF" x="1" y="1" width="30" height="36" rx="4"/><circle fill="#01B2D0" cx="16" cy="16" r="7"/><rect fill-opacity=".4" fill="#01B2D0" x="8" y="27" width="16" height="2" rx="1"/></g><g transform="translate(36 74)"><rect stroke="#1B2E5B" stroke-width="2" fill="#FFF" x="1" y="1" width="30" height="36" rx="4"/><circle fill="#F15242" cx="16" cy="16" r="7"/><rect fill-opacity=".4" fill="#F15242" x="8" y="27" width="16" height="2" rx="1"/></g><g transform="translate(72 74)"><rect stroke="#1B2E5B" stroke-width="2" fill="#FFF" x="1" y="1" width="30" height="36" rx="4"/><circle fill="#6FD350" cx="16" cy="16" r="7"/><rect fill-opacity=".4" fill="#6FD350" x="8" y="27" width="16" height="2" rx="1"/></g><g transform="translate(108 74)"><rect stroke="#1B2E5B" stroke-width="2" fill="#FFF" x="1" y="1" width="30" height="36" rx="4"/><circle fill="#FFC111" cx="16" cy="16" r="7"/><rect fill-opacity=".4" fill="#FFC111" x="8" y="27" width="16" height="2" rx="1"/></g></g></svg>

        <div class="stack-xs">
          <h3 class="semi-bold atomic">Recommendations</h3>
          <p class="light">Access data models and insert dynamically calculated product recommendation emails tailored specifically to each customer.</p>
        </div>
      </li>
      <li class="stack-xs center-text">
        <svg class="align-middle" width="300" height="144" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g transform="translate(90 80)"><rect stroke="#1B2E5B" stroke-width="2" fill="#FFF" x="1" y="1" width="54" height="54" rx="8"/><path d="M42 29c0 8.284-6.716 15-15 15-8.284 0-15-6.716-15-15 0-8.284 6.716-15 15-15v15z" fill="#6F0DFB"/><path d="M31 10c8.284 0 15 6.716 15 15H31z" fill-opacity=".4" fill="#6F0DFB"/></g><g transform="translate(90 8)"><rect stroke="#1B2E5B" stroke-width="2" fill="#FFF" x="1" y="1" width="118" height="62" rx="8"/><g transform="translate(16 12)"><path stroke-opacity=".4" stroke="#FFC111" stroke-width="2" d="M4 12l20 9 20-6 20-7 20-4"/><circle fill="#FFC111" cx="4" cy="12" r="4"/><circle fill="#FFC111" cx="24" cy="21" r="4"/><circle fill="#FFC111" cx="44" cy="15" r="4"/><circle fill="#FFC111" cx="64" cy="8" r="4"/><circle fill="#FFC111" cx="84" cy="4" r="4"/></g><g transform="translate(16 28)"><path stroke-opacity=".4" stroke="#6FD350" stroke-width="2" d="M4 20l20-2 20-6 20 4L84 4"/><circle fill="#6FD350" cx="4" cy="20" r="4"/><circle fill="#6FD350" cx="24" cy="18" r="4"/><circle fill="#6FD350" cx="44" cy="12" r="4"/><circle fill="#6FD350" cx="64" cy="16" r="4"/><circle fill="#6FD350" cx="84" cy="4" r="4"/></g></g><g transform="translate(154 80)"><rect stroke="#1B2E5B" stroke-width="2" fill="#FFF" x="1" y="1" width="54" height="54" rx="8"/><path fill-opacity=".4" fill="#01B2D0" d="M36 12h12v36H36z"/><path fill="#01B2D0" d="M22 20h12v28H22z"/><path fill-opacity=".4" fill="#01B2D0" d="M8 28h12v20H8z"/></g></g></svg>

        <div class="stack-xs">
          <h3 class="semi-bold atomic">Dynamic Data &amp; Charts</h3>
          <p class="light">Pull complex data structures or even fully rendered HTML charts to deliver unique weekly updates with usage details to each customer.</p>
        </div>
      </li>
      <li class="stack-xs center-text">
        <svg class="align-middle" width="300" height="144" xmlns="http://www.w3.org/2000/svg"><g transform="translate(82 8)" fill="none" fill-rule="evenodd"><rect stroke="#1B2E5B" stroke-width="2" fill="#FFF" x="19" y="1" width="98" height="126" rx="8"/><rect stroke="#E1E1E1" fill="#FFF" x="35.5" y="69.5" width="65" height="43" rx="8"/><rect stroke="#E1E1E1" fill="#FFF" x="35.5" y="15.5" width="65" height="43" rx="8"/><g transform="translate(66 66)"><rect stroke="#1B2E5B" stroke-width="2" fill="#FFF" x="1" y="1" width="68" height="48" rx="8"/><rect fill="#F1F1F1" x="44" y="15" width="16" height="4" rx="2"/><rect fill="#F1F1F1" x="44" y="23" width="12" height="4" rx="2"/><rect fill="#F1F1F1" x="44" y="31" width="16" height="4" rx="2"/><g transform="translate(8 10)" fill="#FFC111"><path fill-opacity=".4" d="M15 24.909l-4.635 4.357-1.19-6.25-6.31.8 2.711-5.754L0 15l5.576-3.062-2.711-5.755 6.31.8 1.19-6.249L15 5.091 19.635.734l1.19 6.25 6.31-.8-2.711 5.754L30 15l-5.576 3.062 2.711 5.755-6.31-.8-1.19 6.249z"/><circle cx="15" cy="15" r="8"/></g></g><g transform="translate(0 12)"><rect stroke="#1B2E5B" stroke-width="2" fill="#FFF" x="1" y="1" width="68" height="48" rx="8"/><rect fill="#F1F1F1" x="38" y="15" width="22" height="4" rx="2"/><rect fill="#F1F1F1" x="38" y="23" width="18" height="4" rx="2"/><rect fill="#F1F1F1" x="38" y="31" width="22" height="4" rx="2"/><g transform="translate(10 13)" fill="#F15242"><circle cx="10" cy="6" r="6"/><path d="M5 14h10a5 5 0 015 5v3a2 2 0 01-2 2H2a2 2 0 01-2-2v-3a5 5 0 015-5z"/></g></g></g></svg>

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
          <svg class="align-middle"width="48" height="48" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle stroke="#01B2D0" stroke-width="2" cx="24" cy="24" r="20"/><path d="M24 7a1 1 0 011 1v15h9a1 1 0 010 2H24a1 1 0 01-1-1V8a1 1 0 011-1z" fill-opacity=".4" fill="#01B2D0"/></g></svg>
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
  <div class="inner small-inner center-text flush-bottom bottom-margin-lg">
    <div class="stack-xxs">
      <h2 class="chunk semi-bold">Built to Scale</h2>
      <p class="large">As your business grows, Vero scales with you. Concentrate on designing product experiences you customers love and let us handle delivering them, whether you have just one customer or 100 million.</p>
    </div>
  </div>
  <div class="inner flush-top flush-bottom">
    <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-scale.svg" alt="Scale with Fusion">
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