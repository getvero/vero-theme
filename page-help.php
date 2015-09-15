<?php 
  remove_action( 'genesis_loop', 'genesis_do_loop' );
  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'help';
    return $classes;  
  }

  add_filter('wp_title', 'my_custom_title');
  function my_custom_title($title) {
      return 'Vero Customer Support and Help Desk';
  }

  add_action( 'genesis_after_header', 'add_swiftype');
  function add_swiftype() {
    ?>
    <script type="text/javascript">
      (function(w,d,t,u,n,s,e){w['SwiftypeObject']=n;w[n]=w[n]||function(){
      (w[n].q=w[n].q||[]).push(arguments);};s=d.createElement(t);
      e=d.getElementsByTagName(t)[0];s.async=1;s.src=u;e.parentNode.insertBefore(s,e);
      })(window,document,'script','//s.swiftypecdn.com/install/v1/st.js','_st');

      _st('install','Daib9j8Z1aTZ_bNzfemm');
    </script>
    <?php
  }

  add_action( 'genesis_after_header', 'add_top' );
  function add_top() {
    ?>
    <section id="top">
      <div class="inner center-text">
        <h1>Questions? Search our help guides.</h1>
        <form>
          <div class="form-group">
            <input type="text" id="st-search-input" class="st-search-input form-control" />
          </div>
        </form>
        <p>Didn't find what you were looking for? <a href="mailto:support@getvero.com">Send us an email</a>.</p>
      </div>
    </section>
    <?php
  }

  add_action( 'genesis_after_header', 'add_get_started' );
  function add_get_started() {
    ?>
    <section id="get-started">
      <div class="inner center-text">
        <h1>Getting started? Easy as 1, 2, 3</h1>
        <ul id="videos" class="list-unstyled list-inline">
          <li class="center-text">
            <h3>
              <span class="number">1</span>
              Add your customers
            </h3>
            <a class="video one" target="blank" href="https://getvero.wistia.com/medias/vlcykly3p4" class="wistia-popover[height=360,playerColor=7b796a,width=640]">
              <img src="/wp-content/themes/vero/assets/images/help/play.png" class="play">
            </a>
            <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
            <p>Know which customers are on your website when they login, signup or subscribe with our Javascript library.</p>
          </li>
          <li class="center-text">
            <h3>
              <span class="number">2</span>
              Track customer actions
            </h3>
            <a class="video two" target="blank" href="https://getvero.wistia.com/medias/uruaowfxro" class="wistia-popover[height=360,playerColor=7b796a,width=640]">
              <img src="/wp-content/themes/vero/assets/images/help/play-white.png" class="play">
            </a>
            <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
            <p>Track import customer lifecycle events on your website using our simple Javascript library.</p>
          </li>
          <li class="center-text">
            <h3>
              <span class="number">3</span>
              Your first triggered email
            </h3>
            <a class="video three" target="blank" href="https://getvero.wistia.com/medias/n98c3gk441" class="wistia-popover[height=360,playerColor=7b796a,width=640]">
              <img src="/wp-content/themes/vero/assets/images/help/play.png" class="play">
            </a>
            <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
            <p>Learn how to send your first triggered behavioral email campaign using Vero's workflows.</p>
          </li>
      </div>
    </section>
    <?php
  }

  add_action( 'genesis_loop', 'help_docs_archive_loop' );
  function help_docs_archive_loop() {
    ?><h1 class="category-header center-text">Everything else you need</h1><?php
    //Retrieve custom taxonomy terms using get_terms and the custom post type.
    $categories = get_terms('help_docs_categories');
    echo "<section id='categories'>";
    //Iterate through each term
    foreach ( $categories as $category ) :
    ?>
      <div id="<?php echo $category->slug; ?>" class="help-doc-category">
        <h3><?php echo $category->name; ?></h3>
        <p class="description"><?php echo $category->description; ?></h3>
        <ul>
          <?php
            //Setup the query to retrieve the posts that exist under each term
            $posts = query_posts(array(
              'post_type' => 'help_docs',
              'taxonomy' => $category->taxonomy,
              'term'  => $category->slug,
              'posts_per_page' => 5
              ));
            // Here's the second, nested foreach loop that cycles through the posts associated with this category
            foreach($posts as $post) :
              setup_postdata($post); // Set up post data for use in the loop (enables the_title(), etc without specifying a post ID--as referenced in the stackoverflow link above)
              ?>
                <li>
                  <a href="<?php echo get_the_permalink($post);?>"><?php echo get_the_title($post); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
            <a href="/help/<?php echo $category->slug; ?>" class="btn btn-primary btn-small">View all</a>
      </div>
    <?php endforeach; 
    echo "</section>";
  }

  add_action( 'genesis_before_footer', 'add_help_docs_categories_footer' );
  function add_help_docs_categories_footer(){
    ?>
    <section id="bottom">
      <div class="inner center-text">
        <h1>Need more help?</h1>
        <h2 class="h5">If you can't find the answer you're after, click the button below to shoot our super support team an email.</h2>
        <a href="mailto:support@getvero.com" class="btn btn-large btn-primary">Email Us</a>
      </div>
    </section>
    <?php
  }
  genesis();
?>