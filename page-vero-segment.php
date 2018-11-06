<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration-page segment-integration';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="vero-integration-heading">
  <div class="inner small-inner flush-bottom center-text">
    <h2 class="semi-bold smallish font-brand-gray no-top-margin bottom-margin-medium">Integrations</h2>

    <div class="integration-logos bottom-margin-large">
      <div class="logo-container vero">
        <img src="/wp-content/themes/vero/assets/images/integrations/vero-logo.png" srcset="/wp-content/themes/vero/assets/images/integrations/vero-logo@2x.png 2x" class="">
      </div>
      <div class="plus">
        <img src="/wp-content/themes/vero/assets/images/integrations/plus.svg">
      </div>
      <div class="logo-container segment">
        <img src="/wp-content/themes/vero/assets/images/integrations/segment/segment-logo.png" srcset="/wp-content/themes/vero/assets/images/integrations/segment/segment-logo@2x.png 2x" class="">
      </div>
    </div>

    <h1 class="biggie semi-bold">Connect Vero and Segment</h1>

    <p class="no-top-margin bottom-margin-large large">Use <strong>Segment</strong> to collect data from multiple sources, including mobile apps, websites, servers, and cloud apps and send it to <strong>Vero</strong> to trigger personalized marketing communications.</p>

    <p class="no-top-margin faded">Create a Vero account and connect Segment in minutes</p>
    <a href="https://app.getvero.com/signup" class="btn btn-success btn-large btn-wide">Get started</a>
  </div>
</section>
<section id="vero-segment-info">
  <div class="inner medium-inner bottom-padding-small">
    <div class="integration-platform-info segment">
      <div class="left">
        <h2 class="medium regular bottom-margin-tiny">What is Segment?</h2>
        <p class="medium no-bottom-margin">Segment is a customer data platform that connects over 200 sources and destinations to empower your team to use their favorite tools to personalize campaigns, analyze product usage, and more.</p>
      </div>
      <div class="right">
        <p class="pill pill-medium pill-primary"><a href="https://segment.com/" target="_blank">Website</a></p>
        <p class="pill pill-medium pill-primary"><a href="https://help.getvero.com/articles/integrations/integrate-vero-and-segment.html" target="_blank">Documentation</a></p>
      </div>
    </div>
  </div>
</section>
<section id="features-more" class="border-bottom">
  <div class="inner medium-inner">
    <h2 class="h1 center-text bottom-margin-large">Connecting Vero and Segment helps your team move quickly</h2>
    <ul class="feature-list left-align unstyled-list halfs">
      <li>
        <img class="right-margin-small" src="/wp-content/themes/vero/assets/images/integrations/segment/sources.svg">
          <div class="right">
            <h3 class="medium regular">Access to 200+ data sources</h3>
            <p class="light">Capture data from 200+ sources, using Segment and it will translate and load your real-time data to Vero and automatically trigger personalized emails.</p>
          </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/integrations/segment/customer-data.svg">
          <div class="right">
            <h3 class="medium regular">Automatically ingest customer data</h3>
            <p class="light">When you use Segment to connect to Vero, all your customer data from identify and track calls will show up in Vero automatically, and with no additional coding required from you.
          </p>
          </div>
      </li>
      <li>
        <img class="right-margin-small" src="/wp-content/themes/vero/assets/images/integrations/segment/sdks.svg">
        <div class="right">
          <h3 class="medium regular">Segment SDKs</h3>
          <p class="light">With Segment’s wide range of libraries and mobile SDKs you can get data into Vero quickly from all the places your customers interact with your product.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/integrations/segment/events.svg">
        <div class="right">
          <h3 class="medium regular">Event Management</h3>
          <p class="light">Complete visibility of the events and properties being tracked in Vero, including when each event was last tracked, which customers triggered an event and the campaigns that triggered.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="vero-segment-test-event" class="feature-section border-bottom">
  <div class="inner halfs medium-inner small-reverse left-padding-large right-padding-large">
    <div class="left">
      <h2 class="h1 regular no-bottom-margin">Meaningful and actionable insights</h2>
      <p class="medium top-margin-medium no-bottom-margin">Vero’s integration with Segment allows you to extract, transform and load (ETL) your email campaign data into your data warehouses, such as Redshift and Bigquery. <br><br>
      Joining up your email and push interaction data with the rest of your customer data will give you access to meaningful and actionable insights. For example, by combining your data from payment apps, like Stripe, with your data from Vero, you can analyze conversions and revenue from email campaigns.</p>
      </p>
    </div>
    <div class="right">
      <img src="/wp-content/themes/vero/assets/images/integrations/snowplow/meaningful-actionable-insights.svg" class="pull-right responsive-image hide-on-medium">
    </div>
  </div>
</section>
<section id="vero-integration-quote" class="feature-section">
  <div class="inner small-inner center-text">
    <div><img src="/wp-content/themes/vero/assets/images/integrations/segment/quote-helloprint.jpg" class="quote-image">
      <h2 class="tubs italic regular">“The Vero and Segment integration was a matter of ticking a box, putting in an API key and our CRM team was able to set up their first campaign in just a few hours”.</h2>
      <p class="faded large regular">Michael Heerkens, CTO Helloprint</p>
    </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title">Start building your best campaigns today</h1>
    <p class="sub-heading">Create a Vero account and connect to Segment in minutes</p>
    <a class="btn btn-success btn-large btn-wide" href="http://app.getvero.com/signup">Get started</a>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>