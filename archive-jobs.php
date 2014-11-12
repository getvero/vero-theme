<?php
/*
Template Name: Jobs Archive
*/

//Force full width layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
   $classes[] = 'full-width jobs';
   return $classes;
}

//Remove footer
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

//Custom post format
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action( 'genesis_entry_content', 'custom_excerpt');
function custom_excerpt() {
  $post = get_post();
  ?>
    <a href="<?php echo get_permalink(); ?>" class="well job">
      <h4><?php echo get_the_title(); ?></h4>
      <p><?php echo get_the_excerpt(); ?></p>
      <span class='button'>Read more</span>
    </a>
  <?php
}

//Add featured sections at the top
add_action( 'genesis_before_content', 'add_jobs_featured' );
function add_jobs_featured() {
  ?>
  <section id="top" class="center-text">
    <div class="inner">
      <h1>Helping online businesses everywhere<br>send emails their customers actually <em>want</em>.</h1>
    <div id="values" class="center-text">
      <div class="inner">
        <h2>Our values</h2>
        <ul class="list-unstyled list-inline">
          <li>
            <img src="/wp-content/themes/vero/assets/images/jobs/magnify.png"/>
            <h5>Clarity</h5>
            <p>Less is more.</p>
          </li>
          <li>
            <img src="/wp-content/themes/vero/assets/images/jobs/bulb.png"/>
            <h5>Innovation</h5>
            <p>Technology can make the world a better place.</p>
          </li>
          <li>
            <img src="/wp-content/themes/vero/assets/images/jobs/books.png"/>
            <h5>Education</h5>
            <p>Knowledge is empowering. Never stop learning.</p>
          </li>
          <li>
            <img src="/wp-content/themes/vero/assets/images/jobs/heart.png"/>
            <h5>Fulfilment</h5>
            <p>Don't defer your life plan. Live passionately now.</p>
          </li>
          <li>
            <img src="/wp-content/themes/vero/assets/images/jobs/tick.png"/>
            <h5>Action</h5>
            <p>"Great artists ship". Action over intention.</p>
          </li>
      </div>
    </div>
  </section>


  <section id="love-work" class="center-text">
    <div class="inner">
      <h2>Make work a part of a life you love</h2>
      <div class="video">
        <div id="wistia_t7pcnzijhg" class="wistia_embed" style="width:640px;height:360px;"><div itemprop="video" itemscope itemtype="http://schema.org/VideoObject"><meta itemprop="name" content="Vero Kuala" /><meta itemprop="duration" content="PT1M30S" /><meta itemprop="thumbnailUrl" content="https://embed-ssl.wistia.com/deliveries/1d9486ddcd2fdec83d595bff694d97a0fdc7bcd8.bin" /><meta itemprop="contentURL" content="https://embed-ssl.wistia.com/deliveries/0985588df395c1e3845ede26c1c9d4b0cba49c33.bin" /><meta itemprop="embedURL" content="https://embed-ssl.wistia.com/flash/embed_player_v2.0.swf?2013-10-04&autoPlay=false&banner=false&controlsVisibleOnLoad=true&customColor=00c3e4&endVideoBehavior=default&fullscreenDisabled=true&hdUrl%5B2pass%5D=true&hdUrl%5Bext%5D=flv&hdUrl%5Bheight%5D=720&hdUrl%5Bsize%5D=29950032&hdUrl%5Btype%5D=hdflv&hdUrl%5Burl%5D=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2Ff278e4bacf8cdc99c88e2d2d253cb0ee9a02ab95.bin&hdUrl%5Bwidth%5D=1280&mediaDuration=90.084&playButtonVisible=true&showPlayButton=true&showPlaybar=true&showVolume=true&stillUrl=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F1d9486ddcd2fdec83d595bff694d97a0fdc7bcd8.bin%3Fimage_crop_resized%3D640x360&unbufferedSeek=false&videoUrl=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F0985588df395c1e3845ede26c1c9d4b0cba49c33.bin" /><meta itemprop="uploadDate" content="2014-11-12T22:38:37Z" /><object id="wistia_t7pcnzijhg_seo" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" style="display:block;height:360px;position:relative;width:640px;"><param name="movie" value="https://embed-ssl.wistia.com/flash/embed_player_v2.0.swf?2013-10-04"></param><param name="allowfullscreen" value="true"></param><param name="bgcolor" value="#000000"></param><param name="wmode" value="opaque"></param><param name="flashvars" value="autoPlay=false&banner=false&controlsVisibleOnLoad=true&customColor=00c3e4&endVideoBehavior=default&fullscreenDisabled=true&hdUrl%5B2pass%5D=true&hdUrl%5Bext%5D=flv&hdUrl%5Bheight%5D=720&hdUrl%5Bsize%5D=29950032&hdUrl%5Btype%5D=hdflv&hdUrl%5Burl%5D=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2Ff278e4bacf8cdc99c88e2d2d253cb0ee9a02ab95.bin&hdUrl%5Bwidth%5D=1280&mediaDuration=90.084&playButtonVisible=true&showPlayButton=true&showPlaybar=true&showVolume=true&stillUrl=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F1d9486ddcd2fdec83d595bff694d97a0fdc7bcd8.bin%3Fimage_crop_resized%3D640x360&unbufferedSeek=false&videoUrl=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F0985588df395c1e3845ede26c1c9d4b0cba49c33.bin"></param><embed src="https://embed-ssl.wistia.com/flash/embed_player_v2.0.swf?2013-10-04" allowfullscreen="true" bgcolor=#000000 flashvars="autoPlay=false&banner=false&controlsVisibleOnLoad=true&customColor=00c3e4&endVideoBehavior=default&fullscreenDisabled=true&hdUrl%5B2pass%5D=true&hdUrl%5Bext%5D=flv&hdUrl%5Bheight%5D=720&hdUrl%5Bsize%5D=29950032&hdUrl%5Btype%5D=hdflv&hdUrl%5Burl%5D=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2Ff278e4bacf8cdc99c88e2d2d253cb0ee9a02ab95.bin&hdUrl%5Bwidth%5D=1280&mediaDuration=90.084&playButtonVisible=true&showPlayButton=true&showPlaybar=true&showVolume=true&stillUrl=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F1d9486ddcd2fdec83d595bff694d97a0fdc7bcd8.bin%3Fimage_crop_resized%3D640x360&unbufferedSeek=false&videoUrl=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F0985588df395c1e3845ede26c1c9d4b0cba49c33.bin" name="wistia_t7pcnzijhg_html" style="display:block;height:100%;position:relative;width:100%;" type="application/x-shockwave-flash" wmode="opaque"></embed></object><noscript itemprop="description">Vero Kuala</noscript></div></div>
        <div class="below-video"><p><strong>Vero Team Expedition 2014</strong> in Kuala Lumpur, Malaysia<p></div>
      </div>
      <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js"></script>
      <script>
      wistiaEmbed = Wistia.embed("t7pcnzijhg");
      </script>
      <script charset="ISO-8859-1" src="//fast.wistia.com/embed/medias/t7pcnzijhg/metadata.js"></script>
    </div>
  </section>

  <section id="jobs" class="center-text">
    <div class="inner">
      <h2>Open positions</h2>
  <?php 
}

//Close jobs at bottom
add_action( 'genesis_after_content', 'jobs_do_close' );
function jobs_do_close() {
  echo "</div></section>";
}

genesis(); ?>