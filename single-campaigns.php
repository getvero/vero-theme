<?php
/*
Template Name: Campaigns Single
*/
//Remove footer
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

//Add title, no date
add_action( 'genesis_before_entry_content', 'add_title_meta', 9 );
add_action( 'genesis_before_entry_content', 'genesis_do_post_title', 9 );

//Add iframe
add_action( 'genesis_after_content', 'get_campaign_preview', 8 );

//Add CTA
add_action( 'genesis_after_entry_content', 'get_campaign_story', 7 );
add_action( 'genesis_after_entry_content', 'add_cta', 8 );

function add_title_meta() {
  ?><h4 class='h5'>SaaS Campaigns ></h4><?php
}
function get_campaign_story() {
  global $post;
  $campaign_story = get_post_meta($post->ID, 'campaign_story', true); 
  $stories = explode("\n", $campaign_story);
  ?>
   <ul id="campaign-story">
   <?php 
    for ($i=0; $i < sizeof($stories); $i++) { 
      if ($i == sizeof($stories) - 1) {
        echo "<li><div class='dot'></div>".$stories[$i]."</li>";
      } else {
        echo "<li><div class='line'></div><div class='dot'></div>".$stories[$i]."</li>";
      }
    }
    ?>
    </ul>
  <?php 
}

function get_campaign_preview() {
  global $post;
  $campaign_id = get_post_meta($post->ID, 'campaign_id', true); 
  $campaign_preview = "https://app.getvero.com/preview/idea_lab/". $campaign_id;
  $campaign_subject = get_post_meta($post->ID, 'campaign_subject', true); 
  ?>
    <p id='subject'><strong>Subject:</strong> <?php echo $campaign_subject ?></p>
    <iframe id="campaign-preview" src="<?php echo $campaign_preview; ?>"/>
  <?php 
}

function add_cta() {
  global $post;
  $campaign_id = get_post_meta($post->ID, 'campaign_id', true); 
  ?>
  <a href="https://app.getvero.com/campaigns/<?php echo $campaign_id ?>/clone-external" class="btn btn-large btn-success">Start sending this email &rarr;</a>
  <p class='small'>Copy this campaign and it's rules into your Vero account, or sign up for a free trial to test it out.</p>
  <?php
}

genesis(); ?>