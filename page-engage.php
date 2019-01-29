<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'jobs engage-jobs';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section class="double-padding" id="job-hero">
  <div class="inner xlarge-inner">
    <div class="intro-header center-text center-block">
      <h1 class="biggie semi-bold bottom-margin-small">Engage customers and grow your business</h1>

      <p class="large bottom-margin-medium">Create, automate and send emails and push notifications that drive customer engagement and increase revenue.</p>

      <div class="intro-footer">
        <a class="btn btn-success btn-large" href="https://app.getvero.com/signup">Start a free trial</a>
        <a class="medium regular underline-link" id="demo-trigger" rel="leanModal" href="#demo">Talk to our sales team</a>
      </div>

      <img src="/wp-content/themes/vero/assets/images/home/home-engage.svg" alt="Engage with arrow coming out">
    </div>
  </div>
</section>
<section class="double-padding bg-dots" id="job-quote">
  <div class="inner large-inner">
    <div class="flex flex-wrap justify-center items-center">
      <div class="col-aside">
        <img class="border-radius-4 avatar responsive-image" src="/wp-content/themes/vero/assets/images/jobs/julien-catani.jpg" srcset="/wp-content/themes/vero/assets/images/jobs/julien-catani@2x.jpg 2x" alt="A portrait of Julien Catani">
      </div>

      <div class="col-main">
        <p class="large">“Vero enables us to use real-time data to personalise our emails with relevant content to drive a higher revenue”</p>

        <a class="medium unstyled underline-link no-bottom-margin" href="https://www.getvero.com/resources/driving-revenue-increasing-nps-personalised-email/">Julien Cataini</a>
        <p class="medium">Head of CRM at helloprint</p>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="grid job-feature job-feature-left bottom-margin-xlarge">
      <div>
        <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Workflows</span>
        <h2 class="chunk regular">Easily create and manage automated workflows</h2>
        <p class="medium">Workflows help you visualize the customer experience as you build it. Whether you’re creating short, long, simple or complex journeys, Vero makes it easy to manage.</p>
        <a class="medium regular unstyled underline-link" href="">Streamline your workflows

        <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </a>
      </div>
      <div class="flex justify-center">
        <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/workflows.svg" alt="UI of Workflows with abstract shapes">
      </div>
    </div>
    <div class="grid job-feature job-feature-right">
      <div class="flex justify-center">
        <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/event-manager.svg" alt="UI of Event Manager with abstract shapes">
      </div>
      <div>
        <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Event Manager</span>
        <h2 class="chunk regular">Easily create and manage automated workflows</h2>
        <p class="medium">Vero tracks your customers’ actions, as they happen, and gives you a clear view of the data. Vero lets you easily select and add customer event data sent to create personalized messages.</p>
        <a class="medium regular unstyled underline-link" href="">Get a clear view of your customer data

        <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner xlarge-inner">
    <div class="section-header center-block center-text bottom-margin-medium">
      <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Personalization</span>
      <h2 class="chunk regular bottom-margin-tiny">Impress with personalized emails and push notifications</h2>
      <p class="large">Improve the impact of every message you send your customers by including helpful and engaging content.</p>
    </div>
    <div class="grid job-feature job-feature-thirds items-center">
      <div class="md-right-text">
        <h2 class="atomic semi-bold">Liquid and data inspector</h2>
        <p class="medium">Vero supports Liquid so you can display dynamic content in your email and push messages.</p>
        <a class="medium regular unstyled underline-link" href="">Personalize your content

        <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </a>
      </div>
      <div class="flex justify-center">
        <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/personalization.svg" alt="UI of Event Manager with abstract shapes">
      </div>
      <div>
        <h2 class="atomic semi-bold">Fusion</h2>
        <p class="medium">Pull content from APIs directly into your messages at send time. You can send account usage updates and tailored product recommendations to weather forecasts.</p>
        <a class="medium regular unstyled underline-link" href="">Load data from its source

        <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="grid job-feature-left">
      <div>
        <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Reporting</span>
        <h2 class="chunk regular">Optimize for growth</h2>
        <p class="medium">Vero makes A/B testing easy to manage while providing the level of accuracy required to ensure your tests are robust so you can confidently optimize the performance of your campaigns.</p>
        <p>Choose the metrics for your test and Vero can automatically calculate the winning variant based on the biggest number or Statistical significance (95% confidence level).</p>

        <a class="medium regular unstyled underline-link" href="">Test and optimize your campaigns

        <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </a>
      </div>
      <div>
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
        <div class="flex">
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
