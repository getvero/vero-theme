<?php

function remove_cssjs_ver( $src ) {
  if( strpos( $src, '?ver=' ) )
    $src = remove_query_arg( 'ver', $src );
    return $src;
}

// Load various stylesheets based on environment
function custom_load_custom_style_sheet() {
  //register styles
  wp_register_style('googlefont_merriweather', 'https://fonts.googleapis.com/css?family=Merriweather:700,700italic');
  wp_register_style('bxslider-style', '/wp-content/themes/vero/assets/stylesheets/jquery.bxslider.css');
  // wp_enqueue_style( 'highlight-css', '/wp-content/themes/vero/assets/stylesheets/tomorrow-night-bright.css', NULL, PARENT_THEME_VERSION );
  wp_enqueue_style( 'prism', '/wp-content/themes/vero/assets/stylesheets/prism.css', NULL, PARENT_THEME_VERSION );

  if($_SERVER["HTTP_HOST"] == "localhost:8888"){
    $base_url = "http://0.0.0.0:9000";
    $suffix   = "css";
  } else if($_SERVER["HTTP_HOST"] == "getvero.staging.wpengine.com" || $_SERVER["HTTP_HOST"] == "veropublic.staging.wpengine.com" ) {
    $base_url = "http://static.getvero.com.s3.amazonaws.com/staging";
    $suffix   = "css";
  } else {
    $base_url = "https://d3qxef4rp70elm.cloudfront.net";
    $suffix   = "min.css";
  }
  wp_enqueue_style( 'custom-stylesheet', $base_url."/app.".$suffix, array(), PARENT_THEME_VERSION );
  wp_enqueue_style( 'googlefont_merriweather');
  wp_enqueue_style( 'bxslider-style');
}

// Add JS
function add_js() {
  wp_register_script('cross-domain', get_stylesheet_directory_uri() . '/assets/scripts/cross-domain.js', array('jquery'), NULL, true);
  wp_register_script('vmodal', get_stylesheet_directory_uri() . '/assets/scripts/vmodal.js', array('jquery'), NULL, true);
  wp_register_script('cookies', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.cookie.js', array('jquery'), NULL, true);
  wp_register_script('numeral', get_stylesheet_directory_uri() . '/assets/scripts/vendor/numeral.min.js', array('jquery'), NULL, true);
  wp_register_script('lead_modal', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.leanModal.min.js', array('jquery'), NULL, true);
  wp_register_script('lodash', '//cdnjs.cloudflare.com/ajax/libs/lodash.js/0.10.0/lodash.min.js', array('jquery'), NULL, true);
  wp_register_script('scrollwatch', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.scrollwatch.min.js', array('jquery'), NULL, true);
  wp_register_script('greensock', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.15.1/TweenMax.min.js', array('jquery'), NULL, true);
  wp_register_script('draggable', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.15.1/utils/Draggable.min.js', array('jquery'), NULL, true);
  wp_register_script('scrollmagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array('jquery'), NULL, true);
  wp_register_script('scrollscene', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.scrollmagic.min.js', array('jquery'), NULL, true);
  wp_register_script('sticky', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.sticky.js', array('jquery'), NULL, true);
  wp_register_script('dots', get_stylesheet_directory_uri() . '/assets/scripts/dots.js', array('jquery'), NULL, true);
  wp_register_script('responsive-menu', get_stylesheet_directory_uri() . '/assets/scripts/responsive-menu.js', array('jquery'), NULL, true);
  wp_register_script('vero-blog-angular', get_stylesheet_directory_uri() . '/assets/scripts/app.js', array('jquery'), NULL, true);
  wp_register_script('vero-blog-angular-any', get_stylesheet_directory_uri() . '/assets/scripts/angular/any.js', array('jquery'), NULL, true);
  wp_register_script('fout', get_stylesheet_directory_uri() . '/assets/scripts/fout.js', array('jquery'), NULL, false);
  wp_register_script('webfonts', '//fast.fonts.net/jsapi/bd23cf03-685d-4ec1-b306-4adae883ab02.js', NULL, NULL, false);
  wp_register_script('waypoints', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.waypoints.min.js', array('jquery'), NULL, true);
  wp_register_script('stickyway', get_stylesheet_directory_uri() . '/assets/scripts/vendor/sticky.min.js', array('jquery'), NULL, true);
  wp_register_script('inview', get_stylesheet_directory_uri() . '/assets/scripts/vendor/inview.min.js', array('jquery'), NULL, true);
  wp_register_script('dev_message', get_stylesheet_directory_uri() . '/assets/scripts/dev_message.js', NULL, NULL, true);
  wp_register_script('bxslider', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.bxslider.min.js', NULL, NULL, true);
  wp_register_script('retina', get_stylesheet_directory_uri() . '/assets/scripts/vendor/retina.min.js', NULL, NULL, true);
  wp_register_script('prism', get_stylesheet_directory_uri() . '/assets/scripts/vendor/prism.js', NULL, NULL, true);

  wp_enqueue_script('fout');
  wp_enqueue_script('webfonts');
  wp_enqueue_script('retina');
  wp_enqueue_script('cross-domain');
  wp_enqueue_script('vmodal');
  wp_enqueue_script('numeral');
  wp_enqueue_script('cookies');
  wp_enqueue_script('lead_modal');
  wp_enqueue_script('lodash');
  wp_enqueue_script('scrollwatch');
  wp_enqueue_script('sticky');
  wp_enqueue_script('greensock');
  wp_enqueue_script('draggable');
  wp_enqueue_script('scrollmagic');
  wp_enqueue_script('scrollscene');
  wp_enqueue_script('responsive-menu');
  wp_enqueue_script('waypoints');
  wp_enqueue_script('stickyway');
  wp_enqueue_script('inview');
  wp_enqueue_script('dev_message');
  wp_enqueue_script('bxslider');
  wp_enqueue_script('prism');

  # Below this line is stuff that is new and clean
  wp_register_script('vero-js', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), NULL, true);
  wp_register_script('homepage', get_stylesheet_directory_uri() . '/assets/scripts/homepage.js', array('jquery'), NULL, true);
  // wp_register_script('highlight-js', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js', array(), NULL, true);
  
  wp_enqueue_script('vero-js');
  wp_enqueue_script('homepage');
  wp_enqueue_script('highlight-js');
  
  if ( (is_front_page() || is_page('high-volume-senders') )  && ($_SERVER["HTTP_HOST"] == "veropublic.staging.wpengine.com" || $_SERVER["HTTP_HOST"] == "www.getvero.com" || $_SERVER["HTTP_HOST"] == "localhost:8888" )) {
    wp_enqueue_script('dots');
  }
}
?>