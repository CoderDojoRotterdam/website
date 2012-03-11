<?php
	if($_SERVER['HTTP_HOST'] != "www.coderdojo-rotterdam.nl")
		header("location: http://www.coderdojo-rotterdam.nl");
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

	<title>CoderDojo Rotterdam | Leer kinderen gratis programmeren!</title>
	<meta name="description" content="Bij CoderDojo Rotterdam bieden wij kinderen van 7-18 jaar gratis les aan om te leren programmeren. Dit gaat van websites tot games tot software!"/>
	
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
			<div class="twelve columns logo">
				<p>
					<img src="images/coderdojo-rotterdam.jpg" alt="CoderDojo Rotterdam"/><br/>
					Volg ons op <a href="http://twitter.com/coderdojordam">@CoderDojoRdam</a> | Like ons op <a href="https://www.facebook.com/pages/CoderDojo-Rotterdam/247664725326261">Facebook</a> | Stuur ons een <a href="mailto:chris@coderdojo-rotterdam.nl">email</a>
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