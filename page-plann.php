<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'case-study';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>

<section class="border-bottom overflow-hidden">
  <div class="inner large-inner">
    <div class="case-study-hero flex flex-wrap">
      <div class="col-main stack-lg">
        <span class="semi-bold font-gray-dark">Case study</span>
        <div class="stack-sm">
          <h1 class="biggie">Plann is an Instagram scheduling app for travel, fashion, and lifestyle brands</h1>
          <div class="large">Their goal? Move faster as a marketing team.</div>
        </div>

        <div class="stack-sm">
          <h2 class="annotation semi-bold uppercase">Challenges</h2>

          <ul class="stack-sm">
            <li>
              <p>Struggled with empowering their marketing/product teams to iterate and test changes without engineering.</p>
            </li>
            <li>
              <p>Struggled with empowering their marketing/product teams to iterate and test changes without engineering.</p>
            </li>
            <li>
              <p>Struggled with empowering their marketing/product teams to iterate and test changes without engineering.</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-aside flex items-start">
        <img class="responsive-image align-middle lg-left-margin-auto" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/hero.jpg" alt="">
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner small-inner stack-lg">
    <p class="large">A semi-remote, 50-person team headquartered in Sydney, Australia, Plann is an Instagram scheduling app for travel, fashion, and lifestyle brands. They enable their customers to plan, schedule, and explore campaign analytics.</p>
    <p class="medium">They’re a product-led business that launches regular new releases and features for their customers, so being able to send impactful messages that are tightly-integrated with their core product is critical.</p>


    <div class="case-study-callout bg-primary-lighter border-primary border-radius-2">
      <h2 class="chunk semi-bold">The Challenge: a small team juggling lots of users </h2>
      <p class="medium">Plann is a data-driven company that needs to be on top of their numbers and analytics to drive growth. Their CMO, Karina May, said that it was previously challenging for them to be data-driven while keeping up the pace of innovation. That’s because they don’t have a dedicated business intelligence, email, or CRM team to manage their analytics and messaging full-time. To keep scaling up, the right tooling was crucial and Plann had outgrown their prior stack.</p>
    </div>

    <div class="flex">
      <div>
      </div>

      <div>
        <p class="medium">In the past, the tools they were using lacked transparency and flexibility. Not only were they not providing Plann with the view they needed of their campaign successes, but they couldn’t move as quickly as they needed to drive the business forward.</p>

        <p class="medium">&ldquo;It just wasn’t sophisticated enough in terms of data, the workflows, everything.&rdquo; remembered Karina.</p>
      </div>
    </div>

    <p class="medium">In collaboration with COO Tim Laurence, Plann chose Vero based on its balance of ease-of-use, functionality and pricing.</p>

    <p class="medium">As a specialist in automation, Karina knew what was available on the market and felt Vero was an ideal fit.</p>

    <blockquote class="case-study-callout bg-white border border-radius-2">
      <q class="large">Vero was such a good match for the stage of the business. As about four years in, with a list of over 200,000—we needed a certain level of functionality and analytics support to scale up.</q>
    </blockquote>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner small-inner">
    <h2 class="chunk semi-bold">The solution</h2>
    <h3 class="tubs regular">⚙️ Connect with their marketing tools</h3>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>