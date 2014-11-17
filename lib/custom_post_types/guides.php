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
      'menu_icon' => '/wp-content/themes/vero/assets/images/icons/guides.png',
      'rewrite' => array('slug' => 'guides','with_front' => true),
      'hierarchical' => true,
      'supports' => array('title','editor','page-attributes','thumbnail', 'excerpt'),
      'taxonomies' => array('category')
    );

    register_post_type( 'guides', $args);
    add_post_type_support( 'guides', 'genesis-layouts' );

    //change_guide_slugs();
  }
}

//Force full width layout
function guides_layout($opt) {
  if ( 'guides' == get_post_type() )
    $opt = 'full-width-content';
    return $opt;
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

function guides_before_footer () {
    if ( ! is_singular( 'guides' ) )
      return;
    ?>
    <div id="guide-footer">
      <div id="title-well" class="well">
        <h1><span class="small h5">Get more great content</span><span class="big">Read our other guides</span></h1>
        <a href="/email-marketing-resources" class="btn btn-success">Check them out &rarr;</a>
      </div>
    </div>
    <?php 
}

function guides_featured_title () {
  global $post;

  if (genesis_get_option('guides') == true) {
    if ( ! is_singular( 'guides' ) )
      return;
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
    $what_is_it = get_post_meta($post->ID, 'what_is_it', true); 
    $sub_title = get_post_meta($post->ID, 'sub_title', true); 
    $author_id = get_queried_object()->post_author;
    $author = get_the_author_meta('display_name', $author_id);
    $date = get_the_date("d F Y");

    printf( '<div id="guide-title" style="background:url(%s)"><div id="title-inner">
      <div id="title-well" class="well">
        <p class="what meta">'.$what_is_it.'</p>
        <h1><span class="small h5">'.$sub_title.'</span><span class="big">%s</span></h1><p class="published meta">by <span>'.$author.'</span><br>on <span>'.$date.'</span></p>
      </div></div></div>', $img, $title );
    echo do_shortcode('[easy-share buttons="facebook,twitter,linkedin,buffer,pocket" counters=1 hide_names="force" counter_pos="inside" native="no" total_counter_pos="left" template="metro-retina"]');
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
        <h1>
          <span class="h5">Chapter <?php echo $chapter_number ?></span><br>
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

function add_guides_scripts()
{
  global $post;

  if ('20 Tips for Dramatically Better Emails')
  {
    wp_register_script('20-tips', get_stylesheet_directory_uri() . '/assets/scripts/20-tips.js', array('jquery'), NULL, true);
    wp_enqueue_script('20-tips');
  }

  if ($post->post_name == 'the-amazon-experience') {
    wp_register_script('amazon-experience', get_stylesheet_directory_uri() . '/assets/scripts/amazon-experience.js', array('jquery'), NULL, true);
    wp_enqueue_script('amazon-experience');
  }
}

function add_guides_sidebar() {
  if ( ! is_singular( 'guides' ) )
    return;
  echo "<div id='sidebar'>";
  genesis_widget_area( 'guides-sidebar-widget' );
  echo "</div>";
}

function add_custom_elements_to_guides() {
  global $post;

  if ($post->post_name == 'the-amazon-experience') {
    echo "<div id='top-bar-journey'>
    <ul class='list-unstyled list-inline'>
    <li id='link-to-email-1'><a href='#email-1'><span class='circle'>1</span>Welcome</a><span class='line'></span></li>
    <li id='link-to-email-2'><a href='#email-2'><span class='circle'>2</span>Receipt</a><span class='line'></span></li>
    <li id='link-to-email-3'><a href='#email-3'><span class='circle'>3</span>Shipping</a><span class='line'></span></li>
    <li id='link-to-email-4'><a href='#email-4'><span class='circle'>4</span>Thank You</a><span class='line'></span></li>
    <li id='link-to-email-5'><a href='#email-5'><span class='circle'>5</span>Invite</a><span class='line'></span></li>
    <li id='link-to-email-6'><a href='#email-6'><span class='circle'>6</span>Upsell</a><span class='line'></span></li>
    <li id='link-to-email-7'><a href='#email-7'><span class='circle'>7</span>Black Friday</a><span class='line'></span></li>
    <li id='link-to-email-8'><a href='#email-8'><span class='circle'>8</span>Review</a><span class='line'></span></li>
    <li id='link-to-email-9'><a href='#email-9'><span class='circle'>9</span>Browsing</a><span class='line'></span></li>
    </ul>
    <div id='call-to-action-top'>
    <form action='https://app.getvero.com/forms/243e4965b0e9af63977a56c577bd26d1' method='post'>
      <p>Email tips, once per week</p><input name='email' type='email'><input type='hidden' value='http://blog.getvero.com/thanks-subscribing?where=guide-amazon' name='redirect_on_success'><input type='submit' value='Subscribe' class='btn btn-success btn-xsmall'><br>
    </form>
    </div>";
  }
}
?>