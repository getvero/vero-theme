<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'more-page';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>


<section id="reports-hero">
  <div class="inner small-inner center-text bottom-padding-medium right-padding-medium left-padding-medium">
    <p class="semi-bold smallish font-brand-primary bottom-margin-medium">Reporting</p>
    <h1 class="biggie semi-bold bottom-margin-sm">Track the true performance of <span class="show">your email campaigns</span></h1>
    <p class="large">Understand which of your email campaigns engage <span class="show">customers and drive revenue.</span></p>
  </div>
</section>
<section id="reports-hero-image" class="double-padding">
  <div class="inner large-inner center-text flush-bottom flush-top">
    <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-hero.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-hero@2x.png 2x" class="center-text show responsive-image small-cover-image-200" alt="Track the true performance ofyour email campaigns">
  </div>
</section>
<section id="reports-hero-features" class="double-padding">
  <div class="inner medium-inner top-padding-large bottom-padding-large">
    <h2 class="chunk regular bottom-margin-medium center-text">View and analyze essential email results</h2>
    <ul class="unstyled-list grid grid-halfs">
      <li class="no-margin flex flex-column lg-flex-row items-start">
        <img class="right-margin-sm" src="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-results.svg" alt="Monitor the overall results for key email campaign metrics">
        <div class="right">
          <p class="medium regular no-top-margin">Monitor the overall results for key email campaign metrics</p>
        </div>
      </li>
      <li class="no-margin flex flex-column lg-flex-row items-start">
        <img class="right-margin-sm" src="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-day.svg" alt="Chart and export day-by-day metrics for all your campaigns">
        <div class="right">
          <p class="medium regular no-top-margin">Chart and export day-by-day metrics for all your campaigns</p>
        </div>
      </li>
      <li class="no-margin flex flex-column lg-flex-row items-start">
        <img class="right-margin-sm" src="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-series.svg" alt="Understand how each email within a series drives different results">
        <div class="right">
          <p class="medium regular no-top-margin">Understand how each email within a series drives different results</p>
        </div>
      </li>
      <li class="no-margin flex flex-column lg-flex-row items-start">
        <img class="right-margin-sm" src="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-review.svg" alt="Review results from one campaign to the next, ensuring consistency and stability">
        <div class="right">
          <p class="medium regular no-top-margin">Review results from one campaign to the next, ensuring consistency and stability</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="reports-hero-ui-features" class="feature-section double-padding">
  <div class="inner halfs medium-inner left-padding-large right-padding-large flush-top">
    <div class="left center-text">
      <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-content-breakdown.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-content-breakdown@2x.png 2x" class="bottom-margin-sm small-responsive-image" alt="Compare the results of A/B tests and different language variations.">
      <p class="medium regular">Compare the results of A/B tests and different language variations.</p>
    </div>
    <div class="right center-text">
      <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-links.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-links@2x.png 2x" class="small-responsive-image bottom-margin-sm" alt="See exactly which links in your emails are getting the most traction.">
      <p class="medium regular">See exactly which links in your emails are getting the most traction.</p>
    </div>
  </div>
</section>
<section  class="double-padding bg-dark-blue font-white" id="reports-webhooks">
  <div class="inner small-inner center-text flush-bottom">
    <h2 class="chunk regular bottom-margin-sm">Access the insights important to your business</h2>
    <p class="no-top-margin large">Joining up your email campaign data with the rest of your customer data, such as internal application usage and payment information, will give you a more complete and specific picture of the results your campaigns drive.</p>
  </div>
  <div class="inner small-inner center-text flush-top flush-bottom">
    <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-webhooks.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-webhooks@2x.png 2x" class="center-text top-margin-medium bottom-margin-medium responsive-image" alt="Access the insights important to your business">
     <p class="no-top-margin medium">Vero’s integrations with Stitch Data and Segment allow you to extract, transform and load (ETL) all of the data that Vero generates from your campaigns to Redshift, Google Big Query and other data stores with “one-click”.</p>
  </div>
</section>
<section class="bg-dark-blue font-white bottom-margin-large" id="report-webhook-data">
  <div class="inner medium-inner center-text">
    <h2 class="tubs regular no-bottom-margin top-margin-large top-padding-medium">Send a webhook for all of the data that originates from a Vero campaign</h2>
    <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-data.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-data@2x.png 2x" class="bottom-margin-sm small-responsive-image top-margin-large" alt="Send a webhook for all of the data that originates from a Vero campaign">
  </div>
  <div class="inner medium-inner flush-bottom">
    <h2 class="chunk regular bottom-margin-sm">Generate insights from a complete view of your customer data</h2>
    <p class="no-top-margin medium">Using a BI tool, like Mode Analytics, you can query all your customer data and build custom reports that can give you the insights important to your specific business.</p>
    <div class="center-text top-margin-medium">
      <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-third-party-tools.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/reporting/report-third-party-tools@2x.png 2x" class="center-text responsive-image align-middle" alt="Generate insights from a complete view of your customer data">
    </div>
  </div>
</section>
<section class="cta border-dark-blue bg-white center-text">
  <div class="cta-wrap">
    <h4 class="regular bottom-margin-smedium">Vero helps marketing and engineering teams use their data to create a better customer messaging experience</h4>

    <a class="btn btn-success btn-large bottom-margin-smedium" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>