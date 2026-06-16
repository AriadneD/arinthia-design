<?php
  $page_title = "Circadian Phenotyping · On-device digital phenotyping at MIT";
  $page_description = "Inferring circadian rhythm from passive phone sensors with on-device, HIPAA-compliant inference, validated across two MIT clinical studies. First-author publication.";
  $page_keywords = "digital phenotyping, circadian rhythm, on-device inference, smartphone sensing, MIT research, Ariadne Dulchinos";
  $page_path = "circadian.php";
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
          <span class="eyebrow" style="margin-top: 22px;">Research · MIT · First-author publication</span>
          <h1 class="proj-title">Circadian Phenotyping</h1>
          <p class="proj-lede">
            Digital phenotyping pipelines that infer circadian rhythm and behavioral states from smartphone and wearable sensors, deployed on-device, HIPAA-compliant, and validated in two MIT clinical studies.
          </p>
          <div class="chips">
            <span class="chip">Bayesian networks</span>
            <span class="chip">Deep learning</span>
            <span class="chip">TensorFlow Lite</span>
            <span class="chip">On-device inference</span>
            <span class="chip">Clinical validation</span>
          </div>
        </div>

        <div class="proj-section">
          <h2>Summary</h2>
          <p>
            At MIT, across CSAIL, the Media Lab, and the Mobile Technology Lab, I built digital phenotyping pipelines that turn passive smartphone and wearable signals into clinically meaningful markers of sleep, stress, and behavior. The headline result: inferring circadian rhythm from phone sensors at accuracy on par with commercial sleep wearables like Oura, with everything packaged to run privately on the device.
          </p>
        </div>

        <div class="proj-section">
          <h2>The method</h2>
          <p>
            The pipeline combines Bayesian networks and deep learning to infer circadian rhythm and fine-grained smartphone-interaction states from raw sensor streams such as GPS, accelerometer, and battery. Models are packaged with <b>TensorFlow Lite for HIPAA-compliant, on-device inference</b>, so sensitive behavioral data never has to leave the phone. The work spans the full stack: signal processing, feature engineering, model training, and deployment.
          </p>
        </div>

        <div class="proj-section">
          <h2>Validation</h2>
          <div class="metric-grid">
            <div class="metric"><div class="metric-num">2</div><div class="metric-label">MIT clinical studies led</div></div>
            <div class="metric"><div class="metric-num">≈ Oura</div><div class="metric-label">circadian accuracy parity</div></div>
            <div class="metric"><div class="metric-num">On-device</div><div class="metric-label">HIPAA-compliant inference</div></div>
            <div class="metric"><div class="metric-num">1st author</div><div class="metric-label">peer-reviewed publication</div></div>
          </div>
          <p style="margin-top: 24px;">
            I led two MIT clinical studies that ended in a first-author, peer-reviewed publication. The circadian inference reached accuracy on par with dedicated commercial sleep wearables, using only the sensors already in a person's pocket.
          </p>
        </div>

        <div class="proj-section">
          <h2>Why it matters</h2>
          <p>
            Sleep, stress, and circadian disruption are upstream of a wide range of health outcomes, yet measuring them at scale usually requires dedicated hardware. Phenotyping from the phone makes continuous, long-term monitoring available to anyone, and running the inference on-device keeps it private. This research connects my work in wearables, mobile health, and the health mission behind Avenir.
          </p>
        </div>

        <div class="proj-section" style="padding-top: 30px;">
          <a class="btn" href="phenotyping.php">Related: Typing &amp; Scrolling →</a>&nbsp;&nbsp;
          <a class="btn" href="index.php#works">← Back to all work</a>
        </div>

      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
