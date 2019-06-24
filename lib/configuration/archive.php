<?php

function prev_link_text() {
  $prevlink = 'Previous';
  return $prevlink;
}
function next_link_text() {
  $nextlink = 'Next';
  return $nextlink;
}

function custom_excerpt() {
  // remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

  if ( get_field('custom_excerpt') ) {
    ?>
      <p><?php the_field('custom_excerpt') ?></p>
    <?php
  }
}

// Change excerpt length
function custom_excerpt_length( $length ) {
  return 25;
}
function new_excerpt_more( $more ) {
  return '';
}

function add_custom_read_more_link() {
  if ( is_archive() || is_search() ) { ?>
    <?php if ( get_field('custom_read_more') ): ?>
      <a class="regular underline-link" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
    <?php else: ?>
      <a class="regular underline-link" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
    <?php endif ?>
  <?php }
}

function change_home_loop() {
  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

  if ( is_home() ) {
    remove_action( 'genesis_loop', 'genesis_do_loop' );
    add_action( 'genesis_loop', 'add_featured_post' );
    add_action( 'genesis_loop', 'add_news_and_updates_posts' );
    add_action( 'genesis_loop', 'add_other_posts' );
  }
}

function add_featured_post() {
  if ( is_home() && !is_paged() ) { ?>
    <div class="resources-section featured-post">
      <div class="entry entry-hover">
      <?php
        $custom_query = new WP_Query(array(
          'post_type' => array('post', 'guides', 'tutorials'),
          'tag' => 'featured'
        ));
        while( $custom_query->have_posts() ) : $custom_query->the_post();
          $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $category = get_the_category();
          ?>

          <div class="grid">
            <a class="d-block entry-aside" href="<?php the_permalink(); ?>">
              <img class="entry-image" src="<?php echo $featured_image; ?>"  alt="<?php echo  $featured_image; ?>">
            </a>

            <div class="entry-body">
              <div class="entry-header">
                <a class="unstyled badge bottom-margin-small" href="<?php echo get_category_link($category[0]->cat_ID); ?>"><?php echo $category[0]->cat_name; ?></a>

                <h2 class="entry-title regular bottom-margin-tiny"><a class="" href="<?php the_permalink(); ?>"><span class="entry-underline"><?php the_title(); ?></span></a></h2>
              </div>

              <div class="entry-content bottom-margin-smedium">
                <p><?php echo the_excerpt(); ?></p>
              </div>

              <div class="entry-footer">
                <?php if ( get_field('custom_read_more') ): ?>
                  <a class="regular underline-link" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
                <?php else: ?>
                  <a class="regular underline-link" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
                <?php endif ?>
              </div>
            </div>
          </div>

        <?php endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  <?php }
}

function add_news_and_updates_posts() {
  if ( is_home() && !is_paged() ) {
    ?>
      <div class="resources-section resources-section-secondary news-and-updates-posts">
        <h2 class="micro regular hide smd-show">News and updates</h2>

        <div class="grid">
        <?php
          $custom_query = new WP_Query(array(
            'post_type' => array('post', 'guides'),
            'tag' => 'news_and_updates'
          ));
          while( $custom_query->have_posts() ) : $custom_query->the_post();
            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $category = get_the_category();
            ?>

            <div class="entry entry-hover">
              <a class="d-block entry-aside" href="<?php the_permalink(); ?>">
                <img class="entry-image" src="<?php echo $featured_image; ?>"  alt="<?php echo  $featured_image; ?>">
              </a>

              <div class="entry-body">
                <div class="post-header">
                  <a class="unstyled badge bottom-margin-small" href="<?php echo get_category_link($category[0]->cat_ID); ?>"><?php echo $category[0]->cat_name; ?></a>

                  <h2 class="entry-title regular bottom-margin-tiny"><a href="<?php the_permalink(); ?>"><span class="entry-underline"><?php the_title(); ?></span></a></h2>
                  <span class="d-block regular bottom-margin-tiny"><?php echo get_the_date( 'j M, Y' ); ?></span>
                </div>

                <div class="entry-content bottom-margin-smedium">
                  <p><?php echo the_excerpt() ?><p>
                </div>

                <div class="entry-footer">
                <?php if ( get_field('custom_read_more') ): ?>
                  <a class="regular underline-link" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
                <?php else: ?>
                  <a class="regular underline-link" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
                <?php endif ?>
              </div>
              </div>
            </div>

          <?php endwhile;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    <?php
  }
}

