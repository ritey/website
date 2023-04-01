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
        <link rel="canonical" href="{{ url()->current() }}" />
        <link rel="alternate" hreflang="en" href="{{ url()->current() }}" />

    @yield('metas')

	<!--

		############################################### HELLO ######################################################

		Hi, thanks for checking the source. I've used a premium bootstrap template that I've implemented into
		Laravel blade templates using TailwindCSS, Vite and various Javascript plugins.

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
    <link rel="preload" href="{{ config('app.url') }}/assets/images/logo_ritey.jpg" as="image">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('head')

</head>
<body id="totop" itemscope itemtype="https://schema.org/WebPage">

    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex items-center gap-x-12">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">David Wright</span>
                    <img class="h-8 w-auto" src="/assets/images/logo_ritey.jpg" alt="Ritey">
                </a>
                <div class="hidden lg:flex lg:gap-x-12">

                    <a class="text-sm font-semibold leading-6 text-gray-900" href="/" title="Visit the homepage">Home</a>

                    <a class="text-sm font-semibold leading-6 text-gray-900" href="{{ route('freelance-php-developer') }}" title="London based Laravel PHP Developer">Hire me</a>

                    <a class="text-sm font-semibold leading-6 text-gray-900" target="_blank" href="https://coderstudios.com" title="London Laravel Coder Studios">Coder Studios</a>

                    <a class="text-sm font-semibold leading-6 text-gray-900" href="http://photos.ritey.com" target="_blank" title="FREE Hi Res Photos">FREE Photos</a>

                    <a class="text-sm font-semibold leading-6 text-gray-900" href="http://mime.ritey.com" target="_blank" title="MIME Type Checker">MIME Checker</a>

                    <a class="text-sm font-semibold leading-6 text-gray-900" href="http://addresses.ritey.com" target="_blank" title="ADDRESSES - UK Postcode Checker">UK Address Lookup</a>
                </div>
            </div>
            <div class="flex lg:hidden">
                <button type="button" id="menu-button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="hidden" id="mobile-menu" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
                <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">David Wright</span>
                            <img class="h-8 w-auto" src="/assets/images/logo_ritey.jpg" alt="Ritey">
                        </a>
                        <button type="button" id="menu-button-close" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" href="/" title="Visit the homepage">Home</a>

                                <a class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" href="{{ route('freelance-php-developer') }}" title="London based Laravel PHP Developer">Hire me</a>

                                <a class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" target="_blank" href="https://coderstudios.com" title="London Laravel Coder Studios">Coder Studios</a>

                                <a class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" href="http://photos.ritey.com" target="_blank" title="FREE Hi Res Photos">FREE Photos</a>

                                <a class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" href="http://mime.ritey.com" target="_blank" title="MIME Type Checker">MIME Checker</a>

                                <a class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" href="http://addresses.ritey.com" target="_blank" title="ADDRESSES - UK Postcode Checker">UK Address Lookup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- FOOTER -->
    <footer class="pt-5 pb-5 bg-gray-100">
        <div class="container mx-auto">
            <div class="text-center">
                <a href="https://github.com/ritey" target="_blank" title="Follow @ritey on Github David Wright PHP Laravel developer in Richmond Surrey London">Github</a></li>
                <a href="https://twitter.com/ritey" target="_blank" title="Follow @ritey on Twitter David Wright PHP Laravel developer in Richmond Surrey London">Twitter</a>
            </div>
            <div class="text-center">
                <p class="text-gray-400 text-center m-b-0">&copy; <?php echo date('Y'); ?> <a href="/">ritey.com</a>, All Rights Reserved.</p>
                <p class="text-gray-400 text-center m-b-0">I live in Surrey, work and develop in Richmond and London areas.</p>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

	<!-- SCROLLTOP -->
	<div style="display: block;" class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"><span hidden>-</span></i></a>
	</div>

	<script>

        var element = document.getElementById('mobile-menu');
        var trigger = document.getElementById('menu-button'); // or whatever triggers the toggle
        var trigger2 = document.getElementById('menu-button-close'); // or whatever triggers the toggle

        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            element.classList.toggle('hidden'); // or whatever your active class is
        });

        trigger2.addEventListener('click', function(e) {
            e.preventDefault();
            element.classList.toggle('hidden'); // or whatever your active class is
        });

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-418381-12']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>