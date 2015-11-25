<?php
/**
 * Remove Inner Home Page Content on a Genesis Theme
 *
 * @package   Genesis Custom Front Page - No Inner Content
 * @author    Neil Gee
 * @link      http://coolestguidesontheplanet.com/
 * @copyright (c)2014, Neil Gee
 */

if(is_page('homepage')){
  no_content_no_header();
}
else {
  no_content_genesis_header();
}

 
//Customised Genesis Header
function no_content_genesis_header() {
  do_action( 'genesis_doctype' );
  do_action( 'genesis_title' );
  do_action( 'genesis_meta' );
  ?><script src="//cdn.optimizely.com/js/2654110240.js"></script><?php
  wp_head(); 
  ?>
  
  <meta name="google-site-verification" content="AkIiiyFL03lKnauhmJxy0yvCx-iyt8zAvsjfzQVrakA" />
  </head>
  
  <?php
  genesis_markup( array(
    'html5'   => '<body %s>',
    'xhtml'   => sprintf( '<body class="%s">', implode( ' ', get_body_class() ) ),
    'context' => 'body',
  ) );
  do_action( 'genesis_before' );
  
  genesis_markup( array(
    'html5'   => '<div %s>',
    'xhtml'   => '<div id="wrap">',
    'context' => 'site-container',
  ) );
  
  do_action( 'genesis_before_header' );
  do_action( 'genesis_header' );
  do_action( 'genesis_after_header' );
}

function no_content_no_header() {
  do_action( 'genesis_doctype' );
  do_action( 'genesis_title' );
  do_action( 'genesis_meta' );
  ?><script src="//cdn.optimizely.com/js/2654110240.js"></script><?php
  wp_head(); 
  ?>
  
  <meta name="google-site-verification" content="AkIiiyFL03lKnauhmJxy0yvCx-iyt8zAvsjfzQVrakA" />
  </head>
  
  <?php
  genesis_markup( array(
    'html5'   => '<body %s>',
    'xhtml'   => sprintf( '<body class="%s">', implode( ' ', get_body_class() ) ),
    'context' => 'body',
  ) );
  do_action( 'genesis_before' );
  
  genesis_markup( array(
    'html5'   => '<div %s>',
    'xhtml'   => '<div id="wrap">',
    'context' => 'site-container',
  ) );
}

 
//Customised Genesis Footer
function no_content_genesis_footer() {
  do_action( 'genesis_before_footer' );
  do_action( 'genesis_footer' );
  do_action( 'genesis_after_footer' );
  echo '</div>'; 
  do_action( 'genesis_after' );
  wp_footer();
  ?>
  </body>
  </html>
<?php
  }

function no_menus_genesis_footer() {
  echo '</div>'; 
  wp_footer();
  ?>
  </body>
  </html>
<?php
  }
?>