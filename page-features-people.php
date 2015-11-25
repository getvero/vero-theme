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
    <h1 class="hero-title">Get to know your customers so you can send them useful, targeted content they’l love.</h1>
    <img src="/wp-content/themes/vero/assets/images/home/features/people/people-hero@2x.png" width="900">
  </div>
</section>
<section id="people-summary">
  <div class="inner center-text">
    <p class="large">Sending useful emails can be tricky if all of your customer data is in multiple systems. Vero helps you move away from troublesome static lists by building an individual profile for each person. By gathering data as they engage with your application, you will always have an accurate and up to date profile for each of your customers.</p>
    <ul class="unstyled-list inline-list feature-list halfs">
      <li>
        <h4 class="feature-title">Store Any Kind of User Data</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <h4 class="feature-title">Full history of tracked events &amp; actions</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
    </ul>
  </div>
</section>
<section id="people-segments">
  <div class="inner center-text">
    <h2>Create segments of users based on <span class="strikethrough">action, demographic, language</span>  anything</h2>
    <p>Vero’s powerful segmentation lets you create dynamic lists for any type of customer. Segments are constantly updated so you can feel confident that your emails are always going to the right customers.</p>
    <div class="content">
      <ul class="unstyled-list inline-list">
        <li>Fans of JayZ</li>
        <li>Active Customers</li>
        <li>Users in America</li>
      </ul>
    </div>
    <div class="image">
      <img id="condition-image-1" src="#" width="500">
      <img id="condition-image-1" src="#" width="500">
      <img id="condition-image-1" src="#" width="500">
    </div>
  </div>
</section>
<section id="people-features">
  <div class="inner center-text">
    <h5 class="section-label center-text">And more...</h5>
    <ul class="unstyled-list inline-list feature-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/people/people-unlimited@2x.png" width="100" />
        <h4 class="feature-title">Unlimited Storage</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/people/people-tags@2x.png" width="100" />
        <h4 class="feature-title">Extra Control with Custom Tags</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/features/people/people-importexport@2x.png" width="100" />
        <h4 class="feature-title">Import and Export Your Data</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
    </ul>
  </div>
</section>
<section id="people-case-study" class="case-study">
  <div class="inner full-width">
    <div class="case-study-box">
      <img src="/wp-content/themes/vero/assets/images/home/case-study-tidal-logo@2x.png" width="100" class="case-study-logo">
      <h2 class="case-study-name">Some Guy</h2>
      <h3 class="case-study-job-title">Marketing Manager</h3>
      <p class="case-study-desc">BeenVerified store onsite activity, email interactions and backend user data in Vero so that everyone on their team can use it at any time.</p>
      <a href="#" title="Read more about how BeenVerified uses Vero">Read more about how BeenVerified uses Vero</a>
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