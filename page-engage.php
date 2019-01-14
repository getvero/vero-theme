<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'jobs engage-jobs';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section class="double-padding" id="hero">
  <div class="inner xlarge-inner">
    <div class="grid intro">
      <span class=" d-block annotation uppercase regular faded bottom-margin-medium">Assist your customers</span>

      <h1 class="biggie semi-bold bottom-margin-small job-title">Send messages that drive more action and less frustration</h1>

      <p class="large bottom-margin-medium">Built for digital teams, use your data to send emails and push messages that drive customer engagement and help your business grow.</p>

      <div class="intro-footer">
        <a class="btn btn-success btn-large" href="https://app.getvero.com/signup">Start a free trial</a>
        <a class="medium regular underline-link" id="demo-trigger" rel="leanModal" href="#demo">Talk to our sales team</a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-dots">
  <div class="inner xlarge-inner center-text">
    <div class="center">
      <span class="d-block regular atomic bottom-margin-tiny">Target / Co-ordinate / Personalize / Iterate</span>
      <h2 class="regular chunk bottom-margin-medium">Powered by real-time customer data</h2>
    </div>

    <p class="medium measure center">Vero understands your customer data model, rather than forcing you to build around "Lists". With Vero, you can track your customer activity "as it happens", in real time. This tight integration with your core software, product or systems helps you centralise and co-ordinate all of your customer messages – helping you drive action whilst annoying customers less.</p>
  </div>
</section>
<section class="double-padding border-bottom-light">
  <div class="inner xlarge-inner">
  <div class="bottom-margin-xlarge">
      <h2 class="chunk regular">Connect</h2>

      <div class="grid grid-full bottom-margin-large">
        <p class="medium grid-span-8">Your product or store is the core of your business. Respond to and learn from customer behavior, and offer customers a better experience.</p>
      </div>

      <div class="js-feature-carousel-navigation feature-carousel-navigation bottom-margin-xsmall border-bottom-light"></div>

      <div class="js-feature-carousel variable-width feature-carousel">
        <div class="feature-carousel-item" data-title="Your data">
          <h3 class="tubs regular">Your data</h3>
          <p class="medium">Connect with Segment, Snowplow Analytics, and other data pipelines to respond to data quickly.</p>
        </div>
        <div class="feature-carousel-item" data-title="Native integrations">
          <h3 class="tubs regular">Native integrations</h3>
          <p class="medium">Track anything you want. Define the custom events to track from your software, store or platform.</p>
        </div>
        <div class="feature-carousel-item" data-title="CDP integrations">
          <h3 class="tubs regular">CDP integrations</h3>
        </div>
        <div class="feature-carousel-item" data-title="Segmentation">
          <h3 class="tubs regular">Segmentation</h3>
        </div>
      </div>
    </div>

    <div class="bottom-margin-xlarge">
      <h2 class="chunk regular">Co-ordinate</h2>

      <div class="grid grid-full bottom-margin-large">
        <p class="medium grid-span-8">Your product or store is the core of your business. Respond to and learn from customer behavior, and offer customers a better experience.</p>
      </div>

      <div class="js-feature-carousel-navigation feature-carousel-navigation bottom-margin-xsmall border-bottom-light"></div>

      <div class="js-feature-carousel variable-width feature-carousel">
        <div class="feature-carousel-item" data-title="Newsletters">
          <h3 class="tubs regular">Newsletters</h3>
          <p class="medium">Connect with Segment, Snowplow Analytics, and other data pipelines to respond to data quickly.</p>
        </div>
        <div class="feature-carousel-item" data-title="Scheduling and logic">
          <h3 class="tubs regular">Scheduling and logic</h3>
          <p class="medium">Track anything you want. Define the custom events to track from your software, store or platform.</p>
        </div>
        <div class="feature-carousel-item" data-title="Multiple channels">
          <h3 class="tubs regular">Multiple channels</h3>
        </div>
      </div>
    </div>
    <div class="bottom-margin-xlarge">
      <h2 class="chunk regular">Personalize</h2>

      <div class="grid grid-full bottom-margin-large">
        <p class="medium grid-span-8">Take your email personalization a step further. Improve the impact of every message you send your customers by including helpful and relevant content in your messages.</p>
      </div>

      <div class="js-feature-carousel-navigation feature-carousel-navigation bottom-margin-xsmall border-bottom-light"></div>

      <div class="js-feature-carousel variable-width feature-carousel">
        <div class="feature-carousel-item" data-title="Liquid">
          <h3 class="tubs regular">Liquid</h3>
          <p class="medium">Connect with Segment, Snowplow Analytics, and other data pipelines to respond to data quickly.</p>
        </div>
        <div class="feature-carousel-item" data-title="Load content from APIs">
          <h3 class="tubs regular">Loads content from APIs</h3>
          <p class="medium">Vero not only lets you trigger workflows but remembers each of your customers and their data.</p>
        </div>
      </div>
    </div>
    <div>
      <h2 class="chunk regular">Iterate</h2>

      <div class="grid grid-full bottom-margin-large">
        <p class="medium grid-span-8">Reach your team members where they are using email, Slack and SMS.</p>
      </div>

      <div class="js-feature-carousel-navigation feature-carousel-navigation bottom-margin-xsmall border-bottom-light"></div>

      <div class="js-feature-carousel variable-width feature-carousel">
        <div class="feature-carousel-item" data-title="A/B tests">
          <h3 class="tubs regular">A/B tests</h3>
          <p class="medium">Support for email and Slack out-of-the-box - use custom actions to reach your teammates anywhere.</p>
        </div>
        <div class="feature-carousel-item" data-title="Reports">
          <h3 class="tubs regular">Reports</h3>
          <p class="medium">Drive activity in any internal or SaaS product using our HTTP GET/POST functionality.</p>
        </div>
        <div class="feature-carousel-item" data-title="Webhooks">
          <h3 class="tubs regular">Webhooks</h3>
          <p class="medium">See what has run, and why decisions were made using our Log history.</p>
        </div>
        <div class="feature-carousel-item" data-title="Integrations">
          <h3 class="tubs regular">Integrations</h3>
          <p class="medium">We work with customers who process 100s of millions of events each month to drive sophisticated workflows.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="border-radius-10 border-light vertical-padding-medium horizontal-padding-large">
      <div class="grid grid-halfs">
        <div>
          <h3 class="tubs semi-bold bottom-margin-tiny">Send your customers helpful messages, at exactly the right time</h3>
          <p>Let Vero help you manage every touchpoint your customer has with your business</p>
        </div>
        <div class="flexbox">
          <a class="btn btn-large btn-success self-center left-margin-auto" href="#none">Start a free trial</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("PricingPage");
  include("demo-enquiry-form.php");
?>
