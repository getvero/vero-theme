<?php

function prev_link_text() {
  $prevlink = 'Previous';
  return $prevlink;
}
function next_link_text() {
  $nextlink = 'Next';
  return $nextlink;
}

function remove_archives_entry_content() {
  if ( is_blog_archive() ) {
    remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
  }
}

function custom_excerpt_text() {
  if ( is_blog_archive() ) {
    if ( get_field('custom_excerpt') ) {
      ?>
        <p><?php the_field('custom_excerpt') ?></p>
      <?php
    } else {
      the_excerpt();
    }
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
  if ( is_category() || is_search() ) {
    if ( get_field('custom_read_more') ) {
      ?>
      <a class="regular underline-link" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
      <?php
    } else {
      ?>
      <a class="regular underline-link" href="<?php the_permalink(); ?>">Read more</a>
      <?php
    }
  }
}

function change_home_loop() {
  if ( is_home() && !is_paged() ) {
    remove_action( 'genesis_loop', 'genesis_do_loop' );
    add_action( 'genesis_loop', 'add_featured_post' );
    // add_action( 'genesis_loop', 'add_other_posts' );
    // add_action( 'genesis_loop', 'add_news_and_updates_posts' );
    // add_action( 'genesis_loop', 'add_tutorials_posts' );
  }

  if ( is_category() ) {
    remove_action( 'genesis_loop', 'genesis_do_loop' );
    add_action( 'genesis_loop', 'custom_category_loop' );
  }
}

function add_featured_post() {
  ?>
    <div class="resources-section resources-section-featured featured-post">
      <article class="entry" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
        <?php
          $custom_query = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type'      => array('post', 'guides', 'tutorials'),
            'tag'            => 'featured',
            'no_found_rows'  => true
          ));
          while( $custom_query->have_posts() ) : $custom_query->the_post();
            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $image_id       = get_post_thumbnail_id();
            $image_alt      = get_post_meta($image_id, '_wp_attachment_image_alt', true);
          ?>

          <div class="grid items-center">
            <a class="show entry-aside" href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ): ?>
                <?php
                  if( !empty($image_alt) ) {
                    $alt_text = $image_alt;
                  } else {
                    $alt_text = get_the_title();
                  }

                  the_post_thumbnail('', array(
                    'class' => 'entry-image',
                    'alt'   => $alt_text
                  ));
                ?>
              <?php endif; ?>
            </a>

            <div class="entry-body">
              <div class="entry-header">
                <div class="entry-meta flex items-center">
                  <span class="badge"><?php get_primary_category(); ?></span>
                </div>

                <h2 class="entry-title regular"><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </div>

              <div class="entry-content">
                <?php if ( get_field('custom_excerpt') ): ?>
                  <p><?php the_field('custom_excerpt') ?></p>
                <?php else: ?>
                  <?php the_excerpt(); ?>
                <?php endif ?>
              </div>

              <div class="entry-footer">
                <?php if ( get_field('custom_read_more') ): ?>
                  <a class="regular underline-link-rev" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
                <?php else: ?>
                  <a class="regular underline-link-rev" href="<?php the_permalink(); ?>">Read more</a>
                <?php endif ?>
              </div>
            </div>
          </div>

        <?php endwhile;
          wp_reset_postdata();
        ?>
      </article>
    </div>

    <div class="resources-section resources-section-secondary resources-section-thirds evergreen-posts">
      <div class="grid">
        <?php
          $custom_query = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type'      => array('post', 'guides', 'tutorials', 'page'),
            'tag'            => 'evergreen',
            'no_found_rows'  => true
          ));

          while( $custom_query->have_posts() ) : $custom_query->the_post();
            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $image_id       = get_post_thumbnail_id();
            $image_alt      = get_post_meta($image_id, '_wp_attachment_image_alt', true);
          ?>

          <article class="entry " itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
            <a class="show entry-aside" href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ): ?>
                <?php
                  if( !empty($image_alt) ) {
                    $alt_text = $image_alt;
                  } else {
                    $alt_text = get_the_title();
                  }

                  the_post_thumbnail('', array(
                    'class' => 'entry-image',
                    'alt'   => $alt_text
                  ));
                ?>
              <?php endif; ?>
            </a>

            <div class="entry-header">
              <div class="entry-meta flex items-center">
                <span class="badge"><?php get_primary_category(); ?></span>
              </div>

              <h2 class="entry-title regular"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>

            <div class="entry-content">
              <?php if ( get_field('custom_excerpt') ): ?>
                <p><?php the_field('custom_excerpt') ?></p>
              <?php else: ?>
                <?php the_excerpt(); ?>
              <?php endif ?>
            </div>

            <div class="entry-footer">
              <?php if ( get_field('custom_read_more') ): ?>
                <a class="regular underline-link-rev" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
              <?php else: ?>
                <a class="regular underline-link-rev" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
              <?php endif ?>
            </div>
          </article>

          <?php endwhile;
            wp_reset_postdata();
          ?>
      </div>
    </div>

    <div class="resources-section resources-section-secondary resources-section-thirds news-and-updates-posts">
      <?php
        $category = get_category_by_slug('news-updates');
        $cat_name = $category->name;
      ?>

      <h2 class="semi-bold atomic"><a class="unstyled" href="/resources/category/news-updates"><?php echo $cat_name; ?></a></h2>

      <div class="grid">
        <?php
          $custom_query = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type'      => array('post', 'guides'),
            'tag'            => 'news_and_updates',
            'no_found_rows'  => true
          ));

          while ( $custom_query->have_posts() ) : $custom_query->the_post();
            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>

        <article class="entry" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
          <div class="entry-header">
            <div class="entry-meta flex items-center bottom-margin-xs">
              <time class="badge" datetime="<?php the_time('c');?>"><?php echo get_the_date( 'j M, Y' ); ?></time>
            </div>

            <h2 class="entry-title regular"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>

          <div class="entry-content">
            <?php if ( get_field('custom_excerpt') ): ?>
              <p><?php the_field('custom_excerpt') ?></p>
            <?php else: ?>
              <?php the_excerpt(); ?>
            <?php endif ?>
          </div>

          <div class="entry-footer">
            <?php if ( get_field('custom_read_more') ): ?>
              <a class="regular underline-link-rev" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
            <?php else: ?>
              <a class="regular underline-link-rev" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
            <?php endif ?>
          </div>
        </article>

        <?php endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </div>

    <div class="resources-section resources-section-secondary resources-section-thirds tutorials-posts">
      <h2 class="semi-bold atomic"><a class="unstyled" href="/resources/category/tutorials">Tutorials</a></h2>
      <div class="grid">
        <?php
          $custom_query = new WP_Query(array(
            'posts_per_page' => 3,
            'category_name'  => 'tutorials',
            'post_type'      => array('post', 'tutorials'),
            'no_found_rows'  => true
          ));

          while( $custom_query->have_posts() ) : $custom_query->the_post();
            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $image_id       = get_post_thumbnail_id();
            $image_alt      = get_post_meta($image_id, '_wp_attachment_image_alt', true);
          ?>

        <article class="entry" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
          <a class="show entry-aside" href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ): ?>
              <?php
                if( !empty($image_alt) ) {
                  $alt_text = $image_alt;
                } else {
                  $alt_text = get_the_title();
                }

                the_post_thumbnail('', array(
                  'class' => 'entry-image',
                  'alt'   => $alt_text
                ));
              ?>
            <?php endif; ?>
          </a>

          <div class="entry-header">
            <h2 class="entry-title regular"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>

          <div class="entry-content">
            <?php if ( get_field('custom_excerpt') ): ?>
              <p><?php the_field('custom_excerpt') ?></p>
            <?php else: ?>
              <?php the_excerpt(); ?>
            <?php endif ?>
          </div>

          <div class="entry-footer">
            <?php if ( get_field('custom_read_more') ): ?>
              <a class="regular underline-link-rev" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
            <?php else: ?>
              <a class="regular underline-link-rev" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
            <?php endif ?>
          </div>
        </article>

        <?php endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  <?php
}

