<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'case-study';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>

<section class="case-study-hero case-study-hero--wiw border-bottom overflow-hidden">
  <div class="inner large-inner stack-lg">
    <span class="show annotation semi-bold uppercase tracked font-gray-dark">Case study</span>

    <svg class="align-middle" width="168" height="31" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M163.183 22.763a2.716 2.716 0 00-.213-.42l-3.68-5.683 3.18-3.602c.122-.154.213-.3.274-.438a.966.966 0 00.092-.39.348.348 0 00-.074-.224.542.542 0 00-.261-.152 2.455 2.455 0 00-.5-.092 8.097 8.097 0 00-.762-.03c-.308 0-.562.01-.761.03a2.69 2.69 0 00-.5.092.842.842 0 00-.322.17 1.35 1.35 0 00-.22.256l-3.216 4.32V8.185a.356.356 0 00-.074-.219.544.544 0 00-.25-.164 2.093 2.093 0 00-.468-.103 6.164 6.164 0 00-.744-.037c-.3 0-.548.012-.743.037a2.098 2.098 0 00-.469.103.545.545 0 00-.25.164.356.356 0 00-.073.22v14.888c0 .08.025.151.073.213.05.06.133.111.25.152.118.04.274.07.47.09.194.021.442.031.742.031.301 0 .549-.01.744-.03.195-.02.351-.05.469-.091a.535.535 0 00.25-.152.332.332 0 00.073-.213V17.33l3.618 5.72c.057.105.122.19.195.255a.763.763 0 00.31.152c.135.036.306.063.513.079.207.016.477.024.81.024.325 0 .589-.01.792-.03.203-.02.363-.049.481-.085.118-.037.2-.086.244-.146a.35.35 0 00.067-.213.915.915 0 00-.067-.323zm-11.597-10.611a1.031 1.031 0 00-.054-.201.379.379 0 00-.098-.134.669.669 0 00-.213-.115 3.261 3.261 0 00-1.06-.177c-.227 0-.455.03-.682.091-.228.061-.455.169-.683.323a4.542 4.542 0 00-.719.627c-.251.263-.52.598-.804 1.003v-1.35a.374.374 0 00-.06-.213.446.446 0 00-.202-.152 1.458 1.458 0 00-.396-.092c-.17-.02-.385-.03-.645-.03-.252 0-.461.01-.628.03-.166.02-.302.05-.408.092a.446.446 0 00-.22.152.374.374 0 00-.06.213v10.855c0 .08.024.151.073.213.049.06.132.111.25.152.117.04.274.07.469.09.195.021.442.031.743.031.3 0 .548-.01.743-.03.195-.02.352-.05.47-.091.117-.04.2-.092.25-.152a.331.331 0 00.072-.213v-6.766c.228-.358.44-.658.64-.901.199-.243.39-.438.572-.584.183-.146.36-.254.53-.323.171-.069.342-.103.512-.103.146 0 .28.014.402.043.122.028.234.058.335.09.102.033.193.064.274.092a.665.665 0 00.22.043.32.32 0 00.2-.061.43.43 0 00.129-.22 2.17 2.17 0 00.073-.437c.016-.187.024-.426.024-.718s-.004-.524-.012-.694a2.994 2.994 0 00-.037-.383zm-11.88 7.046c-.106.45-.269.833-.488 1.15-.22.316-.5.557-.84.724-.342.166-.744.25-1.207.25-.503 0-.926-.092-1.267-.275a2.06 2.06 0 01-.81-.772 3.66 3.66 0 01-.433-1.175 7.618 7.618 0 01-.133-1.478c0-.576.054-1.09.164-1.54.11-.45.274-.835.493-1.156.22-.32.5-.563.841-.73.341-.166.74-.25 1.194-.25.512 0 .936.094 1.273.28.337.187.607.447.81.78.203.332.348.723.433 1.174.085.45.128.943.128 1.478 0 .576-.053 1.09-.158 1.54zm1.93-6.115c-.466-.512-1.057-.899-1.772-1.162-.715-.264-1.56-.396-2.534-.396-1 0-1.87.15-2.614.45-.743.3-1.362.724-1.858 1.272a5.337 5.337 0 00-1.114 1.971c-.248.767-.372 1.613-.372 2.538 0 .957.114 1.809.341 2.555.227.747.576 1.375 1.048 1.886.47.511 1.064.9 1.779 1.169.714.267 1.555.401 2.521.401 1 0 1.873-.15 2.62-.45a4.923 4.923 0 001.864-1.278 5.34 5.34 0 001.109-1.971c.244-.763.365-1.607.365-2.531 0-.966-.113-1.822-.34-2.568-.228-.747-.575-1.375-1.042-1.886zm-9.723-4.825c.012-.175-.026-.306-.116-.396-.09-.09-.233-.144-.432-.164a8.84 8.84 0 00-.835-.03c-.382 0-.678.01-.89.03-.21.02-.373.056-.487.11a.439.439 0 00-.231.218 1.57 1.57 0 00-.098.335l-2.765 12.023h-.025L123.061 8.41a1.279 1.279 0 00-.133-.39.552.552 0 00-.275-.225 1.768 1.768 0 00-.536-.103 14.161 14.161 0 00-.932-.025c-.365 0-.658.01-.877.03-.22.021-.392.057-.518.11a.516.516 0 00-.268.226 1.41 1.41 0 00-.128.377l-2.875 11.974h-.013l-2.765-12.06a1.354 1.354 0 00-.098-.359.403.403 0 00-.231-.194 1.722 1.722 0 00-.506-.085 17.5 17.5 0 00-.907-.019c-.415 0-.738.01-.97.03-.23.021-.397.076-.499.165-.101.09-.148.217-.14.383.008.167.05.396.122.688l3.582 13.739c.049.195.11.351.183.468.073.118.19.207.353.268.163.061.384.102.664.122.28.02.656.03 1.127.03.447 0 .806-.01 1.079-.03.272-.02.487-.063.645-.128a.707.707 0 00.347-.274c.074-.117.13-.27.171-.456l2.388-9.979h.024l2.522 9.979c.041.195.098.351.171.468.073.118.19.207.354.268.162.061.383.102.663.122.28.02.652.03 1.115.03.414 0 .756-.01 1.024-.03.268-.02.487-.06.658-.122a.78.78 0 00.383-.268 1.35 1.35 0 00.201-.468l3.62-13.703c.072-.3.115-.537.127-.711zM104.918 7.8a2.577 2.577 0 00-.488-.097 6.801 6.801 0 00-.78-.037c-.308 0-.564.013-.767.037a2.727 2.727 0 00-.494.097.563.563 0 00-.267.158.339.339 0 00-.08.22v14.87c0 .081.027.154.08.22.052.064.14.117.261.158.122.04.287.072.494.097.207.024.465.036.773.036.317 0 .577-.012.78-.036.203-.025.366-.057.488-.097a.558.558 0 00.262-.159.339.339 0 00.079-.219V8.18a.34.34 0 00-.08-.22.562.562 0 00-.261-.158zm-9.828 5.08a3.273 3.273 0 00-1.23-.99c-.509-.244-1.132-.366-1.871-.366-.674 0-1.322.162-1.943.487-.622.324-1.233.811-1.834 1.46V12.22a.374.374 0 00-.061-.213.446.446 0 00-.201-.152 1.456 1.456 0 00-.396-.092c-.17-.02-.386-.03-.646-.03-.252 0-.46.01-.627.03-.167.02-.303.05-.408.092a.446.446 0 00-.22.152.374.374 0 00-.06.213v10.855c0 .08.024.151.073.213.048.06.132.111.25.152.117.04.273.07.468.09.195.021.443.031.744.031.3 0 .548-.01.743-.03.195-.02.351-.05.469-.091a.535.535 0 00.25-.152.33.33 0 00.073-.213v-7.217c.43-.543.845-.957 1.243-1.241.397-.284.791-.426 1.181-.426.31 0 .58.059.81.177.232.117.42.284.567.498.146.215.258.473.335.773.077.3.116.714.116 1.241v6.195c0 .08.024.151.073.213.049.06.13.111.244.152.113.04.27.07.469.09.199.021.449.031.75.031.291 0 .537-.01.736-.03.2-.02.355-.05.47-.091a.534.534 0 00.243-.152.331.331 0 00.073-.213v-6.706c0-.786-.069-1.46-.207-2.02a4.028 4.028 0 00-.676-1.466zm-18.783 3.573c.016-.382.075-.74.176-1.078.102-.336.248-.628.439-.876.19-.247.43-.444.719-.59a2.226 2.226 0 011.017-.219c.772 0 1.342.245 1.712.736.37.491.542 1.167.518 2.027h-4.581zm6.347-3.414c-.414-.474-.944-.846-1.59-1.113-.645-.268-1.423-.402-2.333-.402-.86 0-1.634.142-2.32.426a4.717 4.717 0 00-1.75 1.235c-.478.54-.844 1.197-1.096 1.972-.252.774-.377 1.644-.377 2.61 0 1.014.12 1.898.359 2.653.24.754.603 1.38 1.09 1.874.488.495 1.095.864 1.822 1.107.727.243 1.574.365 2.54.365.536 0 1.04-.034 1.511-.103.471-.07.89-.15 1.255-.244a6.8 6.8 0 00.902-.286c.235-.097.38-.174.432-.23a.838.838 0 00.128-.177.773.773 0 00.073-.225c.016-.09.029-.197.037-.323a7.34 7.34 0 00-.006-.961 1.017 1.017 0 00-.067-.31.318.318 0 00-.122-.153.36.36 0 00-.183-.042c-.122 0-.28.038-.475.115-.195.077-.44.163-.737.256a9.316 9.316 0 01-1.054.255 7.639 7.639 0 01-1.414.116c-.528 0-.98-.069-1.358-.207a2.283 2.283 0 01-.926-.602 2.4 2.4 0 01-.524-.962 4.51 4.51 0 01-.164-1.259h6.615c.293 0 .522-.09.689-.268.166-.178.25-.454.25-.827v-.487c0-.763-.098-1.468-.293-2.117a4.493 4.493 0 00-.914-1.686zm-11.936-.152a3.247 3.247 0 00-1.23-.998c-.508-.243-1.131-.365-1.87-.365-.593 0-1.164.128-1.712.383-.548.256-1.086.643-1.615 1.163V8.185a.356.356 0 00-.073-.219.546.546 0 00-.25-.164 2.092 2.092 0 00-.468-.103 6.162 6.162 0 00-.744-.037c-.3 0-.548.012-.743.037a2.09 2.09 0 00-.469.103.544.544 0 00-.25.164.356.356 0 00-.073.22v14.888c0 .08.025.151.073.213.05.06.132.111.25.152.118.04.274.07.47.09.194.021.442.031.742.031s.549-.01.744-.03c.195-.02.351-.05.469-.091a.537.537 0 00.25-.152.331.331 0 00.072-.213v-7.217c.431-.543.845-.957 1.243-1.241.398-.284.792-.426 1.182-.426.309 0 .579.059.81.177.232.117.42.284.567.498.146.215.258.473.335.773.077.3.116.714.116 1.241v6.195c0 .08.024.151.073.213.049.06.13.111.244.152.113.04.27.07.469.09.199.021.448.031.749.031.292 0 .538-.01.737-.03.2-.02.355-.05.47-.091a.536.536 0 00.243-.152.331.331 0 00.073-.213v-6.657c0-.803-.07-1.486-.207-2.05a4.085 4.085 0 00-.677-1.48zm-11.344-5.19c-.2-.02-.478-.03-.835-.03-.382 0-.678.01-.89.03-.21.02-.373.056-.487.11a.438.438 0 00-.231.218c-.04.094-.073.205-.098.335l-2.765 12.023h-.025L51.07 8.41a1.279 1.279 0 00-.134-.39.55.55 0 00-.274-.225 1.765 1.765 0 00-.536-.103 14.157 14.157 0 00-.932-.025c-.366 0-.658.01-.877.03-.22.021-.392.057-.518.11a.515.515 0 00-.268.226 1.395 1.395 0 00-.128.377l-2.875 11.974h-.013L41.75 8.324a1.346 1.346 0 00-.098-.359.404.404 0 00-.231-.194 1.724 1.724 0 00-.506-.085 17.505 17.505 0 00-.908-.019c-.414 0-.737.01-.968.03-.232.021-.398.076-.5.165-.101.09-.148.217-.14.383.008.167.049.396.122.688l3.582 13.739c.049.195.11.351.183.468.073.118.19.207.353.268.163.061.384.102.664.122.28.02.656.03 1.127.03.447 0 .806-.01 1.078-.03.273-.02.488-.063.646-.128a.706.706 0 00.347-.274c.074-.117.13-.27.171-.456l2.388-9.979h.024l2.522 9.979c.041.195.098.351.17.468.074.118.192.207.354.268.163.061.384.102.664.122.28.02.652.03 1.115.03.414 0 .756-.01 1.024-.03.268-.02.487-.06.657-.122a.78.78 0 00.384-.268c.086-.117.153-.273.201-.468l3.619-13.703c.073-.3.116-.537.128-.711.012-.175-.027-.306-.116-.396-.09-.09-.233-.144-.432-.164zM166.268 9.137c-.1-.057-.263-.085-.486-.085h-.343v.825h.363c.17 0 .298-.017.383-.051.156-.062.235-.18.235-.356 0-.166-.05-.277-.152-.333zm-.433-.359c.282 0 .49.028.621.082.236.098.354.29.354.577 0 .203-.074.353-.222.45a.866.866 0 01-.33.11c.178.028.309.102.391.222.083.12.124.238.124.353v.166c0 .053.002.11.006.17.004.06.01.1.02.118l.014.028h-.376l-.006-.022-.006-.026-.008-.073v-.18c0-.263-.072-.436-.215-.52-.085-.05-.234-.074-.446-.074h-.317v.895h-.402V8.778h.798zm-1.222-.116c-.346.349-.52.77-.52 1.263 0 .497.172.92.518 1.27.346.35.768.525 1.263.525.496 0 .917-.175 1.264-.525.347-.35.52-.773.52-1.27 0-.494-.173-.914-.52-1.263a1.718 1.718 0 00-1.264-.525c-.492 0-.912.175-1.26.525zm2.731 2.73a2 2 0 01-1.47.61 1.99 1.99 0 01-1.467-.61 2.013 2.013 0 01-.602-1.47c0-.57.202-1.058.608-1.463.403-.403.89-.604 1.461-.604a2.01 2.01 0 011.47.604c.406.403.608.89.608 1.463 0 .574-.202 1.064-.608 1.47z" fill="#6B6B68"/><path d="M15.467 28.455c-7.133 0-12.914-5.782-12.914-12.914S8.334 2.627 15.467 2.627c7.132 0 12.913 5.782 12.913 12.914S22.6 28.455 15.467 28.455zm0-28.38C6.925.075 0 7 0 15.54c0 8.542 6.925 15.467 15.467 15.467 8.541 0 15.466-6.925 15.466-15.467C30.933 7 24.008.075 15.467.075zm7.472 14.142h-11.18a.85.85 0 00-.851.85v.978c0 .47.38.85.85.85h11.18c.47 0 .85-.38.85-.85v-.978a.85.85 0 00-.85-.85zM9.007 12.053h11.18c.47 0 .85-.38.85-.85v-.978a.85.85 0 00-.85-.85H9.007a.85.85 0 00-.85.85v.978c0 .47.38.85.85.85zm11.18 7.006H9.007a.85.85 0 00-.85.85v.978c0 .47.38.85.85.85h11.18c.47 0 .85-.38.85-.85v-.977a.85.85 0 00-.85-.85z" fill="#5CA244"/></g></svg>

    <div class="flex flex-wrap">
      <div class="col-main stack-lg">
        <div class="stack-sm">
          <h1 class="biggie">When I Work is a fully-integrated scheduling, time tracking, and team messaging tool for businesses</h1>
          <div class="large">Their goal? Have a holistic view of customer engagement.</div>
        </div>

        <div class="stack-sm">
          <h2 class="annotation semi-bold uppercase">Challenges</h2>

          <ul class="stack-xs">
            <li>
              <p>Inability to access customer interaction history, monitor engagement and understand the impact of communications on the customer lifecycle.</p>
            </li>
            <li>
              <p>Inability to report on campaign effectiveness adequately and to see how campaigns are impacting the business.</p>
            </li>
            <li>
              <p>Difficulty using current tools with confidence resulting in having to hire a tool specialist or agency, incurring extra costs.</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-aside flex items-start relative">
        <img class="align-middle lg-left-margin-auto" src="/wp-content/themes/vero/assets/dist/images/case-study/wiw/hero.jpg" srcset="/wp-content/themes/vero/assets/dist/images/case-study/wiw/hero@2x.jpg 2x" alt="When I Work company">

        <svg class="absolute" width="202" height="134" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><text font-family="AvenirNext-DemiBold, Avenir Next" font-size="36" font-weight="500" fill="#384254" transform="translate(-523 -265)"><tspan x="33" y="361">Plann is an Instagram </tspan> <tspan x="33" y="411">scheduling a for travel, </tspan> <tspan x="33" y="461">fashion, and lifestyle brands</tspan></text><path d="M38 133h-4.055c-18.01 0-32.61-14.6-32.61-32.61 0-18.01 14.6-32.61 32.61-32.61H167.59c18.44 0 33.39-14.95 33.39-33.39C200.98 15.949 186.03 1 167.59 1H65.777h0" stroke="#6FD350" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="3,8"/></g></svg>

        <svg class="absolute" width="193" height="117" xmlns="http://www.w3.org/2000/svg"><path d="M1.512 116h132.9c16.4 0 29.693-13.294 29.693-29.693 0-16.398-13.294-29.692-29.693-29.692h-23.2c-15.358 0-27.808-12.45-27.808-27.808C83.404 13.45 95.854 1 111.212 1H193" stroke="#FFC111" stroke-width="2" fill="none" fill-rule="evenodd" stroke-dasharray="3,8" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
    </div>

  </div>
