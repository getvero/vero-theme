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
  return '...';
}

function add_custom_read_more_link() {
  if( is_blog_archive() ){ ?>
    <a class="btn btn-default btn-small" href="<?php the_permalink(); ?>">Read&nbsp;More</a>
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

function add_featured_posts() {
  if( is_home() && !is_paged() ){
    ?>
    <div class='featured-posts'>
    <?php
    $custom_query = new WP_Query(array(
      'post_type' => array('post', 'guides'),
      'featured' => 'yes'
    ));
    while( $custom_query->have_posts() ) : $custom_query->the_post();
      $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      $category = get_the_category();
      $result = get_highest_shares();
      if( $result['shares'] < 30 ) {
        $result['platform'] = "none";
        $result['shares'] = "Editor's Pick";
      } else if( $result['platform'] == 'all' ) {
        $result['platform'] = 'share';
        $result['shares'] = number_format($result['shares']);
      } else {
        $result['shares'] = number_format($result['shares']);
      }
      ?>
      <div class='featured-post' <?php if ( $featured_image != '' ) { ?>style='background:url("<?php echo $featured_image; ?>"); background-size: cover; background-position: center'<?php } ?>>
        <?php $nssb = new Naked_Social_Share_Buttons; echo $nssb->share_numbers['shares']; ?>
        <div class='featured-image-overlay'></div>
        <div class="featured-titles">
          <div class="shares-label <?php echo $result['platform']; ?>"><span class="fa fa-<?php echo $result['platform']; ?>"></span><?php echo $result['shares']; ?></div>
          <div class="category"><?php echo $category[0]->cat_name; ?></div>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <a class='featured-link-overlay' href="<?php the_permalink(); ?>"></a>
      </div>
    <?php endwhile;
    wp_reset_postdata();
    ?>
    </div>
    <?php
  }
}

function add_custom_category_entry_content() {
  ?>
  <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
  <?php
}

function add_shares() {
  global $post;
  if( is_blog_archive() ){
    ?>
      <div class='shares-block'>
        <small class="smaller right-margin-tiny">Share this</small>
        <!-- <div class='total-shares'>
          <span><?php
            //$share_obj = new Naked_Social_Share_Buttons($post);
            $shares = get_field('naked_shares_count')['shares'];
            echo $shares['facebook'] + $shares['twitter'] + $shares['linkedin'];
          ?></span>Shares
        </div> -->
        <?php echo naked_social_share_buttons(); ?>
      </div>
    <?php
  }
}

function change_excerpt_length() {
  if( is_category() || is_search() ){
    return 20;
  }
}

function category_setup() {
  if( is_category() || is_search() ){
    if(has_post_thumbnail()){
      $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      ?>
        <div class='category-image' style='<?php if( $image != '' ) { ?>background:url("<?php echo $image; ?>"); background-size: cover'<?php } ?>><a href='<?php the_permalink(); ?>'></a></div>
      <?php
    }
    else {
      ?>
        <div class='category-image'><a href='<?php the_permalink(); ?>'></a></div>
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
  if( is_home() && !is_paged() ){ ?>
    <h2 class="section-title">Latest</h2>
  <?php }
  else if( is_home() && is_paged() ){
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    <h2 class="section-title">All – Page <?php echo $paged; ?></h2>
  <?php }
  else if( is_post_type_archive('release-notes') ){ ?>
    <div class="full-width">
      <img class="section-title-image" src="/wp-content/themes/vero/assets/images/changelog/release-notes.svg"/>
      <h1 class="small-title">Release Notes</h1>
      <p class="no-top-margin">Read about the latest features, updates and bug fixes.</p>
    </div>
  <?php }
  else if( is_category() ){ ?>
    <h2 class="section-title"><?php single_cat_title() ?></h2>
  <?php }
  else if( is_search() ) { ?>
    <h2 class="section-title">Search results for: <?php echo get_search_query(); ?></h2>
  <?php }
}

function get_category_title() {
  if( is_home() ){
    echo "All";
  } else if( is_category() ){
    echo single_cat_title();
  } else if( is_search() ) {
    echo "Search";
  }
}

function add_categories_and_search() {
  if( is_blog_archive() || is_single() ){ ?>

    <div class="js-blog-navigation bottom-margin-medium bottom-border-light" id="blog-sub-menu">
      <div class="categories">
        <div class="category-button items-center">
          <?php get_category_title(); ?>
          <svg class="left-margin-tiny" xmlns="http://www.w3.org/2000/svg" width="19" height="19"><g fill="none" fill-rule="evenodd"><path d="M0 0h19v19H0z"/><path fill="#384254" d="M9.5 13.036a.997.997 0 0 1-.707-.293L5.257 9.207a1 1 0 0 1 1.414-1.414L9.5 10.62l2.828-2.828a1 1 0 1 1 1.414 1.414l-3.535 3.536a.997.997 0 0 1-.707.293z"/></g></svg>
        </div>
        <ul class="semi-bold" id="categories-menu">
          <li class="<?php echo is_active('all'); ?>"><a href="/resources">All</a></li>
          <li class="<?php echo is_active('vero-updates'); ?>"><a href="/resources/category/vero-updates/">Vero Updates</a></li>
          <li class="<?php echo is_active('how-to'); ?>"><a href="/resources/category/how-to">How To's</a></li>
          <li class="<?php echo is_active('case-studies'); ?>"><a href="/resources/category/case-studies">Case Studies</a></li>
          <!-- <li class="<?php echo is_active('product-updates'); ?>"><a href="/resources/category/case-studies">Product Updates</a></li> -->
        </ul>
      </div>

      <?php
        get_search_form(true);
      ?>

      <a class="btn btn-primary" id="demo-trigger" rel="leanModal" href="#demo">Subscribe to blog</a>
    </div>

    <div id="demo">
      <div class="inner">
        <div id="enquire-intro" class="center-text">
          <p class="regular">Fill out the form below and our sales team will get back to you promptly. We're keen to learn more about your needs and share if and how Vero can work for you.</p>
        </div>
        <div id="thanks" class="center-text">
          <h2>Thanks!</h2>
          <p>Hang tight, one of our Customer Success engineers will be in touch soon.</p>
        </div>
        <div id="thanks">
          <h3>Thanks!</h3>
          <p>Hang tight, one of our Customer Success engineers will be in touch soon.</p>
        </div>
        <form id="high-volume-sender-form" action='https://app.getvero.com/demos' method='post'>
          <div class="half">
            <div class="form-group"><label>Name: <span>*</span></label><input id="sender_name" class="form-control" name="name" type="text" autofocus="autofocus" /></div>
            <div class="form-group"><label>Email: <span>*</span></label><input id="sender_email_address" class="form-control" name="email" type="text" /></div>
            <div class="form-group"><label>Phone:</label><input id="sender_phone" class="form-control" name="phone" type="text" /></div>
          </div>
          <div class="half">
            <div class="form-group"><label>Company name: <span>*</span></label><input id="sender_company_name" class="form-control" name="company_name" type="text" /></div>
            <div class="form-group"><label>How many subscribers do you have?</label>
              <select id="sender_subscribers" class="form-control" name="subscribers">
                <option value="250000">175,000 - 250,000 subscribers</option>
                <option value="500000">250,000 - 500,000 subscribers</option>
                <option value="1000000">500,000 - 1,000,000 subscribers</option>
                <option value="5000000">1,000,000 - 5,000,000 subscribers</option>
                <option value="10000000">5,000,000 - 10,000,000 subscribers</option>
                <option value="more">10,000,000+ subscribers</option>
              </select>
            </div>
            <div class="radio-group">
              <label>How would you like us to contact you?</label><br>
              <input id="email" checked="checked" name="contact_method" type="radio" value="email" />
              <label class="method" for="email">Email</label>
              <input id="phone" name="contact_method" type="radio" value="phone" />
              <label class="method" for="phone">Phone</label>
            </div>
            <div class="checkbox">
              <input name="contact_by_fax_only" type="checkbox" value="1" style="display:none !important" tabindex="-1" autocomplete="false" />
            </div>
          </div>
          <div class="full-width top-padding-small center-text">
            <input type="hidden" name="redirect_on_success" value="https://www.getvero.com/email-marketing-demo/?thanks=yourock">
            <input type="submit" value="Get in touch" id="request-demo" class="btn btn-success">
          </div>
          <p class="small light faded center-text">In order to provide our service to you, we must store your personal information. Any personal data that we collect will be handled in accordance with our  <a href="/privacy">Privacy Notice</a>.</p>
        </form>
      </div>
      <div class="modal_close"><span class="fa fa-close"></span></div>
    </div>

  <?php }
}

?>