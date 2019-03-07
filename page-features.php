<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="features-menu" class="border-bottom-light">
  <div class="inner large-inner center-text">
    <h1 class="chunk regular bottom-margin-small">The definitive workflow for creating best-in-class email experiences</h1>
    <p class="medium">Vero helps engineering, marketing and product teams move faster to design valuable customer experiences</p>
    <ul class="no-bottom-margin feature-list feature-menu-list unstyled-list flex flex-wrap md-flex-nowrap justify-center">
      <li class="no-top-margin">
        <a href="#features-collection" data-scroll>
          <img src="/wp-content/themes/vero/assets/images/home/features/feature-menu/home-capture.svg" alt="Get your data into Vero">
          <p class="semi-bold annotation uppercase font-brand-warning center-text">Collection</p>
        </a>
      </li>
      <li class="no-top-margin">
        <a href="#features-modelling" data-scroll>
          <img src="/wp-content/themes/vero/assets/images/home/features/feature-menu/home-model.svg" alt="View and model your customer data in one place">
          <p class="semi-bold annotation uppercase font-brand-success center-text">Modelling</p>
        </a>
      </li>
      <li class="no-top-margin">
        <a href="#features-automation" data-scroll>
          <img src="/wp-content/themes/vero/assets/images/home/features/feature-menu/home-manage.svg" alt="Complete template management. Advanced scheduling design">
          <p class="semi-bold annotation uppercase font-brand-primary center-text">Automation</p>
        </a>
      </li>
      <li class="no-top-margin">
        <a href="#features-deployment" data-scroll>
          <img src="/wp-content/themes/vero/assets/images/home/features/feature-menu/home-deploy.svg" alt="Scalability and centralised reporting">
          <p class="semi-bold annotation uppercase font-brand-error center-text">Deployment</p>
        </a>
      </li>
    </ul>
  </div>
