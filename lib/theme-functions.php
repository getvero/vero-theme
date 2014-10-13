<?php

include_once( CHILD_DIR . '/lib/custom_post_types/guides.php' );
include_once( CHILD_DIR . '/lib/custom_post_types/resources.php' );
include_once( CHILD_DIR . '/lib/custom_post_types/api.php' );

//
//Tweaks to Genesis
//----------------------
function custom_load_custom_style_sheet() {
  if($_SERVER["HTTP_HOST"] == "localhost:8888"){
    $base_url = "http://0.0.0.0:9000";
    wp_enqueue_style( 'custom-stylesheet', $base_url."/blog.css", array(), PARENT_THEME_VERSION );
    wp_enqueue_style( 'marketing-stylesheet', $base_url."/marketing.css", array(), PARENT_THEME_VERSION );
  } else if($_SERVER["HTTP_HOST"] == "getvero.staging.wpengine.com") {
    $base_url = "http://static.getvero.com.s3.amazonaws.com";
    wp_enqueue_style( 'custom-stylesheet', $base_url."/blog.min.css", array(), PARENT_THEME_VERSION );
    wp_enqueue_style( 'marketing-stylesheet', $base_url."/marketing.min.css", array(), PARENT_THEME_VERSION );
  } else {
    $base_url = "http://d3qxef4rp70elm.cloudfront.net";
    wp_enqueue_style( 'custom-stylesheet', $base_url."/blog.min.css", array(), PARENT_THEME_VERSION );
    wp_enqueue_style( 'marketing-stylesheet', $base_url."/marketing.min.css", array(), PARENT_THEME_VERSION );
  }
}

function child_output_filter( $backtotop_text, $creds_text ) {
	$first_column = wp_nav_menu( array( 'menu' => 'vero_footer' ));
  $second_column = wp_nav_menu( array( 'menu' => 'vero_footer_second' ));
  $third_column = wp_nav_menu( array( 'menu' => 'vero_footer_third' ));
	return '<div class="pull-right">' . $third_column . '</div>' . '<div>' . $first_column . '</div>' . '<div>' . $second_column . '</div>';
}
function add_logo_to_navbar($menu, $args) {
  $args = (array)$args;
  if ( 'primary' !== $args['theme_location'] && 'blog-secondary-nav-menu' !== $args['theme_location'] )
    return $menu;
  ob_start();
  echo '<li id="logo" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.getvero.com"><img src="/wp-content/themes/vero/assets/images/logo-blue.png">Vero</a></li>';
  $logo = ob_get_clean();
  return $logo . $menu;
}

function set_cookies() {
  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $parsed_url = parse_url($url);

  if(!empty($_GET['c'])) {
    setcookie(str_replace('/', '_', $parsed_url['path']),'true',time() + (86400 * 180));
  } 
}

function custom_favicon( $favicon_url ) {
  return '/wp-content/themes/vero/assets/images/favicon.png';
}

function remove_cssjs_ver( $src ) {
  if( strpos( $src, '?ver=' ) )
    $src = remove_query_arg( 'ver', $src );
    return $src;
}

function add_body_classes($classes) {
  global $post;

  if ( is_singular('help_docs') ) {
    $classes[] = 'help-docs sidebar-content';
    return $classes;
  } else if ( is_singular('post') ) {
    $post_style = get_post_meta($post->ID, 'post_style', true); 
    if ( $post_style == 'centered' ) {
      $classes[] = 'blog centered';
    } else {
      $classes[] = 'blog';
    }
    return $classes;
  } else if ( is_singular('kb') || is_post_type_archive('kb') || is_tax('topic') ) {
    $classes[] = 'kb';
    return $classes;
  } else if ( is_singular('api_docs') ) {
    $classes[] = 'api-docs sidebar-content';
    return $classes;
  } else if ( is_singular('guides') ) {
    $classes[] = 'blog guides sidebar-content';
    return $classes;
  } else if ( is_home('post') || is_archive('post') ) {
    $classes[] = 'blog archive';
    return $classes;
  } else {
    return $classes;
  }
}

function add_categories_to_pages(){
  add_meta_box(   'categorydiv', __('Categories'), 'post_categories_meta_box', 
        'page', 'side', 'core');
  register_taxonomy_for_object_type('category', 'page');
}

function filter_text_on_static_pages() {
  global $post;
  if(in_category('static', $post)){
    remove_post_type_support( 'page', 'editor' );
  }
}

