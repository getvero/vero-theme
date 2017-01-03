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
    <ul class="feature-list unstyled-list sm-halfs fourths full-width">
      <li class="no-top-margin"><a href="#features-collection"><img src="/wp-content/themes/vero/assets/images/home/features/home-capture.svg"><p class="semi-bold small uppercase font-brand-warning center-text">Collection</p></a></li>
      <li class="no-top-margin"><a href="#features-modelling"><img src="/wp-content/themes/vero/assets/images/home/features/home-model.svg"><p class="semi-bold small uppercase font-brand-success center-text">Modelling</p></a></li>
      <li class="no-top-margin"><a href="#features-automation"><img src="/wp-content/themes/vero/assets/images/home/features/home-manage.svg"><p class="semi-bold small uppercase font-brand-primary center-text">Automation</p></a></li>
      <li class="no-top-margin"><a href="#features-deployment"><img src="/wp-content/themes/vero/assets/images/home/features/home-deploy.svg"><p class="semi-bold small uppercase font-brand-error center-text">Deployment</p></a></li>
    </ul>
  </div>
</section>
<section id="features-collection" class="feature-section double-padding border-bottom">
  <div class="inner halfs large-inner feature-swapper left-padding-large right-padding-large">
    <p class="semi-bold center-text small uppercase font-brand-warning center-text no-top-margin bottom-margin-medium">Collection</p>
    <div class="left primary">

      <pre class="vero-code okaidia active-feature" id="feature-collection-js" data-src="/wp-content/themes/vero/snippets/features-collection-js.js"></pre>
      <pre class="vero-code okaidia inactive-feature" id="feature-collection-php" data-src="/wp-content/themes/vero/snippets/features-collection-php.php"></pre>
      <pre class="vero-code okaidia inactive-feature" id="feature-collection-ruby" data-src="/wp-content/themes/vero/snippets/features-collection-ruby.rb"></pre>
      <pre class="vero-code okaidia inactive-feature" id="feature-collection-node" data-src="/wp-content/themes/vero/snippets/features-collection-node.js"></pre>
      <pre class="vero-code okaidia inactive-feature" id="feature-collection-python" data-src="/wp-content/themes/vero/snippets/features-collection-python.py"></pre>
      <pre class="vero-code okaidia inactive-feature" id="feature-collection-apple" data-src="/wp-content/themes/vero/snippets/features-collection-apple.m"></pre>

      <ul class="button-list unstyled-list thirds sm-sixths center-text">
        <li class="active"><a href="#js" class="feature-swapper-option" data-swap-to="feature-collection-js"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-js.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-js@2x.png 2x" width="40"><p class="no-margin hide-on-medium">Javascript</p></a></li>
        <li><a href="#js" class="feature-swapper-option" data-swap-to="feature-collection-php"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-php.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-php@2x.png 2x" width="40"><p class="no-margin hide-on-medium">PHP</p></a></li>
        <li><a href="#js" class="feature-swapper-option" data-swap-to="feature-collection-ruby"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-ruby.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-ruby@2x.png 2x" width="40"><p class="no-margin hide-on-medium">Ruby</p></a></li>
        <li><a href="#js" class="feature-swapper-option" data-swap-to="feature-collection-node"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-nodejs.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-nodejs@2x.png 2x" width="40"><p class="no-margin hide-on-medium">NodeJS</p></a></li>
        <li><a href="#js" class="feature-swapper-option" data-swap-to="feature-collection-python"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-python.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-python@2x.png 2x" width="40"><p class="no-margin hide-on-medium">Python</p></a></li>
        <li><a href="#js" class="feature-swapper-option" data-swap-to="feature-collection-apple"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-apple.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-apple@2x.png 2x" width="40"><p class="no-margin hide-on-medium">Objective-C</p></a></li>
      </ul>

      <p class="small">View the <a class="" href="http://developers.getvero.com">developer documentation</a> for more details</p>
    </div>
    <div class="right secondary left-padding-large">
      <h1 class="tubs regular no-bottom-margin">Capture and store your customers data with our robust API</h1>
      <p class="smallish top-margin-medium no-bottom-margin">Identify your customers and track the actions they perform with a <span class="semi-bold">real time event stream</span> of powerful and actionable data. Getting this data into Vero is the first step towards personalised off-site product experiences that perform.</p>
      <ul class="feature-list left-image unstyled-list">
        <li class="top-margin-large no-bottom-margin">
          <img src="/wp-content/themes/vero/assets/images/home/features/segment.png">
          <p class="semi-bold smallish no-margin">Segment Integration</p><p class="light">If you’re already using segment, hooking event data into Vero is as simple as flipping a switch.</p>
        </li>
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/features/logs.svg">
          <p class="semi-bold smallish top-margin-medium no-bottom-margin">View and debug each event</p><p class="light">Get a full view all of the events and event data coming into Vero.</p>
        </li>
      </ul>
    </div>
  </div>
