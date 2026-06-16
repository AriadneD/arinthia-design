<!DOCTYPE html>
<html>
<head>
  	<?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/thin/style.css" />
  </head>

  <body>
    <?php include 'includes/nav.php'; ?>

<!-- ===================== HERO ===================== -->
<div class="content firstcont wash wash-dawn">
  <img class="hero-bg" aria-hidden="true" alt="" src="images/brain-sunrise.svg" />
  <div class="innercont hero-wrap">
    <div class="flexrow" style="padding: 40px 0px; justify-content: space-between; align-items: center; gap: 50px;">

      <div class="flexcol" style="justify-content: center;">
        <span class="eyebrow" data-aos="fade" data-aos-duration="1500">Founder · Researcher · Engineer</span>
        <h1 data-aos="fade" data-aos-duration="2000" style="margin-top: 18px;">
          Ariadne Maria Dulchinos
        </h1>

        <h3 class="titleh" data-aos="fade" data-aos-duration="2000" style="margin-top: 20px; color: var(--ink);">
          I build machine learning systems for <span class="typewrite" data-period="2200" data-type='[ "human data.", "biological data.", "healthcare data.", "human, biological, and healthcare data." ]'>
            <span class="wrap"></span>
          </span>
        </h3>

        <p data-aos="fade" data-aos-duration="2000" style="margin-top: 22px; max-width: 560px;">
          MIT MEng and BSc in Computation and Cognition. Co-founder and CTO of Avenir. My work spans digital phenotyping, clinical prediction, biofabrication, geospatial health, and healthcare decision systems.
        </p>

        <div style="margin-top: 30px;">
          <a data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400" class="btn solid" href="https://www.linkedin.com/in/ariadnedulchinos/">LinkedIn</a>&nbsp;&nbsp;
          <a data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" class="btn" href="https://github.com/AriadneD">GitHub</a>&nbsp;&nbsp;
          <a data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600" class="btn" href="index.php#works">Work</a>
        </div>
      </div>

      <div data-aos="fade" data-aos-duration="2000" class="pfp-frame">
        <img class="pfp" src="images/aripfp.png" alt="Ariadne Dulchinos" />
      </div>

    </div>
  </div>
</div>

<!-- ===================== RESEARCH FOCUS ===================== -->
<a name="focus"></a>
<div class="content">
  <div class="innercont" style="padding-top: 40px;">

    <div class="grid-head" data-aos="fade-up" data-aos-duration="1000">
      <span class="eyebrow">Research Focus</span>
      <h2 style="font-size: 32px; margin-top: 12px;">Problems I keep returning to</h2>
      <p style="margin-top: 12px; max-width: 820px;">
        My work studies how machine learning can infer latent state from noisy, heterogeneous data. I have worked across passive sensing, clinical movement data, biomedical process variables, geospatial risk, and healthcare datasets. The common problem is measurement: how to recover useful structure from signals that are incomplete, indirect, and collected outside ideal experimental conditions.
      </p>
    </div>

    <div class="focus-grid" data-aos="fade-up" data-aos-duration="1000">

      <div class="focus-item">
        <div class="focus-icon"><i class="ph-thin ph-pulse"></i></div>
        <h3>Human behavior and physiological intelligence</h3>
        <p>Human behavior produces continuous low-friction signals: movement, sleep-wake timing, device interaction, motor control, and changes in daily rhythm. I model these signals to estimate behavioral, physiological, and clinical state. This area sits closest to my training in computer science and neuroscience, especially in passive sensing, digital phenotyping, and clinically relevant prediction.</p>
      </div>

      <div class="focus-item">
        <div class="focus-icon"><i class="ph-thin ph-stethoscope"></i></div>
        <h3>Healthcare decision systems</h3>
        <p>Healthcare data is delayed, siloed, and usually analyzed after the most important decisions have already been made. At Avenir, I build systems that integrate claims, benefits, vendor, and population-level data so organizations can identify cost drivers, risk concentration, and intervention opportunities with more precision. I am interested in how AI can support decision-making under uncertainty, not just summarize existing reports.</p>
      </div>

      <div class="focus-item">
        <div class="focus-icon"><i class="ph-thin ph-dna"></i></div>
        <h3>AI for scientific and biological discovery</h3>
        <p>Biological and engineered systems are nonlinear, noisy, and expensive to probe experimentally. I use interpretable machine learning to model these systems, including biofabrication, biomaterials, environmental exposure, and public-health risk. The goal is to make experimentation more directed by identifying which variables appear to matter, where uncertainty remains, and what should be tested next.</p>
      </div>

    </div>
  </div>
