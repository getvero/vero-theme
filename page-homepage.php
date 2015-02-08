<?php 
  //Remove the entry header markup (requires HTML5 theme support)
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
  remove_action( 'genesis_entry_header', 'genesis_do_post_title');
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

  //Force full width layout
  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
  add_filter( 'body_class', 'metro_add_body_class' );
  function metro_add_body_class( $classes ) {
   $classes[] = 'full-width';
   return $classes;
  }

  include 'pages-shared/static-header.php';
?>

<section id="top">
  <div class="t1"></div><div class="t2"></div><div class="t3"></div><div class="t4"></div><div class="t5"></div><div class="t6"></div>
  <div id="hero" class="center-text">
    <h1>Track behavior, trigger emails.</h1>
    <h2>The smartest way to automate emails based on what your customers do.</h2>
    <div id="container-trigger"></div>
    <div id="vero-live-sticky">
      <div id="vero-live-container">
        <div id="vero-live">
          <div class="wrap">
            <div class="inside">
              <form>
                <input type="text" name="email" id="email" placeholder="Enter your email...">
                <input type="submit" value="See Vero in action" class="btn btn-warning">
              </form>
            </div>
          </div>
        </div>
        <div id="vero-live-status">
          <span id="title">Vero Live Tracker.</span>
          <span id="status">Status:</span>
          <span id="status-update">Listening...</span>
        </div>
      </div>
    </div>

    <p class="bottom">Scroll down   •   <a href="http://www.getvero.com/pricing">Skip and create a free account &rarr;</a></p>
  </div>
  <div id="scroll-down">⌄</div>
</section>

<section id="trusted-by">
  <div class="inner center-text">
    <h4>Trusted by market-leading companies like these</h4>
    <img src="/wp-content/themes/vero/assets/images/customers/all-grey.png">
  </div>
</section>
<section id="features" class="center-text">
  <div class="inner center-text">
    <p class="h1">Things you never knew you could do <br>with email, you can do with Vero.</p>
    <ul class="list-unstyled list-inline">
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/browser.png"/>
        <p>Track and insert meta-data with on-site events.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/phone.png"/>
        <p>Track what customers do in your mobile application.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/developers.png"/>
        <p>Send transactional emails without coding.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/home/database.png"/>
        <p>Customise emails with data you track in Vero, or data from your own APIs.</p>
      </li>
  </div>
</section>
<!--<section id="usual-stuff">
  <div class="inner">
    <h2 class="center-text">...plus, you can do all the usual stuff too.</h2>
    <ul class="list-unstyled list-inline">
      <li><img src="/wp-content/themes/vero/assets/images/features/usual/mail.png" />Send direct newsletters</li>
      <li><img src="/wp-content/themes/vero/assets/images/features/usual/person.png" />Invite team members</li>
      <li><img src="/wp-content/themes/vero/assets/images/features/usual/people.png" />Import users via CSV</li>
      <li><img src="/wp-content/themes/vero/assets/images/features/usual/stocks.png" />Export analytics data</li>
      <li><img src="/wp-content/themes/vero/assets/images/features/usual/google.png" />Integrate with Google UTM</li>
      <li><img src="/wp-content/themes/vero/assets/images/features/usual/readability.png" />Send emails from your own domain</li>
      <li><img src="/wp-content/themes/vero/assets/images/features/usual/mouse-pointer.png" />See open, click, unsubscribe, bounce and other statistics</li>
      <li><img src="/wp-content/themes/vero/assets/images/features/usual/screen.png" />Import your own HTML templates and edit via WYSIWYG editor</li>
      <li><img src="/wp-content/themes/vero/assets/images/features/usual/hammer.png" />A/B test your email campaigns</li>
    </ul>
  </div>
</section>-->
<section id="reliable">
  <canvas id="dots"></canvas>
  <div class="inner center-text">
    <p class="h1">Billions of data points.<br>Millions of emails.<br>Awesome support.</p>
    <p>Vero tracks billions of customer interactions on websites for over 300 customers around the world.</p>
    <p>Our product-first approach is backed by fast, practical support from experienced engineers and marketers to help you deliver emails that convert.</p>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <p class="h1">Start increasing your email conversions now.</p>
    <a href="/pricing" class="btn btn-primary">Signup for your trial</a>
  </div>
</section>
<?php 
custom_footer_static();
wp_footer();
?>