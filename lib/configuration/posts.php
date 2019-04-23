<?php

function add_feature_image_to_posts() {
  if ( is_blog_post_or_guide() ){
    global $post;

    $image_id  = get_post_thumbnail_id( $post->ID );
    $image     = wp_get_attachment_url( $image_id );
    $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );

    if( $image != '' ){
    ?>
      <img src="<?php echo $image; ?>"  alt="<?php echo  $image_alt; ?>">
    <?php
    }
  }
}

function move_feature_image() {
  if ( is_home() ){
    remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
    add_action( 'genesis_entry_header', 'genesis_do_post_image', 8 );
  }
}

function force_full_width_on_posts( $options ) {
  if( is_blog_post_or_guide() ) {
    $options = 'full-width-content';
    return $options;
  }
}

function add_blog_post_back_button() {
  global $post;

  if( is_child_guide() ){?>
    <a href="<?php echo get_permalink($post->post_parent); ?>" class="back-to-blog">Back to Table of Contents</a>
  <?php } else if ( is_singular('release-notes') ) { ?>
    <a href="/release-notes" class="back-to-blog">Back to Release Notes</a>
  <?php } else if( is_blog_post_or_guide() ){ ?>
    <a href="/resources" class="back-to-blog">Back to Blog</a>
  <?php }
}

function add_shares_to_post() {
  global $post;
  if( is_blog_post_or_guide() ){
    ?>
      <div class='shares-block'>
        <!-- <div class='total-shares'>
          <span><?php
            //$share_obj = new Naked_Social_Share_Buttons($post);
            //$final_shares = get_field('naked_shares_count');
            //if ( is_numeric( $final_shares['expire'] ) && $final_shares['expire'] > time() ) {
            //  $shares = get_field('naked_shares_count')['shares'];
            //} else {
              $share_obj = new Naked_Social_Share_Buttons();
              $shares = $share_obj->get_share_numbers['shares'];
            //}
            echo $shares['facebook'] + $shares['twitter'] + $shares['linkedin'];
          ?></span>Shares
        </div> -->
        <?php echo naked_social_share_buttons(); ?>
      </div>
    <?php
  }
}

function post_remove_footer() {
  if( is_blog_post_or_guide() ){
    remove_action( 'genesis_entry_footer', 'add_shares' );
  }
}

function add_contributors() {
  if( is_singular('release-notes') ){
    global $post;
    $contributors = get_post_meta($post->ID, 'contributors', true);
    ?>
    <div class='contributor-bio'>
      <div class='contributor-title'>Who helped out</div>
      <ul class='contributor-details unstyled-list'>
      <?php foreach($contributors as $contributor) { ?>
        <li>
          <div class="contributor-image"><?php echo get_avatar( get_the_author_meta( 'ID', $contributor ) ); ?></div>
          <div class='contributor-name'><a href="https://twitter.com/<?php echo get_the_author_meta( 'twitter', $contributor ); ?>" target="_blank">@<?php echo get_the_author_meta( 'twitter', $contributor ); ?></a></div>
        </li>
      <?php } ?>
      </ul>
    </div>
  <?php }
}

function add_subscribe_form() {
  if( is_blog_post_or_guide() ){
    ?>
    <div class="js-overlay overlay">
      <div class="js-newsletter newsletter center-text">
        <div class="js-newsletter-close newsletter-close">
          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"><path fill="#384254" fill-rule="evenodd" d="M8.086 9.5L4.35 5.765a1 1 0 0 1 1.414-1.414L9.5 8.086l3.735-3.735a1 1 0 1 1 1.414 1.414L10.914 9.5l3.735 3.735a1 1 0 1 1-1.414 1.414L9.5 10.914 5.765 14.65a1 1 0 0 1-1.414-1.414L8.086 9.5z"/></svg>
        </div>

        <div class="bottom-margin-small js-enquire-intro" id="enquire-intro">
          <h3>Get our latest blog posts, news, and tips straight to your inbox</h3>
        </div>
        <div class="js-thanks" id="thanks">
          <h3 class="atomic regular bottom-margin-small">Almost there!</h3>
          <p class="no-margin">We've sent you an email to confirm your subscription.</p>
        </div>
        <form class="js-blog-subscribe-form bottom-margin-smedium" action='https://app.getvero.com/forms/0eefc98b2dc881e7c0888ae698833577' method='post'>
          <div class="flex justify-center items-stretch bottom-margin-tiny">
            <input class="form-control form-control-large" id="sender_email_address" name="email" type="email" placeholder="name@mycompany.com">
            <input name="user[consent_marketing]" type="hidden" value="true">
            <input name="user[consent_product_updates]" type="hidden" value="true">
            <input name="event[blog_subscriber_source]" type="hidden" value="blog_fullscreen">
            <input name="user[contact_by_fax_only]" type="checkbox" value="1" style="display:none !important" tabindex="-1" autocomplete="false">
            <input class="btn btn-medium btn-success" type="submit" value="Subscribe">
          </div>
          <p class="medium faded">No spam, ever!</p>
        </form>

        <p class="js-policy policy mini center-text"><span class="faded">We're committed to keeping your information safe. Read our</span> <a href="/privacy">Privacy Policy</a>.</p>
      </div>
    </div>

    <div class='subscribe-form center-block'>
      <h3 class="micro center-text">Get our latest blog posts, product news and tips straight to your inbox</h3>
      <form class="bottom-margin-small" action='https://app.getvero.com/forms/0eefc98b2dc881e7c0888ae698833577' method='post'>
        <input id="footer-email-address"  name='email' type='email' class="form-control" placeholder="name@mycompany.com">
        <input name='redirect_on_success' type='hidden' value='https://www.getvero.com/subscribed-to-the-blog/'>
        <input name='user[consent_marketing]' type='hidden' value='true'>
        <input name='user[consent_product_updates]' type='hidden' value='true'>
        <input name="event[blog_subscriber_source]" type="hidden" value="blog_footer">
        <input name='user[contact_by_fax_only]' type='checkbox' value='1' style='display:none !important' tabindex="-1" autocomplete="false" />
        <input class="btn btn-success btn-medium" type='submit' value='Subscribe'>
      </form>
      <p class="annotation center-text"><span class="faded">By subscribing, you consent to let Vero send you messages regarding marketing and product. You can learn more in our</span> <a href="https://www.getvero.com/privacy" target="_blank">Privacy Notice</a><span class="faded">, and you can opt out or change your consent at any time.</span></p>
    </div>
  <?php
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

function add_post_sidebar() {
  if ( is_blog_post_or_guide() ) {
    genesis_widget_area( 'post-sidebar' );
  }
}

function post_is_long() {
  $content = get_the_content();
  $length  = sizeof( explode(" ", $content) );

  return $length > 950;
}

// Change excerpt length
function custom_excerpt_length( $length ) {
  return 25;
}
function new_excerpt_more( $more ) {
  return '…';
}

function custom_cta() {
  if ( get_field('custom_cta') ) {
  }
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

?>