</div>

<!-- ===================== SELECTED RESEARCH & SYSTEMS ===================== -->
<a name="works"></a>
<div class="content">
  <div class="innercont">

    <div class="grid-head" data-aos="fade-up" data-aos-duration="1000">
      <span class="eyebrow">Selected Research &amp; Systems</span>
      <h2 style="font-size: 32px; margin-top: 12px;">Machine learning for human and biological data</h2>
    </div>

    <!-- PILLAR 1 · Healthcare decision systems -->
    <div class="pillar" data-aos="fade-up" data-aos-duration="900">
      <span class="eyebrow">Healthcare decision systems</span>
      <p class="pillar-desc">Building systems for healthcare analysis, prediction, and operational decision-making.</p>
    </div>
    <div class="grid3">
      <a href="avenir.php" class="card feature g1" data-aos="fade-up" data-aos-duration="900">
        <i class="card-bg-icon ph-thin ph-chart-line-up" aria-hidden="true"></i>
        <span class="card-num">01</span>
        <span class="card-tag">Company · CTO</span>
        <div>
          <h3 class="card-title">Avenir AI</h3>
          <p class="card-desc">Avenir builds AI systems for healthcare decision-making, beginning with employer-sponsored care. We integrate claims, benefits, vendor, and population data to identify cost drivers, emerging risk, and intervention opportunities. Backed by a16z Speedrun.</p>
          <span class="card-cta">View project →</span>
        </div>
      </a>
    </div>

    <!-- PILLAR 2 · Human behavior and physiological intelligence -->
    <div class="pillar" data-aos="fade-up" data-aos-duration="900">
      <span class="eyebrow">Human behavior and physiological intelligence</span>
      <p class="pillar-desc">Estimating behavior, physiology, and health state from real-world signals.</p>
    </div>
    <div class="grid3">

      <a href="cryogait.php" class="card g2" data-aos="fade-up" data-aos-duration="900">
        <i class="card-bg-icon ph-thin ph-footprints" aria-hidden="true"></i>
        <span class="card-num">02</span>
        <span class="card-tag">Clinical prediction · Rust/ML</span>
        <div>
          <h3 class="card-title">CryoGait</h3>
          <p class="card-desc">An interpretable, CPU-only detector for Parkinson's freezing of gait, validated patient-independently and matching deep learning performance at roughly 29× lower inference cost.</p>
          <span class="card-cta">View project →</span>
        </div>
      </a>

      <a href="circadian.php" class="card g3" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
        <i class="card-bg-icon ph-thin ph-moon-stars" aria-hidden="true"></i>
        <span class="card-num">03</span>
        <span class="card-tag">Digital phenotyping · MIT</span>
        <div>
          <h3 class="card-title">Circadian Phenotyping</h3>
          <p class="card-desc">Inferring circadian rhythm from passive phone sensors using on-device, HIPAA-compliant inference. Validated across two MIT clinical studies. First-author publication.</p>
          <span class="card-cta">View project →</span>
        </div>
      </a>

      <a href="phenotyping.php" class="card g6" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200">
        <i class="card-bg-icon ph-thin ph-device-mobile" aria-hidden="true"></i>
        <span class="card-num">04</span>
        <span class="card-tag">Physiological sensing</span>
        <div>
          <h3 class="card-title">Typing &amp; Scrolling</h3>
          <p class="card-desc">Classifying fine-grained smartphone interaction states from raw sensor streams and benchmarking XGBoost and LSTM models across sampling rates.</p>
          <span class="card-cta">View project →</span>
        </div>
      </a>

    </div>

    <!-- PILLAR 3 · AI for scientific and biological discovery -->
    <div class="pillar" data-aos="fade-up" data-aos-duration="900">
      <span class="eyebrow">AI for scientific and biological discovery</span>
      <p class="pillar-desc">Modeling biological, environmental, and engineered systems with interpretable machine learning.</p>
    </div>
    <div class="grid3">

      <a href="electrospray.php" class="card g4" data-aos="fade-up" data-aos-duration="900">
        <i class="card-bg-icon ph-thin ph-drop" aria-hidden="true"></i>
        <span class="card-num">05</span>
        <span class="card-tag">Interpretable ML</span>
        <div>
          <h3 class="card-title">Electrospray&nbsp;SHAP</h3>
          <p class="card-desc">Predicting nanoparticle diameter from electrospray process variables, with SHAP analysis to estimate which parameters are most associated with particle size.</p>
          <span class="card-cta">View project →</span>
        </div>
      </a>

      <a href="gramik.php" class="card g5" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
        <i class="card-bg-icon ph-thin ph-bug" aria-hidden="true"></i>
        <span class="card-num">06</span>
        <span class="card-tag">Geostatistical ML</span>
        <div>
          <h3 class="card-title">GRAMIK</h3>
          <p class="card-desc">Modeling mosquito-risk epicenters across 40 Kenyan localities using KNN regression, climate variables, and spatial features.</p>
          <span class="card-cta">View project →</span>
        </div>
      </a>

    </div>
  </div>
