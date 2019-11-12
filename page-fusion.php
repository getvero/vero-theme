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
    <p class="semi-bold center-text smallish font-brand-primary center-text no-top-margin bottom-margin-medium">Fusion</p>
    <h1 class="biggie semi-bold center-text bottom-margin-xxs">Emails that can talk to APIs.</h1>
    <p class="medium">Load data from its <span class="semi-bold">origin</span> for greater <span class="semi-bold">accuracy</span> and <span class="semi-bold">flexibility</span>.</p>
    <div class="hero-image center-text top-margin-medium">
      <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-hero.svg" alt="emails that can talk to APIs ">
    </div>
  </div>
</section>
<section class="double-padding" id="external-attributes-howitworks">
  <div class="inner center-text gradient-border-bottom">
    <h2 class="chunk semi-bold bottom-margin-small">Load data from its source</h2>
    <p class="medium">Use APIs to access data where it originates: databases, data models or third party platforms</p>
    <img class="top-margin-medium responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-api-diagram.svg" alt="load data from its source">
    <ul class="feature-list unstyled-list flex flex-wrap md-flex-nowrap md-justify-between halfs top-margin-small">
      <li><p class="semi-bold medium">Connect an API endpoint</p><p class="light smallish">Add an external data source URL to an email using Vero's data inspector. To load specific user or event data, Vero can pass identifying attributes with every API request.</p></li>
      <li><p class="semi-bold medium">Add data to emails using Liquid</p><p class="light smallish">Data is loaded for access via Liquid tags, enabling you access the full JSON object and insert attributes (or HTML) into your email content, just like this: <code>{{external.user_region}}</code>.</p></li>
    </ul>
  </div>
</section>
<section id="external-attributes-code" class="flush-bottom">
  <div class="inner center-text gradient-border-bottom">
    <div><p class="smallish semi-bold no-margin">Example API endpoint</p><p class="no-top-margin">https://api.yoursite.com/people-you-may-know/{{user.id}}</p></div>
    <div class="ext-example">
      <div class="ext-example-json">
        <pre class="top-margin-small okaidia" data-src="/wp-content/themes/vero/snippets/fusion-json.json"></pre>
      </div>
      <div class="ext-example-html">
        <pre class="top-margin-small" data-src="/wp-content/themes/vero/snippets/fusion-html.html"></pre>
      </div>
    </div>
  </div>
</section>
<section id="external-attributes-examples" class="double-padding">
  <div class="inner large-inner center-text">
    <h2 class="chunk semi-bold bottom-margin-xs">Email as a true extension of your product</h2>
    <p class="medium">Fusion leverages the data powering your product on-site, enabling you to craft superior interactions off-site.</p>
    <ul class="feature-list unstyled-list grid grid-auto top-margin-medium">
      <li class="center-text">
        <img class="center-text top-margin-small" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-recommendations.svg" alt="Recommendations">
        <p class="semi-bold medium">Recommendations</p>
        <p class="light smallish">Access data models and insert dynamically calculated product recommendation emails tailored specifically to each customer.</p>
      </li>
      <li class="center-text">
        <img class="center-text top-margin-small" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-charts.svg" alt="Dynamic data and charts">
        <p class="semi-bold medium">Dynamic Data &amp; Charts</p>
        <p class="light smallish">Pull complex data structures or even fully rendered HTML charts to deliver unique weekly updates with usage details to each customer.</p>
      </li>
      <li class="center-text">
        <img class="center-text top-margin-small" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-delights.svg" alt="Delightful details">
        <p class="semi-bold medium">Delightful Details</p>
        <p class="light smallish">Impress your users with personalised enriched data pulled from services like OpenWeather, Clearbit and more.</p>
      </li>
    </ul>
  </div>
</section>
<!-- <section id="external-attributes-tidal" class="floating-section light-border">
  <div class="inner">
    <div class="half left">
      <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-tidal.png" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-tidal@2x.png 2x" title="Tidal" class="bottom-margin-small">
      <p>Tidal helps millions of customers find new music. By leveraging their recommendation APIs with Fusion, Tidal has created a series of highly personalized emails that deliver the same quality on-site and in-app experience via email – ensuring each and every customer finds new music that results in both happier listeners and better engagement.</p>
      <q>We literally saved 100s of hours with external attributes. It just plugs in and works.</q>
      <div class="top-margin-medium">
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-customer-profile.png" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-customer-profile@2x.png 2x" width="53" height="53" class="pull-left right-margin-small">
        <p class="semi-bold no-margin">Eskild</p>
        <p class="no-top-margin">Product Manager</p>
      </div>
    </div>
  </div>
</section> -->
<section id="external-attributes-extras">
  <div class="inner gradient-border-bottom gradient-border-top">
    <ul class="feature-list left-align unstyled-list grid grid-auto">
      <li class="bottom-margin-medium">
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-real-time.svg" alt="Access live data">
        <div class="right">
          <h3 class="atomic semi-bold">Access live data</h3>
          <p class="smallish">Spend less time normalizing your data and building push-based data pipelines. With Fusion, you can access the most accurate data, when you need it.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-manage-endpoints.svg" alt="Smart caching">
        <div class="right">
          <h3 class="atomic semi-bold">Smart caching</h3>
          <p class="smallish">Fusion caches content as efficiently as possible. It loads all the permutations and keeps them on hand for the duration of your send.</p>
        </div>
      </li>
      <li class="bottom-margin-medium">
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-3rd-party.svg" alt="Works with third party APIs too">
        <div class="right">
          <h3 class="atomic semi-bold">Works with third party APIs too…</h3>
          <p class="smallish">Delight your customers by enriching your emails with data pulled from any number APIs.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-secure.svg" alt="Multiple Authentication Methods">
        <div class="right">
          <h3 class="atomic semi-bold">Multiple Authentication Methods</h3>
          <p class="smallish">Fusion supports several common authentication methods to give you fast and easy access to your APIs.<br/><span class="semi-bold font-brand-success top-padding-tiny  d-inline-block">Coming Soon</span></p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="external-attributes-scale" class="double-padding border-bottom-light">
  <div class="inner center-text flush-bottom">
    <h2 class="chunk semi-bold bottom-margin-xs">Built to Scale</h2>
    <p class="medium bottom-margin-medium">As your business grows, Vero scales with you. Concentrate on designing product experiences you customers love and let us handle delivering them, whether you have just one customer or 100 million.</p>
    <img class="show responsive-image" src="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-scale.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/external-attributes/fusion-scale@2x.png 2x" alt="Built to scale">
  </div>
</section>
<section class="cta border-dark-blue bg-white center-text">
  <div class="cta-wrap">
    <h4 class="regular bottom-margin-smedium">Vero helps marketing and engineering teams use their data to create a better customer messaging experience</h4>

    <a class="btn btn-success btn-large bottom-margin-smedium" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>