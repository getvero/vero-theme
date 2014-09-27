<?php

//
// Guides
//------------------------
function create_guides_post_type() {
  if (genesis_get_option('guides') == true) {
    $labels = array(
      'name' => __( 'Guides' ),
      'singular_name' => __( 'Guide' )
    );

    $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => false,
      'menu_icon' => '/wp-content/themes/vero/assets/images/icons/attibutes.png',
      'rewrite' => array('slug' => 'guides','with_front' => true),
      'hierarchical' => true,
      'supports' => array('title','editor','comments','page-attributes','thumbnail', 'excerpt')
    );

    register_post_type( 'guides', $args);
    add_post_type_support( 'guides', 'genesis-layouts' );

    //change_guide_slugs();
  }
}

function change_guide_slugs() {
  if (genesis_get_option('guides') == true) {
    global $wpdb;
    if (is_admin()) {
        add_permastruct( 'guides', "%guides%", array(
          'ep_mask' => EP_PERMALINK
        ) );
    } else {
      $url = $_SERVER['REDIRECT_URL'];
      $url = explode('/',$url);

      foreach ($url as $k => $v) {
        if (empty($v)) continue;

        $queryx = $wpdb->prepare('SELECT ID FROM ' . $wpdb->posts . ' WHERE post_name = %s', sanitize_title_with_dashes($v));
        $pageid = $wpdb->get_var( $queryx );

        if (!empty($pageid)) {
          $ps = get_post($pageid);
          if ($ps->post_type == 'guides') {
              add_permastruct( 'guides', "%guides%", array(
                'ep_mask' => EP_PERMALINK
              ) );
            break;
          }
        }
      }
    }
  }
}

function custom_header_for_guides () {
  if (genesis_get_option('guides') == true) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    add_action( 'genesis_before_content', 'guides_featured_title', 9 );
    add_action( 'genesis_entry_header', 'guides_chapter_headers', 9);
  }
}

function guides_featured_title () {
  if (genesis_get_option('guides') == true) {
    if ( ! is_singular( 'guides' ) )
      return;
    $post = get_post();
    if (!empty($post->post_parent)) {
      $parent = get_post($post->post_parent);
      $title = get_the_title($parent);
      $img = wp_get_attachment_image_src(get_post_thumbnail_id($parent->ID), 'large');
      $img = $img[0];    
      //$img = genesis_get_image( array( 'format' => 'url', 'size' => genesis_get_option( 'image_size' ), 'attr' => array( 'class' => 'post-image' ) ) );
    } else {
      $title = get_the_title();
      $img = genesis_get_image( array( 'format' => 'url', 'size' => genesis_get_option( 'image_size' ), 'attr' => array( 'class' => 'post-image' ) ) );
    }
    printf( '<div id="guide-title" style="background:url(%s)"><div id="title-inner">
      <div id="title-well" class="well">
        <p class="what meta">An Epic Guide To</p>
        <h1><span class="small h5">Email Marketing <br>Best Practices</span><span class="big">%s</span></h1>
        <p class="published meta">by <span>Jimmy Daly</span><br>on <span>23 September 2014</span></p>
      </div></div></div>', $img, $title );
  }
}

function guides_chapter_headers () {
  if (genesis_get_option('guides') == true) {
    if ( ! is_singular( 'guides' ) )
      return;
    $post = get_post();
    $chapter_number = get_post_meta($post->ID, 'chapter_number', true); 
    if (!empty($post->post_parent)) { ?>
    <div class="entry-header">
      <div class="title toc-chapter">
        <p class="number"><?php echo $chapter_number ?></p>
        <h1>
          <span>CHAPTER</span>
          <?php echo the_title(); ?>
        </h1>
      </div>
    </div>
  <?php }
  }
}

function fix_guide_navs () {
  if (genesis_get_option('guides') == true) {
    if( is_singular('guides')) {
      remove_action('genesis_after_header', 'genesis_do_subnav');
    }
  }
}

?>