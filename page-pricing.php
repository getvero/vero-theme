<?php 

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'pricing';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<section id="pricing-hero" class="hero">
  <div class="inner center-text">
    <h1 class="hero-title">Simple pricing, no matter how many emails you send</h1>
    <p class="medium">14 day trial, no strings attached, just great emails!</p>
    <ul class="plan-tabs unstyled-list inline-list">
      <li class="active">Monthly</li>
      <li>Annually</li>
    </ul>
    <ul class="inline-list unstyled-list center-text plans-list">
      <li class="plan starter">
        <h5 class="section-label center-text">Starter</h5>
        <p class="price">$99</p>
        <p class="price-label small">per month</p>
        <ul class="limits unstyled-list">
          <li>25,000 <span>customers</span></li>
          <li>75,000 <span>emails/month</span></li>
        </ul>
      </li>
      <li class="plan growth">
        <h5 class="section-label center-text">Growth</h5>
        <p class="price">$299</p>
        <p class="price-label small">per month</p>
        <ul class="limits unstyled-list">
          <li class="most-popular">Most Popular</li>
          <li>100,000 <span>customers</span></li>
          <li>250,000 <span>emails/month</span></li>
        </ul>
      </li>
      <li class="plan pro">
        <h5 class="section-label center-text">Pro</h5>
        <p class="price">$599</p>
        <p class="price-label small">per month</p>
        <ul class="limits unstyled-list">
          <li>200,000 <span>customers</span></li>
          <li>500,000 <span>emails/month</span></li>
        </ul>
      </li>
      <li class="plan starter">
        <h5 class="section-label center-text">Enterprise</h5>
        <p class="price">$1,049+</p>
        <p class="price-label small">per month</p>
        <ul class="limits unstyled-list">
          <li>Unlimited <span>customers</span></li>
          <li>Unlimited <span>emails/month</span></li>
          <li class="demo-link"><a href="#">Request a Demo</a></li>
        </ul>
      </li>
    </ul>
    <div class="pricing-cta center-text">
      <div class="btn btn-success btn-large">Start your 14 day free trail</div>
      <p class="small">No credit card required,  send up to 2500 emails</p>
    </div>
  </div>
</section>
<section id="pricing-included">
  <div class="inner center-text">
    <h5 class="section-label">Included with every plan</h5>
    <ul class="unstyled-list inline-list">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-features@2x.png" width="46">
        <p>All the Vero <a href="#">Features</a></p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-support@2x.png" width="46">
        <p>World Class Support</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-unlimited@2x.png" width="46">
        <p>Unlimited Projects</p>
      </li>
    </ul>
  </div>
</section>
<section id="pricing-validation">
  <div class="inner center-text">
    <img class="quote-image" src="#">
    <blockquote class="quote">This fit perfectly with my business and made us more money too!</blockquote>
    <p class="large">Awesome Customer</p>
    <p>Name of Company</p>
    <ul class="unstyled-list inline-list pricing-logos center-text">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-canva@2x.png" width="118">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-freelancer@2x.png" width="118">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-sitepoint@2x.png" width="118">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-sphero@2x.png" width="118">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-oneill@2x.png" width="118">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-alexa@2x.png" width="118">
      </li>
    </ul>
  </div>
</section>
<section id="pricing-faq">
  <div class="inner halfs">
    <h2 class="center-text">Frequently Asked Questions</h2>
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
  </div>
</section>
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
  add_page_tracking_code("PricingPage");
?>