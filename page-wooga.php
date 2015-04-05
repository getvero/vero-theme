<?php 
  //Remove the entry header markup (requires HTML5 theme support)
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
  remove_action( 'genesis_entry_header', 'genesis_do_post_title');
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

  //Force full width layout
  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
  add_filter( 'body_class', 'metro_add_body_class' );
  function metro_add_body_class( $classes ) {
   $classes[] = 'full-width case-studies';
   return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="top" style="background-image: url(/wp-content/themes/vero/assets/images/case-studies/wooga/bg.png);"></section>
<section id="stripe">
  <div class="wrap">
    <div class="logo">
      <img src="/wp-content/themes/vero/assets/images/case-studies/wooga/logo.png">
    </div>
    <div class="testimonial">
      <div class="number">
        <div class="large">
          20M+
        </div>
        <h1>
          MONTHLY EMAILS
        </h1>
      </div>
    </div>
  </div>
</section>

<section id="quote">
  <div class="wrap">
    <div class="big">&#8220;</div>
    <p>Vero makes it easy for us to deploy, manage and measure complex campaigns with ease. Our marketing team would waste hours without it.</p>
    <div class="who">
      Jan Miczaika, COO
      <img src="/wp-content/themes/vero/assets/images/case-studies/wooga/jan.png">
    </div>
  </div>
</section>
<section id="middle">
  <div class="wrap">
    <div id="about">
      <h3>About Wooga</h3>
      <p>With over 250 employees from 41 countries and over 50 million users Wooga is one of the fastest growing gaming companies on the planet.</p>
      <p>With Facebook, iOS and Android success stories like Diamond Dash and Jelly Splash, Wooga’s games have happy players from around the world.</p>
    </div>
    <ul id="reasons" class="list-unstyled">
      <li>
        <h2>Cost effective customer acquisition and activation</h2>
        <p>"Email is considerably cheaper than any other channel we have available to us. The cost of install from our launch campaigns is phenomenal and our automated campaigns help us drive new customers to pay." Vero helps Wooga directly increase their revenue thanks to targeted automated campaigns.</p>
      </li>
      <li>
        <h2>Powering agile marketing</h2>
        <p>Implementing new tests and email marketing campaigns <strong>quickly</strong> is what separates a good product marketing team from a bad one. Vero is "so easy to use that has literally halved the time we spend managing our campaigns. This means we can spend more time <strong>investing</strong> in them, seeing greater returns. We can't stress enough how easy Vero is to use".</p>
      </li>
      <li>
        <h2>Cross-game integration in hours, not weeks</h2>
        <p>Wooga have implemented campaigns across more than five different games on three different platforms including Facebook, iOS and Android. "Each game we integrate only takes us a few hours, on top of an initial integration that took less than two days with a single engineer. Integrating something this powerful in that time-frame is a new experience for us: a pleasant one!"</p>
      </li>
      <li>
        <h2>Advanced campaigns in 11 languages</h2>
        <p>Wooga use Vero to “setup advanced campaigns in many different languages. Using our standard template and custom user properties it is <strong>easy</strong> to segment our database by language and create automated campaigns that speak to our gamers in their native tongue.”</p>
      </li>
    </ul>
  </div>
</section>
<section id="more">
  <div class="wrap">
    <ul class="list-unstyled">
      <li>
        <h3>More case studies</h3>
      </li>
      <li>
        <a href="/case-studies/bugherd"><img src="/wp-content/themes/vero/assets/images/case-studies/bugherd/logo-sml.png"></a>
      </li>
      <li>
        <a href="/case-studies/shoes-of-prey"><img src="/wp-content/themes/vero/assets/images/case-studies/shoesofprey/logo.png"></a>
      </li>
    </ul>
  </div>
</section>

<?php 
custom_footer_static_wrap();
wp_footer();
?>