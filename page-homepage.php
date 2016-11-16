<?php
  include 'pages-shared/static-header.php';
?>

<section id="hero" class="hero double-padding">
  <?php
  do_action( 'genesis_before_header' );
  do_action( 'genesis_header' );
  do_action( 'genesis_after_header' );
?>
  <div class="inner flush-bottom">
    <div class="content">
      <h1 class="chunk">An event driven email platform<br/> for your whole team</h1>
      <p class="medium right-padding-large">Put your customer data first and enable your whole organisation<br/> to take customer interactions to their fullest potential.</p>
     <form action="https://app.getvero.com/pre_signups" method='post' class="horizontal-form top-margin-medium">
        <input class="form-control" type="email" placeholder="Email Address" name="email">
        <input class="btn btn-primary" type="submit" value="Get Started">
      </form>
      <p class="small light faded">No credit card required, only pay when your first campaign is live</p>
    </div>
    <div class="image">
      <img src="/wp-content/themes/vero/assets/images/home/home-hero.svg"/>
    </div>
  </div>
</section>
<section id="logos">
  <div class="inner full-width center-text">
    <p class="regular faded no-margin">Our customers use Vero to build the products experiences of the future</p>
    <ul class="unstyled-list inline-list">
      <!-- <li class="logo pipedrive"><img src="/wp-content/themes/vero/assets/images/home/logos/pipedrive@2x.png" alt="Pipedrive"></li> -->
      <li class="logo canva"><img src="/wp-content/themes/vero/assets/images/home/logos/home-canva.png" srcset="/wp-content/themes/vero/assets/images/home/logos/home-canva@2x.png 2x" alt="Canva" height="76"></li>
      <li class="logo freelancer"><img src="/wp-content/themes/vero/assets/images/home/logos/home-freelancer.png" srcset="/wp-content/themes/vero/assets/images/home/logos/home-freelancer@2x.png 2x" alt="Freelancer" height="76"></li>
      <li class="logo sphero"><img src="/wp-content/themes/vero/assets/images/home/logos/home-sitepoint.png" srcset="/wp-content/themes/vero/assets/images/home/logos/home-sitepoint@2x.png 2x" alt="Sitepoint" height="76"></li>
      <li class="logo alexa"><img src="/wp-content/themes/vero/assets/images/home/logos/home-alexa.png" srcset="/wp-content/themes/vero/assets/images/home/logos/home-alexa@2x.png 2x" alt="Alexa" height="76"></li>
      <li class="logo aboutme"><img src="/wp-content/themes/vero/assets/images/home/logos/home-aboutme.png" srcset="/wp-content/themes/vero/assets/images/home/logos/home-aboutme@2x.png 2x" alt="about.me" height="76"></li>
      <li class="logo oneill"><img src="/wp-content/themes/vero/assets/images/home/logos/home-oneill.png" srcset="/wp-content/themes/vero/assets/images/home/logos/home-oneill@2x.png 2x" alt="O'Neill" height="76"></li>
      <li class="logo sphero"><img src="/wp-content/themes/vero/assets/images/home/logos/home-sphero.png" srcset="/wp-content/themes/vero/assets/images/home/logos/home-sphero@2x.png 2x" alt="Sphero" height="76"></li>
    </ul>
    <!-- <p class="no-margin"><a href="/customers">See how they use Vero</a></p> -->
  </div>
</section>
<section id="features-summary" class="border-bottom">
  <div class="inner center-text">
    <h1 class="no-bottom-margin">The data-first way to manage your email experiences</h1>
    <p class="medium">Follow a simple but powerful methodology for off site customer interactions</p>
    <div class="methodology">
      <div class="dotted-line"></div>
      <ul class="feature-list full-width fourths">
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/home-capture.svg">
          <p class="semi-bold">Capture customer data & events</p>
          <p class="light">Track and store your event stream in real time using our API and Segment integration.</p>
        </li>
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/home-model.svg">
          <p class="semi-bold">Model your customer data</p>
          <p class="light">Enable your entire team to model your event data and generate segments without touching code.</p>
        </li>
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/home-manage.svg">
          <p class="semi-bold">Manage your email workflows</p>
          <p class="light">Craft the timing and filtering of your emails, collaborate on content and design robust email campaigns.</p>
        </li>
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/home-deploy.svg">
          <p class="semi-bold">Deploy to Sendgrid, Mailgun & more</p>
          <p class="light">Deploy your content and email schedule to 100+ million customers using your choice of email delivery platforms.</p>
        </li>
      </ul>
    </div>
    <p class="medium"><a href="/features/email">Find out more</a></p>
  </div>
</section>
<section id="benefits">
  <div class="inner center-text">
    <h1 class="no-bottom-margin">Built for teams who put their product first</h1>
    <p class="medium">Vero encourages a <span class="semi-bold">collaborative</span> deployment process that enables <span class="semi-bold">teams</span> to move together to create interactions that are <span class="semi-bold">reliable</span>.</p>
    <ul class="feature-list full-width thirds">
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/home-data-first.png" srcset="/wp-content/themes/vero/assets/images/home/home-data-first@2x.png 2x">
          <p class="semi-bold">Capture customer data & events</p>
          <p class="light">Track and store your event stream in real time using our API and Segment integration.</p>
        </li>
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/home-organisation.png" srcset="/wp-content/themes/vero/assets/images/home/home-organisation@2x.png 2x">
          <p class="semi-bold">Model your customer data</p>
          <p class="light">Enable your entire team to model your event data and generate segments without touching code.</p>
        </li>
        <li>
          <img src="/wp-content/themes/vero/assets/images/home/home-modern-stack.png" srcset="/wp-content/themes/vero/assets/images/home/home-modern-stack@2x.png 2x">
          <p class="semi-bold">Manage your email workflows</p>
          <p class="light">Craft the timing and filtering of your emails, collaborate on content and design robust email campaigns.</p>
        </li>
      </ul>
  </div>
</section>
<section id="testimonial">
  <div class="inner center-text">
    <img class="quote-logo" src="/wp-content/themes/vero/assets/images/home/company-logo-canva.png" srcset="/wp-content/themes/vero/assets/images/home/company-logo-canva@2x.png 2x" width="106">
    <blockquote class="quote">&ldquo;Vero is the centre of our personalised product and marketing email campaigns.&rdquo;</blockquote>
    <h4 class="quote-name">Kris Howard</h4>
    <h5 class="quote-job-title">Engineering Coordinator and Developer Relations</h5>
  </div>
</section>
<section id="blocks">
  <div class="support block center-text">
    <div class="inner-block">
      <h3 class="block-title">98.5% of the time, our customers love our support every time!</h3>
      <p class="block-desc">Email is mission critical. With team members spread around the world, Vero offers fast, reliable support <strong>24/7</strong> – we're real humans.</p>
      <a href="http://help.getvero.com" target="_blank" class="btn btn-outline btn-warning">View the Help Docs</a>
    </div>
  </div>
  <div class="developers block center-text">
    <div class="inner-block">
      <h3 class="block-title">A platform engineers can rely on</h3>
      <p class="block-desc">Reliable and built around an API, Vero gets out of your way and gives you the power to work like the hundreds of other businesses that track <strong>1B+</strong> customer actions and send <strong>200M+</strong> emails every month using Vero. Libraries in Ruby, Python and more. </p>
      <a href="http://developers.getvero.com" target="_blank" class="btn btn-primary btn-outline">Read the API Docs</a>
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
?>
