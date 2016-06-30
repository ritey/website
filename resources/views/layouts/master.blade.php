<!doctype html>
<!--Conditionals for IE8-9 Support-->
<!--[if IE]><html lang="en" class="ie"><![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>David Wright - London Based Laravel Web Developer</title>
	<meta name="description" content="David Wright PHP Laravel developer in London, UK. With over 10 years of web development experience and still plenty of passion for learning web technologies I'm currently pushing the limits with the Laravel framework, ReactJS and API's to build the best web applications and user experiences.">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="en-gb">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="Author" content="David Wright">
	<meta name="google-site-verification" content="1bRbzJGZc_yfk2L3Jbxehb9mZY4VslMLNaOvnnmX0L4">
	<meta name="verify-v1" content="z+lUQDHHTdBKwH6f7hkGCRCjZt8tOjBKZURr17QxTBc=">

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/images/favicon-57.jpg">
	<link rel="apple-touch-icon" href="assets/images/favicon-57.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon-72.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon-114.jpg">

	<!-- Bootstrap core CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Plugins -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/ionicons.min.css" rel="stylesheet">
	<link href="assets/css/simpletextrotator.css" rel="stylesheet">
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/superslides.css" rel="stylesheet">
	<link href="assets/css/vertical.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">

	<!-- Template core CSS -->
	<link href="assets/css/style.css" rel="stylesheet">

	<link href="{{ elixir('css/styles.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script type="text/javascript" src="{{ elixir('js/scripts.js') }}"></script>

</head>
<body>

	<!-- PRELOADER -->
	<div style="display: none;" class="page-loader">
		<div style="display: none;" class="loader">Loading...</div>
	</div>
	<!-- /PRELOADER -->

	<!-- OVERLAY MENU -->
	<div id="overlay-menu" class="overlay-menu">

		<a href="#" id="overlay-menu-hide" class="navigation-hide"><i class="ion-close-round"></i></a>

		<div class="overlay-menu-inner">
			<nav class="overlay-menu-nav">

				<ul id="nav">

					<li><a href="/">Home</a></li>

					<li><a href="http://mime.ritey.com" target="_blank" title="MIME Type Checker">MIME</a></li>

					<li><a href="http://addresses.ritey.com" target="_blank" title="Addresses - UK Postcode Checker">ADDRESSES</a></li>

				</ul>

			</nav>
		</div>

		<div class="overlay-navigation-footer">

			<div class="container">

				<div class="row">

					<div class="col-sm-12 text-center">
						<p class="copyright text-center m-b-0">&copy; <?php echo date('Y'); ?> <a href="#">ritey.com</a>, All Rights Reserved.</p>
					</div>

				</div>

			</div>

		</div>

	</div>
	<!-- /OVERLAY MENU -->

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- NAVIGATION -->
		<nav class="navbar navbar-custom navbar-light navbar-fixed-top">

			<div class="container">

				<div class="navbar-header">
					<!-- YOU LOGO HERE -->
					<a class="navbar-brand" href="/">
						<!-- IMAGE OR SIMPLE TEXT -->
						<img src="assets/images/logo_ritey.jpg" alt="" width="95">
					</a>
				</div>

				<!-- ICONS NAVBAR -->
				<ul id="icons-navbar" class="nav navbar-nav navbar-right">
					<li>
						<a href="index.html#" id="toggle-menu" class="show-overlay" title="Menu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
					</li>
				</ul>
				<!-- /ICONS NAVBAR -->

				<ul class="extra-navbar nav navbar-nav navbar-right">
					<li><a href="/" title="Home">Home</a></li>
					<li><a href="http://mime.ritey.com" target="_blank" title="MIME Type Checker">MIME</a></li>
					<li><a href="http://addresses.ritey.com" target="_blank" title="ADDRESSES - UK Postcode Checker">ADDRESSES</a></li>
				</ul>

			</div>

		</nav>
		<!-- /NAVIGATION -->

		@yield('content')

		<!-- FOOTER -->
		<footer class="module bg-light">

			<div class="container">

				<div class="row">

					<div class="col-sm-12">

						<ul class="social-text-links font-alt text-center m-b-20">
							<li><a href="http://github.com/ritey" target="_blank" title="Follow @ritey on Github David Wright PHP Laravel developer in Richmond Surrey London">Github</a></li>
							<li><a href="http://twitter.com/ritey" target="_blank" title="Follow @ritey on Twitter David Wright PHP Laravel developer in Richmond Surrey London">Twitter</a></li>
						</ul>

					</div>

				</div>

				<div class="row">

					<div class="col-sm-12">

						<p class="copyright text-center m-b-0">&copy; <?php echo date('Y'); ?> <a href="#">ritey.com</a>, All Rights Reserved.</p>

					</div>

				</div>

			</div>

		</footer>
		<!-- /FOOTER -->

	</div>
	<!-- /WRAPPER -->

	<!-- SCROLLTOP -->
	<div style="display: block;" class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"></i></a>
	</div>

	<!-- Javascript files -->
	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.superslides.min.js"></script>
	<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.simple-text-rotator.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/packery-mode.pkgd.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/jqBootstrapValidation.js"></script>
	<script src="assets/js/jquery.fitvids.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script><script src="http://maps.gstatic.com/maps-api-v3/api/js/21/4/main.js"></script>
	<script src="assets/js/gmaps.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/custom.js"></script>

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-418381-12']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<!-- Start of Woopra Code -->
	<script type="text/javascript">
	var woo_settings = {idle_timeout:'300000', domain:'ritey.com'};
	(function(){
	var wsc = document.createElement('script');
	wsc.src = document.location.protocol+'//static.woopra.com/js/woopra.js';
	wsc.type = 'text/javascript';
	wsc.async = true;
	var ssc = document.getElementsByTagName('script')[0];
	ssc.parentNode.insertBefore(wsc, ssc);
	})();
	</script>
	<!-- End of Woopra Code -->
</body>
</html>