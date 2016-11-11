<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'external-attributes';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="external-attributes-hero" class="double-padding border-bottom">
  <div class="inner center-text">
    <img src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-logo.svg" class="center-text bottom-margin-small">
    <h1 class="no-bottom-margin center-text bottom-margin-small"><span class="light">Introducting</span> <span class="semi-bold underline-blue">Fusion</span></h1>
    <p class="medium light center-text grid-10 shift-1">Use external data to personalise your most effective emails yet. Fusion lets you <span class="semi-bold">pull data from your own api</span> into your campaigns so you can dynamically deliver accurate and relevant information to your customers.</p>
    <img src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-hero.svg" class="center-text top-margin-medium">
    <div class="top-margin-medium">
      <form action="https://app.getvero.com/forms/be673e13e65a86736e07c35dad12b7a1" method='post' class="centered-form">
        <input class="form-control display-block" type="email" placeholder="Email Address" name="email">
        <input class="form-control display-block top-margin-tiny" type="email" placeholder="Name" name="email">
        <input class="btn btn-success display-block btn-submit top-margin-tiny" type="submit" value="Keep me updated">
      </form>
    </div> 
  </div>
</section>
<section id="external-attributes-howitworks" class="double-padding flush-bottom">
  <div class="inner center-text gradient-border-bottom">
    <h1 class="chunk no-bottom-margin">Plug straight into your API</h1>
    <p class="medium">Pull data out of your API and into your emails, where it belongs, in two simple steps.</p>
    <img src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-api-diagram.svg" class="center-text top-margin-medium">
    <ul class="feature-list unstyled-list halfs top-margin-small">
      <li><p class="semi-bold medium">Connect your API endpoint</p><p class="light smallish">Add your external API url to a campaign email using the data inspector. To get specific user or event data, attatch a Vero property to the URL with Liquid.</p></li>
      <li><p class="semi-bold medium">Add data to emails using Liquid</p><p class="light smallish">Add liquid tags to insert the returned JSON properties or HTML to your email content. Just like this: {{external.user_region}}.</p></li>
    </ul>
  </div>
</section>
<section id="external-attributes-code" class="flush-bottom">
  <div class="inner center-text gradient-border-bottom">
    <div><p class="smallish semi-bold no-margin">Example API endpoint</p><p class="no-top-margin">http://api.example.com/friend/{event.new_friend_id}</p></div>
    <div class="ext-example">
      <div class="ext-example-json">
        <pre class="top-margin-small" data-src="/wp-content/themes/vero/snippets/fusion-json.json"></pre>
      </div>
      <div class="ext-example-html">
        <pre class="top-margin-small" data-src="/wp-content/themes/vero/snippets/fusion-html.html"></pre>
      </div>
    </div>
  </div>
</section>
<section id="external-attributes-examples" class="double-padding">
  <div class="inner center-text">
    <h1 class="chunk no-bottom-margin">Finally, email is a true extension of your product</h1>
    <ul class="feature-list unstyled-list thirds sm-center top-margin-medium">
      <li class="center-text">
        <img class="center-text top-margin-small" src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-recommendations.svg">
        <p class="semi-bold medium">Recommendations</p>
        <p class="light smallish">Insert dynamically generated HTML into product recommendation emails tailored specifically to each customer.</p>
      </li>
      <li class="center-text">
        <img class="center-text top-margin-small" src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-charts.svg">
        <p class="semi-bold medium">Dynamic Data &amp; Charts</p>
        <p class="light smallish">Keep your users engaged by sending them unique weekly updates with usage details from your product.</p>
      </li>
      <li class="center-text">
        <img class="center-text top-margin-small" src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-delights.svg">
        <p class="semi-bold medium">Delightful Details</p>
        <p class="light smallish">Impress your users with personalised content pulled from services like OpenWeather or Clearbit.</p>
      </li>
    </ul>
  </div>
