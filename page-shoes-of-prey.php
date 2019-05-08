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
<section id="top" style="background-image: url(/wp-content/themes/vero/assets/dist/images/case-studies/shoesofprey/bg.png);"></section>
<section id="stripe">
  <div class="wrap">
    <div class="logo">
      <img src="/wp-content/themes/vero/assets/dist/images/case-studies/shoesofprey/logo.png">
    </div>
    <div class="testimonial">
      <div class="number">
        <div class="large">
          27%
        </div>
        <h1>
          Repeat Shoe Designed
        </h1>
      </div>
    </div>
  </div>
</section>

<section id="quote">
  <div class="wrap">
    <div class="big">&#8220;</div>
    <p>Vero allows us to go beyond the standard ‘cart abandonment’ campaigns that you see. Our customers receive truly personalised content each and every time we email them based on their on-site interactions. You can’t beat that!</p>
    <div class="who">
      Joel Pinkham, Customer Acquisition Manager
      <img src="/wp-content/themes/vero/assets/dist/images/case-studies/shoesofprey/joel.jpg">
    </div>
  </div>
</section>
<section id="middle">
  <div class="wrap">
    <div id="about">
      <h3>About Shoes of Prey</h3>
      <p>Shoes of Prey is an eCommerce company that lets women design their own shoes. With colours, materials and styles to suit everyone Shoes of Prey has grown quickly since its launch juts three years ago.</p>
      <p>As much a product-driven tech startup as a retailer, Shoes of Prey use data to determine their next step. Shoes of Prey is setting the trend in Australian retail.</p>
    </div>
    <ul id="reasons" class="list-unstyled">
      <li>
        <h2>Cart abandonment 2.0</h2>
        <p>Joel and his team at Shoes of Prey use Vero to “send a series of emails to our customers based on their past interactions with our online shoe designer and store. Rather than sending everyone the same follow up messages we send a lot of meta-data about each customer and the products they look at in order to customize each email. We can even include images of each customer’s custom shoe designs using Vero.</p>
      </li>
      <li>
        <h2>Ease of integration with current platforms</h2>
        <p>Like all data-driven marketers, Joel relies heavily on customer-level analytics software. “Integrating Vero alongside Google Analytics and the other platforms we use has been simple. Initially we were worried about the setup time in order to achieve the campaigns we were after  but it took us all of three hours to get hooked up properly. Now we have access to run all sorts of campaigns we couldn’t even consider with a traditional email marketing provider.”</p>
      </li>
      <li>
        <h2>Superior support</h2>
        <p>"I talk to someone at Vero every week. I think Pat (our data analyst) speaks with someone at Vero every few days. Although just a platform their response times and attitude are exactly what I’m after in a vendor: they’re polite, friendly and happy to help however they can.” With live chat, email and telephone support Shoes of Prey knows that they “can get in touch with someone who can actually help any time we need to."</p>
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
        <a href="/case-studies/wooga"><img src="/wp-content/themes/vero/assets/dist/images/case-studies/wooga/logo.png"></a>
      </li>
      <li>
        <a href="/case-studies/bugherd"><img src="/wp-content/themes/vero/assets/dist/images/case-studies/bugherd/logo-sml.png"></a>
      </li>
    </ul>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>