<?php

function add_custom_types( $query ) {
  global $wp_the_query;

  if( ( is_post_type_archive('post') || is_home() || is_archive() ) && $query === $wp_the_query && !is_admin() && !is_post_type_archive('release-notes') ) {
    $query->set( 'post_type', array(
      'post', 'guides'
    ));

    $query->set( 'post_parent', 0 );

    return $query;
  } else if ( is_search() && $query === $wp_the_query && !is_admin()) {
    $query->set('post_type', array(
      'post'
    ));

    $query->set( 'post_parent', 0 );

    return $query;
  }
}

function change_post_info($post_meta) {
  if ( !is_blog() ) {
    return '';
  }

  global $post;
  $categories = get_the_category();
  //$categories = get_the_category($post->ID);
  $category = $categories[0]->cat_name;
  ?>
  <p class="entry-meta semi-bold uppercase font-brand-gray-dark">
    <?php if( $category == 'Uncategorized' || $category == '' ) { ?>
      <a href="/resources"><?php if( is_singular('guide') ) { ?>Guide<?php } else { ?>Article<?php } ?></a>
    <?php } else { ?>
      <a href="<?php echo get_category_link( get_cat_ID( $category ) ); ?>"><?php echo $category; ?></a>
    <?php } ?>
    Written On
    <time class="entry-time" itemprop="datePublished" datetime="2015-05-06T06:33:11+00:00">
      <?php echo the_time('j F, Y'); ?>
    </time>
    by
    <span class="entry-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
      <?php echo get_the_author(); ?>
    </span>
  </p>
  <?php
}

function is_active($page) {
  if( is_category($page) ) {
    return 'active';
  } else if ( $page == 'all' && is_home() ) {
    return 'active';
  } else {
    return '';
  }
}

?>