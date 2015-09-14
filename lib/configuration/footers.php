<?php 

function custom_footer() {
  if( is_singular('api_docs') ){
    // Do nothing
  } else if( is_blog() ){
    blog_cta();
    custom_footer_html_with_wrap();
  } else {
    custom_footer_html_with_wrap();
  }
}

function custom_footer_html_with_wrap() {
  ?>
  <div class="main-footer">
    <?php echo custom_footer_html(); ?>
  </div>
<?php
}

function custom_footer_html() {
  ?>
  <ul class="col">
    <li class="header">Features</li>
    <li><a href="http://www.getvero.com/features">Start the tour &rarr;</a></li>
    <li><a href="http://www.getvero.com/triggered-emails">Triggered emails</a></li>
    <li><a href="http://www.getvero.com/smart-newsletters">Smart newsletters</a></li>
    <li><a href="http://www.getvero.com/individual-contact-profiles">Individual contact profiles (CRM)</a></li>
    <li><a href="http://www.getvero.com/external-attributes">External Attributes</a></li>
  </ul>
  <ul class="col">
    <li class="header">Resources</li>
    <li><a href="http://www.getvero.com/pricing">Pricing</a></li>
    <li><a href="http://www.getvero.com/faq">Help Documentation</a></li>
    <li><a href="http://www.getvero.com/api">API Reference</a></li>
    <li><a href="http://www.getvero.com/resources
" target="_blank">Blog</a></li>
  </ul>
  <ul class="col">
    <li class="header">Company</li>
    <!--<li>About</li>-->
    <li><a href="http://www.getvero.com/jobs">Jobs</a></li>
    <li><a href="http://status.getvero.com">Status</a></li>
    <li><a href="http://www.getvero.com/terms-of-service">Terms of Service</a></li>
    <li><a href="http://www.getvero.com/privacy">Privacy Policy</a></li>
  </ul>
  <ul class="col">
    <li class="header">Say Hello</li>
    <li><a href="mailto:support@getvero.com">Email Support</a></li>
    <li><a href="http://www.getvero.com/email-marketing-demo">High volume sender?</a></li>
    <li><a href="https://twitter.com/getvero" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @getvero</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
  </ul>
  <?php
}

function blog_cta() {
  ?>
  <div id="blog-cta">
    <div class="blog-cta-content">
      <h2>Vero is email software for product companies</h2>
      <p>Personalize. Segment. Automate.</p>
      <p>Extend your product into the inbox. Try it free for 14 days.</p>
      <a class="btn btn-success" href="https://app.getvero.com/signup" target="_blank">Start a free trial</a>
    </div>
    <div class="blog-cta-image"><img src="/wp-content/themes/vero/assets/images/blog-cta@2x.png"></div>
  </div>

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
        <div class='related-post' style='background:url("<?php echo $featured_image; ?>"); background-size: cover'> 
          <div class='related-image-overlay'></div>
          <div class="related-titles">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </div>
          <a class='related-link-overlay' href="<?php the_permalink(); ?>"></a>
        </div>
      <?php 
      }
      wp_reset_postdata(); ?>
    </div> <?php
  }
  
}
?>