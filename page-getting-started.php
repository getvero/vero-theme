<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'getting-started';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="double-padding getting-started-hero">
  <div class="inner tiny-inner  center-text">
    <!-- <span class="flex items-center justify-center feature-label bottom-margin-small xs-bottom-margin-medium"><a class="unstyled" href="/features">Resources</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg> Push Notifications</span> -->
    <h1 class="hulk bottom-margin-small">Getting Started</h1>
    <p class="large bottom-margin-medium">Learn how to send amazing marketing campaigns from the Vero team and get up to speed.</p>

    <ul class="unstyled-list flex items-center justify-center subnav">
      <li class="subnav-item right-margin-small">
        <a class="flex flex-column justify-center border-radius-2 border-light padding-small unstyled" href="#vero-basics">
          <img class="bottom-margin-micro" src="https://s3.amazonaws.com/assets.getvero.com/marketing-redesign/icon/getting-started/vero-basics.svg" alt="Centralize your data">

          <span class="atomic">Vero Basics</span>
        </a>
      </li>
      <li class="subnav-item">
        <a class="flex flex-column justify-center border-radius-2 border-light padding-small unstyled" href="#tutorials">
          <img class="bottom-margin-micro" src="https://s3.amazonaws.com/assets.getvero.com/marketing-redesign/icon/getting-started/tutorials.svg" alt="Centralize your data">

          <span class="atomic">Tutorials</span>
        </a>
      </li>
    </ul>
  </div>
</section>
<section class="jump-link getting-started-videos" id="vero-basics">
  <div class="bg-offwhite">
    <div class="inner xlarge-inner center-text">
      <h2 class="chunk semi-bold bottom-margin-smedium">Vero Basics</h2>

      <script src="//fast.wistia.com/assets/external/E-v1.js" async></script>

      <ul class="unstyled-list grid grid-thirds">
        <li class="video-item">
          <script src="//fast.wistia.com/embed/medias/47fshhahqk.jsonp" async></script>
          <div class="video-ratio border-light bottom-margin-small">
            <div class="video-embed wistia_embed wistia_async_47fshhahqk seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
          </div>

          <div class="wistia_embed wistia_async_47fshhahqk popover=true popoverBorderWidth=2 popoverContent=link bottom-margin-micro">
            <h3 class="micro pointer no-margin">Creating a workflow</h3>
          </div>

          <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/creating-a-new-workflow.html">View help article</a>

          <!-- https://getvero.wistia.com/medias/47fshhahqk -->
        </li>
        <li class="video-item">
          <script src="//fast.wistia.com/embed/medias/wmvd7zhzp1.jsonp" async></script>
          <div class="video-ratio border-light bottom-margin-small">
            <div class="video-embed wistia_embed wistia_async_wmvd7zhzp1 seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
          </div>

          <h3 class="micro bottom-margin-micro">Creating a newsletter</h3>
          <!-- https://getvero.wistia.com/medias/wmvd7zhzp1 -->

          <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/create-a-segment.html">View help article</a>
        </li>
        <li class="video-item">
          <script src="//fast.wistia.com/embed/medias/dndpvc0epi.jsonp" async></script>
          <div class="video-ratio border-light bottom-margin-small">
            <div class="video-embed wistia_embed wistia_async_dndpvc0epi seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
          </div>

          <h3 class="micro bottom-margin-micro">Creating a segment</h3>
          <!-- https://getvero.wistia.com/medias/dndpvc0epi -->

          <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/create-a-segment.html">View help article</a>
        </li>
        <li class="video-item">
          <script src="//fast.wistia.com/embed/medias/rvd9pidq6p.jsonp" async></script>
          <div class="video-ratio border-light bottom-margin-small">
            <div class="video-embed wistia_embed wistia_async_rvd9pidq6p seo=false videoFoam=true popover=true popoverAnimateThumbnail=true"></div>
          </div>

          <h3 class="micro bottom-margin-micro">Creating an event</h3>
          <!-- https://getvero.wistia.com/medias/rvd9pidq6p -->

          <a class="annotation pill pill--primary" href="https://help.getvero.com/articles/create-a-segment.html">View help article</a>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="jump-link border-bottom-light" id="tutorials">
  <div class="inner xlarge-inner center-text">
    <h2 class="chunk semi-bold bottom-margin-smedium center-text">Tutorials</h2>

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
            <h3 class="micro semi-bold no-margin"><a class="unstyled" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </div>
        </div>
      </article>

      <?php endwhile;
        wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk bottom-margin-smedium">Design, manage and optimize your mobile push messages</h4>

    <a class="btn btn-success btn-large bottom-margin-smedium" href="https://app.getvero.com/signup">Get started</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>