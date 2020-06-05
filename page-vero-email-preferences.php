<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'preferences';
  return $classes;
}

include 'pages-shared/static-header.php';

function get_user($id) {
  return wp_remote_get( 'https://open.getvero.com/api/v1/customers/'.$id, array( 'headers' => array( 'Authorization' => 'YzljYTlhZjE3ZDdjNzc1NjY0ZTUzMjA2ZDYwZGFkN2ZjYmI2MzYzNDphZGFlNGQ2ZTBhNGQ2YjJkMDdlNjUxYjUwNWIwZTUyYmM0ZDMzOGVk', 'Content-Type' => 'application/json' ) ) );
}

function subscribe_user($id) {
  return wp_remote_post( 'https://api.getvero.com/api/v2/users/resubscribe', array( 'body' => array( 'auth_token' => 'YzljYTlhZjE3ZDdjNzc1NjY0ZTUzMjA2ZDYwZGFkN2ZjYmI2MzYzNDphZGFlNGQ2ZTBhNGQ2YjJkMDdlNjUxYjUwNWIwZTUyYmM0ZDMzOGVk', 'id' => $id ) ) );
}

if(isset($_GET['v_id'])) {
  $no_error = true;
  $id = $_GET['v_id'];
  if(isset($_GET['resubscribe']) && $_GET['resubscribe']=='true') {
    $response = subscribe_user($id);
    if(isset($response['body'])) {
      $response = json_decode($response['body']);
      if($response->status == '200') {
        $resubscribed = true;
      } else {
        $no_error = false;
      }
    }
  }
  $response = get_user($id);
  print_r($response['body']);
  if(isset($response['body']) && $no_error){
    $customer = json_decode($response['body']);
    $email = $customer->customer->email;
    $tags = $customer->customer->tags;
  }
}
?>

<div class="inner">
  <section id="top">
    <?php if(isset($email)) { ?>
      <h1 class="center-text">Email preferences for <?php echo $email; ?></h1>
      <h2 class="center-text">Manage your subscription preferences to Vero emails here.</h2>

      <?php if($customer->customer->properties->paying_customer == 'true') { ?>
        <aside id="right">
          <h3>Hey Vero customer!</h3>
          <p>We're beta testing a new API that lets you read user data <strong>from Vero</strong>. We created this preference page using our own Vero account (yep, we use Vero at Vero!)</p>
          <p>In fact, we put this blue box here because we know you have a paid Vero account.</p>
          <p>Sound interesting? This feature is currently available for beta testing. <a href="mailto:support@getvero.com?subject=I want to try the open API">Send us an email</a> and we'll share access.</p>
          <a href="mailto:support@getvero.com?subject=I want to try the open API" class="btn btn--warning">Email us</a>
        </aside>
      <?php } else { ?>
        <aside id="right">
          <h3>Want a preference page like this?</h3>
          <p>Vero is the world's premier marketing platform for personalising your customer messages. You can use our free trial for 14 days, and pricing starts at just $99/month.</p>
          <a href="https://app.getvero.com/signup" class="btn btn--warning">Start your trial</a>
        </aside>
      <?php } ?>

      <?php if(in_array("unsubscribed",$tags) && !$resubscribed) { ?>
        <ul class="list-unstyled">
          <li>
            <h4>You are completely unsubscribed</h4>
            <p>It looks like you're completely unsubscribed from all Vero emails. That's cool, we respect it. If you want, you can resubscribe and adjust your preferences for receiving blog articles, Vero product updates and other emails.</p>
            <p><a href="?resubscribe=true&v_id=<?php echo $id; ?>" id="resubscribe" class="btn btn--success">Resubscribe and manage preferences</a></p>
          </li>
        </ul>

      <?php } else { ?>
        <ul class="list-unstyled">
          <?php if($customer->customer->properties->paying_customer == 'true') { ?>
            <li>
              <h4>Vero onboarding emails</h4>
              <p>Whilst on your trial we'll send you periodic emails to help you get started with Vero.</p>
              <div class="form-group">
                <input type="checkbox" id="onboarding-emails" <?php if(in_array("onboarding-emails",$tags)){ echo 'checked'; } ?>><label>Subscribe to onboarding emails</label>
              </div>
            </li>
          <?php } ?>
          <li>
            <h4>Vero product updates</h4>
            <p>Typically we email you once per week with new content on what Vero customers and other industry leaders are doing to create better customer experiences.</p>
            <div class="form-group">
              <input type="checkbox" id="product-updates" <?php if(in_array("product-updates",$tags)){ echo 'checked'; } ?>><label>Subscribe to product updates</label>
            </div>
          </li>
          <li>
            <h4>Email marketing resources and articles</h4>
            <p>Typically we email you once per week with new content on what Vero customers and other industry leaders are doing to create better customer experiences.</p>
            <div class="form-group">
              <input type="checkbox" id="blog-posts" <?php if(in_array("blog-posts",$tags)){ echo 'checked'; } ?>><label>Subscribe to blog posts</label>
            </div>
          </li>
        </ul>

        <script>
          jQuery(document).ready(function(){
            _veroq.push(['user', {id: "<?php echo $id ?>"}]);
            jQuery("input[type='checkbox']").on('change', function(e){
              tag = jQuery(this).attr('id');
              if(jQuery(this).is(':checked')){
                console.log("Adding tag " + tag);
                _veroq.push(['tags', {
                  id: "<?php echo $id ?>",
                  add: [tag]
                }]);
              } else {
                console.log("Removing tag " + tag);
                _veroq.push(['tags', {
                  id: "<?php echo $id ?>",
                  remove: [tag]
                }]);
              }
            });
          });
        </script>
      <?php } ?>

    <?php } else { ?>
      <h1 class="center-text">Oops, it looks like we don't know who you are.</h1>
      <h2 class="center-text">Did you click this link from a Vero email?<br>You can also find your preference page via your Vero account area.</h2>
    <?php } ?>
  </section>
</div>

<?php
  wp_footer();
  add_page_tracking_code("PreferencePage");
?>