<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'case-study';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>

<section class="case-study-hero case-study-hero--plann border-bottom overflow-hidden">
  <div class="inner large-inner stack-md">
    <span class="show annotation semi-bold uppercase font-gray-dark">Case study</span>

    <div>
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/logo.png" srcset="/wp-content/themes/vero/assets/dist/images/case-study/plann/logo@2x.png 2x" alt="Plann logo">
    </div>

    <div class="flex flex-wrap">
      <div class="col-main stack-lg">
        <div class="stack-sm">
          <h1 class="biggie">Plann is an social media scheduling app for travel, fashion, and lifestyle brands</h1>
          <div class="large">Their goal? Move faster as a marketing team.</div>
        </div>

        <div class="stack-sm">
          <h2 class="annotation semi-bold uppercase">Challenges</h2>

          <ul class="stack-xs">
            <li>
              <p>Struggled with empowering their marketing/product teams to iterate and test changes without engineering.</p>
            </li>
            <li>
              <p>Lacked effective reporting for campaign results.</p>
            </li>
            <li>
              <p>Low user engagement in both emails and within the product itself.</p>
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
    <div>
      <p class="medium">A semi-remote, 50-person team headquartered in Sydney, Australia, <a class="semi-bold underline-link" href="https://www.plannthat.com">Plann</a> is an social media scheduling app for travel, fashion, and lifestyle brands. They enable their customers to plan, schedule, and explore campaign analytics.</p>
      <p class="medium">They’re a product-led business that launches regular new releases and features for their customers, so being able to send impactful messages that are tightly-integrated with their core product is critical.</p>
    </div>

    <div class="case-study-callout bg-primary-lighter border-primary stack-sm">
      <h2 class="chunk semi-bold">The Challenge: a small team juggling lots of users </h2>
      <p class="medium">Plann is a data-driven company that needs to be on top of their numbers and analytics to drive growth. Their CMO, Karina May, said that it was previously challenging for them to be data-driven while keeping up the pace of innovation. That’s because they don’t have a dedicated business intelligence, email, or CRM team to manage their analytics and messaging full-time. To keep scaling up, the right tooling was crucial and Plann had outgrown their prior stack.</p>
    </div>

    <div class="stack-lg">
      <p class="medium">In the past, the tools they were using lacked transparency and flexibility. Not only were they not providing Plann with the view they needed of their campaign successes, but they couldn’t move as quickly as they needed to drive the business forward.</p>

      <div>
        <img class="border-radius-2 shadow-3 align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/image-1.jpg" alt="">
      </div>
    </div>

    <div>
      <p class="medium">&ldquo;It just wasn’t sophisticated enough in terms of data, the workflows, everything.&rdquo; remembered Karina.</p>

      <p class="medium">In collaboration with COO Tim Laurence, Plann chose Vero based on its balance of ease-of-use, functionality and pricing.</p>

      <p class="medium">As a specialist in automation, Karina knew what was available on the market and felt Vero was an ideal fit.</p>
    </div>

    <blockquote class="case-study-callout bg-white border stack-md center-text">
      <p class="tubs quote">&ldquo;Vero was such a good match for the stage of the business. As about four years in, with a list of over close to half a million subscribers &mdash; we needed a certain level of functionality and analytics support to scale up.</p>

      <div class="author stack-xxs">
        <img class="align-middle border-radius-100" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/karina-may.jpg" srcset="/wp-content/themes/vero/assets/dist/images/case-study/plann/karina-may@2x.jpg 2x" alt="Karina May" height="56" width="56">
        <div>
          <span class="show anotation medium semi-bold">Karina May</span>
          <span class="show anotation">Chief Marketing Officer</span>
        </div>
      </div>
    </blockquote>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner small-inner stack-lg">
    <div class="stack-sm">
      <h2 class="chunk semi-bold">The solution</h2>
      <h3 class="tubs regular">⚙️ Connect with their marketing tools</h3>
    </div>

    <div class="full-bleed center-text">
      <img class="responsive-image align-middle"
        sizes="(min-width: 1024px) 1024px, 94vw"
        srcset="/wp-content/themes/vero/assets/dist/images/case-study/plann/diagram.svg 1039w,
          /wp-content/themes/vero/assets/dist/images/case-study/plann/diagram-mobile.svg 800w"
        src="/wp-content/themes/vero/assets/dist/images/case-study/plann/diagram.svg"
        alt="">
    </div>

    <div>
      <p class="medium">As a summary of the above, here’s how Plann’s integrations with Vero are set up:</p>

      <div class="stack-md">
        <p class="medium">Plann has four lead sources including WordPress, Unbounce, WebinarJam, and Facebook Ads</p>

        <ul class="plann-legend unstyled-list stack-sm">
          <li class="plann-key plann-key--1">
            <p class="medium">For WebinarJam and Facebook Ads, they use Zapier to pass the lead contacts from their webinars and Facebook Ads campaigns over to Vero.</p>
          </li>
          <li class="plann-key plann-key--2">
            <p class="medium">For WordPress, they use Vero’s embedded forms to import leads directly from their blog. And for Unbounce, they link up with Vero via webhook integration.</p>
          </li>
          <li class="plann-key plann-key--3">
            <p class="medium">Plann is using Vero’s Javascript and API to track events, to learn what their users are doing on the backend. They then pass this data over to Vero to trigger workflows.</p>
          </li>
          <li class="plann-key plann-key--3">
            <p class="medium">They also use a mix of server and Google Tag Manager (GTM) for event tracking. While server events are for logged-in user tracking via Javascript, GTM is for non logged-in user tracking.</p>
          </li>
        </ul>
      </div>
    </div>

    <div>
      <h3 class="tubs regular">👩‍💻 Empower marketing with data</h3>

      <p class="medium">With Vero’s flexible APIs, Plann was able to integrate the top-of-funnel and bottom-of-funnel data they needed into one platform.

      <p class="medium">This not only enhanced visibility for the marketing team, making it clear what data was available and safe to use, but gave marketing a “playground” they could use to iterate, test ideas, and get feedback. All without having to engage engineering for every minor change.</p>

      <p class="medium">&ldquo;Having the ability to have those event triggers means that we can use Vero for more sophisticated in-product emails as well, which I'm excited about because if you have something in the one system, you can then look at the whole behavior of contact versus what they did in this system and that system, explained Karina.</p>

      <p class="medium">Using Vero’s <strong>Segments</strong> and <strong>Workflows</strong> features enabled Plann’s marketing team to see and use data any time they need it, without having to wait days or weeks for space in the engineering team’s sprint cycle to open up.</p>

      <p class="medium">Karina shared that the very first workflow that they set up in Vero was a standard onboarding campaign, consisting of a two-week series and emails with valuable content.</p>
    </div>

    <div class="stack-lg">
      <div class="case-study-split case-study-split--1">
        <div class="flex flex-wrap items-center">
          <div>
            <a class="d-inline-block" href="#plann-workflow">
              <img class="border-radius-2 shadow-3 align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/workflow.png" srcset="/wp-content/themes/vero/assets/dist/images/case-study/plann/workflow@2x.png 2x" alt="">
            </a>
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
  <div class="inner small-inner stack-lg">
    <div class="case-study-callout bg-primary-lighter border-primary stack-sm">
      <h2 class="chunk semi-bold">The results</h2>

      <h3 class="tubs regular">🎯 Increased team confidence</h3>

      <p class="medium">Working with Vero, Plann was able to:</p>

      <ul class="medium stack-0">
        <li>Customize user properties to ensure data cleanliness.</li>
        <li>Create a more robust, scalable user experience.</li>
      </ul>

      <p class="medium">Vero’s flexible data properties and event tracking have empowered Plann’s operations team to set up their data their way, which ensures data cleanliness and readability. Plann, having invested in the process,  reaped the rewards in increased team confidence when segmenting users and creating campaigns.</p>
    </div>

    <div>
      <p class="medium">Messaging hundreds of thousand of users requires scalability, and Plann wanted to ensure they worked with a robust, global, scalable partner. As Plann’s audience is largely US-based, Karina (Sydney-based) remembers having to set her alarm for 04:00 am to ensure that emails had gone out on time.</p>
    </div>

    <div>
      <img class="border-radius-2 shadow-3 responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/image-2.jpg" srcset="/wp-content/themes/vero/assets/dist/images/case-study/plann/image-2@2x.jpg 2x" alt="Team Plann">
    </div>

    <div>
      <p class="large">“Vero makes me feel confident, as I’ve worked with systems where I schedule something and it doesn’t go out. I’ve never had that happen with Vero</p>
    </div>

    <div class="case-study-callout bg-primary-lighter border-primary stack-sm">
      <h3 class="tubs regular">🏃‍♀️ Get new ideas live, faster</h3>
      <p class="medium">With Vero, Plann has been able to:</p>

      <ul class="medium stack-0">
        <li>Update email content for automated messages without opening an engineering ticket.</li>
        <li>Create and use new customer segments quickly.</li>
        <li>Run A/B tests without writing code.</li>
      </ul>

      <p class="medium">Since moving to Vero, Plann has been able to run A/B tests and segment their audience quickly and easily. Karina said that they’ve seen an uplift in open rates as the cumulative result of experimenting with different subject lines across multiple follow-up emails, all segmented to the right audience to avoid message fatigue.</p>
    </div>

    <div>
      <p class="medium">She shared that by using Vero, Plann’s best performing open rate was at <strong>32.1%, averaging at 3% click-through-rate</strong> for their best performing content.</p>

      <p class="medium">And setting up segments within Vero, takes only minutes: &ldquo;It's so easy to set up segments including resend a. It literally takes five minutes to create, change the subject line and re-trigger our newsletter to unopens. We can easily bump our newsletter open rates to over 25% by doing these resends and through testing,&rdquo; said Karina.</p>
    </div>

    <div class="stack-xs center-text">
      <img class="d-inline-block border-radius-2 align-middle responsive-image shadow-3" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/newsletter.jpg" srcset="/wp-content/themes/vero/assets/dist/images/case-study/plann/newsletter@2x.jpg 2x" alt="">

      <p class="annotation font-gray-dark">Plann's email newsletter announcement of their integration with Canva, created in Vero</p>
    </div>

    <p class="medium">She believes that Vero was built for marketers, as it has helped empower non-technical team members to build email campaigns without much engineering support. &ldquo;Once our tech team has set up the event triggers, it’s really easy for our marketing team to build out emails and workflows without relying on IT help.&rdquo;</p>

    <div>
      <h3 class="tubs regular">🔮 Increased visibility</h3>

      <p class="medium">With Vero, Karina said Plann was able to improve their goal setting and feedback loop thanks to the increased visibility. Something as simple as seeing the overall results of a Workflow, and exporting or screenshotting the impact of each message within enables Plann to get the big picture view that they were looking for, fast.</p>
    </div>

    <blockquote class="case-study-callout bg-white border stack-md">
      <p class="tubs quote center-text">&ldquo;We were able to have a good idea of how our campaigns performed, without having to deep dive into analytics or set up something complicated for every little thing. Having the transparency of the lead source for database growth was huge for us.</p>
    </blockquote>

    <div>
      <h3 class="tubs regular">Vero: The perfect tool for startups scaling up fast </h3>

      <p class="medium">After trying on various ESPs for size, Karina said they’re really happy to have found Vero as it caters to the needs of an agile startup that’s scaling up quickly.</p>

      <p class="medium">&ldquo;Our database grows approximately 3-4% week-on-week, so it’s great to have a cost-effective platform to reliably manage and store contacts,&rdquo; she said.</p>
    </div>
  </div>
