<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration-page snowplow-integration';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="vero-integration-heading" banner-name="Connect Vero and Snowplow" element-position="top">
  <div class="inner small-inner center-text">
    <span class="show semi-bold font-gray no-top-margin bottom-margin-lg">Integrations</span>

    <div class="integration-logos bottom-margin-xl">
      <div class="logo-container vero">
       <img src="/wp-content/themes/vero/assets/dist/images/integrations/vero-logo.png" srcset="/wp-content/themes/vero/assets/dist/images/integrations/vero-logo@2x.png 2x" alt="Vero logo">
      </div>
      <div class="plus">
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/plus.svg" alt="Plus">
      </div>
      <div class="logo-container snowplow">
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/snowplow/snowplow-logo.png" srcset="/wp-content/themes/vero/assets/dist/images/integrations/snowplow/snowplow-logo@2x.png 2x" alt="Snowplow logo">
      </div>
    </div>

    <h1 class="biggie semi-bold">Connect Vero and Snowplow</h1>

    <p class="no-top-margin bottom-margin-xl large">Seamlessly send all your email and push interaction data including deliveries, opens, clicks and unsubscribes from <strong>Vero</strong> to your data warehouse using <strong>Snowplow</strong>.</p>

    <p class="no-top-margin faded">Create a Vero account and connect Snowplow in minutes</p>
    <a class="btn btn--success btn--large track-start-trial" element-position="top" href="https://app.getvero.com/signup">Get started</a>
  </div>
</section>
<section class="double-padding bg-offwhite">
  <div class="inner small-inner center-text">
    <h2 class="chunk regular bottom-margin-sm">All your data and insights in one place</h2>
    <p class="large no-top-margin bottom-margin-xl">Snowplow delivers your data to your data warehouse. With all your data in one place, you can perform any analysis and ask any question of your data using your preferred analytics tool.</p>
    <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/integrations/snowplow/data-pipeline.png" srcset="/wp-content/themes/vero/assets/dist/images/integrations/snowplow/data-pipeline@2x.png" alt="Data Pipeline">
  </div>
</section>
<section>
  <div class="inner medium-inner bottom-padding-xs">
    <div class="integration-platform-info">
      <div class="left">
        <h2 class="medium regular bottom-margin-xs">What is Snowplow?</h2>
        <p class="medium no-bottom-margin">Snowplow collects and processes data in batch or real-time configurations from multiple sources (including Vero, Stripe, and Zendesk) and loads your data into your data warehouse (such as Amazon Redshift or Snowflake).</p>
      </div>
      <div class="right">
        <a class="pill pill--primary md-bottom-margin-xs" href="https://snowplowanalytics.com/" target="_blank">Website</a>
        <a class="pill pill--primary" href="https://help.getvero.com/articles/integrations/integrate-vero-and-snowplow.html" target="_blank">Documentation</a>
      </div>
    </div>
  </div>
</section>
<section id="features-more" class="border-bottom-light">
  <div class="inner medium-inner">
    <h2 class="chunk regular center-text bottom-margin-xl">Why connect Vero and Snowplow</h2>
    <ul class="feature-list left-align unstyled-list grid grid-halfs">
      <li>
        <img class="right-margin-sm" src="/wp-content/themes/vero/assets/dist/images/integrations/snowplow/custom-reports.svg" alt="Build custom reports">
        <div class="right">
          <h3 class="medium regular">Build custom reports</h3>
          <p>Send data via Snowplow to your data warehouse and create custom reports with popular charting and BI tools like <a href="https://modeanalytics.com">Mode Analytics</a>, <a href="https://looker.com">Looker</a> and <a href="https://www.periscopedata.com">Periscope Data</a>.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/snowplow/better-insights.svg" alt="Gain better insights">
        <div class="right">
          <h3 class="medium regular">Gain better insights</h3>
          <p>Vero's <a href="https://www.getvero.com/reporting/">campaign reporting</a> is powerful, but there are certain reports that can only be generated when you bring your data together.</p>
        </div>
      </li>
      <li>
        <img class="right-margin-sm" src="/wp-content/themes/vero/assets/dist/images/integrations/snowplow/faster.svg" alt="Move faster">
          <div class="right">
            <h3 class="medium regular">Move faster</h3>
            <p>Writing middleware to capture webhooks and load data into your warehouse is complex and time-consuming. Snowplow handles the hard work for you.</p>
          </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/integrations/snowplow/backup.svg" alt="Backup important data">
        <div class="right">
          <h3 class="medium regular">Backup important data</h3>
          <p>By warehousing the email interactions that originate in Vero you can backup and store a record of important customer interactions and insights.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="vero-segment-test-event">
  <div class="inner halfs medium-inner small-reverse">
    <div class="left">
      <h2 class="chunk regular bottom-margin-lg">Meaningful and actionable insights</h2>
      <p class="medium no-top-margin bottom-margin-sm">With Snowplow you can send data to Amazon Redshift or Snowflake data warehouses. Joining up your email and push interaction data with the rest of your customer data will give you access to meaningful and actionable insights.</p>
      <p class="medium no-bottom-margin">For example, by combining your data from payment apps, like Stripe, with your data from Vero, you can analyze conversions and revenue from email campaigns.</p>
    </div>
    <div class="right flex md-justify-end">
      <img class="responsive-image hide-on-medium" src="/wp-content/themes/vero/assets/dist/images/integrations/snowplow/meaningful-actionable-insights.svg" alt="Meaningful and actionable insights">
    </div>
  </div>
</section>
<section class="bg-gray-lighter" banner-name="Scale personalized messages" element-position="bottom">
  <div class="inner small-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams scale personalized customer messaging</h4>

    <form class="js-signup-form track-signup-form home-signup-form lg-horizontal-margin-lg stack-xs bottom-margin-sm"
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
