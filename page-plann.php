<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'case-study';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>

<section>
  <div class="inner large-inner">
    <div class="flex">
      <div>
        <span class="semi-bold font-gray-dark">Case study</span>
        <h1 class="biggie">Plann is an Instagram scheduling app for travel, fashion, and lifestyle brands</h1>
        <div class="large">Their goal? Move faster as a marketing team.</div>

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
      <div></div>
    </div>
  </div>
</section>
<section>
  <div class="inner small-inner stack-lg">
    <p class="large">A semi-remote, 50-person team headquartered in Sydney, Australia, Plann is an Instagram scheduling app for travel, fashion, and lifestyle brands. They enable their customers to plan, schedule, and explore campaign analytics.</p>
    <p class="medium">They’re a product-led business that launches regular new releases and features for their customers, so being able to send impactful messages that are tightly-integrated with their core product is critical.</p>

    <h2 class="chunk semi-bold">The Challenge: a small team juggling lots of users </h2>
    <p class="medium">Plann is a data-driven company that needs to be on top of their numbers and analytics to drive growth. Their CMO, Karina May, said that it was previously challenging for them to be data-driven while keeping up the pace of innovation. That’s because they don’t have a dedicated business intelligence, email, or CRM team to manage their analytics and messaging full-time. To keep scaling up, the right tooling was crucial and Plann had outgrown their prior stack.</p>

    <p class="medium">In the past, the tools they were using lacked transparency and flexibility. Not only were they not providing Plann with the view they needed of their campaign successes, but they couldn’t move as quickly as they needed to drive the business forward.</p>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>