function add_other_posts() {
  if ( is_home() && !is_paged() ) {
    ?>
      <div class="resources-section resources-section-secondary resources-section-thirds evergreen-posts">
        <div class="grid">
          <?php
            $custom_query = new WP_Query(array(
              'posts_per_page' => 3,
              'post_type'      => array('post', 'guides', 'tutorials', 'page'),
              'tag'            => 'evergreen',
              'no_found_rows'  => true
            ));

            while( $custom_query->have_posts() ) : $custom_query->the_post();
              $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
              $image_id       = get_post_thumbnail_id();
              $image_alt      = get_post_meta($image_id, '_wp_attachment_image_alt', true);
            ?>

            <article class="entry" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
              <a class="show entry-aside" href="<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail() ): ?>
                  <?php
                    if( !empty($image_alt) ) {
                      $alt_text = $image_alt;
                    } else {
                      $alt_text = get_the_title();
                    }

                    the_post_thumbnail('', array(
                      'class' => 'entry-image',
                      'alt'   => $alt_text
                    ));
                  ?>
                <?php endif; ?>
              </a>

              <div class="entry-body">
                <div class="entry-header">
                  <div class="entry-meta flex items-center">
                    <span class="badge"><?php get_primary_category(); ?></span>
                  </div>

                  <h2 class="entry-title regular"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>

                <div class="entry-content">
                  <?php if ( get_field('custom_excerpt') ): ?>
                    <p><?php the_field('custom_excerpt') ?></p>
                  <?php else: ?>
                    <?php the_excerpt(); ?>
                  <?php endif ?>
                </div>

                <div class="entry-footer">
                  <?php if ( get_field('custom_read_more') ): ?>
                    <a class="regular underline-link-rev" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
                  <?php else: ?>
                    <a class="regular underline-link-rev" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
                  <?php endif ?>
                </div>
              </div>
            </article>

            <?php endwhile;
              wp_reset_postdata();
            ?>
        </div>
      </div>
    <?php
  }
}

