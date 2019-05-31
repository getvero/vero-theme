<?php

function prev_link_text() {
  $prevlink = 'Previous';
  return $prevlink;
}
function next_link_text() {
  $nextlink = 'Next';
  return $nextlink;
}

function remove_read_more_link() {
  return '…';
}

function add_custom_read_more_link() {
  if( is_blog_archive() ){ ?>

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
    <div class="resources-section featured-post bottom-padding-medium border-bottom">
      <h2 class="micro regular">Featured</h2>

      <div class="entry entry-hover">
      <?php
        $custom_query = new WP_Query(array(
          'post_type' => array('post', 'guides'),
          'tag' => 'featured'
        ));
        while( $custom_query->have_posts() ) : $custom_query->the_post();
          $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $category = get_the_category();
          ?>

          <div class="grid md-items-center">
            <div class="post-image">
              <img class="border-radius-1 responsive-image align-middle" src="<?php echo $featured_image; ?>"  alt="<?php echo  $featured_image; ?>">
            </div>

            <div class="post-body">
              <div class="post-header">
                <a class="unstyled badge bottom-margin-small" href="<?php echo get_category_link($category[0]->cat_ID); ?>"><?php echo $category[0]->cat_name; ?></a>

                <h3 class="regular bottom-margin-tiny"><a class="unstyled" href="<?php the_permalink(); ?>"><span class="post-underline"><?php the_title(); ?></span></a></h3>
              </div>

              <div class="entry-content bottom-margin-smedium">
                <p class="medium"><?php echo the_excerpt_max_charlength(400); ?></p>
              </div>

              <div class="flex items-center entry-footer">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>

                <div>
                  <span class="d-block annotation semi-bold uppercase"><?php echo get_the_author(); ?></span>
                  <span class="d-block annotation"><?php echo get_the_author_meta('description'); ?></span>
                </div>
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
      <div class="resources-section resources-section-secondary news-and-updates-posts bottom-padding-medium border-bottom">
        <h2 class="micro regular">News and updates</h2>

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
              <div class="post-image bottom-margin-small">
                <img class="border-radius-1 responsive-image align-middle" src="<?php echo $featured_image; ?>"  alt="<?php echo  $featured_image; ?>">
              </div>

              <div class="post-body">
                <div class="post-header">
                  <a class="unstyled badge bottom-margin-small" href="<?php echo get_category_link($category[0]->cat_ID); ?>"><?php echo $category[0]->cat_name; ?></a>

                  <h3 class="tubs regular bottom-margin-micro"><a class="unstyled" href="<?php the_permalink(); ?>"><span class="post-underline"><?php the_title(); ?></span></a></h3>
                  <span class="d-block regular bottom-margin-tiny"><?php echo get_the_date( 'j M, Y' ); ?></span>
                </div>

                <div class="entry-content bottom-margin-smedium">
                  <p class="medium"><?php echo the_excerpt_max_charlength(400); ?><p>
                </div>

                <div class="flex items-center entry-footer">
                  <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>

                  <div>
                    <span class="d-block annotation semi-bold uppercase"><?php echo get_the_author_meta('display_name', $author_id); ?></span>
                    <span class="d-block annotation"><?php echo get_the_author_meta('description'); ?></span>
                  </div>
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
            'post_type' => array('post', 'guides'),
            'tag' => 'evergreen'
          ));

          while( $custom_query->have_posts() ) : $custom_query->the_post();
            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $category       = get_the_category();
          ?>

            <div class="entry entry-hover">
              <div class="post-image bottom-margin-small">
                <img class="border-radius-1 responsive-image align-middle" src="<?php echo $featured_image; ?>"  alt="<?php echo  $featured_image; ?>">
              </div>

              <div class="post-body">
                <div class="post-header">
                  <a class="unstyled badge bottom-margin-small" href="<?php echo get_category_link($category[0]->cat_ID); ?>"><?php echo $category[0]->cat_name; ?></a>

                  <h3 class="tubs regular bottom-margin-tiny"><a class="unstyled" href="<?php the_permalink(); ?>"><span class="post-underline"><?php the_title(); ?></span></a></h3>
                </div>

                <div class="entry-content bottom-margin-smedium">
                  <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100, '…');?></p>
                </div>

                <div class="flex items-center entry-footer">
                  <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>

                  <div>
                    <span class="d-block annotation semi-bold uppercase"><?php echo get_the_author_meta('display_name', $author_id); ?></span>
                    <span class="d-block annotation"><?php echo get_the_author_meta('description'); ?></span>
                  </div>
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

function add_custom_category_entry_content() {
  ?>
    <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
  <?php
}

function category_setup() {
  if ( is_category() || is_search() ){
    remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
    add_action( 'genesis_entry_content', 'add_custom_category_entry_content' );

    remove_action( 'genesis_entry_footer', 'add_custom_read_more_link' );
    remove_action( 'genesis_entry_footer', 'add_shares' );
  }
}

