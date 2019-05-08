<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'landing landing-data-compliance';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="data-compliance-hero" class="hero border-bottom-light">
  <div class="inner center-text flush-bottom">
    <h1>Go local. Host your data where you need to.</h1>
    <p>The world has gone global and your business has to move fast to keep up.<br><em>Vero Local</em> gives you peace of mind and helps you stay compliant with the data laws in your region.</p>
    <img class="center-block" src="/wp-content/themes/vero/assets/dist/images/landing-pages/data-compliance/data-compliance-hero.svg">
  </div>
</section>
<section id="data-compliance-why" class="hero border-bottom-light">
  <div class="inner center-text">
    <h1>Peace of mind now and in the future</h1>
    <p>North America, The European Economic Area, Australia and China all have unique and nuanced data requirements. Vero helps you store realtime data about your customers and their actions on an ongoing basis. Thanks to our experience tracking billions of datapoints for hundreds of global businesses, we're experts in data processing and storage. Our <em>Vero Local</em> service helps you tap into this expertise to ensure compliance with current global data laws and requirements as well as protecting aginst future changes.</p>
  </div>
</section>
<section id="data-compliance-stats" class="dark-box">
  <div class="inner">
    <h2 class="center-text">More than qualified to manage your data on a global scale</h2>
    <ul class="feature-list unstyled-list thirds">
      <li>
        <h1 class="biggie">60M+</h1>
        <h4 class="feature-title">Emails sent per week</h4>
        <p class="feature-desc">We send millions of emails every day for businesses around the world, helping them create great customer experiences for their customers – from Rio to Beijing.</p>
      </li>
      <li>
        <h1 class="biggie"class="">1.5B+</h1>
        <h4 class="feature-title">Data points captured per month</h4>
        <p class="feature-desc">Moving data, automating decisions and sending emails quickly and at scale is <strong>our</strong> business. We can help you do the same and ensure your data resides where it needs to along the way.</p>
      </li>
      <li>
        <h1 class="biggie">150+</h1>
        <h4 class="feature-title">International enterprise customers</h4>
        <p class="feature-desc">Vero's customers are located all around the world. Working predominantly with large, B2C, online businesses that send millions of emails each month, we've got experience helping businesses the world over at scale.</p>
      </li>
    </ul>
  </div>
</section>
<section id="data-compliance-regions" class="center-text border-bottom-light">
  <div class="inner center-text">
    <h2>Where does your data need to be?</h2>
    <p>International data laws and requirements are constantly evolving. As part of <em>Vero Local</em> you can elect to have your data hosted in one of the following key international regions.</p>
    <ul class="region-enquire-list feature-list unstyled-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/data-compliance/north-america.svg" class="background-map">
        <div class="region-deets">
          <h3>North America</h3>
          <p class="regions-deets">N. Virginia, Oregon</p>
          <a rel="leanModal" href="#demo" class="btn btn-success">Enquire</a>
        </div>
      </li>
      <li>
        <div class="region-deets">
          <h3>Europe</h3>
          <p class="regions-deets">Ireland, Frankfurt</p>
          <a rel="leanModal" href="#demo" class="btn btn-success">Enquire</a>
        </div>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/data-compliance/europe.svg" class="background-map">
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/data-compliance/asia-pacific.svg" class="background-map">
        <div class="region-deets">
          <h3>Asia Pacific</h3>
          <p class="regions-deets">Sydney, Beijing</p>
          <a rel="leanModal" href="#demo" class="btn btn-success">Enquire</a>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="data-compliance-customers" class="center-text border-bottom-light">
  <div class="inner center-text">
    <p>We work with hundreds of large, international businesses. Here's just a couple.</p>
    <ul class="center-text feature-list fourths">
      <li><img src="/wp-content/themes/vero/assets/dist/images/landing-pages/data-compliance/tidal.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/data-compliance/tidal@2x.png 2x"><p><strong>Norway</strong> <span class="small-text">(EUROPE)</span></p></li>
      <li><img src="/wp-content/themes/vero/assets/dist/images/landing-pages/data-compliance/canva.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/data-compliance/canva@2x.png 2x"><p><strong>Sydney</strong> <span class="small-text">(AUSTRALIA)</span></p></li>
      <li><img src="/wp-content/themes/vero/assets/dist/images/landing-pages/data-compliance/aboutme.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/data-compliance/aboutme@2x.png 2x"><p><strong>San Francisco</strong><span class="small-text"> (N.AMERICA)</span></p></li>
      <li><img src="/wp-content/themes/vero/assets/dist/images/landing-pages/data-compliance/strikingly.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/data-compliance/strikingly@2x.png 2x"><p><strong>Shanghai</strong><span class="small-text"> (CHINA)</span></p></li>
    </ul>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
  include("region-enquiry-form.php");
?>
