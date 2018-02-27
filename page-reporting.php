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
    <p class="semi-bold center-text smallish font-brand-primary center-text no-top-margin bottom-margin-medium">Reporting</p>
    <h1 class="biggie bottom-margin-small">Track the true performance of <span class="large-display-block">your email campaigns</span></h1>
    <p class="no-top-margin large">Understand which of your email campaigns engage <span class="large-display-block">customers and drive revenue.</span></p>
  </div>
</section>
<section id="reports-hero-image" class="double-padding">
  <div class="inner large-inner center-text flush-bottom flush-top">
    <img src="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-hero.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-hero@2x.png 2x" class="center-text display-block responsive-image small-cover-image-200">
  </div>
</section>
<section id="reports-hero-features" class="double-padding">
  <div class="inner large-inner top-padding-large bottom-padding-large">
    <h1 class="bottom-margin-medium center-text">View and analyze essential email results</h1>
    <ul class="feature-list left-align unstyled-list halfs">
      <li><img class="right-margin-small" src="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-results.svg"><div class="right"><p class="medium regular no-top-margin">Monitor the overall results for key email campaign metrics</p></div></li>
      <li><img src="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-day.svg"><div class="right"><p class="medium regular no-top-margin">Chart and export day-by-day metrics for all your campaigns</p></div></li>
      <li><img class="right-margin-small" src="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-series.svg"><div class="right"><p class="medium regular no-top-margin">Understand how each email within a series drives different results</p></div></li>
      <li><img class="right-margin-small" src="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-review.svg"><div class="right"><p class="medium regular no-top-margin">Review results from one campaign to the next, ensuring consistency and stability</p></div></li>
    </ul>
  </div>
</section>
<section id="reports-hero-ui-features" class="feature-section double-padding">
  <div class="inner halfs medium-inner left-padding-large right-padding-large flush-top">
    <div class="left center-text">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-content-breakdown.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-content-breakdown@2x.png 2x" class="bottom-margin-small small-responsive-image">
      <p class="medium regular center-text no-top-margin">Compare the results of A/B tests and different language variations.</p>
    </div>
    <div class="right center-text">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-links.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-links@2x.png 2x" class="small-responsive-image bottom-margin-small">
      <p class="medium regular center-text no-top-margin">See exactly which links in your emails are getting the most traction.</p>
    </div>
  </div>
</section>
<section id="reports-webhooks" class="double-padding dark-box-flat">
  <div class="inner small-inner center-text flush-bottom">
    <h1 class="bottom-margin-small">Access the insights important to your business</h1>
    <p class="no-top-margin large">Joining up your email campaign data with the rest of your customer data, such as internal application usage and payment information, will give you a more complete and specific picture of the results your campaigns drive.</p>
  </div>
  <div class="inner small-inner center-text flush-top flush-bottom">
    <img src="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-webhooks.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-webhooks@2x.png 2x" class="center-text top-margin-medium bottom-margin-medium responsive-image">
     <p class="no-top-margin medium">Vero’s integrations with Stitch Data and Segment allow you to extract, transform and load (ETL) all of the data that Vero generates from your campaigns to Redshift, Google Big Query and other data stores with “one-click”.</p>
  </div>
</section>
<section id="report-webhook-data" class="dark-box-flat">
  <div class="inner medium-inner center-text">
    <h1 class="tubs regular no-bottom-margin top-margin-large top-padding-medium">Send a webhook for all of the data that originates from a Vero campaign</h1>
    <img src="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-data.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-data@2x.png 2x" class="bottom-margin-small small-responsive-image top-margin-large">
  </div>
  <div class="inner medium-inner flush-bottom">
    <h1 class="bottom-margin-small">Generate insights from a complete view of your customer data</h1>
    <p class="no-top-margin medium">Using a BI tool, like Mode Analytics, you can query all your customer data and build custom reports that can give you the insights important to your specific business.</p>
    <div class="center-text top-margin-medium">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-third-party-tools.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/reporting/report-third-party-tools@2x.png 2x" class="center-text responsive-image align-middle">
    </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title">Put your data first and craft better customer experiences</h1>
    <p class="sub-heading">Create a free account, import your data and see how Vero can help your team.</p>
    <form action="https://app.getvero.com/pre_signups" method='post' class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Create your account">
    </form>
    <p class="small faded">Import your data, setup and test Vero for free.</p>
  </div>
</section>


<?php 
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>