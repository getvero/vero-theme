<?php

include_once( CHILD_DIR . '/lib/custom_post_types/guides.php' );
include_once( CHILD_DIR . '/lib/custom_post_types/resources.php' );
include_once( CHILD_DIR . '/lib/custom_post_types/api.php' );
include_once( CHILD_DIR . '/lib/custom_post_types/help_docs.php' );
include_once( CHILD_DIR . '/lib/custom_post_types/campaigns.php' );
include_once( CHILD_DIR . '/lib/custom_post_types/jobs.php' );

//
//Tweaks to Genesis
//----------------------
function custom_load_custom_style_sheet() {
  if($_SERVER["HTTP_HOST"] == "localhost:8888"){
    $base_url = "http://0.0.0.0:9000";
    wp_enqueue_style( 'custom-stylesheet', $base_url."/blog.css", array(), PARENT_THEME_VERSION );
    wp_enqueue_style( 'marketing-stylesheet', $base_url."/marketing.css", array(), PARENT_THEME_VERSION );
  } else if($_SERVER["HTTP_HOST"] == "getvero.staging.wpengine.com" || $_SERVER["HTTP_HOST"] == "veropublic.staging.wpengine.com" ) {
    $base_url = "http://static.getvero.com.s3.amazonaws.com";
    wp_enqueue_style( 'custom-stylesheet', $base_url."/blog.css", array(), PARENT_THEME_VERSION );
    wp_enqueue_style( 'marketing-stylesheet', $base_url."/marketing.css", array(), PARENT_THEME_VERSION );
  } else {
    $base_url = "https://d3qxef4rp70elm.cloudfront.net";
    wp_enqueue_style( 'custom-stylesheet', $base_url."/blog.min.css", array(), PARENT_THEME_VERSION );
    wp_enqueue_style( 'marketing-stylesheet', $base_url."/marketing.min.css", array(), PARENT_THEME_VERSION );
  }
}

function my_attributes_dropdown_pages_args($dropdown_args) {
  $dropdown_args['post_status'] = array('publish','draft');
  return $dropdown_args;
}

function get_custom_excerpt($length=55,$text='') { // Fakes an excerpt if needed
  global $post;
  if ( '' == $text ) {
    $text = get_the_content('');
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $text = strip_tags($text,'<p>');
    $excerpt_length = $length;
    $words = explode(' ', $text, $excerpt_length + 1);
    if (count($words) > $excerpt_length) {
      array_pop($words);
      array_push($words, '[...]');
      $text = implode(' ', $words);
    }
  }
  return $text;
}

function get_custom_excerpt_with_text($length=55,$text='') { // Fakes an excerpt if needed
  $text = str_replace(']]>', ']]>', $text);
  $text = strip_tags($text,'<p>');
  $excerpt_length = $length;
  $words = explode(' ', $text, $excerpt_length + 1);
  if (count($words) > $excerpt_length) {
    array_pop($words);
    array_push($words, '[...]');
    $text = implode(' ', $words);
  }
  return $text;
}


function namespace_add_custom_types( $query ) {
  global $wp_the_query;

  if( ((is_post_type_archive('post') ) || is_home()) && $query === $wp_the_query && !is_admin() ) {
    $query->set( 'post_type', array(
      'post', 'guides'
    ));
    if(!is_paged()){
      $query->set( 'offset', 1 );
    }
    $query->set( 'post_parent', 0 );
    return $query;
  }
}

function child_output_filter( $backtotop_text, $creds_text ) {
  $first_column = wp_nav_menu( array( 'menu' => 'Vero Footer - Copyright' ));
  $second_column = wp_nav_menu( array( 'menu' => 'Vero Footer - Left One' ));
}

function add_logo_to_navbar($menu, $args) {
  $args = (array)$args;
  if ( 'primary' !== $args['theme_location'] && 'blog-secondary-nav-menu' !== $args['theme_location'] )
    return $menu;
  ob_start();
  echo '<li id="logo" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.getvero.com"><img src="/wp-content/themes/vero/assets/images/logo-blue.png">Vero</a></li>';
  if($_SERVER["HTTP_HOST"] == "getvero.staging.wpengine.com" || $_SERVER["HTTP_HOST"] == "blog.getvero.com" ) { 
    echo '<li id="hiring"><a href="https://www.getvero.com/jobs">We are hiring</a></li>';
  } else {
    echo '<li id="what-is-vero" class="menu-item menu-item-type-custom menu-item-object-custom"><span>Data-driven email marketing software</span></li>';
  }
  $logo = ob_get_clean();
  if( $args['theme_location'] == 'blog-secondary-nav-menu' )
    $search = "<li id='search' class='menu-item menu-item-type-custom'>" . get_search_form(false) ."</li>";
  return $logo . $menu . $search;
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

  $useragent=$_SERVER['HTTP_USER_AGENT'];
  if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
    $classes[] = 'mobile';
  }
  if ( is_tax('help_docs_categories') ){
    foreach($classes as $key => $value) {
      if ($value == 'archive') unset($classes[$key]);
    }
    return $classes;
  } 
  else if ( is_singular('help_docs') ) {
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
  } else if ( is_singular('api_docs') ) {
    $classes[] = 'api-docs sidebar-content';
    return $classes;
  } else if ( is_singular('campaigns') ) {
    $classes[] = 'campaigns sidebar-content';
    return $classes;
  } else if ( is_singular('guides') ) {
    $classes[] = 'blog guides sidebar-content';
    return $classes;
  } else if ( is_home('post') || is_archive('post') ) {
    $classes[] = 'blog archive';
    return $classes;
  } else if (is_search()){
    $classes[] = 'blog';
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
    //remove_post_type_support( 'page', 'editor' );
  }
}

