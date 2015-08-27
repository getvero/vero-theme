<?php

// Add classes to image containers automatically
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

    // if image is less than 480px, add their old classes back in plus our new class
    
    if ( ! is_singular( 'guides' ) ) {
      if( $width < 1080) {
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
    } else {
      if (strlen($child_classes) && strpos('example-email',$child_classes) !== false){
        // the class we're adding
        $new_class = ' example-email';
        // the existing classes plus the new class
        $class_names_to_add = $existing_classes . $new_class;
        $parent->setAttribute('class', $class_names_to_add);
      } else {
        if ($width < 790 && $width > 600) {
          // the class we're adding
          $new_class = ' small-image';
          // the existing classes plus the new class
          $class_names_to_add = $existing_classes . $new_class;
          $parent->setAttribute('class', $class_names_to_add);
        } else if ($width < 600) {
          // the class we're adding
          $new_class = ' tiny-image';
          // the existing classes plus the new class
          $class_names_to_add = $existing_classes . $new_class;
          $parent->setAttribute('class', $class_names_to_add);
        }
      }
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

// Add video
function add_video() {
  global $post;

  $video = "<div id='video-embed'>".get_post_meta($post->ID, 'video_embed_code', true)."</div>";

  return $video;
}

// Read more button
function read_more_link() {
  return '<p><a class="more-link btn btn-success" href="' . get_permalink() . '">Read more &rarr;</a></p>';
}

// Custom popup functions
function custom_popups() {
  $post = get_post();
  $with_scroll = (get_post_meta($post->ID, 'percent', true));
  $percent = (get_post_meta($post->ID, 'percent_down', true));
  $popup_value = (do_shortcode(get_post_meta($post->ID, 'popup_value', true)));
  
  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $parsed_url = parse_url($url);
  
  $has_cookie = $_COOKIE[str_replace('/', '_', $parsed_url['path'])];

  if (!empty($popup_value) && empty($has_cookie)){
  ?>
    <div id="blog-popup" style="display:none;"><?php echo $popup_value ?></div>
  <?php if ($with_scroll == false) { ?>
    <script>jQuery(document).ready(function(){
      jQuery("#blog-popup").loadLeanModal();
    });</script>
  <?php } else { ?>
    <script>
      var body = document.body,
      html = document.documentElement;
      var height = Math.max( body.scrollHeight, body.offsetHeight, 
                           html.clientHeight, html.scrollHeight, html.offsetHeight );

      var interval = setInterval(function() {
          if (jQuery(window).scrollTop() >= (height * (<?php echo intval($percent)/100; ?>))) {
            jQuery("#blog-popup").loadLeanModal();
            clearInterval(interval);
          }
      }, 250);
    </script>
  <?php }
  }
}

?>