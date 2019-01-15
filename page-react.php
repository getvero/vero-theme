<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'jobs react-jobs';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section class="double-padding" id="hero">
  <div class="inner xlarge-inner">
    <div class="grid intro">
      <span class=" d-block annotation uppercase regular faded bottom-margin-medium">Assist your customers</span>

      <h1 class="biggie semi-bold bottom-margin-small job-title">Send alerts and relevant data to your team so they can offer better help, faster</h1>

      <p class="large bottom-margin-medium">Notify and alert your teams based on customer interactions. Learn faster, be more proactive and get the right people on your team on the job.</p>

      <div class="intro-footer">
        <a class="btn btn-success btn-large" href="https://app.getvero.com/signup">Start a free trial</a>
        <a class="regular underline-link" id="demo-trigger" rel="leanModal" href="#demo">Talk to our sales team</a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <h2 class=" d-block annotation uppercase regular faded bottom-margin-medium">How it works</h2>

    <div class="grid grid-thirds">
      <div class="border-radius-10 border-primary padding-xsmall offset-shadow offset-shadow-primary">
        <h3 class="micro semi-bold">Integrate</h3>
        <p class="medium">Collect real-time events and customer data from your website, app or systems.</p>
        <a class="medium regular underline-link" href="#none">Learn more</a>
      </div>
      <div class="border-radius-10 border-primary padding-xsmall offset-shadow offset-shadow-primary">
        <h3 class="micro semi-bold">Notify</h3>
        <p class="medium">Filter, branch, and route messages to the right team members.</p>
        <a class="medium regular underline-link" href="#none">Learn more</a>
      </div>
      <div class="border-radius-10 border-primary padding-xsmall offset-shadow offset-shadow-primary">
        <h3 class="micro semi-bold">Reach</h3>
        <p class="medium">Reach your team members where they are using email, Slack and SMS.</p>
        <a class="medium regular underline-link" href="#none">Learn more</a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding border-bottom-light">
  <div class="inner xlarge-inner flush-top">
    <div class="bottom-margin-xlarge">
      <h2 class="chunk regular">Integrate</h2>

      <div class="grid grid-full bottom-margin-large">
        <p class="medium grid-span-8">Your product or store is the core of your business. Respond to and learn from customer behavior, and offer customers a better experience.</p>
      </div>

      <div class="js-feature-carousel-navigation feature-carousel-navigation bottom-margin-xsmall border-bottom-light"></div>

      <div class="js-feature-carousel variable-width feature-carousel">
        <div class="feature-carousel-item" data-title="CDP integration">
          <p class="medium">Connect with Segment, Snowplow Analytics, and other data pipelines to respond to data quickly.</p>
        </div>
        <div class="feature-carousel-item" data-title="Flexible API">
          <p class="medium">Track anything you want. Define the custom events to track from your software, store or platform.</p>
        </div>
      </div>
    </div>
    <div class="bottom-margin-xlarge">
      <h2 class="chunk regular">Notify</h2>

      <div class="grid grid-full bottom-margin-large">
        <p class="medium grid-span-8">Route messages to one or many users, immediately, after a delay or in response to a sequence of events. Get more context and be more proactive..</p>
      </div>

      <div class="js-feature-carousel-navigation feature-carousel-navigation bottom-margin-xsmall border-bottom-light"></div>

      <div class="js-feature-carousel variable-width feature-carousel">
        <div class="feature-carousel-item" data-title="Custom branching">
          <p class="medium">Connect with Segment, Snowplow Analytics, and other data pipelines to respond to data quickly.</p>
        </div>
        <div class="feature-carousel-item" data-title="Full customer history">
          <p class="medium">Vero not only lets you trigger workflows but remembers each of your customers and their data.</p>
        </div>
        <div class="feature-carousel-item" data-title="Visualize your workflow">
          <p class="medium">See your business workflow on a canvas from end-to-end.</p>
        </div>
      </div>
    </div>
    <div>
      <h2 class="chunk regular">Reach</h2>

      <div class="grid grid-full bottom-margin-large">
        <p class="medium grid-span-8">Reach your team members where they are using email, Slack and SMS.</p>
      </div>

      <div class="js-feature-carousel-navigation feature-carousel-navigation bottom-margin-xsmall border-bottom-light"></div>

      <div class="js-feature-carousel variable-width feature-carousel">
        <div class="feature-carousel-item" data-title="Multiple channels">
          <p class="medium">Support for email and Slack out-of-the-box - use custom actions to reach your teammates anywhere.</p>
        </div>
        <div class="feature-carousel-item" data-title="Custom actions">
          <p class="medium">Drive activity in any internal or SaaS product using our HTTP GET/POST functionality.</p>
        </div>
        <div class="feature-carousel-item" data-title="Track history of execution">
          <p class="medium">See what has run, and why decisions were made using our Log history.</p>
        </div>
        <div class="feature-carousel-item" data-title="Run at huge scale">
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
