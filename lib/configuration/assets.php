<?php

function remove_cssjs_ver( $src ) {
  if( strpos( $src, '?ver=' ) )
    $src = remove_query_arg( 'ver', $src );
    return $src;
}

// Load various stylesheets based on environment
function custom_load_custom_style_sheet() {
  // Register styles
  wp_register_style('googlefont_merriweather', 'https://fonts.googleapis.com/css?family=Merriweather:700');
  wp_register_style('featherlight-style', '//cdnjs.cloudflare.com/ajax/libs/featherlight/1.7.13/featherlight.min.css');

  wp_enqueue_style( 'prism-okaidia', '/wp-content/themes/vero/assets/stylesheets/prism-okaidia.css', NULL, PARENT_THEME_VERSION );
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
  wp_enqueue_style( 'googlefont_merriweather');
  wp_enqueue_style( 'featherlight-style');
}

// Add JS
function add_js() {
  # Below this line is stuff that is new and clean
  wp_register_script('vero-js', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), NULL, true);
  wp_register_script('homepage', get_stylesheet_directory_uri() . '/assets/dist/scripts/homepage.js', array('jquery'), NULL, true);
  wp_register_script('landing-pages', get_stylesheet_directory_uri() . '/assets/dist/scripts/landing-pages.js', array('jquery'), NULL, true);
  wp_register_script('fout', get_stylesheet_directory_uri() . '/assets/dist/scripts/fout.js', array('jquery'), NULL, false);
  wp_register_script('webfonts', '//fast.fonts.net/jsapi/bd23cf03-685d-4ec1-b306-4adae883ab02.js', NULL, NULL, false);
  wp_register_script('dev_message', get_stylesheet_directory_uri() . '/assets/dist/scripts/dev_message.js', NULL, NULL, true);
  wp_register_script('bxslider', '//cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js', NULL, NULL, true);
  wp_register_script('prism', '//cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js', NULL, NULL, true);
  wp_register_script('cookies', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/jquery.cookie.js', array('jquery'), NULL, true);
  wp_register_script('lean_modal', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/jquery.leanModal.min.js', array('jquery'), NULL, true);
  wp_register_script('highlight-js', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js', array(), NULL, true);
  wp_register_script('imgslider', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/imgslider.min.js', NULL, NULL, true);
  wp_register_script('smooth-scroll', '//cdnjs.cloudflare.com/ajax/libs/smooth-scroll/15.2.1/smooth-scroll.min.js', NULL, NULL, true);
  wp_register_script('featherlight', '//cdnjs.cloudflare.com/ajax/libs/featherlight/1.7.13/featherlight.min.js', NULL, NULL, true);
  wp_register_script('jquery-easing', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/jquery.easing.1.3.js', NULL, NULL, true);
  wp_register_script('jquery-parallax', get_stylesheet_directory_uri() . '/assets/dist/scripts/vendor/jquery.parallax-scroll.js', NULL, NULL, true);
  wp_register_script('nouislider', '//cdnjs.cloudflare.com/ajax/libs/noUiSlider/13.1.1/nouislider.min.js', NULL, NULL, true);
  wp_register_script('wNumb', '//cdnjs.cloudflare.com/ajax/libs/wnumb/1.1.0/wNumb.min.js', NULL, NULL, true);
  wp_register_script('slick-carousel', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', NULL, NULL, true);

  // wp_enqueue_script('vero-js');

  wp_enqueue_script('fout');
  wp_enqueue_script('webfonts');
  wp_enqueue_script('dev_message');

  if (is_page('careers')) {
    wp_enqueue_script('bxslider');
  }

  wp_enqueue_script('featherlight');
  wp_enqueue_script('jquery-parallax');
  wp_enqueue_script('prism');
  wp_enqueue_script('cookies');
  wp_enqueue_script('lean_modal');
  wp_enqueue_script('smooth-scroll');

  if (is_page('pricing')) {
    wp_enqueue_script('wNumb');
    wp_enqueue_script('nouislider');
  }

  wp_enqueue_script('homepage');
  wp_enqueue_script('landing-pages');
}

?>