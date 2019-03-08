<?php

function remove_cssjs_ver( $src ) {
  if( strpos( $src, '?ver=' ) )
    $src = remove_query_arg( 'ver', $src );
    return $src;
}

// Load various stylesheets based on environment
function custom_load_custom_style_sheet() {
  //register styles
  wp_register_style('googlefont_merriweather', 'https://fonts.googleapis.com/css?family=Merriweather:700');
  wp_register_style('bxslider-style', '//cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css');
  wp_register_style('featherlight-style', '/wp-content/themes/vero/assets/stylesheets/featherlight.min.css');
  wp_enqueue_style( 'highlight-css', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/tomorrow-night-bright.min.css', NULL, PARENT_THEME_VERSION );
  wp_enqueue_style( 'prism', '/wp-content/themes/vero/assets/stylesheets/prism.css', NULL, PARENT_THEME_VERSION );
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
  wp_enqueue_style( 'bxslider-style');
  wp_enqueue_style( 'featherlight-style');
}

// Add JS
function add_js() {
  # Below this line is stuff that is new and clean
  wp_register_script('vero-js', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), NULL, true);
  wp_register_script('homepage', get_stylesheet_directory_uri() . '/assets/scripts/homepage.js', array('jquery'), NULL, true);
  wp_register_script('landing-pages', get_stylesheet_directory_uri() . '/assets/scripts/landing-pages.js', array('jquery'), NULL, true);
  wp_register_script('pricing', get_stylesheet_directory_uri() . '/assets/scripts/pricing.js', array('jquery'), NULL, true);
  wp_register_script('fout', get_stylesheet_directory_uri() . '/assets/scripts/fout.js', array('jquery'), NULL, false);
  wp_register_script('webfonts', '//fast.fonts.net/jsapi/bd23cf03-685d-4ec1-b306-4adae883ab02.js', NULL, NULL, false);
  wp_register_script('dev_message', get_stylesheet_directory_uri() . '/assets/scripts/dev_message.js', NULL, NULL, true);
  wp_register_script('bxslider', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.bxslider.min.js', NULL, NULL, true);
  wp_register_script('prism', get_stylesheet_directory_uri() . '/assets/scripts/vendor/prism.js', NULL, NULL, true);
  wp_register_script('cookies', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.cookie.js', array('jquery'), NULL, true);
  wp_register_script('lean_modal', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.leanModal.min.js', array('jquery'), NULL, true);
  wp_register_script('highlight-js', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js', array(), NULL, true);
  wp_register_script('imgslider', get_stylesheet_directory_uri() . '/assets/scripts/vendor/imgslider.min.js', NULL, NULL, true);
  wp_register_script('smooth-scroll', get_stylesheet_directory_uri() . '/assets/scripts/vendor/smooth-scroll.min.js', NULL, NULL, true);
  wp_register_script('featherlight', get_stylesheet_directory_uri() . '/assets/scripts/vendor/featherlight.min.js', NULL, NULL, true);
  wp_register_script('jquery-easing', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.easing.1.3.js', NULL, NULL, true);
  wp_register_script('jquery-parallax', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.parallax-scroll.js', NULL, NULL, true);
  wp_register_script('nouislider', get_stylesheet_directory_uri() . '/assets/scripts/vendor/nouislider.min.js', NULL, NULL, true);
  wp_register_script('wNumb', get_stylesheet_directory_uri() . '/assets/scripts/vendor/wNumb.js', NULL, NULL, true);
  wp_register_script('slick-carousel', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', NULL, NULL, true);

  wp_enqueue_script('vero-js');
  wp_enqueue_script('fout');
  wp_enqueue_script('webfonts');
  wp_enqueue_script('dev_message');
  wp_enqueue_script('bxslider');
  wp_enqueue_script('featherlight');
  wp_enqueue_script('jquery-parallax');
  wp_enqueue_script('prism');
  wp_enqueue_script('cookies');
  wp_enqueue_script('lean_modal');
  wp_enqueue_script('smooth-scroll');
  // wp_enqueue_script('slick-carousel');

  if (is_page('pricing')) {
    wp_enqueue_script('wNumb');
    wp_enqueue_script('nouislider');
  }

  wp_enqueue_script('homepage');
  wp_enqueue_script('pricing');
  wp_enqueue_script('landing-pages');

  if(is_blog() || is_page('features-data') ){
    wp_enqueue_script('highlight-js');
  }
}

?>