function add_news_and_updates_posts() {
  if ( is_home() && !is_paged() ) {
    ?>
      <div class="resources-section resources-section-secondary resources-section-thirds news-and-updates-posts">
        <?php
          $category = get_category_by_slug('news-updates');
          $cat_name = $category->name;
        ?>

        <h2 class="semi-bold atomic"><a class="unstyled" href="/resources/category/news-updates"><?php echo $cat_name; ?></a></h2>

        <div class="grid">
          <?php
            $custom_query = new WP_Query(array(
              'posts_per_page' => 2,
              'post_type'      => array('post', 'guides'),
              'tag'            => 'news_and_updates',
              'no_found_rows'  => true
            ));

            while ( $custom_query->have_posts() ) : $custom_query->the_post();
              $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          ?>

          <article class="entry" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="entry-body">
              <div class="entry-header">
                <div class="entry-meta flex items-center bottom-margin-xs">
                  <time class="badge" datetime="<?php the_time('c');?>"><?php echo get_the_date( 'j M, Y' ); ?></time>
                </div>

                <h2 class="entry-title regular"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </div>

              <div class="entry-content">
                <?php if ( get_field('custom_excerpt') ): ?>
                  <p><?php the_field('custom_excerpt') ?></p>
                <?php else: ?>
                  <?php the_excerpt(); ?>
                <?php endif ?>
              </div>

              <div class="entry-footer">
                <?php if ( get_field('custom_read_more') ): ?>
                  <a class="regular underline-link-rev" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
                <?php else: ?>
                  <a class="regular underline-link-rev" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
                <?php endif ?>
              </div>
            </div>
          </article>

          <?php endwhile;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    <?php
  }
}

function add_tutorials_posts() {
  if ( is_home() && !is_paged() ) {
    ?>
      <div class="resources-section resources-section-secondary resources-section-thirds tutorials-posts">
        <h2 class="semi-bold atomic"><a class="unstyled" href="/resources/category/tutorials">Tutorials</a></h2>
        <div class="grid">
          <?php
            $custom_query = new WP_Query(array(
              'posts_per_page' => 3,
              'category_name'  => 'tutorials',
              'post_type'      => array('post', 'tutorials'),
              'no_found_rows'  => true
            ));

            while( $custom_query->have_posts() ) : $custom_query->the_post();
              $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
              $image_id       = get_post_thumbnail_id();
              $image_alt      = get_post_meta($image_id, '_wp_attachment_image_alt', true);
            ?>

          <article class="entry" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
            <a class="show entry-aside" href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ): ?>
                <?php
                  if( !empty($image_alt) ) {
                    $alt_text = $image_alt;
                  } else {
                    $alt_text = get_the_title();
                  }

                  the_post_thumbnail('', array(
                    'class' => 'entry-image',
                    'alt'   => $alt_text
                  ));
                ?>
              <?php endif; ?>
            </a>

            <div class="entry-body">
              <div class="entry-header">
                <h2 class="entry-title regular"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </div>

              <div class="entry-content">
                <?php if ( get_field('custom_excerpt') ): ?>
                  <p><?php the_field('custom_excerpt') ?></p>
                <?php else: ?>
                  <?php the_excerpt(); ?>
                <?php endif ?>
              </div>

              <div class="entry-footer">
                <?php if ( get_field('custom_read_more') ): ?>
                  <a class="regular underline-link-rev" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
                <?php else: ?>
                  <a class="regular underline-link-rev" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
                <?php endif ?>
              </div>
            </div>
          </article>

          <?php endwhile;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    <?php
  }
}

