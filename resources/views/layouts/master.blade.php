<!doctype html>
<!--Conditionals for IE8-9 Support-->
<!--[if IE]><html lang="en" class="ie"><![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">

    @yield('metas')

	<!--

		############################################### HELLO ######################################################

		Hi, thanks for checking the source. I've used a premium bootstrap template that I've implemented into
		Laravel blade templates using SASS, Gulp, Laravel's elixir and various Javascript plugins.

		If you want to see more examples of my coding abilities either contact me, Twitter @ritey or check out
		my Github profile: http://www.github.com/ritey

		Thanks

		Dave

		#############################################################################################################

	-->


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="Author" content="David Wright">
	<meta name="google-site-verification" content="QURomiXUt2oJSRATs9oVG3jxN7BIDTOmGI2TMJdZjq0" />
	<meta name="verify-v1" content="z+lUQDHHTdBKwH6f7hkGCRCjZt8tOjBKZURr17QxTBc=">

	<!-- Favicons -->
	<link rel="shortcut icon" href="/assets/images/favicon-57.jpg">
	<link rel="apple-touch-icon" href="/assets/images/favicon-57.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicon-72.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicon-114.jpg">

	<link href="{{ elixir('css/app.css') }}" rel="stylesheet">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>

	@yield('head')

</head>
<body>

	<div id="totop"></div>
	<!-- PRELOADER -->
	<div style="display: none;" class="page-loader">
		<div style="display: none;" class="loader">Loading...</div>
	</div>
	<!-- /PRELOADER -->

	<!-- OVERLAY MENU -->
	<div id="overlay-menu" class="overlay-menu">

		<a href="#" id="overlay-menu-hide" class="navigation-hide"><i class="ion-close-round"><span class="hidden">-</span></i></a>

		<div class="overlay-menu-inner">
			<nav class="overlay-menu-nav">

				<ul id="nav">

					<li><a href="/">Home</a></li>

					<li><a href="http://photos.ritey.com" target="_blank" title="FREE Hi Res Photos">FREE PHOTOS</a></li>
					<li><a href="https://electric-autos.co.uk" target="_blank" title="Electric Autos">Electric Autos</a></li>
					<li><a href="http://mime.ritey.com" target="_blank" title="MIME Type Checker">MIME</a></li>

					<li><a href="http://addresses.ritey.com" target="_blank" title="Addresses - UK Postcode Checker">ADDRESSES</a></li>

					<li><a href="{{ route('freelance-php-developer') }}" title="London based Laravel PHP Developer">Hire me</a></li>

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
						<img src="/assets/images/logo_ritey.jpg" alt="Ritey" width="95">
					</a>
				</div>

				<!-- ICONS NAVBAR -->
				<ul id="icons-navbar" class="nav navbar-nav navbar-right">
					<li>
						<a href="index.html#" id="toggle-menu" class="show-overlay" title="Menu">
							<span class="icon-bar"><span class="hidden">-</span></span>
							<span class="icon-bar"><span class="hidden">-</span></span>
							<span class="icon-bar"><span class="hidden">-</span></span>
						</a>
					</li>
				</ul>
				<!-- /ICONS NAVBAR -->

				<ul class="extra-navbar nav navbar-nav navbar-right">
					<li><a href="/" title="Visit the homepage">Home</a></li>
					<li><a href="https://electric-autos.co.uk" target="_blank" title="Electric Autos">Electric Autos</a></li>
					<li><a href="http://photos.ritey.com" target="_blank" title="FREE Hi Res Photos">FREE PHOTOS</a></li>
					<li><a href="http://mime.ritey.com" target="_blank" title="MIME Type Checker">MIME</a></li>
					<li><a href="http://addresses.ritey.com" target="_blank" title="ADDRESSES - UK Postcode Checker">ADDRESSES</a></li>

					<li><a href="{{ route('freelance-php-developer') }}" title="London based Laravel PHP Developer">Hire me</a></li>
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

						<p class="copyright text-center m-b-0">&copy; <?php echo date('Y'); ?> <a href="/">ritey.com</a>, All Rights Reserved.</p>
						<p class="copyright text-center m-b-0">I live in Surrey, work and develop in Richmond and London areas.</p>

					</div>

				</div>

			</div>

		</footer>
		<!-- /FOOTER -->

	</div>
	<!-- /WRAPPER -->

	<!-- SCROLLTOP -->
	<div style="display: block;" class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"><span class="hidden">-</span></i></a>
	</div>

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