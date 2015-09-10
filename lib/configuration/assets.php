<?php

function remove_cssjs_ver( $src ) {
  if( strpos( $src, '?ver=' ) )
    $src = remove_query_arg( 'ver', $src );
    return $src;
}

// Load various stylesheets based on environment
function custom_load_custom_style_sheet() {
  //wp_enqueue_style( 'highlight-css', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/styles/default.min.css', NULL, PARENT_THEME_VERSION );
  wp_enqueue_style( 'highlight-css', '/wp-content/themes/vero/assets/stylesheets/tomorrow-night-bright.css', NULL, PARENT_THEME_VERSION );

  if($_SERVER["HTTP_HOST"] == "localhost:8888"){
    $base_url = "http://0.0.0.0:9000";
  } else if($_SERVER["HTTP_HOST"] == "getvero.staging.wpengine.com" || $_SERVER["HTTP_HOST"] == "veropublic.staging.wpengine.com" ) {
    $base_url = "http://static.getvero.com.s3.amazonaws.com/staging";
  } else {
    $base_url = "https://d3qxef4rp70elm.cloudfront.net";
  }

  if ( is_singular('post') || is_singular('guides') || is_post_type_archive('post') || is_home() || is_category() || is_search() || is_author() ) {
    wp_enqueue_style( 'custom-stylesheet', $base_url."/app.css", array(), PARENT_THEME_VERSION );
  } else {
    wp_enqueue_style( 'marketing-stylesheet', $base_url."/marketing.css", array(), PARENT_THEME_VERSION );
  }
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
  wp_register_script('webfonts', 'http://fast.fonts.net/jsapi/bd23cf03-685d-4ec1-b306-4adae883ab02.js', NULL, NULL, true);
  wp_register_script('waypoints', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.waypoints.min.js', array('jquery'), NULL, true);
  wp_register_script('stickyway', get_stylesheet_directory_uri() . '/assets/scripts/vendor/sticky.min.js', array('jquery'), NULL, true);
  wp_register_script('inview', get_stylesheet_directory_uri() . '/assets/scripts/vendor/inview.min.js', array('jquery'), NULL, true);

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
  wp_enqueue_script('webfonts');
  wp_enqueue_script('waypoints');
  wp_enqueue_script('stickyway');
  wp_enqueue_script('inview');

  # Below this line is stuff that is new and clean
  wp_register_script('vero-js', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), NULL, true);
  wp_register_script('homepage', get_stylesheet_directory_uri() . '/assets/scripts/homepage.js', array('jquery'), NULL, true);
  wp_register_script('highlight-js', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js', array(), NULL, true);
  
  wp_enqueue_script('vero-js');
  wp_enqueue_script('homepage');
  wp_enqueue_script('highlight-js');
  
  if ( (is_front_page() || is_page('high-volume-senders') )  && ($_SERVER["HTTP_HOST"] == "veropublic.staging.wpengine.com" || $_SERVER["HTTP_HOST"] == "www.getvero.com" || $_SERVER["HTTP_HOST"] == "localhost:8888" )) {
    wp_enqueue_script('dots');
  }
}
?>