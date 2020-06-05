<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'external-attributes';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="external-attributes-hero" class="border-bottom-light">
  <div class="inner center-text flush-bottom">
    <span class="flex items-center justify-center atomic semi-bold font-gray-dark bottom-margin-sm xs-bottom-margin-lg">
      <a href="/features">Features</a>
      <svg class="horizontal-margin-xxxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg>
      Fusion
    </span>

    <h1 class="biggie semi-bold center-text bottom-margin-xxs">Emails that can talk to APIs.</h1>
    <p class="medium">Load data from its <span class="semi-bold">origin</span> for greater <span class="semi-bold">accuracy</span> and <span class="semi-bold">flexibility</span>.</p>
    <div class="hero-image center-text top-margin-lg">
      <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-hero.svg" alt="emails that can talk to APIs">
    </div>
  </div>
</section>
<section class="double-padding" id="external-attributes-howitworks">
  <div class="inner center-text gradient-border-bottom">
    <h2 class="chunk semi-bold bottom-margin-sm">Load data from its source</h2>
    <p class="medium">Use APIs to access data where it originates: databases, data models or third party platforms</p>
    <img class="top-margin-lg responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-api-diagram.svg" alt="load data from its source">
    <ul class="feature-list unstyled-list flex flex-wrap md-flex-nowrap md-justify-between halfs top-margin-sm">
      <li><p class="semi-bold medium">Connect an API endpoint</p><p class="light">Add an external data source URL to an email using Vero's data inspector. To load specific user or event data, Vero can pass identifying attributes with every API request.</p></li>
      <li><p class="semi-bold medium">Add data to emails using Liquid</p><p class="light">Data is loaded for access via Liquid tags, enabling you access the full JSON object and insert attributes (or HTML) into your email content, just like this: <code>{{external.user_region}}</code>.</p></li>
    </ul>
  </div>
</section>
<section id="external-attributes-code" class="flush-bottom">
  <div class="inner center-text gradient-border-bottom">
    <div><p class="semi-bold no-margin">Example API endpoint</p><p class="no-top-margin">https://api.yoursite.com/people-you-may-know/{{user.id}}</p></div>
    <div class="ext-example">
      <div class="ext-example-json">
        <pre class="top-margin-sm okaidia" data-src="/wp-content/themes/vero/snippets/fusion-json.json"></pre>
      </div>
      <div class="ext-example-html">
        <pre class="top-margin-sm" data-src="/wp-content/themes/vero/snippets/fusion-html.html"></pre>
      </div>
    </div>
  </div>
</section>
<section id="external-attributes-examples" class="double-padding">
  <div class="inner large-inner center-text">
    <h2 class="chunk semi-bold bottom-margin-xs">Email as a true extension of your product</h2>
    <p class="medium">Fusion leverages the data powering your product on-site, enabling you to craft superior interactions off-site.</p>
    <ul class="feature-list unstyled-list grid grid-auto top-margin-lg">
      <li class="center-text">
        <img class="center-text top-margin-sm" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-recommendations.svg" alt="Recommendations">
        <p class="semi-bold medium">Recommendations</p>
        <p class="light">Access data models and insert dynamically calculated product recommendation emails tailored specifically to each customer.</p>
      </li>
      <li class="center-text">
        <img class="center-text top-margin-sm" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-charts.svg" alt="Dynamic data and charts">
        <p class="semi-bold medium">Dynamic Data &amp; Charts</p>
        <p class="light">Pull complex data structures or even fully rendered HTML charts to deliver unique weekly updates with usage details to each customer.</p>
      </li>
      <li class="center-text">
        <img class="center-text top-margin-sm" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-delights.svg" alt="Delightful details">
        <p class="semi-bold medium">Delightful Details</p>
        <p class="light">Impress your users with personalised enriched data pulled from services like OpenWeather, Clearbit and more.</p>
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
<section class="bg-gray-lighter">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk semi-bold bottom-margin-md">Vero helps marketing and engineering teams use their data to create a better customer messaging experience</h4>

    <a class="btn btn--success btn--large bottom-margin-sm start-a-free-trial" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>