</section>

<div class="inner small-inner stack-lg">
  <div>
    <p class="medium">Minneapolis-based <a class="semi-bold underline-link" href="https://wheniwork.com">When I Work</a> is an employee scheduling app for the modern workforce, helping companies of all sizes. Their customers include companies with just a handful of team members to those with thousands of employees.</p>

    <p class="medium">Over the past decade, they’ve worked with thousands of businesses and have evolved their product along the way. When I Work is a true product-first company, enabling businesses to self-serve and scale with them as they grow.</p>

    <p class="medium">We spoke with Ellen Falk, Senior Manager of Lifecycle Marketing, to learn more about When I Work and their experiences with Vero. Ellen is responsible for the company’s lifecycle marketing strategy and execution. She says her three-person team relies on lifecycle messaging, primarily email, to nurture and support customers throughout their journey.</p>
  </div>

  <div class="case-study-callout bg-primary-lighter border-primary stack-sm">
    <h2 class="chunk semi-bold">The Challenge: A pragmatic, data-driven company hamstrung by old tooling</h2>

    <p class="medium">When I Work needed a customer communications tool that would enable them to continue scaling without slowing their team down.</p>

    <p class="medium">The three main challenges with their current tool?</p>

    <ul class="medium stack-0">
      <li>Difficult to create or update automated communications, requiring a <strong>software specialist</strong> with deep product knowledge in order to use the tool. This resource became a costly bottleneck, blocking When I Work from scaling up.</li>
      <li>Unable to export their campaign data (customer engagement data) for complex analysis in their own data warehouse and BI tools.</li>
      <li>Inability to integrate deeply with their core software stack.</li>
    </ul>
  </div>

  <div>
    <p class="medium">&ldquo;Limitations on how much data could be extracted prevented us from understanding the full impact of our campaigns. We could never really find out how our campaigns were supporting our customers or impacting the business,&rdquo; said Ellen.</p>

    <p class="medium">To make matters worse, the tool they were using was not very intuitive, so When I Work had to hire a certified expert to help them use the software. When this employee left the company, they had to bring an agency on board.</p>
  </div>

  <blockquote class="case-study-callout bg-white border stack-md center-text">
    <p class="tubs quote">&ldquo;It was great to find an intuitive platform like Vero. We no longer require technical expertise to build personalized, sophisticated campaigns&mdash;the strategists on the team and I feel very confident using it</p>

    <div class="author stack-xxs">
      <img class="align-middle border-radius-100" src="/wp-content/themes/vero/assets/dist/images/case-study/wiw/ellen-falk.jpg" srcset="/wp-content/themes/vero/assets/dist/images/case-study/wiw/ellen-falk@2x.jpg 2x" alt="Ellen Falk" height="56" width="56">

      <div>
        <span class="show medium semi-bold">Ellen Falk</span>
        <span class="show medium">Senior Manager of Lifecycle Marketing</span>
      </div>
    </div>
  </blockquote>

  <p class="medium">These challenges slowed them down and incurred extra costs, so Ellen and her team set their sights on a new tool.

  <div class="center-text">
    <p class="center-text">[Add team photo]</p>
  </div>

  <div>
    <p class="medium">With the help of Founder Chad Halvorson, When I Work switched to Vero&mdash;a tool that both the marketing and data engineering teams approved of</p>
  </div>

  <blockquote class="case-study-callout bg-white border stack-md center-text">
    <p class="tubs quote">&ldquo;Vero removes the major bottleneck of having all campaigns built by one resource, plus it doesn't require us to pay for both a product and a person who understands how to use it.</p>
  </blockquote>
