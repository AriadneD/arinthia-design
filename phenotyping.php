<?php
  $page_title = "Typing & Scrolling · Smartphone behavior classification";
  $page_description = "Classifying fine-grained smartphone interaction states from raw sensor streams, with XGBoost and LSTM models benchmarked across sampling rates.";
  $page_keywords = "smartphone sensing, activity classification, digital phenotyping, XGBoost, LSTM, Ariadne Dulchinos";
  $page_path = "phenotyping.php";
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
          <span class="eyebrow" style="margin-top: 22px;">Research · Digital Phenotyping</span>
          <h1 class="proj-title">Typing &amp; Scrolling</h1>
          <p class="proj-lede">
            Classifying fine-grained smartphone interaction states, such as typing and scrolling, directly from raw sensor streams, and predicting typing metrics from them with deep learning.
          </p>
          <div class="chips">
            <span class="chip">XGBoost</span>
            <span class="chip">LSTM</span>
            <span class="chip">scikit-learn · TensorFlow</span>
            <span class="chip">Sensor data</span>
            <span class="chip">Multi-rate</span>
          </div>
        </div>

        <div class="proj-section">
          <h2>Summary</h2>
          <p>
            Knowing <i>how</i> a person physically interacts with their phone, not just which apps they open, is a useful signal for digital phenotyping. This project builds and benchmarks models that infer interaction states (typing, scrolling, other) from smartphone sensor data, and separately predict continuous typing metrics like keystroke count. It grew out of the behavioral-sensing work I did in wearables and mobile health.
          </p>
        </div>

        <div class="proj-section">
          <h2>What I built</h2>
          <ul>
            <li><b>Model comparison for classification.</b> A head-to-head of Logistic Regression, Random Forest, SVM, KNN, Gradient Boosting, and XGBoost for activity classification, with cross-validation and saved models.</li>
            <li><b>XGBoost across sampling rates.</b> The best performer, trained and evaluated on datasets from 1 Hz up to 60 Hz, with stratified K-fold cross-validation, confusion matrices, and ROC-AUC curves at each rate.</li>
            <li><b>LSTM for typing metrics.</b> A deep sequence model that predicts typing speed, accuracy, or keystrokes from time-series sensor sequences, trained with 5-fold cross-validation.</li>
            <li><b>Regression baselines.</b> Linear Regression, Random Forest, Gradient Boosting, SVR, and KNN compared on MSE and MAE for the same prediction task.</li>
          </ul>
        </div>

        <div class="proj-section">
          <h2>Why it matters</h2>
          <p>
            The sampling-rate sweep matters for deployment: a model that is nearly as accurate at 2 Hz as at 60 Hz can run continuously on a phone without draining the battery. By identifying XGBoost as the best classifier and measuring the accuracy versus rate trade-off, the work points toward interaction-aware sensing that is cheap enough to run all day. That is the basis for using everyday phone behavior as a passive health signal.
          </p>
        </div>

        <div class="proj-section" style="padding-top: 30px;">
          <a class="btn solid" href="https://github.com/AriadneD/typingscrolling">GitHub</a>&nbsp;&nbsp;
          <a class="btn" href="circadian.php">Related: Circadian phenotyping →</a>&nbsp;&nbsp;
          <a class="btn" href="index.php#works">← Back to all work</a>
        </div>

      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
