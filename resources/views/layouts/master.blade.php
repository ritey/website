<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:url" content="{{ url()->to('/') }}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Ritey.com">
        <meta name="twitter:site" content="@ritey">
        <meta name="twitter:creator" content="@ritey">

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


	<meta name="Author" content="David Wright">
	<meta name="google-site-verification" content="QURomiXUt2oJSRATs9oVG3jxN7BIDTOmGI2TMJdZjq0" />
	<meta name="verify-v1" content="z+lUQDHHTdBKwH6f7hkGCRCjZt8tOjBKZURr17QxTBc=">

	<!-- Favicons -->
	<link rel="shortcut icon" href="/assets/images/favicon-57.jpg">
	<link rel="apple-touch-icon" href="/assets/images/favicon-57.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicon-72.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicon-114.jpg">

    <link rel="stylesheet" href="{{ mix("css/app.css") }}">

	@yield('head')

</head>
<body id="totop" itemscope itemtype="https://schema.org/WebPage">

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><img src="/assets/images/logo_ritey.jpg" alt="Ritey" width="95"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/" title="Visit the homepage">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('freelance-php-developer') }}" title="London based Laravel PHP Developer">Hire me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://coderstudios.com" title="London Laravel Coder Studios">Coder Studios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://photos.ritey.com" target="_blank" title="FREE Hi Res Photos">FREE Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://mime.ritey.com" target="_blank" title="MIME Type Checker">MIME Checker</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://addresses.ritey.com" target="_blank" title="ADDRESSES - UK Postcode Checker">UK Address Lookup</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /NAVIGATION -->

    @yield('content')

    <!-- FOOTER -->
    <footer class="pt-5 pb-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="list-inline list-unstyled text-center">
                        <li class="list-inline-item"><a href="http://github.com/ritey" target="_blank" title="Follow @ritey on Github David Wright PHP Laravel developer in Richmond Surrey London">Github</a></li>
                        <li class="list-inline-item"><a href="http://twitter.com/ritey" target="_blank" title="Follow @ritey on Twitter David Wright PHP Laravel developer in Richmond Surrey London">Twitter</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="copyright text-center m-b-0">&copy; <?php echo date('Y'); ?> <a href="/">ritey.com</a>, All Rights Reserved.</p>
                    <p class="copyright text-center m-b-0">I live in Surrey, work and develop in Richmond and London areas.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

	<!-- SCROLLTOP -->
	<div style="display: block;" class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"><span hidden>-</span></i></a>
	</div>

	<script src="{{ mix('js/app.js') }}"></script>

	<script>
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
	<script>
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