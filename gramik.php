<?php
  $page_title = "GRAMIK · Geostatistical ML for mosquito risk in Kenya";
  $page_description = "Modeling mosquito-risk epicenters across 40 Kenyan localities using KNN regression, climate variables, and spatial features.";
  $page_keywords = "geospatial ML, mosquito risk, public health modeling, KNN regression, Kenya, Ariadne Dulchinos";
  $page_path = "gramik.php";
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
          <span class="eyebrow" style="margin-top: 22px;">Research · Geo-statistical ML</span>
          <h1 class="proj-title">GRAMIK</h1>
          <p class="proj-lede">
            Geospatial Risk Analysis of Mosquitoes in Kenya (GRAMIK), a computational tool that quantifies the risk of mosquito occurrence across geographic locations. I built it during a software engineering role with Civicom Aid in Mombasa.
          </p>
          <div class="chips">
            <span class="chip">Python · Flask</span>
            <span class="chip">KNN regression</span>
            <span class="chip">Leaflet.js</span>
            <span class="chip">Public health</span>
            <span class="chip">40 localities</span>
          </div>
        </div>

        <div class="proj-section">
          <h2>Summary</h2>
          <p>
            GRAMIK predicts mosquito-occurrence risk on a 1 (low) to 3 (high) scale across Kenyan localities, adapting to the way risk shifts month to month with the seasons. It pairs K-Nearest-Neighbors regression with spatio-temporal data and environmental factors such as elevation and proximity to water bodies, producing a fine-grained risk surface that public-health teams can act on.
          </p>
        </div>

        <div class="proj-section">
          <h2>The data</h2>
          <p>
            The dataset characterizes 40 Kenyan localities, each with geographic coordinates, elevation, Köppen climate classification, distance from the nearest water body, and a monthly risk level for all twelve months. It integrates endemic-region and species data from NCBI, vector-density studies, seasonal-abundance research, and occurrence records from the GBIF database.
          </p>
        </div>

        <div class="proj-section">
          <h2>The method</h2>
          <ul>
            <li><b>Spatial modeling.</b> KNN regression trained on latitude/longitude predicts elevation and distance-from-water at unmeasured points, using the five nearest neighbors and relevant climate features.</li>
            <li><b>Temporal weighting.</b> The algorithm accepts a date, derives the current and next month (handling December→January transitions), and weights risk proportionally to days remaining and elapsed.</li>
            <li><b>Climate modulation.</b> Köppen classifications adjust the temporal weightings. A tropical-rainforest locality stays consistently high, while hot semi-arid zones swing with water availability.</li>
            <li><b>Risk calculation.</b> A weighted average of monthly risk is modulated by sub-linear transforms of elevation and water distance, then clipped to the 1–3 scale for interpretability.</li>
          </ul>
        </div>

        <div class="proj-section">
          <h2>Why it matters</h2>
          <p>
            The result is an adaptive, spatially aware method for quantifying mosquito risk that uses both temporal and spatial signals. It produces fine-grained risk levels that help target vector-control resources, and the same framework carries over to other epidemiological studies. Outputs are mapped on an interactive Leaflet.js view.
          </p>
        </div>

        <div class="proj-section" style="padding-top: 30px;">
          <a class="btn solid" href="https://github.com/AriadneD/mosquito-risk">GitHub</a>&nbsp;&nbsp;
          <a class="btn" href="index.php#works">← Back to all work</a>
        </div>

      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
