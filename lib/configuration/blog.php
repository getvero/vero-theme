<?php

// Add guides to feed for the blog
function namespace_add_custom_types( $query ) {
  global $wp_the_query;

  if( ((is_post_type_archive('post') ) || is_home()) && $query === $wp_the_query && !is_admin() ) {
    $query->set( 'post_type', array(
      'post', 'guides'
    ));
    if(!is_paged()){
      $query->set( 'offset', 1 );
    }
    $query->set( 'post_parent', 0 );
    return $query;
  }
}

// Add featured image to blog posts
function blog_post_featured_image () {
  if ( ! is_singular( 'post' ) )
    return;

  $img = genesis_get_image( array( 'format' => 'html', 'size' => genesis_get_option( 'image_size' ), 'attr' => array( 'class' => 'post-image' ) ) );
  printf( '<a id="blog-post-image" class="post-image-link" href="%s" title="%s">%s</a>', get_permalink(), the_title_attribute( 'echo=0' ), $img );
}

// Types for post type options
function get_the_desc_for_post_type($type,$title=nil){
  if ($title != nil) {
    echo $title;
  } else {
    switch($type){
      case "guides":
        echo "guide";
        break;
      case "resources":
        echo "ebook";
        break;
      default:
        echo "post";
        break;
    }
  }
}

// Add post type on the side
function do_post_type($color,$line=true,$latest=false,$temp_title=nil,$comments=false) {
  global $post;
  ?>
    <div id="post-type-block" class="post-type-block center-text">
      <div class="the-date"><?php if($latest==true){ echo 'Latest'; } else {the_date('d M Y');} ?></div>
      <div class="circle"><img src="/wp-content/themes/vero/assets/images/post-types/<?php get_the_desc_for_post_type(get_post_type($post),$temp_title) ?><?php echo $color ?>.png"></div>
      <div class="tag"><?php get_the_desc_for_post_type( get_post_type($post),$temp_title)?></div>
      <a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-via="getvero">Tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
    <?php if($line == true){
      ?><div class="post-type-line"></div>
    <?php }
    
    if(is_singular('post')){?>
      <div class="post-type-block comments center-text">
        <div class="circle"><img src="/wp-content/themes/vero/assets/images/post-types/comments.png"></div>
      </div>
    <?php }
}

// Sticky post type when scrolling
function scrolls_for_blog_posts () {
  ?>
  <script>
  jQuery(document).ready( function () { 
    // build scene
    jQuery("#post-type-block").sticky({topSpacing:40});
  });
  </script>
  <?php 
}

// Add big image at top of the blog homepage
function add_big_cta() {
  $args = array(
    'posts_per_page' => 1,
    'post_parent' => 0, 
    'post_type' => array(
      'post', 'guides'
    )
  );

  if(!is_paged() ) { 
    $counter = 0;
    echo "<div class='big-cta-area'>";

    $the_query = new WP_Query( $args );
    $items = $the_query->get_posts();

    $item = $items[0];
        setup_postdata( $item );
        $img = wp_get_attachment_url( get_post_thumbnail_id($item->ID) );
        $img = preg_replace("/^http:/i", "https:", $img ); 
        ?>
          <div class='big-bg <?php echo get_the_desc_for_post_type(get_post_type($item)) ?>' style="background:url('<?php echo $img; ?>') no-repeat center center fixed;">
          <div class="shade">
          <div class="wrap">
            <div class="post-type-line-top"></div>
            <?php 
              //$type = get_the_desc_for_post_type(get_post_type($item)); 
              do_post_type('white',false,true); 
            ?>
            <h1><a href="<?php echo get_the_permalink($item) ?>"><?php echo get_the_title($item) ?></a></h1>
            <p><?php echo get_custom_excerpt(110); ?></p>
            <p>
              <a class="more-link btn btn-success" href="<?php echo get_the_permalink($item); ?>">Read more &rarr;</a>
            </p>
            </div>
          </div>
          </div>
        <?php
    echo "</div>";
  }
}

// Add sign up form above content
function cta_before_content() {
  ?>
    <div class="cta-header center-text">
      <p class="h1">Engage your customers with automated email.</p>
      <p class="h4">Start a Vero trial, free for 14 days.</p>
      <form action='https://app.getvero.com/users' method='post' class='form-inline'>
        <div class="control-group">
          <input autocomplete="off" class="form-control" id="user_email" name="user[email]" placeholder="Your email" type="text" value="">
        </div>
        <div class="control-group">
          <input autocomplete="off" class="form-control" id="user_password" name="user[password]" placeholder="Secure password (must include one upper-case, one lower-case, one number)" type="password">
        </div>
        <input type='submit' value='Start a free trial' class="btn btn-warning" />
      </form>
      <div class="right">
        <p>Track customer behavior on-site and in-app, segment into meaningful groups and send triggered emails that improve engagement and sales.</p>
      </div>
    </div>
  <?php
}

// Add subscribe form after blog posts
function subscribe_after_content() {
  ?>
    <div class="subscribe-footer">
      <p class="h3">We dissect email campaigns for a living.</p>
      <p>Join 10,000+ marketers who get weekly email marketing tips in their inbox.</p>
      <form action='https://app.getvero.com/forms/71789091b958b7b1683654756aca7391' method='post'>
        <input name='email' type='email' />
        <input type='submit' value='Join Us' class="btn btn-primary" />
        <p class="small">You can unsubscribe at any time.</p>
      </form>
    </div>
  <?php
}

?>