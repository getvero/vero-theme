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
  <div class="inner tiny-inner  center-text">
    <!-- <span class="flex items-center justify-center feature-label bottom-margin-small xs-bottom-margin-medium"><a class="unstyled" href="/features">Resources</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg> Push Notifications</span> -->
    <h1 class="hulk bottom-margin-small">Getting Started</h1>
    <p class="large bottom-margin-medium">Learn how to send amazing marketing campaigns from the Vero team and get up to speed.</p>

    <ul class="unstyled-list flex items-center justify-center subnav">
      <li class="subnav-item right-margin-smedium">
        <a class="flex flex-column justify-center border-radius-2 border padding-small unstyled" href="#vero-basics">
          <img class="bottom-margin-micro" src="https://s3.amazonaws.com/assets.getvero.com/marketing-redesign/icon/getting-started/vero-basics.svg" alt="Centralize your data">

          <span class="atomic">Vero Basics</span>
        </a>
      </li>
      <li class="subnav-item">
        <a class="flex flex-column justify-center border-radius-2 border padding-small unstyled" href="#tutorials">
          <img class="bottom-margin-micro" src="https://s3.amazonaws.com/assets.getvero.com/marketing-redesign/icon/getting-started/tutorials.svg" alt="Centralize your data">

          <span class="atomic">Tutorials</span>
        </a>
      </li>
    </ul>
  </div>
</section>
<!-- <section class="no-padding">
  <div class="inner xlarge-inner">
    <ul class="unstyled-list flex items-center justify-center">
      <li>
        <a class="border-radius-2 border-light padding-small" href="#vero-basics">Vero Basics</a>
      </li>
      <li>
        <a class="border-radius-2 border-light padding-small" href="#tutorials">Tutorials</a>
      </li>
    </ul>
  </div>
</section> -->
<section class="jump-link" id="vero-basics">
  <div class="bg-offwhite">
    <div class="inner xlarge-inner center-text">
      <h2 class="chunk semi-bold">Vero Basics</h2>

      <script src="//fast.wistia.com/assets/external/E-v1.js" async></script>


      <ul class="unstyled-list grid grid-halfs">
        <li>
          <script src="//fast.wistia.com/embed/medias/47fshhahqk.jsonp" async></script>
          <div class="wistia_responsive_padding border border-radius-2 shadow-2 bottom-margin-small" style="padding:56.25% 0 0 0;position:relative;">
            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
              <div class="wistia_embed wistia_async_47fshhahqk seo=false videoFoam=true popover=true popoverAnimateThumbnail=true border-radius-2" style="height:100%;width:100%">&nbsp;</div>
            </div>
          </div>

          <div class="wistia_embed wistia_async_47fshhahqk popover=true popoverBorderWidth=2 popoverContent=link bottom-margin-micro">
            <h3 class="atomic pointer no-margin">Creating a workflow</h3>
          </div>

          <a class="pill pill--primary-light" href="https://help.getvero.com/articles/creating-a-new-workflow.html">View help article</a>

          <!-- https://getvero.wistia.com/medias/47fshhahqk -->
        </li>
        <li>
          <script src="//fast.wistia.com/embed/medias/wmvd7zhzp1.jsonp" async></script>
          <div class="wistia_responsive_padding border border-radius-2 shadow-2 bottom-margin-small" style="padding:56.25% 0 0 0;position:relative;">
            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
              <div class="wistia_embed wistia_async_wmvd7zhzp1 seo=false videoFoam=true popover=true popoverAnimateThumbnail=true border-radius-2" style="height:100%;width:100%">&nbsp;</div>
            </div>
          </div>

          <h3 class="atomic">Creating a newsletter</h3>
          <!-- https://getvero.wistia.com/medias/wmvd7zhzp1 -->

          <a class="pill pill--primary" href="https://help.getvero.com/articles/create-a-segment.html">View help article</a>
        </li>
        <li>
          <script src="//fast.wistia.com/embed/medias/dndpvc0epi.jsonp" async></script>
          <div class="wistia_responsive_padding border border-radius-2 shadow-2 bottom-margin-small" style="padding:56.25% 0 0 0;position:relative;">
            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
              <div class="wistia_embed wistia_async_dndpvc0epi seo=false videoFoam=true popover=true popoverAnimateThumbnail=true border-radius-2" style="height:100%;width:100%">&nbsp;</div>
            </div>
          </div>

          <h3 class="atomic">Creating a segment</h3>
          <!-- https://getvero.wistia.com/medias/dndpvc0epi -->

          <a class="pill pill--primary" href="https://help.getvero.com/articles/create-a-segment.html">View help article</a>
        </li>
        <li>
          <script src="//fast.wistia.com/embed/medias/rvd9pidq6p.jsonp" async></script>
          <div class="wistia_responsive_padding border border-radius-2 shadow-2 bottom-margin-small" style="padding:56.25% 0 0 0;position:relative;">
            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
              <div class="wistia_embed wistia_async_rvd9pidq6p seo=false videoFoam=true popover=true popoverAnimateThumbnail=true border-radius-2" style="height:100%;width:100%">&nbsp;</div>
            </div>
          </div>

          <h3 class="atomic">Creating an event</h3>
          <!-- https://getvero.wistia.com/medias/rvd9pidq6p -->
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="jump-link" id="tutorials">
  <div class="inner xlarge-inner center-text">
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