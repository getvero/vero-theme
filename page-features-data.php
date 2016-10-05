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
   <div id="data-code-block">
      <pre class="language-javascript line-numbers"><code class="nohighlight">//Javascript for adding a user with user properties
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
    </div>
  </div>
</section>
<section id="data-libraries">
  <div class="inner center-text">
    <h4>Install on any code base</h4>
    <p>We have libraries for almost every platform, There are even third party ones you can use. <a href="http://developers.getvero.com">Check out our Developer Portal</a>.</p>
    <ul id="library-list" class="unstyled-list inline-list">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-js.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-js@2x.png 2x">
        <p>Javascript</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-ruby.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-ruby@2x.png 2x">
        <p>Ruby</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-php.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-php@2x.png 2x">
        <p>PHP</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-python.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-python@2x.png 2x">
        <p>Python</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-nodejs.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-nodejs@2x.png 2x">
        <p>NodeJS</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-apple.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/libraries/data-apple@2x.png 2x">
        <p>iOS</p>
      </li>
    </ul>
    <p><a href="http://developers.getvero.com" target="_blank">All Libraries</a></p>
  </div>
</section>
<section id="data-integrations">
  <div class="inner center-text">
    <h2>Works with the tools you already use</h2>
    <ul class="unstyled-list inline-list integrations-list feature-list thirds">
      <li class="segment">
        <img src="/wp-content/themes/vero/assets/images/home/features/data/integrations/segment.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/integrations/segment@2x.png 2x" height="68" />
        <p class="feature-desc">Plug and play tracking of your users and their activity via <a href="http://segment.com" target="_blank">Segment's</a> platform and libraries. Stream data in minutes.</p>
      </li>
      <li class="zapier">
        <img src="/wp-content/themes/vero/assets/images/home/features/data/integrations/zapier.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/integrations/zapier@2x.png 2x" height="68" />
        <p class="feature-desc">Create automated workflows triggered by over the 250+ apps in <a href="http://zapier.com" target="_blank">Zapier's</a> library using Vero's Zapier integration.</p>
      </li>
      <li class="ga">
        <img src="/wp-content/themes/vero/assets/images/home/features/data/integrations/ga.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/integrations/ga@2x.png 2x" height="68" />
        <p class="feature-desc">Vero plays nice with Google Analytics and other common analytics tools by automatically appending UTM tags to the URLs in your emails. Get the full picture.</p>
      </li>
      <li class="mailgun">
        <img src="/wp-content/themes/vero/assets/images/home/features/data/integrations/mailgun.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/integrations/mailgun@2x.png 2x" height="68" />
        <p class="feature-desc">We'll manage your outgoing emails for you but, if you want, you can plugin your own <a href="http://mailgun.com" target="_blank">Mailgun</a> account for more fine-grained control.</p>
      </li>
      <li class="sendgrid">
        <img src="/wp-content/themes/vero/assets/images/home/features/data/integrations/sendgrid.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/integrations/sendgrid@2x.png 2x" height="68" />
        <p class="feature-desc"><a href="http://sendgrid.com" target="_blank">Sendgrid</a> is one of the world's largest sending and deliverability platforms. Take control of your email timing and content with Vero.</p>
      </li>
      <li class="mandrill">
        <img src="/wp-content/themes/vero/assets/images/home/features/data/integrations/mandrill.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/integrations/mandrill@2x.png 2x" height="68" />
        <p class="feature-desc">If you use and love <a href="http://mandrill.com" target="_blank">Mandrill</a> then you can plugin and continue to use their platform with Vero in minutes. Get more control with Vero.</p>
      </li>
    </ul>
  </div>
</section>
<section id="data-logs" class="dark-box">
  <div class="inner center-text">
    <h2>See every single tracked event or activity, live</h1>
    <p>With logs, you get a running commentary of every user event, email sent, delivery or segment change, so you can see every customer interaction from their perpective.</p>
    <img src="/wp-content/themes/vero/assets/images/home/features/data/data-logs.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/data-logs@2x.png 2x" width="1028">
  </div>
</section>
<section id="data-features" class="top-border-light">
  <div class="inner center-text">
    <h5 class="section-label center-text">You're in control</h5>
    <ul class="unstyled-list inline-list feature-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/data-events.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/data-events@2x.png 2x" width="100" />
        <h4 class="feature-title">Track Any Event Big or Small</h4>
        <p class="feature-desc">Track data accross any platform with Vero and empower your entire team with hassle free user insights and campaign creation.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/data-webhooks.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/data-webhooks@2x.png 2x" width="100" />
        <h4 class="feature-title">Forward Your Data with Webhooks</h4>
        <p class="feature-desc">Webhooks give you the power to data warehouse every email that is sent and every interaction that is taken inside Vero.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/data/data-csv.png" srcset="/wp-content/themes/vero/assets/images/home/features/data/data-csv@2x.png 2x" width="100" />
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
      <a href="http://www.bugherd.com" target="_blank"><img src="/wp-content/themes/vero/assets/images/home/case-studies/bugherd-logo.png" srcset="/wp-content/themes/vero/assets/images/home/case-studies/bugherd-logo@2x.png 2x" width="87" class="case-study-logo"></a>
      <p class="case-study-desc">"From day one we’ve sent emails to our customers to increase user engagement and activity. Vero helps us ensure our emails are even more targeted with very little effort."</p>
      <h2 class="case-study-name">Alan Downie</h2>
      <h3 class="case-study-job-title">CEO and Founder</h3>
    </div>
    <div class="case-study-image">
      <img src="/wp-content/themes/vero/assets/images/home/case-studies/bugherd-photo.png" srcset="/wp-content/themes/vero/assets/images/home/case-studies/bugherd-photo@2x.png 2x">
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
    <p class="sub-heading">No contracts to lock you in, only pay when you start sending live emails</p>
    <form action="https://app.getvero.com/pre_signups" method='post' class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Create your account">
    </form>
    <p class="small">No credit card required, only pay when you start sending live emails.</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>
