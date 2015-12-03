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
              <li class="demo-link"><a id="demo-trigger" rel="leanModal" href="#demo">Request a Demo</a></li>
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
                <li>25,000 <span>customers</span></li>
                <li>900,000 <span>emails/year</span></li>
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
                <li>200,000 <span>customers</span></li>
                <li>6,000,000 <span>emails/year</span></li>
              </ul>
            </li>
            <li class="plan starter">
              <h5 class="section-label center-text">Enterprise</h5>
              <p class="price">$10,490+</p>
              <p class="price-label small">per year (2 months free)</p>
              <ul class="limits unstyled-list">
                <li>Unlimited <span>customers</span></li>
                <li>Unlimited <span>emails/year</span></li>
                <li class="demo-link"><a rel="leanModal" href="#demo">Request a Demo</a></li>
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
        <p>All the Vero <a href="#">Features</a></p>
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
    <img class="quote-image" src="#">
    <blockquote class="quote">This fit perfectly with my business and made us more money too!</blockquote>
    <p class="large">Awesome Customer</p>
    <p>Name of Company</p>
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
    <p class="sub-heading">No contracts to lock you in, only pay when you start sending live emails</p>
    <form action="https://app.getvero.com/signup" method="get" class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Create your account">
    </form>
    <p class="small">No credit card required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("PricingPage");
?>
<div id="demo">
  <div class="inner">
    <?php if($_GET['thanks'] == 'yourock'){?>
      <h2>Thanks!</h2>
      <p class="large">Hang tight, one of our Customer Success engineers will be in touch soon.</p>
    <?php } else { ?>
    <div class="center-text">
      <h2>Request a personal demo of the future of email.</h2>
      <p class="medium">One of our Customer Success engineers will get in touch and show you around Vero, so you can see the full power of behavioral email.</p>
    </div>
    <div id="thanks">
      <h3>Thanks!</h3>
      <p>Hang tight, one of our Customer Success engineers will be in touch soon.</p>
    </div>
    <form id="high-volume-sender-form" action='http://localhost:3000/demos' method='post'>
      <div class="half">
        <div class="form-group"><label>Name: <span>*</span></label><input id="sender_name" class="form-control" name="name" type="text" autofocus="autofocus" /></div>
        <div class="form-group"><label>Email: <span>*</span></label><input id="sender_email_address" class="form-control" name="email" type="text" /></div>
        <div class="form-group"><label>Phone:</label><input id="sender_phone" class="form-control" name="phone" type="text" /></div>
        <div class="form-group"><label>Company name: <span>*</span></label><input id="sender_company_name" class="form-control" name="company_name" type="text" /></div>
      </div>
      <div class="half">
        <div class="form-group"><label>Current number of subscribers:</label><select id="sender_subscribers" class="form-control" name="subscribers">
          <option value="10000">0 - 10,000 subscribers</option>
          <option value="100000">10,000 - 100,000 subscribers</option>
          <option value="250000">100,000 - 250,000 subscribers</option>
          <option value="500000">250,000 - 500,000 subscribers</option>
          <option value="1000000">500,000 - 1,000,000 subscribers</option>
          <option value="5000000">1,000,000 - 5,000,000 subscribers</option>
          <option value="10000000">5,000,000 - 10,000,000 subscribers</option>
          <option value="more">10,000,000+ subscribers</option></select></div>
        <div class="form-group"><label>Current number of emails sent monthy:</label><select id="sender_emails" class="form-control" name="monthly_emails">
          <option value="1000000">250,000 - 1,000,000 emails</option>
          <option value="1000000">500,000 - 1,000,000 emails</option>
          <option value="1000000">1,000,000 - 5,000,000 emails</option>
          <option value="10000000">5,000,000 - 10,000,000 emails</option>
          <option value="50000000">10,000,000 - 50,000,000 emails</option>
          <option value="more">50,000,000+ emails</option></select></div>
        <div class="radio-group">
          <label>Preferred contact method:</label><br>
          <input id="email" checked="checked" name="contact_method" type="radio" value="email" />
          <label class="method" for="email">Email</label>
          <input id="phone" name="contact_method" type="radio" value="phone" />
          <label class="method" for="phone">Phone</label>
        </div>
      </div>
      <div class="full-width center-text">
        <input type="hidden" name="redirect_on_success" value="https://www.getvero.com/email-marketing-demo/?thanks=yourock">
        <input type="submit" value="Get in touch" id="request-demo" class="btn btn-success">
      </div>
    </form>
    <?php } ?>
  </div>
  <div class="modal_close"><span class="fa fa-close"></span></div>
</div>
