<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features feature-people';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
  include 'pages-shared/feature-menu.php';
?>
<section id="people-hero" class="hero">
  <div class="inner center-text">
    <h1 class="hero-title">Collect and organise customer data from multiple sources so you can send emails that resonate.</h1>
    <img src="/wp-content/themes/vero/assets/images/home/features/people/people-hero@2x.png" width="900">
  </div>
</section>
<section id="people-summary">
  <div class="inner center-text">
    <p class="large">Sending useful emails is tricky if all of your customer data is in multiple systems. Vero helps you move away from CSV imports and overlapping static email marketing lists by creating and caching an individual profile for each customer. By gathering data as they engage with your application, you will always have an up to date profile for each of your customers.</p>
    <ul class="unstyled-list inline-list feature-list halfs">
      <li>
        <h4 class="feature-title">Store all your user data</h4>
        <p class="feature-desc">Store unlimited custom user properties for any or all of your users. From <code>age</code> and <code>first name</code> to <code>lifetime_value</code> and <code>timezone</code>, Vero enables you to update and append customer records for better segmentation.</p>
      </li>
      <li>
        <h4 class="feature-title">Full history of tracked events &amp; actions</h4>
        <p class="feature-desc">Track real time actions as they happen using Vero's API and libraries. Track what users do in your application, on your website, or in other systems. Vero collates this time series data and empowers you to query it in real time.</p>
      </li>
    </ul>
  </div>
</section>
<section id="people-segments">
  <div class="inner center-text">
    <h2>Create segments of users based on <span class="strikethrough">spending history, age, language</span> anything</h2>
    <p>Vero’s powerful segmentation lets you create dynamic lists for any type of customer based on their properties and event history. Segments are updated in real time, so you can feel confident that your emails will always going to the right customers.</p>
    <div class="content">
      <ul class="unstyled-list inline-list">
        <li>Fans of JayZ</li>
        <li>Active Customers</li>
        <li>Users in America</li>
      </ul>
    </div>
    <div class="image bxslider">
      <img id="condition-image-1" src="#" width="500">
      <img id="condition-image-1" src="#" width="500">
      <img id="condition-image-1" src="#" width="500">
    </div>
  </div>
</section>
<section id="people-features">
  <div class="inner center-text">
    <h5 class="section-label center-text">Tools to help you be more relevant</h5>
    <ul class="unstyled-list inline-list feature-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/people/people-unlimited@2x.png" width="100" />
        <h4 class="feature-title">Unlimited Storage</h4>
        <p class="feature-desc">We don't charge you for tracking data in Vero. Track as many users and as many actions as you want every month. From one to 1 billion, we've got you covered.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/people/people-tags@2x.png" width="100" />
        <h4 class="feature-title">Extra Control with Custom Tags</h4>
        <p class="feature-desc">When properties and actions can't get the job, you can manually tag users one user at a time, or via a batch import to send to a set, static group of customers.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/people/people-importexport@2x.png" width="100" />
        <h4 class="feature-title">Import and Export Your Data</h4>
        <p class="feature-desc">We believe data is power. You can export customers in any segment, at any time and add user properties and action history to Vero using CSV imports.</p>
      </li>
    </ul>
  </div>
</section>
<section id="people-case-study" class="case-study">
  <div class="inner">
    <div class="case-study-box">
      <h5 class="section-label">Customer Profile</h5>
      <h2 class="case-study-name">Michał Pękała</h2>
      <h3 class="case-study-job-title">VP Growth</h3>
      <p class="case-study-desc">"Vero helps us keep the customer data we want to use to personalize our emails in one place – organised and collaborative.  From custom newsletters to transactional emails, Vero continually helps us do more."</p>
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