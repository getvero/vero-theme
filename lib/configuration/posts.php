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

function force_full_width_on_posts( $options ) {
  if( is_blog_post_or_guide() ) {
    $options = 'full-width-content';
    return $options;
  }
}

function add_blog_post_back_button() {
  global $post;

  if( is_child_guide() ){?>
    <a href="<?php echo get_permalink($post->post_parent); ?>" class="back-to-blog"><span class="fa fa-long-arrow-left"></span>Back to Table of Contents</a>
  <?php } else if ( is_singular('release-notes') ) { ?>
    <a href="/release-notes" class="back-to-blog"><span class="fa fa-long-arrow-left"></span>Back to Release Notes</a>
  <?php } else if( is_blog_post_or_guide() ){ ?>
    <a href="/resources" class="back-to-blog"><span class="fa fa-long-arrow-left"></span>Back to Blog</a>
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
    <div class='subscribe-form center-block'>
      <h2>Get our latest blog posts,<br>product news and tips straight to your inbox.</h2>
      <form action='https://app.getvero.com/forms/0eefc98b2dc881e7c0888ae698833577' method='post'>
          <input id="footer-email-address"  name='email' type='email' class="form-control" placeholder="email@address.com"></input>
          <input name='redirect_on_success' type='hidden' value='https://veropublic.wpengine.com/subscribed-to-the-blog/' />
          <input name='user[consent_marketing]' type='hidden' value='true' />
          <input name='user[consent_product_updates]' type='hidden' value='true' />
          <input name='user[contact_by_fax_only]' type='checkbox' value='1' style='display:none !important' tabindex="-1" autocomplete="false" />
          <input type='submit' value='Subscribe' class="btn btn-success left-margin-tiny"/>
      </form>
      <p class="mini">By subscribing, you consent to let Vero send you messages regarding marketing and product. You can learn more in our <a href="https://www.getvero.com/privacy" target="_blank">Privacy Notice</a>, and you can opt out or change your consent at any time.</p>
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

// change excerpts
function custom_excerpt_length( $length ) {
  return 20;
}
function new_excerpt_more($more) {
    return '...';
}
//

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
  return "<div class='interstitial'><div class='interstitial-left'><div class='blog-cta-content'><h1>Create better customer experiences</h1><p>Send super targeted messages with Vero.</p><a class='btn btn-success' href='https://app.getvero.com/signup' target='_blank'>Start a free trial</a></div></div><div class='interstitial-right'><img class='no-border' src='/wp-content/themes/vero/assets/images/blog-cta@2x.png'/></div></div>";
}

?>