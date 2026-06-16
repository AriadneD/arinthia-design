<?php
  // Per-page SEO. Pages may set $page_title, $page_description, $page_keywords,
  // $page_path, $og_type, $og_image, $page_robots before including this file.
  // Defaults below preserve the original homepage metadata exactly.
  $base = 'https://arinthia.design/';
  $d_title    = 'Ari Dulchinos - Designer, Developer, Model, Entrepreneur';
  $d_desc     = 'Arinthia delivers website, app, and brand design for startups, 80% faster than other agencies. Your next amazing project is a click away.';
  $d_keywords = 'web design for startups, app wireframes for startups, how to design logo for startups, cambridge design agency, cambridge design for startups, boston design for startups, startup graphic design, startup logo design';

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
