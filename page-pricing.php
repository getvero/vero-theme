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
  <div class="inner large-inner center-text">
    <h1 class="hero-title">Send one email, or 100 million.</h1>
    <p class="medium">Vero is built to scale. Whether you start small or big, our pricing is designed to scale as you do.</p>
    <!-- <ul class="plan-tabs unstyled-list inline-list">
      <li id="slider-monthly" class="active">Monthly</li>
      <li id="slider-yearly">Annually</li>
    </ul> -->
    <ul class="plan-tabs unstyled-list inline-list">
      <li id="slider-monthly" class="active">Cloud</li>
      <li id="slider-self-hosted">Self-hosted</li>
    </ul>
    <ul id="pricing-slider">
      <li>
        <ul id="monthly" class="inline-list unstyled-list center-text plans-list">
          <li class="plan starter">
            <h5 class="section-label center-text">Starter 🆕</h5>
            <p class="small">&nbsp;</p>
            <p class="price">$99</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li>12,500 <span>customers</span></li>
              <li>25,000 <span>emails/month</span></li>
            </ul>
          </li>
          <li class="plan growth">
            <h5 class="section-label center-text">Growth 🌱</h5>
            <p class="small">&nbsp;</p>
            <p class="price">$299</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li class="most-popular">Most Popular</li>
              <li>100,000 <span>customers</span></li>
              <li>250,000 <span>emails/month</span></li>
            </ul>
          </li>
          <li class="plan pro">
            <h5 class="section-label center-text">Pro ⛳</h5>
            <p class="small">&nbsp;</p>
            <p class="price">$549</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li>175,000 <span>customers</span></li>
              <li>400,000 <span>emails/month</span></li>
            </ul>
          </li>
          <li class="plan scale">
            <h5 class="section-label center-text">Scale 🚀</h5>
            <p class="small">&nbsp;</p>
            <p class="price">$749</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li>300,000<span>customers</span></li>
              <li>700,000<span>emails/month</span></li>
            </ul>
          </li>
          <li class="plan scale">
            <h5 class="section-label center-text">Enterprise 📈</h5>
            <p class="small">Starts at</p>
            <p class="price">$1,049</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li>500,000+ <span>customers</span></li>
              <li>1,000,000+ <span>emails/month</span></li>
              <li class="demo-link"><a id="demo-trigger" rel="leanModal" href="#demo">Talk to our Success Team</a></li>
            </ul>
          </li>
        </ul>
        <p>Pay up front and save on email volume with our <a href="http://help.getvero.com/articles/lock-in-your-pricing.html">lock-in pricing.</a></p>
        <div class="pricing-cta center-text">
          <a href="https://app.getvero.com/signup" class="btn btn-success btn-large">Create your trial account</a>
          <a rel="leanModal" href="#demo" class="btn btn-warning btn-large">Talk to our success team</a>
          <p></p>
        </div>
        <p>Have questions? See the list of <a href="#pricing-faq">Frequenty Asked Questions</a> below.</p>
      </li>
      <li>
        <ul id="self-hosted" class="inline-list unstyled-list center-text plans-list">
          <li class="plan byo">
            <h5 class="section-label center-text">Self-Hosted 💻</h5>
            <p class="small">Starts at</p>
            <p class="price">$5,000</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li>Unlimited <span>customers</span></li>
              <li>Unlimited <span>emails/month</span></li>
              <li class="demo-link"><a href="mailto:success@getvero.com?subject=Self Hosted Pricing Plan"">Talk to our Success Team</a></li>
            </ul>
          </li>
          <li>
            <p>
            <ul>
              <li>Data Center-Ready: Deploys via a single binary with either PostgreSQL or Redshift/Cassandra. Deploy on one node or in a cluster with high availability for horizontal scaling.</li>
              <li>Own your data: Your data never leaves your environment. Get the full functionality of Vero, including our API and GUI, without synchronising your data to a third-party cloud.</li>
              <li>Centralised updates: Get access to the latest version of Vero, every time. You deploy the same codebase as our cloud offering so all changes are available in your instance as they are made.</li>
            </ul>
          </li>
        </ul>
        <p>If you're interested in trialing the self-hosted version of Vero, get in touch. We'll help you get up and running.</p>
        <div class="pricing-cta center-text">
          <a rel="leanModal" href="#demo" class="btn btn-warning btn-large">Talk to our success team</a>
          <p></p>
        </div>
      </li>
      <!-- <li>
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
      </li> -->
    </ul>
  </div>
