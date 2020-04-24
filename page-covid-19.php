<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'push-notifications';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="covid-19-hero">
  <div class="inner">
    <div class="grid grid-halfs items-center">
      <div class="stack-sm">
        <h1 class="semi-bold biggie">Working together in the fight against COVID-19</h1>
        <p class="medium">COVID-19 has impacted us all in various ways. It’s becoming clear that, whilst the initial battle might be over, we’re going to have to learn how to overcome or live with COVID-19 and this is going to take many more months, if not years.</p>
      </div>
      <div class="hide md-show right-text">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/covid-19/hero.svg" alt="COVID-19 fund">
      </div>
    </div>
  </div>
</section>
<section class="bg-dark-blue-lighter">
  <div class="inner medium-inner">
    <div class="w-sidebar w-sidebar--long-form">
      <div class="col-main">
        <div class="flex items-center">
          <img class="align-middle right-margin-xs" src="/wp-content/themes/vero/assets/dist/images/covid-19/icon/help.svg" alt="">

          <h2 class="semi-bold atomic no-margin">We’re here to help</h2>
        </div>

      </div>
      <div class="col-aside">
        <p class="medium">Communicating in times of crisis and change is critical. Businesses and governments all over the world are creating new initiatives to help fight COVID-19.</p>

        <p class="medium">We’re extending six months free usage to new relief working on the front line to directly help those most affected by COVID-19.</p>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner">
    <div class="w-sidebar w-sidebar--long-form">
      <div class="col-main">
        <div class="flex items-center">
          <img class="align-middle right-margin-xs" src="/wp-content/themes/vero/assets/dist/images/covid-19/icon/application.svg" alt="">

          <h2 class="semi-bold atomic no-margin">Application details</h2>
        </div>
      </div>
      <div class="col-aside stack-md">
        <div class="stack-md border padding-lg border-radius-2">
          <h3 class="micro semi-bold">1. Who's this for?</h3>

          <p class="medium">If you're working in any of the following, please apply:</p>

          <div class="covid-19-organizations stack-md">
            <div class="stack-xxs">
              <h4 class="atomic semi-bold">Local governments</h4>
              <p class="medium">For example, local governments that need to communicate important updates with their communities.</p>
            </div>

            <div class="stack-xxs">
              <h4 class="atomic semi-bold">Education</h4>
              <p class="medium">For example, public and private having to digitise to help ensure students get the education they need.</p>
            </div>

            <div class="stack-xxs">
              <h4 class="atomic semi-bold">Healthcare providers</h4>
              <p class="medium">For example, organizations co-ordinating medical professionals or healthcare for communities.</p>
            </div>

            <div class="stack-xxs">
              <h4 class="atomic semi-bold">Non-profits</h4>
              <p class="medium">For example, non-profit organizations or teams that are directly working to fight COVID-19.</p>
            </div>
          </div>

          <p class="annotation italic font-brand-gray-dark">Note that if you don’t meet one of these criteria, but feel you’re a fit for this initiative, please write in!</p>
        </div>

        <div class="stack-md border padding-lg border-radius-2">
          <h3 class="micro semi-bold">2. Create your account?</h3>
          <p class="medium">Create your new Vero account at <a class="underline-link" href="/signup">app.getvero.com/signup</a>.</p>
        </div>

        <div class="stack-md border padding-lg border-radius-2">
          <h3 class="micro semi-bold">3. Submit your application</h3>
          <p class="medium">Email us at <a class="underline-link" href="mailto:support+covid19@getvero.com">support+covid19@getvero.com</a>. We’re here to help.</p>

          <a class="btn btn-success btn-large" href="mailto:support+covid19@getvero.com">Email us</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>