<?php 
  //Remove the entry header markup (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title');
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

  //Force full width layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
 $classes[] = 'full-width monkey';
 return $classes;
}

include 'pages-shared/static-header.php';
?>

<section id="left">
  <div class="logo">
    <img src="/wp-content/themes/vero/assets/images/logo-with-border.png">
    Vero
  </div>
  <h1>Stop monkeying around.</h1>
  <p>Traditional email marketing platforms let you send a <em>single email</em>, to <em>everyone</em>, at the <em>same time</em>.</p>
  <p>Vero helps you send the same email, to <em>each individual</em>,
    right when they're <em>likely to convert</em>.</p>
  <ul class="menu list-unstyled list-inline">
    <li><a href="/features">Features</a></li>
    <li><a href="/pricing">Pricing</a></li>
    <li><a href="/help">Help</a></li>
    <li><a href="http://www.getvero.com/articles
" target="_blank">Blog</a></li>
    <li><a href="/email-marketing-demo">Enterprise Demo</a></li>
    <li><a href="https://app.getvero.com/login">Login</a></li>
</section>
<section id="right">
  <h3>Become a smart marketer.</h3>
  <p>It's simple, if you use the same tools as your competitors, you’ll get the same results. Get Vero.</p>
  <form accept-charset="UTF-8" action="https://app.getvero.com/users" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="S3k+XA/z6JGtjq2XSHysm6qjuj2HoIe29xBGNsoF6WA="></div>
    <div class="form-group">
      <label>Full Name</label>
      <input autofocus="autofocus" class="form-control" id="user_name" name="user[name]" placeholder="Tyrion Lannister" type="text">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input autocomplete="off" class="form-control" id="user_email" name="user[email]" placeholder="tyrion.lannister@casterlyrock.com" type="text" value="">
    </div>
    <div class="form-group">
      <label>Phone number (optional)</label>
      <input autocomplete="off" class="form-control" id="user_phone_number" name="user[phone_number]" placeholder="(415) 123 4567" type="text" value="">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input autocomplete="off" class="form-control" id="user_password" name="user[password]" placeholder="Secure password (must include one upper-case, one lower-case, one number)" type="password">
    </div>
    <div class="form-group">
      <label>How many customers/subscribers do you have?</label>
      <select class="form-control" id="user_customers" name="user[customers]"><option value="1000">0 - 1,000</option>
        <option value="50000">1,000 - 50,000</option>
        <option value="100000">50,000 - 100,000</option>
        <option value="1000000">100,000 - 1,000,000</option>
        <option value="1000001">Over 1,000,000</option></select>
      </div>
      <div class="form-group">
        <label>What industry are you in?</label>
        <select class="form-control" id="user_industry" name="user[industry]"><option value="B2B online software">B2B online software</option>
          <option value="eCommerce">eCommerce</option>
          <option value="Consumer online products (gaming, travel, etc.)">Consumer online products (gaming, travel, etc.)</option>
          <option value="Mobile app">Mobile app</option>
          <option value="Information marketer">Information marketer</option>
          <option value="Media">Media</option>
          <option value="Other">Other</option></select>
        </div>
        <div class="form-group">
        <input class="btn btn-warning" name="commit" type="submit" value="Start tracking your customers &rarr;">
        </div>
      </form>
    </section>

<?php 
custom_footer_static_wrap();
wp_footer();
?>