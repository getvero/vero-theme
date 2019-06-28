<?php

  function add_custom_types( $query ) {
    global $wp_the_query;

  if( ( is_post_type_archive('post') || is_home() || is_archive() ) && $query === $wp_the_query && !is_admin() && !is_post_type_archive('release-notes') ) {
    $query->set( 'post_type', array(
      'post', 'guides', 'tutorials'
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

  function custom_entry_header() {
    add_action( 'genesis_before_content', 'move_feature_image' );

    if ( is_blog_post_or_guide() ) {
      remove_action( 'genesis_entry_header', 'genesis_post_info', 12);
      add_action( 'genesis_entry_header', 'genesis_post_info', 9 );
    }
  }

  function change_post_structure() {
    if ( is_single() || is_archive() || is_search() ) {
      // Position entry meta above title
      remove_action( 'genesis_entry_header', 'genesis_post_info', 12);
      add_action( 'genesis_entry_header', 'genesis_post_info', 9 );
    }

    if ( is_single() ) {
      // Customise entry title markup
      add_filter( 'genesis_post_title_output', 'post_title_output', 15 );
      function post_title_output( $title ) {
        if ( is_singular() ) {
          $title = sprintf( '<h1 class="entry-title">%s</h1>', apply_filters( 'genesis_post_title_text', get_the_title() ) );
          return $title;
        }
      }

      // Remove the post format image (requires HTML5 theme support)
      remove_action( 'genesis_entry_header', 'genesis_do_post_format_image', 4 );
    }
  }


  function change_post_info($post_meta) {
    if ( !is_blog() ) {
      // return '';
    }

    global $post;
    $categories = get_the_category();
    //$categories = get_the_category($post->ID);
    $category = $categories[0]->cat_name;

    if ( is_single() ) {
      ?>
      <div class="entry-meta">
        <?php if( $category == 'Uncategorized' || $category == '' ) { ?>
          <a class="badge" href="/resources"><?php if( is_singular('guide') ) { ?>Guide<?php } else { ?>Article<?php } ?></a>
        <?php } else { ?>
          <a class="badge" href="<?php echo get_category_link( get_cat_ID( $category ) ); ?>"><?php echo $category; ?></a>
        <?php } ?>
      </div>
      <?php
    } else if ( is_search() ) {
      ?>
      <div class="entry-meta flex items-center bottom-margin-small">
        <?php if( $category == 'Uncategorized' || $category == '' ) { ?>
          <a class="badge" href="/resources"><?php if( is_singular('guide') ) { ?>Guide<?php } else { ?>Article<?php } ?></a>

          <span class="d-inline-block divider"></span>

          <time class="badge" datetime="<?php the_time('c');?>"><?php echo get_the_date( 'j M, Y' ); ?></time>
        <?php } else { ?>
          <a class="badge" href="<?php echo get_category_link( get_cat_ID( $category ) ); ?>"><?php echo $category; ?></a>

          <span class="d-inline-block divider"></span>

          <time class="badge" datetime="<?php the_time('c');?>"><?php echo get_the_date( 'j M, Y' ); ?></time>
        <?php } ?>
      </div>
      <?php
    } else {
      ?>
        <div class="entry-meta bottom-margin-small">
          <time class="badge" datetime="<?php the_time('c');?>"><?php echo get_the_date( 'j M, Y' ); ?></time>
        </div>
      <?php
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

  function category_setup() {
    if ( is_category() || is_search() ){
      // remove_action( 'genesis_entry_footer', 'add_shares' );
    }
  }

  function add_categories_and_search() {
    if ( is_blog_archive() || is_single() ){ ?>
      <div class="js-resources-sidebar resources-sidebar">
        <div class="flex flex-column nav-resources wrap">
          <div class="resources-sidebar-categories bottom-margin-small">
            <h3 class="semi-bold annotation uppercase faded bottom-margin-small">Categories</h3>

            <ul class="resources-sidebar-categories-list">
              <li class="<?php echo is_active('all'); ?>"><a class="unstyled" href="/resources">All</a></li>
              <li class="<?php echo is_active('vero-updates'); ?>"><a class="unstyled" href="/resources/category/vero-updates/">Vero Updates</a></li>
              <li class="<?php echo is_active('how-to'); ?>"><a class="unstyled" href="/resources/category/how-to">How To's</a></li>
              <li class="<?php echo is_active('case-studies'); ?>"><a class="unstyled" href="/resources/category/case-studies">Case Studies</a></li>
            </ul>
          </div>

          <?php echo get_search_form(); ?>

          <div class="top-margin-auto">
            <p class="hide md-show bottom-margin-small">Insights, tips and tools for creating better customer messaging and product experiences.</p>

            <div class="js-thanks-3 hide">
              <p>Thanks for subscribing</p>
            </div>

            <form class="js-blog-subscribe-form" action='https://app.getvero.com/forms/0eefc98b2dc881e7c0888ae698833577' method='post'>
              <div class="form-group bottom-margin-micro">
                <input class="form-control input-width-full" id="sender_email_address" name="email" type="email" placeholder="email@address.com">
                <input name="user[consent_marketing]" type="hidden" value="true">
                <input name="user[consent_product_updates]" type="hidden" value="true">
                <input name="event[blog_subscriber_source]" type="hidden" value="blog_header">
                <input name="user[contact_by_fax_only]" type="checkbox" value="1" style="display:none !important" tabindex="-1" autocomplete="false">
              </div>
              <input class="btn btn-success input-width-full bottom-margin-tiny" type="submit" value="Subscribe to updates">
              <span class="d-block annotation"><span class="faded">We're committed to keeping your information safe. Read our</span> <a href="/privacy">Privacy Policy</a>.</span>
            </form>
          </div>
        </div>
      </div>
    <?php }
  }

?>