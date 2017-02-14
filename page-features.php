<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="features-menu" class="border-bottom">
  <div class="inner large-inner center-text">
    <h1 class="bottom-margin-small">The definitive workflow for creating best-in-class email experiences</h1>
    <p class="no-top-margin">Vero helps engineering, marketing and product teams move faster to design valuable customer experiences.</p>
    <ul class="feature-list feature-menu-list unstyled-list full-width">
      <li class="no-top-margin"><a href="#features-collection" data-scroll><img src="/wp-content/themes/vero/assets/images/home/features/feature-menu/home-capture.svg"><p class="semi-bold small uppercase font-brand-warning center-text">Collection</p></a></li>
      <li class="no-top-margin"><a href="#features-modelling" data-scroll><img src="/wp-content/themes/vero/assets/images/home/features/feature-menu/home-model.svg"><p class="semi-bold small uppercase font-brand-success center-text">Modelling</p></a></li>
      <li class="no-top-margin"><a href="#features-automation" data-scroll><img src="/wp-content/themes/vero/assets/images/home/features/feature-menu/home-manage.svg"><p class="semi-bold small uppercase font-brand-primary center-text">Automation</p></a></li>
      <li class="no-top-margin"><a href="#features-deployment" data-scroll><img src="/wp-content/themes/vero/assets/images/home/features/feature-menu/home-deploy.svg"><p class="semi-bold small uppercase font-brand-error center-text">Deployment</p></a></li>
    </ul>
  </div>
</section>
<section id="features-collection" class="feature-section double-padding border-bottom">
  <div class="inner halfs large-inner feature-swapper left-padding-large right-padding-large">
    <p class="semi-bold center-text small uppercase font-brand-warning center-text no-top-margin bottom-margin-medium">Collection</p>
    <div class="left primary">

      <ul class="button-list unstyled-list center-text">
        <li class="padding-small disabled-button">
          <img src="/wp-content/themes/vero/assets/images/home/features/collection/segment-logo.png">
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
        <li class="active"><a href="#js" title="Javascript" class="feature-swapper-option" data-swap-to="feature-collection-js"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-js.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-js@2x.png 2x"></a></li>
        <li><a href="#js" title="PHP" class="feature-swapper-option" data-swap-to="feature-collection-php"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-php.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-php@2x.png 2x"></a></li>
        <li><a href="#js" title="Ruby" class="feature-swapper-option" data-swap-to="feature-collection-ruby"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-ruby.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-ruby@2x.png 2x"></a></li>
        <li><a href="#js" title="Node.js" class="feature-swapper-option" data-swap-to="feature-collection-node"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-nodejs.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-nodejs@2x.png 2x"></a></li>
        <li><a href="#js" title="Python" class="feature-swapper-option" data-swap-to="feature-collection-python"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-python.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-python@2x.png 2x"></a></li>
        <li><a href="#js" title="Apple - IOS" class="feature-swapper-option" data-swap-to="feature-collection-apple"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-apple.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-apple@2x.png 2x"></a></li>
      </ul>

      <p class="small">Visit our <a class="" href="http://developers.getvero.com">developer center</a> for API documentation and details.</p>
    </div>
    <div class="right secondary">
      <h1 class="tubs regular no-bottom-margin">Get your data into Vero</h1>
      <p class="smallish top-margin-medium no-bottom-margin">Connect to your <span class="semi-bold">real time event stream</span> in Segment, push real time events via Vero's own libraries, upload ad hoc CSVs and pull in data from your own APIs. Data is critical for segmentation and email personalization, so when it comes to data we've got your back.</p>
      <ul class="feature-list left-image unstyled-list">
        <li class="top-margin-large no-bottom-margin">
          <img src="/wp-content/themes/vero/assets/images/home/features/collection/segment-logo.png">
          <p class="semi-bold smallish no-margin">Works with Segment</p><p class="light">If you’re already using segment, sending event data to Vero is as simple as flipping a switch.</p>
        </li>
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/features/collection/logs.svg">
          <p class="semi-bold smallish top-margin-medium no-bottom-margin">Understand users and events</p><p class="light">Vero understands data about users and their actions ("events"). We cache this data to enable powerful segmentation and automation.</p>
        </li>
      </ul>
    </div>
  </div>
