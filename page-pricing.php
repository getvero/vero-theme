<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'pricing';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section id="pricing-hero" class="hero light-section">
  <div class="inner center-text">
    <h1 class="hero-title">Our pricing scales with you</h1>
    <p class="medium">Sign up, track data and send unlimited test emails for free. Only pay when you start emailing customers.</p>
    <ul class="plan-tabs unstyled-list inline-list">
      <li id="slider-monthly" class="active">Monthly</li>
      <li id="slider-yearly">Annually</li>
    </ul>
    <ul id="pricing-slider">
      <li>
        <ul id="monthly" class="inline-list unstyled-list center-text plans-list">
          <li class="plan starter">
            <h5 class="section-label center-text">Starter</h5>
            <p class="price">$99</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li>12,500 <span>customers</span></li>
              <li>25,000 <span>emails/month</span></li>
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
              <li>175,000 <span>customers</span></li>
              <li>400,000 <span>emails/month</span></li>
            </ul>
          </li>
          <li class="plan starter">
            <h5 class="section-label center-text">Enterprise</h5>
            <p class="price">$1,049+</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li>175,000+ <span>customers</span></li>
              <li>400,000+ <span>emails/month</span></li>
              <li class="demo-link"><a id="demo-trigger" rel="leanModal" href="#demo">Talk to our Success Team</a></li>
            </ul>
          </li>
        </ul>
      </li>
        <li>
          <ul id="yearly" class="inline-list unstyled-list center-text plans-list">
            <li class="plan starter">
              <h5 class="section-label center-text">Starter</h5>
              <p class="price">$990</p>
              <p class="price-label small">per year (2 months free)</p>
              <ul class="limits unstyled-list">
                <li>12,500 <span>customers</span></li>
                <li>300,000 <span>emails/year</span></li>
              </ul>
            </li>
            <li class="plan growth">
              <h5 class="section-label center-text">Growth</h5>
              <p class="price">$2,990</p>
              <p class="price-label small">per year (2 months free)</p>
              <ul class="limits unstyled-list">
                <li class="most-popular">Most Popular</li>
                <li>100,000 <span>customers</span></li>
                <li>3,000,000 <span>emails/year</span></li>
              </ul>
            </li>
            <li class="plan pro">
              <h5 class="section-label center-text">Pro</h5>
              <p class="price">$5,990</p>
              <p class="price-label small">per year (2 months free)</p>
              <ul class="limits unstyled-list">
                <li>175,000 <span>customers</span></li>
                <li>4,800,000 <span>emails/year</span></li>
              </ul>
            </li>
            <li class="plan starter">
              <h5 class="section-label center-text">Enterprise</h5>
              <p class="price">$10,490+</p>
              <p class="price-label small">per year (2 months free)</p>
              <ul class="limits unstyled-list">
                <li>175,000+ <span>customers</span></li>
                <li>4,800,000+ <span>emails/year</span></li>
                <li class="demo-link"><a rel="leanModal" href="#demo">Talk to our Success Team</a></li>
              </ul>
          </li>
        </ul>
      </li>
    </ul>
    <div class="pricing-cta center-text">
      <a href="https://app.getvero.com/signup" class="btn btn-success btn-large">Create your free account</a>
      <p class="small">No credit card required, no contracts to lock you in</p>
    </div>
  </div>
</section>
<section id="pricing-included">
  <div class="inner center-text">
    <h5 class="section-label">Included with every plan</h5>
    <ul class="unstyled-list inline-list">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-features.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-features@2x.png 2x" width="46">
        <p>All the Vero <a href="/features/email">Features</a></p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-support.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-support@2x.png 2x" width="46">
        <p>World Class Support</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-unlimited.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-unlimited@2x.png 2x" width="46">
        <p>Unlimited Projects</p>
      </li>
    </ul>
  </div>
</section>
<section id="pricing-validation">
  <div class="inner center-text">
    <img class="quote-image" src="/wp-content/themes/vero/assets/images/home/pricing/sphero.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/sphero@2x.png 2x">
    <blockquote class="quote">&ldquo;Vero is an essential tool for us at Sphero. We use Vero for newsletter, behavioral and transaction email campaigns. Our relationship with Vero enables Sphero to communicate in a dynamic and personalized medium.&rdquo;</blockquote>
    <div class="clearfix"></div>
    <p class="large">Paul Rahn, Director of Ecommerce</p>
    <p>Sphero</p>
    <ul class="unstyled-list inline-list pricing-logos center-text">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-canva.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-canva@2x.png 2x" width="118">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-freelancer.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-freelancer@2x.png 2x" width="118">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-sitepoint.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-sitepoint@2x.png 2x" width="118">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-sphero.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-sphero@2x.png 2x" width="118">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-oneill.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-oneill@2x.png 2x" width="118">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-alexa.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-alexa@2x.png 2x" width="118">
      </li>
    </ul>
  </div>
</section>
<section id="pricing-faq">
  <div class="inner halfs">
    <h2 class="center-text">Frequently Asked Questions</h2>
    <div class="left">
      <h3>What happens if I go over my subscription limit?</h3>
      <p>
        Vero will send you an email when you cross the subscriber or email threshold of your current plan during a billing period. You will automatically be upgraded to the appropriate plan.
      </p>
      <p>
        As your usage fluctuates you can downgrade your plan during the next billing period, ensuring you minimize your spend each month.
      </p>

      <h3>What support does Vero provide?</h3>
      <p>
        We want your experience with our support to be the best experience you’ve ever had, not just the best you’ve had with an online service, or the best you’ve had this week. 
      </p>
      <p>
        We provide 24 hour support via email. We are proud of our support and our internal SLA is to provide a response to every ticket within three hours. Our aim is to understand and work with you closely on any specific marketing or technical questions or issues and ensure your problems are solved to the best of our abilities.
      </p>
      <p>
        We also provide phone and emergency support for customers on our $1,049/month Enterprise plans. Please request a demo above for more information or if you have questions about this process.
      </p>

      <h3>Does the data I send Vero belong to me?</h3>
      <p>
        Absolutely. Vero is a platform designed to help you send better emails to your users. The data you send us is stored in order to deliver the best service we can for sending targeted emails. At any time you can export or request us to remove your data – it is entirely yours.
      </p>
      <p>
        Read our <a href="/terms-of-service" target="blank">Terms of Service</a> for more details.
      </p>
    </div>
    <div class="right">
      <h3>Can I pay annually?</h3>
      <p>
        You can elect to pay annual. Customers that pay annual get two months of Vero free each year.
      </p>
      <p>
        Paying annually also means your email limits are spread out across the year. For example, if you are on our $99/month plan and can send up to 25,000 emails per month, on our annual plan you can send up to 300,000 emails <strong>per year</strong>. This means that monthly spikes in email volume will not require you to move up a plan, saving you even more.
      </p>
      
      <h3>What are projects?</h3>
      <p>
        Projects are individual instances of Vero. Each project has it's own subscriber database, API keys and campaigns. In other words, it’s like having two or more Vero accounts in one.
      </p>
      <p>
        If you’re an agency, you may also use projects to manage multiple clients.
      </p>
    </div>
  </div>
</section>
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
  add_page_tracking_code("PricingPage");
  include("demo-enquiry-form.php");
?>
