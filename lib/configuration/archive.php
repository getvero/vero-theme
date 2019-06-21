<?php

function prev_link_text() {
  $prevlink = 'Previous';
  return $prevlink;
}
function next_link_text() {
  $nextlink = 'Next';
  return $nextlink;
}

function add_custom_read_more_link() {
  if ( is_archive() || is_search() ) { ?>
    <?php if ( get_field('cta') ): ?>
      <a class="regular underline-link unstyled" href="<?php the_permalink(); ?>"><?php the_field('cta') ?></a>
    <?php else: ?>
      <a class="regular underline-link unstyled" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
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

                <h3 class="entry-title regular bottom-margin-tiny"><a class="" href="<?php the_permalink(); ?>"><span class="entry-underline"><?php the_title(); ?></span></a></h3>
              </div>

              <div class="entry-content bottom-margin-smedium">
                <p><?php echo the_excerpt_max_charlength(400); ?></p>
              </div>

              <div class="flex items-center entry-footer">
                <img class="author-avatar" src="<?php echo get_avatar_url(get_the_author_meta( 'ID' )); ?>" alt="<?php the_author(); ?>">

                <span class="author-name"><?php echo get_the_author_meta('display_name', $author_id); ?></span>
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

                  <h3 class="entry-title regular bottom-margin-tiny"><a href="<?php the_permalink(); ?>"><span class="entry-underline"><?php the_title(); ?></span></a></h3>
                  <span class="d-block regular bottom-margin-tiny"><?php echo get_the_date( 'j M, Y' ); ?></span>
                </div>

                <div class="entry-content bottom-margin-smedium">
                  <p><?php echo the_excerpt_max_charlength(400); ?><p>
                </div>

                <div class="flex items-center entry-footer">
                  <img class="author-avatar" src="<?php echo get_avatar_url(get_the_author_meta( 'ID' )); ?>" alt="<?php the_author(); ?>">

                  <span class="author-name"><?php echo get_the_author_meta('display_name', $author_id); ?></span>
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

                  <h3 class="entry-title regular bottom-margin-tiny"><a href="<?php the_permalink(); ?>"><span class="entry-underline"><?php the_title(); ?></span></a></h3>
                  <span class="d-block regular bottom-margin-tiny"><?php echo get_the_date( 'j M, Y' ); ?></span>
                </div>

                <div class="entry-content bottom-margin-smedium">
                  <p><?php echo the_excerpt_max_charlength(400); ?><p>
                </div>

                <div class="flex items-center entry-footer">
                  <img class="author-avatar" src="<?php echo get_avatar_url(get_the_author_meta( 'ID' )); ?>" alt="<?php the_author(); ?>">

                  <span class="author-name"><?php echo get_the_author_meta('display_name', $author_id); ?></span>
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

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;
	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo ' <br><a href="' . get_permalink() . '" class="more-link" title="Read More">Read More</a>';
	} else {
		echo $excerpt;
	}
}

function category_setup() {
  if ( is_category() || is_search() ){
    remove_action( 'genesis_entry_footer', 'add_shares' );
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

            <p class="medium"><?php echo the_excerpt_max_charlength(400); ?></p>
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