</section>
<section id="features-modelling" class="feature-section double-padding border-bottom">
  <div class="inner halfs large-inner feature-swapper">
    <p class="semi-bold full center-text small uppercase font-brand-success center-text bottom-margin-medium">Modelling</p>
    <div class="left secondary">
      <h1 class="tubs regular no-bottom-margin">View and model your customer data in one place</h1>
      <p class="smallish top-margin-medium no-bottom-margin">We provide a scalable system to turn your customer data into meaningful segments. Forget "lists", forget manual maintenance of user states and remove scattered segmentation from your application and backend architecture. Use Vero to design segments via our UI and store them centrally in one place.</p>
      <ul class="feature-list left-image unstyled-list">
        <li class="top-margin-large no-bottom-margin">
          <img src="/wp-content/themes/vero/assets/images/home/features/modelling/segmentation.svg">
          <p class="semi-bold smallish no-margin">Powerful segmentation</p><p class="light">Create, save and deploy completely dynamic groups of your customers based on their attributes and actions.</p>
        </li>
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/features/modelling/customers.svg">
          <p class="semi-bold smallish top-margin-medium no-bottom-margin">Customer profiles</p><p class="light">Troubleshoot, investigate and deep dive into your customer lifecycle. View all of the data Vero knows about each of your customers.</p>
        </li>
      </ul>
    </div>
    <div class="right primary">
      <img class="feature-image inactive-feature top-margin-small image-shadow responsive-image" id="feature-image-profiles" data-featherlight="/wp-content/themes/vero/assets/images/home/features/modelling/profiles@2x.png" src="/wp-content/themes/vero/assets/images/home/features/modelling/profiles.png" srcset="/wp-content/themes/vero/assets/images/home/features/modelling/profiles@2x.png 2x"/>
      <img class="feature-image active-feature top-margin-small image-shadow responsive-image" id="feature-image-segments" data-featherlight="/wp-content/themes/vero/assets/images/home/features/modelling/segmentation@2x.png" src="/wp-content/themes/vero/assets/images/home/features/modelling/segmentation.png" srcset="/wp-content/themes/vero/assets/images/home/features/modelling/segmentation@2x.png 2x"/></a>
      <ul class="feature-list button-list pill-buttons left-image unstyled-list buttom-margin-small">
        <li class="active top-margin-small">
          <a class="unstyled feature-swapper-option" data-swap-to="feature-image-segments">
            <p class="semi-bold small no-margin">Segmentation</p>
          </a>
        </li>
        <li class="top-margin-small">
          <a class="unstyled feature-swapper-option" data-swap-to="feature-image-profiles">
            <p class="semi-bold small no-margin">Customer Profiles</p>
          </a>
        </li>
      </ul>
      <!-- <p class="small faded top-margin-small inline-block">Description</p> -->
    </div>
  </div>
