<?php
  $page_title = "CryoGait · Real-time freezing-of-gait detection for Parkinson's";
  $page_description = "CryoGait is an interpretable, CPU-only detector for Parkinson's freezing of gait. It runs in real time on a microcontroller and matches deep learning at far lower inference cost.";
  $page_keywords = "Parkinson's freezing of gait, FoG detection, wearable machine learning, edge inference, Rust ML, Ariadne Dulchinos";
  $page_path = "cryogait.php";
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
          <span class="eyebrow" style="margin-top: 22px;">Research · Rust + Machine Learning</span>
          <h1 class="proj-title">CryoGait</h1>
          <p class="proj-lede">
            An interpretable, CPU-only, real-time freezing-of-gait detector for Parkinson's disease, with an honestly validated benchmark showing it matches deep learning at a fraction of the cost.
          </p>
          <div class="chips">
            <span class="chip">Rust</span>
            <span class="chip">Python</span>
            <span class="chip">Wearables</span>
            <span class="chip">100-patient benchmark</span>
            <span class="chip">Edge inference</span>
          </div>
        </div>

        <div class="proj-section">
          <h2>The problem</h2>
          <p>
            Freezing of gait (FoG) is one of the most disabling symptoms of advanced Parkinson's. Patients describe their feet as "glued to the floor" mid-stride. It affects roughly half of PD patients, up to about 80% in advanced disease, and is a leading cause of falls. A wearable that detects freezing in real time can fire a cue, such as an auditory metronome, a vibrotactile pulse, or a laser line, to help the patient keep moving. But that device has to run for hours on a coin cell, infer on a microcontroller with <b>no GPU and no ML runtime</b>, and be trustworthy enough for clinical use.
          </p>
        </div>

        <div class="proj-section">
          <h2>The method</h2>
          <p>
            CryoGait is built around that constraint. The inference engine is pure Rust with no native ML runtime, just a few hundred floating-point comparisons per window. From a 4-second IMU window it extracts a 123-feature spectral and time-domain descriptor (band powers, Freeze Index, dominant frequency, spectral entropy, jerk), applies unsupervised per-recording rank normalization to remove inter-patient distribution shift, classifies with histogram gradient-boosted trees, and refines the probability with a causal EMA that exploits the build-up of freezing.
          </p>
          <p>
            Two ideas do most of the work, confirmed by ablation: the multi-channel descriptor (versus a single Freeze Index) and the causal-EMA temporal refinement (+0.09 mAP). Everything is evaluated <b>patient-independent</b>, with no patient appearing in both train and test. That is the main guard against the leakage that inflates many published FoG results.
          </p>
        </div>

        <div class="proj-section">
          <h2>Headline results</h2>
          <div class="metric-grid">
            <div class="metric"><div class="metric-num">0.88</div><div class="metric-label">mAP (tDCS-FOG, 62 patients)</div></div>
            <div class="metric"><div class="metric-num">0.93</div><div class="metric-label">ROC-AUC</div></div>
            <div class="metric"><div class="metric-num">~29×</div><div class="metric-label">faster at inference vs. BiGRU</div></div>
            <div class="metric"><div class="metric-num">0 GB</div><div class="metric-label">GPU memory required</div></div>
          </div>
          <p style="margin-top: 24px;">
            Under strict patient-independent evaluation the detector reaches mAP 0.88, ROC-AUC 0.93, F1 0.80. That is statistically indistinguishable from a bidirectional GRU (mAP 0.90), while running about 29× faster at inference (63 µs vs. 1,815 µs/window, both CPU), about 10× faster to train, and using zero GPU memory. It clearly beats the classical Freeze-Index, logistic, and random-forest baselines (vs. Freeze Index ΔmAP +0.141, p&lt;0.0001).
          </p>
        </div>

        <div class="proj-section" style="padding-top: 30px;">
          <a class="btn" href="index.php#works">← Back to all work</a>
        </div>

      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
