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

function get_highest_shares() {
  global $post;
  $options = array('twitter', 'facebook', 'linkedin', 'all');
  $shares = array();
  $i = -1;

  foreach ( $options as &$option ) {
    global $post;
    $i++;
    //$share_obj = new Naked_Social_Share_Buttons($post);
    //$shares_array = get_field('naked_shares_count')['shares'];
    $nssb = new Naked_Social_Share_Buttons;
    $shares_array = $nssb->share_numbers['shares'];

    if($option == 'all') {
      $score = $shares_array['facebook'] + $shares_array['twitter'] + $shares_array['linkedin'];
    } else {
      $score = $shares_array[$option];
    }

    $shares[$i] = intval($score);
  }
  if ( $shares[3] > 500 ) {
    $max = 3;
  } else {
    unset($shares[3]);
    $max = array_keys($shares, max($shares))[0];
  }
  $result = array();
  $result['platform'] = $options[$max];
  $result['shares'] = $shares[$max];
  return $result;
}

function change_home_loop() {
  if ( is_home() ) {
    remove_action( 'genesis_loop', 'genesis_do_loop' );
    add_action( 'genesis_loop', 'add_featured_posts' );
    add_action( 'genesis_loop', 'add_news_and_updates_posts' );
    add_action( 'genesis_loop', 'add_evergreen_posts' );
  }
}

function add_featured_posts() {
  if ( is_home() && !is_paged() ) {
    ?>
    <div class="featured-post">
      <h2 class="tubs regular">Featured</h2>

      <div class="flex post">
      <?php
        $custom_query = new WP_Query(array(
          'post_type' => array('post', 'guides'),
          'tag' => 'featured'
        ));
        while( $custom_query->have_posts() ) : $custom_query->the_post();
          $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $category = get_the_category();
          ?>

          <div class="post-image">
            <img class="responsive-image align-middle" src="<?php echo $featured_image; ?>"  alt="<?php echo  $featured_image; ?>">
          </div>

          <div class="post-body">
            <div class="category"><?php echo $category[0]->cat_name; ?></div>

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100, '…');?></p>
          </div>

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
    <div class="news-and-updates-posts">
      <h2 class="tubs regular">News and updates</h2>

      <div class="flex">
      <?php
        $custom_query = new WP_Query(array(
          'post_type' => array('post', 'guides'),
          'tag' => 'news_and_updates'
        ));

        while( $custom_query->have_posts() ) : $custom_query->the_post();
          $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $category = get_the_category();
          ?>

          <div class="post">
            <div class="post-image">
              <img class="responsive-image align-middle" src="<?php echo $featured_image; ?>"  alt="<?php echo  $featured_image; ?>">
            </div>

            <div class="post-body">
              <div class="category"><?php echo $category[0]->cat_name; ?></div>

              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

              <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100, '…');?></p>
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

