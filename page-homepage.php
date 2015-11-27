<?php 
  include 'pages-shared/static-header.php';
?>

<section id="hero" class="hero">
  <?php 
  do_action( 'genesis_before_header' );
  do_action( 'genesis_header' );
  do_action( 'genesis_after_header' );
?>
  <div class="inner clean-padding">
    <div class="content center-text">
      <h1>The <span class="emphesis emphesis-primary">Email Platform</span> for <span class="emphesis emphesis-secondary"> smart B2C Businesses</span></h1>
<!--       <p>Get your messages past all the noise. Its time to make sure you're sending the <strong>right</strong> message, to the <strong>right</strong> people, at the <strong>right</strong> time.</p>
 -->     <form class="horizontal-signup-form">
        <input class="form-control" type="email" placeholder="Email Address" name="email">
        <input class="btn btn-success" type="submit" value="Start your free trial">
      </form>
      <p class="small">No credit card required</p>
    </div>
    <div class="image center-text">
      <img class="stick-right" src="/wp-content/themes/vero/assets/images/home/hero@2x.png"/>
    </div>
  </div>
</section>
<section id="logos">
  <div class="inner clean-padding full-width">
    <ul class="unstyled-list inline-list">
      <!-- <li class="logo pipedrive"><img src="/wp-content/themes/vero/assets/images/home/logos/pipedrive@2x.png" alt="Pipedrive"></li> -->
      <li class="logo freelancer"><img src="/wp-content/themes/vero/assets/images/home/logos/pricing-freelancer@2x.png" alt="Freelancer" width="130"></li>
      <li class="logo oneill"><img src="/wp-content/themes/vero/assets/images/home/logos/pricing-oneill@2x.png" alt="O'Neill" width="130"></li>
      <li class="logo canva"><img src="/wp-content/themes/vero/assets/images/home/logos/pricing-canva@2x.png" alt="Canva" width="130"></li>
      <li class="logo tidal"><img src="/wp-content/themes/vero/assets/images/home/logos/pricing-tidal@2x.png" alt="TIDAL" width="130"></li>
      <li class="logo aboutme"><img src="/wp-content/themes/vero/assets/images/home/logos/pricing-aboutme@2x.png" alt="about.me" width="130"></li>
      <li class="logo sphero"><img src="/wp-content/themes/vero/assets/images/home/logos/pricing-sphero@2x.png" alt="Sphero" width="130"></li>
      <li class="logo sphero"><img src="/wp-content/themes/vero/assets/images/home/logos/pricing-sitepoint@2x.png" alt="Sitepoint" width="130"></li>
    </ul>
  </div>
</section>
<section id="features-summary">
  <div class="inner center-text">
    <h5 class="section-label">What is Vero?</h5>
    <h2>Your single place to manage, test and send all your teams marketing or product emails</h2>
    <ul class="unstyled-list inline-list feature-list thirds flex">
      <li class="hover-box">
        <div class="list-inner">
          <img src="/wp-content/themes/vero/assets/images/home/feature-email@2x.png" width="180" />
          <h4 class="feature-title">Deliver useful email experiences</h4>
          <p class="feature-desc">Engage your customers with messages perfectly tailored to them beased on their activity in your application or on your website.</p>
          <a href="/features-email">Learn More</a>
        </div>
      </li>
      <li class="hover-box">
        <div class="list-inner">
          <img src="/wp-content/themes/vero/assets/images/home/feature-target@2x.png" width="180"/>
          <h4 class="feature-title">Intelligently target your customers</h4>
          <p class="feature-desc">Capture scattered meta data in one tool, not three or more, and segment in real time, using a visual rule builder.</p>
          <a href="/features-people">Learn More</a>
        </div>
      </li>
      <li class="hover-box">
        <div class="list-inner">
          <img src="/wp-content/themes/vero/assets/images/home/feature-data@2x.png" width="180"/>
          <h4 class="feature-title">Spend less time in the code</h4>
          <p class="feature-desc">Track data accross any platform with Vero and empower your entire team with hassle free user insights and campaign creation.</p>
          <a href="/features-data">Learn More</a>
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="feature light-section" id="feature-crm">
  <div class="inner">
    <div class="content">
      <h2>Email marketing meets CRM</h2>
      <p>Every customer has a central record in Vero. All of their data is stored and organised so you treat everyone like the <strong>real people</strong> they are.</p>
      <a href="/features/customers">Find out more</a>
    </div>
    <div class="image">
      <img src="/wp-content/themes/vero/assets/images/home/feature-crm@2x.png" width="471"/>
    </div>
  </div>
