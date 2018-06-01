<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration-page stitch-integration';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="vero-stitch-heading">
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
    <p class="no-top-margin no-bottom-margin large">Use <strong>Stitch</strong> to replicate your email interaction data including deliveries, opens, clicks and unsubscribes from <strong>Vero</strong> to your Amazon Redshift, Google BigQuery or other data warehouse at the click of a button.</p>
    <a href="http://app.getvero.com" class="btn btn-primary btn-large top-margin-large btn-wide">Try Vero</a>
    <div class="learn-more"><p>Learn More</p><img src="/wp-content/themes/vero/assets/images/integrations/learn-more-carat.svg"></div>
  </div>
</section>
<section id="vero-stitch-info" class="">
  <div class="inner large-inner top-padding-small bottom-padding-large">
    <div class="integration-platform-info stitch">
      <div class="left">
        <p class="medium regular no-top-margin">What is Stitch?</h2>
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
    <h2 class="center-text bottom-margin-large">Connecting Vero and Stitch helps your team make better decisions</h2>
    <ul class="feature-list left-align unstyled-list halfs">
      <li><img class="right-margin-small" src="/wp-content/themes/vero/assets/images/integrations/stitch/combine.svg"><div class="right"><p class="medium regular no-top-margin">Stitch data together</p><p class="light"><p class="light">Vero's <a href="">email campaign reporting</a> is powerful, but there are certain reports that can only be generated when you bring your data together. Combine data to get better insights.</p></div></li>
      <li><img src="/wp-content/themes/vero/assets/images/integrations/stitch/custom.svg"><div class="right"><p class="medium regular no-top-margin">Custom reporting</p>By using Vero and Stitch together, you can use popular charting tools like Mode Analytics, Looker and Periscope Data to create custom internal and external reports.</p></div></li>
      <li><img class="right-margin-small" src="/wp-content/themes/vero/assets/images/integrations/stitch/history.svg"><div class="right"><p class="medium regular no-top-margin">A historical record</p><p class="light">By warehousing the email interactions that originate in Vero you can backup and store a gospel record of important customer interactions.</p></div></li>
      <li><img src="/wp-content/themes/vero/assets/images/integrations/stitch/middleware.svg"><div class="right"><p class="medium regular no-top-margin">Don’t write your own ETL scripts.</p><p class="light">Writing middleware to capture webhooks and load data into your warehouse is complex and time-consuming. Stitch handles the hard work for you, enabling you to get up and warehousing faster.</p></div></li>
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
    <h1 class="cta-title bottom-margin-medium">Start a free trial of Vero and warehouse your email data with Stitch</h1>
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