<?php
/*
Template Name: Welcome Page
*/

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

remove_action('genesis_after_header', 'genesis_do_nav');
add_action('genesis_after_header', 'do_welcome_nav');
function do_welcome_nav() {
  echo '<nav class="nav-primary" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement"><div class="wrap">';
  ?>
  <form class="form-inline" accept-charset="UTF-8" action="https://app.getvero.com/users" method="post">
<li id="logo" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.getvero.com"><img src="/wp-content/themes/vero/assets/images/logo-blue.png">Vero</a></li>
  <li class="labels">
    <span><strong>Start your 14-day free trial</strong></span>
    <span>Plans start at $99/month</span>
  </li>
  <li class="email">
    <input id="user_fname" name="user[fname]" type="hidden" value="-">
    <input id="user_email" name="user[email]" placeholder="Your email" type="text">
    <input id="user_password" name="user[password]" placeholder="Your password" type="password">
  </li>
  <li class="submit">
    <input name="button" class="btn btn-warning" type="submit" value="Start sending emails"/>
  </li>
  <li class="login"><a href="https://app.getvero.com/login">Login</a></li>
</form>
  <?php
  echo '</div></nav>';
}

genesis(); ?>