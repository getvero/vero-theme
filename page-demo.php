<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'demo';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="demo-hero" banner-name="" element-position="top">
  <div class="inner large-inner">
    <div class="w-sidebar w-sidebar--feature-lg">
      <div class="col-main stack-sm lg-right-padding-md">
        <div class="stack-sm">
          <div class="stack-xxs">
            <h1 class="biggie semi-bold">New to Vero?</h1>
            <p class="large">Schedule a demo with one of our experts to find out how Vero can scale your personalized messaging.</p>
          </div>

          <ul class="unstyled-list flex demo-team">
            <li>
              <img class="align-middle responsive-image border-radius-100" src="/wp-content/themes/vero/assets/dist/images/demo/team/brandon.jpg" srcset="/wp-content/themes/vero/assets/dist/images/demo/team/brandon@2x.jpg 2x" alt="Brandon">
            </li>
            <li>
              <img class="align-middle responsive-image border-radius-100" src="/wp-content/themes/vero/assets/dist/images/home/support/reba-moyes.jpg" srcset="/wp-content/themes/vero/assets/dist/images/home/support/reba-moyes@2x.jpg 2x" alt="Reba Moyes">
            </li>
            <li>
              <img class="align-middle responsive-image border-radius-100" src="/wp-content/themes/vero/assets/dist/images/demo/team/chris.jpg" srcset="/wp-content/themes/vero/assets/dist/images/demo/team/chris@2x.jpg 2x" alt="Chris">
            </li>
          </ul>
        </div>

        <div class="stack-md">
          <h2 class="micro semi-bold">Enable the full team to create, edit and test message ideas</h2>

          <ul class="unstyled-list medium stack-sm">
            <li class="flex items-center">
              <svg class="align-middle right-margin-xs" width="22" height="22" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect fill="#01B2D0" width="22" height="22" rx="11"/><path d="M5 11.472a.55.55 0 01.778 0l2.875 2.875 7.722-7.722a.55.55 0 01.778.778l-8.111 8.111a.55.55 0 01-.847-.083.56.56 0 01-.084-.07L5 12.251a.55.55 0 010-.779z" fill="#FFF"/></g></svg>

              <h3 class="atomic light no-margin">Centralize your data</h3>
            </li>
            <li class="flex items-center">
              <svg class="align-middle right-margin-xs" width="22" height="22" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect fill="#01B2D0" width="22" height="22" rx="11"/><path d="M5 11.472a.55.55 0 01.778 0l2.875 2.875 7.722-7.722a.55.55 0 01.778.778l-8.111 8.111a.55.55 0 01-.847-.083.56.56 0 01-.084-.07L5 12.251a.55.55 0 010-.779z" fill="#FFF"/></g></svg>


              <h3 class="atomic light no-margin">Segment your customers</h3>
            </li>
            <li class="flex items-center">
              <svg class="align-middle right-margin-xs" width="22" height="22" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect fill="#01B2D0" width="22" height="22" rx="11"/><path d="M5 11.472a.55.55 0 01.778 0l2.875 2.875 7.722-7.722a.55.55 0 01.778.778l-8.111 8.111a.55.55 0 01-.847-.083.56.56 0 01-.084-.07L5 12.251a.55.55 0 010-.779z" fill="#FFF"/></g></svg>


              <h3 class="atomic light no-margin">Run A/B tests</h3>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-aside relative">
        <div class="bg-white border-radius-2 shadow-4">
          <form class="js-demo-form demo-form stack-sm append-user-id track-demo-form" method="post" action="https://formkeep.com/f/f8f7745fab13" accept-charset="UTF-8" enctype="multipart/form-data">
            <h2>Schedule a demo</h2>
            <div class="flex flex-wrap demo-form-halfs justify-between">
              <div>
                <label class="show annotation regular font-gray-dark bottom-margin-xxxs" for="field-1">First name</label>
                <input class="bg-offwhite form-control form-control--sm full-width track-first-name" id="field-1" name="first-name" type="text" required>
              </div>

              <div>
                <label class="show annotation regular font-gray-dark bottom-margin-xxxs" for="field-2">Surname</label>
                <input class="bg-offwhite form-control form-control--sm full-width" id="field-2" name="surname" type="text" required>
              </div>
            </div>
            <div>
              <label class="show annotation regular font-gray-dark bottom-margin-xxxs" for="field-3">Company name</label>
              <input class="bg-offwhite form-control form-control--sm full-width" id="field-3" name="company-name" type="text" required>
            </div>
            <div>
              <label class="show annotation regular font-gray-dark bottom-margin-xxxs" for="field-4">Work email</label>
              <input class="bg-offwhite form-control form-control--sm full-width" id="field-4" name="email" type="email" required>
            </div>
            <div>
              <label class="show annotation regular font-gray-dark bottom-margin-xxxs" for="field-5">Contact number</label>
              <div class="relative">
                <span class="annotation regular absolute uppercase tracked demo-form-optional font-gray-dark">Optional</span>
                <input class="bg-offwhite form-control form-control--sm full-width" id="field-5" name="number" type="tel">
              </div>
            </div>
            <div>
              <label class="show annotation regular font-gray-dark bottom-margin-xxxs" for="field-6">How many subscribers/customers do you have?</label>
              <select class="bg-offwhite form-control form-control--sm" id="field-6" name="customers" required>
                <option value disabled>How many subscribers/customers do you have?</option>
                <option value="0-2000">0 &ndash; 2000</option>
                <option value="2000-15000">2000 &ndash; 15000</option>
                <option value="2000-15000">15000 &ndash; 75000</option>
                <option value="75000-250000">75000 &ndash; 250000</option>
                <option value="75000-250000">250000+</option>
              </select>
            </div>
            <div>
              <input class="btn btn--success full-width track-contact-us" element-position="" value="Schedule a demo" type="submit">
            </div>
            <input type="hidden" name="subscribe_f8f7745fab13_28100"/>
          </form>

          <div class="bg-dark-blue-lighter demo-customers center-text stack-xs">
            <h4 class="cation semi-bold uppercase tracked font-gray-dark">Trusted by leading bands</h4>

            <ul class="unstyled-list flex flex-wrap justify-center demo-customers-logos">
              <li class="no-margin">
                <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/unsplash-logo-vero.svg" alt="Unsplash logo">
              </li>
              <li class="no-margin">
                <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/tidal-logo-vero.svg" alt="Tidal logo">
              </li>
              <li class="no-margin">
                <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/stickermule-logo-vero.svg" alt="Stickermule logo">
              </li>
              <li class="no-margin">
                <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/monzo-logo-vero.svg" alt="Monzo logo">
              </li>
              <li class="no-margin">
                <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/pipedrive-logo-vero.svg" alt="Pipedrive logo">
              </li>
              <li class="no-margin">
                <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/helloprint-logo-vero.svg" alt="Helloprint logo">
              </li>
            </ul>
          </div>
        </div>

        <svg class="absolute" width="217" height="101" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M1 100h149.28c13.508 0 24.458-10.95 24.458-24.458 0-13.507-10.95-24.458-24.457-24.458H98.277c-13.83 0-25.043-11.211-25.043-25.042C73.234 12.212 84.446 1 98.277 1H215.83" stroke="#01B2D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="3,8"/></g></svg>
      </div>
    </div>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>