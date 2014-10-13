<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'pricing';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<section id="top">
<div class="inner">
<h1 class="center-text">A plan for every business</h1>
</div>
</section>
<div id="plans">
<div class="plan standard">
<div class="title">standard</div>
<div class="price-block"><span class="price"><span class="yearly-price">$82</span><sub>/ month</sub></span> billed annually<span class="monthly">OR <span class="monthly-price">$99</span> month-to-month</span></div>
<div class="details"><form><select class="form-control price-selection"><option value="99">12,500 Subscribers / 25,000 Emails</option><option value="149">50,000 Subscribers / 175,000 Emails</option><option value="299">100,000 Subscribers / 250,000 Emails</option><option value="549">175,000 Subscribers / 400,000 Emails</option></select></form></div>
<div class="cta"><a href="https://app.getvero.com/signup" class="btn btn-success btn-large">Start free trial</a></div>
<div class="best-for">best forIndividuals, Bloggers,
Small Agencies,
Small Business Owners</div>
<div class="features">

what is included
<ul class="list-unstyled">
  <li class="icon-behavioral" data-pricing="99">Behavioral emails</li>
  <li class="icon-transactional" data-pricing="99">Transactional emails</li>
  <li class="icon-newsletter" data-pricing="99">Newsletters</li>
  <li class="icon-segment" data-pricing="99">Customer Segmentation</li>
  <li class="icon-abtest" data-pricing="99">A/B Testing</li>
  <li class="icon-conversion" data-pricing="99">Conversion tracking</li>
  <li class="icon-projects" data-pricing="99">Up to three projects ($149+)</li>
  <li class="icon-team" data-pricing="99">Team management ($149+)</li>
  <li class="icon-external" data-pricing="99">External data access ($299+)</li>
  <li class="icon-support" data-pricing="99">20/5 Email Support</li>
</ul>
</div>
</div>
<div class="plan enterprise">
<div class="title">enterprise</div>
<div class="price-block">starts from <span class="price">$1099<sub>/ month</sub></span></div>
<div class="details">call us at<span class="phone">+1 415 562 8376</span></div>
<div class="cta"><a href="/high-volume-senders" class="btn btn-success btn-large">Request a demo</a></div>
<div class="best-for">best forTeams focused on optimization,
Large Agencies,
Enterprise Deployment</div>
<div class="features">

what is included
<ul class="list-unstyled">
  <li class="icon-behavioral">Behavioral emails</li>
  <li class="icon-transactional">Transactional emails</li>
  <li class="icon-newsletter">Newsletters</li>
  <li class="icon-segment">Customer Segmentation</li>
  <li class="icon-abtest">A/B Testing</li>
  <li class="icon-conversion">Conversion tracking</li>
  <li class="icon-projects">Unlimited projects</li>
  <li class="icon-external">External data access</li>
  <li class="icon-team">Team management</li>
  <li class="icon-revenue">Revenue tracking</li>
  <li class="icon-secure">Hosted JS on your site</li>
  <li class="icon-api">Full API access</li>
  <li class="icon-heatmap">Heatmaps report</li>
  <li class="icon-log">90 days log history</li>
  <li class="icon-manager">Account manager</li>
  <li class="icon-support">24/7 Phone Support</li>
</ul>
</div>
</div>
</div>
<div class="plans-info center-text">

<p><b>Agency?</b> Manage multiple client accounts from one account. <a href="mailto:support@getvero.com">Contact us</a> to learn about agency options.</p><p><b>Why annual billing?</b> You can save 16% by signing up for a year at a time - that's <strong>two months</strong>. It's also easier on your accounting department - just one transaction per year instead of 12. Even better, you get to annualise your usage: which is helps you ride the ebbs and flows of your email campaigns with ease.

</div>
<section id="testimonials">
<div class="inner">
<div class="quote"><p><b>Vero is awesome.</b> By implementing personalised welcome emails, we have been able to lift activation rates by 35%. That is incredible and is essentially a magic lift in the bottom line.</p><div class="who"><img src="https://new.getvero.com/wp-content/uploads/2014/08/alan1.png" alt="" /> Alan Downie,
CEO, BugHerd</div>
<div class="clearfix"></div>
</div>
</div>
</section><section id="customers" class="center-text inner">
<h2>Trusted by companies worldwide</h2>
<img src="https://new.getvero.com/wp-content/uploads/2014/07/worldwide1.png" alt="" />

</section><section id="faq" class="center-text">
<h2>Frequently asked Questions</h2>
<ul class="list-unstyled">
  <li><strong>What are 'subscribers'?</strong></br>Subscribers are the number of individual customer profiles you have in your Vero system. Subscribers can be added in two ways: via our API (most common) or via CSV. If someone comes to your website, inputs their email and you pass this along to the Vero API, they'll be added to your 'subscriber database' and counted as a subscriber.</li>
  <li><strong>What if I go over my monthly limit?</strong></br>Vero will email you when you go over your limit and, if consistent, will upgrade you to the next plan. You can always review your usage and downgrade your account if your usage drops again. We have no lock-in periods so all pricing is based on your individual month-to-month usage.</li>
  <li><strong>How many email campaigns can I run at once?</strong></br>You can have as many automated and newsletter email campaigns running as you want at any one time.</li>
  <li><strong>Can I cancel my subscription anytime?</strong></br>Yes, you can stop your subscription anytime you wish, we have no lock-in contracts. You can also upgrade or downgrade your account at any time.</li>
  <li><strong>What are projects?</strong></br>Projects allow you to manage multiple websites within one Vero account. The advantage of this is ease of team management and shared billing and volume.</li>
</ul>
</section>
          <?php 
          no_content_genesis_footer();
          ?>