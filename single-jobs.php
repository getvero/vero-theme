<?php
/*
Template Name: Jobs Single
*/

//Remove header
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

//Custom sidebar
remove_action( 'genesis_after_content', 'genesis_get_sidebar' );
add_action( 'genesis_after_content', 'get_job_sidebar' );
 
//Add title, no date
add_action( 'genesis_before_entry_content', 'genesis_do_post_title', 9 );

function get_job_sidebar() {
  ?>
  <aside class="sidebar sidebar-primary widget-area" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
    <section id="text-10" class="widget-1 widget-first widget-last widget-odd widget widget_text">
    <div class="widget-1 widget-first widget-last widget-odd widget-wrap">
      <h4 class="widget-title widgettitle">Apply for this job</h4>
      <div class="textwidget">
        <p>Send us an email with a little about ou and what attracts you to this job.</p>
        <p>We're looking forward to hearing from you.</p>
        <p><a href="mailto:jobs@getvero.com?subject=Apply for <?php echo get_the_title(); ?>" class="btn btn-primary"><strong>Apply Now</strong></a></p>
      </div>
    </section>
  </aside>

  <?php
}


genesis(); ?>