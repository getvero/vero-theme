<?php

function custom_footer() {
  if( is_blog() ){
    blog_cta();
    custom_footer_html_with_wrap();
  } else {
    custom_footer_html_with_wrap();
  }
}

function custom_footer_html_with_wrap() {
  ?>
    <?php echo custom_footer_html(); ?>
<?php
}

function custom_footer_html() {
  ?>
  <div class="footer-aside">
    <a href="https://www.getvero.com">
      <img src="/wp-content/themes/vero/assets/images/home/logo/logo-white.svg" width="104">
    </a>
  </div>
  <div class="footer-main">
  	<ul class="unstyled-list footer-list">
  	  <li class="header annotation uppercase faded">Product</li>
  	  <li><a href="/features/email">Features</a></li>
  	  <li><a href="/workflows">Workflows</a></li>
  	  <li><a href="/event-manager">Event Management</a></li>
  	  <li><a href="/fusion">Fusion</a></li>
  	  <li><a href="/multi-language-campaigns">Multi-language</a></li>
  	  <li><a href="/reporting">Reporting</a></li>
  	  <li><a href="/integrations/vero-segment">Vero &plus; Segment</a></li>
  	  <li><a href="/integrations/vero-stitch">Vero &plus; Stitch</a></li>
  	  <li><a href="/integrations/vero-snowplow">Vero &plus; Snowplow</a></li>
  	  <li><a href="/pricing">Pricing</a></li>
  	</ul>
  	<ul class="unstyled-list footer-list">
  	  <li class="header annotation uppercase faded">Resources</li>
  	  <!--<li>About</li>-->
  	  <li><a href="https://www.getvero.com/resources" target="_blank">Blog</a></li>
  	  <li ><a href="https://www.getvero.com/email-personalization-liquid-guide" target="_blank">Liquid Guide</a></li>
  	  <li><a href="https://help.getvero.com" target="_blank">Help Center</a></li>
  	  <li><a href="https://developers.getvero.com" target="_blank">API Reference</a></li>
  	  <li><a href="https://releasenotes.getvero.com" target="_blank">Release Notes</a></li>
  	  <li><a href="https://status.getvero.com/" target="_blank">Status</a></li>
  	</ul>
  	<ul class="unstyled-list footer-list">
  	  <li class="header annotation uppercase faded">Company</li>
  	  <li><a href="https://www.getvero.com/careers">Careers</a><a href="https://www.getvero.com/careers" class="hiring-pill left-margin-tiny">We're Hiring!</a></li>
  	  <li><a href="https://www.getvero.com/gdpr">GDPR</a></li>
  	  <li><a href="https://twitter.com/getvero" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @getvero</a>
  	  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
  	</ul>
    <ul class="unstyled-list footer-legal annotation">
      <li class="inline-block"><a href="https://www.getvero.com/terms-of-service">Terms of Service</a></li>
  	  <li class="inline-block"><a href="https://www.getvero.com/privacy">Privacy Policy</a></li>
    </ul>
  </div>
  <?php
}

function blog_cta() {
  ?>
  <section id="call-to-action" class="center-text dark-box">
    <div class="inner">
      <h1 class="cta-title semi-bold bottom-margin-small">Put your data first and craft better product experiences</h1>
      <p class="sub-heading">Create a free account, import your data and see how Vero can help your team.</p>
      <a class="btn btn-success btn-large btn-wide" href="http://app.getvero.com/signup">Get started</a>
    </div>
  </section>
  <?php
}

function blog_related_posts() {
  if( is_singular('post')){
    global $post;
    $categories = get_the_category();
    $category = $categories[0]->cat_name;?>
    <div class='related-posts'>
      <h3 class="section-title">Related posts</h3>
      <?php
      $custom_query = new WP_Query('cat='.$categories[0]->cat_id.'&showposts=3');
      while( $custom_query->have_posts() ){
        $custom_query->the_post();
        $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $category = get_the_category(); ?>
        <div class='related-post <?php if($featured_image){ ?>has-image<?php } ?>'>
          <?php if($featured_image){ ?>
            <div class='related-image'><a class='related-image-link-overlay' href="<?php the_permalink(); ?>"><img src="<?php echo $featured_image; ?>"</a></div>
          <?php
          }
          ?>
          <div class="related-titles">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <p><a href="<?php the_permalink(); ?>" class="underline-link">Read more</a></p>
          </div>
        </div>
      <?php
      }
      wp_reset_postdata(); ?>
    </div>
    <?php
  }

}
?>
