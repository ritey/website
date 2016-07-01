var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

 var paths = {
    'jquery': './node_modules/jquery/',
	'bootstrap': './node_modules/bootstrap-sass/assets/'
 }

elixir(function(mix) {
    mix.sass('app.scss', 'public/css/', {
		includePaths: [
			paths.bootstrap + 'stylesheets/'
		]
    })

    .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')

    .copy('./resources/assets/images/**', 'public/assets/images')

    .styles([

    	'public/css/app.css',
    	'./resources/assets/css/font-awesome.min.css',
		'./resources/assets/css/ionicons.min.css',
		'./resources/assets/css/simpletextrotator.css',
		'./resources/assets/css/magnific-popup.css',
		'./resources/assets/css/owl.carousel.css',
		'./resources/assets/css/superslides.css',
		'./resources/assets/css/vertical.css',
		'./resources/assets/css/animate.css',
		'./resources/assets/css/style.css'

    ], 'public/css/app.css','./')


    .scripts([
        paths.jquery + "dist/jquery.min.js",
        paths.bootstrap + "javascripts/bootstrap.min.js",
        './resources/assets/js/jquery.superslides.min.js',
        './resources/assets/js/jquery.mb.YTPlayer.min.js',
        './resources/assets/js/jquery.magnific-popup.min.js',
        './resources/assets/js/owl.carousel.min.js',
        './resources/assets/js/jquery.simple-text-rotator.min.js',
        './resources/assets/js/imagesloaded.pkgd.js',
        './resources/assets/js/isotope.pkgd.min.js',
        './resources/assets/js/packery-mode.pkgd.min.js',
        './resources/assets/js/appear.js',
        './resources/assets/js/jquery.easing.1.3.js',
        './resources/assets/js/wow.min.js',
        './resources/assets/js/jqBootstrapValidation.js',
        './resources/assets/js/jquery.fitvids.js',
        './resources/assets/js/jquery.parallax-1.1.3.js',
        './resources/assets/js/smoothscroll.js',
        './resources/assets/js/contact.js',
        './resources/assets/js/custom.js',

    ], 'public/js/app.js','./')

    .version([

    	'css/app.css',

    	'js/app.js'

    ]);

});
