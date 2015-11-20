<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="data-hero">
  <div class="inner center-text">
    <h1>An API-Driven platform built with engineers in mind</h1>
    <p>“Do we have to install another marketing tool?” is a common refrain in most product teams. Vero is built for scale on top of an open API that empowers engineers to work more efficiently, not to fight with marketing and re-invent the wheel with every email send.</p>
    <div class="content">
      <h4>Install on any code base</h4>
      <p>We have libraries for almost every platform, There are even third party ones you can use. Check out our Developer Portal.</p>
      <ul class="unstyled-list inline-list">
        <li>
          <img src="#">
          <p>Javascript</p>
        </li>
        <li>
          <img src="#">
          <p>Ruby</p>
        </li>
        <li>
          <img src="#">
          <p>PHP</p>
        </li>
        <li>
          <img src="#">
          <p>Python</p>
        </li>
        <li>
          <img src="#">
          <p>NodeJS</p>
        </li>
        <li>
          <img src="#">
          <p>iOS</p>
        </li>
      </ul>
    </div>
    <div class="image">
      <img src="#" width="500">
    </div>
  </div>
</section>
<section id="data-integrations">
  <div class="inner center-text">
    <h2>Works with the tools you already use</h2>
    <ul class="unstyled-list inline-list feature-list thirds">
      <li class="hover-box">
        <img src="/wp-content/themes/vero/assets/images/home/feature-email2@2x.png" width="180" />
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li class="hover-box">
        <img src="/wp-content/themes/vero/assets/images/home/feature-email2@2x.png" width="180" />
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li class="hover-box">
        <img src="/wp-content/themes/vero/assets/images/home/feature-email2@2x.png" width="180" />
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li class="hover-box">
        <img src="/wp-content/themes/vero/assets/images/home/feature-email2@2x.png" width="180" />
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li class="hover-box">
        <img src="/wp-content/themes/vero/assets/images/home/feature-email2@2x.png" width="180" />
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li class="hover-box">
        <img src="/wp-content/themes/vero/assets/images/home/feature-email2@2x.png" width="180" />
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
    </ul>
  </div>
</section>
<section id="data-logs" class="dark-box">
  <div class="inner center-text">
    <h2>See every single tracked event or activity, live</h1>
    <p>With logs, you get a running commentary of every user event, email sent, delivery or segment change, so you can see every customer interaction from their perpective.</p>
    <img src="#">
  </div>
</section>
<section id="data-features">
  <div class="inner center-text">
    <h5 class="section-label center-text">You're in control</h5>
    <ul class="unstyled-list inline-list feature-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/feature-email2@2x.png" width="180" />
        <h4 class="feature-title">Track Any Event Big or Small</h4>
        <p class="feature-desc">Track data accross any platform with Vero and empower your entire team with hassle free user insights and campaign creation.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/feature-email2@2x.png" width="180" />
        <h4 class="feature-title">Forward Your Data with Webhooks</h4>
        <p class="feature-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel sodales diam, a sodales diam. Sed gravid.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/feature-email2@2x.png" width="180" />
        <h4 class="feature-title">Import historical data via CSV</h4>
        <p class="feature-desc">Hit the ground running by importing all your historical event and customer data using the CSV importer.</p>
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