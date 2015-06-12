<?php 

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'pricing old-pricing';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<div class="inner">
  <section id="top">
    <h1 class="center-text">Communicate better and grow your business.</h1>
    <h2 class="center-text">Join 300+ other businesses that send smarter emails and increase engagement.</h2>
  </section>
  <section id="pricing">
    <table>
      <tr class="names">
        <th></th>
        <th>Light</th>
        <th>Growth</th>
        <th>Pro</th>
        <th>Enterprise</th>
      </tr>
      <tr class="prices">
        <td></td>
        <td>$99</td>
        <td>$299</td>
        <td>$549</td>
        <td>Custom</td>
      </tr>
      <tr class="subscribers">
        <td>
          <p><strong>Subscribers</strong></p>
          <p>A subscriber is any email recorded in your Vero database. Whether a blog subscriber or a previous customer, each user has a unique record in Vero.</p>
        </td>
        <td>75,000</td>
        <td>250,000</td>
        <td>500,000</td>
        <td></td>
      </tr>
      <tr class="emails">
        <td>
          <p><strong>Emails per month</strong></p>
          <p>An email is a single email sent to an individual user.</p>
        </td>
        <td>25,000</td>
        <td>100,000</td>
        <td>200,000</td>
        <td></td>
      </tr>
      <tr class="other">
        <td>
          <p><strong>Other cool stuff</strong></p>
        </td>
        <td></td>
        <td>
          <ul class="list-unstyled">
            <li></li>
            <li>A/B testing</li>
            <li>Unlimited environments</li>
          </ul>
        </td>
        <td>
          <ul class="list-unstyled">
            <li></li>
            <li>A/B testing</li>
            <li>Unlimited environments</li>
            <li>External attributes</li>
            <li>Phone support</li>
          </ul>
        </td>
        <td></td>
      </tr>
      <tr class="trial">
        <td></td>
        <td colspan="4">
          <a href="https://app.getvero.com/signup" class="btn btn-primary">Start your 14 day free trial</a>
          <p class="small">No credit card required. Test at any level.</p>
        </td>
      </tr>
      <tr class="high-availability">
        <td>
          <span>High availability</span>
          <p>Sending emails is serious business. Let us worry about ensuring your data is collected and your emails are sent.</p>
        </td>
        <td colspan="4">
          <span>99.99%</span>
          <p>See our <a href="http://status.getvero.com" target="blank">status page</a> for a transparent history of our uptime.</p>
        </td>
      </tr>
      <tr class="support">
        <td>
          <span>Support</span>
          <p>We are fully dedicated to helping your team integrate Vero and communicate with your customers better.</p>
        </td>
        <td colspan="4">
          <span>Email technical and marketing support</span>
          <p>Support, any time you need it.</p>
        </td>
      </tr>
      <tr class="team-collaboration">
        <td>
          <span>Team access</span>
          <p>We are fully dedicated to helping your team integrate Vero and communicate with your customers better.</p>
        </td>
        <td colspan="4">
          <span>Email technical and marketing support</span>
          <p>Support, any time you need it.</p>
        </td>
      </tr>
      <tr class="logs">
        <td>
          <span>Live-log stream</span>
          <p>A live, searchable logs of what your customers did, the emails they received, their interactions backed including copies of every email sent.</p>
        </td>
        <td colspan="4">
        <table>
          <tr>
            <td>
              <span>10</span>
              <p>days</p>
            </td>
            <td>
              <span>10</span>
              <p>days</p>
            </td>
            <td>
              <span>10</span>
              <p>days</p>
            </td>
          </tr>
          <td colspan="3">
            <p>We keep a full copy of all your data, which can be used for segmentation. Our live logs give you fast access to customer interactions.</p>
          </td>
        </table>
      </tr>
      <tr class="ips">
        <td>
          <span>Dedicated IPs (optional)</span>
          <p>Need dedicated IPs? No problem, we can scale with your needs</p>
        </td>
        <td colspan="4">
          <slider></slider>
          <p>Cost per IP is $60 / month</p>
        </td>
      </tr>
    </table>
  </section>


  <section id="enterprise">
    <table>
      <tr class="names">
        <th></th>
        <th>Enterprise 1</th>
        <th>Enterprise 2</th>
        <th>Enterprise 3</th>
        <th>Fully custom</th>
      </tr>
      <tr class="prices">
        <td></td>
        <td>$1,049</td>
        <td>$2,999</td>
        <td>$4,499</td>
        <td>Custom</td>
      </tr>
      <tr class="dedicated">
        <td>
          <span>Infrastructure</span>
          <p>Choose your own infrastructure as you need it for faster data processing and storage.</p>
        </td>
        <td>
          <span>Shared</span>
          Use our shared infrastructure at great rates.
        </td>
        <td>
          <span>64GB RAM</span>
          <p>400 GB SSD / 8 threads</p>
        </td>
        <td>
          <span>128GB RAM</span>
          <p>800 GB SSD / 12 threads</p>
        </td>
        <td>
          <span>Custom</span>
        </td>
      </tr>
      <tr class="subscribers">
        <td>
          <span>Subscribers</span>
          <p>We are fully dedicated to helping your team integrate Vero and communicate with your customers better.</p>
        </td>
        <td>
          <span>3,000,000 included</span>
          <p>$0.50 per 1,000 subscribers beyond this.</p>
        </td>
        <td colspan="3">
          <span>Unlimited</span>
        </td>
      </tr>   
      <tr class="emails">
        <td>
          <span>Emails per month</span>
          <p>We are fully dedicated to helping your team integrate Vero and communicate with your customers better.</p>
        </td>
        <td colspan="4">
          <span>5,000,000 included</span>
          <p>$0.12 per 1,000 emails beyond this.</p>
        </td>
      </tr>   
      <tr class="regions">
        <td>
          <span>Hosting regions</span>
          <p>Select from a number of hosted regions to ensure your data needs are met.</p>
        </td>
        <td colspan="4">
          <span>Available in 6 regions</span>
          <p>US East (Washington), US West (San Jose), Europe (France or Germany), Asia (Singapore, Hong Kong or Tokyo), India (New Delhi), Australia (Sydney), Canada (Montreal), South-America (Sao Paulo) or Russia (Moscow).</p>
        </td>
      </tr>
    </table>
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