</section>
<section id="external-attributes-tidal" class="floating-section double-padding light-border">
  <div class="inner">
    <div class="half left">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-tidal.png" src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-tidal@2x.png 2x" title="Tidal" class="bottom-margin-small">
      <p>Tidal recommends new music to millions of customers every week. By plugging their API into Vero, Tidal has been able to consistently deliver each and every customer a personalised list of new music that results in better engagement and happier listeners.</p>
      <q>We literally saved 100s of hours with external attributes. It just plugs in and works.</q>
      <div class="top-margin-medium">
        <img src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-customer-profile.png" src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-customer-profile@2x.png 2x" width="53" height="53" class="pull-left right-margin-small">
        <p class="semi-bold no-margin">Eskild</p>
        <p class="no-top-margin">Product Manager</p>
      </div>
    </div>
    <div class="half right">
      <div class="image-comparison-container slider">
        <div class="slider responsive">
          <div class="left image">
            <img src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-tidal-email.png"/>
          </div>
        </div>
        <div class="slider responsive">
          <div class="right image">
            <img src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-tidal-email-html.png"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="external-attributes-extras" class="">
  <div class="inner gradient-border-bottom gradient-border-top">
    <ul class="feature-list left-align unstyled-list halfs">
      <li class="bottom-margin-medium">
        <img src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-real-time.svg">
        <div class="right"><p class="medium semi-bold no-top-margin">Access your data in real time</p>
        <p class="smallish">Spend less time normalizing your data and building push-based data pipelines. With Fusion, just access the data when you need it.</p></div>
      </li>
      <li class="bottom-margin-medium">
        <img src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-3rd-party.svg">
        <div class="right"><p class="medium semi-bold no-top-margin">Works with 3rd Party API’s too…</p>
        <p class="smallish">Delight your customers by enhancing your emails with information pulled from any number of openly available API’s.</p></div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-manage-endpoints.svg">
        <div class="right"><p class="medium semi-bold no-top-margin">Easily manage multiple endpoints</p>
        <p class="smallish">Delight your customers by enhancing your emails with information pulled from any number of openly available API’s.<br/><span class="semi-bold green-text top-padding-tiny inline-block">Coming Soon</span></p></div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-secure.svg">
        <div class="right"><p class="medium semi-bold no-top-margin">Secure Authentication</p>
        <p class="smallish">Delight your customers by enhancing your emails with information pulled from any number of openly available API’s.<br/><span class="semi-bold green-text top-padding-tiny inline-block">Coming Soon</span></p></div>
      </li>
    </ul>
  </div>
</section>
<section id="external-attributes-scale" class="double-padding border-bottom">
  <div class="inner center-text flush-bottom">
    <h1 class="chunk no-bottom-margin">Built to Scale</h1>
    <p class="medium bottom-padding-medium">As your business grows, Vero automatically scales with it, so you can concentrate on sending emails your customers love. We send over <span>250,000,000 emails a month so you know you’re in good hands.</p>
    <img src="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-scale.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/external-attributes/fusion-scale@2x.png 2x" class="center-text display-block top-margin-large">
  </div>
</section>
<section id="external-attributes-scale" class="double-padding border-bottom">
  <div class="inner halfs">
    <p class="small semi-bold center-text">Fusion is just the beginning...</p>
    <div class="half left">
      <h1 class="chunk">We beleive marketing workflows are 10x better when you have a single unified view of your customer.</h1>
      <p class="medium">Fusion is the first step towards fully utilising the data you already have to create truly personalised customer experiences. Stop trying to manage mutliple versions of the same data in multiple apps. Go directly to the source…</p>
    </div>
    <div class="half right">
      <img src="">
    </div> 
    <div class="clearfix"></div>
    <div class="display-block margin-auto top-margin-medium">
      <form action="https://app.getvero.com/forms/be673e13e65a86736e07c35dad12b7a1" method='post' class="horizontal-form">
        <input class="form-control" type="email" placeholder="Email Address" name="email">
        <input class="form-control" type="email" placeholder="Name" name="email">
        <input class="btn btn-success btn-submit" type="submit" value="Keep me updated">
      </form> 
    </div> 
  </div>
</section>
<?php 
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>