</section>
<section id="features-automation" class="feature-section double-padding border-bottom">
  <div class="inner halfs large-inner feature-swapper">
    <p class="semi-bold center-text small uppercase font-brand-primary center-text bottom-margin-medium">Automation</p>
    <div class="clearfix">
      <div class="left primary">
        <img class="pull-right no-margin top-margin-small feature-image active-feature image-shadow responsive-image" id="feature-image-automate" data-featherlight="/wp-content/themes/vero/assets/images/home/features/automation/campaign@2x.png" src="/wp-content/themes/vero/assets/images/home/features/automation/campaign.png" srcset="/wp-content/themes/vero/assets/images/home/features/automation/campaign@2x.png 2x"/>
        <img class="pull-right no-margin top-margin-small image-shadow responsive-image feature-image inactive-feature" id="feature-image-manage" data-featherlight="/wp-content/themes/vero/assets/images/home/features/automation/content@2x.png" src="/wp-content/themes/vero/assets/images/home/features/automation/content.png" srcset="/wp-content/themes/vero/assets/images/home/features/automation/content@2x.png 2x"/>
        <ul class="feature-list button-list pill-buttons left-image unstyled-list buttom-margin-small">
          <li class="active top-margin-small">
            <a class="unstyled feature-swapper-option" data-swap-to="feature-image-automate">
              <p class="semi-bold small no-margin">Automation</p>
            </a>
          </li>
          <li class="top-margin-small">
            <a class="unstyled feature-swapper-option" data-swap-to="feature-image-manage">
              <p class="semi-bold small no-margin">Manage Content</p>
            </a>
          </li>
        </ul>
        <!-- <p class="small faded top-margin-small inline-block">Description</p> -->
      </div>
      <div class="right secondary">
        <h1 class="tubs regular no-bottom-margin">Complete template manangement. Advanced scheduling design.</h1>
       <!--  <p class="smallish top-margin-medium no-bottom-margin">Manage templates for every email in your stack, centrally. Upload base templates and empower marketing and product teams to reuse and safely adjust content.</p> -->
        <p class="smallish top-margin-medium no-bottom-margin">Craft any email automation you can dream up using Vero's powerful tools: schedule one-off campaigns, recurring campaigns (hourly, daily or weekly), design drip and automated campaign workflows and trigger transactional emails, all in one place.
        <ul class="feature-list left-image unstyled-list">
          <li class="top-margin-large no-bottom-margin">
            <img src="/wp-content/themes/vero/assets/images/home/features/automation/campaigns.svg">
            <p class="semi-bold smallish top-margin-medium no-bottom-margin">Email scheduling and automation</p><p class="light">Send an ad hoc campaign or automate an entire series of emails with specific segmentation: Vero helps you deploy your email content and logic with total control.</p>
          </li>
          <li>
            <img src="/wp-content/themes/vero/assets/images/home/features/automation/templates.svg">
            <p class="semi-bold smallish top-margin-medium no-margin">Template management</p><p class="light">Store base templates centrally, add "editable" regions and empower your entire team to design campaigns safely.</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="outlined-box top-margin-medium">
      <img src="/wp-content/themes/vero/assets/images/home/features/automation/fusion-logo.svg" class="inline-block right-margin-medium">
      <div class="inline-block"><p class="semi-bold smallish no-bottom-margin no-top-margin"><span class="semi-bold">Fusion.</span> Load data externally.</p><p class="light">Fusion loads data from your APIs at send time, giving you more flexibility in your email workflow, and enabling you to use your full CMS, data and application stack with Vero. <a href="http://www.getvero.com/fusion">Read more about Fusion</a></p></div>
    </div>
  </div>
</section>
<section id="features-deployment" class="feature-section double-padding border-bottom">
  <div class="inner halfs large-inner">
    <p class="semi-bold center-text small uppercase font-brand-error center-text">Deployment</p>
    <div class="left secondary">
      <h1 class="tubs regular no-bottom-margin">Scalability and centralised reporting</h1>
      <p class="smallish top-margin-medium">Deploy your email automation and content reliabily whether it's to one or 100+ million customers. Let us handle deliverability or BYO email infrastructure platform – we'll track and centralise your reporting.</p>
      <ul class="feature-list left-image unstyled-list">
        <li class="top-margin-medium no-bottom-margin">
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/multi-providers.svg">
          <p class="semi-bold smallish no-margin">BYO email infrastructure</p>
          <p class="light">Maintain your email reputation and control your deliverability by leveraging one or more of the most popular email infrastructure platforms.</p>
        </li>
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/webhooks.svg">
          <p class="semi-bold smallish top-margin-medium no-bottom-margin">Data warehouse every interaction</p>
          <p class="light">Output data about every email interaction to your own API for data warehousing using webhooks. We also support <a href="https://segment.com/sources" target="_blank">Segment's Sources</a> to export data with a single click.</p>
        </li>
      </ul>
    </div>
    <div class="right primary">
      <ul class="button-list mail-services unstyled-list">
        <li class="center-text padding-small disabled-button">
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/sendgrid.png" srcset="/wp-content/themes/vero/assets/images/home/features/deployment/sendgrid@2x.png 2x" class="responsive-image">
        </li>
        <li class="center-text padding-small disabled-button">
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/mailgun.png" srcset="/wp-content/themes/vero/assets/images/home/features/deployment/mailgun@2x.png 2x" class="responsive-image">
        </li>
        <li class="center-text padding-small disabled-button">
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/mailjet.png" srcset="/wp-content/themes/vero/assets/images/home/features/deployment/mailjet@2x.png 2x" class="responsive-image">
        </li>
        <li class="center-text padding-small disabled-button">
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/dyn.png" srcset="/wp-content/themes/vero/assets/images/home/features/deployment/dyn@2x.png 2x" class="responsive-image">
        </li>
      </ul>
      <ul class="button-list unstyled-list">
        <li class="padding-small disabled-button">
          <!-- <img src="/wp-content/themes/vero/assets/images/home/features/deployment/64.png" width="36" class="pull-left right-margin-small"> -->
          <p class="small no-margin"><span class="semi-bold">Don’t have your own email provider?</span> No problem, let us send your emails on our managed infrastructure. We partner with Mailgun and can support any custom configuration, including dedicated IPs and custom domains. <a href="mailto:support@getvero.com">Email our Support Team</a>.</p>
        </li>
      </ul>
    </div>
  </div>
