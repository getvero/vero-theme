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
  <div class="inner center-text full-width">
    <ul class="feature-list unstyled-list fourths full-width">
      <li><a href="#features-collection"><img src="/wp-content/themes/vero/assets/images/home/features/home-capture.svg"><p class="semi-bold small uppercase font-brand-warning center-text">Collection</p></a></li>
      <li><a href="#features-modelling"><img src="/wp-content/themes/vero/assets/images/home/features/home-model.svg"><p class="semi-bold small uppercase font-brand-success center-text">Modelling</p></a></li>
      <li><a href="#features-automation"><img src="/wp-content/themes/vero/assets/images/home/features/home-manage.svg"><p class="semi-bold small uppercase font-brand-primary center-text">Automation</p></a></li>
      <li><a href="#features-deployment"><img src="/wp-content/themes/vero/assets/images/home/features/home-deploy.svg"><p class="semi-bold small uppercase font-brand-error center-text">Deployment</p></a></li>
    </ul>
  </div>
</section>
<section id="features-collection" class="feature-section double-padding border-bottom">
  <div class="inner halfs large-inner left-padding-large right-padding-large">
    <p class="semi-bold center-text small uppercase font-brand-warning center-text no-top-margin bottom-margin-medium">Collection</p>
    <div class="left">
      <pre class="okaidia" data-src="/wp-content/themes/vero/snippets/features-collection-js.js"></pre>
      <ul class="button-list unstyled-list thirds sm-sixths center-text">
        <li class="active"><a href="#js"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-js.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-js@2x.png 2x" width="40"><p class="no-margin hide-on-medium">Javascript</p></a></li>
        <li><a href="#js"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-php.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-php@2x.png 2x" width="40"><p class="no-margin hide-on-medium">PHP</p></a></li>
        <li><a href="#js"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-ruby.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-ruby@2x.png 2x" width="40"><p class="no-margin hide-on-medium">Ruby</p></a></li>
        <li><a href="#js"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-nodejs.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-js@2x.png 2x" width="40"><p class="no-margin hide-on-medium">NodeJS</p></a></li>
        <li><a href="#js"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-python.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-python@2x.png 2x" width="40"><p class="no-margin hide-on-medium">Python</p></a></li>
        <li><a href="#js"><img src="/wp-content/themes/vero/assets/images/home/features/collection/data-apple.png" srcset="/wp-content/themes/vero/assets/images/home/features/collection/data-apple@2x.png 2x" width="40"><p class="no-margin hide-on-medium">Objective-C</p></a></li>
      </ul>
    </div>
    <div class="right left-padding-large">
      <h1 class="tubs regular no-bottom-margin">Capture and store your customers data with our robust API</h1>
      <p class="smallish top-margin-medium no-bottom-margin">Identify your customers and track the actions they perform with a <span class="semi-bold">real time event stream</span> of powerful and actionable data. Getting this data into Vero is the first step towards personalised off side product experiences that perform.</p>
      <ul class="feature-list unstyled-list">
        <li class="top-margin-medium no-bottom-margin"><p class="semi-bold smallish no-margin">Segment Integration</p><p class="light">If you’re already using segment, hooking event data into Vero is as simple as flipping a switch.</p></li>
        <li><p class="semi-bold smallish top-margin-medium no-bottom-margin">View and debug each event</p><p class="light">Get a full view all of the events and event data coming into Vero.</p></li>
      </ul>
    </div>
  </div>
</section>
<section id="features-modelling" class="double-padding border-bottom">
  <div class="inner halfs large-inner">
    <p class="semi-bold center-text small uppercase font-brand-success center-text bottom-margin-medium">Modelling</p>
    <div class="left">
      <h1 class="tubs regular no-bottom-margin">View and model your customer data with accuracy</h1>
      <p class="smallish top-margin-medium no-bottom-margin">Mauris non tempor quam, et lacinia sapien. Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est..</p>
      <ul class="feature-list button-list unstyled-list">
        <li class="top-margin-medium no-bottom-margin active"><a href="#crm" class="unstyled"><p class="semi-bold smallish no-margin">A CRM for your product experiences</p><p class="light small no-bottom-margin top-margin-tiny">Mauris non tempor quam, et lacinia sapien. Mauris accumsan eros eget libero.</p></a></li>
        <li><a href="#crm" class="unstyled"><p class="semi-bold smallish no-margin">View and debug each event</p><p class="light top-margin-tiny no-bottom-margin">Get a full view all of the events and event data coming into Vero.</p></a></li>
      </ul>
    </div>
    <div class="right">
      <img src="/wp-content/themes/vero/assets/images/home/features/feature-modelling-1.png" srcset="/wp-content/themes/vero/assets/images/home/features/feature-modelling-1@2x.png 2x"/>
    </div>
  </div>
</section>
<section id="features-automation" class="double-padding border-bottom bottom-margin-medium">
  <div class="inner halfs large-inner">
    <p class="semi-bold center-text small uppercase font-brand-primary center-text">Automation</p>
    <div class="left">
      <img src=""/>
    </div>
    <div class="right">
      <h1 class="chunk no-bottom-margin">Main Title</h1>
      <p class="medium">Main description</p>
      <ul class="feature-list unstyled-list">
        <li><p class="semi-bold">Feature title</p><p class="light smallish">Feature description</p></li>
        <li><p class="semi-bold">Feature title</p><p class="light smallish">Feature description</p></li>
      </ul>
    </div>
  </div>
</section>
<section id="features-deployment" class="double-padding border-bottom bottom-margin-medium">
  <div class="inner halfs large-inner">
    <p class="semi-bold center-text small uppercase font-brand-error center-text">Deployment</p>
    <div class="left">
      <h1 class="chunk no-bottom-margin">Main title</h1>
      <p class="medium">Main description</p>
      <ul class="feature-list unstyled-list">
        <li><p class="semi-bold medium">Feature title</p><p class="light smallish">Feature description</p></li>
        <li><p class="semi-bold medium">Feature title</p><p class="light smallish">Feature description</p></li>
      </ul>
    </div>
    <div class="right">
      <ul class="button-list unstyled-list halfs">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>
</section>
<section id="features-more" class="double-padding border-bottom">
  <div class="inner halfs large-inner">
    <ul class="feature-list unstyled-list thirds center-text">
      <li><img src=""><p class="semi-bold">Feature title</p><p class="light smallish">Feature description</p></li>
      <li><img src=""><p class="semi-bold">Feature title</p><p class="light smallish">Feature description</p></li>
      <li><img src=""><p class="semi-bold">Feature title</p><p class="light smallish">Feature description</p></li>
      <li><img src=""><p class="semi-bold">Feature title</p><p class="light smallish">Feature description</p></li>
      <li><img src=""><p class="semi-bold">Feature title</p><p class="light smallish">Feature description</p></li>
      <li><img src=""><p class="semi-bold">Feature title</p><p class="light smallish">Feature description</p></li>
      <li><img src=""><p class="semi-bold">Feature title</p><p class="light smallish">Feature description</p></li>
      <li><img src=""><p class="semi-bold">Feature title</p><p class="light smallish">Feature description</p></li>
      <li><img src=""><p class="semi-bold">Feature title</p><p class="light smallish">Feature description</p></li>
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