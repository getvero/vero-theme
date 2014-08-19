<?php
/*
Template Name: Blog Subscriber Thank You
*/

//Force full width layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
   $classes[] = 'full-width full-width-content thank-you';
   return $classes;
}

//Custom top
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title');
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
add_action( 'genesis_before_content', 'generate_resource_header', 5 );
function generate_resource_header() {
  ?>
  <header class="entry-header">
    <h1 class="entry-title" itemprop="headline"><?php echo get_the_title() ?></h1>
    <?php echo genesis_get_image( array( 'format' => 'html', 'size' => genesis_get_option( 'image_size' ) ) ); ?>
  </header>

  <?php
    if ($_GET["where"] != "") { ?>
      <script>
        _gaq.push(['_setCustomVar',1,'blog subscribe source','<?php echo $_GET["where"]; ?>',3]);
      </script>
  <?php }
}

genesis(); ?>