function add_blue_navbar_logic() {
  global $wp_query;
  if ( is_singular('api_docs')  ) {
    echo "<div id='blue-holder'><div class='spacer'></div>";
    wp_nav_menu( array(
      'theme_location' => 'third-menu-docs',
      'container_class' => 'blue-nav-menu left'
    ) );
    wp_nav_menu( array( 
      'menu' => 'api-docs-languages',
      'container_class' => 'blue-nav-menu right' 
    ) );
    echo "</div><div class='spacer'></div>";
  } else if (is_page('faq') || is_singular('campaigns') || is_post_type_archive('campaigns') || is_singular('help_docs') || is_tax('help_docs_categories') || is_page('help') ) {
    wp_nav_menu( array(
      'theme_location' => 'third-menu-docs',
      'container_class' => 'blue-nav-menu left'
    ) );
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
    } else if ( strtolower($menu_item->title) == 'idea lab' && ( is_singular('campaigns') || is_post_type_archive('campaigns')) ) {
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
  wp_register_script('cross-domain', get_stylesheet_directory_uri() . '/assets/scripts/cross-domain.js', array('jquery'), NULL, true);
  wp_register_script('vmodal', get_stylesheet_directory_uri() . '/assets/scripts/vmodal.js', array('jquery'), NULL, true);
  wp_register_script('cookies', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.cookie.js', array('jquery'), NULL, true);
  wp_register_script('numeral', get_stylesheet_directory_uri() . '/assets/scripts/vendor/numeral.min.js', array('jquery'), NULL, true);
  wp_register_script('lead_modal', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.leanModal.min.js', array('jquery'), NULL, true);
  wp_register_script('lodash', '//cdnjs.cloudflare.com/ajax/libs/lodash.js/0.10.0/lodash.min.js', array('jquery'), NULL, true);
  wp_register_script('scrollwatch', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.scrollwatch.min.js', array('jquery'), NULL, true);
  wp_register_script('greensock', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.15.1/TweenMax.min.js', array('jquery'), NULL, true);
  wp_register_script('draggable', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.15.1/utils/Draggable.min.js', array('jquery'), NULL, true);
  wp_register_script('scrollmagic', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.scrollmagic.min.js', array('jquery'), NULL, true);
  wp_register_script('sticky', get_stylesheet_directory_uri() . '/assets/scripts/vendor/jquery.sticky.js', array('jquery'), NULL, true);
  wp_register_script('dots', get_stylesheet_directory_uri() . '/assets/scripts/dots.js', array('jquery'), NULL, true);
  wp_register_script('vero-js', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), NULL, true);
  wp_register_script('homepage', get_stylesheet_directory_uri() . '/assets/scripts/homepage.js', array('jquery'), NULL, true);
  wp_enqueue_script('cross-domain');
  wp_enqueue_script('vmodal');
  wp_enqueue_script('numeral');
  wp_enqueue_script('cookies');
  wp_enqueue_script('lead_modal');
  wp_enqueue_script('lodash');
  wp_enqueue_script('scrollwatch');
  wp_enqueue_script('greensock');
  wp_enqueue_script('draggable');
  wp_enqueue_script('scrollmagic');
  wp_enqueue_script('sticky');
  if ( (is_front_page() || is_page('high-volume-senders') )  && ($_SERVER["HTTP_HOST"] == "veropublic.staging.wpengine.com" || $_SERVER["HTTP_HOST"] == "www.getvero.com" || $_SERVER["HTTP_HOST"] == "localhost:8888" )) {
    wp_enqueue_script('dots');
  }
  wp_enqueue_script('vero-js');
  wp_enqueue_script('homepage');
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
  return '<p><a class="more-link btn btn-success" href="' . get_permalink() . '">Read more &rarr;</a></p>';
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
// Add video
//----------------------
function add_video() {
  global $post;

  $video = "<div id='video-embed'>".get_post_meta($post->ID, 'video_embed_code', true)."</div>";

  return $video;
}

//
// Customise blog posts
//----------------------
function add_blog_navbar_logic() {
  if ( is_singular('post') || is_author() || is_search() || is_singular('guides') || is_post_type_archive('post') || is_category() || is_home() || is_singular('resources') ) {
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
    add_action( 'genesis_before_entry_content', 'do_post_type' );
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
  //} else if ( is_author() || is_search()) {
  //  add_action( 'genesis_before_entry_content', 'genesis_entry_header_markup_open', 5 );
  //  add_action( 'genesis_before_entry_content', 'genesis_do_post_title' );
  //  add_action( 'genesis_before_entry_content', 'genesis_post_info', 12 );
  //  add_action( 'genesis_before_entry_content', 'genesis_entry_header_markup_close', 15 );
  } else if ( is_singular('api_docs') ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
    remove_action( 'genesis_footer', 'genesis_do_footer' );
    remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
  } else if ( is_post_type_archive('post') || is_home() || is_category() || is_search() || is_author() ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    add_action( 'genesis_before_entry_content', 'do_post_type' );
    add_action( 'genesis_before_entry_content', 'genesis_do_post_title' );
    //add_action( 'genesis_before_entry_content', 'genesis_post_info', 12 );
    remove_action('genesis_after_header', 'genesis_do_nav');
    //Ads 
    if (is_singular('campaigns') || is_singular('jobs')){
    } else {
      add_action( 'genesis_after_entry_content', 'ads_after_post_content' );
    }
    if (is_post_type_archive('post') || is_home() ){
      add_action('genesis_after_header', 'add_big_cta');
    }
  } else if ( is_singular('help_docs') ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    add_action( 'genesis_before_entry_content', 'add_help_docs_breadcrumbs');
    add_action( 'genesis_before_footer', 'add_help_docs_footer');
    add_action( 'genesis_before_entry_content', 'genesis_do_post_title' );
  }
}

function do_post_type($color,$line=true,$latest=false,$temp_title=nil) {
  global $post;
  ?>
    <div class="post-type-block center-text">
      <div class="the-date"><?php if($latest==true){ echo 'Latest'; } else {the_date('d M Y');} ?></div>
      <div class="circle"><img src="/wp-content/themes/vero/assets/images/post-types/<?php get_the_desc_for_post_type(get_post_type($post),$temp_title) ?><?php echo $color ?>.png"></div>
      <div class="tag"><?php get_the_desc_for_post_type( get_post_type($post),$temp_title)?></div>
    </div>
    <?php if($line == true){
      ?><div class="post-type-line"></div>
    <?php }
}

function get_the_desc_for_post_type($type,$title=nil){
  if ($title != nil) {
    echo $title;
  } else {
    switch($type){
      case "guides":
        echo "guide";
        break;
      case "resources":
        echo "ebook";
        break;
      default:
        echo "post";
        break;
    }
  }
}

function ads_after_post_content() {
  global $loop_counter;
  $loop_counter++;

  if( 3 == $loop_counter ) { 
    if(function_exists('drawAdsPlace')) drawAdsPlace(array('id' => 1), true);
  }
}

//
// Add and customise blog home page
//----------------------

function add_big_cta() {
  $args = array(
    'posts_per_page' => 1,
    'post_parent' => 0, 
    'post_type' => array(
      'post', 'guides'
    )
  );

  if(!is_paged() ) { 
    $counter = 0;
    echo "<div class='big-cta-area'>";

    $the_query = new WP_Query( $args );
    $items = $the_query->get_posts();

    #foreach( $items as $item ) {
    #  if($counter < 1) {
    $item = $items[0];
        setup_postdata( $item );
        $img = wp_get_attachment_url( get_post_thumbnail_id($item->ID) );
        ?>
          <div class='big-bg <?php echo get_the_desc_for_post_type(get_post_type($item)) ?>' style="background:url('<?php echo $img; ?>') no-repeat center center fixed;">
          <div class="shade">
          <div class="wrap">
            <div class="post-type-line-top"></div>
            <?php 
              //$type = get_the_desc_for_post_type(get_post_type($item)); 
              do_post_type('white',false,true); 
            ?>
            <h1><a href="<?php echo get_the_permalink($item) ?>"><?php echo get_the_title($item) ?></a></h1>
            <p><?php echo get_custom_excerpt(110); ?></p>
            <p>
              <a class="more-link btn btn-success" href="<?php echo get_the_permalink($item); ?>">Read more &rarr;</a>
            </p>
            </div>
          </div>
          </div>
        <?php
    #  }

    #  $counter++;
    #}
    echo "</div>";
  }
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
