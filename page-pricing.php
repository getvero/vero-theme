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
  <div class="inner small-inner flush-bottom center-text">
    <h1 class="hulk semi-bold">Get started with Vero</h1>
    <p class="large no-bottom-margin"><strong>Vero</strong> is built to scale. Whether you start small or big, our pricing is designed to scale as you do.</p>
  </div>
  <div class="inner large-inner top-padding-medium center-text">
    <!-- <ul class="plan-tabs unstyled-list inline-list">
      <li id="slider-monthly" class="active">Monthly</li>
      <li id="slider-yearly">Annually</li>
    </ul> -->
    <!-- <ul class="plan-tabs unstyled-list inline-list">
      <li id="slider-monthly" class="active">Cloud</li>
      <li id="slider-self-hosted">Self-hosted</li>
    </ul> -->
    <ul id="pricing-slider">
      <li>
        <ul id="monthly" class="inline-list unstyled-list center-text plans-list">
          <li class="plan starter">
            <p class="regular medium uppercase center-text bottom-margin-tiny">Starter <span class="left-margin-tiny">🆕</span></p>
            <p class="small">&nbsp;</p>
            <p class="semi-bold price">$99</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li>12,500 <span>customers</span></li>
              <li>25,000 <span>emails/month</span></li>
            </ul>
          </li>
          <li class="plan growth">
            <p class="regular medium uppercase center-text bottom-margin-tiny">Growth <span class="left-margin-tiny">🌱</span></p>
            <p class="small">&nbsp;</p>
            <p class="semi-bold price">$299</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li class="most-popular">Most Popular</li>
              <li>100,000 <span>customers</span></li>
              <li>250,000 <span>emails/month</span></li>
            </ul>
          </li>
          <li class="plan pro">
            <p class="regular medium uppercase center-text bottom-margin-tiny">Pro <span class="left-margin-tiny">⛳</span></p>
            <p class="small">&nbsp;</p>
            <p class="semi-bold price">$549</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li>175,000 <span>customers</span></li>
              <li>400,000 <span>emails/month</span></li>
            </ul>
          </li>
          <li class="plan scale">
            <p class="regular medium uppercase center-text bottom-margin-tiny">Scale <span class="left-margin-tiny">🚀</span></p>
            <p class="small">&nbsp;</p>
            <p class="semi-bold price">$749</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li>300,000<span>customers</span></li>
              <li>700,000<span>emails/month</span></li>
            </ul>
          </li>
          <li class="plan scale">
            <p class="regular medium uppercase center-text bottom-margin-tiny">Enterprise <span class="left-margin-tiny">📈</span></p>
            <p class="small">Starts at</p>
            <p class="semi-bold price">$1,049</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li>500,000+ <span>customers</span></li>
              <li>1,000,000+ <span>emails/month</span></li>
              <li class="demo-link"><a id="demo-trigger" rel="leanModal" href="#demo">Talk to our sales team</a></li>
            </ul>
          </li>
        </ul>
        <p>Pay up front and save on email volume with our <a href="https://help.getvero.com/articles/lock-in-your-pricing.html">lock-in pricing.</a></p>
        <div class="pricing-cta center-text">
          <a href="https://app.getvero.com/signup" class="btn btn-success btn-large bottom-margin-tiny">Create your trial account</a>
          <a rel="leanModal" href="#demo" class="btn btn-warning btn-large bottom-margin-tiny">Talk to our sales team</a>
          <p></p>
        </div>
        <p>Have questions? See the list of <a data-scroll href="#pricing-faq">Frequenty Asked Questions</a> below.</p>
      </li>
      <li>
        <ul id="self-hosted" class="inline-list unstyled-list center-text plans-list">
          <li class="plan byo">
            <p class="regular medium uppercase center-text bottom-margin-tiny">Self-Hosted <span class="left-margin-tiny">💻</span></p>
            <p class="small">Starts at</p>
            <p class="price">$5,000</p>
            <p class="price-label small">per month</p>
            <ul class="limits unstyled-list">
              <li>Unlimited <span>customers</span></li>
              <li>Unlimited <span>emails/month</span></li>
              <li class="demo-link"><a rel="leanModal" href="#self-hosted-form">Talk to our Success Team</a></li>
            </ul>
          </li>
          <li class="byo-solid">
            <p>
            <ul class="unstyled-list">
              <li><p class="regular semi-bold bottom-margin-tiny">Data Center-Ready</p><p class="no-top-margin bottom-margin-small">Deploys via a single binary with either PostgreSQL or Redshift/Cassandra. Deploy on one node or in a cluster with high availability for horizontal scaling.</p></li>
              <li><p class="regular semi-bold bottom-margin-tiny">Own your data</p><p class="no-top-margin bottom-margin-small">Your data never leaves your environment. Get the full functionality of Vero, including our API and GUI, without synchronising your data to a third-party cloud.</p></li>
              <li><p class="regular semi-bold bottom-margin-tiny">Centralised updates</p><p class="no-top-margin bottom-margin-small">Get access to the latest version of Vero, every time. You deploy the same codebase as our cloud offering so all changes are available in your instance as they are made.</p></li>
            </ul>
          </li>
        </ul>
        <p>If you're interested in trialing the self-hosted version of Vero, get in touch. We'll help you get up and running.</p>
        <div class="pricing-cta center-text bottom-padding-tiny">
          <a rel="leanModal" href="#self-hosted-form" class="btn btn-warning btn-large display-inline bottom-margin-tiny">Talk to our sales team</a>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="pricing-included">
  <div class="inner medium-inner">
    <h2 class="chunk bottom-margin-medium center-text">Included with every plan</h2>
    <div class="lists-block">
      <div class="list top-margin-small">
        <h3 class="bottom-margin-small">Data capture and storage</h3>
        <ul class="unstyled-list tick-list">
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image"><a href="https://developers.getvero.com" target="_blank">Full API libraries</a> to track customer behavior
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Support for Segment.com data tracking
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Create HTML web forms
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Import and export customer data via CSV
          </li>
        </ul>
      </div>
      <div class="list top-margin-small">
        <h3 class="bottom-margin-small">Segmentation</h3>
        <ul class="unstyled-list tick-list">
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">A single record per customer. No more static lists
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Store and update customers using a custom, unique ID
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Dynamic segmentation using all historical data and customer activity</li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Full data retention
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Reusable and nested segments
          </li>
        </ul>
      </div>
      <div class="list top-margin-small">
        <h3 class="bottom-margin-small">Email design and automation</h3>
        <ul class="unstyled-list tick-list">
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Newsletter / ad-hoc / one-to-many emails
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Transactional emails</li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Triggered / multi-step / drip email streams
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Dynamic filters based on customer data and activity
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Email personalization using <a href="https://help.getvero.com/articles/inserting-merge-tags-using-liquid-in-my-emails.html" target="_blank">Liquid</a>
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Reusable, point-and-click edit templates
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">A/B testing all campaigns
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Unlimited email aliases / "from addresses"
          </li>
        </ul>
      </div>
      <div class="list top-margin-small">
        <h3 class="bottom-margin-small">Email deployment</h3>
        <ul class="unstyled-list tick-list">
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Full open and click tracking
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Email conversion reporting using customer activity
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Integrations with popular providers Mailgun, Sendgrid, Dyn and Mandrill. (Optional)
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Centralised unsubscribe management
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Reporting dashboards
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Webhooks to dump email interaction activity
          </li>
          <li class="relative">
            <img src="/wp-content/themes/vero/assets/images/home/pricing/Tick.svg" class="absolute tick-list-image">Support for Segment.com <em>Sources</em> to dump email interaction activity
          </li>
        </ul>
      </div>
    </div>
    <p class="regular medium center-text bottom-margin-medium top-margin-large">And heaps more...</p>
    <ul class="unstyled-list feature-list flex inline-list center-text">
      <li class="center-text">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-support.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-support@2x.png 2x" width="46">
        <p>24/7 Customer Support</a></p>
      </li>
      <li class="center-text">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-encrypt.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-encrypt@2x.png 2x" width="46">
        <p>Fully encrypted data transfer</p>
      </li>
      <li class="center-text">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-unlimited.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-unlimited@2x.png 2x" width="46">
        <p>Unlimited Projects</p>
      </li>
      <li class="center-text">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-team.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-team@2x.png 2x" width="46">
        <p>Multiple team members</p>
      </li>
      <li class="center-text">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-scale.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-scale@2x.png 2x" width="46">
        <p>Built to scale</p>
      </li>
      <li class="center-text">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-features.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-features@2x.png 2x" width="46">
        <p>Read more about <a href="/features">features</a></p>
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
    <p class="bottom-margin-large">Sphero</p>

    <ul class="unstyled-list logos-list">
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="https://unsplash.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-unsplash.svg" alt="Unsplash" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://tidal.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-tidal.svg" alt="Tidal" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://monzo.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-monzo.svg" alt="Monzo" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://pipedrive.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-pipedrive.svg" salt="Pipedrive" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://about.me">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-aboutme.svg" alt="about.me" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://helloprint.co.uk">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-helloprint.svg" alt="Helloprint" height="76">
        </a>
      </li>
    </ul>
  </div>
</section>
<section id="pricing-faq">
  <div class="inner halfs">
    <h2 class="chunk center-text jump-link">Frequently Asked Questions</h2>
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
        <p>Yes, <a href="https://help.getvero.com/articles/lock-in-your-pricing.html">read about lock-in pricing on our help docs</a>.</p>
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
  <div class="inner">
    <h1 class="cta-title">Send your first email today</h1>
    <p class="sub-heading">No contracts to lock you in, only pay when you start sending live emails</p>
    <a class="btn btn-success btn-large btn-wide" href="http://app.getvero.com/signup">Get started</a>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("PricingPage");
  include("demo-enquiry-form.php");
  include("hosted-enquiry-form.php");
?>
