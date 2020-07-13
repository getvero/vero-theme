<?php

  function blog_banner() {
    if ( !is_blog_post_or_guide_or_tutorial() ) {
      return;
    }

    if ( get_field('banner_text') ) {
      ?>
        <div class="bg-dark-blue banner z-9999">
          <a class="negative flex items-center md-justify-center" href="<?php the_field('banner_link') ?>">
            <p class="center-text"><span class="right-margin-xxxs">🎉</span> <?php the_field('banner_text') ?></p>

            <span class="font-white underline-link semi-bold items-center left-margin-xs">Find out more<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"><path stroke="#01B2D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M7 11.5L10.5 8 7 4.5h0" fill="none" fill-rule="evenodd"/></svg></span>
          </a>
        </div>
      <?php
    }
  }

  function add_body_class_blog_banner( $classes ) {
    global $post;

    if ( !is_blog() ) {
      $classes[] = '';
    }

    if ( get_field('banner_text') ) {
      $classes[] = 'sticky-banner';
    }

    return $classes;
  }

  function add_author() {
    if ( is_blog_post_or_guide() && !in_category('tutorials') ) {
      ?>
      <div class="entry-author atomic">
        by <span itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person"><?php echo get_the_author(); ?></span>
      </div>
      <?php
    }
  }

  function add_featured_image_to_post() {
    if ( is_blog_post_or_guide_or_tutorial() ) {
      global $post;

      $image_id  = get_post_thumbnail_id( $post->ID );
      $image     = wp_get_attachment_url( $image_id );
      $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );

      if ( $image != '' ) {
      ?>
        <div class="hero-aside">
          <img class="entry-image hero-image" src="<?php echo $image; ?>"  alt="<?php echo  $image_alt; ?>">
        </div>
      <?php
      }
    }
  }

  function force_full_width_on_posts( $options ) {
    if( is_blog_post_or_guide_or_tutorial() ) {
      $options = 'full-width-content';
      return $options;
    }
  }

  function add_shares_to_post() {
    global $post;
    if( is_blog_post_or_guide_or_tutorial() ) {
      ?>
        <?php echo naked_social_share_buttons(); ?>
      <?php
    }
  }

  function generate_table_of_contents() {
    if( is_blog_post_or_guide_or_tutorial() ) {
      if ( get_field( 'table_of_contents' ) ) {
        ?>
        <div class="table-of-contents">
          <?php the_field( 'table_of_contents' ); ?>
        </div>
        <?php
      }
    }
  }

  function post_remove_footer() {
    if( is_blog_post_or_guide_or_tutorial() ) {
      remove_action( 'genesis_entry_footer', 'add_shares' );
    }
  }

  function remove_comments() {
    if ( !in_category('news-updates') ) {
      remove_action( 'genesis_after_entry', 'genesis_get_comments_template' );
    }
  }

  function post_is_long() {
    $content = get_the_content();
    $length  = sizeof( explode(" ", $content) );

    return $length > 950;
  }

  function get_element($tags, $i) {
    $index_p = $tags->item( $i );
    $non_objects = array('h1','h2','h3','h4');

    if( $index_p->parentNode->tagName == 'blockquote' ) {
      $index_p = get_element($tags, $i + 1);
    } else if ( in_array($index_p->previousSibling->tagName, $non_objects) ) {
      $index_p = get_element($tags, $i + 1);
    } else if ( $index_p->nextSibling->tagName == 'img' ) {
      $index_p = get_element($tags, $i + 1);
    }

    return $index_p;
  }

  function blue_signup_box_content() {
    return "<div class='interstitial'><div class='interstitial-left'><div class='blog-cta-content'><h1>Create better customer experiences</h1><p>Send super targeted messages with Vero.</p><a class='btn btn--success' href='https://app.getvero.com/signup' target='_blank'>Start a free trial</a></div></div><div class='interstitial-right'><img class='no-border' src='/wp-content/themes/vero/assets/dist/images/blog-cta@2x.png'/></div></div>";
  }

  function be_related_posts_by_category() {
    # If we are not on a single post/guide page, abort.
    if ( !is_blog_post_or_guide() ) {
      return;
    }

    $image_id       = get_post_thumbnail_id();
    $image_alt      = get_post_meta($image_id, '_wp_attachment_image_alt', true);
    $categories = get_the_terms( get_the_ID(), 'category' );
    $category = array_shift( $categories );

    $loop = new WP_Query( array(
      'posts_per_page'  => 3,
      'post_type'      => array('post', 'guides', 'tutorials'),
      'category_name'   => $category->slug,
      'post__not_in'    => array( get_the_ID() )
     ) );

    if( $loop->have_posts() ):
      echo '<section class="related"><div class="inner xlarge-inner" style="max-width: 1300px">';
      echo '<h3 class="blog-title">Latest posts</h3>';
      echo '<div class="grid">';
      while( $loop->have_posts() ): $loop->the_post();
        echo '<div class="entry">';
        if( has_post_thumbnail() )
          echo '<a class="show entry-aside track-single-latest-posts" href="' . get_permalink() . '">';

          if( !empty($image_alt) ) {
            $alt_text = $image_alt;
          } else {
            $alt_text = get_the_title();
          }

          the_post_thumbnail('category-thumb', array(
            'class' => 'entry-image',
            'alt'   => $alt_text
          ));
          echo '</a>';
        echo '<div class="entry-header"><h4 class="entry-title"><a class="track-single-latest-posts" href="' . get_permalink() . '">' . get_the_title() . '</a></h4></div>';
        ?>
          <div class="entry-content">
            <?php get_the_permalink() ?>
            <?php the_excerpt() ?>
          </div>
        <?php
        echo '<a class="d-inline-block semi-bold underline-link-rev track-single-latest-posts" href="' . get_permalink() . '">Read more</a>';
        echo '</div>';
      endwhile;
      echo '</div>';
      echo '</div></section>';
    endif;
    wp_reset_postdata();
  }

?>
