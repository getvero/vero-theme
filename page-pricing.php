<?php 

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'pricing';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<div class="inner">
  <div id="top">
    <h1 class="center-text">Communicate better and grow your business.</h1>
    <h2 class="center-text">Join 300+ other businesses that send smarter emails and increase engagement.</h2>
  </div>
  <section id="pricing">
    <ul class="list-inline list-unstyled">
      <li class="well">
        <h5 class="light">Light</h5>
        <p class="price">$99<span>/month</span></p>
        <ul class="limits list-unstyled">
          <li>25,000 subscribers</li>
          <li>75,000 emails</li>
        </ul>
        <ul class="list-unstyled">
          <li>Email support</li>
          <li>&nbsp;</li>
          <li>&nbsp;</li>
          <li>&nbsp;</li>
        </ul>
        <p>
          <a href="https://app.getvero.com/signup" class="btn btn-primary">Start for free</a>
        </p>
      </li>
      <li class="well">
        <div class="recommended">Recommended</div>
        <h5 class="growth">Growth</h5>
        <p class="price">$249<span>/month</span></p>
        <ul class="limits list-unstyled">
          <li>100,000 subscribers</li>
          <li>250,000 emails</li>
        </ul>
        <ul class="list-unstyled">
          <li>A/B testing</li>
          <li>Email support</li>
          <li>Unlimited environments</li>
          <li>&nbsp;</li>
        </ul>
        <p>
          <a href="https://app.getvero.com/signup" class="btn btn-primary">Start for free</a>
        </p>
      </li>
      <li class="well">
        <h5 class="pro">PRO</h5>
        <p class="price">$549<span>/month</span></p>
        <ul class="limits list-unstyled">
          <li>200,000 subscribers</li>
          <li>500,000 emails</li>
        </ul>
        <ul class="list-unstyled">
          <li>A/B testing</li>
          <li>Email support</li>
          <li>Unlimited environments</li>
          <li>Phone support</li>
        </ul>
        <p>
          <a href="https://app.getvero.com/signup" class="btn btn-primary">Start for free</a>
        </p>
      </li>
      <li class="well enterprise">
        <h5>Enterprise</h5>
        <p class="price">$1,049+<span>/month</span></p>
        <ul class="limits list-unstyled">
          <li>Unlimited subscribers</li>
          <li>Unlimited emails</li>
        </ul>
        <ul class="list-unstyled">
          <li>A/B testing</li>
          <li>Unlimited environments</li>
          <li>Success Manager</li>
          <li><em>External Attributes</em> access</li>
        </ul>
        <p>
          <a href="/email-marketing-demo" class="btn btn-primary">Get a demo</a>
        </p>
      </li>
  </section>

  <section id="annual">
    <p><strong>Go annual</strong> and get two months free. Our annual plans include a two month (or 15%) discount.</p>
  </section>
  
  <section id="trusted-by">
    <div class="inner center-text">
      <h4>Trusted by market-leading companies like these</h4>
      <img src="/wp-content/themes/vero/assets/images/customers/all-grey-more.png">
    </div>
  </section>

  <section id="faq">
    <div class="left">
      <h3>What are projects?</h3>
      <p>
        Projects are essentially Vero sub-accounts. Each project has a separate database, API keys and campaigns. In other words, it’s like having two Vero accounts in one.
      </p>
      <p>
        You can have up to three projects on our base plan, and many more on our higher plans. Every account gets a free ’Test’ project: designed to make it safe for you to test your campaign ideas without emailing any real customers.
      </p>
      <p>
        If you’re an agency, you may also use projects to manage multiple clients.
      </p>

      <h3>What happens if I go over my subscription limit?</h3>
      <p>
        Vero will send you an email when you cross the subscriber or email thresholds over a 30-day period. You will automatically be upgraded to the appropriate plan.
      </p>
      <p>
        You can downgrade at any time and, if your usage fluctuates, can minimize your spend each and every month.
      </p>

      <h3>Does the data I send Vero belong to me?</h3>
      <p>
        Absolutely. Vero is a platform designed to help you send better emails to your users. The data you send us is stored  as required to deliver the Vero service you require. At any time you can export or request to remove your data – it is entirely yours.
      </p>
      <p>
        Read our <a href="/terms-of-service" target="blank">Terms of Service</a> for full details.
      </p>
    </div>
    <div class="right">
      <h3>What happens if I pay annually?</h3>
      <p>
        By choosing to pay annually,  you get two months of Vero free each year.
      </p>
      <p>
        Paying annually also means your email limits are spread out across the year. For example, if you are on our $149/month plan and can send up to 175,000 emails per month, on our annual plan you can send up to 2,100,000 emails per year. This means that seasonal spikes in email volume will not require you to go up a plan, saving you even more.
      </p>

      <h3>How do we handle support?</h3>
      <p>
        We use email as our primary support channel. Our aim is to respond to all tickets within a few hours and work with you closely on any specific or technical issues.
      </p> 
      <p>
        We want your experience with our support to be the best experience you’ve ever had, not just the best you’ve had with an online service, or the best you’ve had this week. If you think we’ve done a great job, or if we could do better next time, please email us an let us know.
      </p>
    </div>
  </section>
</div>
<?php 
  custom_footer_static_wrap();
?>