<?php 
  //Remove the entry header markup (requires HTML5 theme support)
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
  remove_action( 'genesis_entry_header', 'genesis_do_post_title');
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
  remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
  remove_action( 'genesis_footer', 'genesis_do_footer' );
  remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

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
  <h1 class="center-text nothing">Track behavior, trigger emails.</h1>
  <div id="image" class="person half right-text">
    <img id="arrow" src="/wp-content/themes/vero/assets/images/home/arrow.png">
    <div id="hero"></div>
    <div class="clearfix"></div>
  </div>
  <div id="right" class="half center-text">
    <div id="box">
      <h5 class="center-text header">How Vero Works</h5>
      <ul class="flow left list-unstyled left-text">
        <li>
          <span class="first-circle"></span>
          <span class="line"></span>
        </li>
        <li>
          <span class="circle"></span>
          <span class="line"></span>
        </li>
        <li>
          <span class="circle"></span>
          <span class="line"></span>
        </li>
        <li>
          <span class="email icon-envelope-o"></span>
        </li>
      </ul>
      <ul class="story left list-unstyled left-text">
        <li>Reba visits <em>shoesofprey.com</em> and starts <strong>designing a shoe</strong>.</li>
        <li>She adds custom red leather to the shoes.</li>
        <li>Reba leaves <em>shoesofprey.com</em> without <strong>purchasing</strong> the shoes.</li>
        <li>Vero automatically <strong>triggers an email</strong> two hours later with an image of <strong>the</strong> exact shoes Reba was designing along with a strong call to action.</li>
      </ul>
      <a href="/pricing" class="btn btn-warning">Send emails like this &rarr;</a>
      <ul class="subtle-footer list-unstyled list-inline">
        <li>(650) 843 9866</li>
        <li><a href="/terms-of-service">Terms of Service</a></li>
      </ul>
    </div>
  </div>
</section>

<section id="trusted-by">
  <div class="inner center-text">
    <h4>Trusted by market-leading companies like these</h4>
    <ul class="list-unstyled list-inline">
      <li><img id="freelancer" src="/wp-content/themes/vero/assets/images/customers/freelancer.png" /></li>
      <li><img id="pipedrive" src="/wp-content/themes/vero/assets/images/customers/pipedrive.png" /></li>
      <li><img id="rackspace" src="/wp-content/themes/vero/assets/images/customers/rackspace.png" /></li>
      <li><img id="qualaroo" src="/wp-content/themes/vero/assets/images/customers/qualaroo.png" /></li>
      <li><img id="bitnami" src="/wp-content/themes/vero/assets/images/customers/bitnami.png" /></li>
      <li><img id="the-next-web" src="/wp-content/themes/vero/assets/images/customers/tnw.png" /></li>
      <li><img id="wave" src="/wp-content/themes/vero/assets/images/customers/wave.png" /></li>
    </ul>
  </div>
</section>
<section id="features" class="center-text">
  <div class="inner center-text">
    <h1>Things you never knew you could do <br>with email, you can do with Vero.</h1>
    <p class="first">Vero connects to your software, website or app and lets you track exactly what your customers are doing – allowing you to send emails you've never sent before.</p>
    <ul class="list-unstyled list-inline">
      <li>
        <img src="/wp-content/themes/vero/assets/images/features/MailReplyAll48.png"/>
        <p>Automate emails when a user takes an action</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/features/MailSearch48.png"/>
        <p>Track and insert meta-data with on-site events</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/features/MailSend64.png"/>
        <p>Send transactional emails without coding</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/features/MailWithCursors48.png"/>
        <p>Track clicks and conversions on your site</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/features/Mail32.png"/>
        <p>A/B test triggered email campaigns </p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/features/PostMail248.png"/>
        <p>Personalize emails with data from your web server</p>
      </li>
  </div>
</section>
<section id="usual-stuff">
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
</section>
<section id="awesome-support">
  <div class="inner">
    <ul class="list-unstyled list-inline">
      <li><img src="/wp-content/themes/vero/assets/images/features/team/james.png"></li>
      <li><img src="/wp-content/themes/vero/assets/images/features/team/damien.png"></li>
      <li><img src="/wp-content/themes/vero/assets/images/features/team/chris.png"></li>
    </ul>
    <div class="right">
      <h3>Billions of data points, hundreds of millions of emails, phenomenal support.</h3>
      <p>Vero tracks billions of customer interactions on websites and in emails for over 300 customers around the world.</p>
      <p>Our product-first approach is backed by fast, practical support from experienced engineers and marketers to help you deliver emails that convert.</p>
    </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h2>Start your 14-day free trial.</h2>
    <p>Email marketing has never been this powerful.</p>
    <a href="/pricing" class="btn btn-large btn-primary">Signup for your trial</a>
  </div>
</section>
<?php 
no_content_genesis_footer();
?>