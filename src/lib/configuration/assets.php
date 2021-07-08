<?php

function custom_favicon( $favicon_url ) {
  return '/wp-content/themes/vero/assets/images/home/favicon/64.png';
}

function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; //don't break WP Admin
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}

function remove_ver_css_js( $src ) {
  if ( strpos( $src, 'ver=' ) )
    $src = remove_query_arg( 'ver', $src );
  return $src;
}

// Load various stylesheets based on environment
function custom_load_custom_style_sheet() {
  // Register stylesheet from vero-styles and enqueue it
  if($_SERVER["HTTP_HOST"] == "localhost:8888"){
    $base_url = "http://0.0.0.0:9000";
    $suffix   = "css";
  } else if($_SERVER["HTTP_HOST"] == "resources-staging.getvero.com" || $_SERVER["HTTP_HOST"] == "www-staging.getvero.com") {
    $base_url = "https://s3.amazonaws.com/static-getvero-com/staging";
    $suffix   = "css";
  } else {
    $base_url = "https://cdn.getvero.com";
    $suffix   = "min.css";
  }
  wp_enqueue_style( 'custom-stylesheet', $base_url."/app.".$suffix, array() );

  // Register Google Font
  wp_register_style('googlefont_merriweather', 'https://fonts.googleapis.com/css?family=Merriweather:700&display=swap');
  if ( is_page( array( 'capterra', 'data-management', 'customer-engagement', 'vero-segment', 'vero-stitch', 'careers', 'case-studies/plann', 'case-studies/when-i-work' ) ) ) {
    wp_enqueue_style( 'googlefont_merriweather');
  }
}

// Add JS
function add_js() {
  # Below this line is stuff that is new and clean
  wp_register_script('main', get_stylesheet_directory_uri() . '/assets/scripts/main.js', array('jquery'), NULL, true);
  wp_register_script('fout', get_stylesheet_directory_uri() . '/assets/scripts/vendor/fout.min.js', array('jquery'), NULL, false);
  wp_register_script('webfonts', '//fast.fonts.net/jsapi/bd23cf03-685d-4ec1-b306-4adae883ab02.js', NULL, NULL, false);
  wp_register_script('prism', get_stylesheet_directory_uri() . '/assets/scripts/vendor/prism.min.js', NULL, NULL, true);
  wp_register_script('jquery-validate', '//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js', NULL, NULL, true);

  wp_enqueue_script('fout');
  wp_enqueue_script('webfonts');
  wp_enqueue_script('jquery-validate');

  if ( is_blog_post_or_guide_or_tutorial() ) {
    wp_enqueue_script('prism');
  }

  wp_enqueue_script('main');
}

?>