</div>

<!-- ===================== ABOUT ===================== -->
<a name="about"></a>
<div class="content band wash wash-dusk" style="margin-top: 70px;">
  <div class="innercont" style="padding-top: 70px; padding-bottom: 70px;">
    <div data-aos="fade-up" data-aos-duration="1000" style="max-width: 880px;">
      <span class="eyebrow">About</span>
      <h4 style="margin-top: 18px;">I develop machine learning systems for human and biological data.</h4>
      <p style="margin-top: 26px; font-size: 19px;">
        Hi, I'm Ari, a researcher and technical founder working across machine learning, neuroscience, and biological systems. I am interested in a recurring technical problem: how to infer meaningful state from noisy, incomplete data collected in real-world settings.
      </p>
      <p style="margin-top: 18px; font-size: 19px;">
        At MIT, my research focused on digital phenotyping and on-device inference, including models for circadian rhythm, smartphone behavior, and clinically relevant passive signals. I have also worked on real-time detection of Parkinson's freezing of gait, interpretable ML for biofabrication, geospatial modeling for public-health risk, and computational modeling for biomedical systems.
      </p>
      <p style="margin-top: 18px; font-size: 19px;">
        I am now co-founding <a href="avenir.php">Avenir</a>, a healthcare decision systems company applying AI to claims, benefits, vendor, and population health data. The work extends a broader research interest of mine: building models that help people reason under uncertainty when the data is messy, delayed, and operationally consequential.
      </p>
      <p style="margin-top: 18px; font-size: 19px;">
        Across these projects, I care about models that work under real constraints: limited labels, noisy measurement, heterogeneous data sources, edge deployment, clinical or organizational stakes, and the need to explain why a model made a prediction.
      </p>
      <p style="margin-top: 18px; font-size: 19px;">
        I'm Honduran-Turkish, grew up in Rhode Island, and now live in San Francisco. I speak Spanish and am learning Italian, Korean, and Chinese. Outside research and company-building, I built a Spanish-language AI education nonprofit with partners across more than 20 Latin American universities, have spoken internationally about research and entrepreneurship, and model part-time.
      </p>
    </div>
  </div>
</div>

