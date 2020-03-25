<?php

  function add_author() {
    if ( is_single() ) {
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

  function post_is_long() {
    $content = get_the_content();
    $length  = sizeof( explode(" ", $content) );

    return $length > 950;
  }

  function add_blue_signup_boxes( $content ) {
    global $post;
    $index = 5;

    $dom = new DOMDocument();
    @$dom->loadHTML( $content );
    $dom->preserveWhiteSpace = false;

    // $insert_blue_box = get_field('insert_blue_box');

    if ( is_blog_post_or_guide() && post_is_long() && ( isset($insert_blue_box) && $insert_blue_box ) ) {
      $tags = $dom->getElementsByTagName('p');
      $total_p_tags = $tags->length;

      $content = blue_signup_box_content();
      $frag = $dom->createDocumentFragment();
      $frag->appendXML( $content );

      $div = $dom->createElement( 'div', '' );
      $div->setAttribute( "class", "blue-signup" );

      $div->appendChild($frag);

      $insertion_point = get_element($tags, (($total_p_tags/2)-1));
      $insertion_point->insertBefore( $div, $index_p );
    }

    return $dom->saveHTML();
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
    return "<div class='interstitial'><div class='interstitial-left'><div class='blog-cta-content'><h1>Create better customer experiences</h1><p>Send super targeted messages with Vero.</p><a class='btn btn-success' href='https://app.getvero.com/signup' target='_blank'>Start a free trial</a></div></div><div class='interstitial-right'><img class='no-border' src='/wp-content/themes/vero/assets/dist/images/blog-cta@2x.png'/></div></div>";
  }

  function be_related_posts_by_category() {
    // If we are not on a single post/guide page, abort.
    if ( !is_blog_post_or_guide() ) {
      return;
    }

    $categories = get_the_terms( get_the_ID(), 'category' );
    $category = array_shift( $categories );

    $loop = new WP_Query( array(
      'posts_per_page'  => 3,
      'post_type'      => array('post', 'guides', 'tutorials'),
      'category_name'   => $category->slug,
      'post__not_in'    => array( get_the_ID() )
     ) );

    if( $loop->have_posts() ):
      echo '<section class="related"><div class="inner xlarge-inner">';
      echo '<h3 class="blog-title">Latest</h3>';
      echo '<div class="grid">';
      while( $loop->have_posts() ): $loop->the_post();
        echo '<div class="entry">';
        if( has_post_thumbnail() )
          echo '<a class="show entry-aside" href="' . get_permalink() . '">' . the_post_thumbnail( get_the_ID(), array('class' => 'entry-image') ) . '</a>';
          echo '<h4 class="entry-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h4>';
        echo '<div class="bottom-margin-md">' . the_excerpt() . '</div>';
        echo '<a class="unstyled underline-link" href="' . get_permalink() . '">Read more</a>';
        echo '</div>';
      endwhile;
      echo '</div>';
      echo '</div></section>';
    endif;
    wp_reset_postdata();
  }

?>