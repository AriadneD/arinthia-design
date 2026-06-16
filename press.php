<?php
  $page_title = "Press & Recognition · Ariadne Dulchinos";
  $page_description = "Press, interviews, and features on Ariadne Dulchinos and Avenir AI, including a16z Speedrun, Her Hustle, Steam Bloom, and D Quete.";
  $page_keywords = "Ariadne Dulchinos press, Avenir AI press, Ariadne Dulchinos interview, a16z Speedrun";
  $page_path = "press.php";
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/thin/style.css" />
</head>
<body>
    <?php include 'includes/nav.php'; ?>

    <!-- HERO -->
    <div class="content firstcont wash wash-dawn">
      <div class="innercont" style="padding-top: 150px; padding-bottom: 30px;">
        <a class="back-link" href="index.php">← Home</a>
        <span class="eyebrow" style="display:block; margin-top: 22px;">Press</span>
        <h1 class="proj-title" style="margin-top: 14px;">Press &amp; recognition</h1>
        <p class="proj-lede">
          Interviews, features, and honors across founder profiles, newsletters, and STEM communities.
        </p>
      </div>
    </div>

    <!-- FEATURED -->
    <div class="content">
      <div class="innercont" style="padding-top: 40px;">

        <div class="grid-head" data-aos="fade-up" data-aos-duration="1000">
          <span class="eyebrow">Featured</span>
          <h2 style="font-size: 30px; margin-top: 12px;">Selected coverage</h2>
        </div>

        <div class="press-grid" data-aos="fade-up" data-aos-duration="1000">

          <a class="press-card" href="https://speedrun.a16z.com/companies/avenir-ai/ariadne-dulchinos" target="_blank" rel="noopener">
            <div class="press-icon"><i class="ph-thin ph-rocket-launch"></i></div>
            <div class="press-meta">a16z Speedrun · Founder Profile</div>
            <h3 class="press-title">Ariadne Dulchinos, Avenir AI (Cohort 005)</h3>
            <p class="press-quote">Avenir AI's founder profile in a16z's Speedrun program, where Ari describes building an AI layer for employee benefits, from a domain ontology over messy benefits data to safety guardrails against hallucination.</p>
            <span class="press-cta">Read →</span>
          </a>

          <a class="press-card" href="https://www.herhustle.telilabs.com/p/speedrun-sora-sonnet" target="_blank" rel="noopener">
            <div class="press-icon"><i class="ph-thin ph-newspaper"></i></div>
            <div class="press-meta">Her Hustle · Teli Labs · Oct 2025</div>
            <h3 class="press-title">A new a16z Speedrun cohort</h3>
            <p class="press-quote">"Avenir AI, founded by MIT alums Ariadne Dulchinos and Maria Z., joined a16z's Speedrun after refining their healthcare platform to help HR leaders better support employees." Featured to a newsletter of 11,500+ readers.</p>
            <span class="press-cta">Read →</span>
          </a>

          <a class="press-card" href="https://www.steambloom.com/interview-with-ariadne-dulchinos" target="_blank" rel="noopener">
            <div class="press-icon"><i class="ph-thin ph-microphone-stage"></i></div>
            <div class="press-meta">Steam Bloom · Interview</div>
            <h3 class="press-title">From a 2nd-grade tech camp to MIT</h3>
            <p class="press-quote">A long-form interview on growing up in Barrington, RI, discovering CS by taking apart game consoles, studying Computation &amp; Cognition at MIT, and leading the mentorship program at MIT × Harvard Women in AI.</p>
            <span class="press-cta">Read →</span>
          </a>

          <a class="press-card" href="https://dquete.com/founder-interviews/f/interview-with-ariadne-dulchinos" target="_blank" rel="noopener">
            <div class="press-icon"><i class="ph-thin ph-chat-circle-text"></i></div>
            <div class="press-meta">D Quête · Founder Interview</div>
            <h3 class="press-title">Building at the edge of AI and health</h3>
            <p class="press-quote">A founder-interview feature on the path to co-founding Avenir, the research behind it, and what it takes to turn machine-learning research into a company.</p>
            <span class="press-cta">Read →</span>
          </a>

          <a class="press-card" href="https://www.youtube.com/watch?v=1e-qRrah-O0" target="_blank" rel="noopener">
            <div class="press-icon"><i class="ph-thin ph-play-circle"></i></div>
            <div class="press-meta">Video · Feature</div>
            <h3 class="press-title">Celebrating National Hispanic Heritage Month</h3>
            <p class="press-quote">A video feature spotlighting Ari, who is Honduran-American and a National Hispanic Scholar, as part of a Hispanic Heritage Month celebration of builders in tech.</p>
            <span class="press-cta">Watch →</span>
          </a>

          <a class="press-card" href="https://www.crimsonfounders.com/crimson-collective-week-1-uae-applicants" target="_blank" rel="noopener">
            <div class="press-icon"><i class="ph-thin ph-globe-hemisphere-east"></i></div>
            <div class="press-meta">Crimson Founders · Investopia, Abu Dhabi</div>
            <h3 class="press-title">Startup demo session in the UAE</h3>
            <p class="press-quote">Featured among startups selected to demo at the Crimson Founders session at Investopia in Abu Dhabi, taking the work to international founder and investor stages.</p>
            <span class="press-cta">Read →</span>
          </a>

        </div>
      </div>
    </div>

    <!-- INQUIRY -->
    <div class="content band wash wash-dawn" style="margin-top: 64px;">
      <div class="innercont" style="padding-top: 58px; padding-bottom: 62px;">
        <span class="eyebrow">Contact</span>
        <p style="margin-top: 14px; font-size: 19px;">
          Press or speaking inquiry? <a href="mailto:ari@avenir.com.ai">ari@avenir.com.ai</a>
        </p>
      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