<!-- ===================== EXPERIENCE ===================== -->
<a name="experience"></a>
<div class="content">
  <div class="innercont" style="padding-top: 64px;">
    <div class="grid-head" data-aos="fade-up" data-aos-duration="1000">
      <span class="eyebrow">Experience</span>
      <h2 style="font-size: 32px; margin-top: 12px;">Where I've worked and researched</h2>
    </div>

    <div class="xp" data-aos="fade-up" data-aos-duration="1000">

      <div class="xp-row">
        <div class="xp-org">Avenir AI</div>
        <div class="xp-role">Co-Founder and CTO · AI for healthcare decision-making</div>
        <div class="xp-year">2025 to present</div>
      </div>

      <div class="xp-row">
        <div class="xp-org">MIT</div>
        <div class="xp-role">Machine Learning Researcher · digital phenotyping, on-device inference, two clinical studies, first-author publication</div>
        <div class="xp-year">2023 to 2025</div>
      </div>

      <div class="xp-row">
        <div class="xp-org">Cellcraft</div>
        <div class="xp-role">Computational Researcher · ML-accelerated CFD for cultivated-meat cell media</div>
        <div class="xp-year">2025</div>
      </div>

      <div class="xp-row">
        <div class="xp-org">Ourobionics</div>
        <div class="xp-role">ML Research Engineer · ML and physics for 3D bio-electrospraying and tissue engineering</div>
        <div class="xp-year">2024 to 2025</div>
      </div>

      <div class="xp-row">
        <div class="xp-org">MIT delta v</div>
        <div class="xp-role">Martin Trust Center Fellowship · venture-building accelerator</div>
        <div class="xp-year">2024</div>
      </div>

      <div class="xp-row">
        <div class="xp-org">MIT CSAIL</div>
        <div class="xp-role">Machine Learning Researcher · multimodal regression for neural scene reconstruction</div>
        <div class="xp-year">2023</div>
      </div>

      <div class="xp-row">
        <div class="xp-org">Apple</div>
        <div class="xp-role">Engineering Project Manager · AirPlay analytics, multimodal AI, system-wide observability</div>
        <div class="xp-year">2022 to 2023</div>
      </div>

      <div class="xp-row">
        <div class="xp-org">Microsoft</div>
        <div class="xp-role">Product Manager, AI Experiences · search intelligence concepts for Edge mobile</div>
        <div class="xp-year">2021 to 2023</div>
      </div>

      <div class="xp-row">
        <div class="xp-org">Meta</div>
        <div class="xp-role">Above &amp; Beyond Computer Science Scholar</div>
        <div class="xp-year">2022</div>
      </div>

      <div class="xp-row">
        <div class="xp-org">Civicom Aid</div>
        <div class="xp-role">Software Engineer · GIS and geostatistical ML for mosquito-risk prediction in Kenya</div>
        <div class="xp-year">2023</div>
      </div>

      <div class="xp-row">
        <div class="xp-org">MIT Media Lab</div>
        <div class="xp-role">Software Engineer · live data visualization for sustainable-city planning</div>
        <div class="xp-year">2021</div>
      </div>

    </div>

    <p style="margin-top: 28px;">
      <b style="color: var(--ink); font-weight: 500;">Education.</b> MEng 2025 and BS 2024 in Computation and Cognition, MIT. a16z Speedrun 2025. Honors include National Merit Scholar, National Hispanic Scholar, and two-time Congressional App Challenge winner.
    </p>
  </div>
</div>

<!-- ===================== COMMUNITY & CREATIVE ===================== -->
<a name="community"></a>
<div class="content wash wash-peach">
  <div class="innercont" style="padding-top: 56px;">
    <div class="grid-head" data-aos="fade-up" data-aos-duration="1000">
      <span class="eyebrow">Community &amp; Creative Work</span>
      <h2 style="font-size: 32px; margin-top: 12px;">Beyond the lab</h2>
    </div>

    <div class="comm-grid" data-aos="fade-up" data-aos-duration="1000">

      <a class="comm-card" href="astrania.php">
        <h3 class="comm-title">Astrania</h3>
        <p class="comm-desc">A Spanish-language AI education hub connecting builders across the US and Latin America, with partners at more than 20 Latin American universities.</p>
      </a>

      <div class="comm-card">
        <h3 class="comm-title">Speaking</h3>
        <p class="comm-desc">Talks on research and entrepreneurship across Europe, Asia, and the Americas.</p>
      </div>

      <div class="comm-card">
        <h3 class="comm-title">Modeling</h3>
        <p class="comm-desc">Signed to Dynasty Models, Boston. Brand collaborations include Edikted.</p>
      </div>

      <a class="comm-card" href="ozone.php">
        <h3 class="comm-title">Ozone</h3>
        <p class="comm-desc">Founding engineer on a YC-backed collaborative cloud video editor. Shipped the launch site behind a $1M pre-seed.</p>
      </a>

    </div>
  </div>
</div>

<!-- ===================== CONTACT ===================== -->
<a name="contact"></a>
<div class="content band wash wash-dawn" style="margin-top: 64px;">
  <div class="innercont" style="padding-top: 70px; padding-bottom: 80px;">
    <div class="flexcol" data-aos="fade-up" data-aos-duration="1000" style="max-width: 700px;">
      <span class="eyebrow">Contact</span>
      <h4 style="margin-top: 16px;">Let's talk.</h4>
      <p style="margin-top: 22px; font-size: 19px;">
        I'm open to meeting people working on AI, health, neuroscience, and biological systems.
      </p>
      <div style="margin-top: 30px;">
        <a href="mailto:ari@avenir.com.ai" class="btn solid">Email me</a>&nbsp;&nbsp;
        <a href="https://www.linkedin.com/in/ariadnedulchinos/" class="btn">LinkedIn</a>&nbsp;&nbsp;
        <a href="https://twitter.com/arintheia" class="btn">Twitter / X</a>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
