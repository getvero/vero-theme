<?php

function force_full_width_on_posts( $options ) {
  if( is_singular('post') ) {
    $options = 'full-width-content'; 
    return $options;
  }
}

function add_blog_post_back_button() {
  if( is_singular('post') ){ ?>
    <a href="/articles">Back to Blog</a>
  <?php }
}

function add_shares_before_meta_data() {
  echo naked_social_share_buttons();
}

function add_blog_search() {
  if( is_blog_archive() ){
    get_search_form(true);
  }
}

function add_categories_menu() {
  if( is_blog_archive() ){ ?>
    <ul>
      <li><a href="/articles">All</a></li>
      <li><a href="/articles/category/articles">Articles</a></li>
      <li><a href="/articles/category/tips">Tips</a></li>
      <li><a href="/articles/category/product">Product</a></li>
      <li><a href="/articles/category/case-studies">Case Studies</a></li>
    </ul>
  <?php }
}

function add_featured_posts() {
  if( is_home() ){
    $custom_query = new WP_Query('featured=yes');
    while( $custom_query->have_posts() ) : $custom_query->the_post(); 
      $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
      $category = get_the_category(); ?>
      <div class='featured-post' style='background:url("<?php echo $featured_image; ?>")'> 
        <div>Facebook shares: <?php echo do_shortcode('[pssc_facebook]'); ?></div>
        <div>First category: <?php echo $category[0]->cat_name; ?></div>
        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
      </div>
    <?php endwhile; 
    wp_reset_postdata(); 
  }
}

?>