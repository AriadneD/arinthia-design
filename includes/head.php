<?php
  // Per-page SEO. Pages may set $page_title, $page_description, $page_keywords,
  // $page_path, $og_type, $og_image, $page_robots before including this file.
  // Defaults below are the homepage (researcher positioning) metadata.
  $base = 'https://arinthia.design/';
  $d_title    = 'Ariadne Dulchinos · ML Researcher & Founder of Avenir AI';
  $d_desc     = 'Ariadne Dulchinos builds machine learning systems for human, biological, and healthcare data. Co-founder and CTO of Avenir AI; ML researcher trained at MIT.';
  $d_keywords = 'Ariadne Dulchinos, machine learning researcher, digital phenotyping, healthcare AI, Avenir AI, MIT, clinical prediction, biomedical machine learning, AI founder';

  $title     = isset($page_title) ? $page_title : $d_title;
  $desc      = isset($page_description) ? $page_description : $d_desc;
  $keywords  = isset($page_keywords) ? $page_keywords : $d_keywords;
  $canonical = $base . (isset($page_path) ? $page_path : '');
  $robots    = isset($page_robots) ? $page_robots : 'index, follow, max-image-preview:large';
  $ogtype    = isset($og_type) ? $og_type : 'website';
  $ogimage   = $base . (isset($og_image) ? $og_image : 'images/aripfp.png');
?>
<meta charset="UTF-8">
<meta name="description" content="<?php echo htmlspecialchars($desc); ?>">
<meta name="keywords" content="<?php echo htmlspecialchars($keywords); ?>">
<meta name="author" content="Ariadne Dulchinos">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="<?php echo $robots; ?>">
<meta name="theme-color" content="#f3b6cc">
<link rel="canonical" href="<?php echo $canonical; ?>">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<title><?php echo htmlspecialchars($title); ?></title>

<meta property="og:type" content="<?php echo $ogtype; ?>">
<meta property="og:site_name" content="Ariadne Dulchinos">
<meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($desc); ?>">
<meta property="og:url" content="<?php echo $canonical; ?>">
<meta property="og:image" content="<?php echo $ogimage; ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($title); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($desc); ?>">
<meta name="twitter:image" content="<?php echo $ogimage; ?>">
<meta name="twitter:creator" content="@arintheia">

<link rel="stylesheet" href="style.css" />
<script src="https://kit.fontawesome.com/ce7793d2ad.js" crossorigin="anonymous"></script>
