<?php

function prev_link_text() {
        $prevlink = 'Previous';
        return $prevlink;
}
function next_link_text() {
        $nextlink = 'Next';
        return $nextlink;
}

function remove_search_title() {
  if ( is_search() ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    remove_action( 'genesis_before_loop', 'genesis_do_search_title' );
  }
}

function add_feature_image_to_posts() {
  if ( is_singular('post') ){
    global $post;
    ?>
      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
    <?php
  }
}

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
  if( !is_category() && !is_singular('post') ){
    ?>
      <div class='shares-block'>
        <div class='total-shares'>
          <span><?php echo do_shortcode('[pssc_all]'); ?></span>Shares
        </div>
        <?php echo naked_social_share_buttons(); ?>
      </div>
    <?php
  }
}

function add_shares_to_post() {
  if( is_singular('post') ){
    ?>
      <div class='shares-block'>
        <div class='total-shares'>
          <span><?php echo do_shortcode('[pssc_all]'); ?></span>Shares
        </div>
        <?php echo naked_social_share_buttons(); ?>
      </div>
    <?php
  }
}

function remove_read_more_link() {
  return '...';
}

function add_custom_read_more_link() {
  if( is_blog_archive() ){ ?>
    <a class="more-link" href="<?php the_permalink(); ?>">Read&nbsp;More</a>
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

function is_active($page) {
  if( $page == 'all' && is_home() ) {
    return 'active';
  } else if( in_category($page) ) {
    return 'active';
  } else {
    return '';
  }
}

function add_categories_and_search() {
  if( is_blog_archive() ){ ?>
    <div id="blog-sub-menu">
      <div class="category-button"><div class="category-current">All<span class='fa fa-angle-down'></span></div></div>
      <ul id="categories-menu">
        <li class="<?php echo is_active('all'); ?>"><a href="/articles">All</a></li>
        <li class="<?php echo is_active('articles'); ?>"><a href="/articles/category/articles">Articles</a></li>
        <li class="<?php echo is_active('tips'); ?>"><a href="/articles/category/tips">Tips</a></li>
        <li class="<?php echo is_active('product'); ?>"><a href="/articles/category/product">Product</a></li>
        <li class="<?php echo is_active('case-studies'); ?>"><a href="/articles/category/case-studies">Case Studies</a></li>
      </ul>
      <?php
        get_search_form(true);
      ?>
    </div>

  <?php }
}

function change_search_form_type($form) {
  $form = str_replace( 'type="search"', 'type="text"', $form ); 
  return $form;
}

function add_featured_posts() {
  if( is_home() && !is_paged() ){
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

function change_post_info($post_meta) {
  global $post;
  $categories = get_the_category();
  //$categories = get_the_category($post->ID);
  $category = $categories[0]->cat_name;
  ?>
  <p class="entry-meta">
    <a href="<?php echo get_category_link( get_cat_ID( $category ) ); ?>"><?php echo $category; ?></a>
    Written On
    <time class="entry-time" itemprop="datePublished" datetime="2015-05-06T06:33:11+00:00">
      <?php echo the_time('j F, Y'); ?>
    </time> 
    by 
    <span class="entry-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
      Jimmy Daly
    </span> 
  <?php 
}

function add_subscribe_form() {
  if(is_singular('post')){
    ?>
    <div class='subscribe-form center-block'>
      <h2>Receive marketing tips in your inbox!</h2>
      <form action='https://app.getvero.com/forms/d18fad198e3fb6d5d641d602ba7006f1' method='post'>
          <input name='email' type='email' class="form-control" placeholder="email@address.com"></input>
          <input type='submit' value='Subscribe' class="btn btn-success"/>
      </form>
    </div>
  <?php
  }
}

function add_author_bio() {
  if( is_singular('post') ){
    global $post;
    ?>
    <div class='author-bio'>
      <div class='author-title'>Written by</div>
      <div class='author-image'><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></div>
      <div class='author-details'>
        <p class='author-name'><?php echo get_the_author_meta( 'display_name' ); ?></p>
        <p class='author-description'><?php echo get_the_author_meta( 'description' ); ?></p>
      </div>
    </div>
    <?php
  }
}

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
    $child_classes = $image->getAttribute('class');
    // the existing classes already on the images
    $existing_classes = $parent->getAttribute('class');
    $existing_styles = $parent->getAttribute('style');
    
    if( $width < 628) {
      // the class we're adding
      $new_class = ' small-image';
      $new_style = $width .'px';
      // the existing classes plus the new class
      $class_names_to_add = $existing_classes . $new_class;
      $parent->setAttribute('class', $class_names_to_add);
      // add width as a style
      $styles_to_add = $existing_styles . $new_style;
      $parent->setAttribute('style', $styles_to_add);
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

function add_post_sidebar() {
  if ( is_singular( 'post' ) ) {
    genesis_widget_area( 'post-sidebar' );
  }
}

function blue_signup_box_content() {
  return "<div class='interstitial'><div class='interstitial-left'><h1>Increase Conversion with Vero</h1><p>Data Driven Email Marketing Software</p><a class='btn btn-success' href='#'>14 Day Free Trial</a></div><div class='interstitial-right'><img class='no-border' src='/wp-content/themes/vero/assets/images/blog-cta@2x.png'/></div></div>";
}

function add_blue_signup_boxes( $content ) {
  global $post;
  $index = 5;

  $dom = new DOMDocument();
  @$dom->loadHTML( $content );
  $dom->preserveWhiteSpace = false;

  $tags = $dom->getElementsByTagName('p');
  $total_p_tags = $tags->length;

  $content = blue_signup_box_content();
  $frag = $dom->createDocumentFragment(); 
  $frag->appendXML( $content ); 

  $div = $dom->createElement( 'div', '' ); 
  $div->setAttribute( "class", "blue-signup" );
  
  $div->appendChild($frag); 

  $index_p = $tags->item( ( ($total_p_tags/2)-1 ) );
  $index_p->parentNode->insertBefore( $div, $index_p );  

  return $dom->saveHTML();
}

?>