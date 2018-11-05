<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration-page snowplow-integration';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="vero-integration-heading">
  <div class="inner small-inner center-text">
    <p class="semi-bold smallish font-brand-gray no-top-margin bottom-margin-medium">Integrations</p>

    <div class="integration-logos bottom-margin-large">
      <a class="logo-container vero" href="https://www.getvero.com/">
       <img src="/wp-content/themes/vero/assets/images/integrations/vero-logo.png" srcset="/wp-content/themes/vero/assets/images/integrations/vero-logo@2x.png 2x"></a>
      </>
      <div class="plus">
        <img src="/wp-content/themes/vero/assets/images/integrations/plus.svg">
      </div>
      <a class="logo-container snowplow" href="https://snowplowanalytics.com/products/">
        <img src="/wp-content/themes/vero/assets/images/integrations/snowplow/snowplow-logo.png" srcset="/wp-content/themes/vero/assets/images/integrations/snowplow/snowplow-logo@2x.png 2x">
      </a>
    </div>

    <h1 class="biggie semi-bold">Connect Vero and Snowplow</h1>
    <p class="no-top-margin bottom-margin-large large">Seamlessly send all your email and push interaction data including deliveries, opens, clicks and unsubscribes from <strong>Vero</strong> to your data warehouse using <strong>Snowplow</strong>.</p>

    <p class="no-top-margin faded">Create a Vero account and connect Snowplow in minutes</p>
    <a href="http://app.getvero.com" class="btn btn-success btn-large btn-wide">Get started</a>
  </div>
</section>
<section class="double-padding gray-section">
  <div class="inner small-inner center-text">
    <h2 class="h1 bottom-margin-small">All your data and insights in one place</h2>
    <p class="large no-top-margin bottom-margin-large">Snowplow delivers your data to your data warehouse. With all your data in one place, you can perform any analysis and ask any question of your data using your preferred analytics tool.</p>
    <img class="responsive-image" src="/wp-content/assets/images/integrations/snowplow/data-pipeline.png" srcset="/wp-content/themes/vero/assets/images/integrations/snowplow/data-pipeline@2x.png" alt="Data Pipeline">
  </div>
</section>
<section>
  <div class="inner medium-inner bottom-padding-small">
    <div class="integration-platform-info">
      <div class="left">
        <h2 class="medium regular bottom-margin-tiny">What is Snowplow?</h2>
        <p class="medium no-bottom-margin">Snowplow collects and processes data in batch or real-time configurations from multiple sources (including Vero, Stripe, and Zendesk) and loads your data into your data warehouse (such as Amazon Redshift or Snowflake).</p>
      </div>
      <div class="right">
        <p class="pill pill-medium pill-primary"><a href="https://snowplowanalytics.com/products/" target="_blank">Website</a></p>
        <p class="pill pill-medium pill-primary"><a href="https://help.getvero.com/articles/integrations/integrate-vero-and-snowplow.html" target="_blank">Documentation</a></p>
      </div>
    </div>
  </div>
</section>
<section id="features-more" class="border-bottom">
  <div class="inner medium-inner">
    <h2 class="h1 center-text bottom-margin-large">Why connect Vero and Snowplow</h2>
    <ul class="feature-list left-align unstyled-list halfs">
      <li>
        <img class="right-margin-small" src="/wp-content/themes/vero/assets/images/integrations/snowplow/custom-reports.svg">
        <div class="right">
          <h3 class="medium regular">Build custom reports</h3>
          <p class="light">Send data via Snowplow to your data warehouse and create custom reports with popular charting and BI tools like <a href="https://modeanalytics.com">Mode Analytics</a>, <a href="https://looker.com">Looker</a> and <a href="https://www.periscopedata.com">Periscope Data</a>.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/integrations/snowplow/better-insights.svg">
        <div class="right">
          <h3 class="medium regular">Gain better insights</h3>
          <p class="light">Vero's <a href="https://www.getvero.com/reporting/">campaign reporting</a> is powerful, but there are certain reports that can only be generated when you bring your data together.</p>
        </div>
      </li>
      <li>
        <img class="right-margin-small" src="/wp-content/themes/vero/assets/images/integrations/snowplow/faster.svg">
          <div class="right">
            <h3 class="medium regular">Move faster</h3>
            <p class="light">Writing middleware to capture webhooks and load data into your warehouse is complex and time-consuming. Snowplow handles the hard work for you.</p>
          </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/integrations/snowplow/backup.svg">
        <div class="right">
          <h3 class="medium regular">Backup important data</h3>
          <p class="light">By warehousing the email interactions that originate in Vero you can backup and store a record of important customer interactions and insights.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="vero-segment-test-event" class="feature-section">
  <div class="inner halfs large-inner small-reverse">
    <div class="left">
      <h2 class="h1 regular no-bottom-margin">Meaningful and actionable insights</h2>
      <p class="medium top-margin-medium no-bottom-margin">With Snowplow you can send data to Amazon Redshift or Snowflake data warehouses. Joining up your email and push interaction data with the rest of your customer data will give you access to meaningful and actionable insights. For example, by combining your data from payment apps, like Stripe, with your data from Vero, you can analyze conversions and revenue from email campaigns.</p>
    </div>
    <div class="right">
      <img src="/wp-content/themes/vero/assets/images/integrations/snowplow/meaningful-actionable-insights.svg" class="pull-right responsive-image hide-on-medium">
    </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title">Start building your best campaigns today</h1>
    <p class="sub-heading">Create a Vero account and connect to Snowplow in minutes</p>
    <a class="btn btn-success btn-large btn-wide" href="http://app.getvero.com/signup">Get started</a>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>