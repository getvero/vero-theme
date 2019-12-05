<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'getting-started';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="getting-started-hero">
  <div class="inner xlarge-inner flush-bottom">
    <h1 class="hulk bottom-margin-sm">Getting Started</h1>
    <p class="large bottom-margin-lg">Learn how to master personalized messaging from the Vero Team.</p>
  </div>
</section>
<section class="getting-started-videos border-bottom-light">
  <div class="inner xlarge-inner w-sidebar w-sidebar--getting-started-videos">
    <div class="aside">
      <div class="subnav bg-white border-light border-radius-2">
        <ul class="unstyled-list bottom-margin-md md-bottom-margin-xxl">
          <li class="no-top-margin bottom-margin-xs">
            <a class="flex items-center unstyled" href="#vero-basics">
              <img class="align-middle right-margin-xxs" src="/wp-content/themes/vero/assets/dist/images/resources/getting-started/icon/vero-basics.svg" alt="Centralize your data">

              <span>Vero Basics</span>
            </a>
          </li>
          <li class="no-margin">
            <a class="flex items-center unstyled" href="#tutorials">
              <img class="align-middle right-margin-xxs" src="/wp-content/themes/vero/assets/dist/images/resources/getting-started/icon/tutorials.svg" alt="Centralize your data">

              <span>Tutorials</span>
            </a>
          </li>
        </ul>

        <div class="subnav-help bg-dark-blue font-white border-radius-1 padding-sm sm-padding-md">
          <p class="bottom-margin-md">Still can’t find what you’re looking for? Check out our help docs.</p>
          <a class="btn btn-white btn-outline" href="https://help.getvero.com">Help docs</a>
        </div>
      </div>
    </div>
    <div class="main md-top-margin-sm">
      <div class="jump-link bottom-margin-lg bottom-padding-lg border-bottom-light" id="vero-basics">
        <h2 class="tubs semi-bold bottom-margin-xxs">Vero Basics</h2>
        <p class="medium bottom-margin-lg">Learn the basics of Vero through short videos.</p>

        <script src="//fast.wistia.com/assets/external/E-v1.js" async></script>

        <ul class="unstyled-list grid grid-thirds">
          <li class="video-item">
            <script src="//fast.wistia.com/embed/medias/47fshhahqk.jsonp" async></script>
            <div class="video-ratio bottom-margin-sm">
              <div class="video-embed wistia_embed wistia_async_47fshhahqk seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
            </div>

            <h3 class="atomic bottom-margin-xxs">Creating a workflow</h3>

            <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/creating-a-new-workflow.html">View help article</a>
          </li>
          <li class="video-item">
            <script src="//fast.wistia.com/embed/medias/wmvd7zhzp1.jsonp" async></script>
            <div class="video-ratio bottom-margin-sm">
              <div class="video-embed wistia_embed wistia_async_wmvd7zhzp1 seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
            </div>

            <h3 class="atomic bottom-margin-xxs">Creating a newsletter</h3>

            <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/newsletter-email-campaigns.html">View help article</a>
          </li>
          <li class="video-item">
            <script src="//fast.wistia.com/embed/medias/dndpvc0epi.jsonp" async></script>
            <div class="video-ratio bottom-margin-sm">
              <div class="video-embed wistia_embed wistia_async_dndpvc0epi seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
            </div>

            <h3 class="atomic bottom-margin-xxs">Creating a segment</h3>

            <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/create-a-segment.html">View help article</a>
          </li>
          <li class="video-item">
            <script src="//fast.wistia.com/embed/medias/rvd9pidq6p.jsonp" async></script>
            <div class="video-ratio bottom-margin-sm">
              <div class="video-embed wistia_embed wistia_async_rvd9pidq6p seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
            </div>

            <h3 class="atomic bottom-margin-xxs">Creating an event</h3>

            <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/adding-a-placeholder-event.html">View help article</a>
          </li>
          <li class="video-item">
            <script src="//fast.wistia.com/embed/medias/dzmad4seex.jsonp" async></script>
            <div class="video-ratio bottom-margin-sm">
              <div class="video-embed wistia_embed wistia_async_/dzmad4seex seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
            </div>

            <h3 class="atomic bottom-margin-xxs">Reporting</h3>

            <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/reports-overview-for-all-campaigns.html">View help article</a>
          </li>
          <li class="video-item">
            <script src="//fast.wistia.com/embed/medias/apkgmrteqs.jsonp" async></script>
            <div class="video-ratio bottom-margin-sm">
              <div class="video-embed wistia_embed wistia_async_/apkgmrteqs seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
            </div>

            <h3 class="atomic bottom-margin-xxs">Importing Data</h3>

            <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/import-a-list-of-customers-via-csv.html">View help article</a>
          </li>
          <li class="video-item">
            <script src="//fast.wistia.com/embed/medias/m1nepxpzwg.jsonp" async></script>
            <div class="video-ratio bottom-margin-sm">
              <div class="video-embed wistia_embed wistia_async_/m1nepxpzwg seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
            </div>

            <h3 class="atomic bottom-margin-xxs">Editing Content</h3>
          </li>
        </ul>
      </div>

      <div class="jump-link" id="tutorials">
        <h2 class="tubs semi-bold bottom-margin-xxs">Tutorials</h2>
        <p class="medium bottom-margin-lg">Learn to master Vero through our written tutorials.</p>

        <div class="grid grid-thirds">
          <?php
            $custom_query = new WP_Query(array(
              'category_name'  => 'tutorials',
              'post_type'      => array('post', 'tutorials')
            ));

            while( $custom_query->have_posts() ) : $custom_query->the_post();
              $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
              $image_id       = get_post_thumbnail_id();
              $image_alt      = get_post_meta($image_id, '_wp_attachment_image_alt', true);
            ?>

          <article class="entry" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
            <a class="show bottom-margin-sm" href="<?php the_permalink(); ?>">
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
                <h3 class="atomic semi-bold no-margin"><a class="unstyled" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              </div>
            </div>
          </article>

          <?php endwhile;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>

</section>
<section class="bg-gray-lighter">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk bottom-margin-md">Scale personalized customer messaging</h4>

    <a class="btn btn-success btn-large bottom-margin-sm" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>