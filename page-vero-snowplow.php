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
    <p class="semi-bold smallish font-brand-gray no-top-margin bottom-margin-tiny">Integrations</p>
    <h1 class="semi-bold bottom-margin-large">Connect Vero and Snowplow</h1>
    <div class="integration-logos bottom-margin-large">
      <div class="left logo-container vero">
        <img src="/wp-content/themes/vero/assets/images/integrations/vero-logo.png" srcset="/wp-content/themes/vero/assets/images/integrations/vero-logo@2x.png 2x" class="">
      </div>
      <div class="plus">
        <img src="/wp-content/themes/vero/assets/images/integrations/plus.svg">
      </div>
      <div class="right logo-container snowplow">
        <img src="/wp-content/themes/vero/assets/images/integrations/snowplow/snowplow-logo.png" srcset="/wp-content/themes/vero/assets/images/integrations/snowplow/snowplow-logo@2x.png 2x" class="">
      </div>
    </div>
    <p class="no-top-margin no-bottom-margin large">Sync real-time email and push interaction data (deliveries, opens, clicks and unsubscribes) with the rest of your customer data, using <strong>Snowplow</strong>. With all your data in one place, you can ask any question of your data using your preferred analytics tool.</p>
    <a href="http://app.getvero.com" class="btn btn-success btn-large top-margin-large btn-wide">Try Vero</a>
  </div>
</section>
<section class="double-padding gray-section">
  <div class="inner small-inner center-text flush-bottom">
    <h2 class="h1 bottom-margin-large">How the Snowplow integrations works</h2>
  </div>
  <div class="inner small-inner flush-top">
    <img class="responsive-image bottom-margin-large" src="/wp-content/assets/images/integrations/snowplow/data-pipeline.png" srcset="/wp-content/themes/vero/assets/images/integrations/snowplow/data-pipeline@2x.png" alt="Data Pipeline">
  </div>
</section>
<section class="integration-overlap">
  <div class="inner large-inner flush-top flush-bottom">
    <div class="integration-platform-info">
      <div class="left">
        <h2 class="medium regular no-top-margin bottom-margin-tiny">What is Snowplow?</h2>
        <p class="medium no-bottom-margin">Snowplow collects and processes data in batch or real-time configurations from multiple sources (including Vero, Stripe, and Zendesk) and unifies that data into a single data stream. You can use Snowplow to drive data-differentiated product features or loads your data into Amazon Redshift or Snowflake data warehouses. </p>
      </div>
      <div class="right">
        <p class="pill pill-medium pill-primary"><a href="https://segment.com/" target="_blank">Website</a></p>
        <p class="pill pill-medium pill-primary"><a href="https://segment.com/docs/sources/" target="_blank">Documentation</a></p>
      </div>
    </div>
  </div>
</section>
<section id="features-more" class="border-bottom">
  <div class="inner medium-inner top-padding-huge">
    <h2 class="tubs center-text bottom-margin-large">Connect Vero and Snowplow to make smarter decisions, faster</h2>
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
<section id="vero-segment-test-event" class="feature-section border-bottom">
  <div class="inner halfs large-inner small-reverse">
    <div class="left">
      <h2 class="tubs regular no-bottom-margin">Meaningful and actionable insights</h2>
      <p class="medium top-margin-medium no-bottom-margin">With Snowplow you can send data to Amazon Redshift or Snowflake data warehouses. Joining up your email and push interaction data with the rest of your customer data will give you access to meaningful and actionable insights. For example, by combining your data from payment apps, like Stripe, with your data from Vero, you can analyze conversions and revenue from email campaigns.</p>
    </div>
    <div class="right">
      <img src="/wp-content/themes/vero/assets/images/integrations/snowplow/meaningful-actionable-insights.svg" class="pull-right responsive-image hide-on-medium">
    </div>
  </div>
</section>
<section id="vero-integration-quote" class="feature-section">
  <div class="inner small-inner center-text">
    <div><img src="/wp-content/themes/vero/assets/images/integrations/segment/quote-helloprint.jpg" class="quote-image">
      <h1 class="tubs italic regular">“The Vero and Segment integration was a matter of ticking a box, putting in an API key and our CRM team was able to set up their first campaign in just a few hours”.</h1>
      <p class="faded large regular">Michael Heerkens, CTO Helloprint</p>
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