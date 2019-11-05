<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'getting-started';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="push-notifications-hero">
  <div class="inner tiny-inner flush-bottom center-text">
    <span class="flex items-center justify-center feature-label bottom-margin-small xs-bottom-margin-medium"><a class="unstyled" href="/features">Features</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg> Push Notifications</span>
    <h1 class="hulk bottom-margin-tiny">Getting Started</h1>
    <p class="large">Keep customers coming back with timely, personalized, and actionable push notifications.</p>
    <a class="btn btn-success btn-large bottom-margin-smedium" href="https://app.getvero.com/signup">Get started</a>
  </div>
</section>
<section class="no-padding">
  <div class="inner xlarge-inner">
    <ul class="unstyled-list flex items-center justify-center">
      <li>
        <a href="#vero-basics">Vero Basics</a>
      </li>
      <li>
        <a href="#tutorials">Tutorials</a>
      </li>
    </ul>
  </div>
</section>
<section class="jump-link" id="vero-basics">
  <div class="bg-offwhite">
    <div class="inner xlarge-inner center-text">
      <h2 class="chunk semi-bold">Vero Basics</h2>

      <ul class="unstyled-list grid grid-halfs">
        <li>
          <script src="//fast.wistia.com/embed/medias/47fshhahqk.jsonp" async></script>
          <script src="//fast.wistia.com/assets/external/E-v1.js" async></script>
          <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
              <div class="wistia_embed wistia_async_47fshhahqk seo=false videoFoam=true popover=true popoverAnimateThumbnail=true" style="height:100%;width:100%">&nbsp;</div>
            </div>
          </div>

          <!-- <div class="wistia_embed wistia_async_47fshhahqk popover=true popoverAnimateThumbnail=true">&nbsp;</div> -->

          <h3 class="atomic">Creating a workflow</h3>
          https://getvero.wistia.com/medias/47fshhahqk
        </li>
        <li>
        <script src="//fast.wistia.com/embed/medias/wmvd7zhzp1.jsonp" async></script>
          <script src="//fast.wistia.com/assets/external/E-v1.js" async></script>
          <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
              <div class="wistia_embed wistia_async_wmvd7zhzp1 seo=false videoFoam=true popover=true popoverAnimateThumbnail=true" style="height:100%;width:100%">&nbsp;</div>
            </div>
          </div>

          <h3 class="atomic">Creating a newsletter</h3>
          https://getvero.wistia.com/medias/wmvd7zhzp1
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="jump-link" id="tutorials">
  <div class="inner xlarge-inner">
    <div class="">
      <h2 class="chunk semi-bold bottom-margin-small center-text">Tutorials</h2>

      <div class="grid grid-thirds">
        <?php
          $custom_query = new WP_Query(array(
            'posts_per_page' => 3,
            'category_name'  => 'tutorials',
            'post_type'      => array('post', 'tutorials')
          ));

          while( $custom_query->have_posts() ) : $custom_query->the_post();
            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $image_id       = get_post_thumbnail_id();
            $image_alt      = get_post_meta($image_id, '_wp_attachment_image_alt', true);
          ?>

        <article class="entry" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
          <a class="show entry-aside" href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ): ?>
              <?php
                if( !empty($image_alt) ) {
                  $alt_text = $image_alt;
                } else {
                  $alt_text = get_the_title();
                }

                the_post_thumbnail('', array(
                  'class' => 'entry-image',
                  'alt'   => $alt_text
                ));
              ?>
            <?php endif; ?>
          </a>

          <div class="entry-body">
            <div class="entry-header">
              <h2 class="entry-title regular no-margin"><a href="<?php the_permalink(); ?>"><span class="entry-underline"><?php the_title(); ?></span></a></h2>
            </div>

            <div class="entry-content bottom-margin-smedium">
              <?php if ( get_field('custom_excerpt') ): ?>
                <p><?php the_field('custom_excerpt') ?></p>
              <?php else: ?>
                <?php the_excerpt(); ?>
              <?php endif ?>
            </div>

            <div class="entry-footer">
              <?php if ( get_field('custom_read_more') ): ?>
                <a class="regular underline-link" href="<?php the_permalink(); ?>"><?php the_field('custom_read_more') ?></a>
              <?php else: ?>
                <a class="regular underline-link" href="<?php the_permalink(); ?>">Read&nbsp;more</a>
              <?php endif ?>
            </div>
          </div>
        </article>

        <?php endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk bottom-margin-small">Design, manage and optimize your mobile push messages</h4>

    <a class="btn btn-success btn-large bottom-margin-small" href="https://app.getvero.com/signup">Get started</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>