function add_evergreen_posts() {
  if ( is_home() && !is_paged() ) {
    ?>
    <div class="evergreen-posts">
      <!-- <h2 class="tubs regular">Evergreen</h2> -->

      <div class="flex">
      <?php
        $custom_query = new WP_Query(array(
          'post_type' => array('post', 'guides'),
          'tag' => 'evergreen'
        ));
        while( $custom_query->have_posts() ) : $custom_query->the_post();
          $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $category = get_the_category();
          ?>

          <div class="post">
            <div class="post-image">
              <img class="responsive-image align-middle" src="<?php echo $featured_image; ?>"  alt="<?php echo  $featured_image; ?>">
            </div>

            <div class="post-body">
              <div class="category"><?php echo $category[0]->cat_name; ?></div>

              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

              <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 10, '…');?></p>
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

function add_custom_category_entry_content() {
  ?>
    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
  <?php
}

function change_excerpt_length( $length ) {
  if ( is_category() || is_search() ){
    return 20;
  }
}

function category_setup() {
  if ( is_category() || is_search() ){
    if ( has_post_thumbnail() ){
      $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      ?>
        <div class='category-image' style='<?php if( $image != '' ) { ?>background:url("<?php echo $image; ?>"); background-size: cover'<?php } ?>><a href='<?php the_permalink(); ?>'></a></div>
      <?php
    }
    else {
      ?>
        <div class="category-image"><a href="<?php the_permalink(); ?>"></a></div>
      <?php
    }

    remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
    add_action( 'genesis_entry_content', 'add_custom_category_entry_content' );
    remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
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
    <h1 class="font-brand-gray-dark tubs regular bottom-margin-smedium">All – Page <?php echo $paged; ?></h1>
  <?php }
  else if ( is_category() ){ ?>
    <h1 class="font-brand-gray-dark tubs regular bottom-margin-smedium"><?php single_cat_title() ?></h1>
  <?php }
  else if ( is_search() ) { ?>
    <h1 class="font-brand-gray-dark tubs regular bottom-margin-smedium">Search results for: <?php echo get_search_query(); ?></h1>
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

    <div class="js-blog-navigation nav-blog">
      <p class="bottom-margin-medium">Insights, tips and tools for creating better customer messaging and product experiences.</p>

      <div class="nav-blog-categories">
        <h3 class="semi-bold annotation uppercase faded">Categories</h3>

        <ul class="nav-blog-category-list">
          <li class="<?php echo is_active('all'); ?>"><a href="/resources">All</a></li>
          <li class="<?php echo is_active('vero-updates'); ?>"><a href="/resources/category/vero-updates/">Vero Updates</a></li>
          <li class="<?php echo is_active('how-to'); ?>"><a href="/resources/category/how-to">How To's</a></li>
          <li class="<?php echo is_active('case-studies'); ?>"><a href="/resources/category/case-studies">Case Studies</a></li>
        </ul>
      </div>

      <a class="js-blog-subscribe-btn btn btn-outline btn-primary" rel="leanModal" href="#blog">Subscribe to updates</a>
    </div>

    <div class="modal modal-blog" id="blog">
      <div class="center-text bottom-margin-small js-enquire-intro" id="enquire-intro">
        <h3>Get our latest blog posts, news and tips straight to your inbox.</h3>
      </div>
      <div class="center-text js-thanks" id="thanks">
        <h3 class="atomic regular bottom-margin-small">Almost there!</h3>
        <p class="no-margin">We've sent you an email to confirm your subscription.</p>
      </div>
      <form class="js-blog-subscribe-form" action='https://app.getvero.com/forms/0eefc98b2dc881e7c0888ae698833577' method='post'>
        <div class="form-group bottom-margin-tiny">
          <input class="form-control" id="sender_email_address" name="email" type="email" placeholder="email@address.com">
          <input name="user[consent_marketing]" type="hidden" value="true">
          <input name="user[consent_product_updates]" type="hidden" value="true">
          <input name="event[blog_subscriber_source]" type="hidden" value="blog_header">
          <input name="user[contact_by_fax_only]" type="checkbox" value="1" style="display:none !important" tabindex="-1" autocomplete="false">
        </div>
        <div class="form-group bottom-margin-tiny">
          <input class="btn btn-medium btn-success" type="submit" value="Subscribe to updates">
        </div>
        <div class="inner flush-top flush-bottom">
          <p class="mini center-text"><span class="faded">We're committed to keeping your information safe. Read our</span> <a href="/privacy">Privacy Policy</a>.</p>
        </div>
      </form>

      <div class="modal-close">
        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"><path fill="#384254" fill-rule="evenodd" d="M8.086 9.5L4.35 5.765a1 1 0 0 1 1.414-1.414L9.5 8.086l3.735-3.735a1 1 0 1 1 1.414 1.414L10.914 9.5l3.735 3.735a1 1 0 1 1-1.414 1.414L9.5 10.914 5.765 14.65a1 1 0 0 1-1.414-1.414L8.086 9.5z"/></svg>
      </div>
    </div>

  <?php }
}

?>