</div>

<section class="double-padding bg-dark-blue-lighter">
  <div class="inner small-inner stack-lg">
    <div class="stack-sm">
      <h2 class="chunk semi-bold">The solution</h2>
      <h3 class="tubs regular">🔁 Export message interactions to their data warehouse</h3>

      <p class="medium">&ldquo;We are a very data-driven company, and wanted a tool that would allow us access to the raw data so we could see what our customers were engaging with, what campaigns they were part of, and understand the impact of those on our customers’ lifecycle,&rdquo; said Ellen.</o>

      <p class="medium">Their previous tool didn’t let them extract campaign interaction data to their own data warehouse, so When I Work didn’t know how their campaigns were truly performing.</p>

      <p class="medium">With Vero, this has been an entirely different story. Vero sends a copy of every single message interaction to When I Work’s data warehouse. Having access to this data, they can now use their own data science or BI tools to do advanced analytics.</p>
    </div>

    <div class="full-bleed center-text">
      <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/case-study/wiw/diagram.svg" alt="When I Work marketing stack">
    </div>

    <div>
      <h3 class="tubs regular">⚙️ Personalize emails at scale for marketers</h3>

      <p class="medium">As a lifecycle marketer onboarding large numbers of users (both managers and schedulers), Ellen needed to be able to personalize product adoption campaigns at scale.

      <p class="medium">Used to complex templating languages and confusing rules in other tools, Ellen thought it would take considerable time to learn personalization in Vero. In reality, it took her just 10 minutes to get an understanding of how Vero’s templating engine worked.</p>

      <p class="medium">&ldquo;We love Liquid logic. With the previous tool we were using, you were limited to how much you could personalize in an email. And if you wanted to do segmentation, there were only a few choices,&rdquo; she shared.</p>

      <p class="medium">&ldquo;With Vero, being able to have a fully dynamic email for our customers is just super exciting for a lifecycle marketer - I could talk about it all day.&rdquo;</p>

      <p class="medium">All of Vero’s campaigns are built on top of Liquid, an open-source templating language. Using Liquid, When I Work has been able to include dynamic content in their emails and cater to millions of customers from different industries while keeping their campaign content editable and accessible for all team members.</p>
    </div>

    <div>
      <h3 class="tubs regular">👩‍💻 Visual workflows that are shareable and easy to test</h3>

      <p class="medium">Vero’s visual <a class="underline-link semi-bold" href="/workflows/">Workflows</a> allow for a clear picture of the triggers, conditions, filters, and content that power automated lifecycle messaging campaigns. Thanks to the visual nature of Vero’s workflows, the When I Work marketing team has been able to share their work with internal partners and get broader buy-in for new campaigns and ideas.</p>
    </div>

    <blockquote class="case-study-callout bg-white border stack-md center-text">
      <p class="tubs quote">&ldquo;I communicate my ideas visually, so I love that Vero makes it so much easier and faster for me to build something, then share with partners in the wider team so they can see what we’re trying to accomplish.</p>
    </blockquote>

    <div>
      <p class="medium">Given When I Work’s large user base, the team found Vero’s <strong >Workflows</strong> particularly valuable when creating segments, along with the ability to quickly iterate on ideas, launch campaigns, and test for optimum results.

      <p class="medium">Besides being able to create unlimited branches within workflows, a powerful feature that the When I Work team loves is the ability to <strong>converge</strong> paths. This is because bringing journeys back together was something they were unable to do with their previous tool. This has helped reduce duplication, resulting in faster iteration on new campaign ideas.
    </div>

    <div class="center-text">
      <img class="border-radius-2 shadow-3 align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/case-study/wiw/workflow.png" alt="When I Work's workflow">
    </div>

    <div>
      <p class="medium">With Vero, When I Work has been able to craft different email experiences for both small and large businesses, resulting in a smoother and more targeted customer experience.

      <p class="medium">&ldquo;For various customers, we alter the time delay of messages within workflows because the larger customers we’ve worked with have a longer decision-making cycle, versus smaller customers that might convert within days,&rdquo; Ellen said.</p>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner small-inner stack-lg">
    <div class="case-study-callout bg-primary-lighter border-primary stack-sm">
      <h2 class="chunk semi-bold">The results</h2>

      <h3 class="tubs regular">🎯 A scalable, customer-first sales process</h3>

      <p class="medium">With their customers assigned to different lifecycle stages, Vero has helped When I Work get a detailed overview of which campaigns are a part of which stages and whether these campaigns are moving customers along their individual journeys to the next step.</p>
    </div>

    <div>
      <p class="medium">When I Work has also been able to automate touch points from their sales and customer success teams with Vero. And by using Liquid, they’ve been able to send emails from different sales representatives, adding a personal touch to their customer messaging and streamlining their sales team’s processes.</p>

      <p class="medium">Ellen added that these new personalized streams have allowed the When I Work team to reduce friction and optimize the customer experience&mdash;<strong>reducing the buying timeline by 25%</strong>.</p>
    </div>

    <blockquote class="case-study-callout bg-white border stack-md center-text">
      <p class="tubs quote">&ldquo;Our customers are at the center of everything we do. And one of the key benefits of Vero is that it allows us to personalize in a way that every campaign and interaction is putting the customer first, and meeting them where they are in their journey.</p>
    </blockquote>

    <div class="stack-sm">
      <h3 class="tubs regular">🏃‍♀️ Get new ideas <strong>live</strong>, faster</h3>

      <p class="medium">With Vero, When I Work has been able to:</p>

      <ul class="medium stack-0">
        <li>Personalize email programs at scale.</li>
        <li>Improve their speed to market.</li>
        <li>Create longer campaigns faster.</li>
      </ul>

      <p class="medium">Since switching to Vero, Ellen says that her team has created campaigns in a &ldquo;better, smarter, and faster&rdquo; way. They’ve also been able to create long campaigns that continue for weeks or even months, extending the touchpoints they have with customers.</p>
    </div>

    <div>
      <h3 class="tubs regular">🚀 Empower non-technical marketers</h3>

      <p class="medium">In the past, the When I Work team had to rely on an internal expert&mdash;and eventually an agency&mdash;to create their marketing campaigns.</p>

      <p class="medium">With Vero they’ve been able to take back the reins and create their own campaigns, saving time and money. In fact, Ellen shared that they were able to cut down on the internal hours spent on <strong>email marketing by 50%</strong>.</p>
    </div>

    <blockquote class="case-study-callout bg-white border stack-md center-text">
      <p class="tubs quote">&ldquo;Our speed to market has improved. We went from it taking weeks, to taking just days to build and launch a multi-email workflow.</p>
    </blockquote>

    <div>
      <p class="medium">And beyond learning how to use Liquid and create dynamic content in minutes, Ellen also said that Vero’s new Drag and Drop email content editor has empowered a non-technical marketer like herself to build beautiful, compliant emails from scratch.</p>

      <p class="medium">&ldquo;As someone who doesn’t have extensive experience with HTML, drag and drop has been such a fun and easy way to build an email.</p>
    </div>

    <div class="stack-xs center-text">
      <img class="d-inline-block border-radius-2 align-middle responsive-image shadow-3" src="/wp-content/themes/vero/assets/dist/images/case-study/wiw/newsletter.png" alt="When I Work's email newsletter" style="width: 84%;">

      <p class="annotation font-gray-dark">When I Work's email newsletter created in Vero</p>
    </div>

    <p class="medium">She believes that Vero was built for marketers, as it has helped empower non-technical team members to build email campaigns without much engineering support. &ldquo;Once our tech team has set up the event triggers, it’s really easy for our marketing team to build out emails and workflows without relying on IT help.&rdquo;</p>

    <div>
      <h3 class="tubs regular">Vero: The perfect tool for personalization</h3>

      <p class="medium">The most positive change to come to When I Work has been the ability to personalize their email programs at a whole new level. Driven by the ease of use and ability to quickly iterate on ideas, the result has been a boost in team productivity and quality in customer messaging.</p>

      <p class="medium">&ldquo;Our <strong>database grows approximately 3-4%</strong> week-on-week, so it’s great to have a cost-effective platform to reliably manage and store contacts,&rdquo; she said.</p>
    </div>
  </div>
</section>
<section class="bg-dark-blue-lighter">
  <div class="inner small-inner">
    <blockquote class="center-text">
      <p class="tubs quote">&ldquo;Adopting Vero, allowing us to create those dynamic pieces, and really improve what we're doing has been huge. Our speed to market has also improved, and the team has been able to crank things out faster, and still ensure messages that are personalized to a stronger degree.</p>

      <div class="author stack-xxs">
        <img class="align-middle border-radius-100" src="/wp-content/themes/vero/assets/dist/images/case-study/wiw/ellen-falk.jpg" srcset="/wp-content/themes/vero/assets/dist/images/case-study/wiw/ellen-falk@2x.jpg 2x" alt="Ellen Falk" height="56" width="56">
        <div>
          <span class="show medium semi-bold">Ellen Falk</span>
          <span class="show medium">Senior Manager of Lifecycle Marketing</span>
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
<?php
  no_content_genesis_footer();
?>