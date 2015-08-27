<?php 

function add_post_tracking_code() {
  global $post;
  $tgtPersona         = get_post_meta($post->ID, 'tgtPersona', true); 
  $tgtJob             = get_post_meta($post->ID, 'tgtJob', true); 
  $contMetaFormat = get_post_meta($post->ID, 'premContMetaFormat', true); 
  $contMetaDesc   = get_post_meta($post->ID, 'premContMetaDesc', true); 
  $premCont           = get_post_meta($post->ID, 'premCont', true); 
  $stage              = get_post_meta($post->ID, 'stage', true); 
  $contType           = get_post_meta($post->ID, 'contType', true); 
  ?>
    <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
          'tgtPersona': "<?php echo $tgtPersona ?>",
          'tgtJob': "<?php echo $tgtJob; ?>",
          'contType': "<?php echo $contType; ?>",
          'contMetaFormat': "<?php echo $contMetaFormat; ?>",
          'contMetaDesc': "<?php echo $contMetaDesc; ?>",
          'premCont': "<?php 
            if($premCont) {
              echo get_the_title();
            } else {
              echo "None";
            }
          ?>",
          'stage': "<?php echo $stage; ?>",
          'event': 'postView'
        });
    </script>
  <?php
}

function add_page_tracking_code($contType) {
  global $post;
  ?>
    <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
          'contType': "<?php echo $contType; ?>",
          'event': 'postView'
        });
    </script>
  <?php
}

function add_help_pages_tracking_code() {
  global $post;
  add_page_tracking_code("HelpPage");
}

function add_home_page_tracking_code() {
  global $post;
  add_page_tracking_code("BlogHome");
}

?>