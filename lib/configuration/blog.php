<?php

function force_full_width_on_posts( $options ) {
  if( is_singular('post') ) {
    $options = 'full-width-content'; 
    return $options;
  }
}

function add_blog_post_back_button() {
  if( is_singular('post') ){ ?>
    <a href="/articles" class="back-to-blog"><span class="fa fa-long-arrow-left"></span>Back to Blog</a>
  <?php }
}

function add_shares() {
  echo naked_social_share_buttons();
}

function remove_read_more_link() {
  return '...';
}

function add_custom_read_more_link() {
  if( is_blog_archive() ){ ?>
    <a class="more-link" href="' . get_permalink() . '">Read&nbsp;More</a>
  <?php }
}

function add_custom_category_entry_content() {
  ?>
  <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
  <?php
}

function category_setup() {
  if( is_category() || is_search() ){
    if(has_post_thumbnail()){
      ?>
        <div class='category-image' style='background:url("<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>"); background-size: cover'><a href='<?php the_permalink(); ?>'></a></div>
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

function change_excerpt_length() {
  if( is_category() || is_search() ){
    return 20;
  }
}

function post_remove_footer() {
  if( is_single() ){
    remove_action( 'genesis_entry_footer', 'add_shares' );
  }
}

function add_latest_title() {
  if( is_home() ){ ?>
    <h2 class="section-title">Latest</h2>
  <?php }
  else if( is_category() ){ ?>
    <h2 class="section-title"><?php single_cat_title() ?></h2>
  <?php }
}

function add_categories_and_search() {
  if( is_blog_archive() ){ ?>
    <div id="blog-sub-menu">
      <ul id="categories-menu">
        <li><a href="/articles">All</a></li>
        <li><a href="/articles/category/articles">Articles</a></li>
        <li><a href="/articles/category/tips">Tips</a></li>
        <li><a href="/articles/category/product">Product</a></li>
        <li><a href="/articles/category/case-studies">Case Studies</a></li>
      </ul>
      <?php
        get_search_form(true);
      ?>
    </div>

  <?php }
}

function add_featured_posts() {
  if( is_home() ){
    ?>
    <div class='featured-posts'>
    <?php
    $custom_query = new WP_Query('featured=yes');
    while( $custom_query->have_posts() ) : $custom_query->the_post(); 
      $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
      $category = get_the_category(); ?>
      <div class='featured-post' style='background:url("<?php echo $featured_image; ?>"); background-size: cover'> 
        <div class='featured-image-overlay'></div>
        <div class="featured-titles">
          <div class="shares-label facebook"><span class="fa fa-facebook"></span><?php echo do_shortcode('[pssc_facebook]'); ?></div>
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

?>