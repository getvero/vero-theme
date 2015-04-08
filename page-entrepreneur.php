<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'pricing entrepreneur';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="top">
  <div class="t1"></div><div class="t2"></div><div class="t3"></div><div class="t4"></div><div class="t5"></div><div class="t6"></div>
  <div class="inner">
  <div class="center-text">
    <p class="nav">Pricing &rarr; Entrepreneur</p>
    <h1>Start right with Vero</h1>
    <h2>Create customer-centric email marketing campaigns from the ground up for your product or app with Vero's entrepreneur plans.</h2>
    <a href="https://app.getvero.com/signup" class="btn btn-large btn-warning">Start your free trial</a>
    <p class="small">14 day free trial • No credit card required</p>
  </div>
  </div>
</section>
<section id="what-you-get">
  <div class="wrap">
    <div class='value'>
      <h3>Loved by 350+ entrepreneurs just like you</h3>
      <blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/veroapp">@veroapp</a> is like being a kid in a candy shop for email marketing!</p>&mdash; Sana N Choudary (@SanaOnGames) <a href="https://twitter.com/SanaOnGames/status/509888242619924481">September 11, 2014</a></blockquote>
      <h3>Track all of your customer interactions</h3>
      <p>A user-centric CRM, Vero allows you to store a full history of your customers' profiles, their attributes and their interactions. Get a detailed view of every customer that interacts with your website or app.</p>
      <h3>Automate emails internally and externally</h3>
      <p>Trigger emails to your customers when they take certain actions or automate internal reminder and notification emails so your team knows what to do next.</p>
      <h3>Move faster</h3>
      <p>Move faster by removing your triggered emails from your codebase – allowing you to tweak and change them in realtime.</p>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="base-price">
      <span class="top">A simple price for entrepreneurs</span>
      <p class="number">$99<span>/month</span></p>
      <hr>
      <p class="h5">Includes up to</p>
      <p class="includes">12,500 contacts<br/>25,000 emails/month</p>
      <p class="over">Need more? Check our <a href="/pricing/growth">Growth</a> plans.</p>
      <hr>
      <p class="h5">Features</p>
      <ul>
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
      <li class="well active">
        <img src="/wp-content/themes/vero/assets/images/pricing/entrepreneur.png">
        <h3 class="light">Entrepreneur</h3>
        <p>
          <a href="/pricing/entrepreneur" class="btn btn-primary btn-disabled">Learn more</a>
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