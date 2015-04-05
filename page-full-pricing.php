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
    <h1 class="center-text">Pricing that scales to suit your business.</h1>
    <h2 class="center-text">Join 300+ other businesses that communicate better to grow their businesses.</h2>
    <div class="center-text">
      <a href="https://app.getvero.com/signup" class="btn btn-large btn-warning">Start a free trial</a>
      <p class="small">14 day free trial • No credit card required</p>
    </div>
  </div>
  <section id="pricing">
    <ul class="list-inline list-unstyled">
      <li class="well">
        <img src="/wp-content/themes/vero/assets/images/pricing/entrepreneur.png">
        <h3 class="light">Entrepreneur</h3>
        <p>
          <a href="/pricing/entrepreneur" class="btn btn-primary">Learn more</a>
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
  </section>

  <!--<section id="annual">
    <p><strong>Go annual</strong> and get two months free. Our annual plans include a two month (or 15%) discount.</p>
  </section>-->
  
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