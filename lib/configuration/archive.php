<?php

function prev_link_text() {
        $prevlink = 'Previous';
        return $prevlink;
}
function next_link_text() {
        $nextlink = 'Next';
        return $nextlink;
}

function remove_read_more_link() {
  return '...';
}

function add_custom_read_more_link() {
  if( is_blog_archive() ){ ?>
    <a class="more-link" href="<?php the_permalink(); ?>">Read&nbsp;More</a>
  <?php }
}

function get_highest_shares() {
  $options = array('twitter', 'facebook', 'total');
  $shares = array();
  $i = -1;

  foreach ( $options as &$option ) {
    $i++;

    $string = '[scc_share_count_'.$option.']';
    $score = do_shortcode($string);
    $shares[$i] = intval($score);
  }

  if ( $shares[3] > 500 ) {
    $max = 3;
  } else {
    unset($shares[3]);
    $max = array_keys($shares, max($shares))[0];
  }

  $result = array();
  $result['platform'] = $options[$max];
  $result['shares'] = $shares[$max];

  return $result;
}

function add_featured_posts() {
  if( is_home() && !is_paged() ){
    ?>
    <div class='featured-posts'>
    <?php
    $custom_query = new WP_Query(array(
      'post_type' => array('post', 'guides'),
      'featured' => 'yes'
    ));
    while( $custom_query->have_posts() ) : $custom_query->the_post(); 
      $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
      $category = get_the_category(); 
      $result = get_highest_shares();
      if( $result['shares'] < 30 ) {
        $result['platform'] = "none";
        $result['shares'] = "Editor's Pick";
      } else if( $result['platform'] == 'total' ) {
        $result['platform'] = 'share';
        $result['shares'] = number_format($result['shares']);
      } else {
        $result['shares'] = number_format($result['shares']);
      }
      ?>
      <div class='featured-post' <?php if ( $featured_image != '' ) { ?>style='background:url("<?php echo $featured_image; ?>"); background-size: cover'<?php } ?>> 
        <div class='featured-image-overlay'></div>
        <div class="featured-titles">
          <div class="shares-label <?php echo $result['platform']; ?>"><span class="fa fa-<?php echo $result['platform']; ?>"></span><?php echo $result['shares']; ?></div>
          <div class="category"><?php echo $category[0]->cat_name; ?></div>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <a class='featured-link-overlay' href="<?php the_permalink(); ?>"></a>
      </div>
    <?php endwhile; 
    wp_reset_postdata();
    ?>
    </div>
    <?php
  }
}

function add_custom_category_entry_content() {
  ?>
  <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
  <?php
}

function add_shares() {
  if( is_blog_archive() ){
    ?>
      <div class='shares-block'>
        <div class='total-shares'>
          <span><?php echo do_shortcode('[scc_share_count_total]'); ?></span>Shares
        </div>
        <?php echo naked_social_share_buttons(); ?>
      </div>
    <?php
  }
}

function change_excerpt_length() {
  if( is_category() || is_search() ){
    return 20;
  }
}

function category_setup() {
  if( is_category() || is_search() ){
    if(has_post_thumbnail()){
      $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      ?>
        <div class='category-image' style='<?php if( $image != '' ) { ?>background:url("<?php echo $image; ?>"); background-size: cover'<?php } ?>><a href='<?php the_permalink(); ?>'></a></div>
      <?php
    }
    else {
      ?>
        <div class='category-image'><a href='<?php the_permalink(); ?>'></a></div>
      <?php
    }

    remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
    add_action( 'genesis_entry_content', 'add_custom_category_entry_content' ); 
    remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
    remove_action( 'genesis_entry_footer', 'add_custom_read_more_link' );
    remove_action( 'genesis_entry_footer', 'add_shares' );
  }
}

function add_latest_title() {
  if( is_home() && !is_paged() ){ ?>
    <h2 class="section-title">Latest</h2>
  <?php }
  else if( is_home() && is_paged() ){ 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    <h2 class="section-title">All – Page <?php echo $paged; ?></h2>
  <?php }
  else if( is_category() ){ ?>
    <h2 class="section-title"><?php single_cat_title() ?></h2>
  <?php }
  else if( is_search() ) { ?>
    <h2 class="section-title">Search results for: <?php echo get_search_query(); ?></h2>
  <?php }
}

function get_category_title() {
  if( is_home() ){ 
    echo "All";
  } else if( is_category() ){
    echo single_cat_title();
  } else if( is_search() ) { 
    echo "Search";
  }
}

function add_categories_and_search() {
  if( is_blog_archive() ){ ?>
    <div id="blog-sub-menu">
      <div class="categories">
        <div class="category-button"><?php get_category_title(); ?><span class="fa fa-angle-down"></span></div>
        <ul id="categories-menu">
          <li class="<?php echo is_active('all'); ?>"><a href="/resources">All</a></li>
          <li class="<?php echo is_active('how-to'); ?>"><a href="/resources/category/how-to">How To's</a></li>
          <li class="<?php echo is_active('case-studies'); ?>"><a href="/resources/category/case-studies">Case Studies</a></li>
          <!-- <li class="<?php echo is_active('product-updates'); ?>"><a href="/resources/category/case-studies">Product Updates</a></li> -->
        </ul>
      </div>
      <?php
        get_search_form(true);
      ?>
    </div>

  <?php }
}

?>