</section>
<section id="features-more" class="double-padding border-bottom">
  <div class="inner large-inner">
    <h2 class="semi-bold center-text bottom-margin-medium no-top-margin">Here's a complete list of our most popular features</h2>
    <ul class="feature-list unstyled-list thirds center-text">
      <li class="bottom-margin-medium"><img src="/wp-content/themes/vero/assets/images/home/features/more/newsletter.svg"><p class="semi-bold">Scheduled Newsletters</p><p class="light">Send one-off campaigns to individual segments – instantly, or at a scheduled time in the future.</p></li>
      <li class="bottom-margin-medium"><img src="/wp-content/themes/vero/assets/images/home/features/more/reports.svg"><p class="semi-bold">Detailed Reporting</p><p class="light">Get aggregate and day-by-day breakdowns of every email campaign sent through Vero. Plays nice with data warehouses too.</p></li>
      <li class="bottom-margin-medium"><img src="/wp-content/themes/vero/assets/images/home/features/more/liquid.svg"><p class="semi-bold">Liquid Content</p><p class="light">Personalise every email using the <a href="https://github.com/Shopify/liquid/wiki/Liquid-for-Designers" target="_blank">Liquid templating language</a> and utilise your customer data.</p></li>
      <li class="bottom-margin-medium"><img src="/wp-content/themes/vero/assets/images/home/features/more/templates.svg"><p class="semi-bold">Manage HTML templates</p><p class="light">Upload, organise and edit your fully responsive email designs and reuse them in all of your campaigns.</p></li>
      <li class="bottom-margin-medium"><img src="/wp-content/themes/vero/assets/images/home/features/more/editables.svg"><p class="semi-bold">Visual Editor</p><p class="light">Define areas of your email content that the whole team can edit in Vero's point-and-click content editor.</p></li>
      <li class="bottom-margin-medium"><img src="/wp-content/themes/vero/assets/images/home/features/more/timezones.svg"><p class="semi-bold">Send per Timezone</p><p class="light">Schedule your emails at the right time for every customer, no matter where in the world they are.</p></li>
      <li><img src="/wp-content/themes/vero/assets/images/home/features/more/conversions.svg"><p class="semi-bold">Track Conversions</p><p class="light">Go beyond just clicks and track the true success of each campaign using user actions as converion goals.</p></li>
      <li><img src="/wp-content/themes/vero/assets/images/home/features/more/abtesting.svg"><p class="semi-bold">A/B Testing</p><p class="light">Multi-variate test the subject, from address, content and template for any email campaign, including triggered workflows.</p></li>
      <li><img src="/wp-content/themes/vero/assets/images/home/features/more/csv.svg"><p class="semi-bold">CSV Imports</p><p class="light">Hit the ground running and import your customer attributes and actions using Vero's CSV import tools.</p></li>
    </ul>
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