<?php
/*
Template Name: Jobs Archive
*/

//Force full width layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
  $classes[] = 'product-updates';
  foreach($classes as &$str){
    if(strpos($str, "blog") > -1){
      $str = "";
    }
  }
  return $classes;
}

//Remove header
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

//Remove footer
//remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
//remove_action( 'genesis_footer', 'genesis_do_footer' );
//remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

//Custom post format
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action( 'genesis_entry_content', 'custom_excerpt');
function custom_excerpt() {
  $post = get_post();
  ?>
    <tr>
      <td class="date">
        <?php echo get_the_date(); ?>
      </td>
      <td class="who">
        <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
        <?php echo get_the_author_meta( 'display_name'); ?>
      </td>
      <td class="desc">
        <h3 class="title">
          <span class="<?php echo 'info'?> badge">
            <?php echo 'info'?>
          </span>
          <?php echo get_the_title(); ?>
        </h3>
        <div class="clearfix"></div>
        <div class="details">
          <?php echo get_the_content(); ?>
          <p class="share"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_the_permalink(); ?>" data-via="getvero">Tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p> 
        </div>
      </td>
    </tr>
  <?php
}

add_action( 'genesis_before_loop', 'add_table_open');
function add_table_open() {
  ?>
  <h1>Here's what we've been working on at Vero</h1>
  <table class="no-highlight">
    <tr>
      <th>Date</th>
      <th>Who</th>
      <th>Message</th>
    </tr>
  <?php
}

add_action( 'genesis_after_loop', 'add_table_close');
function add_table_close() {
  ?>
  </table>
  <?php
}

genesis(); ?>