</section>
<section class="bg-dark-blue-lighter">
  <div class="inner small-inner">
    <blockquote class="center-text">
      <p class="tubs quote">&ldquo;Vero is constantly innovating and readily takes on product feature requests, so we’re confident that they’ll be able to scale with us.</p>

      <div class="author stack-xxs">
        <img class="align-middle border-radius-100" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/karina-may.jpg" srcset="/wp-content/themes/vero/assets/dist/images/case-study/plann/karina-may@2x.jpg 2x" alt="Karina May" height="56" width="56">
        <div>
          <span class="show anotation medium semi-bold">Karina May</span>
          <span class="show anotation">Chief Marketing Officer</span>
        </div>
      </div>
    </blockquote>
  </div>
</section>
<section class="bg-dark-blue border-bottom-faded">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk font-white">Scale up with Vero, and pay only for the features you want to use</h4>

    <a class="btn btn--success btn--large bottom-margin-sm track-start-trial"  element-position="bottom" href="https://app.getvero.com/signup">Start a free trial</a>

    <span class="show annotation font-gray-dark">No credit card details required</span>
  </div>
</section>
<a class="lightbox center-text fixed z-9999 items-center justify-center" id="plann-workflow" href="#none">
  <svg class="align-middle absolute pointer" xmlns="http://www.w3.org/2000/svg" width="32" height="32"><g fill="none" fill-rule="evenodd"><path fill="none" d="M0 0h32v32H0z"></path><path d="M23.071 8.929a1 1 0 010 1.414L17.414 16l5.657 5.657a1 1 0 01-1.414 1.414L16 17.414l-5.657 5.657a1 1 0 01-1.414-1.414L14.586 16l-5.657-5.657a1 1 0 011.414-1.414L16 14.586l5.657-5.657a1 1 0 011.414 0z" fill="#ffffff"></path></g></svg>

  <img class="align-middle responsive-image border-radius-2" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/workflow-full.png" srcset="/wp-content/themes/vero/assets/dist/images/case-study/plann/workflow-full@2x.png 2x" alt="Plann's workflow">
</a>
<?php
  no_content_genesis_footer();
?>