</section>
<section id="features-modelling" class="feature-section double-padding border-bottom">
  <div class="inner halfs large-inner feature-swapper">
    <p class="semi-bold full center-text small uppercase font-brand-success center-text bottom-margin-medium">Modelling</p>
    <div class="left secondary right-padding-large">
      <h1 class="tubs regular no-bottom-margin">View and model your customer data with accuracy</h1>
      <p class="smallish top-margin-medium no-bottom-margin">Mauris non tempor quam, et lacinia sapien. Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est..</p>
      <ul class="feature-list button-list unstyled-list">
        <li class="top-margin-medium no-bottom-margin active"><a href="#crm" class="unstyled feature-swapper-option" data-swap-to="feature-image-profiles"><p class="semi-bold smallish no-margin">A CRM for your product experiences</p><p class="light small no-bottom-margin top-margin-tiny">Mauris non tempor quam, et lacinia sapien. Mauris accumsan eros eget libero.</p></a></li>
        <li><a href="#crm" class="unstyled feature-swapper-option" data-swap-to="feature-image-segments"><p class="semi-bold smallish no-margin">View and debug each event</p><p class="light top-margin-tiny no-bottom-margin">Get a full view all of the events and event data coming into Vero.</p></a></li>
      </ul>
    </div>
    <div class="right primary">
      <img class="feature-image active-feature feature-swapper-option" id="feature-image-profiles" src="/wp-content/themes/vero/assets/images/home/features/feature-modelling.png" srcset="/wp-content/themes/vero/assets/images/home/features/feature-modelling@2x.png 2x"/>
      <img class="feature-image inactive-feature feature-swapper-option" id="feature-image-segments" src="/wp-content/themes/vero/assets/images/home/features/feature-automation.png" srcset="/wp-content/themes/vero/assets/images/home/features/feature-automation@2x.png 2x"/>
    </div>
  </div>
</section>
<section id="features-automation" class="feature-section double-padding border-bottom bottom-margin-medium">
  <div class="inner halfs large-inner feature-swapper">
    <p class="semi-bold center-text small uppercase font-brand-primary center-text bottom-margin-medium">Automation</p>
    <div class="left primary">
      <img class="pull-right no-margin feature-image active-feature feature-swapper-option " id="feature-image-automate" src="/wp-content/themes/vero/assets/images/home/features/feature-automation.png" srcset="/wp-content/themes/vero/assets/images/home/features/feature-automation@2x.png 2x"/>
      <img class="pull-right no-margin feature-image inactive-feature feature-swapper-option" id="feature-image-manage" src="/wp-content/themes/vero/assets/images/home/features/feature-modelling.png" srcset="/wp-content/themes/vero/assets/images/home/features/feature-modelling@2x.png 2x"/>
    </div>
    <div class="right secondary left-padding-large">
      <h1 class="tubs regular no-bottom-margin">Design and manage complex email workflows </h1>
      <p class="smallish top-margin-medium no-bottom-margin">Engage your customers with automated messages tailored to them based on their activity. Vero gives you all the tools you need to make sure each customer receives the right message at the right time.</p>
      <ul class="feature-list button-list unstyled-list">
        <li class="top-margin-medium no-bottom-margin active"><a href="#crm" class="unstyled feature-swapper-option" data-swap-to="feature-image-automate"><p class="semi-bold smallish no-margin">Automate complex campaigns</p><p class="light small no-bottom-margin top-margin-tiny">Create personalised event based campaigns that trigger when a user meets complex criteria.</p></a></li>
        <li><a href="#crm" class="unstyled feature-swapper-option" data-swap-to="feature-image-manage"><p class="semi-bold smallish no-margin">Manage your email content</p><p class="light top-margin-tiny no-bottom-margin">Mauris non tempor quam, et lacinia sapien. Mauris accumsan eros eget libero.</p></a></li>
      </ul>
    </div>
  </div>