</section>
<section id="features-collection" class="feature-section double-padding border-bottom-light">
  <div class="inner large-inner halfs flex-wrap feature-swapper left-padding-large right-padding-large">
    <h2 class="semi-bold annotation uppercase font-brand-warning center-text bottom-margin-medium">Collection</h2>
    <div class="left primary">
      <ul class="button-list unstyled-list center-text">
        <li class="padding-small disabled-button">
          <img src="/wp-content/themes/vero/assets/images/home/features/collection/segment-logo.png" alt="Segment logo">
          <p class="no-margin top-margin-tiny">Connect your data via <span class="semi-bold">Segment.com</span></p>
        </li>
      </ul>

      <div class="center-text padding-small">OR</div>

      <pre class="vero-code okaidia active-feature" id="feature-collection-js" data-src="/wp-content/themes/vero/snippets/features-collection-js.js"></pre>
      <pre class="vero-code okaidia inactive-feature" id="feature-collection-php" data-src="/wp-content/themes/vero/snippets/features-collection-php.php"></pre>
      <pre class="vero-code okaidia inactive-feature" id="feature-collection-ruby" data-src="/wp-content/themes/vero/snippets/features-collection-ruby.rb"></pre>
      <pre class="vero-code okaidia inactive-feature" id="feature-collection-node" data-src="/wp-content/themes/vero/snippets/features-collection-node.js"></pre>
      <pre class="vero-code okaidia inactive-feature" id="feature-collection-python" data-src="/wp-content/themes/vero/snippets/features-collection-python.py"></pre>
      <pre class="vero-code okaidia inactive-feature" id="feature-collection-apple" data-src="/wp-content/themes/vero/snippets/features-collection-apple.m"></pre>

      <ul class="collection-code button-list unstyled-list center-text">
        <li class="active">
          <a href="#js" title="Javascript" class="feature-swapper-option" data-swap-to="feature-collection-js">
            <img class="align-middle" src="/wp-content/themes/vero/assets/images/home/features/collection/data-js.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-js@2x.png 2x" alt="Javascript">
          </a>
        </li>
        <li>
          <a href="#php" title="PHP" class="feature-swapper-option" data-swap-to="feature-collection-php">
            <img class="align-middle" src="/wp-content/themes/vero/assets/images/home/features/collection/data-php.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-php@2x.png 2x" alt="PHP">
          </a>
        </li>
        <li>
          <a href="#ruby" title="Ruby" class="feature-swapper-option" data-swap-to="feature-collection-ruby">
            <img class="align-middle" src="/wp-content/themes/vero/assets/images/home/features/collection/data-ruby.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-ruby@2x.png 2x" alt="Ruby">
          </a>
        </li>
        <li>
          <a href="#node" title="Node.js" class="feature-swapper-option" data-swap-to="feature-collection-node">
            <img class="align-middle" src="/wp-content/themes/vero/assets/images/home/features/collection/data-nodejs.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-nodejs@2x.png 2x" alt="Node.hs">
          </a>
        </li>
        <li>
          <a href="#python" title="Python" class="feature-swapper-option" data-swap-to="feature-collection-python">
            <img class="align-middle" src="/wp-content/themes/vero/assets/images/home/features/collection/data-python.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-python@2x.png 2x" alt="Python">
          </a>
        </li>
        <li>
          <a href="#apple" title="Apple - IOS" class="feature-swapper-option" data-swap-to="feature-collection-apple">
            <img class="align-middle" src="/wp-content/themes/vero/assets/images/home/features/collection/data-apple.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-apple@2x.png 2x" alt="Objective C">
          </a>
        </li>
      </ul>

      <p class="small">Visit our <a class="" href="https://developers.getvero.com">developer center</a> for API documentation and details.</p>
    </div>
    <div class="right secondary">
      <h2 class="tubs regular regular bottom-margin-medium">Get your data into Vero</h2>
      <p class="medium bottom-margin-medium">Connect to your <span class="semi-bold">real time event stream</span> in Segment, push real time events via Vero's own libraries, upload ad hoc CSVs and pull in data from your own APIs. Data is critical for segmentation and email personalization, so when it comes to data we've got your back.</p>
      <ul class="feature-list left-image unstyled-list">
        <li class="bottom-margin-medium">
          <img src="/wp-content/themes/vero/assets/images/home/features/collection/segment-logo.png" alt="Segment logo">
          <h3 class="semi-bold atomic bottom-margin-micro">Works with Segment</h3>
          <p>If you’re already using segment, sending event data to Vero is as simple as flipping a switch.</p>
        </li>
        <li class="no-bottom-margin">
          <img src="/wp-content/themes/vero/assets/images/home/features/collection/logs.svg">
          <h3 class="semi-bold atomic bottom-margin-micro">Understand users and events</h3>
          <p>Vero understands data about users and their actions ("events"). We cache this data to enable powerful segmentation and automation.</p>
        </li>
      </ul>
    </div>
  </div>
