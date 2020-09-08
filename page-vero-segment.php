<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration-page segment-integration';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="vero-integration-heading" banner-name="Connect Vero and Segment" element-position="top">
  <div class="inner small-inner flush-bottom center-text">
    <span class="show semi-bold font-gray no-top-margin bottom-margin-lg">Integrations</span>

    <div class="integration-logos bottom-margin-xl">
      <div class="logo-container vero">
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/vero-logo.png" srcset="/wp-content/themes/vero/assets/dist/images/integrations/vero-logo@2x.png 2x" alt="Vero logo">
      </div>
      <div class="plus">
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/plus.svg" alt="Plus">
      </div>
      <div class="logo-container segment">
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/segment/segment-logo.png" srcset="/wp-content/themes/vero/assets/dist/images/integrations/segment/segment-logo@2x.png 2x" alt="Segment logo">
      </div>
    </div>

    <h1 class="biggie semi-bold">Connect Vero and Segment</h1>

    <p class="bottom-margin-xl large">Use <strong>Segment</strong> to collect data from multiple sources, including mobile apps, websites, servers, and cloud apps and send it to <strong>Vero</strong> to trigger personalized marketing communications.</p>

    <p class="no-top-margin faded">Create a Vero account and connect Segment in minutes</p>
    <a class="btn btn--success btn--large track-start-trial" element-position="top" href="https://app.getvero.com/signup">Get started</a>
  </div>
</section>
<section id="vero-segment-info">
  <div class="inner medium-inner bottom-padding-xs">
    <div class="integration-platform-info segment">
      <div class="left">
        <h2 class="medium regular bottom-margin-xs">What is Segment?</h2>
        <p class="medium no-bottom-margin">Segment is a customer data platform that connects over 200 sources and destinations to empower your team to use their favorite tools to personalize campaigns, analyze product usage, and more.</p>
      </div>
      <div class="right">
        <a class="pill pill--primary md-bottom-margin-xs" href="https://segment.com/" target="_blank">Website</a>

        <a class="pill pill--primary" href="https://help.getvero.com/articles/integrations/integrate-vero-and-segment.html" target="_blank">Documentation</a>
      </div>
    </div>
  </div>
</section>
<section id="features-more" class="border-bottom-light">
  <div class="inner medium-inner">
    <h2 class="chunk regular center-text bottom-margin-xl">Connecting Vero and Segment helps your team move quickly</h2>
    <ul class="feature-list grid grid-halfs left-align unstyled-list">
      <li>
        <img class="right-margin-sm" src="/wp-content/themes/vero/assets/dist/images/integrations/segment/sources.svg" alt="Access to 200+ data sources">
          <div class="right">
            <h3 class="medium regular">Access to 200+ data sources</h3>
            <p>Capture data from 200+ sources, using Segment and it will translate and load your real-time data to Vero and automatically trigger personalized emails.</p>
          </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/segment/customer-data.svg" alt="Automatically ingest customer data">
          <div class="right">
            <h3 class="medium regular">Automatically ingest customer data</h3>
            <p>When you use Segment to connect to Vero, all your customer data from identify and track calls will show up in Vero automatically, and with no additional coding required from you.
          </p>
          </div>
      </li>
      <li>
        <img class="right-margin-sm" src="/wp-content/themes/vero/assets/dist/images/integrations/segment/sdks.svg" alt="Segment SDKs">
        <div class="right">
          <h3 class="medium regular">Segment SDKs</h3>
          <p>With Segment’s wide range of libraries and mobile SDKs you can get data into Vero quickly from all the places your customers interact with your product.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/segment/events.svg" alt="Event Management">
        <div class="right">
          <h3 class="medium regular">Event Management</h3>
          <p>Complete visibility of the events and properties being tracked in Vero, including when each event was last tracked, which customers triggered an event and the campaigns that triggered.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="vero-segment-test-event" class="border-bottom-light">
  <div class="inner halfs medium-inner small-reverse">
    <div class="left">
      <h2 class="chunk regular bottom-margin-lg">Meaningful and actionable insights</h2>
      <p class="medium">Vero’s integration with Segment allows you to extract, transform and load (ETL) your email campaign data into your data warehouses, such as Redshift and Bigquery.</p>
      <p class="medium">Joining up your email and push interaction data with the rest of your customer data will give you access to meaningful and actionable insights. For example, by combining your data from payment apps, like Stripe, with your data from Vero, you can analyze conversions and revenue from email campaigns.</p>
      </p>
    </div>
    <div class="right flex md-justify-end">
      <img class="responsive-image hide-on-medium" src="/wp-content/themes/vero/assets/dist/images/integrations/snowplow/meaningful-actionable-insights.svg" alt="Meaningful and actionable insights">
    </div>
  </div>
</section>
<section id="vero-integration-quote">
  <div class="inner small-inner center-text">
    <img class="quote-image" src="/wp-content/themes/vero/assets/dist/images/integrations/segment/quote-helloprint.jpg"  alt="Michael Heerkens, CTO Helloprint">
    <p class="tubs quote">“The Vero and Segment integration was a matter of ticking a box, putting in an API key and our CRM team was able to set up their first campaign in just a few hours.”</p>
    <p class="faded large regular">Michael Heerkens, CTO Helloprint</p>
  </div>
</section>
<section class="bg-gray-lighter" banner-name="Scale personalized messages" element-position="bottom">
  <div class="inner small-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams scale personalized customer messaging</h4>

    <form class="js-signup-form home-signup-form lg-horizontal-margin-xl stack-xs bottom-margin-sm"
      action="https://formkeep.com/f/5401a0ae5cb8"
      accept-charset="UTF-8"
      enctype="multipart/form-data"
      method="POST">

      <div class="flex flex-column sm-flex-row">
        <input class="bg-white form-control full-width" id="user_email" type="email" name="email" placeholder="Your email address" required>

        <input class="btn btn--success btn--medium track-start-trial" element-position="bottom" type="submit" name="submit" value="Start a free trial">

        <input class="btn underline-link track-contact-us" element-position="bottom" type="submit" name="talk_to_us" value="Schedule a demo">
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