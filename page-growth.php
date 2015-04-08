<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'pricing growth';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="top">
  <div class="t1"></div><div class="t2"></div><div class="t3"></div><div class="t4"></div><div class="t5"></div><div class="t6"></div>
  <div class="inner">
  <div class="center-text">
    <p class="nav">Pricing &rarr; Growth</p>
    <h1>Grow your business with Vero</h1>
    <h2>A/B test your triggered and automated campaigns and ensure your team works together to send the right emails at the right time.</h2>
    <a href="https://app.getvero.com/signup" class="btn btn-large btn-warning">Start your free trial</a>
    <p class="small">14 day free trial • No credit card required</p>
  </div>
  </div>
</section>
<section id="what-you-get">
  <div class="wrap">
    <div class='value'>
      <h3>Helping businesses grow quickly, globally</h3>
      <div class="quote">
        <p>"I would say that Vero is the single most useful SaaS app we use at ContactMonkey."</p>
        <p class="who">
          <em>– Alex Smith, CMO</em>
          <img src="/wp-content/themes/vero/assets/images/pricing/alex-smith.jpg">
        </p>
      </div>
      <h3>Manage advanced user segments</h3>
      <p>Rather than using lists, Vero is built around a CRM. This enables you to segment out groups of customers based on their attributes, actions and past email interactions. Store unlimited data and make it theh centre of your marketing efforts.</p>
      <h3>A/B test your email campaigns</h3>
      <p>By managing all of your manual and triggered emails in one place you can easily run A/B tests over your single, series or transactional emails with Vero's UI. Don't trap your emails in your codebase.</p>
      <h3>Get your development and marketing teams working together</h3>
      <p>Full team access with read and write permissions means you can move faster as a team. Have engineers, support personal and marketers use one central data store and give your marketing efficacy.</p>
      <h3>Integrate with other platforms</h3>
      <p>Send data to Vero with Segment.com and Zapier to get even more granular data on each customer. Automatically tag links in your emails with Google's UTM tag format for instant analytics integration.</p>
    
    </div>
    <div class="base-price">
      <span class="top">Pricing that scales with you</span>
      <p class="number">$249<span>/month</span></p>
      <hr>
      <p class="h5">Includes up to</p>
      <p class="includes">50,000 contacts<br/>250,000 emails/month</p>
      <p class="over">Need more? Check our <a href="/pricing/growth">Growth</a> plans.</p>
      <hr>
      <p class="h5">Features</p>
      <ul>
        <li>A/B test all emails</li>
        <li>Triggered emails</li>
        <li>Newsletter/manual emails</li>
        <li>Unlimited 'from' addresses</li>
        <li>Custom domain setup</li>
        <li>Multiple team logins</li>
        <li>Multiple environments</li>
      </ul>
      <hr>
      <p class="h5">Other Growth Plans</p>
      <p class="h5">$549/month</p>
      <p class="includes">100,000 contacts<br/>400,000 emails/month</p>

      <p class="h5">$749/month</p>
      <p class="includes">200,000 contacts<br/>750,000 emails/month</p>
      <p class="over">Need more? Check our <a href="/pricing/enterprise">Enterprise</a> plans.</p>
      
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
      <li class="well active">
        <img src="/wp-content/themes/vero/assets/images/pricing/growth.png">
        <h3 class="light">Growth</h3>
        <p>
          <a href="/pricing/growth" class="btn btn-primary">Learn more</a>
          Graduate from list-based email and ensure your customers get the right message. Run tests and do analysis on your to increase your growth. 
          </p>
      </li>
      <li class="well">
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
    <p class="h1">Start your free trial</p>
    <a href="https://app.getvero.com/signup" class="btn btn-white btn-outline btn-large">Signup for a free account</a>
    <p class="small">Free trial • No credit card required</p>
  </div>
</section>
<?php 
  custom_footer_static_wrap();
  wp_footer();
?>