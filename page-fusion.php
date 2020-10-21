<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'external-attributes';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="border-bottom-light"  id="external-attributes-hero" banner-name="Emails that can talk to APIs" element-position="top">
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

    <div class="hero-image center-text top-margin-lg">
      <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-hero.svg" alt="emails that can talk to APIs">
    </div>
  </div>
</section>
<section class="double-padding" id="external-attributes-howitworks">
  <div class="inner center-text gradient-border-bottom">
    <div class="stack-xs">
      <h2 class="chunk semi-bold">Load data from its source</h2>
      <p class="medium">Use APIs to access data where it originates: databases, data models or third party platforms</p>
    </div>
    <img class="top-margin-lg align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-api-diagram.svg" alt="load data from its source">
    <ul class="feature-list unstyled-list flex flex-wrap md-flex-nowrap md-justify-between halfs top-margin-sm">
      <li class="stack-xxs">
        <h3 class="atomic semi-bold">Connect an API endpoint</h3>
        <p class="light">Add an external data source URL to an email using Vero's data inspector. To load specific user or event data, Vero can pass identifying attributes with every API request.</p></li>
      <li class="stack-xxs">
        <h3 class="atomic semi-bold">Add data to emails using Liquid</h3>
        <p class="light">Data is loaded for access via Liquid tags, enabling you access the full JSON object and insert attributes (or HTML) into your email content, just like this: <code>{{external.user_region}}</code>.</p></li>
    </ul>
  </div>
</section>
<section id="external-attributes-code" class="flush-bottom">
  <div class="inner center-text gradient-border-bottom">
    <div>
      <h2 class="micro semi-bold">Example API endpoint</h2>
      <pre class="language-html"><code>https://api.yoursite.com/people-you-may-know/{{user.id}}</code></pre>
    </div>
    <div class="ext-example">
      <div class="ext-example-json">
        <pre class="top-margin-sm" data-src="/wp-content/themes/vero/snippets/fusion-json.json"></pre>
      </div>
      <div class="ext-example-html">
        <pre class="top-margin-sm" data-src="/wp-content/themes/vero/snippets/fusion-html.html"></pre>
      </div>
    </div>
  </div>
</section>
<section id="external-attributes-examples" class="double-padding">
  <div class="inner large-inner center-text">
    <div class="stack-xs">
      <h2 class="chunk semi-bold">Email as a true extension of your product</h2>
      <p class="medium">Fusion leverages the data powering your product on-site, enabling you to craft superior interactions off-site.</p>
    </div>
    <ul class="feature-list unstyled-list grid grid-auto top-margin-lg">
      <li class="stack-xs center-text">
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-recommendations.svg" alt="Recommendations">
        <div class="stack-xs">
          <h3 class="semi-bold atomic">Recommendations</h3>
          <p class="light">Access data models and insert dynamically calculated product recommendation emails tailored specifically to each customer.</p>
        </div>
      </li>
      <li class="stack-xs center-text">
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-charts.svg" alt="Dynamic data and charts">
        <div class="stack-xs">
          <h3 class="semi-bold atomic">Dynamic Data &amp; Charts</h3>
          <p class="light">Pull complex data structures or even fully rendered HTML charts to deliver unique weekly updates with usage details to each customer.</p>
        </div>
      </li>
      <li class="stack-xs center-text">
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-delights.svg" alt="Delightful details">
        <div class="stack-xs">
          <h3 class="semi-bold atomic">Delightful Details</h3>
          <p class="light">Impress your users with personalised enriched data pulled from services like OpenWeather, Clearbit and more.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="external-attributes-extras">
  <div class="inner gradient-border-bottom gradient-border-top">
    <ul class="feature-list left-align unstyled-list grid grid-halfs">
      <li class="bottom-margin-lg">
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-real-time.svg" alt="Access live data">
        <div class="right">
          <h3 class="atomic semi-bold">Access live data</h3>
          <p>Spend less time normalizing your data and building push-based data pipelines. With Fusion, you can access the most accurate data, when you need it.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-manage-endpoints.svg" alt="Smart caching">
        <div class="right">
          <h3 class="atomic semi-bold">Smart caching</h3>
          <p>Fusion caches content as efficiently as possible. It loads all the permutations and keeps them on hand for the duration of your send.</p>
        </div>
      </li>
      <li class="bottom-margin-lg">
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-3rd-party.svg" alt="Works with third party APIs too">
        <div class="right">
          <h3 class="atomic semi-bold">Works with third party APIs too…</h3>
          <p>Delight your customers by enriching your emails with data pulled from any number APIs.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-secure.svg" alt="Multiple Authentication Methods">
        <div class="right">
          <h3 class="atomic semi-bold">Multiple Authentication Methods</h3>
          <p>Fusion supports several common authentication methods to give you fast and easy access to your APIs.<br/><span class="semi-bold font-brand-success top-padding-tiny  d-inline-block">Coming Soon</span></p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="external-attributes-scale" class="double-padding">
  <div class="inner center-text flush-bottom">
    <h2 class="chunk semi-bold bottom-margin-xs">Built to Scale</h2>
    <p class="large bottom-margin-lg">As your business grows, Vero scales with you. Concentrate on designing product experiences you customers love and let us handle delivering them, whether you have just one customer or 100 million.</p>
    <img class="show responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-scale.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-scale@2x.png 2x" alt="Built to scale">
  </div>
</section>
<section class="bg-gray-lighter" banner-name="Scale personalized messages" element-position="bottom">
  <div class="inner small-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams scale personalized customer messaging</h4>

    <form class="js-signup-form track-signup-form home-signup-form lg-horizontal-margin-lg stack-xs bottom-margin-sm"
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

        <a class="d-inline-block semi-bold ws-nowrap underline-link padding-xs track-contact-us" element-position="bottom" href="/demo/">Schedule a demo</a>
      </div>

      <div class="js-home-contact-msg home-contact-msg font-brand-error"></div>
    </form>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>