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
  wp_enqueue_style( 'custom-stylesheet', $base_url."/app.".$suffix, array() );

  if ( is_page( array( 'capterra', 'data-management', 'customer-engagement', 'vero-segment', 'vero-stitch', 'careers', 'case-studies/plann', 'case-studies/when-i-work' ) ) ) {
    wp_enqueue_style( 'googlefont_merriweather');
  }
}

// Add JS
function add_js() {
  # Below this line is stuff that is new and clean
  wp_register_script('main', get_stylesheet_directory_uri() . '/assets/dist/scripts/main.min.js', array('jquery'), NULL, true);
  wp_register_script('fout', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/fout.min.js', array('jquery'), NULL, false);
  wp_register_script('webfonts', '//fast.fonts.net/jsapi/bd23cf03-685d-4ec1-b306-4adae883ab02.js', NULL, NULL, false);
  wp_register_script('demo', get_stylesheet_directory_uri() . '/assets/dist/scripts/demo.min.js', NULL, NULL, true);
  wp_register_script('prism', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/prism.min.js', NULL, NULL, true);
  wp_register_script('jquery-easing', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/jquery.easing.1.3.js', NULL, NULL, true);
  wp_register_script('jquery-parallax', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/jquery.parallax-scroll.min.js', NULL, NULL, true);
  wp_register_script('noui-slider', '//cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.0.3/nouislider.min.js', NULL, NULL, true);
  wp_register_script('wnumb', '//cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js', NULL, NULL, true);
  wp_register_script('slick-carousel', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', NULL, NULL, true);
  wp_register_script('lax', '//cdn.jsdelivr.net/npm/lax.js', NULL, NULL, true);
  wp_register_script('jquery-validate', '//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js', NULL, NULL, true);

  wp_enqueue_script('fout');
  wp_enqueue_script('webfonts');
  wp_enqueue_script('jquery-validate');

  if ( is_page('demo') ) {
    wp_enqueue_script('demo');
  }

  if ( is_page('pricing') ) {
    wp_enqueue_script('noui-slider');
    wp_enqueue_script('wnumb');
  }

  if ( is_page('drag-and-drop') ) {
    wp_enqueue_script('lax');
  }

  if ( is_page('workflows') ) {
    wp_enqueue_script('jquery-parallax');
  }

  if ( is_page( array( 'features', 'fusion', 'multi-language-campaigns', 'vero-webhooks' ) )|| is_blog_post_or_guide_or_tutorial() ) {
    wp_enqueue_script('prism');
  }

  wp_enqueue_script('main');
}

?>