function add_other_posts() {
  if ( is_home() && !is_paged() ) {
    ?>
      <div class="resources-section resources-section-secondary evergreen-posts">
        <div class="grid">
        <?php
          $custom_query = new WP_Query(array(
            'post_type' => array('post', 'guides', 'tutorials'),
            'tag'       => 'evergreen'
          ));

          while( $custom_query->have_posts() ) : $custom_query->the_post();
            $featured_image      = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $category            = get_the_category();
          ?>

            <div class="entry entry-hover">
              <a class="d-block entry-aside" href="<?php the_permalink(); ?>">
                <img class="entry-image" src="<?php echo $featured_image; ?>"  alt="<?php echo  $featured_image; ?>">
              </a>

              <div class="entry-body">
                <div class="post-header">
                  <a class="unstyled badge bottom-margin-small" href="<?php echo get_category_link($category[0]->cat_ID); ?>"><?php echo $category[0]->cat_name; ?></a>

                  <h2 class="entry-title regular bottom-margin-tiny"><a href="<?php the_permalink(); ?>"><span class="entry-underline"><?php the_title(); ?></span></a></h2>
                </div>

                <div class="entry-content bottom-margin-smedium">
                  <p><?php echo the_excerpt() ?><p>
                </div>

                <div class="entry-footer">
                <?php if ( get_field('custom_read_more') ): ?>
                  <a class="regular underline-link" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
                <?php else: ?>
                  <a class="regular underline-link" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
                <?php endif ?>
              </div>
              </div>
            </div>

          <?php endwhile;
            wp_reset_postdata();
          ?>
          </div>
        </div>
      </div>
    <?php
  }
}

function category_setup() {
  if ( is_category() || is_search() ){
    // remove_action( 'genesis_entry_footer', 'add_shares' );
  }
}

function add_latest_title() {
  if ( is_home() && is_paged() ){
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    <h1 class="micro regular">All – Page <?php echo $paged; ?></h1>
  <?php }
  else if ( is_category() ){ ?>
    <div class="archive-description">
      <h1 class="micro regular"><?php single_cat_title() ?></h1>
    </div>
  <?php }
  else if ( is_search() ) { ?>
    <div class="archive-description">
      <h1 class="micro regular">Search results for: <?php echo get_search_query(); ?></h1>
    </div>
  <?php }
}

function add_featured_post_to_category() {
  if ( is_category() && !is_paged() ) {
  ?>
    <?php
      $category = get_the_category();
      $category = $category[0]->cat_ID;

      $custom_query = new WP_Query(array(
        'posts_per_page' => 1,
        'post_type'      => array('post', 'guides', 'tutorials'),
        'tag'            => 'featured_on_category',
        'category__in'   => $category
      ));

    while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

      <article class="entry featured-post">
        <div class="grid">
          <div class="entry-aside">
            <a href="<?php the_permalink(); ?>">
              <img class="entry-image" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="<?php echo get_post_meta($post->ID, '_wp_attachment_image_alt', true); ?>">
            </a>
          </div>

          <div class="entry-body">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <p class="medium"><?php echo the_excerpt() ?></p>

            <?php if ( get_field('custom_read_more') ): ?>
              <a class="regular underline-link" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
            <?php else: ?>
              <a class="regular underline-link" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
            <?php endif ?>
          </div>
        </div>
      </article>

    <?php endwhile;
      wp_reset_postdata();
    ?>
  <?php
  }
}

function move_featured_image() {
  # If this is not an archive, abort.
  if ( is_singular() ) {
    return;
  }

  # Remove featured image from entry content.
  remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

  # Add featured image above entry header.
  add_action( 'genesis_entry_header', 'genesis_do_post_image', 3 );
}

?>