</section>
<section id="features-modelling" class="feature-section double-padding border-bottom-light">
  <div class="inner halfs flex-wrap large-inner feature-swapper">
    <h2 class="semi-bold center-text annotation uppercase font-brand-success center-text bottom-margin-medium">Modelling</h2>
    <div class="left secondary">
      <h2 class="tubs regular bottom-margin-medium">View and model your customer data in one place</h2>
      <p class="medium bottom-margin-medium">We provide a scalable system to turn your customer data into meaningful segments. Forget "lists", forget manual maintenance of user states and remove scattered segmentation from your application and backend architecture. Use Vero to design segments via our UI and store them centrally in one place.</p>
      <ul class="feature-list left-image unstyled-list">
        <li class="bottom-margin-medium">
          <img src="/wp-content/themes/vero/assets/images/home/features/modelling/segmentation.svg" alt="Powerful segmentation">
          <h3 class="semi-bold atomic bottom-margin-micro">Powerful segmentation</h3>
          <p>Create, save and deploy completely dynamic groups of your customers based on their attributes and actions.</p>
        </li>
        <li class="no-bottom-margin">
          <img src="/wp-content/themes/vero/assets/images/home/features/modelling/customers.svg" alt="Customer profiles">
          <h3 class="semi-bold atomic bottom-margin-micro">Customer profiles</h3>
          <p>Troubleshoot, investigate and deep dive into your customer lifecycle. View all of the data Vero knows about each of your customers.</p>
        </li>
      </ul>
    </div>
    <div class="right primary">
      <img class="feature-image inactive-feature top-margin-small bottom-margin-small image-shadow responsive-image" id="feature-image-profiles" data-featherlight="/wp-content/themes/vero/assets/images/home/features/modelling/profiles@2x.png" src="/wp-content/themes/vero/assets/images/home/features/modelling/profiles.png" srcset="/wp-content/themes/vero/assets/images/home/features/modelling/profiles@2x.png 2x" alt="Customer Account">
      <img class="feature-image active-feature top-margin-small bottom-margin-small image-shadow responsive-image" id="feature-image-segments" data-featherlight="/wp-content/themes/vero/assets/images/home/features/modelling/segmentation@2x.png" src="/wp-content/themes/vero/assets/images/home/features/modelling/segmentation.png" srcset="/wp-content/themes/vero/assets/images/home/features/modelling/segmentation@2x.png 2x" alt="Customer Profiles Segmentation">
      <ul class="feature-list button-list pill-buttons left-image unstyled-list buttom-margin-small">
        <li class="active bottom-margin-small">
          <a class="unstyled feature-swapper-option" data-swap-to="feature-image-segments">
            <p class="semi-bold annotation no-margin">Segmentation</p>
          </a>
        </li>
        <li>
          <a class="unstyled feature-swapper-option" data-swap-to="feature-image-profiles">
            <p class="semi-bold annotation no-margin">Customer Profiles</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="feature-section double-padding border-bottom-light" id="features-automation">
  <div class="inner halfs flex-wrap large-inner feature-swapper">
    <h2 class="semi-bold center-text annotation uppercase font-brand-primary bottom-margin-medium">Automation</h2>

    <div class="left primary">
      <img class="no-margin top-margin-small bottom-margin-small feature-image active-feature image-shadow responsive-image" id="feature-image-automate" data-featherlight="/wp-content/themes/vero/assets/images/home/features/automation/campaign@2x.png" src="/wp-content/themes/vero/assets/images/home/features/automation/campaign.png" srcset="/wp-content/themes/vero/assets/images/home/features/automation/campaign@2x.png 2x" alt="Automation">
      <img class="no-margin top-margin-small  bottom-margin-small image-shadow responsive-image feature-image inactive-feature" id="feature-image-manage" data-featherlight="/wp-content/themes/vero/assets/images/home/features/automation/content@2x.png" src="/wp-content/themes/vero/assets/images/home/features/automation/content.png" srcset="/wp-content/themes/vero/assets/images/home/features/automation/content@2x.png 2x" alt="Manage Content">
      <ul class="feature-list button-list pill-buttons left-image unstyled-list buttom-margin-small">
        <li class="active top-margin-small">
          <a class="unstyled feature-swapper-option" data-swap-to="feature-image-automate">
            <p class="semi-bold annotation no-margin">Automation</p>
          </a>
        </li>
        <li class="top-margin-small">
          <a class="unstyled feature-swapper-option" data-swap-to="feature-image-manage">
            <p class="semi-bold annotation no-margin">Manage Content</p>
          </a>
        </li>
      </ul>
    </div>
    <div class="right secondary">
      <h2 class="tubs regular bottom-margin-medium">Complete template management. Advanced scheduling design.</h2>

      <p class="medium bottom-margin-medium">Craft any email automation you can dream up using Vero's powerful tools: schedule one-off campaigns, recurring campaigns (hourly, daily or weekly), design drip and automated campaign workflows and trigger transactional emails, all in one place.
      <ul class="feature-list left-image unstyled-list">
        <li class="bottom-margin-medium">
          <img src="/wp-content/themes/vero/assets/images/home/features/automation/campaigns.svg" alt="Email scheduling and automation">
          <h3 class="semi-bold atomic bottom-margin-mirco">Email scheduling and automation</h3>
          <p>Send an ad hoc campaign or automate an entire series of emails with specific segmentation: Vero helps you deploy your email content and logic with total control.</p>
        </li>
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/features/automation/templates.svg" alt="Template management">
          <h3 class="semi-bold atomic bottom-margin-micro">Template management</h3>
          <p>Store base templates centrally, add "editable" regions and empower your entire team to design campaigns safely.</p>
        </li>
      </ul>
    </div>

    <div class="outlined-box top-margin-medium">
      <img class="right-margin-medium" src="/wp-content/themes/vero/assets/images/home/features/automation/fusion-logo.svg" alt="Fusion. Load data externally ">
      <div>
        <h3 class="semi-bold smallish bottom-margin-micro">Fusion. Load data externally.</h3>
        <p>Fusion loads data from your APIs at send time, giving you more flexibility in your email workflow, and enabling you to use your full CMS, data and application stack with Vero. <a href="https://www.getvero.com/fusion">Read more about Fusion</a></p>
      </div>
    </div>
  </div>
