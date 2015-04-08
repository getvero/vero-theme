<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'pricing enterprise';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="top">
  <div class="t1"></div><div class="t2"></div><div class="t3"></div><div class="t4"></div><div class="t5"></div><div class="t6"></div>
  <div class="inner">
  <div class="center-text">
    <p class="nav">Pricing &rarr; Growth</p>
    <h1>Smart email, at scale</h1>
    <h2>Add the layer of segmentation and automation to your email marketing you've always wanted but never had.</h2>
    <a href="/email-marketing-demo" class="btn btn-large btn-warning">Get a personal demo</a>
  </div>
  </div>
</section>
<section id="what-you-get">
  <div class="wrap">
    <div class='value'>
      <h3>Sending 150M+ emails per month for industry leaders</h3>
      <div class="logos">
        <img src="/wp-content/themes/vero/assets/images/pricing/logos.png">
      </div>
      <h3>24/7 Support and Customer Success</h3>
      <p>By managing all of your manual and triggered emails in one place you can easily run A/B tests over your single, series or transactional emails with Vero's UI. Don't trap your emails in your codebase.</p>
      <h3><em>External Data Feed</em> for further personalisation</h3>
      <p>Full team access with read and write permissions means you can move faster as a team. Have engineers, support personal and marketers use one central data store and give your marketing efficacy.</p>
      <h3>Full team management and access</h3>
      <p>Full team access with read and write permissions means you can move faster as a team. Have engineers, support personal and marketers use one central data store and give your marketing efficacy.</p>
    
    </div>
    <div class="base-price">
      <span class="top">Transparent, scalable pricing</span>
      <p class="number">$1,049+<span>/month</span></p>
      <hr>
      <p class="h5">Scales upwards from</p>
      <p class="includes">200,000 contacts<br/>750,000 emails/month</p>
      <p class="over">We can send into the hundreds of millions of emails per month.</p>
      <hr>
      <p class="h5">Features</p>
      <ul>
        <li>24/7 Email and Phone Support</li>
        <li>Customer Success Manager</li>
        <li>External Data Feed</li>
        <li>A/B test all emails</li>
        <li>Triggered emails</li>
        <li>Newsletter/manual emails</li>
        <li>Unlimited 'from' addresses</li>
        <li>Custom domain setup</li>
        <li>Multiple team logins</li>
        <li>Multiple environments</li>
      </ul>
      
      <br/>
      <a href="https://app.getvero.com/signup" class="btn btn-large btn-warning">Start a free trial</a>
    </div>
  </div>
</section>
<section id="pricing-options">
  <div id="pricing" class="wrap">
    <ul class="list-inline list-unstyled">
      <li class="well">
        <img src="/wp-content/themes/vero/assets/images/pricing/entrepreneur.png">
        <h3 class="light">Entrepreneur</h3>
        <p>
          <a href="/pricing/entrepreneur" class="btn btn-primary">Learn more</a>
          Understand your customer from the ground up. Capture customer data and automate emails from the beginning to make smart decisions.
          </p>
      </li>
      <li class="well">
        <img src="/wp-content/themes/vero/assets/images/pricing/growth.png">
        <h3 class="light">Growth</h3>
        <p>
          <a href="/pricing/growth" class="btn btn-primary">Learn more</a>
          Graduate from list-based email and ensure your customers get the right message. Run tests and do analysis on your to increase your growth. 
          </p>
      </li>
      <li class="well active">
        <img src="/wp-content/themes/vero/assets/images/pricing/enterprise.png">
        <h3 class="light">Enterprise</h3>
        <p>
          <a href="/pricing/enterprise" class="btn btn-primary">Learn more</a>
          Store all of your actionable customer data in one place and co-ordinate Marketing and IT to implement and automate the personalised emails you want to.
        </p>
      </li>
    </ul>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <p class="h1">Get a personal demo of Vero</p>
    <a href="/pricing" class="btn btn-white btn-outline">Get a demo</a>
    <p class="small">One of our Customer Success Managers will be in touch</p>
  </div>
</section>
<?php 
  custom_footer_static_wrap();
  wp_footer();
?>