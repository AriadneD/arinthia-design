<?php
  $page_title = "Avenir AI · Ariadne Dulchinos";
  $page_description = "Avenir AI builds machine learning systems for healthcare decision-making. We integrate claims, benefits, vendor, and population data to find cost drivers and risk. Backed by a16z Speedrun.";
  $page_keywords = "Avenir AI, healthcare AI, employee benefits analytics, claims data, a16z Speedrun, Ariadne Dulchinos";
  $page_path = "avenir.php";
  $og_type = "article";
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/nav.php'; ?>

    <div class="content firstcont">
      <div class="innercont">

        <div class="proj-hero">
          <a class="back-link" href="index.php#works">← All work</a>
          <span class="eyebrow" style="margin-top: 22px;">Company · Co-Founder &amp; CTO</span>
          <h1 class="proj-title">Avenir AI</h1>
          <p class="proj-lede">
            Avenir builds machine learning systems for healthcare decision-making, starting with employer-sponsored care. We integrate claims, benefits, vendor, and population data to find cost drivers, emerging risk, and where to intervene.
          </p>
          <div class="chips">
            <span class="chip">a16z Speedrun</span>
            <span class="chip">Healthcare · $1.9T market</span>
            <span class="chip">AI / ML</span>
            <span class="chip">HIPAA · SOC 2</span>
            <span class="chip">2025 to present</span>
          </div>
        </div>

        <div class="proj-section">
          <h2>Summary</h2>
          <p>
            Avenir connects a broker's TPA, PBM, stop-loss, biometric, and benchmark data, then generates the analyses that usually take a week: renewal prep, stewardship reports, claims analysis, and competitive benchmarking. Work that runs about 40 hours by hand takes closer to 4.
          </p>
          <p>
            The team comes out of MIT, Apple, and Microsoft, with early Fortune 500 customers and measured ROI, backed by a16z Speedrun. I'm co-founder and CTO, responsible for the analytics engine, data integrations, and the AI workflows that model noisy, multi-source claims data into decision-ready insight.
          </p>
        </div>

        <div class="proj-section">
          <h2>The problem</h2>
          <p>
            Benefits consultants already know what needs to get done. The slow part is pulling the data, cleaning it, reconciling it across three portals and formats, analyzing it, and turning it into something they can present. Healthcare is most employers' biggest controllable expense, yet only Fortune 500 companies can usually afford the analytics to manage it. Avenir handles that whole workflow and brings the same caliber of analysis to groups from 200 to 20,000+ lives.
          </p>
        </div>

        <div class="proj-section">
          <h2>What it does</h2>
          <ul>
            <li><b>Renewals &amp; stewardship</b>: claims experience, utilization trends, large-claimant summaries, and plan performance, pulled into a single benchmarked report.</li>
            <li><b>Population health</b>: top cost drivers by diagnostic category, high-cost claimant projections, pharmacy-vs-medical decomposition, and SDoH overlays.</li>
            <li><b>Market intelligence</b>: PBM and vendor RFP scorecards and benchmarks built from 750+ vendors and 150+ industry reports.</li>
            <li><b>Executive summaries</b>: branded, client-ready exports to PowerPoint, Excel, and PDF, with talking points and recommendations.</li>
          </ul>
        </div>

        <div class="proj-section">
          <h2>By the numbers</h2>
          <div class="metric-grid">
            <div class="metric"><div class="metric-num">~4 hrs</div><div class="metric-label">per client, down from ~40</div></div>
            <div class="metric"><div class="metric-num">$1.9T</div><div class="metric-label">market being redefined</div></div>
            <div class="metric"><div class="metric-num">750+</div><div class="metric-label">vendors indexed</div></div>
            <div class="metric"><div class="metric-num">2 min</div><div class="metric-label">average time to a deliverable</div></div>
          </div>
          <p style="margin-top: 24px;">
            Built at MIT and validated by brokers managing employer groups from 200 to 20,000 lives. Enterprise-grade by design: SOC 2 Type II, HIPAA-compliant, 256-bit AES encryption, SSO &amp; RBAC.
          </p>
        </div>

        <div class="proj-section" style="padding-top: 30px;">
          <a class="btn solid" href="https://www.avenir.com.ai">Visit Avenir</a>&nbsp;&nbsp;
          <a class="btn" href="index.php#works">← Back to all work</a>
        </div>

      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
