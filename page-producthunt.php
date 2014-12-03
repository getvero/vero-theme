<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="producthunt">
  <div class="inner">
    <img src="/wp-content/themes/vero/assets/images/producthunt.png"/>
    <div id="right">
      <h2>Welcome ProductHunters!</h2>
      <p>Start a free trial today and get 30% off your first 6 months with Vero.</p>
      <p class="small">Just use code <strong>PRODUCTHUNT</strong>.</p>
      <a href="http://www.getvero.com/pricing" class="btn btn-large btn-primary">Start your free trial</a>
    </div>
  </div>
</section>
<section id="top" class="center-text">
  <div class="inner">
    <h1>Things you never knew you could do <br>with email, you can do with Vero.</h1>
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
    <h2 class="center-text">Our support heroes are <br>real marketers and engineers</h2>
  </div>
  <div>
    <ul class="list-unstyled list-inline">
      <li><img src="/wp-content/themes/vero/assets/images/features/team/james.png"></li>
      <li><img src="/wp-content/themes/vero/assets/images/features/team/damien.png"></li>
      <li><img src="/wp-content/themes/vero/assets/images/features/team/emily.png"></li>
      <li><img src="/wp-content/themes/vero/assets/images/features/team/chris.png"></li>
    </ul>
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
  no_menus_genesis_footer();
 ?>