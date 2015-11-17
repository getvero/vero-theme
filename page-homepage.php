<?php 
  include 'pages-shared/static-header.php';
?>

<section id="hero">
  <div class="content">
    <h1> <span class="emphesis emphesis-primary">Advanced Email<br></span> for <span class="emphesis emphesis-secondary">Product Companies</span></h1>
    <p>Get your messages past all the noise.<br/>Its time to make sure you're sending the <i>right</i> message, to the <i>right</i> people, at the <i>right</i> time.</p>
    <form class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Start your free trial">
    </form>
  </div>
  <div class="image">
    <img class="stick-right" src="/wp-content/themes/vero/assets/images/home/hero@2x.png"/>
  </div>
</section>
<section id="logos" class="full-width">
  <ul class="list-unstyled list-inline">
    <li><img src="/wp-content/themes/vero/assets/images/home/logos/pipedrive@2x.png" alt="Pipedrive"></li>
    <li><img src="/wp-content/themes/vero/assets/images/home/logos/freelancer@2x.png" alt="Freelancer"></li>
    <li><img src="/wp-content/themes/vero/assets/images/home/logos/oneill@2x.png" alt="O'Neill"></li>
    <li><img src="/wp-content/themes/vero/assets/images/home/logos/canva@2x.png" alt="Canva"></li>
    <li><img src="/wp-content/themes/vero/assets/images/home/logos/tidal@2x.png" alt="TIDAL"></li>
    <li><img src="/wp-content/themes/vero/assets/images/home/logos/aboutme@2x.png" alt="about.me"></li>
    <li><img src="/wp-content/themes/vero/assets/images/home/logos/sphero@2x.png" alt="Sphero"></li>
  </ul>
</section>
<section id="features-summary">
  <div class="inner center-text">
    <h5 class="section-label">What is Vero?</h5>
    <h2>Your single place to manage, test and send all your teams marketing or product emails</h2>
    <ul class="list-unstyled list-inline feature-list">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/feature-email.png"/>
        <h3 class="feature-title">Deliver useful email experiences</h3>
        <p class="feature-desc">Engage your customers with messages perfectly tailored to them beased on their activity in your application or on your website.</p>
        <a href="/features/email">Learn More</a>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/feature-target.png"/>
        <h3 class="feature-title">Intelligently target your customers</h3>
        <p class="feature-desc">Capture scattered meta data in one tool, not three or more, and segment in real time, using a visual rule builder.</p>
        <a href="/features/customers">Learn More</a>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/feature-data.png"/>
        <h3 class="feature-title">Spend less time in the code</h3>
        <p class="feature-desc">Track data accross any platform with Vero and empower your entire team with hassle free user insights and campaign creation.</p>
        <a href="/features/data">Learn More</a>
      </li>
    </ul>
  </div>
</section>
<section class="features" id="features-detail">
  <div class="feature">
    <div class="content">
      <h2>Email marketing meets CRM</h2>
      <p>Every customer has a central record in Vero. All of their data is stored and organised so you can email them like the <strong>people</strong> they are.</p>
      <a href="/features/customers">Find out more</a>
    </div>
    <div class="image">
      <img src="/wp-content/themes/vero/assets/images/home/feature-crm@2x.png"/>
    </div>
  </div>
  <div class="feature">
    <div class="content">
      <h2>Email marketing meets CRM</h2>
      <p>Whether you are a team of one or 300, managing your campaigns is no problem. Easily run all of your <strong>promotional</strong>, <strong>product</strong> and <strong>transactional</strong> emails in one place.</p>
      <a href="/features/email">Find out more</a>
    </div>
    <div class="image">
      <img class="stick-right" src="/wp-content/themes/vero/assets/images/home/feature-email-types@2x.png"/>
    </div>
  </div>
</section>
<section id="testimonial" class="full-width">
  <div class="inner">
    <img class="quote-logo" src="/wp-content/themes/vero/assets/images/home/company2x.png">
    <h1 class="quote">"This fit perfectly with my business and made us more money too!"</h1>
    <h4 class="quote-name">Jaimie Jameson</h4>
    <h5 class="quote-job-title">Marketing Manager</h5>
  </div>
</section>
<section id="blocks" class="full-width">
  <div class="support block">
    <h3>98.5% of customers love our support 100% of the time!</h3>
    <p><strong>24/7</strong>, mission critical, teams in in <strong>San Fransisco</strong> and <strong>Sydney</strong>. Enterprise support too.</p>
    <div class="btn btn-outline btn-warning">View the Help Docs</div>
  </div>
  <div class="developers block">
    <h3>A platform engineers can rely on</h3>
    <p>Reliable, API-based, gets out of your way and gives you the power to work like hundreds of businesses that  track <strong>1B+</strong> customer actions and send <strong>200M+</strong> emails sent every months. libraries in Ruby, Python and more. </p>
    <div class="btn btn-outline btn-warning">Read the API Docs</div>
  </div>
</section>
<section id="twitter">
  <div class="inner">
    <h5 class="section-label center-text">What people are saying about Vero</h5>
    <div class="tweet"></div>
    <div class="tweet"></div>
    <div class="tweet"></div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1>Send your first email today</h1>
    <p class="sub-heading">14 days free, send up to 2500 emails, no obligation</p>
    <p class="small">No credit card required</p>
    <form class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Start your free trial">
    </form>
  </div>
</section>
<?php 
  no_content_genesis_footer();
?>