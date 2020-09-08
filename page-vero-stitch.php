<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration-page stitch-integration';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="vero-integration-heading" banner-name="Connect Vero and Stitch" element-position="top">
  <div class="inner small-inner center-text bottom-padding-xl">
    <span class="show semi-bold font-gray no-top-margin bottom-margin-lg">Integrations</span>

    <div class="integration-logos bottom-margin-xl">
      <div class="logo-container vero">
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/vero-logo.png" srcset="/wp-content/themes/vero/assets/dist/images/integrations/vero-logo@2x.png 2x" alt="Vero logo">
      </div>
      <div class="plus">
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/plus.svg" alt="Plus">
      </div>
      <div class="logo-container stitch">
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/stitch/stitch-logo.png" srcset="/wp-content/themes/vero/assets/dist/images/integrations/stitch/stitch-logo@2x.png 2x" alt="Stitch logo">
      </div>
    </div>

    <h1 class="biggie semi-bold">Connect Vero and Stitch</h1>

    <p class="no-top-margin bottom-margin-xl large">Use <strong>Stitch</strong> to send your email interaction data including deliveries, opens, clicks and unsubscribes from <strong>Vero</strong> to your Amazon Redshift, Google BigQuery or other data warehouse in one click.</p>

    <p class="no-top-margin faded">Create a Vero account and connect Stitch in minutes</p>
    <a class="btn btn--success btn--large track-start-trial" element-position="top" href="https://app.getvero.com/signup" >Get started</a>
  </div>
</section>
<section class="double-padding bg-offwhite">
  <div class="inner small-inner center-text">
    <h2 class="chunk regular bottom-margin-sm">All your data and insights in one place</h2>
    <p class="large no-top-margin bottom-margin-xl">Stitch delivers your data to your data warehouse. With all your data in one place, you can perform any analysis and ask any question of your data using your preferred analytics tool.</p>
    <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/integrations/stitch/data-pipeline.png" srcset="/wp-content/themes/vero/assets/dist/images/integrations/stitch/data-pipeline@2x.png" alt="Data Pipeline">
  </div>
</section>
<section id="vero-stitch-info">
  <div class="inner medium-inner bottom-padding-xs">
    <div class="integration-platform-info stitch">
      <div class="left">
        <h2 class="medium regular bottom-margin-xs">What is Stitch?</h2>
        <p class="medium no-bottom-margin">Stitch is a modern extract, transform and load (ETL) platform for rapidly moving data from it's origin source to data warehouses such as Amazon Redshift, Google BigQuery, Snowflake and others.</p>
      </div>
      <div class="right">
        <a class="pill pill--primary md-bottom-margin-xs" href="https://www.stitchdata.com/" target="_blank">Website</a>
        <a class="pill pill--primary" href="https://help.getvero.com/articles/integrations/integrate-vero-and-stitch-data.html" target="_blank">Documentation</a>
      </div>
    </div>
  </div>
</section>
<section id="features-more" class="border-bottom-light">
  <div class="inner medium-inner">
    <h2 class="chunk regular center-text bottom-margin-xl">Connecting Vero and Stitch helps your team make better decisions</h2>
    <ul class="feature-list left-align unstyled-list grid grid-halfs">
      <li>
        <img class="right-margin-sm" src="/wp-content/themes/vero/assets/dist/images/integrations/stitch/combine.svg" alt="Stitch data together">
        <div class="right">
          <h3 class="medium regular">Stitch data together</h3>
          <p>Vero's <a href="/reporting">email campaign reporting</a> is powerful, but there are certain reports that can only be generated when you bring your data together. Combine data to get better insights.</p>
        </div>
        </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/stitch/custom.svg" alt="Custom reporting">
        <div class="right">
          <h3 class="medium regular">Custom reporting</h3>
          <p>Send data via Stitch to your data warehouse and create custom internal and external reports with popular charting tools like Mode Analytics, Looker and Periscope Data.</p>
      </div>
        </li>
      <li>
        <img class="right-margin-sm" src="/wp-content/themes/vero/assets/dist/images/integrations/stitch/history.svg" alt="A historical record">
        <div class="right">
          <h3 class="medium regular">A historical record</h3>
          <p>By warehousing the email interactions that originate in Vero you can backup and store a gospel record of important customer interactions.</p>
        </div>
        </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/stitch/middleware.svg" alt="Don’t write your own ETL scripts">
        <div class="right">
          <h3 class="medium regular">Don’t write your own ETL scripts.</h3>
          <p>Writing middleware to capture webhooks and load data into your warehouse is complex and time-consuming. Stitch handles the hard work for you, enabling you to get up and warehousing faster.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="vero-stitch-test-event" class="border-bottom-light">
  <div class="inner halfs medium-inner small-reverse">
    <div class="left">
      <h2 class="chunk regular no-bottom-margin">Meaningful and actionable insights</h2>
      <p class="medium top-margin-lg no-bottom-margin">Vero’s integration with Stitch allows you to extract, transform and load (ETL) your email campaign data into your data warehouses, such as Redshift and Bigquery.<br><br>

      Joining up your email and push interaction data with the rest of your customer data will give you access to meaningful and actionable insights. For example, by combining your data from payment apps, like Stripe, with your data from Vero, you can analyze conversions and revenue from email campaigns.</p>
    </div>
    <div class="right flex md-justify-end">
      <img class="responsive-image hide-on-medium" src="/wp-content/themes/vero/assets/dist/images/integrations/snowplow/meaningful-actionable-insights.svg" alt="Meaningful and actionable insights">
    </div>
  </div>
</section>
<section id="vero-integration-quote">
  <div class="inner small-inner center-text">
    <img src="/wp-content/themes/vero/assets/dist/images/integrations/stitch/quote-vero.jpg" class="quote-image" alt="Chris Hexton, CEO Vero">
    <p class="tubs quote">“Stitch Data is our pick internally here at Vero to ETL our email engagement to Redshift. Stitch is simple to use and powerful – it's best in class.”</p>
    <p class="faded large regular">Chris Hexton, CEO Vero</p>
  </div>
</section>
<section class="bg-gray-lighter" banner-name="Scale personalized messages" element-position="bottom">
  <div class="inner small-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams scale personalized customer messaging</h4>

    <form class="js-signup-form home-signup-form lg-horizontal-margin-lg stack-xs bottom-margin-sm"
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