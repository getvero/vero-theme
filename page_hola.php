<?php
/*
Template Name: Hola Page
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
  wp_nav_menu( array(
    'theme_location' => 'hola-nav-menu'
    ) );
  echo '</div></nav>';
}

genesis(); ?>