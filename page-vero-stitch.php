<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration-page stitch-integration';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="vero-integration-heading">
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
        <img src="/wp-content/themes/vero/assets/images/integrations/stitch/stitch-logo.png" srcset="/wp-content/themes/vero/assets/images/integrations/stitch/stitch-logo@2x.png 2x" class="">
      </div>
    </div>
    <p class="no-top-margin no-bottom-margin large">Use <strong>Stitch</strong> to send your email interaction data including deliveries, opens, clicks and unsubscribes from <strong>Vero</strong> to your Amazon Redshift, Google BigQuery or other data warehouse in one click.</p>
    <a href="http://app.getvero.com" class="btn btn-primary btn-large top-margin-large btn-wide">Try Vero</a>
    <div class="learn-more"><p>Learn More</p><img src="/wp-content/themes/vero/assets/images/integrations/learn-more-carat.svg"></div>
  </div>
</section>
<section id="vero-stitch-info" class="">
  <div class="inner large-inner top-padding-small bottom-padding-large">
    <div class="integration-platform-info stitch">
      <div class="left">
        <h2 class="medium regular bottom-margin-tiny">What is Stitch?</h2>
        <p class="medium no-bottom-margin">Stitch is a modern extract, transform and load (ETL) platform for rapidly moving data from it's origin source to data warehouses such as Amazon Redshift, Google BigQuery, Snowflake and others.</p>
      </div>
      <div class="right">
        <p class="pill pill-medium pill-primary"><a href="https://www.stitchdata.com/" target="_blank">Website</a></p>
        <p class="pill pill-medium pill-primary"><a href="https://www.stitchdata.com/integrations/vero/" target="_blank">Documentation</a></p>
      </div>
    </div>
  </div>
</section>
<section id="features-more" class="border-bottom">
  <div class="inner medium-inner top-padding-medium">
    <h2 class="tubs center-text bottom-margin-large">Connecting Vero and Stitch helps your team make better decisions</h2>
    <ul class="feature-list left-align unstyled-list halfs">
      <li>
        <img class="right-margin-small" src="/wp-content/themes/vero/assets/images/integrations/stitch/combine.svg">
        <div class="right">
          <h3 class="medium regular no-top-margin">Stitch data together</h3>
          <p class="light"><p class="light">Vero's <a href="/reporting">email campaign reporting</a> is powerful, but there are certain reports that can only be generated when you bring your data together. Combine data to get better insights.</p>
        </div>
        </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/integrations/stitch/custom.svg">
        <div class="right">
          <h3 class="medium regular no-top-margin">Custom reporting</h3>
          <p>Send data via Stitch to your data warehouse and create custom internal and external reports with popular charting tools like Mode Analytics, Looker and Periscope Data.</p>
      </div>
        </li>
      <li>
        <img class="right-margin-small" src="/wp-content/themes/vero/assets/images/integrations/stitch/history.svg">
        <div class="right">
          <h3 class="medium regular no-top-margin">A historical record</h3>
          <p class="light">By warehousing the email interactions that originate in Vero you can backup and store a gospel record of important customer interactions.</p>
        </div>
        </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/integrations/stitch/middleware.svg">
        <div class="right">
          <h3 class="medium regular no-top-margin">Don’t write your own ETL scripts.</h3>
          <p class="light">Writing middleware to capture webhooks and load data into your warehouse is complex and time-consuming. Stitch handles the hard work for you, enabling you to get up and warehousing faster.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="vero-stitch-test-event" class="feature-section border-bottom">
  <div class="inner halfs medium-inner small-reverse left-padding-large right-padding-large">
    <div class="left">
      <h2 class="tubs regular no-bottom-margin">Data Warehousing</h2>
      <p class="medium top-margin-medium no-bottom-margin">Vero’s integration with Stitch allows you to extract, transform and load (ETL) your email campaign data into your data warehouses, such as Redshift and Bigquery. <br><br>
      Joining up your email data with the rest of your customer data will give you access to meaningful and actionable insights, for example by combining your data from payment apps like Stripe with your email data from Vero you can analyze conversions and revenue from email campaigns.
      </p>
    </div>
    <div class="right">
      <img src="/wp-content/themes/vero/assets/images/integrations/stitch/data-warehouse.svg" class="pull-right responsive-image hide-on-medium">
    </div>
  </div>
</section>
<section id="vero-integration-quote" class="feature-section">
  <div class="inner small-inner center-text">
    <div><img src="/wp-content/themes/vero/assets/images/integrations/stitch/quote-vero.jpg" class="quote-image">
      <h1 class="tubs italic regular">“Stitch Data is our pick internally here at Vero to ETL our email engagement to Redshift. Stitch is simple to use and powerful – it's best in class”.</h1>
      <p class="faded large regular">Chris Hexton, CEO Vero</p>
    </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title">Start building your best campaigns today</h1>
    <p class="sub-heading">Start a free trial of Vero and warehouse your email data with Stitch</p>
    <a class="btn btn-success btn-large btn-wide" href="http://app.getvero.com/signup">Get started</a>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>