function add_latest_title() {
  if ( is_home() && !is_paged() ) {
  ?>
    <!-- <h1 class="font-brand-gray-dark tubs regular bottom-margin-smedium">Latest</h1> -->
  <?php }
  else if ( is_home() && is_paged() ){
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    <h1 class="tubs regular no-bottom-margin">All – Page <?php echo $paged; ?></h1>
  <?php }
  else if ( is_category() ){ ?>
    <div class="archive-description">
      <h1 class="tubs regular no-bottom-margin"><?php single_cat_title() ?></h1>
    </div>
  <?php }
  else if ( is_search() ) { ?>
    <div class="archive-description">
      <h1 class="tubs regular no-bottom-margin">Search results for: <?php echo get_search_query(); ?></h1>
    </div>
  <?php }
}

function get_category_title() {
  if ( is_home() ){
    echo "All";
  } else if ( is_category() ){
    echo single_cat_title();
  } else if ( is_single() ){
    echo get_the_category( $id )[0]->name;
  } else if ( is_search() ) {
    echo "Search";
  }
}

function add_categories_and_search() {
  if ( is_blog_archive() || is_single() ){ ?>

    <div class="js-resources-sidebar resources-sidebar">
      <div class="flex flex-column nav-resources wrap">
        <p class="hide md-show bottom-margin-medium bottom-padding-medium border-bottom">Insights, tips and tools for creating better customer messaging and product experiences.</p>

        <div class="resources-sidebar-categories bottom-margin-small">
          <h3 class="semi-bold annotation uppercase faded bottom-margin-small">Categories</h3>

          <ul class="resources-sidebar-categories-list">
            <li class="<?php echo is_active('all'); ?>"><a class="unstyled" href="/resources">All</a></li>
            <li class="<?php echo is_active('vero-updates'); ?>"><a class="unstyled" href="/resources/category/vero-updates/">Vero Updates</a></li>
            <li class="<?php echo is_active('how-to'); ?>"><a class="unstyled" href="/resources/category/how-to">How To's</a></li>
            <li class="<?php echo is_active('case-studies'); ?>"><a class="unstyled" href="/resources/category/case-studies">Case Studies</a></li>
          </ul>
        </div>
      <div class="js-blog-navigation nav-blog bottom-margin-medium border-bottom-light">
        <div class="nav-blog-categories">
          <input class="" id="toggle" type="checkbox" name="toggle">
          <label class="category-button flex items-center" for="toggle">
            <span><?php get_category_title(); ?></span>

            <svg class="left-margin-micro" xmlns="http://www.w3.org/2000/svg" width="19" height="19"><g fill="none" fill-rule="evenodd"><path d="M0 0h19v19H0z"/><path fill="#384254" d="M9.5 13.036a.997.997 0 0 1-.707-.293L5.257 9.207a1 1 0 0 1 1.414-1.414L9.5 10.62l2.828-2.828a1 1 0 1 1 1.414 1.414l-3.535 3.536a.997.997 0 0 1-.707.293z"/></g></svg>
          </label>

          <ul class="nav-blog-category-list semi-bold">
            <li class="<?php echo is_active('all'); ?>"><a href="/resources">All</a></li>
            <li class="<?php echo is_active('vero-updates'); ?>"><a href="/resources/category/vero-updates/">Vero Updates</a></li>
            <li class="<?php echo is_active('how-to'); ?>"><a href="/resources/category/how-to">How To's</a></li>
            <li class="<?php echo is_active('case-studies'); ?>"><a href="/resources/category/case-studies">Case Studies</a></li>
            <li>
              <?php
                get_search_form(true);
              ?>
            </li>
          </ul>
        </div>

        <?php echo get_search_form(); ?>

        <div class="top-margin-auto">
          <form class="js-blog-subscribe-form" action='https://app.getvero.com/forms/0eefc98b2dc881e7c0888ae698833577' method='post'>
            <div class="form-group bottom-margin-micro">
              <input class="form-control input-width-full" id="sender_email_address" name="email" type="email" placeholder="email@address.com">
              <input name="user[consent_marketing]" type="hidden" value="true">
              <input name="user[consent_product_updates]" type="hidden" value="true">
              <input name="event[blog_subscriber_source]" type="hidden" value="blog_header">
              <input name="user[contact_by_fax_only]" type="checkbox" value="1" style="display:none !important" tabindex="-1" autocomplete="false">
            </div>
            <input class="btn btn-success input-width-full bottom-margin-tiny" type="submit" value="Subscribe to updates">
            <p class="annotation"><span class="faded">We're committed to keeping your information safe. Read our</span> <a href="/privacy">Privacy Policy</a>.</p>
          </form>
        </div>
      </div>
    </div>

  <?php }
}

?>