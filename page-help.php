<?php 
  remove_action( 'genesis_loop', 'genesis_do_loop' );
  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'help';
    return $classes;  
  }

  add_action( 'genesis_before_footer', 'add_swiftype');
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

  add_action( 'genesis_before_loop', 'add_top', 8 );
  function add_top() {
    ?>
    <section id="top">
      <div class="inner center-text">
        <h1>Questions? Get help here.</h1>
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

  add_action( 'genesis_loop', 'help_docs_archive_loop' );
  function help_docs_archive_loop() {
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
            $posts = get_posts(array(
              'post_type' => 'help_docs',
              'orderby' => 'menu_order',
              'order' =>  'ASC',
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