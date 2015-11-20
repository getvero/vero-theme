<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="email-hero">
  <div class="inner center-text">
    <h1>Write, Test and Trigger <span class="emphesis emphesis-secondary">all</span> your emails in one place</h1>
    <img src="/wp-content/themes/vero/assets/images/home/email-hero@2x.png" width="830">
    <ul class="unstyled-list inline-list feature-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email-newsletters@2x.png" width="100" />
        <h4 class="feature-title">Newsletters</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email-behavioural@2x.png" width="100" />
        <h4 class="feature-title">Behavioral</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email-transactional@2x.png" width="100" />
        <h4 class="feature-title">Transactional</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
    </ul>
  </div>
</section>
<section id="email-conditions">
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
        <img src="/wp-content/themes/vero/assets/images/home/features/email-templates@2x.png" width="334" />
        <h4 class="feature-title">All your templates in one place</h4>
        <p class="feature-desc">Upload your hand crafted email designs or create new ones from scratch with the <strong>Email Editor</strong>.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email-liquid@2x.png" width="334" />
        <h4 class="feature-title">Personalize emails with Liquid</h4>
        <p class="feature-desc">With <strong>Liquid Tags</strong> you can personalise every email by dynamically adding  customer properties.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email-editable@2x.png" width="334" />
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
        <img src="/wp-content/themes/vero/assets/images/home/features/email-abtesting@2x.png" width="100" />
        <h4 class="feature-title">A/B Test Your Messages</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email-drip@2x.png" width="100" />
        <h4 class="feature-title">Send Drip Campaigns</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email-reports@2x.png" width="100" />
        <h4 class="feature-title">Detailed Reporting</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email-timezones@2x.png" width="100" />
        <h4 class="feature-title">Easily Manage Timezones</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email-conversion@2x.png" width="100" />
        <h4 class="feature-title">Track Conversion Events</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/email-behavioural@2x.png" width="100" />
        <h4 class="feature-title">Automate your Campaigns</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
    </ul>
  </div>
</section>
<section id="email-case-study" class="case-study">
  <div class="inner full-width">
    <div class="case-study-box">
      <img src="/wp-content/themes/vero/assets/images/home/case-study-tidal-logo@2x.png" width="100" class="case-study-logo">
      <h2 class="case-study-name">Eskild Høgsted</h2>
      <h3 class="case-study-job-title">Head of CRM</h3>
      <p class="case-study-desc">Eskild, from TIDAL uses Vero to manage CRM with emails created by two teams accross the atlantic. With over <strong>1 Million emails sent every week</strong>, Eskild can’t imagine a world without Vero.</p>
      <a href="#" title="Read more about how TIDAL uses Vero">Read more about how TIDAL uses Vero</a>
    </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner center-text">
    <h1 class="cta-title">Send your first email today</h1>
    <h3 class="sub-heading">14 days free, send up to 2500 emails, no obligation</h3>
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