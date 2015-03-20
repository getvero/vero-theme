<?php
//do not add in opening php tag
 
/**
 * Remove Inner Home Page Content on a Genesis Theme
 *
 * @package   Genesis Custom Front Page - No Inner Content
 * @author    Neil Gee
 * @link      http://coolestguidesontheplanet.com/
 * @copyright (c)2014, Neil Gee
 */
 
no_content_genesis_no_content();
 
function no_content_genesis_no_content() {
  no_content_genesis_header();
}
 
//Customised Genesis Header
function no_content_genesis_header() {
  do_action( 'genesis_doctype' );
  do_action( 'genesis_title' );
  do_action( 'genesis_meta' );
  ?><script src="//cdn.optimizely.com/js/2654110240.js"></script><?php
  
  wp_head(); //* we need this for plugins
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
  
  //genesis_markup( array(
    //'html5'   => '<div %s>',
    //'xhtml'   => '<div id="inner">',
    //'context' => 'site-inner',
  //) );
  //genesis_structural_wrap( 'site-inner' );
}
 
//Customised Genesis Footer
function no_content_genesis_footer() {
  //genesis_structural_wrap( 'site-inner', 'close' );
  //echo '</div>'; //* end .site-inner or #inner
  
  do_action( 'genesis_before_footer' );
  do_action( 'genesis_footer' );
  do_action( 'genesis_after_footer' );
  
  echo '</div>'; //* end .site-container or #wrap
  
  do_action( 'genesis_after' );
  wp_footer(); //* we need this for plugins
  ?>
  </body>
  </html>
<?php
  }

//Customised Genesis Footer
function no_menus_genesis_footer() {
  echo '</div>'; //* end .site-container or #wrap
  wp_footer(); //* we need this for plugins
  ?>
  </body>
  </html>
<?php
  }
?>