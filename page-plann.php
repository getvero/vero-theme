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
  <div class="inner reading-inner stack-lg">
    <div>
      <p class="large">A semi-remote, 50-person team headquartered in Sydney, Australia, Plann is an Instagram scheduling app for travel, fashion, and lifestyle brands. They enable their customers to plan, schedule, and explore campaign analytics.</p>
      <p class="medium">They’re a product-led business that launches regular new releases and features for their customers, so being able to send impactful messages that are tightly-integrated with their core product is critical.</p>
    </div>

    <div class="case-study-callout bg-primary-lighter border-primary stack-sm">
      <h2 class="chunk semi-bold">The Challenge: a small team juggling lots of users </h2>
      <p class="medium">Plann is a data-driven company that needs to be on top of their numbers and analytics to drive growth. Their CMO, Karina May, said that it was previously challenging for them to be data-driven while keeping up the pace of innovation. That’s because they don’t have a dedicated business intelligence, email, or CRM team to manage their analytics and messaging full-time. To keep scaling up, the right tooling was crucial and Plann had outgrown their prior stack.</p>
    </div>

    <div class="stack-lg">
      <p class="medium">In the past, the tools they were using lacked transparency and flexibility. Not only were they not providing Plann with the view they needed of their campaign successes, but they couldn’t move as quickly as they needed to drive the business forward.</p>

      <div>
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/image-1.jpg" alt="">
      </div>
    </div>

    <div>
      <p class="medium">&ldquo;It just wasn’t sophisticated enough in terms of data, the workflows, everything.&rdquo; remembered Karina.</p>

      <p class="medium">In collaboration with COO Tim Laurence, Plann chose Vero based on its balance of ease-of-use, functionality and pricing.</p>

      <p class="medium">As a specialist in automation, Karina knew what was available on the market and felt Vero was an ideal fit.</p>
    </div>

    <blockquote class="case-study-callout bg-white border stack-md">
      <p class="tubs quote center-text">&ldquo;Vero was such a good match for the stage of the business. As about four years in, with a list of over 200,000—we needed a certain level of functionality and analytics support to scale up.</p>

      <div class="author flex items-center justify-center">
        <div class="right-margin-sm">
          <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/karina-may.jpg" srcset="/wp-content/themes/vero/assets/dist/images/case-study/plann/karina-may@2x.jpg 2x" alt="Karina May">
        </div>
        <div>
          <span class="show medium semi-bold">Karina May</span>
          <span class="d-inline-block">Chief Marketing Officer</span>
        </div>
      </div>
    </blockquote>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner reading-inner stack-lg">
    <div class="stack-sm">
      <h2 class="chunk semi-bold">The solution</h2>
      <h3 class="tubs regular">⚙️ Connect with their marketing tools</h3>
    </div>

    <div class="full-bleed center-text">
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/diagram.svg" alt="">
    </div>

    <div>
      <p class="medium">As a summary of the above, here’s how Plann’s integrations with Vero are set up:</p>

      <p class="medium">Plann has four lead sources including WordPress, Unbounce, WebinarJam, and Facebook Ads</p>

      <div class="case-study-hotspot case-study-hotspot--1">
         <p class="medium">For WebinarJam and Facebook Ads, they use Zapier to pass the lead contacts from their webinars and Facebook Ads campaigns over to Vero.</p>
      </div>

      <div class="case-study-hotspot case-study-hotspot--2">
        <p class="medium">For WordPress, they use Vero’s embedded forms to import leads directly from their blog. And for Unbounce, they link up with Vero via webhook integration.</p>
      </div>
    </div>

    <div>
      <h3 class="tubs regular">👩‍💻 Empower marketing with data</h3>

      <p class="medium">With Vero’s flexible APIs, Plann was able to integrate the top-of-funnel and bottom-of-funnel data they needed into one platform.

      <p class="medium">This not only enhanced visibility for the marketing team, making it clear what data was available and safe to use, but gave marketing a “playground” they could use to iterate, test ideas, and get feedback. All without having to engage engineering for every minor change.</p>

      <p class="medium">&ldquo;Having the ability to have those event triggers means that we can use Vero for more sophisticated in-product emails as well, which I'm excited about because if you have something in the one system, you can then look at the whole behavior of contact versus what they did in this system and that system, explained Karina.</p>

      <p class="medium">Using Vero’s Segments and Workflows features enabled Plann’s marketing team to see and use data any time they need it, without having to wait days or weeks for space in the engineering team’s sprint cycle to open up.</p>
    </div>

    <div class="stack-lg">
      <p class="medium">Karina shared that the very first workflow that they set up in Vero was a standard onboarding campaign, consisting of a two-week series and emails with valuable content.</p>

      <div class="case-study-split case-study-split--1">
        <div class="flex flex-wrap items-center">
          <div>
            <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/workflow.png" alt="">
          </div>

          <div>
            <p class="medium">The next workflow (as seen to the left), though, was a little more complex, where customers were segmented into two groups: sign ups via lead magnets, or sign ups via account registration. And different content was created for each of the two segments.</p>

            <p class="medium">As a product-led business, Vero was useful for Plann because it fulfilled their need to trigger the right message at the right time for a seamless workflow. </p>
          </div>
        </div>
      </div>

      <p class="medium">&ldquo;It's been great being able to get up key product launch campaigns quickly for new releases and value-adds for our planners every fortnight,” she added. &ldquo;<strong>Being able to send that to the right people is crucial.</strong>&rdquo;</p>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner reading-inner">
    <div class="case-study-callout bg-primary-lighter border-primary stack-sm">
      <h2 class="chunk semi-bold">The results</h2>
      <h3 class="tubs regular">🎯 Increased team confidence</h3>
      <p class="medium">Plann is a data-driven company that needs to be on top of their numbers and analytics to drive growth. Their CMO, Karina May, said that it was previously challenging for them to be data-driven while keeping up the pace of innovation. That’s because they don’t have a dedicated business intelligence, email, or CRM team to manage their analytics and messaging full-time. To keep scaling up, the right tooling was crucial and Plann had outgrown their prior stack.</p>
    </div>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>