<?php

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

function is_active($page) {
  if( $page == 'all' && is_home() ) {
    return 'active';
  } else if( in_category($page) ) {
    return 'active';
  } else {
    return '';
  }
}

?>