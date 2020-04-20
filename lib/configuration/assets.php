<?php

function remove_cssjs_ver( $src ) {
  if( strpos( $src, '?ver=' ) )
    $src = remove_query_arg( 'ver', $src );
    return $src;
}

// Load various stylesheets based on environment
function custom_load_custom_style_sheet() {
  // Register styles
  wp_register_style('googlefont_merriweather', 'https://fonts.googleapis.com/css?family=Merriweather:700&display=swap');

  if($_SERVER["HTTP_HOST"] == "localhost:8888"){
    $base_url = "http://0.0.0.0:9000";
    $suffix   = "css";
  } else if($_SERVER["HTTP_HOST"] == "getvero.staging.wpengine.com" || $_SERVER["HTTP_HOST"] == "veropublic.staging.wpengine.com" ) {
    $base_url = "https://s3.amazonaws.com/static-getvero-com/staging";
    $suffix   = "css";
  } else {
    $base_url = "https://cdn.getvero.com";
    $suffix   = "min.css";
  }
  wp_enqueue_style( 'custom-stylesheet', $base_url."/app.".$suffix, array(), PARENT_THEME_VERSION );
  if ( is_front_page() || is_page('capterra') || is_page('data-management') || is_page('customer-engagement') || is_page('vero-segment') || is_page('vero-stitch') || is_page('careers') ) {
    wp_enqueue_style( 'googlefont_merriweather');
  }
}

// Add JS
function add_js() {
  # Below this line is stuff that is new and clean
  wp_register_script('main', get_stylesheet_directory_uri() . '/assets/dist/scripts/main.min.js', array('jquery'), NULL, true);
  wp_register_script('fout', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/fout.min.js', array('jquery'), NULL, false);
  wp_register_script('webfonts', '//fast.fonts.net/jsapi/bd23cf03-685d-4ec1-b306-4adae883ab02.js', NULL, NULL, false);
  wp_register_script('bxslider', '//cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js', NULL, NULL, true);
  wp_register_script('prism', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/prism.min.js', NULL, NULL, true);
  // wp_register_script('lean_modal', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/jquery.leanModal.min.js', array('jquery'), NULL, true);
  wp_register_script('jquery-easing', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/jquery.easing.1.3.js', NULL, NULL, true);
  wp_register_script('jquery-parallax', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/jquery.parallax-scroll.min.js', NULL, NULL, true);

  wp_register_script('slick-carousel', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', NULL, NULL, true);

  wp_enqueue_script('fout');
  wp_enqueue_script('webfonts');

  if ( is_page('careers') ) {
    wp_enqueue_script('bxslider');
  }

  if ( is_page('workflows') ) {
    wp_enqueue_script('jquery-parallax');
  }

  if ( is_page('features') || is_page('multi-language-campaigns') || is_blog()  ) {
    wp_enqueue_script('prism');
  }

  wp_enqueue_script('main');
}

?>