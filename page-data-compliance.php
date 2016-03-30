<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'landing landing-data-compliance';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="data-compliance-hero" class="hero border-bottom flush-bottom">
  <div class="inner center-text">
    <h1>Go local. Host your data wherever you need.</h1>
    <p>The cost of compliance is higher than ever. Vero Local helps you stay compliant, for less.</p>
    <img class="center-block" src="/wp-content/themes/vero/assets/images/landing-pages/data-compliance/data-compliance-hero.svg">
  </div>
</section>
<section id="data-compliance-stats" class="dark-box">
  <div class="inner">
    <h2 class="center-text">More than qualified to manage your data on a global scale</h2>
    <ul class="feature-list unstyled-list thirds">
      <li>
        <h1 class="biggie">300M</h1>
        <h4 class="feature-title">Emails sent p/m</h4>
        <p class="feature-desc">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
      </li>
      <li>
        <h1 class="biggie"class="">10B+</h1>
        <h4 class="feature-title">Data points captured p/m</h4>
        <p class="feature-desc">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
      </li>
      <li>
        <h1 class="biggie">300+</h1>
        <h4 class="feature-title">Enterprise customers, globally</h4>
        <p class="feature-desc">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
      </li>
    </ul>
  </div>
</section>
<section id="data-compliance-regions" class="center-text border-bottom">
  <div class="inner center-text">
    <h2>Where does your data need to be?</h2>
    <p>By default, Vero stores all your data in the USA, to comply with your local data laws, you may need to chose a different location to store your data. Pick from the data storage locations below.</p>
    <ul class="region-enquire-list feature-list unstyled-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/landing-pages/data-compliance/north-america.svg" class="background-map">
        <div class="region-deets">
          <h3>North America</h3>
          <p class="regions-deets">N. Virginia, N. California, Oregon</p>
          <a href="" class="btn btn-success">Enquire</a>
        </div>
      </li>
      <li>
        <div class="region-deets">
          <h3>Europe</h3>
          <p class="regions-deets">Ireland, Frankfurt</p>
          <a href="" class="btn btn-success">Enquire</a>
        </div>
        <img src="/wp-content/themes/vero/assets/images/landing-pages/data-compliance/europe.svg" class="background-map">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/landing-pages/data-compliance/asia-pacific.svg" class="background-map">
        <div class="region-deets">
          <h3>Asia / Asia Pacific</h3>
          <p class="regions-deets">Beijing, Seoul, Tokyo, Singapore, Sydney</p>
          <a href="" class="btn btn-success">Enquire</a>
        </div>
      </li>
    </ul>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>