</section>
<section id="features-deployment" class="feature-section double-padding border-bottom bottom-margin-medium">
  <div class="inner halfs large-inner">
    <p class="semi-bold center-text small uppercase font-brand-error center-text">Deployment</p>
    <div class="left secondary right-padding-large">
      <h1 class="tubs regular no-bottom-margin">Stay in control of your deliverability</h1>
      <p class="smallish top-margin-medium">Deploy your content and email schedule to 100+ million customers using your choice of email delivery platforms.</p>
      <ul class="feature-list left-image unstyled-list">
        <li class="top-margin-medium no-bottom-margin">
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/multi-providers.svg">
          <p class="semi-bold smallish no-margin">Multiple providers</p>
          <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor.</p>
        </li>
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/features/deployment/webhooks.svg">
          <p class="semi-bold smallish top-margin-medium no-bottom-margin">Webhooks</p>
          <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor.</p>
        </li>
      </ul>
    </div>
    <div class="right primary">
      <ul class="button-list unstyled-list halfs">
        <li>
          <a href="#crm" class="unstyled center-text">
            <img src="/wp-content/themes/vero/assets/images/home/features/deployment/sendgrid.png" srcset="/wp-content/themes/vero/assets/images/home/features/deployment/sendgrid@2x.png 2x">
          </a>
        </li>
        <li>
          <a href="#crm" class="unstyled center-text">
            <img src="/wp-content/themes/vero/assets/images/home/features/deployment/mailgun.png" srcset="/wp-content/themes/vero/assets/images/home/features/deployment/mailgun@2x.png 2x">
          </a>
        </li>
        <li>
          <a href="#crm" class="unstyled center-text">
            <img src="/wp-content/themes/vero/assets/images/home/features/deployment/mailjet.png" srcset="/wp-content/themes/vero/assets/images/home/features/deployment/mailjet@2x.png 2x">
          </a>
        </li>
        <li>
          <a href="#crm" class="unstyled center-text">
            <img src="/wp-content/themes/vero/assets/images/home/features/deployment/dyn.png" srcset="/wp-content/themes/vero/assets/images/home/features/deployment/dyn@2x.png 2x">
          </a>
        </li>
      </ul>
      <ul class="button-list unstyled-list">
        <li>
          <img src="" class="pull-left">
          <p class="small"><span class="semi-bold">Don’t have your own email provider?</span> No problem, Vero sends your emails using our managed infrastructure by default.</p>
        </li>
      </ul>
    </div>
  </div>
</section>
<section id="features-more" class="double-padding border-bottom">
  <div class="inner large-inner">
    <ul class="feature-list unstyled-list thirds center-text">
      <li class="bottom-margin-medium"><img src="/wp-content/themes/vero/assets/images/home/features/more/newsletter.svg"><p class="semi-bold">Newsletter Blasts</p><p class="light smallish">Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodal.</p></li>
      <li class="bottom-margin-medium"><img src="/wp-content/themes/vero/assets/images/home/features/more/reports.svg"><p class="semi-bold">Detailed Reporting</p><p class="light smallish">Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodal.</p></li>
      <li class="bottom-margin-medium"><img src="/wp-content/themes/vero/assets/images/home/features/more/liquid.svg"><p class="semi-bold">Liquid Content</p><p class="light smallish">Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodal.</p></li>
      <li class="bottom-margin-medium"><img src="/wp-content/themes/vero/assets/images/home/features/more/templates.svg"><p class="semi-bold">Manage HTML templates</p><p class="light smallish">Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodal.</p></li>
      <li class="bottom-margin-medium"><img src="/wp-content/themes/vero/assets/images/home/features/more/editables.svg"><p class="semi-bold">Vero Editables</p><p class="light smallish">Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodal.</p></li>
      <li class="bottom-margin-medium"><img src="/wp-content/themes/vero/assets/images/home/features/more/timezones.svg"><p class="semi-bold">Easy send in timezones</p><p class="light smallish">Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodal.</p></li>
      <li><img src="/wp-content/themes/vero/assets/images/home/features/more/conversions.svg"><p class="semi-bold">Track conversions</p><p class="light smallish">Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodal.</p></li>
      <li><img src="/wp-content/themes/vero/assets/images/home/features/more/abtesting.svg"><p class="semi-bold">A/B Testing</p><p class="light smallish">Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodal.</p></li>
      <li><img src="/wp-content/themes/vero/assets/images/home/features/more/csv.svg"><p class="semi-bold">CSV data import</p><p class="light smallish">Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodal.</p></li>
    </ul>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title">Put your data first and craft better product experiences</h1>
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