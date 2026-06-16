<?php
  $page_title = "Electrospray SHAP · Explainable ML for particle size";
  $page_description = "Predicting nanoparticle diameter from electrospray process variables, with SHAP analysis to show which parameters are most associated with particle size.";
  $page_keywords = "electrospray, nanoparticle size, SHAP, XGBoost, explainable ML, biomaterials, Ariadne Dulchinos";
  $page_path = "electrospray.php";
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
          <span class="eyebrow" style="margin-top: 22px;">Research · Explainable ML</span>
          <h1 class="proj-title">Electrospray&nbsp;SHAP</h1>
          <p class="proj-lede">
            SHAP analysis of electrospinning parameters for predicting nanoparticle size, using a gradient-boosted model to predict particle diameter and to explain which process variables drive it.
          </p>
          <div class="chips">
            <span class="chip">XGBoost</span>
            <span class="chip">SHAP</span>
            <span class="chip">Python</span>
            <span class="chip">Materials · Drug delivery</span>
          </div>
        </div>

        <div class="proj-section">
          <h2>Summary</h2>
          <p>
            Electrospray is a common method for fabricating PLGA microparticles and nanoparticles used in drug delivery, but the relationship between process parameters and the resulting particle size is notoriously non-linear. This project predicts the mean diameter of electrosprayed particles from a pre-trained XGBoost model, then runs SHAP (SHapley Additive exPlanations) analysis to make the model interpretable. It shows the importance and interaction of each parameter rather than treating the model as a black box.
          </p>
        </div>

        <div class="proj-section">
          <h2>The inputs</h2>
          <ul>
            <li><b>Polymer concentration</b>: PLGA in solution (w/v%)</li>
            <li><b>Solvent</b>: one of fifteen options (DMF, DCM, acetone, TFE, chloroform, THF, and more)</li>
            <li><b>Flow rate</b>: syringe pump rate (mL/h)</li>
            <li><b>Voltage</b>: applied potential (kV)</li>
            <li><b>Collection distance</b>: needle-to-collector gap (mm)</li>
            <li><b>Gauge</b>: needle size (mm)</li>
          </ul>
          <p>
            The target is mean particle diameter in micrometers. SHAP plots show which variables matter most and how each one pushes a given prediction higher or lower, the kind of insight a process engineer needs to dial in a formulation.
          </p>
        </div>

        <div class="proj-section">
          <h2>Why it matters</h2>
          <p>
            Particle size governs release kinetics, bioavailability, and how a drug-delivery particle behaves in the body. An interpretable predictor turns expensive trial and error at the bench into a guided search, and the SHAP layer lets researchers reason about the model's recommendations. The work builds on and credits the dataset and models from Wang, F. et al., <i>Machine learning predicts electrospray particle size</i> (Materials &amp; Design, 2022).
          </p>
        </div>

        <div class="proj-section" style="padding-top: 30px;">
          <a class="btn solid" href="https://github.com/AriadneD/electrospray-shap">GitHub</a>&nbsp;&nbsp;
          <a class="btn" href="index.php#works">← Back to all work</a>
        </div>

      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
