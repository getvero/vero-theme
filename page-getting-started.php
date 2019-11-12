<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'getting-started';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="getting-started-hero border-bottom-light">
  <div class="inner xlarge-inner">
    <span class="flex items-center feature-label bottom-margin-small xs-bottom-margin-medium"><a class="unstyled" href="/features">Resources</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg> Getting Started</span>
    <h1 class="hulk bottom-margin-small">Getting Started</h1>
    <p class="large bottom-margin-medium">Learn how to master personalized messaging from the Vero Team..</p>

    <!-- <ul class="unstyled-list flex items-center justify-center subnav">
      <li class="subnav-item right-margin-small">
        <a class="flex flex-column justify-center border-radius-2 border-light unstyled" href="#vero-basics">
          <img src="https://s3.amazonaws.com/assets.getvero.com/marketing-redesign/icon/getting-started/vero-basics.svg" alt="Centralize your data">

          <span class="semi-bold">Vero Basics</span>
        </a>
      </li>
      <li class="subnav-item">
        <a class="flex flex-column justify-center border-radius-2 border-light unstyled" href="#tutorials">
          <img src="https://s3.amazonaws.com/assets.getvero.com/marketing-redesign/icon/getting-started/tutorials.svg" alt="Centralize your data">

          <span class="semi-bold">Tutorials</span>
        </a>
      </li>
    </ul> -->
  </div>
</section>
<section class="jump-link getting-started-videos border-bottom-light" id="vero-basics">
  <div class="inner xlarge-inner w-sidebar w-sidebar--getting-started-videos">
    <div class="aside md-right-margin-large">
      <div class="subnav bg-white border-light border-radius-2">
        <ul class="unstyled-list bottom-margin-smedium md-bottom-margin-xlarge">
          <li class="no-top-margin bottom-margin-tiny">
            <a class="flex items-center unstyled" href="#vero-basics">
              <img class="align-middle right-margin-micro" src="/wp-content/themes/vero/assets/dist/images/landing-pages/resources/getting-started/icon/video-basics.svg" alt="Centralize your data">

              <span>Vero Basics</span>
            </a>
          </li>
          <li class="no-margin">
            <a class="flex items-center unstyled" href="#tutorials">
              <img class="align-middle right-margin-micro" src="/wp-content/themes/vero/assets/dist/images/landing-pages/resources/getting-started/icon/tutorials.svg" alt="Centralize your data">

              <span>Tutorials</span>
            </a>
          </li>
        </ul>

        <div class="bg-dark-blue-lighter border-radius-1 padding-smedium">
          <p class="bottom-margin-smedium">Still can’t find what you’re not looking for? Check out our help docs.</p>
          <a class="btn btn-gray-darker btn-outline" href="">Help docs</a>
        </div>
      </div>
    </div>
    <div class="main md-top-margin-small">
      <div class="bottom-margin-medium bottom-padding-medium border-bottom-light" id="vero-basics">
        <h2 class="tubs semi-bold bottom-margin-micro">Vero Basics</h2>
        <p class="medium bottom-margin-medium">Learn the basics of Vero through short videos.</p>

        <script src="//fast.wistia.com/assets/external/E-v1.js" async></script>

        <ul class="unstyled-list grid grid-thirds">
          <li class="video-item">
            <script src="//fast.wistia.com/embed/medias/47fshhahqk.jsonp" async></script>
            <div class="video-ratio bottom-margin-small">
              <div class="video-embed wistia_embed wistia_async_47fshhahqk seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
            </div>

            <div class="wistia_embed wistia_async_47fshhahqk popover=true popoverBorderWidth=2 popoverContent=link bottom-margin-micro">
              <h3 class="atomic pointer no-margin">Creating a workflow</h3>
            </div>

            <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/creating-a-new-workflow.html">View help article</a>

            <!-- https://getvero.wistia.com/medias/47fshhahqk -->
          </li>
          <li class="video-item">
            <script src="//fast.wistia.com/embed/medias/wmvd7zhzp1.jsonp" async></script>
            <div class="video-ratio bottom-margin-small">
              <div class="video-embed wistia_embed wistia_async_wmvd7zhzp1 seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
            </div>

            <h3 class="atomic bottom-margin-micro">Creating a newsletter</h3>
            <!-- https://getvero.wistia.com/medias/wmvd7zhzp1 -->

            <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/create-a-segment.html">View help article</a>
          </li>
          <li class="video-item">
            <script src="//fast.wistia.com/embed/medias/dndpvc0epi.jsonp" async></script>
            <div class="video-ratio bottom-margin-small">
              <div class="video-embed wistia_embed wistia_async_dndpvc0epi seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
            </div>

            <h3 class="atomic bottom-margin-micro">Creating a segment</h3>
            <!-- https://getvero.wistia.com/medias/dndpvc0epi -->

            <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/create-a-segment.html">View help article</a>
          </li>
          <li class="video-item">
            <script src="//fast.wistia.com/embed/medias/rvd9pidq6p.jsonp" async></script>
            <div class="video-ratio bottom-margin-small">
              <div class="video-embed wistia_embed wistia_async_rvd9pidq6p seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
            </div>

            <h3 class="atomic bottom-margin-micro">Creating an event</h3>
            <!-- https://getvero.wistia.com/medias/rvd9pidq6p -->

            <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/create-a-segment.html">View help article</a>
          </li>
        </ul>
      </div>

      <div id="tutorials">
        <h2 class="tubs semi-bold bottom-margin-micro">Tutorials</h2>
        <p class="medium bottom-margin-medium">Learn to master Vero through our tutorials.</p>

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
            <a class="show bottom-margin-small" href="<?php the_permalink(); ?>">
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
    <h4 class="chunk bottom-margin-small">Scale personalized customer messaging</h4>

    <a class="btn btn-success btn-large bottom-margin-small" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>