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
  <footer class="footer">
    <div class="inner xlarge-inner">
      <div class="flex flex-wrap">
        <div class="footer-aside">
          <a href="https://www.getvero.com">
            <img src="/wp-content/themes/vero/assets/dist/images/logo/vero-logo-white.svg" alt="Vero logo white footnote">
          </a>
        </div>
        <div class="footer-main">
          <ul class="unstyled-list footer-list semi-bold">
            <li>
              <h4 class="semi-bold annotation uppercase faded">Product</h4>
            </li>
            <li><a href="/features">Features</a></li>
            <li><a href="/workflows">Workflows</a></li>
            <li><a href="/event-manager">Event Management</a></li>
            <li><a href="/fusion">Fusion</a></li>
            <li><a href="/multi-language-campaigns">Multi-language</a></li>
            <li><a href="/reporting">Reporting</a></li>
            <li><a href="/pricing">Pricing</a></li>
          </ul>
          <ul class="unstyled-list footer-list semi-bold">
            <li>
              <h4 class="semi-bold annotation uppercase faded">Integrations</h4>
            </li>
            <li><a href="/integrations/vero-segment">Segment</a></li>
            <li><a href="/integrations/vero-stitch">Stitch</a></li>
            <li><a href="/integrations/vero-snowplow">Snowplow</a></li>
            <li><a href="https://help.getvero.com/articles/using-zapier-and-vero.html">Zapier</a></li>
            <li><a href="https://help.getvero.com/articles/setting-up-veros-webhooks.html">Webhooks</a></li>
          </ul>
          <ul class="unstyled-list footer-list semi-bold">
            <li>
              <h4 class="semi-bold annotation uppercase faded">Resources</h4>
            </li>
            <li><a href="https://www.getvero.com/resources" target="_blank">Blog</a></li>
            <li ><a href="https://www.getvero.com/email-personalization-liquid-guide" target="_blank">Liquid Guide</a></li>
            <li><a href="https://help.getvero.com" target="_blank" rel="noopener">Help Center</a></li>
            <li><a href="https://developers.getvero.com" target="_blank" rel="noopener">API Reference</a></li>
            <li><a href="https://releasenotes.getvero.com" target="_blank" rel="noopener">Release Notes</a></li>
            <li><a href="https://feedback.getvero.com/" target="_blank" rel="noopener">Product Roadmap</a></li>
            <li><a href="https://feedback.getvero.com/feature-requests" target="_blank" rel="noopener">Feature Requests</a></li>
            <li><a href="https://status.getvero.com/" target="_blank" rel="noopener">Status</a></li>
          </ul>
          <ul class="unstyled-list footer-list semi-bold">
            <li>
              <h4 class="semi-bold annotation uppercase faded">Company</h4>
            </li>
            <li><a href="https://www.getvero.com/careers">Careers</a></li>
            <li><a href="https://www.getvero.com/gdpr">GDPR</a></li>
            <li><a href="https://www.getvero.com/terms-of-service">Terms of Service</a></li>
            <li><a href="https://www.getvero.com/privacy">Privacy Policy</a></li>
          </ul>
          <ul class="unstyled-list" style="flex: 1 1 100%;">
            <li class="d-inline-block right-margin-tiny">
              <a href="https://twitter.com/getvero">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                  <title>Twitter icon footnote</title>
                  <path fill="#FFF" d="M27.954 8.569a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 0 0-8.384 4.482c-4.09-.193-7.715-2.157-10.141-5.126a4.822 4.822 0 0 0-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 0 1-2.228-.616v.061a4.923 4.923 0 0 0 3.946 4.827 4.996 4.996 0 0 1-2.212.085 4.937 4.937 0 0 0 4.604 3.417 9.868 9.868 0 0 1-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0 0 7.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 0 0 2.46-2.548l-.047-.02z" fill-rule="evenodd"/>
                </svg>
              </a>
            </li>
            <li class="d-inline-block">
              <a href="https://www.linkedin.com/company/vero-inc-/">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                  <title>LinkedIn icon footnote</title>
                  <path fill="#FFF" fill-rule="nonzero" d="M24.447 24.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554V13h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286h-.001zM9.337 11.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H7.555V13h3.564v11.452zM26.225 4H5.771C4.792 4 4 4.774 4 5.729v20.542C4 27.227 4.792 28 5.771 28h20.451C27.2 28 28 27.227 28 26.271V5.729C28 4.774 27.2 4 26.222 4h.003z"/>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <?php
}

function blog_cta() {
  ?>
  <section class="center-text bg-dark-blue-gradient">
    <div class="inner font-white">
      <div class="border-radius-2 bg-primary padding-medium">
        <h4 class="chunk regular bottom-margin-small">Vero helps marketing and engineering teams use their data to create a better customer messaging experience</h4>

        <a class="btn btn-success btn-large bottom-margin-small" href="http://app.getvero.com/signup">Start a free tial</a>

        <p>No credit card details required</p>
      </div>
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
