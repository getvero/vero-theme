<?php
/*
Template Name: Resource
*/

remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title');
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

//Force full width layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
   $classes[] = 'full-width full-width-content resource';
   return $classes;
}

add_action( 'genesis_before_content', 'generate_resource_header', 5 );
function generate_resource_header() {
  global $post;
  ?>
  <header class="entry-header">
    <?php echo genesis_get_image( array( 'format' => 'html', 'size' => genesis_get_option( 'image_size' ) ) ); ?>
    <h1 class="entry-title" itemprop="headline"><?php echo get_the_title() ?></h1>
    <?php if($_GET['dl'] != "") { ?>
      <a href="<?php echo the_field('downloadable_file') ?>" class="btn btn-large btn-warning">Download your resource</a>
      <script>
      jQuery(document).ready(function(){
        _gaq.push('_trackPageview', "/resources/download/<?php echo $post->post_name; ?>");
        woopra.track('pv', {
            url: "/resources/download/<?php echo $post->post_name; ?>"
        });
      }
      </script>
      <?php optimized_counters_html5() ?>
    <?php } else { ?>
      <form action="https://app.getvero.com/forms/da1218dec1e57d5a9f9364a3ae8c0061" method="post" class="download-subscribe-form form-inline">
        <div class="form-group">
          <input name="email" type="email" placeholder="Enter your email" class="form-control"></div>
        <input name="event[resource_name]" type="hidden" value="<?php echo get_the_title() ?>">
        <input name="redirect_on_success" type="hidden" value="<?php echo get_permalink() ?>?dl=b89c6053bcad49123b808ffb6faf5e61">
        <div class="form-group"><input type="submit" value="Download the resource" class="btn btn-warning"></div>
      </form>
    <?php } ?>
    <div class="clearfix"></div>
  </header>
  <?php
}

genesis(); ?>