function add_blue_navbar_logic() {
  global $wp_query;
  //if ( is_singular('post') || is_home() || is_post_type_archive('post') || is_category() ) {
  //  wp_nav_menu( array(
  //  'theme_location' => 'third-menu-blog',
  //  'container_class' => 'blue-nav-menu'
  //  ) );
  //  echo '<div class="search-bar">';
  //  genesis_widget_area( 'docs_topbar' );
  //  echo '</div>';
  //} else 
  if ( is_singular('help_docs') || is_singular('api_docs') || is_singular('kb') || is_post_type_archive('kb') || is_tax('topic') ) {
    wp_nav_menu( array(
    'theme_location' => 'third-menu-docs',
    'container_class' => 'blue-nav-menu'
    ) );

    echo '<div class="search-bar">';
    genesis_widget_area( 'docs_topbar' );
    echo '</div>';
  }
}

function additional_active_item_classes($classes = array(), $menu_item = false){
    if(is_singular('kb')) {
      $post = get_post();
      $terms = get_the_terms( $post->ID, 'topic' );
      $term_array = array();
      $count = count($terms);
      if ( $count > 0 ){
        foreach ( $terms as $term ) {
            $term_array[] = $term->name;
        }
      }
    } else if(is_tax('topic')) {
      $q_object = get_queried_object();
      if( isset($q_object->taxonomy) ){
        $taxonomy = $q_object->taxonomy;
      }
    }
    //global $wp_query;
    if ( strtolower($menu_item->title) == 'docs' && ( is_post_type_archive('help_docs') || is_singular('help_docs') ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'knowledge base' && ( is_post_type_archive('kb') || is_singular('kb') || is_tax('topic') ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'api docs' && ( is_post_type_archive('api_docs') || is_singular('api_docs') ) ) {
      $classes[] = 'current-menu-item';
    } else if ( $menu_item->title == 'Pricing' && is_page('high-volume-senders') ) {
      $classes[] = 'current-menu-item';
    }  else if ( ( is_singular('kb') && in_array($menu_item->title, $term_array) ) || ( is_tax('topic') && ($menu_item->title == $taxonomy) ) ) {
      $classes[] = 'current-menu-item';
    } else if ( $menu_item->title == 'Email Marketing Resources' && (is_page('email-marketing-resources') || is_singular('guides') || is_singular('resources') ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'blog' && (array_shift(explode(".",$_SERVER['HTTP_HOST'])) == 'blog') ) {
      $classes[] = 'current-menu-item';
    } 
    return $classes;
}

function add_js() {
  wp_register_script('numeral', get_stylesheet_directory_uri() . '/assets/scripts/vendor/numeral.min.js', array('jquery'), NULL, true);
  wp_register_script('lead_modal', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.leanModal.min.js', array('jquery'), NULL, true);
  wp_register_script('lodash', '//cdnjs.cloudflare.com/ajax/libs/lodash.js/0.10.0/lodash.min.js', array('jquery'), NULL, true);
  wp_register_script('scrollwatch', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.scrollwatch.min.js', array('jquery'), NULL, true);
  wp_register_script('vero-js', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), NULL, true);
  wp_enqueue_script('numeral');
  wp_enqueue_script('lead_modal');
  wp_enqueue_script('lodash');
  wp_enqueue_script('scrollwatch');
  wp_enqueue_script('vero-js');
}

function add_gtm_identify() {
  $email = urldecode($_GET['vero_e']);
  if($_GET['vero_e'] != "") {
  ?>
    <script type="text/javascript" charset="utf-8">
      dataLayer = []
      dataLayer.push({'current_user_email': '<?php echo $email?>'});
    </script>
  <?php
  }
}

function read_more_link() {
  return '<a class="more-link btn btn-success" href="' . get_permalink() . '">Read more &rarr;</a>';
}

function custom_popups() {
  $post = get_post();
  $with_scroll = (get_post_meta($post->ID, 'percent', true));
  $percent = (get_post_meta($post->ID, 'percent_down', true));
  $popup_value = (do_shortcode(get_post_meta($post->ID, 'popup_value', true)));
  
  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $parsed_url = parse_url($url);
  
  $has_cookie = $_COOKIE[str_replace('/', '_', $parsed_url['path'])];

  if (!empty($popup_value) && empty($has_cookie)){
  ?>
    <div id="blog-popup" style="display:none;"><?php echo $popup_value ?></div>
  <?php if ($with_scroll == false) { ?>
    <script>jQuery(document).ready(function(){
      jQuery("#blog-popup").loadLeanModal();
    });</script>
  <?php } else { ?>
    <script>
      var body = document.body,
      html = document.documentElement;
      var height = Math.max( body.scrollHeight, body.offsetHeight, 
                           html.clientHeight, html.scrollHeight, html.offsetHeight );

      var interval = setInterval(function() {
          if (jQuery(window).scrollTop() >= (height * (<?php echo intval($percent)/100; ?>))) {
            jQuery("#blog-popup").loadLeanModal();
            clearInterval(interval);
          }
      }, 250);
    </script>
  <?php }
  }
}

function remove_digg_digg() {
  if ( !is_singular('post') ) {
    remove_filter('the_excerpt', 'dd_hook_wp_content');
    remove_filter('the_content', 'dd_hook_wp_content');
  } 
}

function add_admin_menu_separator( $position ) {
  global $menu;
  if (empty($menu[ $position ])) {
    $menu[ $position ] = array(
        0 => '',
        1 => 'read',
        2 => 'separator' . $position,
        3 => '',
        4 => 'wp-menu-separator'
      );
  } else {
    $count = 1;
    $empty = false;
    while ($empty == false) {
      $empty = empty($menu[ $position + $count ]);
      if ($empty == true) {
        $final_position = $position + $count - 1;
      }
      $count++;
    }
    if ($empty == true) {
      for ($i = $final_position; $i > $position; $i--) {
        $menu[ $i + 1 ] = $menu[ $i ];
      }
      $menu[ $position + 1] = array(
        0 => '',
        1 => 'read',
        2 => 'separator' . $position,
        3 => '',
        4 => 'wp-menu-separator'
      );
    }
  }
}

function remove_admin_menu_separator( $position ) {
  global $menu;
  unset($menu[$position]);
  return $menu;
}

function set_admin_menu_separator() {
  add_admin_menu_separator(25);
  add_admin_menu_separator("80.020");
  remove_admin_menu_separator(99);
}


//
// Customise blog posts
//----------------------
function add_blog_navbar_logic() {
  if ( is_singular('post') || is_singular('guides') || is_post_type_archive('post') || is_category() || is_home() || is_singular('resources') ) {
    echo '<nav class="nav-primary" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement"><div class="wrap">';
    wp_nav_menu( array(
      'theme_location' => 'blog-secondary-nav-menu',
      'container_class' => 'menu-primary'
    ) );
    echo '</div></nav>';
  }
}

function add_how_to_do_this_area () {
  if ( is_singular('post') ) { 
    global $post; 
    $how_to_vero = get_post_meta($post->ID, 'vero_how_to', true);
    if ( $how_to_vero == true ) { ?>
      <section class="how-to-vero">
        <?php 
          $title = get_post_meta($post->ID, 'vero_tip_title', true);
          $text = get_post_meta($post->ID, 'vero_tip_text', true);
        ?>
        <h4><?php echo $title ?></h4>
        <div class="text">
          <?php echo $text ?>
        </div>
        <a href="http://app.getvero.com/signup" class="btn btn-success">Free 14 day trial &rarr;</a>
      </section>
    <?php }
  }
}

function add_blog_cta_before_footer() {
  if ( is_singular('post') ) { ?>

  <section class="post-entry-widget">
    <?php dynamic_sidebar( 'after-post-widget' ); ?>
  </section>
  <?php }
}

function blog_post_featured_image () {
  if ( ! is_singular( 'post' ) )
    return;
  $img = genesis_get_image( array( 'format' => 'html', 'size' => genesis_get_option( 'image_size' ), 'attr' => array( 'class' => 'post-image' ) ) );
  printf( '<a class="post-image-link" href="%s" title="%s">%s</a>', get_permalink(), the_title_attribute( 'echo=0' ), $img );
}

function fix_blog_navs_and_header () {
  global $post;
  if( is_singular('post') ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    add_action( 'genesis_before_entry_content', 'genesis_do_post_title', 9 );
    add_action( 'genesis_before_entry_content', 'genesis_post_info', 9 );
    $post_style = get_post_meta($post->ID, 'post_style', true); 
    if ( $post_style == 'centered' ) {
      add_action( 'genesis_before_content', 'blog_post_featured_image', 8);
    } else {
      add_action( 'genesis_before_entry_content', 'blog_post_featured_image', 15);
    }
    remove_action('genesis_after_header', 'genesis_do_nav');
  } else if ( is_singular('resources') ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    remove_action('genesis_after_header', 'genesis_do_nav');
  } else if (is_singular('guides') ) {
    remove_action('genesis_after_header', 'genesis_do_nav');
  } else if ( is_author() || is_search()) {
    add_action( 'genesis_before_entry_content', 'genesis_entry_header_markup_open', 5 );
    add_action( 'genesis_before_entry_content', 'genesis_do_post_title' );
    add_action( 'genesis_before_entry_content', 'genesis_post_info', 12 );
    add_action( 'genesis_before_entry_content', 'genesis_entry_header_markup_close', 15 );
  } else if ( is_post_type_archive('post') || is_home() || is_category() ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    add_action( 'genesis_before_entry_content', 'genesis_do_post_title' );
    add_action( 'genesis_before_entry_content', 'genesis_post_info', 12 );
    remove_action('genesis_after_header', 'genesis_do_nav');
    if (is_post_type_archive('post') || is_home()){
      add_action('genesis_after_header', 'add_big_cta');
    }
  }
}


//
// Add and customise blog home page
//----------------------

function add_big_cta() {
  ?>
  <section id="top">
    <div class="inner">
      <h1>20 Tips to Drastically Better Email</h1>
      <h3>Actionable advice for every email marketer.</h3>
      <p><a href="http://blog.getvero.com/guides/email-marketing-best-practices/" class="btn btn-warning btn-large">Read Now</a></p>
    </div>
  </section>
  <?php
}

function create_sidebars_blog_home() {
  genesis_register_sidebar( array(
    'id'      => 'home-featured-full',
    'name'      => __( 'Home Featured Full', 'CHILD_THEME_NAME' ),
    'description' => __( 'This is the featured area if you want full width.', 'CHILD_THEME_NAME' ),
  ) );
  genesis_register_sidebar( array(
    'id'      => 'home-featured-left',
    'name'      => __( 'Home Featured Left', 'CHILD_THEME_NAME' ),
    'description' => __( 'This is the featured area left side.', 'CHILD_THEME_NAME' ),
  ) );
  genesis_register_sidebar( array(
    'id'      => 'home-featured-right',
    'name'      => __( 'Home Featured Right', 'CHILD_THEME_NAME' ),
    'description' => __( 'This is the featured area right side.', 'CHILD_THEME_NAME' ),
  ) );
  genesis_register_sidebar( array(
    'id'      => 'editors-pick-featured',
    'name'      => __( 'Editor\'s Pick Featured', 'CHILD_THEME_NAME' ),
    'description' => __( 'This is the Editor\'s Pick featured area.', 'CHILD_THEME_NAME' ),
  ) );
}



//
// Add and customise blog resources page
//----------------------
function create_sidebars_blog_resources() {
  genesis_register_sidebar( array(
    'id'      => 'resources-featured-full',
    'name'      => __( 'Resources Featured Full', 'CHILD_THEME_NAME' ),
    'description' => __( 'This is the featured area if you want full width.', 'CHILD_THEME_NAME' ),
  ) );
}


//
// Images
//------------------------
function add_class_to_small_images( $content ) {
  global $post;

  $dom = new DOMDocument();
  @$dom->loadHTML( $content );
  $dom->preserveWhiteSpace = false;
  $images = $dom->getElementsByTagName('img');
  foreach ($images as $image) {
    $parent = $image->parentNode;
    if ($parent->nodeName == 'a') {
      $parent = $parent->parentNode;
    }

    // get the widths of each image
    $width = $image->getAttribute('width');

    // the existing classes already on the images
    $existing_classes = $parent->getAttribute('class');

    // if image is less than 480px, add their old classes back in plus our new class
    
    if ( ! is_singular( 'guides' ) ) {
      if( $width < 1080) {
        // the class we're adding
        $new_class = ' small-image';
        // the existing classes plus the new class
        $class_names_to_add = $existing_classes . $new_class;
        $parent->setAttribute('class', $class_names_to_add);
      }
    } else {
      if ($width < 790 && $width > 600) {
        // the class we're adding
        $new_class = ' small-image';
        // the existing classes plus the new class
        $class_names_to_add = $existing_classes . $new_class;
        $parent->setAttribute('class', $class_names_to_add);
      } else if ($width < 600) {
        // the class we're adding
        $new_class = ' tiny-image';
        // the existing classes plus the new class
        $class_names_to_add = $existing_classes . $new_class;
        $parent->setAttribute('class', $class_names_to_add);
      }
    }
  }
  $iframes = $dom->getElementsByTagName('iframe');
  foreach ($iframes as $iframe) {
    $parent = $iframe->parentNode;
    if ($parent->nodeName == 'a') {
      $parent = $parent->parentNode;
    }
    // the existing classes already on the images
    $existing_classes = $parent->getAttribute('class');

    // the class we're adding
    $new_class = ' aspect-ratio';

    // the existing classes plus the new class
    $class_names_to_add = $existing_classes . $new_class;

    // if iframe is less than 480px, add their old classes back in plus our new class
    $parent->setAttribute('class', $class_names_to_add);
  }
  $content = $dom->saveHTML();
  return $content;
}

?>