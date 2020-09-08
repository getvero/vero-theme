<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'demo';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="" banner-name="Design beautiful emails" element-position="top">
  <div class="inner large-inner">
    <div class="w-sidebar w-sidebar--feature-lg">
      <div class="col-main stack-lg lg-right-padding-md">
        <div class="stack-xs">
          <div class="stack-xxs">
            <h1 class="chunk">New to Vero</h1>
            <p class="large">Schedule a demo with one of our experts to find out how Vero can scale your personalized messaging.</p>
          </div>

          <ul class="unstyled-list flex demo-team-list">
            <li>
              <img class="align-middle border-radius-100" src="/wp-content/themes/vero/assets/dist/images/demo/team/brandon.jpg" srcset="/wp-content/themes/vero/assets/dist/images/demo/team/brandon@2x.jpg 2x" alt="Brandon">
            </li>
            <li>
              <img class="align-middle border-radius-100" src="/wp-content/themes/vero/assets/dist/images/demo/team/brandon.jpg" srcset="/wp-content/themes/vero/assets/dist/images/demo/team/brandon@2x.jpg 2x" alt="Brandon">
            </li>
            <li>
              <img class="align-middle border-radius-100" src="/wp-content/themes/vero/assets/dist/images/demo/team/brandon.jpg" srcset="/wp-content/themes/vero/assets/dist/images/demo/team/brandon@2x.jpg 2x" alt="Brandon">
            </li>
          </ul>
        </div>

        <h2 class="micro">Enable the full team to create, edit and test message ideas</h2>
      </div>

      <div class="col-aside bg-white border-radius-2 shadow-4 padding-lg">
        <form class="stack-sm">
          <h2>Schedule a demo</h2>
          <div class="flex">
            <div>
              <label class="show annotation semi-bold font-gray-dark bottom-margin-xxxs" for="field">First name</label>
              <input class="form-control form-control--sm" id="field" type="text">
            </div>

            <div>
              <label class="show annotation semi-bold font-gray-dark bottom-margin-xxxs" for="field-2">Surname</label>
              <input class="form-control form-control--sm" id="field-2" type="text">
            </div>
          </div>
          <div>
            <label class="show annotation semi-bold font-gray-dark bottom-margin-xxxs" for="field-3">Company name</label>
            <input class="form-control form-control--sm full-width" id="field-3" type="text">
          </div>
          <div>
            <label class="show annotation semi-bold font-gray-dark bottom-margin-xxxs" for="field-4">Work email</label>
            <input class="form-control form-control--sm full-width" id="field-4" type="email">
          </div>
          <div>
            <label class="show annotation semi-bold font-gray-dark bottom-margin-xxxs" for="field-5">How many subscribers/customers do you have?</label>
            <select name="" id="field-5">
              <option value="">0 &ndash; 2000</option>
              <option value="">2000 &ndash; 15000</option>
              <option value="">15000 &ndash; 75000</option>
              <option value="">75000 &ndash; 250000</option>
              <option value="">250000+</option>
            </select>
          </div>
          <div>
            <input class="btn btn--success full-width" value="Schedule a demo" type="submit">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>