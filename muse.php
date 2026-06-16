<?php
  $page_title = "Muse · The emotional profile of any song";
  $page_description = "Muse models perceived emotion in music across six affective dimensions, built with librosa, Gemini 3 Pro, and Nano Banana Pro.";
  $page_keywords = "music emotion AI, multimodal AI, audio analysis, librosa, Gemini, Ariadne Dulchinos";
  $page_path = "muse.php";
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
          <span class="eyebrow" style="margin-top: 22px;">Build · Multimodal AI · Hackathon</span>
          <h1 class="proj-title">Muse</h1>
          <p class="proj-lede">
            The emotional DNA of your music. Paste any YouTube link and get a six-dimensional emotional profile plus AI-powered context for when and where to listen.
          </p>
          <div class="chips">
            <span class="chip">Gemini 3 Pro</span>
            <span class="chip">Nano Banana Pro</span>
            <span class="chip">librosa</span>
            <span class="chip">React + Flask</span>
            <span class="chip">Multi-Modality</span>
          </div>
        </div>

        <div class="proj-section">
          <h2>Summary</h2>
          <p>
            Streaming platforms organize songs by genre and vibe, but they miss the emotional context of listening: the way we use music for self-discovery, emotional processing, focus, and connection. Muse fills that gap. It combines audio analysis, visual representation, and generative AI into a multi-modal music experience, built for a hackathon's Multi-Modality challenge.
          </p>
        </div>

        <div class="proj-section">
          <h2>How it works</h2>
          <ul>
            <li><b>Audio → features.</b> librosa extracts spectral, harmonic, and rhythmic signatures (MFCC, chroma, onset strength, spectral centroid, zero-crossing rate) from real-time YouTube audio.</li>
            <li><b>Features → emotions.</b> Custom algorithms map those features onto six emotional axes: Valence, Energy, Tension, Warmth, Power, and Complexity.</li>
            <li><b>Emotions → visuals.</b> Nano Banana Pro renders high-fidelity 2K emotional timelines and custom artwork reflecting the song's emotional fingerprint.</li>
            <li><b>Emotions → context.</b> Gemini 3 Pro reads the emotional + audio profile together to suggest the perfect locations, activities, time of day, and mood match.</li>
          </ul>
        </div>

        <div class="proj-section">
          <h2>The six emotional axes</h2>
          <div class="metric-grid">
            <div class="metric"><div class="metric-num">Valence</div><div class="metric-label">sad ↔ happy</div></div>
            <div class="metric"><div class="metric-num">Energy</div><div class="metric-label">calm ↔ intense</div></div>
            <div class="metric"><div class="metric-num">Tension</div><div class="metric-label">relaxed ↔ suspenseful</div></div>
            <div class="metric"><div class="metric-num">Warmth</div><div class="metric-label">cold ↔ affectionate</div></div>
          </div>
          <p style="margin-top: 22px;">
            Plus <b>Power</b> (intimate ↔ epic) and <b>Complexity</b> (simple ↔ intricate). Together they go beyond simple "happy/sad" to capture the nuance of how a track actually feels. A timeline view shows how those emotions evolve across the song.
          </p>
        </div>

        <div class="proj-section">
          <h2>Where it could go</h2>
          <p>
            Muse's emotional profiling can power smart playlist curation ("calm-but-confident pre-presentation hype music"), music therapy and emotional processing, shared "our songs" playlists, emotion-aware focus playlists, and personal music journaling that surfaces how your inner life evolves, not just your listening history. The end state is an API for emotional music search that developers can build on.
          </p>
        </div>

        <div class="proj-section" style="padding-top: 30px;">
          <a class="btn solid" href="https://www.loom.com/share/66b0a0a854a348f2b4ae7c85c2754942">Watch the demo</a>&nbsp;&nbsp;
          <a class="btn" href="https://github.com/AriadneD/musicemotions">GitHub</a>&nbsp;&nbsp;
          <a class="btn" href="index.php#works">← Back to all work</a>
        </div>

      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
