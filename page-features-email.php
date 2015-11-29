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
    <h1 class="hero-title">Write, test and trigger <span class="emphesis emphesis-secondary">all</span> your emails in one place</h1>
<!--     <img class="bg1" src="/wp-content/themes/vero/assets/images/home/features/email/email-hero-bg@2x.png" width="605">
    <img class="bg2" src="/wp-content/themes/vero/assets/images/home/features/email/email-hero-bg@2x.png" width="605"> -->
    <img class="fore"src="/wp-content/themes/vero/assets/images/home/features/email/email-hero@2x.png">
  </div>
</section>
<section id="email-types">
  <div class="inner center-text">
    <ul class="unstyled-list inline-list feature-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-newsletters@2x.png" width="100" />
        <h4 class="feature-title">Newsletters</h4>
        <p class="feature-desc">Segment users on the fly, combine conditions and send your campaigns to the right customers – instantly, or at a scheduled time in the future.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-behavioural@2x.png" width="100" />
        <h4 class="feature-title">Behavioral</h4>
        <p class="feature-desc">Create simple or advanced workflows that are sent to your users automatically when they take actions and match conditions in real time.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-transactional@2x.png" width="100" />
        <h4 class="feature-title">Transactional</h4>
        <p class="feature-desc">Create and collaborate on email copy and templates in Vero and trigger and insert dynamic data into your emails using Vero's real time API.</p>
      </li>
    </ul>
  </div>
</section>
<section id="email-conditions" class="light-section">
  <div class="inner center-text">
    <h2>Visually configure when to trigger your campaigns</h2>
    <p>Stop email fatigue by targeting customers using detailed conditions including useful frequency filters. Deliver relevant emails to your customers and make sure they don’t get overlapping emails or more emails than you want.</p>
    
    <ul class="image bxslider">
      <li><img id="condition-image-1" src="/wp-content/themes/vero/assets/images/home/features/email/conditions/conditions-welcome@2x.png"></li>
      <li><img id="condition-image-1" src="/wp-content/themes/vero/assets/images/home/features/email/conditions/conditions-order@2x.png"></li>
      <li><img id="condition-image-1" src="/wp-content/themes/vero/assets/images/home/features/email/conditions/conditions-special@2x.png"></li>
      <li><img id="condition-image-1" src="/wp-content/themes/vero/assets/images/home/features/email/conditions/conditions-weekly@2x.png"></li>
    </ul>
  </div>
</section>
<section id="email-templates" class="dark-box">
  <div class="inner center-text">
    <h2>Everything your team needs to collaborate and create a consistent message, look and feel for every email</h1>
    <ul class="unstyled-list inline-list feature-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-templates@2x.png" height="310" />
        <h4 class="feature-title">All your templates in one place</h4>
        <p class="feature-desc">Upload your fully responsive email designs to your <strong>Template Gallery</strong> and use them in all your Newsletter, Behavioral and Transactional emails.</p>
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
    <h5 class="section-label center-text">It's the little things that matter</h5>
    <ul class="unstyled-list inline-list feature-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-abtesting@2x.png" width="100" />
        <h4 class="feature-title">A/B Test Your Messages</h4>
        <p class="feature-desc">Multi-variate test subjects, from addresses, content and templates across any email type, including automated workflows.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-drip@2x.png" width="100" />
        <h4 class="feature-title">Send Drip Campaigns</h4>
        <p class="feature-desc">Trigger series of emails when users take actions and meet conditions. Filter every email in your series with separate rules.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-reports@2x.png" width="100" />
        <h4 class="feature-title">Detailed Reporting</h4>
        <p class="feature-desc">Aggregate and day-by-day breakdowns of every email campaign sent through Vero. Vero plays nice with data warehouses too.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-timezones@2x.png" width="100" />
        <h4 class="feature-title">Easily Send In Timezones</h4>
        <p class="feature-desc">Vero automatically tracks and lets you target users' timezones with every send. Sync up with your customers' routines.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-conversion@2x.png" width="100" />
        <h4 class="feature-title">Track Conversion Events</h4>
        <p class="feature-desc">Every campaign in Vero has a conversion goal. Vero goes beyond the click and tracks the true success of each campaign.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email/email-behavioural@2x.png" width="100" />
        <h4 class="feature-title">Automate your Campaigns</h4>
        <p class="feature-desc">Be sophisticated and trigger advanced workflows using real time actions tracked from your application or website.</p>
      </li>
    </ul>
  </div>
</section>
<section id="people-case-study" class="case-study">
  <div class="inner">
    <div class="case-study-box">
      <h5 class="section-label">Customer Profile</h5>
      <h2 class="case-study-name">Daniel Black</h2>
      <h3 class="case-study-job-title">Marketing Manager</h3>
      <p class="case-study-desc">"Vero thinks about email in an exciting way and enables us to create and manage our email content in one place like we haven't been able to before. It's the centre of our email nervous system."</p>
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
    <p class="sub-heading">No contracts to lock you in, only pay when you start sending live emails</p>
    <form class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Create your account">
    </form>
    <p class="small">No credit card required</p>
  </div>
</section>
<?php 
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>