<?php

function add_feature_image_to_posts() {
  if ( is_blog_post_or_guide() ){
    global $post;
    ?>
      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
    <?php
  }
}

function force_full_width_on_posts( $options ) {
  if( is_blog_post_or_guide() ) {
    $options = 'full-width-content'; 
    return $options;
  }
}

function add_blog_post_back_button() {
  if( is_blog_post_or_guide() ){ ?>
    <a href="/articles" class="back-to-blog"><span class="fa fa-long-arrow-left"></span>Back to Blog</a>
  <?php }
}

function add_shares_to_post() {
  if( is_blog_post_or_guide() ){
    ?>
      <div class='shares-block'>
        <div class='total-shares'>
          <span><?php echo do_shortcode('[pssc_all]'); ?></span>Shares
        </div>
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

function add_subscribe_form() {
  if( is_blog_post_or_guide() ){
    ?>
    <div class='subscribe-form center-block'>
      <h2>Receive marketing tips in your inbox!</h2>
      <form action='https://app.getvero.com/forms/d18fad198e3fb6d5d641d602ba7006f1' method='post'>
          <input name='email' type='email' class="form-control" placeholder="email@address.com"></input>
          <input type='submit' value='Subscribe' class="btn btn-success"/>
      </form>
    </div>
  <?php
  }
}

function add_author_bio() {
  if( is_blog_post_or_guide() ){
    global $post;
    ?>
    <div class='author-bio'>
      <div class='author-title'>Written by</div>
      <div class='author-image'><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></div>
      <div class='author-details'>
        <p class='author-name'><?php echo get_the_author_meta( 'display_name' ); ?></p>
        <p class='author-description'><?php echo get_the_author_meta( 'description' ); ?></p>
      </div>
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

function add_blue_signup_boxes( $content ) {
  global $post;
  $index = 5;

  $dom = new DOMDocument();
  @$dom->loadHTML( $content );
  $dom->preserveWhiteSpace = false;

  $tags = $dom->getElementsByTagName('p');
  $total_p_tags = $tags->length;

  $content = blue_signup_box_content();
  $frag = $dom->createDocumentFragment(); 
  $frag->appendXML( $content ); 

  $div = $dom->createElement( 'div', '' ); 
  $div->setAttribute( "class", "blue-signup" );
  
  $div->appendChild($frag); 

  $index_p = $tags->item( ( ($total_p_tags/2)-1 ) );
  $index_p->parentNode->insertBefore( $div, $index_p );  

  return $dom->saveHTML();
}

function blue_signup_box_content() {
  return "<div class='interstitial'><h1>Increase Conversion with Vero</h1><p>Data Driven Email Marketing Software</p><a class='btn btn-success' href='#'>14 Day Free Trial</a><img src='#'/></div>";
}

?>