</section>
<section id="features-deployment" class="feature-section double-padding border-bottom-light">
  <div class="inner halfs flex-wrap large-inner">
    <h2 class="semi-bold center-text annotation uppercase font-brand-error center-text bottom-margin-medium">Deployment</h2>
    <div class="left secondary">
      <h2 class="tubs regular regular bottom-margin-medium">Scalability and centralised reporting</h2>
      <p class="medium bottom-margin-medium">Deploy your email automation and content reliabily whether it's to one or 100+ million customers. Let us handle deliverability or BYO email infrastructure platform – we'll track and centralise your reporting.</p>

      <ul class="feature-list left-image unstyled-list">
        <li class="bottom-margin-medium">
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/multi-providers.svg" alt="BYO email infrastructure">
          <h3 class="semi-bold atomic bottom-margin-micro">BYO email infrastructure</h3>
          <p>Maintain your email reputation and control your deliverability by leveraging one or more of the most popular email infrastructure platforms.</p>
        </li>
        <li class="no-bottom-margin">
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/webhooks.svg" alt="Data warehouse every interaction">
          <h3 class="semi-bold atomic bottom-margin-micro">Data warehouse every interaction</h3>
          <p>Output data about every email interaction to your own API for data warehousing using webhooks. We also support <a href="https://segment.com/sources" target="_blank">Segment's Sources</a> to export data with a single click.</p>
        </li>
      </ul>
    </div>
    <div class="right primary">
      <ul class="button-list mail-services unstyled-list">
        <li class="center-text padding-small disabled-button">
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/sendgrid.png" srcset="/wp-content/themes/vero/assets/images/home/features/deployment/sendgrid@2x.png 2x" class="responsive-image" alt="Sendgrid logo">
        </li>
        <li class="center-text padding-small disabled-button">
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/mailgun.png" srcset="/wp-content/themes/vero/assets/images/home/features/deployment/mailgun@2x.png 2x" class="responsive-image" alt="Mailgun logo">
        </li>
        <li class="center-text padding-small disabled-button">
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/mailjet.png" srcset="/wp-content/themes/vero/assets/images/home/features/deployment/mailjet@2x.png 2x" class="responsive-image" alt="Mailjet logo">
        </li>
        <li class="center-text padding-small disabled-button">
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/dyn.png" srcset="/wp-content/themes/vero/assets/images/home/features/deployment/dyn@2x.png 2x" class="responsive-image" alt="Dyn logo">
        </li>
      </ul>
      <ul class="button-list unstyled-list">
        <li class="padding-small disabled-button">
          <!-- <img src="/wp-content/themes/vero/assets/images/home/features/deployment/64.png" width="36" class="pull-left right-margin-small"> -->
          <p class="small"><span class="semi-bold">Don’t have your own email provider?</span> No problem, let us send your emails on our managed infrastructure. We partner with Mailgun and can support any custom configuration, including dedicated IPs and custom domains. <a href="mailto:support@getvero.com">Email our Support Team</a>.</p>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="double-padding" id="features-more">
  <div class="inner large-inner">
    <h2 class="semi-bold center-text bottom-margin-medium">Here's a complete list of our most popular features</h2>
    <ul class="feature-list unstyled-list grid grid-thirds center-text">
      <li class="bottom-margin-medium">
        <img src="/wp-content/themes/vero/assets/images/home/features/more/newsletter.svg" alt="Scheduled Newsletters">
        <h3 class="semi-bold atomic bottom-margin-micro">Scheduled Newsletters</h3>
        <p class="light">Send one-off campaigns to individual segments – instantly, or at a scheduled time in the future.</p>
      </li>
      <li class="bottom-margin-medium">
        <img src="/wp-content/themes/vero/assets/images/home/features/more/reports.svg" alt="Detailed reporting">
        <h3 class="semi-bold atomic bottom-margin-micro">Detailed Reporting</h3>
        <p class="light">Get aggregate and day-by-day breakdowns of every email campaign sent through Vero. Plays nice with data warehouses too.</p>
      </li>
      <li class="bottom-margin-medium">
        <img src="/wp-content/themes/vero/assets/images/home/features/more/liquid.svg" alt="Liquid content">
        <h3 class="semi-bold atomic bottom-margin-micro">Liquid Content</h3>
        <p class="light">Personalise every email using the <a href="https://www.getvero.com/email-personalization-liquid-guide" target="_blank">Liquid templating language</a> and utilise your customer data.</p>
      </li>
      <li class="bottom-margin-medium">
        <img src="/wp-content/themes/vero/assets/images/home/features/more/templates.svg" alt="Manage HTML templates">
        <h3 class="semi-bold atomic bottom-margin-micro">Manage HTML templates</h3>
        <p class="light">Upload, organise and edit your fully responsive email designs and reuse them in all of your campaigns.</p>
      </li>
      <li class="bottom-margin-medium">
        <img src="/wp-content/themes/vero/assets/images/home/features/more/editables.svg" alt="Visual editor">
        <h3 class="semi-bold atomic bottom-margin-micro">Visual Editor</h3>
        <p class="light">Define areas of your email content that the whole team can edit in Vero's point-and-click content editor.</p>
      </li>
      <li class="bottom-margin-medium">
        <img src="/wp-content/themes/vero/assets/images/home/features/more/timezones.svg" alt="Send per timezone">
        <h3 class="semi-bold atomic bottom-margin-micro">Send per Timezone</h3>
        <p class="light">Schedule your emails at the right time for every customer, no matter where in the world they are.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/more/conversions.svg" alt="Track conversions">
        <h3 class="semi-bold atomic bottom-margin-micro">Track Conversions</h3>
        <p class="light">Go beyond just clicks and track the true success of each campaign using user actions as converion goals.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/more/abtesting.svg" alt="A/B Testing">
        <h3 class="semi-bold atomic bottom-margin-micro">A/B Testing</h3>
        <p class="light">Multi-variate test the subject, from address, content and template for any email campaign, including triggered workflows.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/more/csv.svg" alt="CSV Imports">
        <h3 class="semi-bold atomic bottom-margin-micro">CSV Imports</h3>
        <p class="light">Hit the ground running and import your customer attributes and actions using Vero's CSV import tools.</p>
      </li>
    </ul>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title semi-bold bottom-margin-small">Put your data first and craft better customer experiences</h1>
    <p class="sub-heading">Create a free account, import your data and see how Vero can help your team.</p>
    <a class="btn btn-success btn-large btn-wide" href="http://app.getvero.com/signup">Get started</a>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>