</section>
<section class="feature" id="feature-email-types">
  <div class="inner">
    <div class="content">
      <h2>No-limit emails for the whole team</h2>
      <p>Whether you are a team of one or 300, managing your campaigns is no problem. Easily run all of your <strong>promotional</strong>, <strong>product</strong> and <strong>transactional</strong> emails in one place.</p>
      <a href="/features/email">Find out more</a>
    </div>
    <div class="image">
      <img class="stick-right" src="/wp-content/themes/vero/assets/images/home/feature-email-types@2x.png" width="578"/>
    </div>
  </div>
</section>
<section id="testimonial">
  <div class="inner center-text">
    <img class="quote-logo" src="/wp-content/themes/vero/assets/images/home/company-logo@2x.png" width="180">
    <blockquote class="quote">&ldquo;This fit perfectly with my business and made us more money too!&rdquo;</blockquote> 
    <h4 class="quote-name">Jaimie Jameson</h4>
    <h5 class="quote-job-title">Marketing Manager</h5>
  </div>
</section>
<section id="blocks">
  <div class="support block center-text">
    <div class="inner-block">
      <h3 class="block-title">98.5% of customers love our support 100% of the time!</h3>
      <p class="block-desc"><strong>24/7</strong>, mission critical, teams in in <strong>San Fransisco</strong> and <strong>Sydney</strong>. Enterprise support too.</p>
      <div class="btn btn-outline btn-warning">View the Help Docs</div>
    </div>
  </div>
  <div class="developers block center-text">
    <div class="inner-block">
      <h3 class="block-title">A platform engineers can rely on</h3>
      <p class="block-desc">Reliable, API-based, gets out of your way and gives you the power to work like hundreds of businesses that  track <strong>1B+</strong> customer actions and send <strong>200M+</strong> emails sent every months. libraries in Ruby, Python and more. </p>
      <div class="btn btn-primary btn-outline">Read the API Docs</div>
    </div>
  </div>
</section>
<section id="twitter">
  <div class="inner">
      <h5 class="section-label center-text">What people are saying about Vero</h5>
      <div class="tweet">
        <blockquote class="twitter-tweet tw-align-center" lang="en"><p lang="en" dir="ltr">Looking for a new <a href="https://twitter.com/hashtag/email?src=hash">#email</a> client? <a href="https://twitter.com/getvero">@getvero</a> is the bees knees. Co-founder <a href="https://twitter.com/chexton">@chexton</a> delivers a new standard for quality and customer service.</p>&mdash; Paris Rouzati (@parisrouz) <a href="https://twitter.com/parisrouz/status/593558485087846400">April 29, 2015</a></blockquote>
      </div>
      <div class="tweet">
        <blockquote class="twitter-tweet tw-align-center" lang="en"><p lang="en" dir="ltr"><a href="https://twitter.com/veroapp">@veroapp</a> is like being a kid in a candy shop for email marketing!</p>&mdash; Sana N Choudary (@SanaOnGames) <a href="https://twitter.com/SanaOnGames/status/509888242619924481">September 11, 2014</a></blockquote>
      </div>
      <div class="tweet">
        <blockquote class="twitter-tweet tw-align-center" lang="en"><p lang="en" dir="ltr">Just sent an email to the <a href="https://twitter.com/getvero">@getvero</a> team that started with &quot;omg&quot; and ended with &quot;thank you thank you thank you&quot;. They are my favourite.</p>&mdash; Ophelie Lechat (@OphelieLechat) <a href="https://twitter.com/OphelieLechat/status/646560855128080384">September 23, 2015</a></blockquote>
      </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title">Send your first email today</h1>
    <p class="sub-heading">14 days free, send up to 2500 emails, no obligation</p>
    <form class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Start your free trial">
    </form>
    <p class="small">No credit card required</p>
  </div>
</section>
<?php 
  no_content_genesis_footer();
?>