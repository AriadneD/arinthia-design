<div class="nav" data-aos="fade-down" data-aos-duration="1000" >
	<div class="logo">
		<a href="index.php"><span>arinthia<span style="color: #c9748f">.</span>design</span></a>
	</div>
	<button class="nav-toggle" aria-label="Toggle menu" aria-expanded="false" onclick="var n=this.closest('.nav');n.classList.toggle('nav-open');this.setAttribute('aria-expanded', n.classList.contains('nav-open'));">
		<i class="fa-solid fa-bars open-icon"></i>
		<i class="fa-solid fa-xmark close-icon"></i>
	</button>
	<div class="menu">
		<ul>
		  <li><a href="index.php#">Home</a></li>
		  <li><a href="index.php#works">Works</a></li>
		  <li><a href="index.php#about">About</a></li>
		  <li><a href="press.php">Press</a></li>
		  <li><a href="index.php#contact">Contact</a></li>
		</ul>
	</div>
</div>
<script>
(function(){
  var links = document.querySelectorAll('.nav .menu a');
  for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function(){
      var n = document.querySelector('.nav');
      if (n) {
        n.classList.remove('nav-open');
        var t = n.querySelector('.nav-toggle');
        if (t) t.setAttribute('aria-expanded', 'false');
      }
    });
  }
})();
</script>

<div id="myBtn" style="padding: 10px; position: fixed; z-index: 999; bottom: 30px; right: 30px; border-radius: 50px; height: 25px; width: 25px; text-align: center; color: white; background: black;"><a style="text-decoration: none; border-bottom: 0px solid black !important; color: white;" href="#"><i class="fa-solid fa-angle-up"></i></a></div>