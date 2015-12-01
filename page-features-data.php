<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features feature-data';
    return $classes;  
  }
  include 'pages-shared/static-header.php';
  include 'pages-shared/feature-menu.php';
?>
<section id="data-hero" class="hero">
  <div class="inner center-text">
    <h1 class="hero-title">An API-driven email platform built with engineers in mind</h1>
    <p class="large">“Do we have to install another marketing tool?” is a common refrain in most product teams. Vero is built for scale on top of an open API that empowers engineers to work more efficiently, not to fight with marketing and re-invent the wheel with every email send.</p>
   <ul class="bxslider">
     <li id="data-code-block">
        <pre class="language-javascript line-numbers"><code>//Javascript for adding a user with user properties
_veroq.push(['user', {    
  id: 'CUSTOMER_ID',
  email: 'CUSTOMER_EMAIL',
  first_name: 'CUSTOMER_NAME',    
  last_name: 'CUSTOMER_LAST_NAME'  
}]);

//Javascript for tracking an event with event properties
_veroq.push(['track', 'viewed product', {      
  product_name: 'Red T-shirt',    
  product_url: 'http://www.yourdomain.com/products/red-t-shirt'  
}])</code></pre>
      </li>
    </ul>
  </div>
</section>
<section id="data-libraries">
  <div class="inner center-text">
    <h4>Install on any code base</h4>
    <p>We have libraries for almost every platform, There are even third party ones you can use. <a href="#">Check out our Developer Portal</a>.</p>
    <ul id="library-list" class="unstyled-list inline-list">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-js.png">
        <p>Javascript</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-ruby.png">
        <p>Ruby</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-php.png">
        <p>PHP</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-python.png">
        <p>Python</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-nodejs.png">
        <p>NodeJS</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-apple.png">
        <p>iOS</p>
      </li>
    </ul>
    <p><a href="#">All Libraries</a></p>
  </div>
</section>
<section id="data-integrations">
  <div class="inner center-text">
    <h2>Works with the tools you already use</h2>
    <ul class="unstyled-list inline-list integrations-list feature-list thirds">
      <li class="zapier">
        <img src="/wp-content/themes/vero/assets/images/home/features/data/integrations/zapier.png" height="68" />
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li class="segment">
        <img src="/wp-content/themes/vero/assets/images/home/features/data/integrations/segment.png" height="68" />
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li class="ga">
        <img src="/wp-content/themes/vero/assets/images/home/features/data/integrations/ga.png" height="68" />
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li class="mailgun">
        <img src="/wp-content/themes/vero/assets/images/home/features/data/integrations/mailgun.png" height="68" />
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li class="sendgrid">
        <img src="/wp-content/themes/vero/assets/images/home/features/data/integrations/sendgrid.png" height="68" />
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li class="mandrill">
        <img src="/wp-content/themes/vero/assets/images/home/features/data/integrations/mandrill.png" height="68" />
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
    </ul>
  </div>
</section>
<section id="data-logs" class="dark-box">
  <div class="inner center-text">
    <h2>See every single tracked event or activity, live</h1>
    <p>With logs, you get a running commentary of every user event, email sent, delivery or segment change, so you can see every customer interaction from their perpective.</p>
    <img src="/wp-content/themes/vero/assets/images/home/features/data/data-logs.png" width="1028">
  </div>
</section>
<section id="data-features" class="top-border-light">
  <div class="inner center-text">
    <h5 class="section-label center-text">You're in control</h5>
    <ul class="unstyled-list inline-list feature-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/data-events.png" width="100" />
        <h4 class="feature-title">Track Any Event Big or Small</h4>
        <p class="feature-desc">Track data accross any platform with Vero and empower your entire team with hassle free user insights and campaign creation.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/data-webhooks.png" width="100" />
        <h4 class="feature-title">Forward Your Data with Webhooks</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/data-csv.png" width="100" />
        <h4 class="feature-title">Import historical data via CSV</h4>
        <p class="feature-desc">Hit the ground running by importing all your historical event and customer data using the CSV importer.</p>
      </li>
    </ul>
  </div>
</section>
<section id="people-case-study" class="case-study">
  <div class="inner">
    <div class="case-study-box">
      <h5 class="section-label">Customer Profile</h5>
      <img src="/wp-content/themes/vero/assets/images/home/features/people/bv-logo.png" class="case-study-logo">
      <p class="case-study-desc">"Vero thinks about email in an exciting way and enables us to create and manage our email content in one place like we haven't been able to before. It's the centre of our email nervous system."</p>
      <h2 class="case-study-name">Daniel Black</h2>
      <h3 class="case-study-job-title">Marketing Manager</h3>
    </div>
    <div class="case-study-image">
      <img src="/wp-content/themes/vero/assets/images/home/features/people/beenverified-photo.png">
    </div>
  </div>
</section>

<?php 
  $bottom_class= 'bottom-menu';
  include 'pages-shared/feature-menu.php'; 
?>

<section id="call-to-action" class="center-text">
  <div class="inner center-text">
    <h1 class="cta-title">Send your first email today</h1>
    <p class="sub-heading">14 days free, send up to 2500 emails, no obligation</p>
    <form class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Start your free trial">
    </form>
    <p class="small">No credit card required</p>
  </div>
</section>
<?php 
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>