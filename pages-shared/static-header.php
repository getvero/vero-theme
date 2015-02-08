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

function custom_footer_static() {
  ?>
  <footer><div class="wrap">
    <ul class="col">
      <li class="header">Features</li>
      <li>Real-time segmentation</li>
      <li>Individual customer profiles (CRM)</li>
      <li>Triggered emails</li>
      <li>Smart newsletters</li>
      <li>External Attributes</li>
    </ul>
    <ul class="col">
      <li class="header">Resources</li>
      <li><a href="http://www.getvero.com/pricing">Pricing</a></li>
      <li><a href="http://www.getvero.com/faq">Help Documentation</a></li>
      <li><a href="http://www.getvero.com/idea-lab">Email Recipe Lab</a></li>
      <li><a href="http://www.getvero.com/api">API Reference</a></li>
      <li><a href="http://blog.getvero.com" target="_blank">Blog</a></li>
    </ul>
    <ul class="col">
      <li class="header">Company</li>
      <li>About</li>
      <li><a href="http://www.getvero.com/jobs">Jobs</a></li>
      <li><a href="http://status.getvero.com/faq">Status</a></li>
    </ul>
    <ul class="col">
      <li class="header">Say Hello</li>
      <li><a href="mailto:support@getvero.com">Email Support</a></li>
      <li><a href="http://www.getvero.com/high-volume">Contact Sales</a></li>
      <li></li>
    </ul>
  </div></footer>
<?php
}