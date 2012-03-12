<?php
	$page = $_GET['page'];
	if($page == "")
		$page = "home";
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>CoderDojo Rotterdam | Leer	 kinderen gratis programmeren!</title>
	<meta name="description" content="Bij CoderDojo Rotterdam bieden wij kinderen van 7-18 jaar gratis les aan om te leren programmeren. Dit gaat van websites tot games tot software!"/>
	<link rel="icon" type="image/ico" href="/favicon.ico">

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/foundation.css">
	<link rel="stylesheet" href="stylesheets/app.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<!-- container -->
	<div class="container">

		<div class="row">
			<div class="five columns logo">
				<img src="images/coderdojo-rotterdam.png" alt="CoderDojo Rotterdam"/>
			</div>
			<div class="seven columns socialmedia">
				<a href="http://twitter.com/CoderDojoRdam" target="_blank">
					<img src="images/twitter.png" alt="Volg ons op Twitter!"/>
				</a>
				<a href="https://www.facebook.com/pages/CoderDojo-Rotterdam/247664725326261" target="_blank">
					<img src="images/facebook.png" alt="CoderDojo Rotterdam"/>
				</a>
			</div>
		</div>

		<div class="row">
			<div class="twelve columns navigation">
				<ul>
					<li <?php if($page == "home"){echo "class='active'";}?>><a href="/">Home</a></li>
					<li <?php if($page == "vrijwilligers-gezocht"){echo "class='active'";}?>><a href="/vrijwilligers-gezocht">Vrijwilligers Gezocht</a></li>
					<li <?php if($page == "volgende-dojo"){echo "class='active'";}?>><a href="/volgende-dojo">Volgende Dojo</a></li>
					<li <?php if($page == "contact"){echo "class='active'";}?>><a href="/contact">Contact</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="eight columns content">		
				<?php
					if(file_exists("pages/".$page.".php"))
						include "pages/".$page.".php";
					else
						include "pages/404.php";
				?>
			</div>
			<div class="four columns sidebar">
				<h2>Andere CoderDojo&apos;s</h2>
				<h3>United States</h3>
				<ul class="block-grid two-up">
					<li><a href="http://zen.coderdojo.com/dojo/25" target="_blank">GitHub, San Fran</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/28" target="_blank">New York City</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/36" target="_blank">Pittsburgh</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/38" target="_blank">Indianapolis</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/40" target="_blank">Lake County, IL</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/47" target="_blank">Fargo-Moorhead</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/48" target="_blank">Austin</a></li>
				</ul>
				<h3>Ireland</h3>
				<ul class="block-grid two-up">
					<li><a href="http://zen.coderdojo.com/dojo/23" target="_blank">NSC Cork</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/27" target="_blank">Dublin</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/29" target="_blank">Carlow</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/32" target="_blank">Limerick</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/34" target="_blank">Athlone</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/37" target="_blank">Kilkenny</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/41" target="_blank">WicklowTown</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/43" target="_blank">Galway City</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/44" target="_blank">Dublin D15</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/46" target="_blank">DublinUCD</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/49" target="_blank">Mayo - Castlebar</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/50" target="_blank">Maynooth</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/53" target="_blank">Athenry</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/54" target="_blank">Kinsale</a></li>
				</ul>
				<h3>Engeland</h3>
				<ul class="block-grid two-up">
					<li><a href="http://zen.coderdojo.com/dojo/42" target="_blank">Londen</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/45" target="_blank">Newry</a></li>
					<li><a href="http://zen.coderdojo.com/dojo/52" target="_blank">Cambridge</a></li>
				</ul>
				<h3>Russian Federation</h3>
				<ul class="block-grid two-up">
					<li><a href="http://zen.coderdojo.com/dojo/55" target="_blank">St. Petersburg</a></li>
				</ul>
				<h3>Netherlands</h3>
				<ul class="block-grid two-up">
					<li><a href="http://zen.coderdojo.com/dojo/33" target="_blank">Den Haag</a></li>
				</ul>
				<h3>Japan</h3>
				<ul class="block-grid two-up">
					<li><a href="http://zen.coderdojo.com/dojo/57" target="_blank">Tokyo</a></li>
				</ul>
				<h3>Italy</h3>
				<ul class="block-grid two-up">
					<li><a href="http://zen.coderdojo.com/dojo/56" target="_blank">Florence</a></li>
				</ul>
				<h3>Indonesie</h3>
				<ul class="block-grid two-up">
					<li><a href="http://zen.coderdojo.com/dojo/51" target="_blank">Bandung</a></li>
				</ul>
			</div>
		</div>

		<div class="row footer">
			<div class="twelve columns">
				<p class="left">Copyright &copy; Coderdojo Rotterdam 2012</p>
				<p class="right">
					<a href="http://www.coderdojo.com" target="_blank">CoderDojo</a>&nbsp;&nbsp;|&nbsp;&nbsp;
					Made by <a href="http://www.christianvermeulen.net" target="_blank">Christian Vermeulen</a>
				</p>
			</div>
		</div>
	</div>
	<!-- container -->




	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/modernizr.foundation.js"></script>
	<script src="javascripts/foundation.js"></script>
	<script src="javascripts/app.js"></script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-7869825-23']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</body>
</html>