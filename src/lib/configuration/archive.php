<?php

function prev_link_text() {
  return 'Previous';
}
function next_link_text() {
  return 'Next';
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

function custom_excerpt_length( $length ) {
  return 25;
}
function new_excerpt_more( $more ) {
  return '';
}

function add_custom_read_more_link() {
  if ( is_paged() || is_search() ) {
    if ( get_field('custom_read_more') ) {
      ?>
      <a class="d-inline-block regular" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
      <?php
    } else {
      ?>
      <a class="d-inline-block regular" href="<?php the_permalink(); ?>">Read more</a>
      <?php
    }
  }
}

function change_home_loop() {
  if ( is_home() && !is_paged() ) {
    remove_action( 'genesis_loop', 'genesis_do_loop' );
    add_action( 'genesis_loop', 'custom_home_loop' );
  }

  if ( is_category() ) {
    remove_action( 'genesis_loop', 'genesis_do_loop' );
    add_action( 'genesis_loop', 'custom_category_loop' );
    add_action( 'genesis_after_content', 'genesis_posts_nav', 9 );
  }
}

function custom_home_loop() {
  ?>
    <div class="resources-section resources-section--featured">
      <h2 class="semi-bold micro">Editor's Picks</h2>

      <?php
        $custom_query = new WP_Query(array(
          'posts_per_page' => 4,
          'post_type'      => array('post', 'guides', 'tutorials'),
          'tag'            => 'featured',
          'no_found_rows'  => true
        ));

        while( $custom_query->have_posts() ) : $custom_query->the_post();
          $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $image_id       = get_post_thumbnail_id();
          $image_alt      = get_post_meta($image_id, '_wp_attachment_image_alt', true);

          if ( $custom_query->current_post == 0 ):
            ?>
              <article class="entry entry--featured" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
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

                      <h2 class="entry-title"><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
                        <a class="semi-bold" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
                      <?php else: ?>
                        <a class="semi-bold" href="<?php the_permalink(); ?>">Read more</a>
                      <?php endif ?>
                    </div>
                  </div>
                </div>
              </article>
            <?php
          else:
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

                      the_post_thumbnail('category-thumb', array(
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

                  <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
                    <a class="semi-bold" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
                  <?php else: ?>
                    <a class="semi-bold" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
                  <?php endif ?>
                </div>
              </article>
            <?php
          endif;

          if ( $custom_query->current_post == 0 ) :
            echo '<div class="resources-section--secondary"><div class="grid grid--resources">';
          elseif ( $custom_query->current_post == 3 ):
            echo '</div></div>';
          endif;

        endwhile;

        wp_reset_postdata();
      ?>
    </div>

    <div class="resources-section resources-section--secondary">
      <div class="flex items-baseline">
        <h2 class="semi-bold micro">Latest Posts</h2>
        <a class="font-gray-dark left-margin-auto" href="/resources/page/2">All posts →</a>
      </div>

      <div class="grid grid--resources">
        <?php
          $custom_query = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type'      => array('post', 'guides'),
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

                  the_post_thumbnail('category-thumb', array(
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

              <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
          </article>

          <?php endwhile;
            wp_reset_postdata();
          ?>
      </div>
    </div>

    <div class="resources-section resources-section--secondary">
      <?php
        $category = get_category_by_slug('news-updates');
        $cat_name = $category->name;
      ?>

      <div class="flex items-baseline">
        <h2 class="semi-bold micro no-margin"><?php echo $cat_name; ?></h2>

        <a class="font-gray-dark left-margin-auto" href="/resources/category/news-updates">All posts in <?php echo $cat_name; ?> →</a>
      </div>

      <div class="grid grid--resources">
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

            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
              <a class="semi-bold" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
            <?php else: ?>
              <a class="semi-bold" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
            <?php endif ?>
          </div>
        </article>

        <?php endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </div>

    <div class="resources-section resources-section--secondary">
      <h2 class="semi-bold micro">Most Popular</h2>

      <div class="grid grid--resources">
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

                  the_post_thumbnail('category-thumb', array(
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

              <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
                <a class="semi-bold" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
              <?php else: ?>
                <a class="semi-bold" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
              <?php endif ?>
            </div>
          </article>

          <?php endwhile;

          wp_reset_postdata();
        ?>
      </div>
    </div>

    <div class="resources-section resources-section--secondary">
      <?php
        $category = get_category_by_slug('tutorials');
        $cat_name = $category->name;
      ?>

      <div class="flex items-baseline">
        <h2 class="semi-bold micro no-margin"><?php echo $cat_name; ?></h2>

         <a class="font-gray-dark left-margin-auto" href="/resources/category/tutorials">All posts in <?php echo $cat_name; ?> →</a>
      </div>

      <div class="grid grid--resources">
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

                the_post_thumbnail('category-thumb', array(
                  'class' => 'entry-image',
                  'alt'   => $alt_text
                ));
              ?>
            <?php endif; ?>
          </a>

          <div class="entry-header">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
              <a class="semi-bold" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
            <?php else: ?>
              <a class="semi-bold" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
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

function move_pagination() {
  if ( is_home() && !is_paged() ) {
    remove_action( 'genesis_after_endwhile', 'genesis_posts_nav' );
  }

  if ( is_paged() || is_search() ) {
    remove_action( 'genesis_after_endwhile', 'genesis_posts_nav' );
    add_action( 'genesis_after_content', 'genesis_posts_nav', 9 );
  }
}

function add_latest_title() {
  if ( is_home() && is_paged() ){
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    <h2 class="semi-bold micro">All – Page <?php echo $paged; ?></h2>
  <?php }
  else if ( is_category() ){ ?>
    <div class="archive-description">
      <h2 class="semi-bold micro"><?php single_cat_title() ?></h2>
    </div>
  <?php }
  else if ( is_search() ) { ?>
    <div class="archive-description">
      <h2 class="semi-bold micro">Search results for: <?php echo get_search_query(); ?></h2>
    </div>
  <?php }
}

function add_banner_to_tutorials() {
  if ( is_category('tutorials') ) { ?>
    <div class="tutorial-banner">
      <h3>We've released a new product 🎉</h3>
      <p>The tutorials below are for the <a href="https://www.getvero.com/workflows/" target="_blank">Vero Workflows</a> product.</p>
      <p>We're in the process of writing additional guides and tutorials for our new product, <a href="https://www.getvero.com/newsletters/" target="_blank">Vero Newsletters</a>. Stay tuned!
    </div>
  <?php }
}

function add_featured_post_to_category() {
  if ( is_category() && !is_paged() ) {
    $cat_id     = get_query_var('cat');
    $image_id   = get_post_thumbnail_id();
    $image_alt  = get_post_meta($image_id, '_wp_attachment_image_alt', true);

    $custom_query = new WP_Query(array(
      'posts_per_page' => 1,
      'post_type'      => array('post', 'guides', 'tutorials'),
      'tag'            => 'featured_on_category',
      'category__in'   => $cat_id
    ));

    while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

      <article class="entry entry--featured" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
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

              <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
                <a class="regular" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
              <?php else: ?>
                <a class="regular" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
              <?php endif ?>
            </div>
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

              the_post_thumbnail('category-thumb', array(
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

          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
            <a class="semi-bold" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
          <?php else: ?>
            <a class="semi-bold" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
          <?php endif; ?>
        </div>
      </article>
      <?php
    endwhile;
    // genesis_posts_nav();
  endif;

  wp_reset_postdata();
}

function move_featured_image() {
  # Remove featured image from entry content.
  remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

  # Add featured image above entry header.
  add_action( 'genesis_entry_header', 'genesis_do_post_image', 3 );
}

?>
