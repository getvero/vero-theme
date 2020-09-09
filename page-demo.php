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
        <form class="js-demo-form stack-sm" method="get" action="">
          <h2>Schedule a demo</h2>
          <div class="flex justify-between">
            <div>
              <label class="show annotation semi-bold font-gray-dark bottom-margin-xxxs" for="field-1">First name</label>
              <input class="form-control form-control--sm" id="field-1" name="first-name" type="text" required>
            </div>

            <div>
              <label class="show annotation semi-bold font-gray-dark bottom-margin-xxxs" for="field-2">Surname</label>
              <input class="form-control form-control--sm" id="field-2" name="surname" type="text" required>
            </div>
          </div>
          <div>
            <label class="show annotation semi-bold font-gray-dark bottom-margin-xxxs" for="field-3">Company name</label>
            <input class="form-control form-control--sm full-width" id="field-3" name="company-name" type="text" required>
          </div>
          <div>
            <label class="show annotation semi-bold font-gray-dark bottom-margin-xxxs" for="field-4">Work email</label>
            <input class="form-control form-control--sm full-width" id="field-4" name="email" type="email" required>
          </div>
          <div>
            <label class="show annotation semi-bold font-gray-dark bottom-margin-xxxs" for="field-5">Contact number</label>
            <input class="form-control form-control--sm full-width" id="field-5" name="number" type="tel" placeholder="Optional">
          </div>
          <div>
            <label class="show annotation semi-bold font-gray-dark bottom-margin-xxxs" for="field-6">How many subscribers/customers do you have?</label>
            <select name="" id="field-6">
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