</section>
<section id="pricing-included">
  <div class="inner center-text">
    <h5 class="section-label">Features included on every plan</h5>
    <ul>
    <li><h4>Data capture and storage</h4></li>
    <li><a href="http://developers.getvero.com" target="_blank">Full API</a> and <li><span>✅</span> libraries to track customer behavior</li>
    <li><span>✅</span>Support for Segment.com data tracking</li>
    <li><span>✅</span>Create HTML web forms.</li>
    <li><span>✅</span>Import and export customer data via CSV.</li>

    <li><h4>Segmentation</h4></li>
    <li><span>✅</span>No static lists.</li>
    <li><span>✅</span>Store and update customers using a custom, unique ID.</li>
    <li><span>✅</span>Dynamic segmentation using all historical data and customer activity.</li>
    <li><span>✅</span>Full data retention.</li>
    <li><span>✅</span>Reusable and nested segments.</li>

    <li><h4>Email design and automation</h4></li>
    <li><span>✅</span>Newsletter / ad-hoc / one-to-many emails.</li>
    <li><span>✅</span>Transactional emails.</li>
    <li><span>✅</span>Triggered / multi-step / drip email streams.</li>
    <li><span>✅</span>Dynamic filters based on customer data and activity.</li>
    <li><span>✅</span>Email personalization using <a href="http://help.getvero.com/articles/inserting-merge-tags-using-liquid-in-my-emails.html" target="_blank">Liquid</a>.</li>
    <li><span>✅</span>Reusable, point-and-click edit templates.</li>
    <li><span>✅</span>A/B testing all campaigns.</li>
    <li><span>✅</span>Unlimited email aliases / "from addresses".</li>


    <li><h4>Email deployment</h4></li>
    <li><span>✅</span>Full open and click tracking.</li>
    <li><span>✅</span>Email conversion reporting using customer activity.</li>
    <li><span>✅</span>(Optional) integrations with popular provider providers Mailgun, Sendgrid, Dyn and Mandrill.</li>
    <li><span>✅</span>Centralised unsubscribe management.</li>
    <li><span>✅</span>Reporting dashboards.</li>
    <li><span>✅</span>Webhooks to dump email interaction activity.</li>
    <li><span>✅</span>Support for Segment.com <em>Sources</em> to dump email interaction activity.</li>

    <li><h4>Email deployment</h4></li>
    <li><span>✅</span>24/7 customer support.</li>
    <li><span>✅</span>Fully encrypted data transfer.</li>
    <li><span>✅</span>Unlimited "Projects" (separate Vero environments).</li>
    <li><span>✅</span>Individual team access.</li>

</li>
</ul>
    <ul class="unstyled-list inline-list">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-features.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-features@2x.png 2x" width="46">
        <p>Read more about our <a href="/features/features">features</a></p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-support.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-support@2x.png 2x" width="46">
        <p>We pride ourselves on support</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-unlimited.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-unlimited@2x.png 2x" width="46">
        <p>We're built to scale</p>
      </li>
    </ul>
  </div>
</section>
<section id="pricing-validation" class="dark-box">
  <div class="inner center-text">
    <img class="quote-image" src="/wp-content/themes/vero/assets/images/home/pricing/sphero.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/sphero@2x.png 2x">
    <blockquote class="quote">&ldquo;Vero is an essential tool for us at Sphero. We use Vero for newsletter, behavioral and transaction email campaigns. Our relationship with Vero enables Sphero to communicate in a dynamic and personalized medium.&rdquo;</blockquote>
    <div class="clearfix"></div>
    <p class="large">Paul Rahn, Director of Ecommerce</p>
    <p>Sphero</p>
    <ul class="unstyled-list inline-list pricing-logos center-text">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/home-canva.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/logos/home-canva@2x.png 2x" height="76">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/home-freelancer.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/logos/home-freelancer@2x.png 2x" height="76">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/home-strikingly.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/logos/home-strikingly@2x.png 2x" height="76">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/home-sphero.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/logos/home-sphero@2x.png 2x" height="76">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/home-pipedrive.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/logos/home-pipedrive@2x.png 2x" height="76">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/home-tidal.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/logos/home-tidal@2x.png 2x" height="76">
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
    </div>
    <div class="right">
      <h3>Can I pay annually?</h3>
      <p>
        <p>Yes, <a href="http://help.getvero.com/articles/lock-in-your-pricing.html">read about lock-in pricing on our help docs</a>.</p>
      </p>
      
      <h3>What are projects?</h3>
      <p>
        Projects are individual instances of Vero. Each project has it's own subscriber database, API keys and campaigns. In other words, it’s like having two or more Vero accounts in one.
      </p>
      <p>
        If you’re an agency, you may also use projects to manage multiple clients.
      </p>
      
      <h3>Does the data I send Vero belong to me?</h3>
      <p>
        Absolutely. Vero is a platform designed to help you send better emails to your users. The data you send us is stored in order to deliver the best service we can for sending targeted emails. At any time you can export or request us to remove your data – it is entirely yours.
      </p>
      <p>
        Read our <a href="/terms-of-service" target="blank">Terms of Service</a> for more details.
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
