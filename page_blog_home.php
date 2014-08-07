<?php
/*
Template Name: Blog Home
*/

//Force full width layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
   $classes[] = 'full-width blog-home';
   return $classes;
}

//Remove nearly everything
remove_action('genesis_before_post_content','genesis_post_info');
remove_action('genesis_after_post_content','genesis_post_meta');
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
remove_action( 'genesis_footer', 'genesis_do_footer' );

add_action('genesis_footer', 'custom_footer');

function custom_footer () {
?>
<div class="menu-vero_footer_third-container">
<ul id="menu-vero_footer_third" class="menu">
  <li id="menu-item-36" class="no-hover menu-item menu-item-type-custom menu-item-object-custom menu-item-36"><a>Copyright © Vero</a></li>
  <li id="menu-item-37" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-37"><a href="http://getvero.com/privacy">Privacy Policy</a></li>
  <li id="menu-item-38" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38"><a href="http://getvero.com/terms-of-service">Terms of Service</a></li>
</ul>
</div>
<?php
}

genesis(); ?>