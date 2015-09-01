<?php

include_once( 'lib/configuration/assets.php' );

add_action('genesis_setup','genesischild_theme_setup', 15);
function genesischild_theme_setup() { 
  define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/style.css' ) );
  
  add_theme_support( 'html5' );
  add_action( 'wp_enqueue_scripts', 'add_js' );  
  add_action( 'wp_enqueue_scripts', 'custom_load_custom_style_sheet' );
}

?>