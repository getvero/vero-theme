<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features feature-email';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
  include 'pages-shared/feature-menu.php';
?>

<section id="email-hero" class="hero">
  <div class="inner center-text">
    <h1 class="hero-title">Write, Test and Trigger <span class="emphesis emphesis-secondary">all</span> your emails in one place</h1>
<!--     <img class="bg1" src="/wp-content/themes/vero/assets/images/home/features/email/email-hero-bg@2x.png" width="605">
    <img class="bg2" src="/wp-content/themes/vero/assets/images/home/features/email/email-hero-bg@2x.png" width="605"> -->
    <img class="fore"src="/wp-content/themes/vero/assets/images/home/features/email/email-hero@2x.png" width="830">
  </div>
</section>
<section id="email-types">
  <div class="inner center-text">
    <ul class="unstyled-list inline-list feature-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-newsletters@2x.png" width="100" />
        <h4 class="feature-title">Newsletters</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-behavioural@2x.png" width="100" />
        <h4 class="feature-title">Behavioral</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-transactional@2x.png" width="100" />
        <h4 class="feature-title">Transactional</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
    </ul>
  </div>
</section>
<section id="email-conditions" class="light-section">
  <div class="inner center-text">
    <h2>Visually configure when to trigger your campaigns</h2>
    <p>Stop email fatigue with useful frequency filters and targeting conditions. Make sure your customers don’t get overlapping emails or more emails than they should. Deliver the right email to the right customer.</p>
    <div class="content">
      <ul class="unstyled-list">
        <li>
          <h5>Onboarding Welcome Email</h5>
          <p>Welcome your users after they've signed up</p>
        </li>
        <li>
          <h5>Onboarding Welcome Email</h5>
          <p>Welcome your users after they've signed up</p>
        </li>
        <li>
          <h5>Onboarding Welcome Email</h5>
          <p>Welcome your users after they've signed up</p>
        </li>
        <li>
          <h5>Onboarding Welcome Email</h5>
          <p>Welcome your users after they've signed up</p>
        </li>
      </ul>
    </div>
    <div class="image">
      <img id="condition-image-1" src="#" width="500">
      <img id="condition-image-1" src="#" width="500">
      <img id="condition-image-1" src="#" width="500">
      <img id="condition-image-1" src="#" width="500">
    </div>
  </div>
</section>
<section id="email-templates" class="dark-box">
  <div class="inner center-text">
    <h2>Everything your team needs to ensure consistent look, feel and content of every email</h1>
    <ul class="unstyled-list inline-list feature-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-templates@2x.png" height="310" />
        <h4 class="feature-title">All your templates in one place</h4>
        <p class="feature-desc">Upload your hand crafted email designs or create new ones from scratch with the <strong>Email Editor</strong>.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-liquid@2x.png" height="310" />
        <h4 class="feature-title">Personalize emails with Liquid</h4>
        <p class="feature-desc">With <strong>Liquid Tags</strong> you can personalise every email by dynamically adding  customer properties.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-editable@2x.png" height="310" />
        <h4 class="feature-title">Easily edit template content</h4>
        <p class="feature-desc">Setup your emails to use <strong>Editable Tags</strong> and the whole team can edit email content without touching the HTML.</p>
      </li>
    </ul>
  </div>
</section>
<section id="email-features">
  <div class="inner center-text">
    <h5 class="section-label center-text">Everything you need to send truely awesome campaigns</h5>
    <ul class="unstyled-list inline-list feature-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-abtesting@2x.png" width="100" />
        <h4 class="feature-title">A/B Test Your Messages</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-drip@2x.png" width="100" />
        <h4 class="feature-title">Send Drip Campaigns</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-reports@2x.png" width="100" />
        <h4 class="feature-title">Detailed Reporting</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-timezones@2x.png" width="100" />
        <h4 class="feature-title">Easily Manage Timezones</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-conversion@2x.png" width="100" />
        <h4 class="feature-title">Track Conversion Events</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-behavioural@2x.png" width="100" />
        <h4 class="feature-title">Automate your Campaigns</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
    </ul>
  </div>
</section>
<section id="people-case-study" class="case-study">
  <div class="inner">
    <div class="case-study-box">
      <h5 class="section-label">Customer Profile</h5>
      <h2 class="case-study-name">Some Guy</h2>
      <h3 class="case-study-job-title">Marketing Manager</h3>
      <p class="case-study-desc">BeenVerified store onsite activity, email interactions and backend user data in Vero so that everyone on their team can use it at any time.</p>
      <img src="/wp-content/themes/vero/assets/images/home/features/people/bv-logo@2x.png" width="234" class="case-study-logo">
    </div>
    <div class="case-study-image">
      <img src="/wp-content/themes/vero/assets/images/home/features/people/beenverified-photo@2x.png">
    </div>
  </div>
</section>

<?php include 'pages-shared/feature-menu.php'; ?>

<section id="call-to-action" class="center-text">
  <div class="inner center-text">
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
  add_page_tracking_code("ProductPage");
?>