<?php
/*
Template Name: Jobs Archive
*/

//Force full width layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
  $blacklist = array( 'blog' );
  $classes[] = 'full-width jobs';
  $classes = array_diff( $classes, $blacklist );
  return $classes;
}

add_filter('wp_title', 'my_custom_title');
function my_custom_title($title) {
    return 'Start your next job at Vero';
}

//Remove header
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

//Remove footer
//remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
//remove_action( 'genesis_footer', 'genesis_do_footer' );
//remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

//Custom post format
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action( 'genesis_entry_content', 'custom_excerpt');
function custom_excerpt() {
  $post = get_post();
  ?>
    <a href="<?php echo get_permalink(); ?>" class="well job">
      <h4><?php echo get_the_title(); ?></h4>
      <p><?php echo string_limit_words(get_the_excerpt(),10); ?></p>
      <span class='button'>Read more</span>
    </a>
  <?php
}

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit) {
  array_pop($words);
  //add a ... at last article when more than limit word count
  echo implode(' ', $words)."..."; } else {
  //otherwise
  echo implode(' ', $words); }
}

//Add featured sections at the top
add_action( 'genesis_before_content', 'add_jobs_featured' );
function add_jobs_featured() {
  ?>
  <section id="top" class="center-text">
    <div class="inner">
      <h1>Helping online businesses everywhere<br>create experiences their customers <em>love</em>.</h1>
    <div id="values" class="center-text">
      <div class="inner">
        <h2>Our values</h2>
        <ul class="list-unstyled list-inline">
          <li>
            <img src="/wp-content/themes/vero/assets/images/jobs/magnify-color.png"/>
            <p>Less is more.</p>
          </li>
          <li>
            <img src="/wp-content/themes/vero/assets/images/jobs/bulb-color.png"/>
            <p>Technology can make the world a better place.</p>
          </li>
          <li>
            <img src="/wp-content/themes/vero/assets/images/jobs/books-color.png"/>
            <p>Knowledge is empowering. Never stop learning.</p>
          </li>
          <li>
            <img src="/wp-content/themes/vero/assets/images/jobs/heart-color.png"/>
            <p>Don't defer your life plan. Live passionately now.</p>
          </li>
          <li>
            <img src="/wp-content/themes/vero/assets/images/jobs/tick-color.png"/>
            <p>"Great artists ship". Action over intention.</p>
          </li>
      </div>
    </div>
  </section>

  <section id="vero-growth" class="center-text">
    <div class="inner">
      <h2>Last Monday alone, we sent 16 million emails.</h2>
      <p class="h3">Since launch in mid-2012, Vero has grown exponentially, and our journey has only just begun. Join Vero and you'll be part of our next wave of growth. Read more <a href="https://www.getvero.com/resources/guides/future-of-vero/" target="_blank">about our growth</a>.</p>
      <ul class="list-unstyled stats list-inline">
        <li>
          <div class="number center-text">8B+</div><p>Data points tracked</p>
        </li>
        <li>
          <div class="number center-text">900+</div><p>Campaigns created last week</p>
        </li>
        <li>
          <div class="number center-text">85K+</div><p>Monthly blog readers</p>
        </li>
      </ul>
      <p class="companies">Here are some of the amazing companies we are inspired to work with every single day.
      <img src="/wp-content/themes/vero/assets/images/customers/all-grey-more.png"></p>

    </div>
  </section>

  <section id="love-work" class="center-text">
    <div class="inner">
      <h2>Make work a part of a life you love</h2>
      <p class="h3">Check out the Vero Team Expedition to Kuala Lumpur, Malaysia in 2014.</p>
    </div>
  </section>

  <section id="video">
    <div id="video-container">
      <iframe src="//fast.wistia.net/embed/iframe/t7pcnzijhg?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="800" height="450"></iframe><script src="//fast.wistia.net/assets/external/E-v1.js"></script>
    </div>
  </section>

  <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js"></script>
  <script>wistiaEmbed = Wistia.embed("t7pcnzijhg");</script>
  <script charset="ISO-8859-1" src="//fast.wistia.com/embed/medias/t7pcnzijhg/metadata.js"></script>

  <section id="jobs" class="center-text">
    <div class="inner">
      <h2>Current positions</h2>
  <?php 
}

//Close jobs at bottom
add_action( 'genesis_after_content', 'jobs_do_close' );
function jobs_do_close() { ?>
  <div class="subscribe">
      <h3>Your dream job not currently open? Stay in the loop on new postings!</h3>
      <form class="form-inline" action='https://app.getvero.com/forms/ba9cc7c0671db8a8e27d7c7de1311da1' method='post'>
        <input name='redirect_on_success' type='hidden' value='https://www.getvero.com/jobs?thanks=yourock' />
        <div class="form-group">
          <label for='email'>Your email</label>
          <input name='email' type='email' class="form-control"/>
        </div>
        <div class="form-group">
          <label for='user_first_name'>Your (first) name</label>
          <input name='user[first_name]' type='text'  class="form-control"/>
        </div>
        <div class="form-group"><input type='submit' value='Keep me updated' class="btn btn-success" /></div>
    </form>
  </div>
  
  </div></section>
<?php } ?>


<?php genesis(); ?>