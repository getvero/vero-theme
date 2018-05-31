<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration-page stitch-integration';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="vero-segment-heading">
  <div class="inner small-inner center-text bottom-padding-large">
    <p class="semi-bold center-text smallish font-brand-primary center-text no-top-margin bottom-margin-medium">Stitch Integration</p>
    <div class="integration-logos bottom-margin-large">
      <div class="left logo-container vero">
        <img src="/wp-content/themes/vero/assets/images/integrations/vero-logo.png" srcset="/wp-content/themes/vero/assets/images/integrations/vero-logo@2x.png 2x" class="">
      </div>
      <div class="plus">
        <img src="/wp-content/themes/vero/assets/images/integrations/plus.svg">
      </div>
      <div class="right logo-container stitch">
        <img src="/wp-content/themes/vero/assets/images/integrations/segment/segment-logo.png" srcset="/wp-content/themes/vero/assets/images/integrations/segment/segment-logo@2x.png 2x" class="">
      </div>
    </div>
    <p class="no-top-margin no-bottom-margin large">Use <strong>Segment</strong> to collect data from multiple sources, including mobile apps, websites, servers, and cloud apps and send it to <strong>Vero</strong> to trigger personalized marketing communications.</p>
    <a href="http://app.getvero.com" class="btn btn-primary btn-large top-margin-large btn-wide">Try Vero</a>
    <div class="learn-more"><p>Learn More</p><img src="/wp-content/themes/vero/assets/images/integrations/learn-more-carat.svg"></div>
  </div>
</section>
<section id="vero-segment-info" class="">
  <div class="inner large-inner top-padding-small bottom-padding-large">
    <div class="integration-platform-info segment">
      <div class="left">
        <p class="medium regular no-top-margin">What is Segment?</h2>
        <p class="medium no-bottom-margin">Segment is a customer data platform that connects over 200 sources and destinations to empower your team to use their favorite tools to personalize campaigns, analyze product usage, and more.</p>
      </div>
      <div class="right">
        <p class="pill pill-medium pill-primary"><a href="https://segment.com/" target="_blank">Website</a></p>
        <p class="pill pill-medium pill-primary"><a href="https://segment.com/docs/sources/" target="_blank">Documentation</a></p>
      </div>
    </div>
  </div>
</section>
<section id="features-more" class="border-bottom">
  <div class="inner medium-inner top-padding-medium">
    <h2 class="center-text bottom-margin-large">Connecting Vero and Segment helps your team move quickly</h2>
    <ul class="feature-list left-align unstyled-list halfs">
      <li><img class="right-margin-small" src="/wp-content/themes/vero/assets/images/integrations/segment/sources.svg"><div class="right"><p class="medium regular no-top-margin">Access to 200+ data sources</p><p class="light">Capture data from from 200+ sources, using Segment and it will translate and load your real-time data to Vero and automatically trigger personalized emails.</p></div></li>
      <li><img src="/wp-content/themes/vero/assets/images/integrations/segment/customer-data.svg"><div class="right"><p class="medium regular no-top-margin">Automatically ingest customer data</p><p class="light">When you use Segment to connect to Vero, all your customer data from identify and track calls will show up in Vero automatically, and with no additional coding required from you. 
</p></div></li>
      <li><img class="right-margin-small" src="/wp-content/themes/vero/assets/images/integrations/segment/sdks.svg"><div class="right"><p class="medium regular no-top-margin">Segment SDKs</p><p class="light">With Segment’s wide range of libraries and mobile SDKs you can get data into Vero quickly from all the places your customers interact with your product.</p></div></li>
      <li><img src="/wp-content/themes/vero/assets/images/integrations/segment/events.svg"><div class="right"><p class="medium regular no-top-margin">Data Manager</p><p class="light">See all the data Segment sends to Vero, giving your team complete visibility of the events and properties being tracked, when the event was last tracked, and which customers triggered it. </p></div></li>
    </ul>
  </div>
</section>
<section id="vero-segment-test-event" class="feature-section border-bottom">
  <div class="inner halfs medium-inner small-reverse left-padding-large right-padding-large">
    <div class="left">
      <h2 class="tubs regular no-bottom-margin">Data Warehousing</h2>
      <p class="medium top-margin-medium no-bottom-margin">Vero’s integration with Segment allows you to extract, transform and load (ETL) your email campaign data into your data warehouses, such as Redshift and Bigquery. <br><br>
      Joining up your email data with the rest of your customer data will give you access to meaningful and actionable insights, for example by combining your data from payment apps like Stripe with your email data from Vero you can analyze conversions and revenue from email campaigns. 
      </p>
    </div>
    <div class="right">
      <img src="/wp-content/themes/vero/assets/images/integrations/segment/data-warehouse.svg" class="pull-right responsive-image hide-on-medium">
    </div>
  </div>
</section>
<section id="vero-segment-quote" class="feature-section">
  <div class="inner small-inner center-text">
    <div><img src="/wp-content/themes/vero/assets/images/integrations/segment/quote-helloprint.jpg" class="quote-image">
      <h1 class="tubs italic regular">“The Vero and Segment integration was a matter of ticking a box, putting in an API key and our CRM team was able to set up their first campaign in just a few hours”.</h1>
      <p class="faded large regular">Michael Heerkens, CTO Helloprint</p>
    </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title bottom-margin-medium">Start a free trial of Vero and connect your data with Segment</h1>
    <form action="https://app.getvero.com/pre_signups" method='post' class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Create your account">
    </form>
    <p class="mini light faded center-text mf-half center-block top-margin-small horizontal-padding-small">In order to provide our service to you, we must store your personal information. Any personal data that we collect will be handled in accordance with our <a href="/privacy">Privacy Notice</a>.</p>
  </div>
</section>
<?php 
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>