function add_latest_title() {
  if ( is_home() && is_paged() ){
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    <h2 class="semi-bold atomic">All – Page <?php echo $paged; ?></h2>
  <?php }
  else if ( is_category() ){ ?>
    <div class="archive-description">
      <h2 class="semi-bold atomic"><?php single_cat_title() ?></h2>
    </div>
  <?php }
  else if ( is_search() ) { ?>
    <div class="archive-description">
      <h2 class="semi-bold atomic">Search results for: <?php echo get_search_query(); ?></h2>
    </div>
  <?php }
}

function add_featured_post_to_category() {
  if ( is_category() && !is_paged() ) {
  ?>
    <?php
      $cat_id = get_query_var('cat');
      $image_id       = get_post_thumbnail_id();
      $image_alt      = get_post_meta($image_id, '_wp_attachment_image_alt', true);

      $custom_query = new WP_Query(array(
        'posts_per_page' => 1,
        'post_type'      => array('post', 'guides', 'tutorials'),
        'tag'            => 'featured_on_category',
        'category__in'   => $cat_id
      ));

    while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

      <article class="entry featured-post" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="grid items-center">
          <div class="entry-aside">
            <?php if ( has_post_thumbnail() ): ?>
              <?php
                if( !empty($image_alt) ) {
                  $alt_text = $image_alt;
                } else {
                  $alt_text = get_the_title();
                }

                the_post_thumbnail('', array(
                  'class' => 'entry-image',
                  'alt'   => $alt_text
                ));
              ?>
            <?php endif; ?>
          </div>

          <div class="entry-body">
            <div class="entry-header bottom-margin-sm">
              <?php if ( is_category('news-updates') ): ?>
                <div class="entry-meta  bottom-margin-sm">
                  <time class="badge" datetime="<?php the_time('c');?>"><?php echo get_the_date( 'j M, Y' ); ?></time>
                </div>
              <?php endif; ?>

              <h2 class="entry-title no-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>

            <div class="entry-content">
              <?php if ( get_field('custom_excerpt') ): ?>
                <p><?php the_field('custom_excerpt') ?></p>
              <?php else: ?>
                <?php the_excerpt(); ?>
              <?php endif ?>
            </div>

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

function custom_category_loop() {
  $image_id       = get_post_thumbnail_id();
  $image_alt      = get_post_meta($image_id, '_wp_attachment_image_alt', true);
  $cat_id         = get_query_var('cat');
  $tag            = get_term_by('name', 'featured_on_category', 'post_tag');
  $paged          = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

  $custom_query = new WP_Query(array(
    'posts_per_page'      => 9,
    'post_type'           => array('post', 'guides', 'tutorials'),
    'category__in'        => $cat_id,
    'tag__not_in'         => $tag->term_id,
    'paged'               => $paged
  ));

  if ( $custom_query->have_posts() ) :
    while( $custom_query->have_posts() ) : $custom_query->the_post();
      ?>
      <article class="entry" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
        <a class="show entry-aside" href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ): ?>
            <?php
              if( !empty($image_alt) ) {
                $alt_text = $image_alt;
              } else {
                $alt_text = get_the_title();
              }

              the_post_thumbnail('', array(
                'class' => 'entry-image',
                'alt'   => $alt_text
              ));
            ?>
          <?php endif; ?>
        </a>

        <div class="entry-header">
          <?php if ( is_category('news-updates') ): ?>
            <div class="entry-meta flex items-center">
              <time class="badge" datetime="<?php the_time('c');?>"><?php echo get_the_date( 'j M, Y' ); ?></time>
            </div>
          <?php endif; ?>

          <h2 class="entry-title regular"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>

        <div class="entry-content">
          <?php if ( get_field('custom_excerpt') ): ?>
            <p><?php the_field('custom_excerpt') ?></p>
          <?php else: ?>
            <?php the_excerpt(); ?>
          <?php endif; ?>
        </div>

        <div class="entry-footer">
          <?php if ( get_field('custom_read_more') ): ?>
            <a class="regular underline-link" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
          <?php else: ?>
            <a class="regular underline-link" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
          <?php endif; ?>
        </div>
      </article>
      <?php
    endwhile;
    genesis_posts_nav();
  endif;

  wp_reset_postdata();
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