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
    <div class="entry-meta semi-bold uppercase font-brand-gray-dark">
      <?php if( $category == 'Uncategorized' || $category == '' ) { ?>
        <a href="/resources"><?php if( is_singular('guide') ) { ?>Guide<?php } else { ?>Article<?php } ?></a>
      <?php } else { ?>
        <a href="<?php echo get_category_link( get_cat_ID( $category ) ); ?>"><?php echo $category; ?></a>
      <?php } ?>
      Written On
      <time class="entry-time" itemprop="datePublished" datetime="2015-05-06T06:33:11+00:00">
        <?php echo the_time('j M, Y'); ?>
      </time>
      |
      <span class="entry-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
        <?php echo get_the_author(); ?>
      </span>
    </div>
    <?php
  }

  function custom_entry_content() {
    if ( is_single()  ) {
      // //* Remove the entry header markup (requires HTML5 theme support)
      // remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
      // remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

      // Customise entry title markup
      add_filter( 'genesis_post_title_output', 'bn_post_title_output', 15 );
      function bn_post_title_output( $title ) {

        if ( is_singular() ) {
          $title = sprintf( '<h1 class="entry-title">%s</h1>', apply_filters( 'genesis_post_title_text', get_the_title() ) );
          return $title;
        }
      }

      //* Remove the entry meta in the entry header (requires HTML5 theme support)
      // remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

      //* Remove the post format image (requires HTML5 theme support)
      remove_action( 'genesis_entry_header', 'genesis_do_post_format_image', 4 );
    }
  }

  function is_active($page) {
    if( is_category($page) ) {
      return 'active';
    } else if ( $page == 'all' && is_home() ) {
      return 'active';
    } else if ( in_category($page) && is_single() ) {
      return 'active';
    } else {
      return '';
    }
  }

?>